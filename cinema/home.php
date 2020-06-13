<?php
session_start();
if (!isset($_SESSION['email'])) {
  echo 'the session is empty';
  header('Location: /cinema/user-login.php');
}

?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>JNP Cinema</title>


  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<style>
  .btn {

    height: 60px;
    width: 200px;
    font-size: 22px;
    text-transform: uppercase;


  }

  



  body {

    background-image: url(tttt.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 800px;
  }


  a {

    font-family: 'Oswald';
    font-size: 20px;
    letter-spacing: 3px;
    text-transform: uppercase;


  }


  .nav-link {

    font-family: 'Oswald';
    font-size: 20px;
    letter-spacing: 3px;
    text-transform: uppercase;



    border: 1px solid white;
    -moz-box-shadow:
      0px 1px 1px rgba(000, 000, 000, 0.5),
      inset 1px 2px 0px rgba(255, 255, 255, 0.4);
    -webkit-box-shadow:
      0px 1px 1px rgba(000, 000, 000, 0.5),
      inset 1px 2px 0px rgba(255, 255, 255, 0.4);
    box-shadow:
      0px 1px 1px rgba(000, 000, 000, 0.5),
      inset 1px 2px 0px rgba(255, 255, 255, 0.4);
    text-shadow:
      1px 1px 2px rgba(000, 000, 000, 0.7),
      0px 1px 0px rgba(255, 255, 255, 0.4);




  }

  nav {


    border-bottom: solid 1px white;
    border-top: solid 1px white;

    background-color: #000000;
    opacity: 0.9;
  }


  .d-block {

    height: 450px;
    width: 100%;
    border-bottom: solid 1px white;
    border-top: solid 1px white;
  }


  .brand-div {
    height: 150px;

    background: rgb(253, 253, 255);
    background: linear-gradient(90deg, rgba(253, 253, 255, 1) 1%, rgba(0, 0, 0, 0.6057773451177346) 45%);

  }

  .img-logo {

    position: relative;
    bottom: 45px;

  }

  .img-logo2 {

    margin-left: 15%;
    position: relative;
    bottom: 23px;

    width: 600px;
    height: 200px;

  }
  .lg-btn {


font-size: 15px;
margin-left: 350px;
position: relative;
bottom: 30px;


}

</style>



<body>
  <?php
  if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: /cinema/user-login.php');
  }
  ?>


  <div class="container-fluid brand-div">
    <!-- Brand/logo -->

    <form action="home.php" method="post">
      <img src="logo.png" class="img-logo" alt="logo" height="200px;">
      <img src="logo3.png" class="img-logo2" alt="logo">
      <input type="submit" name="logout" value="Log out" class="lg-btn">
    </form>
  </div>


  <nav class="navbar navbar-expand-sm  navbar-dark">


    <ul class="navbar-nav" style="margin-left:360px;">

      <li class="nav-item">
        <a class="nav-link" href="home.php" style="margin-left:20px; color:white; padding-right:100px;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="screens.php" style="margin-left:20px;">Now Showing</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="coming-soon.php" style="margin-left:20px;">Coming Soon</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contact-us.php" style="margin-left:20px;">Contact us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="about-us.php" style="margin-left:20px;">About us</a>
      </li>
    </ul>

  </nav>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="image1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="image2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="image3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <div class="container" style="margin-top:1%;">


    <form class="form-inline" style="margin-left:29%;">

      <a href="screens.php"><button class="btn btn-outline-success" type="button">Now Showing</button></a>&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <a href="coming-soon.php"><button class="btn btn-outline-success" type="button">Coming Soon</button></a>
    </form>


  </div>

</body>

</html>