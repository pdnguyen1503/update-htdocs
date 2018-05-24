@section('title',"Trang chủ")
@extends('client.layout.layout')
@section('slider')
    @include('client.layout.slider')
@stop
@section('main')
    <section>
        <div class="container">
            <div class="row">
                @include('client.layout.category')
                @include('client.layout.list_product')
            </div>
        </div>
    </section>
@stop