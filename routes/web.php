<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/msg/getDB','App\Http\Controllers\MsgsController@getDB');
Route::get('/msg/getProduct','App\Http\Controllers\Table1Controller@getProduct');
Route::get('/msg/getALLTable1','App\Http\Controllers\DbtestController@getALLTable1');

Route::get('/home',[PagesController::class,'home']);
Route::get('/about',[PagesController::class,'about']);

Route::get('/','App\Http\Controllers\ProductController@getProduct')->name('ProductList');
Route::get('/laraEC/getProductDetail','App\Http\Controllers\ProductController@getProductDetail')->name('ProductDetail');
Route::get('/laraEC/addCart','App\Http\Controllers\ProductController@addCart')->name('addCart');
Route::get('/laraEC/delCartAll','App\Http\Controllers\ProductController@delCartAll')->name('delCartAll');
Route::get('/laraEC/delCartDetail','App\Http\Controllers\ProductController@delCartDetail')->name('delCartDetail');
Route::get('/laraEC/viewCart','App\Http\Controllers\ProductController@viewCart')->name('viewCart');
Route::get('/laraEC/checkout','App\Http\Controllers\ProductController@checkout')->name('checkout');




