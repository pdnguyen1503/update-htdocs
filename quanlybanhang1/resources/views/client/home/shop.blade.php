@extends('client.layout.layout')
@section('title', 'shop')
@section('slider')
    @include('client.layout.banner')
@stop
@section('main')
    <div class="container">
        <div class="row">
            @include('client.layout.category')

            @include('client.layout.main_shop')
        </div>
    </div>
@stop
