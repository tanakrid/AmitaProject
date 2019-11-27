@extends('layouts.Home')

@section('content')

<link href="{{ url('css/frontLine.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<h1 class="text-center"> สินค้าขายดี </h1>

<div class="container">
    <div class="section align-horizon">
            <div class="card small width-card">
                <div class="card-image">
                <img src="{{ url('image/accounting-close-up-computation-1418347.jpg') }}">
                <span class="card-title">Card Title</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>

            <div class="card small width-card">
                <div class="card-image">
                <img src="{{ url('image/accounting-close-up-computation-1418347.jpg') }}">
                <span class="card-title">Card Title</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>

            <div class="card small width-card">
                <div class="card-image">
                <img src="{{ url('image/accounting-close-up-computation-1418347.jpg') }}">
                <span class="card-title">Card Title</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>


    </div>
</div>
<script>
    var instance = M.Carousel.init({
        fullWidth: true
    });
</script>
@endsection