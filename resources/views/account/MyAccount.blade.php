@extends('layouts.Home')

@section('content')
<link href="{{ url('css/account.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>

<div class="container-page">
    <h1> Your Profile </h1>
    <div class="normal-profile">
        <table>
            <tr>
                <td>Name</td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
            <tr>
                <td>Role</td>
                <td>{{ Auth::user()->role }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ Auth::user()->email }}</td>
            </tr>
            <tr>
                <td>Register time</td>
                <td>{{ Auth::user()->created_at }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection