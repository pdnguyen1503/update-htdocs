@extends('client.layout.layout')
@section('title', 'product-detail')
@section('main')
    <div class="container">
        <div class="row">
            @include('client.layout.category')

            @include('client.layout.main_productdetail')
        </div>
    </div>
@stop
