<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\CampaignProductAssignment;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class AssignmentController extends Controller
{
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

        foreach ($products as $product_id) {
            CampaignProductAssignment::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
                'campaign_id' => $campaign_id, // Assuming you have the campaign_id
            ]);
        }
        return back()
            ->with('success', 'Campaign has been successfully assigned products.');
    }
}
