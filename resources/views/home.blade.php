@extends('layout')

@section('title') 
    All User Data
@endsection

@section('content')
<div class="text-right mb-3">
            <a href="{{route('user.create')}}" class="btn btn-success">
                <i class="fa fa-plus-circle"></i> Add User
            </a>
</div>
<table class="table table-striped table-bordered">
    <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Email</th>
          <th>Age</th>
          <th>City</th>
          <th>View</th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        @php $i = 1;@endphp
        @foreach ($users as $users)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $users->name}}</td>
              <td>{{ $users->email}}</td>
              <td>{{ $users->age}}</td>
              <td>{{ $users->city}}</td>
              <td><a href="{{route('user.show',$users->id)}}" class="btn btn-primary btn-sm">View</a></td>
              <td><a href="{{route('user.edit',$users->id)}}" class="btn btn-warning btn-sm">Update</a></td>
              <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>   
        @endforeach
    </tbody>
</table>
@endsection

