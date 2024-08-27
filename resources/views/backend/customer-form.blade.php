@extends('backend.master')


@section('content')
<h1>Customer Form</h1>



<form action="{{route('customer.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Enter customer Name</label>
    <input name="cus_name" type="text" class="form-control" id="name" placeholder="Enter Customer Name">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Email</label>
   <textarea class="form-control" name="cus_email" id="" placeholder="Enter email"></textarea>
  </div>
  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Mobile Number</label>
   <textarea class="form-control" name="cus_mobile" id="" placeholder="Enter mobile number"></textarea>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection