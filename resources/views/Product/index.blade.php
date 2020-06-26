@extends('layouts.app');
@section('content')
<div class="card card-default">
    <div class="card-header">Products</div>
    <a href="{{route('product.create')}}" class="btn btn-success">Add Product</a>
   
</div>

<div class="card card-default">
    <div class="card-header">All Products</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Size</th>
                <th>Color</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Supplier</th>
                <th>Action</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    
                <tr>
                   
                    <td>
                        {{$product->name}}
                    </td>
                    <td>
                        {{$product->size}}
                    </td>
                    <td>
                        {{$product->color}}
                    </td>
                    <td>
                        {{$product->price}}
                    </td>
                    <td>
                        {{$product->quantity}}
                    </td>
                    <td>
                        {{$product->supplyer->name}}
                    </td>
                    <td>
                        <a href="{{route('product.edit', $product->id)}}" class="btn btn-info btn-sms">Edit</a>
                    </td>
                    <td>
                    
                    </td>
                 
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

    
@endsection