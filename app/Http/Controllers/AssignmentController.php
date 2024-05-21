<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignProductAssignment;
use App\Models\Product;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Http\Request;
use Auth;
use Facebook\Facebook;
use Illuminate\Support\Facades\Artisan;

class AssignmentController extends Controller
{
    use FaceBookSdkTraits;
    protected $fb;
    protected $accessToken;
    protected $businessId;
    protected $pageID;
    public function __construct(Facebook $fb)
    {
        $this->fb = new Facebook(config('facebook'));
        $this->businessId = env('BUSINESS_ID');

        $this->middleware(function ($request, $next) use ($fb) {
            $this->accessToken = $this->getSessionToken();
            if(empty($this->accessToken)){
                return redirect('select_page_first');
            }
            $this->pageID = $this->getPageID();
            $fb->setDefaultAccessToken($this->accessToken);
            return $next($request);
        });
    }
    public function showModal($campaign_id)
    {
        $products = Product::where('user_id', Auth::user()->id)->get();
        $campaign = Campaign::where('user_id', Auth::user()->id)->where('id', $campaign_id)->first();

        $campaignProductAssignments = CampaignProductAssignment::where('campaign_id', $campaign_id)->get();
        $assignedProductIds = $campaignProductAssignments->pluck('product_id')->toArray();
        return view('users.campaigns.assignment', compact('products', 'campaign', 'campaign_id', 'campaignProductAssignments', 'assignedProductIds'));
    }

    public function assign(Request $request, $campaign_id)
    {
        $data = $request->all();
        $user_id = $data['user_id'];
        $products = $data['products'];

        $campaign = Campaign::find($campaign_id);
        if ($campaign->catalog_id) {
            $cataLogId = $campaign->catalog_id;
        } else {
            $cataLogId = $this->createCataLog($campaign, $this->businessId, $this->accessToken);
            Campaign::where('id', $campaign_id)->update([
                'catalog_id' => $cataLogId
            ]);
        }
        if ($products) {
            CampaignProductAssignment::where('campaign_id', $campaign_id)->where('user_id', $user_id)->delete();
            foreach ($products as $product_id) {
                if ($product_id) {
                    $productDetails = Product::find($product_id);
                    $resullt= $this->createFBProductForCatalogId($productDetails, $cataLogId, Auth::user()->id, $this->fb, $this->accessToken);
                }
                CampaignProductAssignment::create([
                    'user_id' => $user_id,
                    'product_id' => $product_id,
                    'campaign_id' => $campaign_id,
                    'result'=>json_encode($resullt)
                ]);
            }
        }

        return back()
            ->with('success', 'Campaign has been successfully assigned products.');
    }

    public function runArtisanCommand(Request $request, $campaign_id)
    {
        // Run your Artisan command
        $output = Artisan::call('go:live', ['campaign_id' => $campaign_id]);

        // Get the output
        $output = Artisan::output();

        // Return the output
        return $output;
    }

}
