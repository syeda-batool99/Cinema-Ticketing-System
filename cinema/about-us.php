<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>About Us</title>
<?php
session_start();
if (!isset($_SESSION['email'])) {
  echo 'the session is empty';
  header('Location: /cinema/user-login.php');
}

?>

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


.btn{
	
height:70px;
width:200px;	
font-size:22px;
text-transform:uppercase;
	
	
}



body{
	
background-image:url(tttt.jpg);
background-size:cover;
background-repeat:no-repeat;
}


a{
	
	font-family: 'Oswald';
	font-size: 20px;
	letter-spacing:3px;
	text-transform:uppercase;


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



.banner-img{
	
background-image:url(jnp-02.jpg);
background-size:cover;
background-repeat:no-repeat;
width:100%;
height:100%;
border:solid 1px #000000;
margin-top:3%;
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


<div class="container">

<img src="jnp-02.jpg" class="banner-img">

</div>



<div class="container">

<br><br>
<h1 class="text-left" style="color:#FFF;">About us</h1>

</div> <br>

<div class="container">
<p style="color:white; text-align:justify;">
Housed on the second floor of The Place is the completely first of its kind, built from the ground up and designed by world renowned cinema Architects Mesbur & Smith of Canada, the cutting edge, the state of art cinema complex, JNP Cinemas. Comprising 5 theaters, totaling 1100 seats and home to the 3 largest silver screens in Pakistan, JNP Cinemas is set to change the face of the Pakistani cinema business forever. Boasting top end 4K Digital projection systems custom designed by Christie Digital Canada, JNP Cinemas has been outfitted by Asia's top cinema integration company, Eugenetek Corporation and is the crowning achievement of years of planning and implementation. Boasting the latest 3D technology, custom designed sound systems and complete digital control of all theater functions, JNP is years ahead of any other cinema nationwide. <Br> <br>

JNP Cinemas will bring about a revolution in the way films are viewed and enjoyed, it will create an immersive digital 2D and 3D experience complemented by 10,000 watt sound systems and automated screen systems designed by the top European and American manufacturers. The theaters posses the first custom designed theater acoustics in Pakistan that have been designed by world beating acoustic designers, Valcoustics, Canada.No expense or effort has been spared in ensuring the comfort of patrons. The seats are custom made and our gold class cinema has its own waiting lounge and leather recliners with attendants on call. The JNP experience is a one of a kind experience. From the grandeur of our expansive cinemas 1, 2 and 3, to the intimacy of cinema 4 and the luxury of the gold class cinema, JNP is one of a kind and will be for years to come. It is the first true Digital Mutliplex experience in Pakistan.JNP Cinemas will not only change the cinema business, it will have far reaching effects on the film and media business of Pakistan. Being at the pinnacle of technology, design and art, JNP Cinemas will be the standard by which all visual and aural presentation is judged. Our mission is simple, to provide the most amazing cinema experience in the world right here in Karachi. JNP Cinemas is a revolution, an ambitious and challenging idea bought to life and a film lover's paradise, the entertainment capital of Karachi, Pakistan.


</p>
</div>



</body>
</html>
