@extends('layouts.app')
@section('content')
<div class="card card-default">
    <div class="card-header">Create Suppyler </div>
</div>
<form action="{{route('supplyer.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <textarea type="text" class="form-control" name="address" id="address" cols="5" rows="5"></textarea>
    </div>

    <div class="form-group">
        <label for="contact">Contact</label>
        <input type="text" class="form-control" name="contact" id="contact">
    </div>

    <div class="form-group">
        <label for="balance">Balance</label>
        <input type="text" class="form-control" name="balance" id="balance">
    </div>

    <div class="form-group">
        <label for="paid_balance">Paid Balance</label>
        <input type="text" class="form-control" name="paid_balance" id="paid_balance">
    </div>



    <div class="form-group">
        <button type="submit" class="btn btn-success">Create Supplyer</button>
    </div>



    </div>
</form>
@endsection

