<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Welcome {{session('email')}}</h1>

	<a href="{{route('Sales.index')}}"> Sales </a> |
	<a href="#"> Logout </a> 
	
</body>
</html>