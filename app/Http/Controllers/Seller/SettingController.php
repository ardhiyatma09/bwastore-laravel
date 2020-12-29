<?php

namespace App\Http\Controllers\Seller;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $categories = Category::all();

        return view('pages.seller.settings',[
            'user' => $user,
            'categories' => $categories
        ]);
    }
}
