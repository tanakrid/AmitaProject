@extends('layouts.Home')

@section('content')

<link href="{{ url('css/frontLine.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<h1 class="text-center"> สินค้าในคลัง </h1>

<div class="container">
    <div class="section align-horizon">
        @foreach($products as $product)
            @include('layouts._Card')
        @endforeach
    </div>
</div>

@endsection