<?php

namespace App\Console\Commands;

use App\Models\FaceBookPost;
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
        $postsComments = DB::table('facebook_posts_comments')->where('is_process',0)->get();
        foreach ($postsComments as $postsComment) {
            
            $response = $this->replyToComment( $this->fb, $this->accessToken , $postsComment->post_id , $postsComment->comment_id , $postsComment->from_id  , $this->pageID);
        }
    }
}
