<?php

namespace App\Console\Commands;

use App\Models\FaceBookPost;
use App\Models\FaceBookPostComments;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Console\Command;
use Facebook\Facebook;
use DB;

class SendReplyToComments extends Command
{
    use FaceBookSdkTraits;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reply:comments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    private $api;
    protected $fb;
    protected $fbNew;
    protected $accessToken;
    protected $businessId;
    protected $pageID;
    public function __construct()
    {
        parent::__construct();
        $this->fb = new Facebook(config('facebook'));
        $this->fbNew = new Facebook([
            'app_id' => env('FACEBOOK_APP_ID'),
            'app_secret' => env('FACEBOOK_APP_SECRET'),
            'default_graph_version' => 'v19.0',
        ]);
        $this->accessToken = env('ACCESS_TOKEN');
        $this->businessId = env('BUSINESS_ID');
        $this->pageID = env('PAGE_ID');
    }
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $postsComments = FaceBookPostComments::where('is_process',0)->where('comment_reply_post','0')->get();
        // $postsComments = FaceBookPostComments::where('id',108)->get();
        foreach ($postsComments as $postsComment) {

            // Yes please 1 piece
            $comment_text = $postsComment->comment_text;
            $quantity = $this->extractQuantity($comment_text);
            if ($quantity > 0) {

                    $orderId = DB::table('orders')->insertGetId([
                        'comment_id'=>$postsComment->id,
                        'campaign_id'=>$postsComment->campaign_id,
                        'post_id'=>$postsComment->post_id ,
                        'qty'=>$quantity,
                        'user_id'=>$postsComment->user_id,
                        'created_at'=>date('Y-m-d H:i:s')
                    ]);
                // echo "Order quantity:  piece(s)";
                $textIncluded = "Your order for " . $quantity . "x Hair trimmer has been registered, and your number is ".$orderId.".";
            } else {
                $textIncluded ="";
            }
            $from_name = $postsComment->from_name;

            $message = 'Hi '.$from_name.'. Thank you for your interest 😊.'.$textIncluded.'If you want more, you can simply make a new comment with the desired additional number and wait for a reply ';
            $response = $this->commentReply( $this->fb, $this->accessToken , $postsComment->post_id , $postsComment->comment_id , $postsComment->from_id  , $this->pageID , $message );
            if($response){
                FaceBookPostComments::where('id', $postsComment->id)->update([
                    'comment_reply_post'=>'1'
                ]);
                DB::table('facebook_posts_comments_replies')->insert([
                    'post_comment_id'=>$postsComment->id,
                    'campaign_id'=>$postsComment->campaign_id,
                    'new_comment_id'=>$response,
                    'comment_id'=>$postsComment->comment_id ,
                    'post_id'=>$postsComment->post_id ,
                    'comment_text'=>$message ,
                ]);

            }
        }
    }

    function extractQuantity($comment) {
        // Check if the comment starts with "Yes please"
        if (strpos($comment, "Yes please") === 0) {
            // Extract the quantity
            $pieces = explode(" ", $comment);
            if (count($pieces) > 2 && is_numeric($pieces[2])) {
                return intval($pieces[2]); // Return the quantity as an integer
            }
        }
        return 0; // If no quantity found or format is incorrect, return 0
    }
}
