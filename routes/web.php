<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//ROUTE STORE
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/product-details', 'ProductDetailsController@index')->name('product-details');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('checkout.success');
//END ROUTE STORE

//ROUTE ADMIN
Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');

    Route::get('/products', 'Admin\ProductController@index')->name('products');
    Route::get('/products/detail', 'Admin\ProductController@detail')->name('products.detail');
    Route::get('/products/add', 'Admin\ProductController@add')->name('products.add');

    Route::get('/transaction', 'Admin\TransactionController@index')->name('transaction');
    Route::get('/transaction/detail', 'Admin\TransactionController@detail')->name('transaction.detail');

    Route::get('/settings', 'Admin\SettingController@index')->name('settings');

    Route::get('/account', 'Admin\AccountController@index')->name('account');
});
//END ROUTE ADMIN
Auth::routes();
Route::get('/register/success', 'Auth\RegisterController@success')->name('register.success');