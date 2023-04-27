@include('admin.bootstrap.cdn')
@extends('admin.admin')
@section('content')





<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Image</th>
        <th scope="col">Link</th>
        <th scope="col">Edite</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @php($i=1)
      @foreach ($portfolio as $portfolio )
      <tr>
        <th scope="row">{{ $i++}}</th>
        <td>{{$portfolio->image}}</td>
        <td>{{$portfolio->link}}</td>
        <td><a href="{{ url('portfolioes/edite/'.$portfolio->id)}}"class="btn btn-primary">Edite</a></td>
        <td><a href="{{ url('portfolioes/delete/'.$portfolio->id)}}" onclick="return confirm('Are you sure you want to delete')" class="btn btn-danger">Delete</a></td>
      </tr>      
      @endforeach
      
      <tr><a href="{{ route('addportfolio')}}" class="btn btn-primary" style="float:right">Add portfolio</a></tr>
    </tbody>
  </table>

@endsection()