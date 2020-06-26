@extends('layouts.app');
@section('content')
<div class="card card-default">
    <div class="card-header">Quotations</div>
    <a href="{{route('quotation.create')}}" class="btn btn-success">Add Quotation</a>
</div>

<div class="card card-default">
    <div class="card-header">Quotation sort by Supplyer ID</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Biller</th>
                <th>Purchase Id</th>
                <th>Customer</th>
                <th>Supplier</th>
                <th>Quantity</th>
                <th>Time Period</th>
                <th>Grand Total</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($quotations as $quotation)
                    
                <tr>
                    <td>
                        {{$quotation->biller}}
                    </td>
                    <td>
                        {{$quotation->product->purchase_id}}
                    </td>
                        <td>
                            {{$quotation->product->name}}
                        </td>
                        <td>
                            {{$quotation->supplyer->name}}
                        </td>
                        <td>
                            {{$quotation->product->quantity}}
                        </td>
                        <td>
                            {{$quotation->date}}
                        </td>
                        <td>
                            {{$quotation->supplyer->balance}}
                        </td>
                       
                      
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>



    
@endsection