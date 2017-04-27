@extends('layouts.master')

@section('content')

  <div class="form-group">
    <label for="formGroupExampleInput">Title</label>
    <input value = "{{ old('title') }}" type="text" class="form-control" id="formGroupExampleInput" name='title' placeholder="post titlet">
  </div>

  
<!--   <div class="form-group">
    <label for="formGroupExampleInput2">URL</label>
    <input value = "{{ old('url') }}" type="text" class="form-control" id="formGroupExampleInput2" name='url' placeholder="url">
  </div>
    <div class="form-group">
    <label for="exampleTextarea">Post</label>
    <textarea class="form-control" id="exampleTextarea" name='post' rows="3">{{ old('post') }}</textarea>
  </div> -->



@stop