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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/check_session', function(){
	echo "addd";
}) ->middleware(['check_session']);

// Route::get('/add', function(){
// 	session::put('uer_login');

// });

Route::group(['/check_user', 'middleware' => 'check'], function(){
	Route::get('check_user/{name}',function($name){
		print_r($name);
	});
});