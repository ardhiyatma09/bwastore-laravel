<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.seller.products');
    }

    public function detail()
    {
        return view('pages.seller.product-detail');
    }

    public function add()
    {
        return view('pages.seller.product-add');
    }
}
