<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Campaign;
use App\Models\CampaignProductAssignment;
use App\Models\FaceBookPost;
use App\Models\Product;
use App\Traits\FaceBookSdkTraits;
use Auth;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Support\Facades\DB;

class CommentReplyWebhookController extends Controller
{
    use FaceBookSdkTraits;
    private $api;
    protected $fb;
    protected $fbNew;
    protected $accessToken;
    protected $businessId;
    protected $pageID;
    public function __construct(Facebook $fb)
    {
        $this->fb = new Facebook(config('facebook'));
        $this->fbNew = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v12.0',
        ]);

        $this->middleware(function ($request, $next) use ($fb) {
            $this->accessToken = $this->getSessionToken();

            $this->pageID = $this->getPageID();
            $this->businessId = env('BUSINESS_ID');

            $fb->setDefaultAccessToken($this->accessToken);
            $this->api = $fb;
            return $next($request);
        });
    }

    public function handleWebhook(Request $request)
    {
        // Verify the request if needed (e.g., validate the signature)
//EAAUpognFdwcBO9pO4D4NXhIbMsQpS0Vl55M5P1u1viW5dZB8avy9c8ZCGjq09bTFZBEuInssI5dVflFVoMc7LQudZBZAhdif3ZC0NWZCd6x3Hd3hZA7I73dDUePpoy7fqTOsCvchwSGU3ADA44HlYPyuFR6NE5ULZBtcZCUNouXvzIWZCkyUSV0S5dv9Fg9QboK98mxjShPqYxy0tI2agcn
        // Process the webhook data
        //137873971954043
        $payload = $request->all();
        \Log::info('Webhook Received', ['payload' => $payload]);
        // Verify the webhook token to ensure it's a valid request from Facebook
        $verify_token = 'your_webhook_verification_token';

        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            // Handle the verification request from Facebook
            if ($_GET['hub_mode'] === 'subscribe' && $_GET['hub_verify_token'] === $verify_token) {
                echo $_GET['hub_challenge'];
                exit;
            } else {
                http_response_code(403);
                exit;
            }
        }

        // Parse the JSON payload sent from Facebook Messenger
        $input = json_decode(file_get_contents('php://input'), true);

        // Loop through each entry (should contain only one entry)
        // foreach ($input['entry'] as $entry) {
        //     // Loop through each messaging event
        //     foreach ($entry['changes'] as $change) {
        //         // Check if the change is a comment on a post
        //         if ($change['field'] === 'comments' && isset($change['value']['item']) && $change['value']['item'] === 'comment') {
        //             // Extract the comment ID and commenter ID
        //             $comment_id = $change['value']['comment_id'];
        //             $commenter_id = $change['value']['from']['id'];

        //             // Send auto-reply message to commenter
        //             $this->sendAutoReplyMessage($commenter_id);
        //         }
        //     }
        // }


        // Return a response
        // return response()->json(['message' => 'Webhook received'], 200);
    }

    public function sendAutoReplyMessage($recipient_id)
    {
        // Define your auto-reply message
        $reply_message = "Thanks for your comment! This is an auto-reply from our bot.";

        // Set up the message data
        $message_data = [
            'recipient' => ['id' => $recipient_id],
            'message' => ['text' => $reply_message],
        ];

        try {
            // Send the auto-reply message using the Facebook Send API
            $response = $this->fb->post('/'.$this->pageID.'/messages', $message_data, $this->accessToken);

            // Get the response body
            $body = $response->getBody();

            // Process the response as needed
            echo "Auto-reply message sent successfully!";
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }
}
