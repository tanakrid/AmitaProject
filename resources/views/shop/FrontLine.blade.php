@extends('layouts.Home')

@section('content')

<link href="{{ url('css/frontLine.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<h1 class="text-center"> สินค้าขายดี </h1>
@auth
    <h1> tanakrid </h1>
@endauth
<div class="container">
    <div class="section align-horizon">
        @foreach($products as $product)
            @include('layouts._Card')
        @endforeach
    </div>
</div>

<h1 class="text-center"> สินค้าทั้งหมด </h1>

<div class="container">
    <div class="section align-horizon">
        @foreach($products as $product)
            @include('layouts._Card')
        @endforeach
    </div>
</div>

<script>
    var instance = M.Carousel.init({
        fullWidth: true
    });
</script>
@endsection