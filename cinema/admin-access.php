<?php
    
    session_start();
    if (!isset($_SESSION['email2'])) {
      
      header('Location: /cinema/admin-login.php');
      echo 'the session is empty';
    }else{
      echo "admin logged in";
    }
    ?>