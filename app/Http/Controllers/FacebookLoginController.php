<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Facebook\Facebook;
use Illuminate\Support\Facades\Session;
use Auth;

class FacebookLoginController extends Controller
{
    protected $fb;

    public function __construct(Facebook $fb)
    {
        $this->fb = $fb;
    }

    public function redirectToFacebook()
    {
        $redirectUrl = $this->fb->getRedirectLoginHelper()->getLoginUrl('https://localhost/jata_laravel_git/public/login/facebook/callback', ['public_profile','email','read_insights','ads_management','pages_manage_posts','business_management','catalog_management','instagram_basic','pages_manage_engagement','pages_messaging','pages_read_user_content','pages_manage_metadata','pages_manage_ads','instagram_manage_comments','instagram_manage_insights','pages_read_engagement']);
        // Generate CSRF token manually and store it in the session
        $state = bin2hex(random_bytes(32));
        Session::put('state', $state);

        // Append state parameter to the redirect URL
        $redirectUrl .= '&state=' . urlencode($state);
        return redirect()->away($redirectUrl);
    }

    public function handleFacebookCallback(Request $request)
    {
         // Verify CSRF token
        if ($request->input('state') !== Session::get('state')) {
            return redirect('select_page_first')->with('error', 'CSRF token mismatch');
        }
        // Clear CSRF token from session
        Session::forget('state');
        $helper = $this->fb->getRedirectLoginHelper();
        if (isset($_GET['state'])) {
            $helper->getPersistentDataHandler()->set('state', $_GET['state']);
        }
        try {
            $accessToken = $helper->getAccessToken();
            // dd($helper,$accessToken);
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // dd($e);
            // When Graph returns an error
            return redirect('select_page_first')->with('error', 'Graph returned an error: ' . $e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // When validation fails or other local issues
            // dd($e);
            return redirect('select_page_first')->with('error', 'Facebook SDK returned an error: ' . $e->getMessage());
        }

        if (!isset($accessToken)) {
            if ($helper->getError()) {
                return redirect('select_page_first')->with('error', 'User denied permission');
            }
            return redirect('select_page_first')->with('error', 'Bad request');
        }
        // Logged in
        $fb = new \Facebook\Facebook([
            'app_id' => '1215976983163839',
            'app_secret' => 'a889313ccf5fcd5263a408071a48c729',
            'default_graph_version' => 'v13.0',
        ]);

        try {
            // Returns a `Facebook\FacebookResponse` object
            $response = $fb->get('/me?fields=id,name,email', $accessToken->getValue());
            // dd($response);
        } catch (\Facebook\Exceptions\FacebookResponseException $e) {
            // dd($e);
            return redirect('select_page_first')->with('error', 'Graph returned an error: ' . $e->getMessage());
        } catch (\Facebook\Exceptions\FacebookSDKException $e) {
            // dd($e);
            return redirect('select_page_first')->with('error', 'Facebook SDK returned an error: ' . $e->getMessage());
        }
        $user = $response->getGraphUser();

        $userId = $user['id'];
        $userName = $user['name'];
        $userEmail = $user['email'];
        // dd($user , $accessToken->getValue());
        User::where('id' , Auth::user()->id)->update([
            'facebook_id' =>$userId,
            'name' =>$userName,
            'facebook_id' =>$userId,
            'fb_email' =>$userEmail,
            'short_time_access_token' =>$accessToken->getValue(),
        ]);
        sleep(1);
        $tokenGetObj = new TokenManagementController();
        $tokenGetObj->generateLongToken();
        // Here you can handle the user data as you need, such as logging the user in
        sleep(2);
        return redirect('select_page_first')->with('success', 'All Configuration has been saved,Please select the page to proceed ');
    }
}
