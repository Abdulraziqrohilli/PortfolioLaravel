@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')
<h3 class="box-title">Blogs Table</h3>
<table class="table">
    <thead>
      <tr>
        <th scope="col">NO</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Edite</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @php($i=1)
        @foreach ($blog as $blog )
      <tr>
        <th scope="row">{{ $i++ }}</th>
        <td>{{ $blog->image }}</td>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->description }}</td>
        <td><a href="{{ url('blogs/edite/'.$blog->id)}}" class="btn btn-primary">Edit</a></td>
        <td><a href="{{ url('blogs/delete/'.$blog->id)}}" onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
    <tr><a href="{{ route('addblog')}}" class="btn btn-primary" style="float: right;">Add blog</a></tr>
  </table>
  @endsection