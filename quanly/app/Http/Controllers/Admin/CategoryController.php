<?php

namespace App\Http\Controllers\Admin;

use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Bus\DispatchesJobs;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CategoryController extends Controller
{
    //
    function GetListCategories (){
        $CategoryModel=new Categories();
        $ListCategory=$CategoryModel->get();
        return view('Admin.Categories.List', ['cate'=>$ListCategory]);
    }
    function GetAddCategory (Request $request){
        return view('Admin.Categories.Add');
    }
    function PostAddCategory (Request $request){
      $this-> validate($request,
        [
            'NameCate'=> 'required|min:3|max:100'
        ],
        [
            'NameCate.required'=>'Bạn chưa nhập tên',
            'NameCate.min'=> 'Tên thể loại phải từ 3-100 kí tự',
            'NameCate.max'=> 'Tên thể loại phải từ 3-100 kí tự',
        ]);
      $cate= new categories();
      $cate-> name = $request-> NameCate;
       $cate->save();

      return redirect('admin/categories/addcategory')->with('thongbao','Thêm thành công');
    }
    function GetUpdateCategory($id){
        $cate= categories::find($id);
        return view('Admin.Categories.Update',['getcate'=>$cate]);
    }
    function PostUpdateCategory(Request $request, $id){
        $category=categories::find($id);
       // dd($request->all());
        $this-> validate($request,
            [
                'NameCate'=> 'required|unique:categories,name|min:3|max:100'
            ],
            [
                'NameCate.required'=>'Bạn chưa nhập tên',
                'NameCate.min'=> 'Tên thể loại phải từ 3-100 kí tự',
                'NameCate.max'=> 'Tên thể loại phải từ 3-100 kí tự',
                'NameCate.unique'=> 'Tên category đã tồn tại',
            ]);
        $category->name=$request->NameCate;
        $category -> save();
        return redirect('admin/categories/updatecategory/'.$id)->with('thongbao','update thàng công');
    }
    function DeleteCategory ($id){
        $category=categories::find($id);
        $category->delete();
        return redirect('admin/categories/list')-> with('thongbao','Bạn đã xoá thành công');
    }
}
