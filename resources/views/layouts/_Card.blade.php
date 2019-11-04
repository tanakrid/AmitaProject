<div class="card small width-card pop-shadow">
    <div class="card-image">
    <img src="{{ url('image/accounting-close-up-computation-1418347.jpg') }}">
    <span class="card-title"><div class="black-tag">{{ $product->sheet_name}}</div></span>
    <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ action('ShopsController@show', ['id' => $product->id])}}"><i class="material-icons">add</i></a>
    </div>
    <div class="card-content">
    <p>{{ $product->sheet_type}}</p>
    <p>{{ $product->autor_name}}</p>
    <p>{{ $product->subject_id}}</p>
    <p>{{ $product->sec_number}}</p>
    <p>{{ $product->autor_name}}</p>
    <p>{{ $product->instructor}}</p>
    <p>{{ $product->price}}</p>
    </div>
</div>