@extends('layouts.Home')

@section('content')
<div class="container">
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
                <th> Option </th>
            </tr>
            @if($products == null)
                <tr><td colspan="7" class="centered" style="text-align:center"> no data </td></tr>
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
                        <a class="waves-effect waves-light btn"> edit </a>
                        <a class="red lighten-1 waves-effect waves-light btn"> delete </a>
                    </td>
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
    <a class="waves-effect waves-light btn">button</a>
</div>
@endsection