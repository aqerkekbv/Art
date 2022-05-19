<?php
if(isset($_POST['login']) && isset($_POST['password'])){
    $lg = $_POST['login'];
    $pass = $_POST['password'];

    if(empty($lg) && empty($pass)){
        header("Location:LoginForm.php?error=Please fill all the fields");
    }
    else{
        session_start();
          ///cookie

        require_once "db.php";
        $db = new Db();

        $lg = $_POST['login'];
        $pass = $_POST['password'];

        $select = $db->query("SELECT * FROM users WHERE login='$lg' AND password='$pass'");

        foreach($select as $row){
            if($row['role'] == 3){
                if($lg == $row['login'] && $pass == $row['password']){
                    $id = $row['id'];
                    $_SESSION['id'] = $id;
                       $_SESSION['name'] = $row['name'];
                      $_SESSION['role'] = $row['role'];
                      //cookie
                  $_SESSION['logged_user'] = $row;
               setcookie('user',$row['login'],time()+100*400);
             setcookie('password',$row['password'],time()+100*400);
                    header("Location:homepage.php");
                }
            }
            elseif($row['role'] == 2){
                if($lg == $row['login'] && $pass == $row['password']){
                    $id = $row['id'];
                    $_SESSION['id'] = $id;
                     $_SESSION['role'] = $row['id'];

                      //cookie
                  $_SESSION['logged_user'] = $row;
               setcookie('user',$row['login'],time()+100*400);
             setcookie('password',$row['password'],time()+100*400);
                    header("Location:MODERATOR.php");
                }
            }
            elseif($row['role'] == 1){
                if($lg == $row['login'] && $pass == $row['password']){
                    $id = $row['id'];
                    $_SESSION['id'] = $id;
                    $_SESSION['role'] = $row['id'];

                      //cookie
                  $_SESSION['logged_user'] = $row;
               setcookie('user',$row['login'],time()+100*400);
             setcookie('password',$row['password'],time()+100*400);

                    header("Location:Admin.php");
                }
            }
            else{
                header("Location:LoginForm.php?error=Invalid Login or Password");
            }
        }
    }
}
?>