<?php 
  $connection = new mysqli("localhost","root","",'property');
  if(isset($_POST['submit'])){
    $title = mysqli_real_escape_string($connection, trim($_POST['title']));
    $query = "select * from `search-property`";
    $result = $connection->query($query);
    if($result==false){
      echo mysql_error();
    }
    while($row = mysqli_fetch_array($result)) 
    {

      if($row['title'] == $title){
        $element = $row;
        echo $element['title'];

    }
  }
}
 ?>
<!DOCTYPE html>
<html lang="en">
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
  <link href="css/list.css" rel="stylesheet">
</head>

<body>

  <!-- Start your project here-->
<header>
  <div class="container">
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <a class="navbar-brand" href="#"><img src="img/img/logo.png" alt="" width="80" class="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Аналитика <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Строительство</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Объекты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Контакты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Окомпании</a>
        </li>
      </ul>
    </div>
   </nav>
  </div>

  <div class="view intro-2" style="">
      <div class="mask rgba-black-light flex-center">
        <div class="container  black-text wow fadeInUp">
          <div class="row">
          <div class="col-lg-3">
            <form action="map.php" method="POST" class="form">
              <button class="form__btn btnWidth btnMargin">Фильтрация</button>
              <select name="city" id="city" class="form__select selectWidth">
                <option value="vor">Воронеж</option>
                <option value="vladik">Владикавказ</option>
              </select>
              <input type="date" class="form__select selectWidth">
              <input type="range" min="1" max="20" step="5" value="10" class="form__select selectWidth">
              <select name="structure" id="structure" class="form__select selectWidth">
                <option value="vor">Инфраструктура</option>
                <option value="">Вариант 2 </option>
              </select>
            </form>
          </div>
          <div class="col-lg-9">
            <form action="map.php" method="POST">
             <input type="search" name="title" placeholder="tetx" class="form__input" required>
             <button class="display" type="submit" name="submit">Найти</button>
             <button class="form__btn">Вернуться к списку</button>
             </form>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Адрес</th>
                    <th scope="col">Начало стройки</th>
                    <th scope="col">Конец стройки</th>
                    <th scope="col">Описание</th>
                    <th scope="col">Кол-во этажей/квартир</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td> <?php echo $element['title'] ?></td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>
          </div>
          </div>
        </div>
      </div>
  </div>
</header>
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


</body>

</html>
