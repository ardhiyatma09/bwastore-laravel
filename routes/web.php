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
Route::get('/product-details/{slug}', 'ProductDetailsController@index')->name('product-details');
Route::get('/cart', 'CartController@index')->name('cart');
Route::get('/success', 'CartController@success')->name('checkout.success');
//END ROUTE STORE

//ROUTE SELLER
Route::group(['prefix' => 'mystore', 'namespace' => 'Seller'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/products', 'ProductController@index')->name('products');
    Route::get('/products/detail', 'ProductController@detail')->name('products.detail');
    Route::get('/products/add', 'ProductController@add')->name('products.add');

    Route::get('/transaction', 'TransactionController@index')->name('transaction');
    Route::get('/transaction/detail', 'TransactionController@detail')->name('transaction.detail');

    Route::get('/settings', 'SettingController@index')->name('settings');

    Route::get('/account', 'AccountController@index')->name('account');
});
//END ROUTE SELLER


//ROUTE ADMIN
// 'middleware' => ['auth','admin'],
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin-dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('user', 'UserController');
    Route::resource('product', 'ProductController');
    Route::resource('product-gallery', 'ProductGalleryController');
});
//END ROUTE ADMIN

Auth::routes();
Route::get('/register/success', 'Auth\RegisterController@success')->name('register.success');