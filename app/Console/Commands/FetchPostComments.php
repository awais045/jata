<?php

namespace App\Console\Commands;

use App\Models\FaceBookPost;
use App\Models\FaceBookPostComments;
use App\Models\Pages;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Console\Command;
use Facebook\Facebook;
use DB;

class FetchPostComments extends Command
{
    use FaceBookSdkTraits;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch:comments';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
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
            'default_graph_version' => 'v12.0',
        ]);
        // $this->accessToken = env('ACCESS_TOKEN');
        $this->businessId = env('BUSINESS_ID');
        $this->pageID = env('PAGE_ID');
    }


    public function handle()
    {
        $getPagesWithToken = Pages::whereNotNull('long_page_access_token')->pluck('long_page_access_token','id');
        // $page_id_get = Pages::whereNotNull('long_page_access_token')->pluck('from_id','id');

        $posts = FaceBookPost::whereNotNull('page_id')->get();
        // $posts = FaceBookPost::where('id', 6)->get();
        foreach ($posts as $post) {
            $getToken =$getPagesWithToken[$post->page_id];
            // $page_id =$page_id_get[$post->page_id];
            $postsComments = $this->getComments($this->fbNew, $getToken, $post->post_id);
            if ($postsComments) {
                foreach ($postsComments as $comment) {
                    // if($comment['id'] =='405424445528187_384964994509897'){
                    //     dd($comment);
                    // }
                    $media_url ='';
                    $attachment = isset($comment['attachment']) ? $comment['attachment'] : null;
                    if ($attachment) {
                        $media = isset($attachment['media']) ? $attachment['media'] : null;
                        if ($media && isset($media['image'])) {
                            $media_url = $media['image']['src'];
                        }
                    }
                    $arrayToSaveOrUpdate = [
                        'user_id' => $post->user_id,
                        'post_id' => $post->post_id,
                        'campaign_id' => $post->campaign_id,
                        'comment_id' => $comment['id'],
                        'comment_text' => $comment['message'],
                        'media_url'=>$media_url,
                        'comment_created_at' => $comment['created_time'],
                    ];
                    $from_id = isset($comment['from']['id']) ? $comment['from']['id'] : 'Unknown';
                    $from_name = isset($comment['from']['name']) ? $comment['from']['name'] : 'Anonymous';

                    $arrayToSaveOrUpdate['from_id'] = $from_id;
                    $arrayToSaveOrUpdate['from_name'] = $from_name;

                    $matchThese = ['user_id'=> $post->user_id ,  'post_id' => $post->post_id,'comment_id' => $comment['id'] ];
                    $save_data = FaceBookPostComments::updateOrInsert($matchThese,$arrayToSaveOrUpdate);
                }
            }
        }
    }
}
