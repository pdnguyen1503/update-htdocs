@extends('Admin.Layout.Layout')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Posts
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                            {{$err}} <br/>
                        @endforeach
                    </div>
                @endif
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <form action="{{route('postaddpost')}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                    <div class="form-group">
                        <label>Post Title</label>
                        <input class="form-control" name="NamePost" placeholder="Please Enter post title" />
                    </div>
                    <div class="form-group">
                        <label>Category ID</label>
                        <input class="form-control" name="Category" placeholder="Please Enter Category Name" />
                    </div>
                    <div class="form-group">
                        <label>Intro</label>
                        <input class="form-control" name="intro" placeholder="Please Enter intro" />
                    </div>
                    <div class="form-group">
                        <label>content</label>
                        <input class="form-control" name="content" placeholder="Please Enter content" />
                    </div>
                    <div class="form-group">
                        <label>images</label>
                        <input class="form-control" name="image" placeholder="Please Enter image" />
                    </div>
                    <div class="form-group">
                        <label>tag</label>
                        <input class="form-control" name="tag" placeholder="Please Enter tag" />
                    </div>
                    <div class="form-group">
                        <label>description</label>
                        <input class="form-control" name="description" placeholder="Please Enter description" />
                    </div>
                    <div class="form-group">
                        <label>countcomment</label>
                        <input class="form-control" name="countcomment" placeholder="Please Enter countcomment" />
                    </div>
                    <div class="form-group">
                        <label>slug</label>
                        <input class="form-control" name="slug" placeholder="Please Enter slug" />
                    </div>
                    <div class="form-group">
                        <label>Active</label>
                        <input class="form-control" name="active" placeholder="Please Enter active" />
                    </div>
                    <button type="submit" class="btn btn-default">Post Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@stop