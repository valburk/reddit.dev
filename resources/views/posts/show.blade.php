@extends('layouts.master')

@section('content')
<h2>View Post {{ $post->id}}</h2>
<div class = "box" id='section'>
	<h4>{{ $post->title}}</h4>
	<p>{{ $post->url}}</p>
	<p>{{ $post->content}}</p>
	<p class = "time">{{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString()}}</p>
</div>
<br>
<form action="/posts/{{$post->id}}/edit">

<input class="btn btn-primary" type='submit' value="Edit Post">
</form>
<form action="/posts">
<br>
<input class="btn btn-default" type='submit' value="View All Posts" >
</form>
	
@stop