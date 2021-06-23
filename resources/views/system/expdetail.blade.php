<!DOCTYPE html>
<html>
<head>
	<title>Product Details</title>
</head>
<body>

	<h2>Product Details</h2>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>{{$user['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td>{{$user['name']}}</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>{{$user['email']}}</td>
		</tr>
	</table>
	
</body>
</html>