@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')

<h3 class="box-title">Services Table</h3>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>No.</th>
        <th>Title</th>
        <th>Icon</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @php($i=1)
      @foreach ($services as $services )
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $services->title }}</td>
        <td>{{ $services->icon }}</td>
        <td>{{ $services->description }}</td>
        <td><a href="{{ url('services/edite/'.$services->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href="{{ url('services/delet/'.$services->id)}}" onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
    <tr><a href="{{ route('addservices')}}" class="btn btn-primary" style="float: right;">Add services</a></tr>
  </table>
  @endsection