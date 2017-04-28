<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reddit</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link rel="stylesheet" href="/css/posts.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
</head>
<body>
<main class=container>
    @yield('content')
    @if (Session::has('successMessage'))
    	<div class="alert alert-success">{{ session('successMessage') }}</div>
	@endif

	@if (Session::has('errorMessage'))
    	<div class="alert alert-danger">{{ session('errorMessage') }}</div>
	@endif
</main>
</body>
</html>