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
          <a class="nav-link" href="#">Аналитика<span class="sr-only">(current)</span></a>
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
          <a class="nav-link" href="#">О&#160;компании</a>
        </li>
      </ul>
    </div>
   </nav>
  </div>

  <div class="view intro-2" >
    <div class="full-bg-img">
      <div class="mask rgba-black-light flex-center">
        <div class="container back text-center white-text wow fadeInUp"> 
           <div class="col-lg-12">
        <div class="title">
          <h3 class="titel__main">Поиск недвижимости</h3>
          <p class="title_text">Узнайте все о интересующей Вас недвижимости</p>
        </div>
      </div>
          <div class="col-lg-10 ml-auto">
              <form class="form-inline ">
              <input class="form-control form-control-md mr-3 w-75" type="text" placeholder="Search" aria-label="Search">
                <i class="fa fa-search"></i>
              </form>
          </div>
          <div class="col-lg-10 m-auto" id="advanced" style="display: none; ">
              <div class="dopBlock">
                <select name="citi" id="citi" class="form__select selectWidth">
                <option value="vor">Воронеж</option>
                <option value="vladik">Владикавказ</option>
              </select>
    
                <input type="date" class="form__select selectWidth">
                <select name="structure" id="structure" class="form__select selectWidth">
                <option value="vor">Инфраструктура</option>
                <option value="">Вариант 2 </option>
              </select>
                </div>

          </div>
          <div class="col-lg-4 m-auto dop">
            <p class="dopP" onclick="openbox('box');return false">Расширенный поиск</p>
          </div>
         <script>
           function openbox(box) {
             display = document.getElementById('advanced').style.display;
             if(display == 'none'){
              document.getElementById('advanced').style.display = "block";
             }else{
              document.getElementById('advanced').style.display = "none";
             }
           }
         </script>
        </div>
      </div>
    </div>
  </div>
</header>
<!--Main Navigation-->

<!--Main Layout-->
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
