@extends('layouts.Home')

@section('content')

<div class="container">
    <h3> {{ $product->sheetName }} </h3>
    <p> {{ $product->sheetType }}</p>
    <p> {{ $product->autorName }}</p>
    <p> {{ $product->subjectId }}</p>
    <p> {{ $product->secNumber }}</p>
    <p> {{ $product->instructor }}</p>
    <p> {{ $product->price }}</p>

    <form action="">
        <input type="hidden">
        <input type="submit">
    </form>

    <button> Back </button>
</div>

@endsection