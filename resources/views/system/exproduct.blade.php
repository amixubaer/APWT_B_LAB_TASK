<!DOCTYPE html>
<html>
<head>
	<title>Social Sales Page</title>
</head>
<body>

	<?php
		use App\Product;
		$products = Product::where('status', 'existing') ->get();
	?>

	<h1>Existing Product Page</h1>

	<table border="1">
        <tr>
            <td> ID </td>
            <td> Name </td>
            <td> Category </td>
            <td> Unit price </td>
            <td> Status </td>
            <td> Vendor ID </td>
            <td> Action </td>
        </tr>
    
    @foreach ($products as $product) 
        <tr>
            <td>{{$product->id}}</dtd>
            <td>{{$product->product_name}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->unit_price}}</td>
            <td>{{$product->status}}</</td>
            <td>{{$product->vendor_id}}</</td>
            <td>
                <a href="#"> Edit </a>|
                <a href="#"> Delete </a>
            </td>
        </tr>
    @endforeach
  
    </table>

	
</body>
</html>