<?php
session_start();
require_once "db.php";
$db = new Db();

if(isset($_POST['product'])){
    $id = $_POST['user'];
    $uid = $_SESSION['id'];
     $pid = $_POST['product'];
    $u_del = $db->sql("DELETE FROM users_cart WHERE pid = $pid");
}

?>