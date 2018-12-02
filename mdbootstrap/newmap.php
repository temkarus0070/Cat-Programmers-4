<?php 
	$connection = new mysqli("localhost","root","",'property');
	if(isset($_POST['submit'])){
		$title = mysqli_real_escape_string($connection, trim($_POST['title']));
		$query = "select * from search_property";
		$result = $connection->query($query);
		?>
		<script>
			var arrOne = [];
			var arrTwo =[];
			var i = 0;
		</script>
		<?php
		while($row = mysqli_fetch_array($result)) 
		{
			if($row['title'] == $title){
    		?>
    		<script>
    			var x =  parseFloat("<?php echo $row['width'] ?>");
    			var y =  parseFloat("<?php echo $row['longitude'] ?>");
    			var 
    		</script>
    	<?php } ?>
    	<script>
    		arrOne[i] = parseFloat("<?php echo $row['width'] ?>");
    		arrTwo[i] = parseFloat("<?php echo $row['longitude'] ?>");
    		i++;
    	</script>
    	<?php
		}
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		#map{
			width: 400px;
			height: 400px;
		}
	</style>
</head>
<body>
	<div id="map"></div>
	<script>
		function initMap() {
			var pos  = { lat: x,lng: y};
			var opt = {
				center: pos,
				zoom:10
			};
			var map = new google.maps.Map(document.getElementById("map"),opt);
			
			for(var i = 0;i<arrOne.length;i++){
				var marker = new google.maps.Marker({
	         	 map: map,
	         	 position: {lat: arrOne[i], lng: arrTwo[i]},	
	          	 title: 'Hello World!',
	          	 /*icon: ''*/
	        	});
			}
		}
	</script>
	<form action="" method="POST">
	<input type="text" id="title" name="title">
	<button type="submit" name="submit">qwerty</button>
	</form>


	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABCJmWu0XMZ8DrpjAe6gcNdcq7TOjc0Dk&callback=initMap" async defer></script>
</body>
</html>