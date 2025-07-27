@extends('layout')

@section('title') 
    Update User
@endsection

@section('content')
<form action="{{route('user.update',[$users->id])}}" method="post">
    @csrf
    @method('PUT')
     <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$users->name}}" id="name" name="name" placeholder="Enter Name">
         @error('name')
                <span class="text-danger">{{ $message }}</span>   
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{$users->email}}" id="email" name="email"  placeholder="Enter Email">
         @error('email')
                <span class="text-danger">{{ $message }}</span>   
        @enderror
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" class="form-control @error('age') is-invalid @enderror" id="age" value="{{$users->age}}" name="age" placeholder="Enter Age" >
        @error('age')
            <span class="text-danger">{{ $message }}</span>   
        @enderror
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" value="{{$users->city}}" name="city" placeholder="Enter City">
        @error('city')
           <span class="text-danger">{{ $message }}</span>   
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

 