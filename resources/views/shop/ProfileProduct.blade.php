@extends('layouts.Home')

@section('content')

<div class="container">
    <form action="{{ action('ShopsController@store')}}" method="POST">
        @csrf
        <h3> {{ $product->sheet_name }} </h3>
        <p> {{ $product->sheet_type }}</p>
        <p> {{ $product->autor_name }}</p>
        <p> {{ $product->subject_id }}</p>
        <p> {{ $product->sec_number }}</p>
        <p> {{ $product->instructor }}</p>
        <p> {{ $product->price }}</p>
        <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
        <input type="hidden" value="{{ $product->id }}" name="sheet_id">
        <input type="submit">
    </form>

    <button> Back </button>
</div>

@endsection