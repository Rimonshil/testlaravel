@extends('layouts.app');
@section('content')
<div class="card card-default">
    <div class="card-header">Supplyer</div>
    <a href="{{route('supplyer.create')}}" class="btn btn-success">Add Supplyer</a>
   <!-- <a href="{{route('product.index')}}" class="btn btn-success mt-2">Product List</a>-->
</div>

<div class="card card-default">
    <div class="card-header">Supplyer</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>Name</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Action</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($supplyers as $supply)
                    
                <tr>
                    <td>
                        {{$supply->name}}
                    </td>
                        <td>
                            {{$supply->address}}
                        </td>
                        <td>
                            {{$supply->contact}}
                        </td>
                        <td>
                            <a href="{{route('supplyer.edit', $supply->id)}}" class="btn btn-info btn-sms">Edit</a>
                         </td>
                      
                       
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

    
@endsection