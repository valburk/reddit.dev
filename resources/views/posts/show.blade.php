@extends('layouts.master')

@section('content')
<h2>View Post {{ $post->id}}</h2>
<div class='col-xs-2'>
 			<i class="fa fa-thumbs-up fa-2x "></i>
 			<div> 0 </div>
 			<i class="fa fa-thumbs-down fa-2x"></i>
 		</div>
<div class = "box text" id='section'>

	<h4>{{ $post->title}}</h4>
	<p>{{ $post->url}}</p>
	<p>{{ $post->content}}</p>
	<p class = "time">{{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString()}}</p>
</div>
<br>
<form action="/posts/{{$post->id}}/edit">

<input class="btn btn-primary" type='submit' value="Edit Post">
</form>
	
@stop