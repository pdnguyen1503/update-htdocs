@extends('Admin.Layout.Layout')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Post
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if (session('thongbao'))
                    <div class="alert alert-success">
                        {{session('thongbao')}}
                    </div>
                @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Categories</th>
                        <th>Title</th>
                        <th>Status</th>
                        <th>Intro</th>
                        <th>Content</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $post as $item )
                    <tr class="odd gradeX" align="center">
                        <td> {{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->tiltle}}</td>
                        <td> {{$item->active}} </td>
                        <td>{{$item->intro}}</td>
                        <td>{{$item->content}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('getdeletepost',$item->id)}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('getupdatepost',$item->id)}}">Edit</a></td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@stop