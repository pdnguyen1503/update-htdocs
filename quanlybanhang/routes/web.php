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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('index', 'client\HomeController@Index')->name('index');
Route::get('/checkout', 'client\HomeController@CheckOut')->name('checkout');
Route::get('/shop', 'client\HomeController@Shop')->name('shop');
Route::get('/productdetail', 'client\HomeController@ProductDetails')->name('productdetail');
Route::get('/cart', 'client\HomeController@Cart')->name('cart');
Route::get('/blog', 'client\HomeController@Blog')->name('blog');
Route::get('/blogsingle', 'client\HomeController@BlogSingle')->name('blogsingle');
Route::get('/login', 'client\HomeController@Login')->name('login');
Route::get('/contactus', 'client\HomeController@ContactUs')->name('contactus');
