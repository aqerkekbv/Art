<!DOCTYPE html>
<html lang="en">
<?php include('lang.php'); ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add Art</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
  <section class="container-fluid bg">
    <section class="row justify-content-center">
      <section class="col-12 col-sm-6 col-md-3">
        <form class="form-container" action="" method="post" id="image-form" enctype="multipart/form-data">

          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo $lang['p_name'] ?> </label>
            <input name="name" type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
            <!-- image part -->
             <div class="form-group">
                <label for="exampleInputEmail1"><?php echo  $lang['image'] ?> </label>
                <input type="file" name="my_image"
                value="" multiple="" id="image">
             </div>

                 <!-- image end  -->
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo  $lang['kind'] ?> </label>
            <input name="kind" type="text" class="form-control" id="kind" aria-describedby="emailHelp" placeholder="">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1"><?php echo  $lang['price'] ?> </label>
            <input name="price" type="text" class="form-control" id="price" aria-describedby="emailHelp" placeholder="">
            <small id="emailHelp" class="form-text text-muted"></small>
          </div>

          <button type="submit" class="btn btn-primary btn-block" value="Upload"><?php echo  $lang['add'] ?></button>

          <a href="MODERATOR.php"> <?php echo $lang['back'] ?></a>
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
 if (isset($_POST['name']) && isset($_POST['kind']) && isset($_POST['price']) && isset($_FILES['my_image']) ) {
     require_once "db.php";
     $db = new Db();

      if(empty($_POST['name']) or empty($_POST['kind']) or empty($_POST['price'])){
        echo "<script>alert('one or more fields are empty');</script>";
    }

    else{
         $name = $_POST['name'];
         $kind =  $_POST['kind'];
          $price = $_POST['price'];   

       //e image
            $check_please = false;
$img_name = $_FILES['my_image']['name'];
  $img_size = $_FILES['my_image']['size'];
  $tmp_name = $_FILES['my_image']['tmp_name'];
  $error = $_FILES['my_image']['error'];


if ($error === 0) {
    if ($img_size > 1250000) {
       echo "<script>alert('Sorry, your file is too large.');</script>";
    }else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg","jpeg","png"); 

      if (in_array($img_ex_lc, $allowed_exs)) {
        $img_upload_path = 'uploads/'.$img_name;
        move_uploaded_file($tmp_name, $img_upload_path);
         $check_please = true;

        // Insert into Database
      }else {
             echo "<script>alert('You can't upload files of this type');</script>";
      }
    }
  }

          //nd image
        if($check_please == true){

  $sql = $db->sql("INSERT INTO `product`(`id`, `name`,`image`, `kind`, `price`) VALUES ('','$name','$img_name' ,
          '$kind','$price')");
        $message = $lang['message_success'];
        header("Location:ADD_ART.php?cor=$message");
        }

      
    }
 



 }

?>