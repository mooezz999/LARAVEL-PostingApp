@extends('layouts.app')



@section('content')

@auth 

<form action="{{route('posts')}}" method="post">
@csrf
  

  <div class="container">



    <label for="body"><b>Body</b></label><br><br>
    <textarea name="body" class="@error('body') is-invalid @enderror"  value="{{old('body')}}"></textarea><br><br>

    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
 <button type="submit">Post</button>
</form>

@endauth
<br><br>
@if ($posts->count())

@foreach($posts as $post)
<x-Post :post="$post" />
@endforeach

{{$posts->links()}}
@else

<p>no posts</p>

@endif
@endsection