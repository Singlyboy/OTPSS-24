@extends('backend.master')

@section('content')
<h1>Order List</h1>
<!-- <button type="button" class="btn btn-primary">Primary</button> -->

<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


@foreach($allOrders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->receiver_name}}</td>
      <td>{{$order->status}}</td>
           <td>
        <a class="btn btn-primary" href="{{route('order.View',$order->id)}}">View</a>
        
        @if($order->status=='pending')
        <!-- <a class="btn btn-danger" href="">Cancel</a> -->
        <!-- <a class="btn btn-info" href="{{route('order.confirm',$order->id)}}">Confirm</a> -->
        @endif
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$allOrders->links()}}
@endsection