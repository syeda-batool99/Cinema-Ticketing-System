<!doctype html>
<html>
<?php
session_start();
if (!isset($_SESSION['email'])) {
  echo 'the session is empty';
  header('Location: /cinema/user-login.php');
}

?>
<head>
  <meta charset="utf-8">

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



  <meta charset='UTF-8'>
  <meta name="robots" content="noindex">
  <link rel="shortcut icon" type="image/x-icon" href="//production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="//production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <link rel="canonical" href="https://codepen.io/ryanparag/pen/LLrVbo?depth=everything&order=popularity&page=10&q=movie&show_forks=false" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>


  <title>Cinema - Book Ticket</title>
</head>

<style>
  @import url("https://fonts.googleapis.com/css?family=Arimo:400,700");

  .ice-age {
    background: url(endgame-poster.jpg);
    background-size: cover;
  }

  .movie-card {
    background: #ffffff;
    box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 315px;
    margin: 2em;
    border-radius: 10px;
    display: inline-block;
  }

  .movie-header {
    padding: 0;
    margin: 0;
    height: 367px;
    width: 100%;
    display: block;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }


  .header-icon-container {
    position: relative;
  }

  .header-icon {
    width: 100%;
    height: 367px;
    line-height: 367px;
    text-align: center;
    vertical-align: middle;
    margin: 0 auto;
    color: #ffffff;
    font-size: 54px;
    text-shadow: 0px 0px 20px #6abcea, 0px 5px 20px #6ABCEA;
    opacity: .85;
  }

  .header-icon:hover {
    background: rgba(0, 0, 0, 0.15);
    font-size: 74px;
    text-shadow: 0px 0px 20px #6abcea, 0px 5px 30px #6ABCEA;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    opacity: 1;
  }

  .movie-card:hover {
    -webkit-transform: scale(1.03);
    transform: scale(1.03);
    box-shadow: 0px 10px 25px rgba(0, 0, 0, 0.08);
  }

  .movie-content {
    padding: 18px 18px 24px 18px;
    margin: 0;
  }

  .movie-content-header,
  .movie-info {
    display: table;
    width: 100%;
  }

  .movie-title {
    font-size: 24px;
    margin: 0;
    display: table-cell;
  }

  .imax-logo {
    width: 50px;
    height: 15px;
    background: url("https://6a25bbd04bd33b8a843e-9626a8b6c7858057941524bfdad5f5b0.ssl.cf5.rackcdn.com/media_kit/3e27ede823afbf139c57f1c78a03c870.jpg") no-repeat;
    background-size: contain;
    display: table-cell;
    float: right;
    position: relative;
    margin-top: 5px;
  }

  .movie-info {
    margin-top: 1em;
  }

  .info-section {
    display: table-cell;
    text-transform: uppercase;
    text-align: center;
  }

  .info-section:first-of-type {
    text-align: left;
  }

  .info-section:last-of-type {
    text-align: right;
  }

  .info-section label {
    display: block;
    color: rgba(0, 0, 0, 0.5);
    margin-bottom: .5em;
    font-size: 9px;
  }

  .info-section span {
    font-weight: 700;
    font-size: 11px;
  }

  .joker-movie {
    background: url(joker-poster.jpg);
    background-size: cover;
    background-position: bottom;
  }

  .avengers {

    background: url(endgame-poster.jpg);
    background-size: cover;
    background-position: bottom;

  }




  .text-center {

    color: #FFF
  }

  body {

    background-image: url(tttt.jpg);
    background-size: cover;
    background-repeat: no-repeat;

  }





  .nav-link {

    font-family: 'Oswald';
    font-size: 20px;
    letter-spacing: 3px;
    text-transform: uppercase;


    -moz-border-radius: 6px;
    -webkit-border-radius: 6px;
    border-radius: 6px;
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
    opacity: 0.9
  }

  label {

    color: #FFF
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


  @media screen and (max-width: 500px) {
    .movie-card {
      width: 95%;
      max-width: 95%;
      margin: 1em;
      display: block;
    }

    .container {
      padding: 0;
      margin: 0;
    }
  }
</style>

<body>
  <?php
  require_once('config.php');
  $movie_id = $_GET['movie'];
  $screen = $_GET['screen'];

  if ($movie_id && $screen) {

    $sql = "SELECT * FROM `tickets` WHERE movie_id = $movie_id and availabilty_status = 'AVAILABLE' and screen = $screen and `date` > NOW()";
    $sqlMovie = "SELECT * FROM `movies` WHERE id = $movie_id";

    $result = $conn->query($sql);
    $resultMovie = $conn->query($sqlMovie);

    // Get Movie
    if ($resultMovie->num_rows > 0) {
      $movie = $resultMovie->fetch_assoc();
      // var_dump($movie);
    }

    // Get Tickets
    if ($result->num_rows > 0) {
      $tickets = [];
      while ($row = $result->fetch_assoc()) {
        array_push($tickets, $row);
      }
    }
  }


  ?>

  <div class="container-fluid brand-div">
    <!-- Brand/logo -->

    <img src="logo.png" class="img-logo" alt="logo" height="200px;">
    <img src="logo3.png" class="img-logo2" alt="logo">

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


  <div class="container-fluid">

    <h1 class="text-center">Book Ticket</h1>

  </div>

  <div class="container-fluid" style=" padding-left:38%;">
    <div class="movie-card">
      <div class="movie-header ice-age" style="background: url(<?php echo $movie['img_url']; ?>);">
        <div class="header-icon-container">
          <a href="#">
            <i class="material-icons header-icon"></i>
          </a>
        </div>
      </div>
      <!--movie-header-->
      <div class="movie-content">
        <div class="movie-content-header">
          <a href="#">
            <h3 class="movie-title"><?php echo $movie['name']; ?></h3>
          </a>
          <div class="imax-logo"></div>
        </div>
        <div class="movie-info">
          <div class="info-section">
            <label>Dates</label>
            <span>2nd Dec - 10th Dec</span>
          </div>
          <!--date,time-->
          <div class="info-section">
            <label>Screen</label>
            <span><?php echo $screen; ?></span>
          </div>
          <!--screen-->
          <!-- <div class="info-section">
            <label>Time</label>
            <span>12:30PM</span>
          </div> -->
          <!--row-->

        </div>
      </div>
      <!--movie-content-->
    </div>
    <!--movie-card-->


    <form style="height:auto; margin-left:-100px;" action="book.php" method="post" class="form-inline">
      <div class="form-group">
        <strong><label for="exampleFormControlSelect1">Seat Number &nbsp;</label></strong>
        <select class="form-control" id="exampleFormControlSelect1" name="seat_no" style="width:60px;">
          <?php foreach ($tickets as $ticket) { ?>

            <option><?php echo $ticket['seat_no'] ?></option>

          <?php } ?>

        </select>

        <input type="hidden" name="movie" value="<?php echo $_GET['movie'] ?>"/>
        <input type="hidden" name="screen" value="<?php echo $_GET['screen'] ?>"/>
        <input type="hidden" name="time" value="<?php echo $_GET['time'] ?>"/>

        &nbsp;&nbsp;&nbsp;&nbsp;<strong><label for="exampleFormControlSelect1">Choose Date &nbsp;</label></strong>
        <select class="form-control" name="date" id="exampleFormControlSelect1" style="width:121px;">
          <?php foreach ($tickets as $ticket) { ?>

            <option><?php echo $ticket['date'] ?></option>

          <?php } ?>
        </select>&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" name="book-ticket" class="btn btn-success">Book Ticket</button>
      </div>

  </div>
</body>
</html>