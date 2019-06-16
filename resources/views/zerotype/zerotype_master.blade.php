<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="http://site.dev/css/Zerotype.css" type="text/css">
	
</head>

<body>
	<div id="header">
		<div>
			<div class="logo">
				<a href="http://site.dev/zerotype">Zero Type</a>
			</div>
			<ul id="navigation">
				<li class="@yield('home')">
					<a href="http://site.dev/zerotype">Home</a>
				</li>
				<li class="@yield('Features')">
					<a href="http://site.dev/zerotype/features">Features</a>
				</li>
				<li class="@yield('News')">
					<a href="http://site.dev/zerotype/news">News</a>
				</li>
				<li class="@yield('About')">
					<a href="http://site.dev/zerotype/about">About</a>
				</li>
				<li class="@yield('Contact')">
					<a href="http://site.dev/zerotype/contact">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	
</body>
</html>