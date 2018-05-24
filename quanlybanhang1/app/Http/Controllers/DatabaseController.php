<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseController extends Controller
{
    function CreateTable()
    {
        Schema::create('categories', function ($table) {
            $table->increments('id');            //Tự tăng, khóa chính
            $table->string('name');
            $table->string('tag');
            $table->string('description');
            $table->string('icon');
            $table->string('slug');
            $table->boolean('active');
            echo "dax tao bang";
        });
    }

    function Update()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->string('tag')->nullable()->change();
        });
    }
    function Getcategories(){
        $categories=DB::table('categories')->get();
        //dd($categories);
        return view('database.categories', compact('categories'));
    }
    function Updatecat(){
        $result=DB::table('categories')->where('id','=','1')->update(['name'=>  'phương']);
}
}