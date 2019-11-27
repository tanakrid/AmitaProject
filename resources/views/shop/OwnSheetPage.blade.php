@extends('layouts.Home')

@section('content')

<div class="container">
    <h3> {{ $product->sheet_name }} </h3>
    <p> {{ $product->sheet_type }}</p>
    <p> {{ $product->autor_name }}</p>
    <p> {{ $product->subject_id }}</p>
    <p> {{ $product->sec_number }}</p>
    <p> {{ $product->instructor }}</p>
    <p> {{ $product->price }}</p>
    <embed src="{{ $product->sheet_src }}#toolbar=0" style="width:718px; height:700px;" frameborder="0">
    <button> Back </button>
</div>

@endsection