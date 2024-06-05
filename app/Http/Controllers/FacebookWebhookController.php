<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facebook\Facebook;
use App\Models\Campaign;
use App\Models\CampaignProductAssignment;
use App\Models\FaceBookPost;
use App\Models\Product;
use App\Traits\FaceBookSdkTraits;
use Auth;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FacebookWebhookController extends Controller
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
            // $this->businessId = env('BUSINESS_ID');
            // $this->middleware(function ($request, $next) use ($fb) {
            //     $this->accessToken = $this->getSessionToken();
            //     if(empty($this->accessToken)){
            //         return redirect('select_page_first');
            //     }
            //     $this->pageID = $this->getPageID();
            //     $fb->setDefaultAccessToken($this->accessToken);
            //     $this->api = $fb;
            //     return $next($request);
            // });
    }
    public function verify(Request $request)
    {
        $hub_verify_token = 'your-verify-token';
        if ($request->input('hub_mode') === 'subscribe' && $request->input('hub_verify_token') === $hub_verify_token) {
            return response($request->input('hub_challenge'), 200);
        }
        return response('Invalid verification token', 403);
    }

    public function handle(Request $request)
    {
        $data = $request->all();
        // Handle the webhook event
        if (!empty($data['entry'][0]['changes'])) {
            foreach ($data['entry'][0]['changes'] as $change) {
                if ($change['field'] === 'comments') {
                    $commentId = $change['value']['comment_id'];
                    $postId = $change['value']['post_id'];
                    // Fetch the comment details using Graph API
                    // $fb = new Facebook([
                    //     'app_id' => env('FACEBOOK_APP_ID'),
                    //     'app_secret' => env('FACEBOOK_APP_SECRET'),
                    //     'default_graph_version' => 'v12.0',
                    // ]);
                    try {
                        $response = $this->fbLatest->get("/$commentId", env('FACEBOOK_PAGE_ACCESS_TOKEN'));
                        $comment = $response->getGraphNode();
                        // Process the comment as needed
                    } catch (\Facebook\Exceptions\FacebookResponseException $e) {
                        // Handle response error
                        error_log('Graph API error: ' . $e->getMessage());
                    } catch (\Facebook\Exceptions\FacebookSDKException $e) {
                        // Handle SDK error
                        error_log('Facebook SDK error: ' . $e->getMessage());
                    }
                }
            }
        }
        return response('Event Received', 200);
    }
}
