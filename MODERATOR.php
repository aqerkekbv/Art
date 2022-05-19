<?php   session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
  if(($_SESSION['role'] == 1 ) or  ($_SESSION['role'] == 2)  ){
    
?>
<?php   session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
        include('lang.php');
if(isset($_COOKIE["user"])){
    
  }
  else{header("Location:logout.php?session_out=yes");}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Moderator Action Page</title>
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
            <label for="exampleInputEmail1"><?php echo $lang['add_product'] ?></label> <br>
            <a href="ADD_ART.php" class="btn btn-success"><?php echo $lang['add'] ?></a>
          </div>
          <div class="form-group">
            <label for=""><?php echo $lang['see_product'] ?></label><br>
            <a href="SEE_art.php" class="btn btn-warning"><?php echo $lang['see'] ?></a>
          </div>



          <a href="LoginForm.php?session_stop"><?php echo $lang['back'] ?></a>
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


<?php }else {
    echo "<body style=''><h1 style='
    color: red;
    margin-top: 10%;
    margin-left: 25%;
    width: 40%;
    padding: 2%;
    text-align: center;
    background: #9e00f6;
    backdrop-filter: blur(5px);
    border-radius: 20px;
    background: rgba(255, 255, 255, .1);
    border: 3px solid rgba(255, 255, 255, .5);
    border-right: 3px solid rgba(255, 255, 255, .2);
    border-bottom: 3px solid rgba(255, 255, 255, .2);

    '> <br>Unauthorized Access is prohibited !<h1>
    <a style='
    margin-left: 41%;
    color: red;
    padding: .6%;
    margin-top: 1%;
    text-decoration:none; background: #9e00f6;
    backdrop-filter: blur(5px);
    border-radius: 10px;
    background: rgba(255, 255, 255, .1);
    box-shadow: 0 25px 45px rgba(0, 0, 0, .1);
    border: 3px solid rgba(255, 255, 255, .5);
    border-right: 3px solid rgba(255, 255, 255, .2);
    border-bottom: 3px solid rgba(255, 255, 255, .2);' href='LoginForm.php'>Go to Login page </a>
    
    </body>";
}
            
?>
