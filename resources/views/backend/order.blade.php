@extends('backend.master')

@section('content')
<h1>Order List</h1>
<!-- <button type="button" class="btn btn-primary">Primary</button> -->
<a class="btn btn-primary" href="{{route('order.form')}}">Create order</a>
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


@foreach($allOrders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->name}}</td>
      <td>{{$order->amount}}</td>
           <td>
        <a class="btn btn-primary" href="#">View</a>
        <a class="btn btn-danger" href="#">Delete</a>
        <a class="btn btn-info" href="#">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$allOrders->links()}}
@endsection