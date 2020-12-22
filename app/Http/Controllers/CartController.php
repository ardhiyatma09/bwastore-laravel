<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $carts = Cart::with(['product.galleries','user'])->where('users_id', Auth::user()->id)->get();
        return view('pages.cart',[
            'carts' => $carts
        ]);
    }

    public function delete(Cart $cart)
    {
        $cart->delete();

        return redirect()->back();
    }

    public function success()
    {
        return view('pages.success-checkout');
    }
}
