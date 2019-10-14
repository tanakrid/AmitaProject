@extends('layouts.Home')

@section('content')
    <div class="container">
        <form action="">
            <label for=""> ชื่อ </label>
            <input type="text">
            <label for=""> นามสกุล </label>
            <input type="text">
            <label for=""> E-mail </label>
            <input type="text">
            <label for=""></label>
            <label for=""> คำถามกู้รหัส </label>
            <input type="text">
            <label for=""> คำตอบ </label>
            <input type="text">
            <input type="submit">
            <button> cancel </button>
        </form>
    </div>
@endsection