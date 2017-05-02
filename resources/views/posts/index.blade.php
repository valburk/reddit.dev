@extends('layouts.master')

@section('content')
 <section class='text-center'>
	<h1> All Posts </h1>
</section>
				<form>
				<label for="search">Search</label>
	           	<input type="search" placeholder="search for a post" name="search" value="{{ old('search') }}" class="form-control">
	           	<input type="submit" class="btn btn-default" value="Search ">
	           	</form>
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
	
	<form name= 'sort' action="" method="GET">
		<div class="form-group">
	  		<label for="sel1">Sort By:</label>
	  		<select name = 'sort' class="form-control" id="sel1">
				<option value= 'created_at'>Newest</option>
	    		<option value= 'title'>Title</option>
	 		 </select>
		</div>
		<div>
	        <button type="submit" class="btn btn-primary">Sort</button>
	    </div>
	</form>
@stop