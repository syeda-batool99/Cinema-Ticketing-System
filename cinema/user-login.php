<?php
require_once('config.php');
session_start();
?>


<html>

<head>
  <meta charset="utf-8">

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

  <title>User Login</title>
</head>

<style>
  * {
    color: #FFF;
  }

  @import url("https://fonts.googleapis.com/css?family=Arimo:400,700");


  body {

    background-image: url(tttt.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    height: 800px;
  }






  .brand-div {

    background: rgb(253, 253, 255);
    background: linear-gradient(90deg, rgba(253, 253, 255, 1) 0%, rgba(0, 0, 0, 0.6057773451177346) 0%);
    height: 80px;

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
  <div>
    <?php
    if (isset($_POST['create'])) {
      $firstname    =   $_POST['firstname'];
      $lastname     =   $_POST['lastname'];
      $email        =   $_POST['email'];
      $password     =   $_POST['password'];
      $phonenumber  =   $_POST['phonenumber'];
      $gender       =   $_POST['gender'];

      $sql = "insert INTO users(`firstname`,`lastname`,`email`,`password`,`phonenumber`) values('$firstname','$lastname','$email','$password','$phonenumber')";
      if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
    ?>
  
    <?php
    if (isset($_POST['login'])) {
      $eml = $_POST['eml'];
      $pwd = $_POST['pwd'];

      


      $sql = "SELECT firstname, lastname, email FROM users where `email` = '$eml' and `password` = '$pwd'";
      
      

      $result = $conn->query($sql);

     
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $_SESSION["email"] = $row['email'];
          $_SESSION["is_loggedIn"] = true;    
        }
        header('Location: /cinema/home.php');
      } else {
        echo "Entered wrong email or password";
      }
    }

    ?>


  </div>

  <div class="container-fluid brand-div">

    <form action="user-login.php" method="post" class="form-inline" style="margin-left:50%; height:80px;">
      <div class="form-group">
        <label for="email">Email address: &nbsp </label>
        <input type="email" name="eml" class="form-control" id="eml">
      </div>
      <div class="form-group">
        <label for="pwd">&nbsp Password:&nbsp </label>
        <input type="password" name="pwd" class="form-control" id="pwd">
      </div>

      &nbsp &nbsp &nbsp <button type="submit" name="login" class="btn btn-success">Submit</button>
    </form>


  </div>


  <div class="container-fluid">



  </div>

  <div class="container-fluid" id="wrap" style="margin-top:5%; ">
    <div class="row" style="padding-left:30%;">
      <div class="col-md-6 col-md-offset-3">
        <form action="user-login.php" method="post" accept-charset="utf-8" class="form" role="form">
          <legend>Sign Up</legend>
          <h4>It's free and always will be.</h4>
          <div class="row">
            <div class="col-xs-6 col-md-6">
              <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name" /> </div>
            <div class="col-xs-6 col-md-6">
              <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" /> </div>
          </div>


          <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email" style="margin-top:2%;" />



          <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password" style="margin-top:2%;" />


          <input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" style="margin-top:2%;" />


          <input type="text" name="phonenumber" value="" class="form-control input-lg" placeholder="Phone Number" style="margin-top:2%;" />



          <label style="margin-top:2%;">Birth Date</label>
          <div class="row">
            <div class="col-xs-4 col-md-4">
              <select name="month" class="form-control input-lg">
                <option value="01">Jan</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Apr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Aug</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dec</option>
              </select> </div>
            <div class="col-xs-4 col-md-4">
              <select name="day" class="form-control input-lg">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select> </div>
            <div class="col-xs-4 col-md-4">
              <select name="year" class="form-control input-lg">
                <option value="1935">1935</option>
                <option value="1936">1936</option>
                <option value="1937">1937</option>
                <option value="1938">1938</option>
                <option value="1939">1939</option>
                <option value="1940">1940</option>
                <option value="1941">1941</option>
                <option value="1942">1942</option>
                <option value="1943">1943</option>
                <option value="1944">1944</option>
                <option value="1945">1945</option>
                <option value="1946">1946</option>
                <option value="1947">1947</option>
                <option value="1948">1948</option>
                <option value="1949">1949</option>
                <option value="1950">1950</option>
                <option value="1951">1951</option>
                <option value="1952">1952</option>
                <option value="1953">1953</option>
                <option value="1954">1954</option>
                <option value="1955">1955</option>
                <option value="1956">1956</option>
                <option value="1957">1957</option>
                <option value="1958">1958</option>
                <option value="1959">1959</option>
                <option value="1960">1960</option>
                <option value="1961">1961</option>
                <option value="1962">1962</option>
                <option value="1963">1963</option>
                <option value="1964">1964</option>
                <option value="1965">1965</option>
                <option value="1966">1966</option>
                <option value="1967">1967</option>
                <option value="1968">1968</option>
                <option value="1969">1969</option>
                <option value="1970">1970</option>
                <option value="1971">1971</option>
                <option value="1972">1972</option>
                <option value="1973">1973</option>
                <option value="1974">1974</option>
                <option value="1975">1975</option>
                <option value="1976">1976</option>
                <option value="1977">1977</option>
                <option value="1978">1978</option>
                <option value="1979">1979</option>
                <option value="1980">1980</option>
                <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option>
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
                <option value="2001">2001</option>
                <option value="2002">2002</option>
                <option value="2003">2003</option>
                <option value="2004">2004</option>
                <option value="2005">2005</option>
                <option value="2006">2006</option>
                <option value="2007">2007</option>
                <option value="2008">2008</option>
                <option value="2009">2009</option>
                <option value="2010">2010</option>
                <option value="2011">2011</option>
                <option value="2012">2012</option>
                <option value="2013">2013</option>
              </select> </div>
          </div>
          <label style="margin-top:2%;">Gender : </label> <label class="radio-inline">
            <input type="radio" name="gender" value="M" id=male /> Male
          </label>
          <label class="radio-inline">
            <input type="radio" name="gender" value="F" id=female /> Female
          </label>
          <br />
          <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
          <button class="btn btn-lg btn-primary btn-block signup-btn" name="create" type="submit" style="margin-top:2%;">
            Create my account</button>

        </form>
      </div>
    </div>
  </div>
  </div>



</body>

</html>