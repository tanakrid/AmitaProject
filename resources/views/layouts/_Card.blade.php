<div class="card small width-card pop-shadow">
    <div class="card-image">
    <img src="{{ url('image/accounting-close-up-computation-1418347.jpg') }}">
    <span class="card-title"><div class="black-tag">{{ $product->sheetName}}</div></span>
    <a class="btn-floating halfway-fab waves-effect waves-light red" href="{{ action('ShopsController@show', ['id' => $product->id])}}"><i class="material-icons">add</i></a>
    </div>
    <div class="card-content">
    <p>{{ $product->sheetType}}</p>
    <p>{{ $product->autorName}}</p>
    <p>{{ $product->subjectId}}</p>
    <p>{{ $product->secNumber}}</p>
    <p>{{ $product->autorName}}</p>
    <p>{{ $product->instructor}}</p>
    <p>{{ $product->price}}</p>
    </div>
</div>