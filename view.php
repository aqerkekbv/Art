<?php include "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>View</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      min-height: 100vh;
    }
    .alb {
      width: 200px;
      height: 200px;
      padding: 5px;
    }
    .alb img {
      width: 100%;
      height: 100%;
    }
    a {
      text-decoration: none;
      color: black;
    }
  </style>
</head>
<body>
     <?php 
         require_once "db.php";
            $db = new Db();
            $q = $db->query("SELECT * FROM `product`");

            if(!empty($q)){
            foreach ($q as $r) { ?>
 
           <div class="alb">
              <img src="uploads/<?php echo $r['image']?>">
              <?php echo $r['image']?>
             </div>        
 <?php } }?>
</body>
</html>