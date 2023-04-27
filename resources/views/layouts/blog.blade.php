

@extends('layouts.home')
@section('dynamic')



 <div class="st-content">
    !-- .st-page-heading -->
    <div class="st-height-b100 st-height-lg-b80"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-md-1">
          <div class="st-post-details st-style1">
            <img class="st-zoom-in" src="{{ url('image/blog/'.$blogs->image) }}" alt="blog1">
            <h1>{{ $blogs->title}}</h1>
            <p>{{ $blogs->description}}</p>
            
            
          <div class="st-height-b60 st-height-lg-b60"></div>
          
        </div>
      </div>
    </div>
    <div class="st-height-b100 st-height-lg-b80"></div>
  </div>
@endsection

