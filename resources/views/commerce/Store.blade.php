@extends('layouts.Home')

@section('content')

<link href="{{ url('css/frontLine.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<h1 class="text-center" style="margin-top:2rem"> สินค้าในคลัง </h1>

<div class="container">
    @if(sizeof($products) != 0)
        <div class="section align-horizon">
            @foreach($products as $product)
                @include('layouts._OwnCard')
            @endforeach
        </div>
    @else
        <h1 style="text-align:center;margin-top:3rem"> --ไม่มีชีทที่ซื้อไว้-- </h1>
    @endif
</div>

@endsection