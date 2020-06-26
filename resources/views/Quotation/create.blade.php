@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">Create Suppyer </div>
</div>
<form action="{{route('quotation.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Biller</label>
        <input type="text" class="form-control" name="biller" id="biller">
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="text" class="form-control" name="date" id="date">
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
        <label for="product">Product Name</label>
        <select name="product" id="product" class="form-control">
        @foreach ($products as $product)
        <option value="{{$product->id}}">
            {{$product->name}}  
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
@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    flatpickr("#date", {
        enableTime: true
    })
</script>
    
@endsection

@section('css')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">


@endsection


