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
        @foreach ($users as $user)
            <tr>
              <td>{{ $i++ }}</td>
              <td>{{ $user->name}}</td>
              <td>{{ $user->email}}</td>
              <td>{{ $user->age}}</td>
              <td>{{ $user->city}}</td>
              <td><a href="{{route('user.show',$user->id)}}" class="btn btn-primary btn-sm">View</a></td>
              <td><a href="{{route('user.edit',$user->id)}}" class="btn btn-warning btn-sm">Update</a></td>
              <td>
                <form action="{{route('user.destroy',$user->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
             </td>
            </tr>   
        @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $users->links() }}
</div>
@endsection

