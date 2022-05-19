<?php

session_start();
require_once "db.php";
$db = new Db();

if($_SESSION['role'] != 4){
  $uid = $_SESSION['id'];
  $pid = $_POST['pid'];

$sql = $db->sql("INSERT INTO `users_cart`(`id`, `uid`, `pid`) VALUES ('','$uid','$pid')");
}else{
	  $_SESSION['guest_check'] = 'guest';
	
}

?>