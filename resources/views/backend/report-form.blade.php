@extends('backend.master')


@section('content')
<h1>Report Form</h1>



<form action="{{route('report.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Enter Report Name</label>
    <input name="rep_name" type="text" class="form-control" id="name" placeholder="Enter Report Name">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Date</label>
   <textarea class="form-control" name="rep_date" id="" placeholder="Enter Date"></textarea>
  </div>



  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection