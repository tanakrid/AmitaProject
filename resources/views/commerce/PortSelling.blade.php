@extends('layouts.Home')

@section('content')

<link rel="stylesheet" href="{{ url('css/portSelling.css') }}">
<div class="container">
    <div class="right">
        <a class="waves-effect waves-light btn-large" href="{{ action('CommerceController@create') }}">ตั้งขายสินค้า</a>
        <a class="waves-effect waves-light btn-large" href="{{ action('CommerceController@edit', ['id' => 22222])}}">จัดการสินค้า</a>
    </div>
    <div>
        <h1>Sales report table</h1>
        <table class="highlight">
            <tr>
                <th> Name </th>
                <th> Detail </th>
                <th> Put on Sale </th>
                <th> Price </th>
                <th> Amount sold </th>
                <th> Income </th>
            </tr>
            @if($products == null)
                <tr><td colspan="6" class="centered" style="text-align:center"> no data </td></tr>
            @else
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->sheetName }}</td>
                    <td>
                        <p>
                            {{
                                $product->sheetType.
                                $product->autorName.
                                $product->subjectId.
                                $product->secNumber.
                                $product->autorName.
                                $product->instructor 
                            }}
                        </p>
                    </td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->price }}</td>
                    <td> 0 </td>
                    <td> 0 </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td> {{ $sumAmount }} </td>
                    <td> {{ $sumIncome }} </td>
                </tr>
            @endif
        </table>
    </div>
</div>
@endsection