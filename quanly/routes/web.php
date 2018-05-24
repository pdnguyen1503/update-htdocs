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

Route::get('/category', function (){
    return "Lý ăn khu";
});

Route::get('/category/{ten}',function ($ten){
    return $ten;
});
route::get('chao','HomeController@index');


Route::get( '/login-a-b-r-t', function () {
    echo 'Route login';
} )->name( 'login' );

Route::post( '/HelloWorld', function () {
    echo 'HelloWorld';
} );

Route::get( 'Hello/{ten}', function ( $ten ) {

    echo 'Hello: ' . $ten;
} );

Route::get( 'router-from-controller', 'HomeController@Index' );
Route::get( '/xin-chao-{ten}', 'HomeController@XinChao' );

Route::get('admin/user3', function (){
    echo 'User 3';
});

Route::group( [ 'prefix' => 'admin' ], function () {
//Gọi Route User1: domain/MyGroup/User1
    Route::get( 'User1', function () {
        return 'User1';
    } );
    Route::get( 'User2', function () {
        return 'User2';
    } );
});
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/blog-categorie/{cate}','HomeController@GetCategories')->name('GetCategories');
Route::get('/blog-single/{id}', 'HomeController@GetDetail')->name('GetDetail');
Route::get('/About','HomeController@About')->name('About');
Route::get('/Contact','HomeController@Contact')->name('Contact');

//
Route::get('/admin1','Admin\HomeController@index')->name('indexAdmin');
Route::group(['prefix'=>'admin'], function(){
    Route::group(['prefix'=>'categories'], function(){
        route::get('list', 'Admin\CategoryController@GetListCategories' )->name('listcategory');
        route::post('addcategory', 'Admin\CategoryController@PostAddCategory' )->name('addcategory');
        route::get('addcategory', 'Admin\CategoryController@GetAddCategory' )->name('addpostcategory');
        route::post('updatecategory/{id}', 'Admin\CategoryController@PostUpdateCategory' )->name('postupdatecategory');
        route::get('updatecategory/{id}', 'Admin\CategoryController@GetUpdateCategory' )->name('getupdatecategory');
        route::get('delecategory/{id}', 'Admin\CategoryController@DeleteCategory' )->name('getdeletecategory');

    });
    route::get('index','Admin\HomeController@index');
    route::group(['prefix'=>'posts'], function(){
        route::get('list', 'Admin\PostController@GetListPost' )->name('listpost');
        route::post('addpost', 'Admin\PostController@PostAddPost' )->name('postaddpost');
        route::get('addpost', 'Admin\PostController@GetAddPost' )->name('getaddpost');
        route::post('updatepost/{id}', 'Admin\PostController@PostUpdatePost' )->name('postupdatepost');
        route::get('updatepost/{id}', 'Admin\PostController@GetUpdatePost' )->name('getupdatepost');
        route::get('delepost/{id}', 'Admin\PostController@DeletePost' )->name('getdeletepost');
    });
});


