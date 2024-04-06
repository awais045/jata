<?php

namespace App\Http\Controllers;

use Facebook\Facebook;
use Illuminate\Routing\Controller as BaseController;

class AppBaseController extends BaseController
{
    public $fb;
    public $accessToken;
    public $businessId;
    public $pageID;
    public function __construct()
    {
        $this->fb = new Facebook(config('facebook'));
        $this->accessToken = env('ACCESS_TOKEN');
        $this->businessId = env('BUSINESS_ID');
        $this->pageID = env('PAGE_ID');
    }
}
