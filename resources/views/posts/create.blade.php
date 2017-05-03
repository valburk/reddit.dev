

@extends('layouts.master')

@section('content')
<h1> Create Post </h1>

<form method="POST" action="{{ action('PostController@store') }}" class = 'text-left'>
{!! csrf_field() !!}
  <div class="form-group">
    <label for="title"> Title</label>
    <input type="text" class="form-control" id="title" name='title'>

@if( $errors->has('title') )
	{!! $errors->first('title', '<span class="help-block">:message</span>')!!}
@endif
  </div>
  <div class="form-group">
    <label for="url">URL</label>
    <input value = "{{ old('url') }}" type="text" class="form-control" id="url" name='url' placeholder="">
 @if( $errors->has('url') )
	{!! $errors->first('url', '<span class="help-block">:message</span>')!!}
@endif
  </div>
    <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" id="content" name='content' rows="3">{{ old('content') }}</textarea>
    @if( $errors->has('content') )
	{!! $errors->first('content', '<span class="help-block">:message</span>')!!}
	@endif
  </div>
  <input class="btn btn-primary" value= "Create Post" type="submit">
</form>


@stop