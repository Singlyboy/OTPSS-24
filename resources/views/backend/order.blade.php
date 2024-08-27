@extends('backend.master')

@section('content')
<h1>Order List</h1>
<!-- <button type="button" class="btn btn-primary">Primary</button> -->

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">Order Id</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Receiver Name</th>
      <th scope="col">Receiver Mobile</th>
      <th scope="col">Status</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Order Date</th>
      <th scope="col">Actions</th>
  
    </tr>
  </thead>


@foreach($allOrders as $order)
    <tr>
    <th scope="row">{{$order->id}}</th>
      <td>{{$order->customer->name}}</td>
      <td>{{$order->receiver_name}}</td>
      <td>{{$order->receiver_mobile}}</td>
      <td>{{$order->status}}</td>
      <td>{{$order->total_amount}} .BDT</td>
      <td>{{$order->payment_method}}</td>
      <td>{{$order->created_at}}</td>
           <td>
        <a class="btn btn-primary" href="{{route('order.View',$order->id)}}">View</a>
        
       
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection