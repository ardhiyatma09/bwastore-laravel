<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return view('pages.seller.transaction');
    }

    public function detail()
    {
        return view('pages.seller.transaction-detail');
    }
}
