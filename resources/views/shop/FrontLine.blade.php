@extends('layouts.Home')

@section('content')

<link href="{{ url('css/frontLine.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<h1 class="text-center"> สินค้าขายดี </h1>
@auth
    <h1> tanakrid </h1>
@endauth
<div class="container">
    <!-- <embed src="file:///C:/Users/ccs_win10_17/Desktop/OS-A-IO.pdf" width="500" height="375"> -->
    <embed src="{{url('image/Ex-FileSystem.pdf')}}#toolbar=0" style="width:718px; height:700px;" frameborder="0">
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