@extends('layouts.app')



@section('content')

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
<br><br>
@if ($posts->count())

@foreach($posts as $post)
<a href="">{{$post->user->name}} </a><span>{{$post->created_at->diffForHumans()}}</span>
<p>{{$post->body}}</p>
@endforeach

{{$posts->links()}}
@else

<p>no posts</p>

@endif
@endsection