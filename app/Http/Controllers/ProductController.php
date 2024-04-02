<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('user_id' ,Auth::user()->id)->orderBy('id','desc')->paginate(10);

        $campaigns = Campaign::where('user_id' ,Auth::user()->id)->get();

        return view('users.product_catalog.index' , ['products' => $products,'campaigns' => $campaigns]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $product = new Product();
        return view('users.product_catalog.create' , compact('product'));
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
        $product->user_id = Auth::user()->id;
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
        //
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
        $products = Product::where('user_id' ,Auth::user()->id)->get();
        $campaigns = Campaign::where('user_id' ,Auth::user()->id)->get();
        return view('assignment.modal', compact('products', 'campaigns'));
    }

    public function assign(Request $request)
    {
        // Handle assignment logic here
    }
}
