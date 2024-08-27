@extends('backend.master')

@section('content')

<h1>Parts List</h1>
<!-- <button type="button" class="btn btn-primary">Primary</button> -->
<a class="btn btn-primary" href="{{route('parts.form')}}">Create New Parts </a>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Category Name</th>
      <th scope="col">Descption</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($allParts as $parts)
    <tr>
      <th scope="row">{{$parts->id}}</th>
      <td>{{$parts->name}}</td>
      <td>{{$parts->category->name}}</td>
      <td>{{$parts->description}}</td>
      <td>{{$parts->price}} BDT</td>
      <td>{{$parts->stock}}</td>
      
      <td>
        <img src="{{url('/upload/upload/')}}" alt="">
      <img width="100px" height="100px" src="{{url('/upload/upload/'.$parts->image)}}" alt="">
      </td>
      <td>
      <a href="{{route('parts.view',$parts->id)}}" class="btn btn-primary">View</a>
      <a href="{{route('parts.edit',$parts->id)}}" class="btn btn-success">Edit</a>
      <a href="{{route('parts.delete',$parts->id)}}" class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$allParts->links()}}

@endsection