<?php
session_start();
require_once "db.php";
$db = new Db();

if(isset($_POST['prod'])){
    $pid = $_POST['prod'];
    $uid = $_SESSION['id'];

    $u_del = $db->sql("DELETE FROM users_cart WHERE uid = $uid and pid = $pid");
    $p_del = $db->sql("DELETE FROM product WHERE id = $pid");
}

if(isset($_POST['user'])){
    $id = $_POST['user'];
    $uid = $_SESSION['id'];

    $u_del = $db->sql("DELETE FROM users_cart WHERE uid = $uid");
    $p_del = $db->sql("DELETE FROM users WHERE id = $id");
}

?>