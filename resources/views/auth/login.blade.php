@extends('layouts.app')



@section('content')
@if(session('status'))

{{session('status')}}

@endif

<form action="{{route('login')}}" method="post">
@csrf
  

  <div class="container">



    <label for="uname"><b>Email address</b></label>
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror<input type="text" placeholder="Enter Email address" name="email" class="@error('email') is-invalid @enderror"  value="{{old('email')}}"><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" class="@error('password') is-invalid @enderror" >
    @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

    <input type="checkbox" name="remember" id="remember" class="@error('password') is-invalid @enderror" >
    <label for="remember"><b>Remember me</b></label>


<b>&nbsp</b> <b>&nbsp</b>
    <button type="submit">Login</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">

  </div>
</form>

@endsection