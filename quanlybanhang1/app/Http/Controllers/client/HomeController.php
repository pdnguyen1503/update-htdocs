<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
class HomeController extends  Controller
{
    //
    function index(){
       return view('client.home.index');
    }
    function login(){
        return view('client.home.login');
    }
    function shop(){
        return view('client.home.shop');
    }
    function productdetail(){
        return view('client.home.product-detail');
    }
    function blog(){
        return view('client.home.blog');
    }
    function blogsingle(){
        return view('client.home.blog-single');
    }
    function cart(){
        return view('client.home.cart');
    }
    function checkout(){
        return view('client.home.checkout');
    }
    function contactus(){
        return view('client.home.contact-us');
    }
    function XinChao($ten){
        echo route('login');
//echo 'Xin chao: '.$ten;
    }

}
