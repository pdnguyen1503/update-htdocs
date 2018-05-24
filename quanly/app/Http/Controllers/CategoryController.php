<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function GetList(){
        $CategoryModel=new Category();
        $ListCategory = $CategoryModel->get();
        //dd($ListCategory);
        return view('Clients.Layout.sidebar', ['categories'=>$CategoryModel]);
    }

}
