<?php
$connection = new mysqli("localhost","root","",'property');
  $title = mysqli_real_escape_string($connection, trim($_POST['title']));
$query = "select * from search_property";
$result = $connection->query($query);
?>
<script>
	var arrOne = [];
	var arrTwo = [];
	var i = 0;
</script>
<?php
while($row = mysqli_fetch_array($result)) 
{
	if($row['title'] == $title){
    ?>
	
    <script>
      var width = parseFloat( "<?php echo $row['width'] ?>");
      var longitude =parseFloat( "<?php echo $row['longitude'] ?>");
      arrOne[i] = width;
      arrTwo[i] = longitude;
      i+=1;
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
			height: 400px;
			width: 400px;
		}
	</style>
</head>
<body>
	<div id="map"></div>
	<script>
		function initMap() {
			var pos  = {lat:arrOne[1] ,lng: arrTwo[1]};
			var opt = {
				center: pos,
				zoom:10,
			};
			var map = new google.maps.Map(document.getElementById("map"),opt);
			
			for(var  i =0;i<arrOne.length;i++){
			var marker = new google.maps.Marker({
         	 map: map,
         	 position: { lat:arrOne[i],
         	 			 lng:arrTwo[i]
         	 			},
          	 title: 'Hello World!',
          	 /*icon: ''*/
        	});
		}
        	/*var info = new google.maps.InfoWindow({
        		contant:'<p>Описание</p>'
        	});
        	marker.addListener("click",function(){
        		info.open(map,marker);
        	});*/
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABCJmWu0XMZ8DrpjAe6gcNdcq7TOjc0Dk&callback=initMap" async defer></script>
</body>
</html>