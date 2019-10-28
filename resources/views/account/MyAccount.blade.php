@extends('layouts.Home')

@section('content')
<div class="container">
    <h1>{{ Auth::user()->name }}</h1>
</div>
@endsection