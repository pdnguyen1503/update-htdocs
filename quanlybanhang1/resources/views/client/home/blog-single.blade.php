@extends('client.layout.layout')
@section('title', 'blog-single')

@section('main')
    <div class="container">
        <div class="row">
            @include('client.layout.category')

            @include('client.layout.main_blogsingle')
        </div>
    </div>
@stop
