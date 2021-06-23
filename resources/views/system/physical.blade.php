<!DOCTYPE html>
<html>
<head>
	<title>Physical Sales Page</title>
</head>
<body>


	<?php
		use App\Product;
		$products = Product::all();
	?>

	<h1>Welcome {{session('email')}}</h1>

	<h2>Physical store sales details:</h2>

	<table border="1">
		<tr>
			<td>Nubmer of Todays sold products</td>
			<td>'63</td>
		</tr>
		<tr>
			<td>Number of Last seven days sold products</td>
			<td>'857'</td>
		</tr>
		<tr>
			<td>Most sold item</td>
			<td>'ABS'</td>
		</tr>
	</table>

	<form method="POST">
        @csrf
        <table>
            <tr>
                <td>Customer Name</td>
                <td><input type="text" name="cname"></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Phone</td>
                <td><input type="number" name="phone"></td>
            </tr>

            <tr>
                <td>Product Name</td>
                <td><select name="pname" id="pname">
                @foreach($products as $product)
                    <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="quantity"></td>
            </tr>

			<tr>
                <td>Payment Typee</td>
                <td><select name="paytype" id="paytype">
                
                    <option value="Cash">Cash</option>
                    <option value="Card">Card</option>
                    <option value="Online">Online</option>
                
                    </select>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="ADD"></td>
            </tr>
        </table>
        </form>

	<a href="#"> Physical Store </a>
	
</body>
</html>