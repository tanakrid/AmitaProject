@extends('layouts.Home')

@section('content')
<link rel="stylesheet" href="{{ url('css/portSelling.css') }}">

<div class="container">
<div>
        <h1 style="text-align:center;margin-top:2rem;">Sales report table</h1>
        <table class="highlight">
            <tr>
                <th> Name </th>
                <th> Detail </th>
                <th> Put on Sale </th>
                <th> Price </th>
                <th> Amount sold </th>
                <th> Income </th>
                <th> Option </th>
            </tr>
            @if(sizeof($products) == 0)
                <tr><td colspan="7" class="centered" style="text-align:center;font-size:1.5rem">ไม่มีการขาย</td></tr>
            @else
                @foreach($products as $product)
                <tr>
                    <td style="vertical-align: top;text-align:center;">{{ $product->sheet_name }}</td>
                    <td style="vertical-align: top;">
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
                    <td style="vertical-align: top;text-align:center;">{{ $product->sale }} </td>
                    <td style="vertical-align: top;text-align:center;">{{ $product->income }}</td>
                    <td style="vertical-align: top;text-align:center;">
                        <a class="waves-effect waves-light btn" href="{{ action('CommerceController@editSheet', ['id'=>$product->id])}}" style="margin-top:0.5rem"> edit </a>
                        <form action="{{ action('CommerceController@destroy', ['id'=>$product->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="red lighten-1 waves-effect waves-light btn" type='submit' value="delete" style="margin-top:0.5rem">
                        </form>
                    </td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="4"></td>
                    <td> จำนวนชีทที่ขายได้ : {{ $sumAmount }} </td>
                    <td> รายได้รวม : {{ $sumIncome }} </td>
                </tr>
            @endif
        </table>
    </div>
</div>
@endsection