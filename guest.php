<?php
     if($_SERVER['REQUEST_METHOD'] == 'GET'){
     	 if(isset($_GET['join'])){
      	setcookie('guest', $_GET['join'], time() + (3600*24*3605));
      	session_start();
      	$_SESSION['role'] = 4;
      	 header("Location:homepage.php");
    }
 
     }
      
      ?>