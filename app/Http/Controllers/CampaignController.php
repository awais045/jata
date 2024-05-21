<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignProductAssignment;
use App\Models\FaceBookPost;
use App\Models\Product;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Http\Request;
use Auth;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CampaignController extends Controller
{
    use FaceBookSdkTraits;
    private $api;
    protected $fb;
    protected $fbNew;
    protected $fbLatest;
    protected $accessToken;
    protected $businessId;
    protected $pageID;

    public function __construct(Facebook $fb)
    {
        $this->fb = new Facebook(config('facebook'));
        $this->fbLatest = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v19.0',
        ]);
        $this->businessId = env('BUSINESS_ID');
        $this->middleware(function ($request, $next) use ($fb) {
            $this->accessToken = $this->getSessionToken();
            if(empty($this->accessToken)){
                return redirect('select_page_first');
            }
            $this->pageID = $this->getPageID();
            $fb->setDefaultAccessToken($this->accessToken);
            $this->api = $fb;
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::where('user_id', Auth::user()->id)->where('page_id',$this->getSessionPageID()) ->orderBy('id', 'desc')->paginate(10);
        return view('users.campaigns.index', ['campaigns' => $campaigns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $campaign = new Campaign();
        return view('users.campaigns.create', compact('campaign'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'campaign_name' => 'required|string|max:255',
            'campaign_time' => 'required|string|max:255',
            // 'campaign_type' => 'required|string|max:255',
            'social_type' => 'required|string|max:255',
            'fil' => 'nullable|string',
            // 'campaign' => 'required|string|max:255',
            'file' => 'required|file|mimes:jpeg,png,gif,mp4|max:10240', // Adjust max file size as needed (in KB)
        ]);

        $newRecord = Campaign::create($request->all());
        $campaign_id = $newRecord->id;
        $this->saveUploadVideOrImage($request, $campaign_id);

        return back()
            ->with('success', 'Campaign has been created successfully.');
        // ->with('image', $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $campaign = Campaign::find($id);
        $userProducts = Auth::user()->products()->pluck('name', 'id')->toArray();
        return view('users.posts.create', compact('campaign', 'userProducts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $campaign = Campaign::find($id);
        return view('users.campaigns.create', compact('campaign'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campaign = Campaign::find($id);
        $campaign->delete();
        return redirect()->back()->with('success', 'Campaign deleted successfully!');
    }
    public function postListing(Request $request)
    {
        $posts = FaceBookPost::where('user_id', Auth::user()->id)->where('page_id',$this->getSessionPageID())->orderBy('type')->orderBy('id', 'desc')->get();
        return view('users.post-templates', compact('posts'));
    }

    public function uploadVideOrImage(string $campaign_id)
    {
        $campaign = Campaign::find($campaign_id);
        return view('users.campaigns.media_upload', compact('campaign', 'campaign_id'));
    }
    public function saveUploadVideOrImage($request, string $campaign_id)
    {
        // $request->validate([
        //     'file' => 'required|file|mimes:jpeg,png,gif,mp4|max:10240', // Adjust max file size as needed (in KB)
        // ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $fileName);
            $filePath = url('uploads/' . $fileName);
        }
        Campaign::where('id', $campaign_id)->update([
            'image' => $filePath,
            'page_id'=> $this->getSessionPageID()
        ]);
        $fb = new Facebook(config('facebook'));
        $accessToken = $this->accessToken;
        $imageData = [
            // 'source' => $filePath,
            // 'url' => 'https://img1.hscicdn.com/image/upload/f_auto,t_ds_w_1280,q_80/lsci/db/PICTURES/CMS/379500/379521.jpg',
            // 'url' => url('uploads/').$fileName,
            'url' => $filePath,
            'caption' => $request->campaign_name,
        ];
        $page_id = $this->pageID;
        try {
            $imageExtensions = [
                'jpg',
                'jpeg',
                'png',
                'gif',
                'bmp',
                'tiff',
                'svg',
                // Add more extensions if needed
            ];
            if (in_array($extension, $imageExtensions)) {
                $response = $fb->post('/' . $page_id . '/photos', $imageData, $accessToken);
                $graphNode = $response->getGraphNode();
                $graph_node_id = $graphNode->getField('id');
                $postId = $graphNode->getField('post_id');
                FaceBookPost::insert([
                    'user_id' => Auth::user()->id,
                    // 'post_id' => $postId,
                    // 'graph_node_id' => $graph_node_id,
                    'graph_node_id' => $postId,
                    'post_id' => $graph_node_id,
                    'image' => $filePath,
                    'details' => $request->campaign_name,
                    'extension' => $extension,
                    'campaign_id' => $campaign_id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'page_id'=> $this->getSessionPageID()
                ]);
            }

            $videoExtensions = [
                'mp4',
                'avi',
                'mov',
                'mkv',
                'wmv',
                'flv',
                'webm',
                'mpeg',
                'mpg',
                // Add more extensions if needed
            ];
            if (in_array($extension, $videoExtensions)) {
                // Upload video
                $data = [
                    'title' =>  $request->campaign_name,
                    'description' =>  $request->campaign_name,
                    'source' => $fb->videoToUpload('uploads/' . $fileName),
                ];
                $response = $fb->post($page_id . '/videos', $data, $accessToken);
                $videoId = $response->getGraphNode()['id'];

                // echo 'Video uploaded. ID: ' . $videoId;
                FaceBookPost::insert([
                    'user_id' => Auth::user()->id,
                    'post_id' => $videoId,
                    'graph_node_id' => $videoId,
                    'image' => $fileName,
                    'details' => $request->campaign_name,
                    'extension' => $extension,
                    'campaign_id' => $campaign_id,
                    'created_at' => date('Y-m-d H:i:s'),
                    'page_id'=> $this->getSessionPageID()
                ]);
            }
            return response()->json(['success' => 'Created post: ' ], 200);
            // return back()->with('success', 'Post has been Uploaded successfully.');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            dd( 'Graph API error: ' . $e);
            // Graph API returned an error
            return response()->json(['error' => 'Graph API error: ' . $e->getMessage()], 500);
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            dd('Facebook SDK error: '.$e);
            // SDK returned an error
            return response()->json(['error' => 'Facebook SDK error: ' . $e->getMessage()], 500);
        } catch (\Exception $e) {
            // Other unexpected errors
            dd($e);
            return response()->json(['error' => 'Unexpected error: ' . $e . $e->getLine()], 500);
        }
    }

    public function liveVideoCreate(Request $request)
    {
        // $this->testFunction();
        $products = Product::where('user_id', Auth::user()->id)->get();
        $campaign = new Campaign();
        return view('users.campaigns.createLive', compact('campaign', 'products'));
    }

    public function liveVideoStreamWithCataLog(Request $request)
    {
        $request->validate([
            'products.*' => 'required',
            'name' => 'required|string|max:255',
            'campaign_name' => 'required|string|max:255',
            'campaign_time' => 'required|string|max:255',
            'social_type' => 'required|string|max:255',
            'fil' => 'nullable|string',
            'file' => 'required|file|mimes:mp4',
        ]);
        $newRecord = Campaign::create($request->all());
        $campaign_id = $newRecord->id;
        $result = $this->liveVideoUpload($request, $campaign_id);
        return back()
            ->with('success', 'Live Video Campaign has been created successfully.');
    }

    public function liveVideoUpload($request, string $campaign_id)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $file->move(public_path('uploads'), $fileName);
            $filePath = url('uploads/' . $fileName);
        }
        // dd($filePath);
        $user_id = Auth::user()->id;
        $products = $request->products;
        $campaign = Campaign::find($campaign_id);
        // if ($campaign->catalog_id) {
        //     $cataLogId = $campaign->catalog_id;
        // } else {
        //     $cataLogId = $this->createCataLog($campaign, $this->businessId, $this->accessToken);
        //     dd($cataLogId , $this->accessToken);
        // }
        if ($products) {

            // Campaign::where('id', $campaign_id)->update([
            //     'catalog_id' => $cataLogId
            // ]);

            foreach ($products as $product_id) {

                // $result = [];
                // if ($product_id) {
                //     $productDetails = Product::find($product_id);
                //     $result = $this->createFBProductForCatalogId($productDetails, $cataLogId, Auth::user()->id, $this->fb, $this->accessToken);
                // }
                CampaignProductAssignment::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'campaign_id' => $campaign_id,
                    // 'result' => json_encode($result)
                ]);
            }
        }

        // sleep(7);
        // $products_data = $this->fbNew->get("/" . $cataLogId . "/products", $this->accessToken);
        // $products = $products_data->getGraphEdge()->asArray();
        // // Create a list of product item IDs
        // $product_item_ids = [];
        // if (isset($products['data'])) {
        //     foreach ($products['data'] as $product) {
        //         $product_item_ids[] = $product['id'];
        //     }
        // }

        try {
            $response = $this->fb->post("/" . $this->pageID . "/live_videos", [
                'access_token' => $this->accessToken,
                'status' => 'LIVE_NOW',
                'title' => $campaign->name,
                'description' => $campaign->campaign_name,
                // 'product_items'=>$product_item_ids,
                'source' => $this->fb->videoToUpload('uploads/' . $fileName),
                // 'source'=>$filePath,
            ]);

            $graphNode = $response->getGraphNode();
            $stream_url = $graphNode->getField('stream_url');
            $streamID = $graphNode->getField('id');
            if ($stream_url) {
                // echo "Live video stream started successfully.<br>";
                // echo "Stream URL: {$stream_url}<br>";
                Campaign::where('id', $campaign_id)->update([
                    'image' => $filePath,
                    'streamID' => $streamID,
                    'stream_url' => $stream_url,
                    'page_id'=> $this->getSessionPageID()
                    // 'product_item_ids' => json_encode($product_item_ids)
                ]);

                FaceBookPost::insert([
                    'user_id' => Auth::user()->id,
                    'post_id' => $streamID,
                    'graph_node_id' => $stream_url,
                    'image' => $filePath,
                    'details' => $campaign->campaign_name,
                    'extension' => $extension,
                    'campaign_id' => $campaign_id,
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
            } else {
            }
            return true;
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            dd($this->pageID,  $this->accessToken , $e);
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            dd($this->pageID,  $this->accessToken , $e);
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }


    public function testFunction()
    {
        $cataLogId = 762120629346460;
        $products_data = $this->fbLatest->get("/" . $cataLogId . "/products", $this->accessToken);
        $products = $products_data->getGraphEdge()->asArray();
        $product_item_ids = [];
        foreach ($products as $product) {
            $product_item_ids[] = $product['id'];
        }
        // Create live video broadcast
        try {
            $response = $this->fbLatest->post("/" . $this->pageID . "/live_videos", [
                'access_token' => $this->accessToken,
                'status' => 'LIVE_NOW',
                'title' => 'testtsss',
                'description' => 'asdsadasdadasdadadad',
                'product_items' => array('25252395334406077'),
                // 'product_items' => [7262487020536604]
                // [
                //         array(
                //             'id' => "7262487020536604",
                //             'retailer_id' => "7262487020536604",
                //             'product_id' => "7262487020536604",
                //             'position' => array(
                //                 'x' => 0.1,
                //                 'y' => 0.1
                //             ),
                //             'start_time_offset_ms' => 0,
                //             'end_time_offset_ms' => 60000
                //         ),
                // ]
            ]);

            $graphNode = $response->getGraphNode();
            $stream_url = $graphNode->getField('stream_url');
            $streamID = $graphNode->getField('id');

            dd($graphNode , $stream_url);
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            dd($e);
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e);
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }

        dd('gete');
        die();
        exit;
        $fb = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v12.0',
            'default_access_token' => $this->accessToken
        ]);

        // Send a private message
        try {
            $response = $fb->post(
                '/772367874838776_7481396998565931/messages',
                array(
                    'message' => 'Your private message here',
                ),
                $this->accessToken
            );
            $graphNode = $response->getGraphNode();
            echo 'Message ID: ' . $graphNode['id'];
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            dd($e);
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e);
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
        die();


        // Set the default access token for the Facebook object
        // $this->fbNew->setDefaultAccessToken($this->accessToken);

        // // Recipient PSID (Page-Scoped ID) to whom you want to send the message
        // $recipient_psid = 7420888131308581;

        // // Message you want to send
        // $message = ['text' => 'Hello, this is a test message!'];

        // try {
        //     // Send the message using the send API
        //     $response = $this->fbNew->post("/".$this->pageID."/messages", ['recipient' => ['id' => $recipient_psid], 'message' => $message], $this->accessToken);

        //     // Get the response body
        //     $body = $response->getBody();

        //     // Process the response as needed
        //     echo "Message sent successfully!";
        // } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        //     // Graph API returned an error
        //     return response()->json(['error' => 'Graph API error: ' . $e->getMessage()], 500);
        // } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        //     // SDK returned an error
        //     return response()->json(['error' => 'Facebook SDK error: ' . $e->getMessage()], 500);
        // } catch (\Exception $e) {
        //     // Other unexpected errors
        //     return response()->json(['error' => 'Unexpected error: ' . $e . $e->getLine()], 500);
        // }
        // die();

        // $campaign = Campaign::find(22);
        // $cataLogId = 325344960197106;
        // $products_data = $this->fbNew->get("/" . $cataLogId . "/products", $this->accessToken);
        // $products = $products_data->getGraphEdge()->asArray();
        // // Create a list of product item IDs
        // $product_item_ids = [];
        // foreach ($products as $product) {
        //     $product_item_ids[] = $product['id'];
        // }
        // sleep(1);
        // try {
        //     $response = $this->fbNew->post("/" . $this->pageID . "/live_videos", [
        //         'access_token' => $this->accessToken,
        //         'status' => 'LIVE_NOW',
        //         'title' => $campaign->name,
        //         'description' => $campaign->campaign_name,
        //         'product_items' => $product_item_ids,
        //         // 'source' => $this->fb->videoToUpload('uploads/' . $fileName),
        //     ], $this->accessToken);
        //     sleep(1);
        //     $graphNode = $response->getGraphNode();
        //     $stream_url = $graphNode->getField('stream_url');
        //     $streamID = $graphNode->getField('id');
        //     if ($stream_url) {
        //         echo "Live video stream started successfully.<br>";
        //         echo "Stream URL: {$stream_url}<br>";
        //     } else {
        //     }
        // } catch (\Facebook\Exceptions\FacebookResponseException $e) {
        //     dd($e);
        //     echo 'Graph returned an error: ' . $e->getMessage();
        // } catch (\Facebook\Exceptions\FacebookSDKException $e) {
        //     dd($e);
        //     echo 'Facebook SDK returned an error: ' . $e->getMessage();
        // }
        // exit;


    }
}
