@extends('backend.master')

@section('content')
<h1>Report List</h1>
<!-- <button type="button" class="btn btn-primary">Primary</button> -->
<a class="btn btn-primary" href="{{route('report.form')}}">Create Report</a>
<table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


@foreach($allReports as $report)
    <tr>
      <th scope="row">{{$report->id}}</th>
      <td>{{$report->name}}</td>
      <td>{{$report->date}}</td>
           <td>
        <a class="btn btn-primary" href="#">View</a>
        <a class="btn btn-danger" href="#">Delete</a>
        <a class="btn btn-info" href="#">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$allReports->links()}}

@endsection