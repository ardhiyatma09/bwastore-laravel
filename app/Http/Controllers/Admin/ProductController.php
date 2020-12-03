<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('pages.admin.products');
    }

    public function detail()
    {
        return view('pages.admin.product-detail');
    }

    public function add()
    {
        return view('pages.admin.product-add');
    }
}
