<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Categories;

class HomeController extends Controller
{
    //
    function About(){
        $CategoryModel=new Categories();
        $ListCategory = $CategoryModel->get();
        return view('Clients.Home.About',['categories'=>$ListCategory] );
    }
    function Index(){
        $PostModel=new posts();
        $ListPost = $PostModel->paginate(5);

        $CategoryModel=new Categories();
        $ListCategory = $CategoryModel->get();
        return view('Clients.Home.index',['posts'=>$ListPost],['categories'=>$ListCategory]);

    }
    function Contact(){
        $CategoryModel=new Categories();
        $ListCategory = $CategoryModel->get();
        return view('Clients.Home.Contact',['categories'=>$ListCategory] );
    }
    function GetCategories ($cate){
        $Category=posts::where('category_id',$cate)->get();

        $CategoryModel=new Categories();
        $ListCategory = $CategoryModel->get();
        return view('Clients.Home.CategoriesDetail', compact('Category'),['categories'=>$ListCategory]);
    }
    function GetDetail(Request $request){
        $post= posts::where('id',$request->id)->first();
        $CategoryModel=new Categories();
        $ListCategory = $CategoryModel->get();
        return view('Clients.Home.BlogSingle', Compact('post'), ['categories'=>$ListCategory]);
    }

    function XinChao($ten){
        echo route('login');
//echo 'Xin chao: '.$ten;
    }
}
