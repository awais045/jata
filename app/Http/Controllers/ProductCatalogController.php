<?php

namespace App\Http\Controllers ;

use App\Models\Campaign;
use App\Models\Product;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Http\Request;
use Auth;
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Donmbelembe\LaravelFacebookCatalog\LaravelFacebookCatalog;
use Illuminate\Support\Facades\Http;
use SimpleXMLElement;
use Illuminate\Support\Facades\DB;
use Facebook\FacebookRequest;
use FacebookAds\Api;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\Fields\ProductCatalogFields;

use FacebookAds\Object\ProductFeed;
use FacebookAds\Object\Fields\ProductFeedFields;
use FacebookAds\Object\Fields\ProductFeedScheduleFields;
use FacebookAds\Logger\CurlLogger;
use GuzzleHttp\Client;

class ProductCatalogController extends Controller
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

    public function index(){
        dd($this->fb);
    }

    public function getBatches(){

    }

    function getBatchesProducts(){

    }


}
