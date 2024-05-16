<?php

namespace App\Console\Commands;

use App\Models\FaceBookPost;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Console\Command;
use Facebook\Facebook;
use DB;


class getPagePosts extends Command
{
    use FaceBookSdkTraits;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'page:posts';

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
        $posts = $this->getPosts($this->fbNew, $this->accessToken, $this->pageID);
        if ($posts) {
            foreach ($posts as $post) {
                $media_url ='';
                $attachments = isset($post['attachments']) ? $post['attachments'] : null;
                if (isset($post['attachments'])) {
                    $attachments = $post['attachments'];
                    // Check if media exists
                    if (isset($attachments['data'][0]['media'])) {
                        $media_url = $attachments['data'][0]['media']['image']['src'];
                    }
                }
                if(isset($post['attachments']['data'][0]['title'])){
                    $title = $post['attachments']['data'][0]['title'];
                }elseif(isset($post['message'])){
                    $title = $post['message'];
                }else{
                    $title = 'No title set';
                }
                $arrayToSaveOrUpdate = [
                    'user_id' => 2,
                    // 'post_id' => $post['attachments']['data'][0]['target']['id'],
                    // 'campaign_id' => 16,
                    'details' =>$title ,
                    'live_image_url'=>$media_url,
                    'post_url' =>$post['attachments']['data'][0]['url'],
                    'created_time' => $post['created_time'],
                    'type' => $post['attachments']['data'][0]['type'],
                ];
                $from_id = isset($post['from']['id']) ? $post['from']['id'] : 'Unknown';
                $from_name = isset($post['from']['name']) ? $post['from']['name'] : 'Anonymous';

                $arrayToSaveOrUpdate['from_id'] = $from_id;
                $arrayToSaveOrUpdate['from_name'] = $from_name;

                $matchThese = ['user_id'=> 2 ,  'post_id' => $post['attachments']['data'][0]['target']['id'] ];
                $save_data = FaceBookPost::updateOrInsert($matchThese,$arrayToSaveOrUpdate);
            }
        }
    }
}
