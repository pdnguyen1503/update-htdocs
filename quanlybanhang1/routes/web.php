<?php

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
route::get('/', function (){
    return view('welcome');
});

Route::get('index', 'client\HomeController@index')-> name('index');
Route::get('/login', 'client\HomeController@login')->name('login');
Route::get('/shop','client\HomeController@shop')->name('shop');
Route::get('/productdetail','client\HomeController@productdetail')->name('productdetail');
Route::get('/blog','client\HomeController@blog')->name('blog');
Route::get('/blog-single','client\HomeController@blogsingle')->name('blogsingle');
Route::get('/cart','client\HomeController@cart')->name('cart');
Route::get('/checkout','client\HomeController@checkout')->name('checkout');
Route::get('/contact-us','client\HomeController@contactus')->name('contactus');
Route::get('/create-table','DatabaseController@CreateTable');
Route::get('/update-table','DatabaseController@Update');
route::get('/get-categories','DatabaseController@Getcategories');
route::get('/update','DatabaseController@Updatecat');

