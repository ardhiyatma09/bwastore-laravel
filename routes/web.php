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

//LOGIN ROUTE 
Auth::routes();
Route::get('/register/success', 'Auth\RegisterController@success')->name('register.success');
//END LOGIN ROUTE


//ROUTE STORE
Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::get('/categories/{slug}', 'CategoryController@details')->name('categories-details');
Route::get('/product-details/{slug}', 'ProductDetailsController@index')->name('product-details');
Route::post('/product-details/{id}', 'ProductDetailsController@add')->name('product-details.add');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', 'CartController@index')->name('cart');
    Route::delete('/cart/{cart}/delete', 'CartController@delete')->name('delete-cart');
    Route::post('/checkout', 'CheckoutController@process')->name('checkout');
    Route::post('/checkout/callback', 'CheckoutController@callback')->name('midtrans-callback');
    Route::get('/success', 'CartController@success')->name('checkout.success');
});
//END ROUTE STORE


//ROUTE SELLER
Route::group(['prefix' => 'mystore', 'namespace' => 'Seller', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/products', 'ProductController@index')->name('products');
    Route::get('/products/detail/{id}', 'ProductController@detail')->name('products.detail');
    Route::get('/products/add', 'ProductController@add')->name('products.add');
    Route::post('/products/store', 'ProductController@store')->name('products.store');
    Route::put('/products/update/{product}', 'ProductController@update')->name('products.update');

    Route::post('/products/gallery/upload', 'ProductController@uploadGallery')->name('products.upload-gallery');
    Route::delete('/products/gallery/delete/{productGallery}', 'ProductController@deleteGallery')->name('products.delete-gallery');

    Route::get('/transaction', 'TransactionController@index')->name('transaction');
    Route::get('/transaction/detail/{id}', 'TransactionController@detail')->name('transaction.detail');
    Route::post('/transaction/detail/{id}', 'TransactionController@update')->name('transaction.update');

    Route::get('/settings', 'SettingController@index')->name('settings');
    Route::get('/account', 'AccountController@index')->name('account');
    Route::post('/update/{redirect}', 'AccountController@update')->name('redirect');
});
//END ROUTE SELLER