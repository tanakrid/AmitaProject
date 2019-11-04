@extends('layouts.Home')

@section('content')
<link rel="stylesheet" href="{{ url('css/selling.css')}}">
<div class="container">
    <h1> Selling Form </h1>
    <form action="{{ action('CommerceController@store') }}" method="POST">
        @csrf
        <label for=""> Sheet name </label><br>
        <input type="text" placeholder="Enter" name="sheet_name"><br>
        <label for=""> Sheet type </label><br>
        <input type="text" placeholder="Enter" name="sheet_type"><br>
        <label for=""> of Instructor </label><br>
        <input type="text" placeholder="Enter" name="instructor"><br>
        <label for=""> Subject Code </label><br>
        <input type="text" placeholder="Enter" name="subject_id"><br>
        <label for=""> Section Number </label><br>
        <input type="text" placeholder="Enter" name="sec_number"><br>
        <label for=""> Price </label><br>
        <input type="text" placeholder="Enter" name="price"><br>

        <label for=""> Upload File Sheet </label><br>
        <input type="text" name="sheet_src"><br>

        <input type="submit" class="waves-effect waves-light btn-large right">
        <button class="waves-effect waves-light red lighten-1 btn-large right"> cancel </button>
    </form>
</div>
@endsection