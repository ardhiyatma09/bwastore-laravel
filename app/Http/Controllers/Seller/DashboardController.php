<?php

namespace App\Http\Controllers\Seller;

use App\User;
use App\TransactionDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $transactions = TransactionDetail::with(['transaction.user','product.galleries'])
                        ->whereHas('product',function($product){
                            $product->where('users_id', Auth::user()->id);
                        });

        $revenue = $transactions->get()->reduce(function($carry, $item){
            return $carry + $item->price;
        });

        $customer = User::count();

        return view('pages.seller.dashboard',[
            'transaction_count' => $transactions->count(),
            'transaction_data' => $transactions->take(5)->get(),
            'revenue' => $revenue,
            'customer' => $customer
        ]);
    }
}
