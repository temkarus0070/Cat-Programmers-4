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
?>




<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    #map{
      height: 500px;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <!-- Start your project here-->
<header>
  <div class="container">
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand" href="#"><img src="img/img/logo.png" alt="" width="100" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Profile</a>
        </li>
      </ul>
    </div>
   </nav>
  </div>

  <div class="view intro-2" style="">
    <div class="full-bg-img">
      <div class="mask rgba-black-light flex-center">
        <div class="container text-center white-text wow fadeInUp">
          <h2>Новое качество жизни</h2>
          <br>
          <h5>Единый институт развития в жилищной сфере ДОМ.РФ реализует государственные инициативы, направленные на повышение качества и доступности жилья для граждан.</h5>
        </div>
      </div>
    </div>
  </div>
</header>
<!--Main Navigation-->

<!--Main Layout-->
<section class="search">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="title">
          <h3 class="titel__main">Поиск недвижимости</h3>
          <p class="title_text">Узнайте все о интересующей Вас недвижимости</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 m-auto">
      <form action="search.php" class="form" method="POST">
        <input type="search" name="title" placeholder="tetx" class="form__input" required>
        <button type="submit" name="submit" class="form__btm">Найти</button>
      </form>
      </div>
    </div>
  </div>
</section>

<div id="map"></div>
  <script>
    function initMap() {
      var pos  = {lat: width ,lng: longitude};
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



  <!-- /Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABCJmWu0XMZ8DrpjAe6gcNdcq7TOjc0Dk&callback=initMap" async defer></script>

</body>

</html>
