<?php 
	$connection = new mysqli("localhost","root","",'property');
	if(isset($_POST['submit'])){
		$title = mysqli_real_escape_string($connection, trim($_POST['inputTitle']));
		$city = mysqli_real_escape_string($connection, trim($_POST['inputCity']));
		$address = mysqli_real_escape_string($connection, trim($_POST['inputAddress']));
		$width = mysqli_real_escape_string($connection, trim($_POST['inputWidth']));
		$longitude = mysqli_real_escape_string($connection, trim($_POST['inputLong']));
		$link = mysqli_real_escape_string($connection, trim($_POST['inputLink']));
		$inf = mysqli_real_escape_string($connection, trim($_POST['inputInf']));
		$square = mysqli_real_escape_string($connection, trim($_POST['inputSquare']));
		$start = mysqli_real_escape_string($connection, trim($_POST['inputStart']));
		$end = mysqli_real_escape_string($connection, trim($_POST['inputEnd']));
		$floors = mysqli_real_escape_string($connection, trim($_POST['inputFloors']));
		$apart = mysqli_real_escape_string($connection, trim($_POST['inputApart']));
		$icon = mysqli_real_escape_string($connection, trim($_POST['inputIcon']));
		$description = mysqli_real_escape_string($connection, trim($_POST['inputDesc']));
		$query = "INSERT INTO `search-property` (title,city,address,width,longitude,link,infrastructure,square,start_date,end_date,floors,apartments,icon_link,description) VALUES ('$title','$city','$address','$width','$longitude','$link','$inf','$square','$start','$end','$floors','$apart','$icon','$description')";
		mysqli_query($connection,$query);
		mysqli_close($connection);
		echo "Success";
		exit();
	}



 ?>