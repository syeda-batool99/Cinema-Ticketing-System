
<?php
require_once('config.php');
session_start();
?>
<html>

<head>
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
  
	<title>Admin Login</title>

</head>

<style>


 
  
body{
    
    background-image:url(tttt.jpg);
    background-size:cover;
    background-repeat:no-repeat;
    height:800px;
    }
   

.tx{
    color: white;
}





</style>

<body>
  <div>
<?php
    if (isset($_POST['login'])) {

      $eml = $_POST['eml'];
      $pwd = $_POST['pwd'];
      
      


      $sql = "SELECT email FROM `admin` where `email` = '$eml' and `password` = '$pwd'";
      
      

      $result = $conn->query($sql);

      
      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {

          $_SESSION["email2"] = $row['email'];
          $_SESSION["is_loggedIn"] = true;    
        }
        header('Location: /cinema/index2.php');
      }
      else {
        echo "Entered wrong email or password";
      }
    
  }
    ?>
  </div>
<div class="container">
    <div class="row" style="margin-top:15%;">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        
        <div class="card-body">
            <h5 class="card-title text-center tx" style="font-size: 30px;">Admin Login</h5>
            <form action="admin-login.php" method="post"class="form-signin" style="margin-top: 10%;">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" name="eml" id="eml"placeholder="Email address" required autofocus>
                <label for="inputEmail" class="tx">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
                <label for="inputPassword" class="tx">Password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label tx" for="customCheck1">Remember password</label>
              </div>
              
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name ="login" id="login" type="submit">Login</button>
              <hr class="my-4">

            </form>



      </div>
    </div>
  </div>

</body>
</html>
