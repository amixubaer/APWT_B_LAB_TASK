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

	
	<h2>Physical Store</h2>
	<span>Todays sold product's:</span>
    <span></span>
    <br>
    <span>Last seven days sold product's:</span>
    <span></span>
    <br>

	<h2>Social Media</h2>
	<span>Todays sold product's:</span>
    <span></span>
    <br>
    <span>Last seven days sold product's:</span>
    <span></span>
    <br>

	<h2>Ecommerce</h2>
	<span>Todays sold product's:</span>
    <span></span>
    <br>
    <span>Last seven days sold product's:</span>
    <span></span>
    <br>
    
	
</body>
</html>