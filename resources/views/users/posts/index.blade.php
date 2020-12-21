@extends('layouts.app')



@section('content')

<div><h1>{{$user->name}}</h1>
<p>Posted {{$posts->count()}} {{Str::plural('post',$posts->count())}} and received {{$user->receivedLikes->count()}} {{Str::plural('like',$user->receivedLikes->count())}}</p>
</div>

<div class="flex justify-center">
<dic class="w-8/12 bg-white p-6 rounded-lg">
@if ($posts->count())

@foreach($posts as $post)
<x-Post :post="$post" />
@endforeach

{{$posts->links()}}
@else

<p>{{$user->name}} doesn't have any posts</p>

@endif

</div>

</div>

@endsection