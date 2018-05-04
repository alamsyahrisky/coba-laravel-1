<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<body>
	<header>
		<nav>
			<a href="#">Home</a>
			<a href="#">Blog</a>
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