<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignProductAssignment;
use App\Models\Product;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Http\Request;
use Auth;
use Facebook\Facebook;

class AssignmentController extends Controller
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
    public function showModal( $campaign_id )
    {
        $products = Product::where('user_id' ,Auth::user()->id)->get();
        $campaign = Campaign::where('user_id' ,Auth::user()->id)->where('id',$campaign_id)->first();

        $campaignProductAssignments = CampaignProductAssignment::where('campaign_id', $campaign_id)->get();
        $assignedProductIds = $campaignProductAssignments->pluck('product_id')->toArray();
        return view('users.campaigns.assignment', compact('products', 'campaign' ,'campaign_id','campaignProductAssignments','assignedProductIds'));
    }

    public function assign(Request $request , $campaign_id)
    {
        $data = $request->all();
        $user_id = $data['user_id'];
        $products = $data['products'];

        if($products){

            CampaignProductAssignment::where('campaign_id',$campaign_id)->where('user_id',$user_id)->delete();

            foreach ($products as $product_id) {

                if($product_id){
                    $productDetails = Product::find($product_id);
                    $ress = $this->createFBProductForCatalogId( $productDetails , Auth::user()->catalog_id , Auth::user()->id , $this->fb , $this->accessToken );
                    dd($ress);
                }

                CampaignProductAssignment::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'campaign_id' => $campaign_id, // Assuming you have the campaign_id
                ]);
            }
        }

        return back()
            ->with('success', 'Campaign has been successfully assigned products.');
    }
}
