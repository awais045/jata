<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignProductAssignment;
use App\Models\FaceBookPost;
use App\Models\FaceBookPostComments;
use App\Models\Pages;
use App\Models\Product;
use App\Models\User;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Http\Request;
use Auth;
use Facebook\Facebook;
use Illuminate\Support\Facades\Artisan;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use DB;
use Illuminate\Support\Facades\Session;

class TokenManagementController extends Controller
{
    use FaceBookSdkTraits;
    protected $fb;
    protected $accessToken;
    protected $businessId;
    protected $pageID;
    public function __construct()
    {
        $this->fb = new Facebook(config('facebook'));
        $this->accessToken = env('ACCESS_TOKEN');
        $this->businessId = env('BUSINESS_ID');
        $this->pageID = env('PAGE_ID');
    }

    public function save_selected_page_token(Request $request){

        $selectedValue = $request->selectedValue;
        session(['user_page_selected' => $selectedValue]);
        Session::put('user_page_selected', $selectedValue);

    }

    public function generateLongToken(Request $request)
    {
        dd($this->getBusinessID(''));
        exit;
        if (empty(Auth::user()->long_access_token) || Auth::user()->long_token == 'N') {
            $short_time_access_token = Auth::user()->short_time_access_token;
            $returnToken = $this->getLongLiveToken($short_time_access_token);
            if ($returnToken) {
                User::where('id', Auth::user()->id)->update([
                    'long_token' => 'Y',
                    'long_access_token' => $returnToken
                ]);
                sleep(2);
                return $this->getPages($returnToken);
            }
            User::where('id', Auth::user()->id)->update([
                'long_token' => 'N'
            ]);
        } else {
            $this->getPages(Auth::user()->long_access_token);
        }
        sleep(5);
        $this->getPagesPosts();
        sleep(5);
        $this->getPostComments();
        sleep(5);
    }
    public function getBusinessID($accessToken) {
        try {
            // Use the page ID to retrieve business info
            $response = $this->fb->get("/".$this->pageID."?fields=business", "EAARR7LQi878BO5YA4NYaH799zCJZAR83lAtlLf6ZCJDbXcHXpx6hGhulOpu3vkgZCAf8S1qWaCGtVHlasEQYvVqGEGBSbBIEeecbxGgvI7fqtGz8wStzB3FIkpfG1YGxcyNmvndM7I4sXuunDIdr1nc9DDuOiohBxIkJW5sKk6SA77CL2cV1uUFp8xTEFk3");
            $business = $response->getGraphNode();
            $businessId = $business->getField('business')['id'];
            dd($businessId);
            echo "Business ID: $businessId";
        } catch(\Facebook\Exceptions\FacebookResponseException $e) {
            // Handle API errors
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch(\Facebook\Exceptions\FacebookSDKException $e) {
            // Handle SDK errors
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
        exit;
    }
    public function getPages($accessToken)
    {
        if (Auth::user()->pages_get) {
            try {
                $response = $this->fb->get('/me/accounts', $accessToken);
            } catch (FacebookResponseException $e) {
                User::where('id', Auth::user()->id)->update([
                    'pages_get' => 'N'
                ]);
                // API call failed
                echo 'Graph returned an error: ' . $e->getMessage();
                dd($e);
            } catch (FacebookSDKException $e) {
                // SDK error occurred
                User::where('id', Auth::user()->id)->update([
                    'pages_get' => 'N'
                ]);
                echo 'Facebook SDK returned an error: ' . $e->getMessage();
                dd($e);
            }

            $pages = $response->getGraphEdge();
            foreach ($pages as $page) {

                $result = $this->getPageLongToken($page['id'] ,  $accessToken);
                sleep(2);
                $pageData = [
                    'user_id' => Auth::user()->id,
                    'page_id' => $page['id'],
                    'page_name' => $page['name'],
                    'page_access_token' => $page['access_token'],
                    'long_page_access_token' => $result,
                    'created_at' => date('Y-m-d H:i:s')
                ];
                // DB::table('face_book_pages')->insert($pageData);
                $matchThese = ['user_id' => Auth::user()->id,  'page_id' => $page['id'] ];
                $save_data = Pages::updateOrInsert($matchThese, $pageData);
            }
            User::where('id', Auth::user()->id)->update([
                'pages_get' => 'Y'
            ]);
        }
    }

    public function getPageLongToken($pageId ,  $longAccessTokenUser){
        try {
            $response = $this->fb->get('/' . $pageId . '?fields=access_token', $longAccessTokenUser);
            $pageAccessToken = $response->getGraphNode()->getField('access_token');
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            dd($e);
            return false;
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            dd($e);
            return false;
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
        return $pageAccessToken;
        echo 'Long-Lived Page Access Token: ' . $pageAccessToken;
    }

    public function getPagesPosts()
    {
        $getPages = DB::table('face_book_pages')->where('get_posts', 'N')->whereNotNull("long_page_access_token")->get();
        if ($getPages) {
            foreach ($getPages as $getPage) {
                $page_access_token = $getPage->page_access_token;
                $userId = $getPage->user_id;
                $page_id = $getPage->id;
                $posts = $this->getPosts($this->fb, $page_access_token, $getPage->page_id);
                if ($posts) {
                    foreach ($posts as $post) {
                        $media_url = '';
                        $media_type = '';
                        $postUrl = '';
                        $attachments = isset($post['attachments']) ? $post['attachments'] : null;
                        if (isset($post['attachments'])) {

                            if (isset($attachments['data'][0]['url'])) {
                                $postUrl =$attachments['data'][0]['url'];
                            }
                            $attachments = $post['attachments'];
                            // Check if media exists
                            if (isset($attachments['data'][0]['media'])) {
                                $media_url = $attachments['data'][0]['media']['image']['src'];
                                $media_type = $attachments['data'][0]['type'];
                            }
                        }
                        if (isset($post['attachments']['data'][0]['title'])) {
                            $title = $post['attachments']['data'][0]['title'];
                        } elseif (isset($post['message'])) {
                            $title = $post['message'];
                        } else {
                            $title = 'No title set';
                        }
                        $arrayToSaveOrUpdate = [
                            'user_id' => $userId,
                            'post_id' => $post['id'],
                            // 'campaign_id' => 16,
                            'details' => $title,
                            'live_image_url' => $media_url,
                            'post_url' => $postUrl,
                            'created_time' => $post['created_time'],
                            'type' => $media_type,
                            'page_id' => $page_id,
                        ];
                        $from_id = isset($post['from']['id']) ? $post['from']['id'] : 'Unknown';
                        $from_name = isset($post['from']['name']) ? $post['from']['name'] : 'Anonymous';

                        $arrayToSaveOrUpdate['from_id'] = $from_id;
                        $arrayToSaveOrUpdate['from_name'] = $from_name;

                        $matchThese = ['user_id' => $userId,  'post_id' => $post['id']];
                        $save_data = FaceBookPost::updateOrInsert($matchThese, $arrayToSaveOrUpdate);
                    }
                }
            }
        }
    }


    public function getPostComments()
    {
        $posts = FaceBookPost::whereNotNull('page_id')->orderBy('id','desc')->get();
        // $posts = FaceBookPost::where('id', 6)->get();
        foreach ($posts as $post) {
            $page= Pages::find($post->page_id);
            if(isset($page->long_page_access_token)){
                $postsComments = $this->getComments($this->fb, $page->long_page_access_token , $post->post_id);
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
                            'page_post_id' => $post->id,
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



}
