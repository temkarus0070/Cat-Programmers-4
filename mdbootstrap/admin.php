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
  <link href="css/admin.css" rel="stylesheet">

  <!-- top content -->
  <link href="css/square.css" rel="stylesheet"/>
</head>

<body>

  <!-- Start your project here-->
<!--Main Layout-->
<canvas id="pixie"></canvas>
<header id="header" class="header">
  <form action="add.php" method="POST">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <div class="title">
          <div class="title__main">
            <h2>Админка</h2>
          </div>
          <div class="title_text">
            *Заполните данные для внесения объекта в БД
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputTitle" name="inputTitle" class="form-control" required>
          <label for="inputTitle">Название</label>
        </div>
      </div>
      
      <div class="col-lg-4">
        <div class="md-form">
          <input type="text" id="inputCity" name="inputCity" class="form-control">
          <label for="inputCity">Город</label>
        </div>
      </div>

      <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputAddress" name="inputAddress" class="form-control">
          <label for="inputAddress">Адрес</label>
        </div>
      </div>

        <div class="col-lg-4">
        <div class="md-form">
          <input type="text" id="inputWidth" name="inputWidth" class="form-control" required>
          <label for="inputWidth">Широта</label>
        </div>
      </div>

        <div class="col-lg-4">
        <div class="md-form">
          <input type="text" id="inputLong" name="inputLong" class="form-control" required>
          <label for="inputLong">Долгота</label>
        </div>
      </div>

      <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputLink" name="inputLink" class="form-control">
          <label for="inputLink">Ссылка</label>
        </div>
      </div>

      <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputInf" name="inputInf" class="form-control">
          <label for="inputInf">Инфраструктура</label>
        </div>
      </div>

      <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputSquare" name="inputSquare" class="form-control">
          <label for="inputSquare">Площадь</label>
        </div>
      </div>

      <div class="col-lg-4 ">
        <div class="md-form">
          <input type="date" id="inputStart" name="inputStart" class="form-control">
          <label for="inputStart"></label>
        </div>
      </div>


       <div class="col-lg-4 ">
        <div class="md-form">
          <input type="date" id="inputEnd" name="inputEnd" class="form-control">
          <label for="inputEnd"></label>
        </div>
      </div>

       <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputFloors" name="inputFloors" class="form-control">
          <label for="inputFloors">Кол-во этажей</label>
        </div>
      </div>
        
       <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputApart" name="inputApart" class="form-control">
          <label for="inputApart">Кол-во квартир</label>
        </div>
      </div>

       <div class="col-lg-4 ">
        <div class="md-form">
          <input type="text" id="inputIcon" name="inputIcon" class="form-control">
          <label for="inputIcon">Ссылка на иконку</label>
        </div>
      </div>


        <!--Material textarea-->
        <div class="col-lg-12">
        <div class="md-form">
          <textarea type="text" name="inputDesc" id="inputDesc" class="md-textarea form-control" rows="3"></textarea>
          <label for="inputDesc">Описание</label>
        </div>
        <button type="submit" name="submit" class="btn btn-outline-primary waves-effect btn-lg btn-block">Добавить</button>
      </div>

    </div>
  </div>
  </form>
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
  <script src="js/parallaxsoon4.js" type="text/javascript"></script>
</body>

</html>
