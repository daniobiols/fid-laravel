<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Auth</title>
</head>
<body>
	<h1>Auth</h1>

	@php
		//dd(\Auth::check())
	@endphp

	@auth()
		<p>{{ \Auth::id() }}</p>
		<p>{{ \Auth::user()->name }}</p>
	@else
		<p>Login</p>
	@endauth


</body>
</html>
