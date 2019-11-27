@extends('layouts.Home')

@section('content')
<link href="{{ url('css/frontLine.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<div class="container">
    <div class="section">
        <div class="col s12 m8 offset-m2 l6 offset-l3">
            <div class="card-panel grey lighten-5 z-depth-1">
            <div class="row valign-wrapper">
                <div class="col s2">
                <img src="{{ url('image/some/user_male2-512.png') }}" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
                </div>
                <div class="col s10">
                <span class="black-text">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                </span>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div>
            <h1> สินค้าในตะกร้า </h1>
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
        <div>
            <h1> สินค้าที่มี </h1>
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
    </div>
</div>
@endsection