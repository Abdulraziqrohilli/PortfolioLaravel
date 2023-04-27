@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')



<form role="form" action="{{ route('portfolioadd') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Image</label>
      <input type="file" class="form-control" name="image" id="formGroupExampleInput" placeholder="">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Another label</label>
      <input type="text" class="form-control" name="link" id="formGroupExampleInput2" placeholder="Another input">
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
  </form>

@endsection()