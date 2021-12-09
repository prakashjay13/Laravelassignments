<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>404 | E-Shopper</title>
    @include('admin.front.includes.head')
</head>

<body>
@include('admin.front.includes.header')
@include('admin.front.includes.slider')

<div class="container text-center">
		<div class="logo-404">
			<a href="index.html"><img src="images/home/logo.png" alt="" /></a>
		</div>
		<div class="content-404">
			<img src="images/404/404.png" class="img-responsive" alt="" />
			<h1><b>OPPS!</b> We Couldn’t Find this Page</h1>
			<p>Uh... So it looks like you brock something. The page you are looking for has up and Vanished.</p>
			<h2><a href="index.html">Bring me back Home</a></h2>
		</div>
	</div>

@include('admin.front.includes.footer')
@include('admin.front.includes.foot')
    
</body>
</html>