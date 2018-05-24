<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Categories;

class PostController extends Controller
{
    //
    function GetListPost()
    {
        $PostModel = new Posts();
        $ListPost = $PostModel->join('categories', 'posts.category_id', '=', 'categories.id')->get();
        return view('Admin.Posts.List', ['post' => $ListPost]);
    }
    function GetAddPost(){
        return view('Admin.Posts.Add');
    }
    function PostAddPost (Request $request ){

        $this-> validate($request,
            [
                'NamePost'=> 'required|min:3|max:500',
                'Category'=>'required|min:3|max:100',



            ],
            [
                'NamePost.required'=>'Bạn chưa nhập title post',
                'NamePost.min'=> 'Tên post phải từ 3-500 kí tự',
                'NamePost.max'=> 'Tên post phải từ 3-500 kí tự',
                'Category'=>'Bạn chưa nhập category id',
                'Category.min'=> 'Tên category phải từ 3-100 kí tự',
                'Category.max'=> 'Tên category phải từ 3-100 kí tự',
            ]);
        $cate= new posts();
        $cate-> title = $request-> NamePost;
        $cate-> category_id = $request-> Category;
        $cate-> intro = $request-> intro;
        $cate-> content = $request-> content;
        $cate-> image = $request-> image;
        $cate-> tag = $request-> tag;
        $cate-> description = $request-> description;
        $cate-> CountComment = $request-> countcomment;
        $cate-> slug = $request-> slug;
        $cate-> active = $request-> active;
        $cate->save();

        return redirect('admin/posts/addpost')->with('thongbao','Thêm thành công');
    }
    function GetUpdatePost($id){
        $post= posts::find($id);
        return view('Admin.Posts.Update',['getpost'=>$post]);
    }
    function PostUpdatePost(Request $request, $id){
        $cate=posts::find($id);
        // dd($request->all());
        $this-> validate($request,
            [
                'NamePost'=> 'required|min:3|max:500',
                'Category'=>'required|min:3|max:100',



            ],
            [
                'NamePost.required'=>'Bạn chưa nhập title post',
                'NamePost.min'=> 'Tên post phải từ 3-500 kí tự',
                'NamePost.max'=> 'Tên post phải từ 3-500 kí tự',
                'Category'=>'Bạn chưa nhập category id',
                'Category.min'=> 'Tên category phải từ 3-100 kí tự',
                'Category.max'=> 'Tên category phải từ 3-100 kí tự',
            ]);

        $cate-> title = $request-> NamePost;
        $cate-> category_id = $request-> Category;
        $cate-> intro = $request-> intro;
        $cate-> content = $request-> content;
        $cate-> image = $request-> image;
        $cate-> tag = $request-> tag;
        $cate-> description = $request-> description;
        $cate-> CountComment = $request-> countcomment;
        $cate-> slug = $request-> slug;
        $cate-> active = $request-> active;
        $cate->save();

        return redirect('admin/post/updatepost/'.$id)->with('thongbao','update thàng công');
    }
    function Deletepost ($id){
        $del=posts::find($id);
        $del->delete();
        return redirect('admin/post/list')-> with('thongbao','Bạn đã xoá thành công');
    }
}
