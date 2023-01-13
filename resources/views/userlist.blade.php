@extends('master')


@section('contant')


<table class="table auto">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{Session::get('status')}}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">deleteUser</th>
      <th scope="col">EditUser</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
     <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td><a href="delete/{{$item->id}}"><button type="button" class="btn btn-primary">Delete</button></a></td>
      <td><a href="update/{{$item->id}}"><button type="button" class="btn btn-primary">Edit</button></a></td>
      
      
    </tr>
    @endforeach
 
  </tbody>
</table>
@endsection