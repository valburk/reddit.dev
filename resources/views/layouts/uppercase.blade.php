@extends('layouts.master')

@section('content')
	<h1><?php echo "You entered: $word" ?></h1>
    <h1><?php echo "Your result is: " . strtoupper($word); ?></h1>
@stop