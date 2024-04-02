<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\FaceBookPost;
use Illuminate\Http\Request;
use Auth;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Support\Facades\DB;

class CampaignController extends Controller
{
    private $api;

    public function __construct(Facebook $fb)
    {
        $this->middleware(function ($request, $next) use ($fb) {
            $fb->setDefaultAccessToken(env('ACCESS_TOKEN'));
            $this->api = $fb;
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campaigns = Campaign::where('user_id' ,Auth::user()->id)->orderBy('id','desc')->paginate(10);
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
            'campaign_type' => 'required|string|max:255',
            'social_type' => 'required|string|max:255',
            'fil' => 'nullable|string',
            'campaign' => 'required|string|max:255',
        ]);

        Campaign::create($request->all());
        return back()
            ->with('success', 'Campaign has been created successfully.');
        // ->with('image', $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $posts = FaceBookPost::where('user_id',Auth::user()->id)->get();
        return view('users.post-templates', compact('posts'));
    }

    public function uploadVideOrImage(string $campaign_id)
    {
        $campaign = Campaign::find($campaign_id);
        return view('users.campaigns.media_upload', compact('campaign','campaign_id'));
    }
    public function saveUploadVideOrImage( Request $request , string $campaign_id)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpeg,png,gif,mp4|max:10240', // Adjust max file size as needed (in KB)
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();

            $file->move(public_path('uploads'), $fileName);
            $filePath = url('uploads/' . $fileName);
        }

        $fb = new Facebook(config('facebook'));
        $accessToken = env('ACCESS_TOKEN');
        $imageData = [
            // 'source' => $filePath,
            // 'url' => 'https://fastly.picsum.photos/id/0/5000/3333.jpg?hmac=_j6ghY5fCfSD6tvtcV74zXivkJSPIfR9B8w34XeQmvU',
            'url' => url('uploads/').$fileName,
            'caption' => $request->details,
        ];
        $page_id = env('PAGE_ID');
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
            if(in_array($extension , $imageExtensions)){
                $response = $fb->post('/'.$page_id.'/photos', $imageData, $accessToken);
                $graphNode = $response->getGraphNode();
                $graph_node_id = $graphNode->getField('id');
                $postId = $graphNode->getField('post_id');
                FaceBookPost::insert([
                    'user_id'=> Auth::user()->id,
                    'post_id'=>$postId,
                    'graph_node_id'=>$graph_node_id,
                    'image'=>$filePath,
                    'details'=>$request->details,
                    'extension'=>$extension,
                    'campaign_id'=>$campaign_id,
                    'created_at'=>date('Y-m-d H:i:s'),
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
            if(in_array($extension , $videoExtensions)){
                // Upload video
                $data = [
                    'title' =>  $request->details,
                    'description' =>  $request->details,
                    'source' => $fb->videoToUpload('uploads/'.$fileName),
                ];
                $response = $fb->post($page_id.'/videos', $data, $accessToken);
                $videoId = $response->getGraphNode()['id'];

                echo 'Video uploaded. ID: ' . $videoId;
                FaceBookPost::insert([
                    'user_id'=> Auth::user()->id,
                    'post_id'=>$videoId,
                    'graph_node_id'=>$videoId,
                    'image'=>$fileName,
                    'details'=>$request->details,
                    'extension'=>$extension,
                    'campaign_id'=>$campaign_id,
                    'created_at'=>date('Y-m-d H:i:s'),
                ]);
            }

            return back()->with('success', 'Post has been Uploaded successfully.');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // Graph API returned an error
            return response()->json(['error' => 'Graph API error: ' . $e->getMessage()], 500);
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // SDK returned an error
            return response()->json(['error' => 'Facebook SDK error: ' . $e->getMessage()], 500);
        }catch (\Exception $e) {
            // Other unexpected errors
            return response()->json(['error' => 'Unexpected error: ' . $e . $e->getLine()], 500);
        }
    }

}
