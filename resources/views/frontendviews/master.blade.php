<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-commerce Website</title>
    @include('frontendviews.includes.link')
</head>
<body>
    @include('frontendviews.includes.header')
	<main>
	@yield('content')
	</main>
	@include('frontendviews.includes.footer')
    @include('frontendviews.includes.endscript')
</body>
</html>