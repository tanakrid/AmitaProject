<h1> News Board Working.. </h1>
<style>
    
</style>
<div class="container">
    @foreach($posts as $post)
        <div class="card width-card pop-shadow" style="width:100%;height:30vh">
            <div class="card-image" >
            <img src="{{ url('image/accounting-close-up-computation-1418347.jpg') }}">
            </div>
            <div class="card-content" style="width:100%">
                <p>{{ $post->name}}</p>
                <p>{{ $post->detail}}</p>
                <p>{{ $post->image_src}}</p>
                <p>{{ $post->view_count}}</p>
            </div>
        </div>
    @endforeach
</div>
