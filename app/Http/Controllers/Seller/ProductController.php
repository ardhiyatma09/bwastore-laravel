<?php

namespace App\Http\Controllers\Seller;

use App\Product;
use App\Category;
use App\ProductGallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\ProductGalleryRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['galleries','category'])->where('users_id', Auth::user()->id)->get();
        return view('pages.seller.products',[
            'products' => $products,
        ]);
    }

    public function detail($id)
    {
        $product = Product::with(['galleries','category','user'])->findOrFail($id);
        $categories = Category::all();

        return view('pages.seller.product-detail',[
            'categories' => $categories,
            'product' => $product
        ]);
    }

    public function add()
    {
        $categories = Category::all();
        return view('pages.seller.product-add',[
            'categories' => $categories
        ]);
    }

    public function store(ProductRequest $request)
    {
        $data = $request->except('photo');
        $data['slug'] = Str::slug($request->name);

        $product = Product::create($data);

        $gallery = [
            'products_id' => $product->id,
            'photos' => $request->file('photo')->store('assets/product', 'public')
        ];

        ProductGallery::create($gallery);

        return redirect()->route('products');
    }

    public function uploadGallery(ProductGalleryRequest $request)
    {
        $data = $request->all();
        $data['photos'] = $request->file('photos')->store('assets/product','public');
    
        ProductGallery::create($data);


        return redirect()->route('products.detail', $request->products_id);
    }

    public function deleteGallery(ProductGallery $productGallery)
    {
        Storage::disk('public')->delete($productGallery->photos);
        $productGallery->delete();

        return redirect()->route('products.detail', $productGallery->products_id);
    }

    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        
        $product->update($data);

        return redirect()->route('products');
    }
}
