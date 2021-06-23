<!DOCTYPE html>
<html>
<head>
	<title>Sales Page</title>
</head>
<body>
	<h1>Welcome {{session('email')}}</h1>

	<a href="{{route('Physical.index')}}"> Physical Store </a> |
	<a href="{{route('Social.index')}}"> Social Media </a> |
	<a href="{{route('Ecommerce.index')}}"> Ecommerce </a> 
	
</body>
</html>