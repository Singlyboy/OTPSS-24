@extends('backend.master')


@section('content')
<h1>Stock Form</h1>



<form action="{{route('stock.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Enter Stock Name</label>
    <input name="sto_name" type="text" class="form-control" id="name" placeholder="Enter Stock Name">
  </div>
  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Quantity</label>
   <textarea class="form-control" name="sto_quantity" id="" placeholder="Enter Total Quantity"></textarea>
  </div>
  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Lsat Update</label>
   <textarea class="form-control" name="sto_update" id="" placeholder="Enter Last update"></textarea>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection