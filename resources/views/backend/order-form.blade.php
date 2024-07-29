@extends('backend.master')


@section('content')
<h1>Order Form</h1>



<form action="{{route('order.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Enter Customer Name</label>
    <input name="ord_name" type="text" class="form-control" id="name" placeholder="Enter Customer Name">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Total Amount</label>
   <textarea class="form-control" name="ord_amount" id="" placeholder="Enter Amount"></textarea>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection