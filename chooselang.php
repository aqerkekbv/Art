<?php
     if($_SERVER['REQUEST_METHOD'] == 'GET'){
     	 if(isset($_GET['lang'])){
     	 	 echo "<script>alert(".$_GET['lang'].");</script>";
      	setcookie('lang', $_GET['lang'], time() + (3600*24*365));
      	 header("Location:homepage.php");
    }
 
     }
      

 if(isset($_POST['lang'])){
 echo "<script>alert(".$_POST['lang'].");</script>";
   setcookie('lang', $_POST['lang'], time() + (3600*24*365));
    header("Location:LoginForm.php");
    }
      

?>