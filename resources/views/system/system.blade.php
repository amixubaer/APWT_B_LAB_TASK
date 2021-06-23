<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Welcome {{session('email')}}</h1>

	<a href="{{route('Sales.index')}}"> Sales </a> |
	<a href="{{route('Product.index')}}"> Product Management </a> |
	<a href="{{route('logout.index')}}"> Logout </a>
	
</body>
</html>