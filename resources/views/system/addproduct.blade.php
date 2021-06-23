<!DOCTYPE html>
<html>
<head>
	<title>Add Product Page</title>
</head>
<body>
	<h1>Add Product Page</h1>

	<?php
		use App\Vendor;
		$vendors = Vendor::all();
	?>

	<form method="POST">
	@csrf
	<table>
		<tr>
			<td>Product Name</td>
			<td><input type="text" name="pname"></td>
		</tr>
		<tr>
			<td>Category</td>
			<td><input type="text" name="category"></td>
		</tr>
        <tr>
			<td>Unit Price</td>
			<td><input type="text" name="uprice"></td>
		</tr>
		<tr>
			<td>Status</td>
			<td><input type="text" name="status"></td>
		</tr>

		<tr>
			<td>Vendor Name</td>
			<td><select name="vname" id="vname">
			@foreach($vendors as $vendor)
				<option value="{{$vendor->full_name}}">{{$vendor->full_name}}</option>
			@endforeach
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="Submit" value="ADD"></td>
		</tr>
	</table>
	</form>

	
</body>
</html>