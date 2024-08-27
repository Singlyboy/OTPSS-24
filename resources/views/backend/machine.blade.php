@extends('backend.master')

@section('content')
<h1>Machine List</h1>

<!-- <button type="button" class="btn btn-primary">Primary</button> -->
<a class="btn btn-primary" href="{{route('machine.form')}}">Create Machine List</a>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach( $allMechines as $Machine)
    <tr>
      <th scope="row">{{$Machine->id}}</th>
      <td>{{$Machine->tittle}}</td>
      <td>{{$Machine->description}}</td>
      <td>
        <a href="" class="btn btn-danger">Delete</a>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-primary">View</a>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>

{{ $allMechines->links() }}

@endsection