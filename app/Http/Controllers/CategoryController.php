<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::with(['galleries'])->paginate(12);
        return view('pages.categories',[
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function details($slug)
    {
        $categories = Category::all();
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::with(['galleries'])->where('categories_id', $category->id)->paginate(12);
        return view('pages.categories',[
            'categories' => $categories,
            'category_select' => $category,
            'products' => $products
        ]);
    }
}
