<?php

if (isset($_POST['log']) && isset($_POST['pass']) && isset($_POST['name'])) {
    require_once "db.php";
    $db = new Db();

    $log = $_POST['log'];
    $pass = $_POST['pass'];
    $name = $_POST['name'];

    $er=0;
    $check = $db->query("SELECT * FROM users");

    if(empty($log) or empty($pass) or empty($name)){
        header("Location:Registration.php?error=One or More fields are empty");
        $er++;
    }
    elseif($pass < 6){
        header("Location:Registration.php?error=Password is to short");
        $er++;
    }
    elseif(!empty($check)){
        foreach($check as $row){
            if ($row['login'] == $log) {
                header("Location:Registration.php?error=This email is already taken");
                $er++;
            }
            elseif ($row['name'] == $name) {
                header("Location:Registration.php?error=This Username is already taken");
                $er++;
            }
        }
    }
    if($er==0){
        $sql = $db->sql("INSERT INTO `users`(`id`, `login`, `password`, `name`, `role`) VALUES ('','$log','$pass','$name','3')");
        header("Location:LoginForm.php?cor=Registration Was Successful");
    }

}

?>