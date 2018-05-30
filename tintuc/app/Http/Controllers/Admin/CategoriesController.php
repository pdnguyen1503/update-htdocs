<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Http\Categories;
// use Illuminate\Contracts\Validation\Validator;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
class Categories extends Controller
{
    function GetListCategories(){
    	$CategoryModel = new Categories();
    	$ListCategory = $CategoryModel->get();
    	return view('admin.categories.categories',['cates'=>$ListCategory]);
    }
}
