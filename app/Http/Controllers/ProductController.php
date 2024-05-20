<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Product;
use App\Traits\FaceBookSdkTraits;
use Illuminate\Http\Request;
use Auth;
use Facebook\Facebook;
use Facebook\FacebookRequest;
use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\ProductCatalog;
use FacebookAds\Object\Fields\ProductCatalogFields;

use FacebookAds\Object\ProductFeed;
use FacebookAds\Object\Fields\ProductFeedFields;
use FacebookAds\Object\Fields\ProductFeedScheduleFields;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

class ProductController extends Controller
{
    use FaceBookSdkTraits;

    protected $fb;
    protected $accessToken;
    protected $businessId;
    protected $pageID;
    public function __construct()
    {
        $this->fb = new Facebook(config('facebook'));
        // $this->accessToken = env('ACCESS_TOKEN');
        // $this->businessId = env('BUSINESS_ID');
        // $this->pageID = env('PAGE_ID');
        $this->middleware(function ($request, $next)  {
            $this->accessToken = $this->getSessionToken();
            $this->pageID = $this->getPageID();
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)->orderBy('id', 'desc')->paginate(10);

        $campaigns = Campaign::where('user_id', Auth::user()->id)->get();

        return view('users.product_catalog.index', ['products' => $products, 'campaigns' => $campaigns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        return view('users.product_catalog.create', compact('product'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->move(public_path('images'), $imageName);

        // $tags = $request->input('tags');
        $request->validate([
            'name' => 'required|string|max:255',
            'product_information' => 'required|string',
            'price' => 'required|numeric',
            'pre_price' => 'required|numeric',
            'inventory' => 'required|numeric',
            'sku' => 'required|string|max:255',
            'url' => 'required|url',
            'product_weight' => 'required|numeric',
            'tags' => 'array', // Assuming 'tags' is an array
            'image' => 'required|image|mimes:jpeg,png,jpg|max:8048',
        ]);

        // Handle tags array
        $tags = $request->input('tags');
        // Upload image
        $imagePath = $request->file('image')->store('public/images');

        $userId = Auth::user()->id;
        // Create new product instance
        $product = new Product();
        $product->name = $request->input('name');
        $product->product_information = $request->input('product_information');
        $product->price = $request->input('price');
        $product->pre_price = $request->input('pre_price');
        $product->inventory = $request->input('inventory');
        $product->sku = $request->input('sku');
        $product->url = $request->input('url');
        $product->product_weight = $request->input('product_weight');
        $product->user_id = $userId;
        $product->tags = json_encode($tags); // Assuming 'tags' is a JSON column in the database
        $product->image = $imagePath;
        $product->save();
        return back()
            ->with('success', 'Product has been created successfully.');
        // ->with('image', $imageName);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $catalogId = 3701091503438786;

        $productData = [
            'retailer_id' => 'retailer_id_W4T',
            'name' => 'Your Product Title',
            'title' => 'Your Product Title',
            'description' => 'Description of your product',
            'availability' => 'in_stock', // or 'out_of_stock'
            'condition' => 'new', // or 'used'
            'price' => 100.00,
            'currency' => 'USD',
            'availability' => 'in stock',
            'image_url' => 'https://jatak.artisticsheaven.com/public/website/assets/images/iphone18.png',
            'image_link' => 'https://jatak.artisticsheaven.com/public/website/assets/images/iphone18.png',
            'uploaded_image_id' => 'https://jatak.artisticsheaven.com/public/website/assets/images/iphone18.png',
            'link' => 'https://jatak.artisticsheaven.com/public/function', // Add the link to your product here
            // Add any other product attributes you need
        ];
        try {
            // Create Product Group
            $createGroupResponse = $this->fb->post("/$catalogId/products",
            [
                'retailer_id' => 'retailer_id_W4T',
                'title' => 'Your Product Title',
                'link' => 'https://jatak.artisticsheaven.com/public/function',
                'description' => 'Description of your product',
                'currency' => 'USD',
                'condition' => 'used',
                'name' => 'Your Product Title',
                'image_url' => 'https://jatak.artisticsheaven.com/public/website/assets/images/iphone18.png',
                'price' => 100.00,
                'link' => 'https://jatak.artisticsheaven.com/public/function', // Add the link to your product here
                'items'=>$productData
            ]
            , $this->accessToken);

            $graphNode = $createGroupResponse->getGraphNode();
            dd($graphNode);
        } catch (FacebookResponseException $e) {
            // API returned an error response
            dd($e);
            echo 'Graph returned an error: ' . $e->getMessage();
        } catch (FacebookSDKException $e) {
            dd($e);
            // SDK error occurred
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('users.product_catalog.create', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully!');
    }

    public function showModal()
    {
        $products = Product::where('user_id', Auth::user()->id)->get();
        $campaigns = Campaign::where('user_id', Auth::user()->id)->get();
        return view('assignment.modal', compact('products', 'campaigns'));
    }

    public function assign(Request $request)
    {
        // Handle assignment logic here
    }
}
