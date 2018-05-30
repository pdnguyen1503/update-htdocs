@extends('admin.layout.layout')
@section('categories')

                    <h1 class="page-header">Category
                        <small>List</small>
                    </h1>
                </div>

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category Parent</th>
                        <th>Status</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $cate as $item )
                    <tr class="odd gradeX" align="center">
                        <td>{{$item->id}}</td>
                        <td>name</td>
                        <td>None</td>
                        <td>Hiện</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Edit</a></td>
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