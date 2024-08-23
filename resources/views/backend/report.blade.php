@extends('backend.master')

@section('content')
<h1>Order list</h1>

<form action="{{route('report.list')}}">
@csrf
<div class="form-group">
    <label for="">Enter From Date</label>
    <input required value="{{request()->from_date}}" name="from_date" type="date" class="form-control" id="" placeholder="Enter Parts Name">
  </div>
  <div class="form-group">
    <label for="">Enter To Date</label>
    <input required value="{{request()->to_date}}" name="to_date" type="date" class="form-control" id="" placeholder="Enter Parts Name">
  </div>
  <a class="btn btn-info" href="">Search</a>


</form>

  <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Status</th>
   
    </tr>
  </thead>


@foreach($allOrders as $order)
    <tr>
      <th scope="row">{{$order->id}}</th>
      <td>{{$order->receiver_name}}</td>
      <td>{{$order->status}}</td>
      @endforeach
  </tbody>
</table>

{{$allOrders->links()}}

@endsection