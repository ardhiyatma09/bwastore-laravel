<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function index($slug)
    {
        $data = Product::with(['galleries'])->where('categories_id',$category->id)->get();
        // dd($data);
        return view('pages.product-details');
    }
}
