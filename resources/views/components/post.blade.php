@props(['post'=> $post])

<a href="{{route('users.posts',$post->user)}}">{{$post->user->name}} </a><span>{{$post->created_at->diffForHumans()}}</span>
<p>{{$post->body}}</p>
<br><br>
@can('delete',$post)
<div>
<form action="{{route('posts.destroy',$post)}}" method="post" >
@csrf
@method('DELETE')
<button type="submit">Delete post</button>
</form>
</div>
@endcan
<br><br>
@auth
@if(!$post->likedBy(auth()->user()))
<form action="{{route('posts.likes',$post)}}" method="post" >
@csrf
<button type="submit">Like</button>
</form>
@else
<form action="{{route('posts.likes',$post)}}" method="post" >
@csrf
@method('DELETE')
<button type="submit">Unlike</button>
</form>
@endif


@endauth
<span>{{$post->likes->count()}} {{Str::plural('like',$post->likes->count())}}</span>