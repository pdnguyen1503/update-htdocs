@extends('client.layout.layout')
@section('title', 'blog')

@section('main')
    <div class="container">
        <div class="row">
            @include('client.layout.category')

            @include('client.layout.main_blog')
        </div>
    </div>
@stop
