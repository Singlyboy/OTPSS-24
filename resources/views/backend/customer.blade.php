@extends('backend.master')

@section('content')
<h1>Customer List</h1>

<!-- <button type="button" class="btn btn-primary">Primary</button> -->
<a class="btn btn-primary" href="{{route('customer.form')}}">Create customer List</a>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  
@foreach($allCustomers as $customer)
    <tr>
      <th scope="row">{{$customer->id}}</th>
      <td>{{$customer->name}}</td>
      <td>{{$customer->email}}</td>
      <td>{{$customer->mobile}}</td>
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