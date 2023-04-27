@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')



<img src="{{ asset('/image/portfolio/'.$portfolio->image) }}" width="200" height="200" alt="">
<form role="form" action="{{ url('portfolio/update/'.$portfolio->id)}}" method="POST" enctype="multipart/form-data" >
    @csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Image</label>
      <input type="file" class="form-control" name="image" id="formGroupExampleInput">
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput2">Link</label>
      <input type="text" class="form-control" name="link" id="formGroupExampleInput2" value="{{$portfolio->link}}">
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        </div>
  </form>

@endsection()