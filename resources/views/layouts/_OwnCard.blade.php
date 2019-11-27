<div class="card pop-shadow width-card">
    <div class="card-image">
        <img src="{{ url('image/accounting-close-up-computation-1418347.jpg') }}">
        <span class="card-title"><div class="black-tag">{{ $product->sheet_name}}</div></span>
    </div>
    <div class="card-content">
        <p>ชนิดชีท : {{ $product->sheet_type}}</p>
        <p>ผู้จัดทำ : {{ $product->autor_name}}</p>
        <p>รหัสวิชา : {{ $product->subject_id}}</p>
        <p>หมู่เรียนที่ : {{ $product->sec_number}}</p>
        <p>อาจารย์ที่สอน : {{ $product->instructor}}</p>
    </div>
    <div class="card-action">
        <a class="btn" href="{{ action('ShopsController@showOwnSheet', ['id' => $product->id])}}">Download</a>
    </div>
</div>