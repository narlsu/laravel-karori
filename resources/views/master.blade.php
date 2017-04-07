<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/welcome">Welcome</a></li>
			<li><a href="/contact">Contact</a></li>
		</ul>
	</nav>

	@yield('content')
	
</body>
</html>