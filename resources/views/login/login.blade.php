<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<form method="post">
	<table>
		@csrf
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{old('email')}}"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" value="{{old('password')}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="submit"></td>
		</tr>
	</table>

	<a href="{{route('registration.index')}}"> Not yet registered? </a>
	</form>
		{{session('msg')}}
		<br>

		@foreach ($errors->all() as $err)
			{{$err}} <br>
		@endforeach
</body>
</html>