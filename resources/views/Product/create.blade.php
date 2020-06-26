@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">Create Post </div>
</div>
<form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name"> Purchase ID</label>
        <input type="text" class="form-control" name="purchase_id" id="purchase_id">
    </div>
    <div class="form-group">
        <label for="name"> Product Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>
    <div class="form-group">
        <label for="size"> Product Size</label>
        <input type="text" class="form-control" name="size" id="size">
    </div>
    <div class="form-group">
        <label for="color"> Product color</label>
        <input type="text" class="form-control" name="color" id="color">
    </div>
    <div class="form-group">
        <label for="quantity"> Product Quantity</label>
        <input type="text" class="form-control" name="quantity" id="quantity">
    </div>
    <div class="form-group">
        <label for="price"> Product Price</label>
        <input type="text" class="form-control" name="price" id="price">
    </div>

    <div class="form-group">
        <label for="supplyer">supplyer</label>
        <select name="supplyer" id="supplyer" class="form-control">
        @foreach ($supplyers as $supplyer)
        <option value="{{$supplyer->id}}">
            {{$supplyer->name}}  
        </option>
        @endforeach
    </select>
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-success">Create Post</button>
    </div>



    </div>
</form>
@endsection


