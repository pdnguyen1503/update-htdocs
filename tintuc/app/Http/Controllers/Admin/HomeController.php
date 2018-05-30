<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    function Admin(){
    	return view('admin.home.index');
    }

    // function GetCategories(){
    // 	return view('admin.categories.categories');
    // }
}
