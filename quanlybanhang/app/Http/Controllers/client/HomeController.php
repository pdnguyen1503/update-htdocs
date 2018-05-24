<?php

namespace App\Http\Controllers\client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
   
   function Index(){
   	return view('client.home.index');
   }
   function Shop(){
   	return view('client.home.shop');
   }
   function Blog(){
   	return view('client.home.blog');
   }
   function BlogSingle(){
   	return view('client.home.blog-single');
   }
   function Cart(){
   	return view('client.home.cart');
   }
   function CheckOut(){
   	return view('client.home.checkout');
   }
   function ContactUs(){
   	return view('client.home.contact-us');
   }
   function ProductDetails(){
   	return view('client.home.product-details');
   }
   function Login(){
   	return view('client.home.login');
   }
   
}
