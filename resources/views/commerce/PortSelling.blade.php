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
                    <td style="vertical-align: top;text-align:center;">{{ $product->sheet_name }}</td>
                    <td>
                        <p>
                            <p>type : {{$product->sheet_type}}</p>
                            <p>autor : {{$product->autor_name}}</p>
                            <p>subject id : {{$product->subject_id}}</p>
                            <p>section : {{$product->sec_number}}</p>
                            <p>instructor : {{$product->instructor}}</p>
                        </p>
                    </td>
                    <td style="vertical-align: top;text-align:center;">{{ $product->created_at }}</td>
                    <td style="vertical-align: top;text-align:center;">{{ $product->price }}</td>
                    <td style="vertical-align: top;text-align:center;">{{ $product->sale }}</td>
                    <td style="vertical-align: top;text-align:center;">{{ $product->income }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td style="vertical-align: top;text-align:center;"> {{ $sumAmount }} </td>
                    <td style="vertical-align: top;text-align:center;"> {{ $sumIncome }} </td>
                </tr>
            @endif
        </table>
    </div>
</div>
@endsection