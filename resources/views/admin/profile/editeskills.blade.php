@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')


<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Update Your Services
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <section class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit skills</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ url('skills/update/'.$skills->id)}}" method="post"  enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                <div class="form-group">
                  <label for="skill">skill</label>
                  <input type="text" class="form-control" id="skill" name="skill" value="{{ $skills->section}}" placeholder="Enter the skill">
                </div>
                <div class="form-group">
                    <label for="percentage">percentage</label>
                    <input type="text" class="form-control" id="percentage" name="percentage" value="{{ $skills->percentage}}"  placeholder="Enter the percentage">
                </div>
                </div>
              <!-- /.box-body -->
                <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  @endsection()