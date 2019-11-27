<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title> Amita project </title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ url('css/materialize.min.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ url('css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/> 

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  
  @if(Auth::check())
    @include('layouts._MainNavbar')
  @else
    @include('layouts._nonLoginNavbar')
  @endif

  @yield('content')

  @include('layouts._footer')

  
  <script src="{{ url('js/materialize.min.js') }}"></script>
  <script src="{{ url('js/init.js') }}"></script>
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
</body>
</html>
