@extends('backend.master')


@section('content')
<h1>Payment Form</h1>



<form action="{{route('payment.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Enter Payment Name</label>
    <input name="pay_name" type="text" class="form-control" id="name" placeholder="Enter Payment Name">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Amount</label>
   <textarea class="form-control" name="pay_damount" id="" placeholder="Enter Total Amount"></textarea>
  </div>
  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Date</label>
   <textarea class="form-control" name="pay_date" id="" placeholder="Enter Date"></textarea>
  </div>

  


  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection