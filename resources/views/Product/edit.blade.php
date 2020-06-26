@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">Update Product </div>
</div>
<form action="{{URL::to('update/' . $product->id)}}" method="get" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name"> Purchase ID</label>
        <input type="text" class="form-control" name="purchase_id" id="purchase_id" value="{{$product->purchase_id}}">
    </div>
    <div class="form-group">
        <label for="name"> Product Name</label>
        <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
    </div>
    <div class="form-group">
        <label for="size"> Product Size</label>
        <input type="text" class="form-control" name="size" id="size" value="{{$product->size}}">
    </div>
    <div class="form-group">
        <label for="color"> Product color</label>
        <input type="text" class="form-control" name="color" id="color" value="{{$product->color}}">
    </div>
    <div class="form-group">
        <label for="quantity"> Product Quantity</label>
        <input type="text" class="form-control" name="quantity" id="quantity" value="{{$product->quantity}}">
    </div>
    <div class="form-group">
        <label for="price"> Product Price</label>
        <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}">
    </div>

    



    <div class="form-group">
        <button type="submit" class="btn btn-success">Update Product</button>
    </div>



    </div>
</form>
@endsection


