<!DOCTYPE html>
<html lang="en">
<?php   session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
        include('lang.php');
if(isset($_COOKIE["user"])){
    
  }
  else{header("Location:logout.php?session_out=yes");}


?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Action Page</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container">
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo $lang['add_moder'] ?></label> <br>
            <a href="Add_Moderator.php" class="btn btn-success"><?php echo $lang['add'] ?></a>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><?php echo $lang['see_product'] ?></label><br>
            <a href="LIST_ART.php" class="btn btn-warning"><?php echo $lang['see'] ?></a>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1"><?php echo $lang['see_users'] ?></label><br>
            <a href="LIST_USERS.php" class="btn btn-primary"><?php echo $lang['see'] ?></a>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1"><?php echo $lang['sold'] ?> </label><br>
            <a href="SOLD.php" class="btn btn-primary"><?php echo $lang['see'] ?></a>
          </div>


          <a href="Admin.php"><?php echo $lang['back'] ?></a>
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