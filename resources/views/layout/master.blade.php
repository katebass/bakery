<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		Backery
		@hasSection('title')
			| 
			@yield('title')
		@else

		@endif
	</title>	

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/nav.css">

    @yield('styles')

</head>
<body>
	
	@include('layout.nav')

	@yield('content')
	
	@include('layout.footer')
	
	<script src="/js/main.js"></script>
	<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	@yield('scripts')

</body>
</html> 