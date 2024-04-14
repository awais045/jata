<?php

namespace App\Console\Commands;

use App\Models\Campaign;
use App\Models\FaceBookPost;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Console\Command;
use Facebook\Facebook;
use DB;


class LiveVideBroadCast extends Command
{
    use FaceBookSdkTraits;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go:live {campaign_id}';

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
        $campaignId = $this->argument('campaign_id');
        if($campaignId){
            $campaigns  = Campaign::where('id',$campaignId)->first();
        }else{
            $campaigns  = Campaign::where('is_live_processed', '0')->where('social_type', 'live')->whereNotNull('stream_url')->first();
        }
        $stream_url = $campaigns->stream_url;
        $video = $campaigns->image;
        $videoRela =str_replace('app\Console\Commandshttps://localhost/jata_laravel_git/','',__DIR__.$video);

        $command  = 'ffmpeg -re -y -i '.$videoRela.' -c:a copy -ac 1 -ar 44100 -b:a 96k -vcodec libx264 -pix_fmt yuv420p -tune zerolatency -f flv -maxrate 2000k -preset veryfast "'.$stream_url.'"';
        $output = shell_exec($command);
        return $output;
    }
}
