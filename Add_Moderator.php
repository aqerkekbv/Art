<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Moderator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
  <?php
    include('lang.php'); ?>

  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container" action="" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1"><?php  echo $lang['loginh1'] ?></label>
            <input name="log" type="email" class="form-control" id="login" aria-describedby="emailHelp" placeholder=" email">
            <small id="emailHelp" class="form-text text-muted"><?php  echo $lang['reg'] ?></small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><?php  echo $lang['passwordU'] ?></label>
            <input name="pass" type="password" class="form-control" id="password" placeholder="......">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo $lang['nameU'] ?>  </label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder=".... ">
            <small id="emailHelp" class="form-text text-muted"><?php echo $lang['regname'] ?></small>
          </div>


          <button type="submit" class="btn btn-primary btn-block"><?php echo  $lang['logIn'] ?></button>
          <a href="Admin_Action.php"> <?php echo  $lang['back']?> </a>
          <?php if (isset($_GET['error'])) { ?>
            <br><br><span style="color:red;" class="error"><?php echo $_GET['error']; ?></span>
          <?php } ?>
          <?php if (isset($_GET['cor'])) { ?>
            <br><br><span style="color:limegreen;" class="cor"><?php echo $_GET['cor']; ?></span>
          <?php } ?>
        </form>

      </section>
    </section>
  </section>




  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
</body>

</html>
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
        header("Location:Add_Moderator.php?error=One or More fields are empty");
        $er++;
    }
    elseif($pass < 6){
        header("Location:Add_Moderator.php?error=Password is to short");
        $er++;
    }
    elseif(!empty($check)){
        foreach($check as $row){
            if ($row['login'] == $log) {
                header("Location:Add_Moderator.php?error=This email is already taken");
                $er++;
            }
            elseif ($row['name'] == $name) {
                header("Location:Add_Moderator.php?error=This Username is already taken");
                $er++;
            }
        }
    }
    if($er==0){
        $sql = $db->sql("INSERT INTO `users`(`id`, `login`, `password`, `name`, `role`) VALUES ('','$log','$pass','$name','2')");
        header("Location:Add_Moderator.php?cor=Moderator Successfully Added");
    }

}
?>