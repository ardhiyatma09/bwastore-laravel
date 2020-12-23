<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Transaction;
use App\TransactionDetail;
Use Exception;
use Midtrans\Config;
use Midtrans\Snap;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function process(Request $request)
    {
        //Save users data
        $user = Auth::user();
        $user->update($request->except('total_price'));

        //Process checkout
        $transaction_code = 'STORE-' . mt_rand(0000,9999);
        $carts = Cart::with(['product','user'])->where('users_id', Auth::user()->id)->get();

        //Transaction Create
        $transaction = Transaction::create([
            'users_id' => Auth::user()->id,
            'inscurance_price' => 0,
            'shipping_price' => 0,
            'total_price' => $request->total_price,
            'transaction_status' => 'PENDING',
            'transactions_code' => $transaction_code,
        ]);

        foreach ($carts as $cart) {
            $trx = 'TRX-' . mt_rand(0000,9999);

            TransactionDetail::create([
                'transactions_id' => $transaction->id,
                'products_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
                'resi' => '',
                'transactions_code' => $trx,
            ]);
        }

        //Delete cart data
        Cart::with(['product','user'])->where('users_id', Auth::user()->id)->delete();

        //Midtrans configuration
        Config::$serverKey = config('services.midtrans.serverKey');
        Config::$isProduction = config('services.midtrans.isProduction');
        Config::$isSanitized = config('services.midtrans.isSanitized');
        Config::$is3ds = config('services.midtrans.is3ds');

        //Array for send to midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => $transaction_code,
                'gross_amount' => (int) $request->total_price,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
            ],
            'enabled_payments' => [
                'permata_va','gopay', 'bank_transfer',
            ],
            'vtweb' => []
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function callback(Request $request)
    {
        
    }
}
