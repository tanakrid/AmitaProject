@extends('layouts.Home')

@section('content')
<link rel="stylesheet" href="{{ url('css/selling.css')}}">
<div class="container">
    <h1 style="text-align:center;margin-top:2rem;"> Selling Form </h1>
    <form action="{{ action('CommerceController@store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="" class="font-form"> ชื่อชีท </label><br>
        <input type="text" placeholder="Enter" name="sheet_name"><br>
        <label for="" class="font-form"> ชนิดชีท </label><br>
        <input type="text" placeholder="Enter" name="sheet_type"><br>
        <label for="" class="font-form"> อาจารย์ผู้สอน </label><br>
        <input type="text" placeholder="Enter" name="instructor"><br>
        <label for="" class="font-form"> รหัสวิชา </label><br>
        <input type="text" placeholder="Enter" name="subject_id"><br>
        <label for="" class="font-form"> หมู่ที่เรียน </label><br>
        <input type="text" placeholder="Enter" name="sec_number"><br>
        <label for="" class="font-form"> ราคา </label><br>
        <input type="text" placeholder="Enter" name="price"><br>
        <label for="" class="font-form"> Upload File Sheet </label><br>
        <input type="file" id="sheet" name="sheet" >

        <input type="submit" class="waves-effect waves-light btn-large right" value="ยืนยันการวางขาย">
    </form>
</div>
@endsection