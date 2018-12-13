<!DOCTYPE html>
<html>
	<head>
		<title>@yield("title","sample")</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		@include('layouts._header')

		<div class="container">
			<div class="col-md-offset-1 col-md-10">
				@include('share._message')
				@yield('content')
				@include('layouts._footer')
			</div>
		</div>
		
</html>
