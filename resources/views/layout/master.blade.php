<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/master.css">
</head>
<body>
	<header>
		<nav>
			<a href="#">Home</a>
			<a href="/coba-laravel/public/blog">Blog</a>
		</nav>
	</header>
	<br>

	@yield('content')

	<br>
	<footer>
		<p>
			&copy : laravel - coba laravel 2018
		</p>
	</footer>
</body>
</html>