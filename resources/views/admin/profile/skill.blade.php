@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')



<section class="container-fluid">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Skills Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No.</th>
                <th>skill</th>
                <th>percentage</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
              </thead>
              <tbody>
              @php($i=1)
              @foreach ($skills as $skills )
              <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $skills->section }}</td>
                <td>{{ $skills->percentage }}</td>
                <td><a href="{{ url('skills/edite/'.$skills->id)}}" class="btn btn-primary">Edit</a></td>
                <td><a href="{{ url('skills/delete/'.$skills->id)}}" onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger">Delete</a></td>
              </tr>
              @endforeach
              <tr><a href="{{ route('addskills')}}" class="btn btn-primary" style="float: right;">Add services</a></tr>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  @endsection()





  {{-- <svg viewBox="0 0 512 512">
    <g>
      <path d="m336 144a8 8 0 0 0 -8 8v104a8 8 0 0 0 16 0v-104a8 8 0 0 0 -8-8z" />
      <path d="m336 272a8 8 0 0 0 -8 8v8a8 8 0 0 0 16 0v-8a8 8 0 0 0 -8-8z" />
      --}}