@extends('layout')

@section('title') 
    User Details
@endsection

@section('content')
<table class="table table-striped table-bordered">
  <tr>
    <th width="80px">Name : </th>
    <th>{{ $users->name }}</th>
  </tr>
  <tr>
    <th>Email : </th>
    <th>{{ $users->email }}</th>
  </tr>
  <tr>
    <th>Age : </th>
    <th>{{ $users->age }}</th>
  </tr>
  <tr>
    <th>City : </th>
    <th>{{ $users->city }}</th>
  </tr>
</table>
<div class="mt-3">
    <a href="{{route('user.index')}}" class="btn btn-danger">
         Back
    </a>
</div>

@endsection

 