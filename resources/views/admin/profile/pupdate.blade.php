
@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Update your information
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <!-- left column -->
      <div class="col-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title" style="padding-bottom: 20px">Edit Profile</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form role="form" action="{{ route('updateprofile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ $users->f_name}}"  placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $users->l_name}}"   placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" class="form-control" id="occupation" name="occupation" value="{{ $users->occupation}}"   placeholder="Enter you Heading">
              </div>
              <div class="form-group">
                <label for="dob">Date Of Birth</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{ $users->db}}"   placeholder="Enter Date of birth">
              </div>
              <div class="form-group">
                <label for="website">Website</label>
                <input type="text" class="form-control" id="website" name="website" value="{{ $users->website}}"   placeholder="Enter your Website">
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $users->email}}"   placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="degree">Degree</label>
                <input type="text" class="form-control" id="degree" name="degree" value="{{ $users->degree}}"   placeholder="Degree">
              </div>
              <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="{{ $users->phone}}"   placeholder="Phone Number">
              </div>
              <div class="form-group">
                <label for="phone">Freelance</label>
                <input type="text" class="form-control" id="freelance" name="freelance" value="{{ $users->freelance}}"   placeholder="Freelance">
              </div>
              <div class="form-group">
                <label for="image">image</label>
                <input type="file" class="form-control" id="image" name="image" placeholder="image">
              </div>
              <div class="form-group">
                <label for="image">Services image</label>
                <input type="file" class="form-control" id="services_image" name="services_image" placeholder="image">
              </div>
              <div class="form-group">
                <label for="cv">CV</label>
                <input type="file" class="form-control" id="cv" name="cv" value="{{ $users->cv}}"   placeholder="cv">
              </div>
              <div class="form-group">
                <label for="phone">address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{ $users->address}}"   placeholder="address">
              </div>
              <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control" id="language" name="language" value="{{ $users->language}}"   plceholder="language">
              </div>
              <div class="form-group">
                <label for="phone">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $users->description}}"   placeholder="Description">
              </div>
              <div class="form-group">
                <label for="Skill title">Skill title</label>
                <input type="text" class="form-control" id="skill_title" name="skill_title" value="{{ $users->skill_title}}"   placeholder="Description">
              </div>
              <div class="form-group">
                <label for="Skill Description">Skill Description</label>
                <input type="text" class="form-control" id="skill_Description" name="skill_description" value="{{ $users->skill_description}}"   placeholder="Description">
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
  @endsection