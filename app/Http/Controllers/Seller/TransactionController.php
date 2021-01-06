<?php

namespace App\Http\Controllers\Seller;

use App\TransactionDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $sellTransactions = TransactionDetail::with(['transaction.user','product.galleries'])
                        ->whereHas('product',function($product){
                            $product->where('users_id', Auth::user()->id);
                        })->get();

        $buyTransactions = TransactionDetail::with(['transaction.user','product.galleries'])
                        ->whereHas('transaction',function($transaction){
                            $transaction->where('users_id', Auth::user()->id);
                        })->get();

        return view('pages.seller.transaction',[
            'sellTransactions' => $sellTransactions,
            'buyTransactions' => $buyTransactions
        ]);
    }

    public function detail($id)
    {
        $transaction = TransactionDetail::with(['transaction.user','product.galleries'])->findOrFail($id);
        return view('pages.seller.transaction-detail',[
            'transaction' => $transaction
        ]);
    }

    public function update(Request $request,$id)
    {
        $data = $request->all();
        $item = TransactionDetail::findOrFail($id);

        $item->update($data);

        return redirect()->route('transaction.detail', $id);
    }
}
