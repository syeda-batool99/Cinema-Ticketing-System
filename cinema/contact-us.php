<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
<?php
session_start();
if (!isset($_SESSION['email'])) {
  echo 'the session is empty';
  header('Location: /cinema/user-login.php');
}

?>

			<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet'>


  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">





<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">




 <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width">

 
    
</head>

<style>
@import url('https://fonts.googleapis.com/css?family=Roboto');





body {
  background:white;
  font-family: "Roboto", sans-serif;
}

.container {
  background: #FFFFFF;
  width: 900px;
  height: 650px;
  margin: 5% auto;
  position: relative;
}
.container .map {
  width: 45%;
  float: left;
}
.container .contact-form {
  width: 53%;
  margin-left: 2%;
  float: left;
}
.container .contact-form .title {
  font-size: 2.5em;
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  color: #242424;
  margin: 5% 8%;
}
.container .contact-form .subtitle {
  font-size: 1.2em;
  font-weight: 400;
  margin: 0 4% 5% 8%;
}
.container .contact-form input,
.container .contact-form textarea {
  width: 330px;
  padding: 3%;
  margin: 2% 8%;
  color: #242424;
  border: 1px solid #B7B7B7;
}
.container .contact-form input::placeholder,
.container .contact-form textarea::placeholder {
  color: #242424;
}
.container .contact-form .btn-send {
  background: #A383C9;
  width: 180px;
  height: 60px;
  color: #FFFFFF;
  font-weight: 700;
  margin: 2% 8%;
  border: none;
}





.text-center{
	
color:#FFF	
	
}

body{
	
background-image:url(tttt.jpg);
background-size:cover;
background-repeat:no-repeat;

}





.nav-link{
	
	font-family: 'Oswald';
	font-size: 20px;
	letter-spacing:3px;
	text-transform:uppercase;



	border: 1px solid white;
	-moz-box-shadow:
		0px 1px 1px rgba(000,000,000,0.5),
		inset 1px 2px 0px rgba(255,255,255,0.4);
	-webkit-box-shadow:
		0px 1px 1px rgba(000,000,000,0.5),
		inset 1px 2px 0px rgba(255,255,255,0.4);
	box-shadow:
		0px 1px 1px rgba(000,000,000,0.5),
		inset 1px 2px 0px rgba(255,255,255,0.4);
	text-shadow:
		1px 1px 2px rgba(000,000,000,0.7),
		0px 1px 0px rgba(255,255,255,0.4);



		
}
	
nav{


border-bottom:solid 1px white;
border-top:solid 1px white;

background-color:#000000;
opacity:0.9




}



.brand-div
{
	height:150px;

background: rgb(253,253,255);
background: linear-gradient(90deg, rgba(253,253,255,1) 1%, rgba(0,0,0,0.6057773451177346) 45%);

}
.img-logo{

position:relative;
bottom:45px;
	
}

.img-logo2{

margin-left:15%;	
	position:relative;
bottom:23px;

width:600px;
height:200px;

}

</style> 


<body>


<div class="container-fluid brand-div">
  <!-- Brand/logo -->
  
  		<img src="logo.png" class="img-logo" alt="logo" height="200px;">
        <img src="logo3.png" class="img-logo2" alt="logo" >
        

</div>


<nav class="navbar navbar-expand-sm  navbar-dark">
  <ul class="navbar-nav" style="margin-left:360px;">
    
    <li class="nav-item">
    <a class="nav-link" href="home.php" style="margin-left:20px; color:white; padding-right:100px;" >Home</a>
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


<div class="container" style="height:700px;">
	<div class="map">
		<iframe src="https://maps.google.com/maps?q=IBA%20main%20campus&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="650px" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
    
	<div class="contact-form">
		<h1 class="title">Contact Us</h1>
		<h2 class="subtitle">We are here assist you.</h2>
		<form action="">
			<input type="text" name="name" placeholder="Your Name" />
			<input type="email" name="e-mail" placeholder="Your E-mail Adress" />
			<input type="tel" name="phone" placeholder="Your Phone Number"/>
			<textarea name="text" id="" rows="8" placeholder="Your Message"></textarea>
			<button class="btn-send" style="cursor:pointer;">Send</button>
		</form>
	</div>
</div>



</body>
</html>
