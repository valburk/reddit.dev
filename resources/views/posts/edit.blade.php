

@extends('layouts.master')

@section('content')
<h1> Edit Post </h1>
	

 <form action="{{ action('PostController@update', $post->id) }}" method="POST">
{!! csrf_field() !!}

  <div class="form-group">
    <label class='titleHead' for="formGroupExampleInput">Title</label>
    <input value = "{{ $post->title }}" type="text" class="form-control" id="formGroupExampleInput" name='title' placeholder="{{ $post->title }}">
  </div> 

  <div class="form-group">
    <label for="formGroupExampleInput2">URL</label>
    <input value = "{{ $post->url }}" type="text" class="form-control" id="formGroupExampleInput2" name='url'>
  </div>

    <div class="form-group">
    <label for="exampleTextarea">Post</label>
    <textarea class="form-control" id="exampleTextarea" name='content' rows="3">{{ $post->url }}</textarea>
  </div>
  
   <input type="submit" class="btn btn-default" value="Update Post ">
        {{ method_field('PUT') }}
    </form>
	<br>

    <form action="{{ action('PostController@destroy' , $post->id)}}" method="post">
        {!! csrf_field() !!}
        <input type="submit" value="Delete" class="btn btn-danger">
        {{ method_field('DELETE') }}

    </form>

@stop