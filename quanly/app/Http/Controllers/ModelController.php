<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class ModelController extends Controller
{
    //
    function Getlist(){
        $PostModel=new posts();
        $ListPost = $PostModel->paginate(5);
        //dd($ListPost);
        return view('Clients.Home.index', ['posts'=>$ListPost]);
    }
}
