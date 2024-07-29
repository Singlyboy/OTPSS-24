@extends('backend.master')

@section('content')
<h1>Payment List</h1>
<!-- <button type="button" class="btn btn-primary">Primary</button> -->
<a class="btn btn-primary" href="{{route('payment.form')}}">Create Payment</a>
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


@foreach($allPayments as $payment)
    <tr>
      <th scope="row">{{$payment->id}}</th>
      <td>{{$payment->name}}</td>
      <td>{{$payment->amount}}</td>
      <td>{{$payment->date}}</td>
           <td>
        <a class="btn btn-primary" href="#">View</a>
        <a class="btn btn-danger" href="#">Delete</a>
        <a class="btn btn-info" href="#">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$allPayments->links()}}

@endsection