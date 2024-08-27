@extends('backend.master')


@section('content')
<h1>Machine Form</h1>



<form action="{{route('machine.store')}}" method="post">
@csrf
  <div class="form-group">
    <label for="name">Enter Machine Name</label>
    <input name="mac_name" type="text" class="form-control" id="name" placeholder="Enter Machine Name">
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Enter Description</label>
   <textarea class="form-control" name="mac_description" id="" placeholder="Enter Description"></textarea>
  </div>

  <div class="form-group" style="margin-top: 10px;">
    <label for="name">Uplaod Image</label>
    <input name="mac_image" type="file" class="form-control" id="name" placeholder="Enter Machine Name">
  </div>
  



  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection