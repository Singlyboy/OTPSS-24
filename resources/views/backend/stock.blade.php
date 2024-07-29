@extends('backend.master')

@section('content')
<h1>Stock List</h1>
<table class="table">
  <!-- <button type="button" class="btn btn-primary">Primary</button> -->
<a class="btn btn-primary" href="{{route('stock.form')}}">Create Stock list</a>
  
<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Last Update</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  
@foreach($allStocks as $stock)
    <tr>
      <th scope="row">{{$stock->id}}</th>
      <td>{{$stock->name}}</td>
      <td>{{$stock->quentity}}</td>
      <td>{{$stock->update}}</td>
           <td>
        <a class="btn btn-primary" href="#">View</a>
        <a class="btn btn-danger" href="#">Delete</a>
        <a class="btn btn-info" href="#">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection