@extends('layouts.Home')

@section('content')
    <h1> all posts </h1>
    {{-- Comment will not be compiled --}}
    <p>{{ date('j M Y H:i:s')}}</p>
    <p>
        {{$posts[0]->title}}
    </p>

    @foreach($posts as $post)
        <div class="card" style="width: 18rem;margin-top: 3rem">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title}}</h5>
                <p class="card-text">{{ $post->detail}}</p>
                <a href="{{ route('posts.show',['post' => $post->id])}}" class="card-link">Another link</a>

                <p> Created: {{ $post->created_at->diffForHumans() }} 
                    ({{ $post->view_count }} views)
                </p>
            </div>
        </div>
    @endforeach
@endsection