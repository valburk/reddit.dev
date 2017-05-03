@extends('layouts.master')

@section('content')
<h2>View ID {{ $user->id}}</h2>

<div class = "box text" id='section'>

	<h4>{{ $user->name}}</h4>
</div>
<br>
<form action="">

<input class="btn btn-primary" type='submit' value="Edit Post">
</form>
	
@stop