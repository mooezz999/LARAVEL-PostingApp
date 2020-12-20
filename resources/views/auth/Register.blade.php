@extends('layouts.app')



@section('content')

<form action="{{route('register')}}" method="post">
@csrf
  

  <div class="container">
  <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" class="@error('name') is-invalid @enderror" value="{{old('name')}}">
 
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" class="@error('username') is-invalid @enderror" value="{{old('username')}}" >
    @error('username')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <label for="uname"><b>Email address</b></label>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<input type="text" placeholder="Enter Email address" name="email" class="@error('email') is-invalid @enderror"  value="{{old('email')}}"><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" class="@error('password') is-invalid @enderror" >
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
    <label for="uname"><b>Repeat password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" >
    @error('password_confirmation')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<b>&nbsp</b> <b>&nbsp</b>
    <button type="submit">Register</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
</form>

@endsection