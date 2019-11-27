@extends('layouts.Home')

@section('content')
<link href="{{ url('css/ProfileProduct.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<div class="container">
    <form action="{{ action('ShopsController@store')}}" method="POST">
        @csrf
        <div class="card-product pop-shadow">
            <h3>ชื่อชีท : {{ $product->sheet_name }} </h3>
            <p>ชนิดชีท : {{ $product->sheet_type }}</p>
            <p>ผู้ทำ : {{ $product->autor_name }}</p>
            <p>รหัสวิชา : {{ $product->subject_id }}</p>
            <p>หมู่ที่ : {{ $product->sec_number }}</p>
            <p>อาจารย์ผู้สอน : {{ $product->instructor }}</p>
            <p>ราคา : {{ $product->price }} บาท</p>
            <input type="hidden" value="{{ $product->id }}" name="sheet_id">
            @if(Auth::check())
                <input type="submit" class="btn-large" style="margin: auto 0;" value="Buy">
            @endif
        </div>
    </form>
</div>

@endsection