@extends('layouts.Home')

@section('content')
        <div class="card" style="width: 18rem;margin-top: 3rem">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title}}</h5>
                <p class="card-text">{{ $post->detail}}</p>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
@endsection