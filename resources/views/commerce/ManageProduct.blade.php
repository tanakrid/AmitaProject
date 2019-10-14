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
                    <td>
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