@extends('layouts.master')

@section('content')
<section class='text-center'>
	<h1> All Posts </h1>
</section>
@foreach($posts as $post)
	<div class = "box" id='section'>
		<div class='col-xs-2'>
 			<i class="fa fa-thumbs-up "></i>
 			<div> 0 </div>
 			<i class="fa fa-thumbs-down "></i>
 		</div>
 		<div class='text'>
			<a href= '/posts/{{$post->id}}'><h3>{{ $post->title}}</h3></a>
			<p>URL: {{ $post->url}}</p>
			<p>Content: {{ $post->content}}</p>
			<p class = "time" >{{ $post->created_at->setTimezone('America/Chicago')->toDayDateTimeString()}}</p>
		</div>
	</div>
@endforeach
<section class='text-center'>
	{!! $posts->render() !!}
</section>
<form name= 'sort' action="" class='text-left' method="GET">
	<div class="form-group sortform">
  		<label for="sel1">Sort By:</label>
  		<select name = 'sort' class="form-control" id="sel1">
			<option value= 'created_at'>Newest</option>
    		<option value= 'title'>Title</option>
 		</select><button type="submit" class="btn btn-primary">Sort</button>
	</div>
</form>
@stop