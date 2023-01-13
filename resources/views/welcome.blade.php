@extends('master')
@section('contant')
@if(Session::get('status'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <!-- <strong>{{Session::get('status')}}</strong> -->
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<h1>Home Page</h1>
@endsection