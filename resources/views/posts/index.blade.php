@extends('layouts.master')

@section('content')
 <section class='text-center'>
	<h1> All Posts </h1>
</section>
	@foreach($posts as $post)
	<a href= '/posts/{{$post->id}}'>
	<div class = "box" id='section'>
		<h3> {{ $post->title}}</h3>
		</a>
		<p>URL: {{ $post->url}}</p>
		<p>Content: {{ $post->content}}</p>
		<p class = "time" >{{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString()}}</p>
	</div>
	@endforeach
		
	<section class='text-center'>
		{!! $posts->render() !!}
	</section>
	
@stop