<?php

use Illuminate\Support\Facades\Route;

//ROUTE ADMIN
Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin-dashboard');
    Route::resource('category', 'CategoryController');
    Route::resource('user', 'UserController');
    Route::resource('product', 'ProductController');
    Route::resource('product-gallery', 'ProductGalleryController');
});
//END ROUTE ADMIN