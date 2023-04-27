@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Update your information
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add skills</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('skillsadd') }}" method="POST"  enctype="multipart/form-data">
                @csrf
                <div class="box-body">
                <div class="form-group">
                  <label for="skill">skill</label>
                  <input type="text" class="form-control" id="skill" name="skill" value="" placeholder="Enter the skill">
                </div>
                <div class="form-group">
                    <label for="percentage">percentage</label>
                    <input type="text" class="form-control" id="percentage" name="percentage" value="" placeholder="Enter the percentage">
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