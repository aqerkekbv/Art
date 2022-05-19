<?php include('lang.php');
require_once "db.php";
 ?>
<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start(); 
   if(!$_SESSION['role'] == 3){
   	 $lang['guest'];
   }else if( $_SESSION['role'] == 3){
        $lang['guest'] = $_SESSION['name'];
   }
?>

<?php
if(isset($_COOKIE["user"])){
    
  }
  else{header("Location:logout.php?session_out=yes");}

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>  Collection</title>
	<style>
		body{
			background-color: #EEECDF;
			margin:0 10px;
		}
		header
		{
			background-color: #13130d;
			padding: 18px;


			

		}
		.befmenu{
			display: flex;
		}
		li{
			padding-top: 7px;
			color: #949380;
			text-decoration-style: none;
			list-style-type: none;
			font-size: 11px;
			font-family: 'Metropolis', sans-serif;
			padding-left: 7px;
		}
		
		.img1{
			padding-left:40%;
		}
		.img2{
			padding-left: 4%;
		}
		 
		  .img3{
			padding-left: 4%;
		}
		.img4{
			padding-left: 4%;
		}

.dropbtn {
			 background-color: #13130d;
			  color:  #949380;
			   
			  font-size: 11px;
			  border: none;
        }
        .dropdown {
			  position: relative;
			  display: inline-block;
        }
        .dropdown-content {
		  display: none;
		  position: absolute;
		 background-color: #13130d;
		  min-width: 76px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
      }
       .auto{
		    	font-size: 11px;
      font-family: 'Metropolis', sans-serif; 
        color: #949380;
               text-decoration: none;
		    }
      .dropdown-content a {
      	font-size: 11px;
		  color: #949380;
		  padding: 12px 8px;
		  text-decoration: none;
		  display: block;
     }
     .dropdown-content a:hover {
     	color: #c9a050;
     }
     .dropdown:hover .dropdown-content {
     	display: block;
     }

			#menu{
			display: flex;
			justify-content: space-around;
			background: rgba(0, 0, 0, 0.7);
			width: 100%;
			padding-top: 10px;
			padding-bottom: 10px;

			margin-top: 0px;
			
			}
		#menu img{
			padding-left:3%;
			width: 160px;
			
		}
		#menu a{
			text-decoration: none;
			color: #f4f1de;
			font-size: 16px;
			font-family: 'Metropolis', sans-serif;
			

		
			
		}
		 #menu  a:hover {

		 	color: #c9a050;
		 	border-radius: 7px;




 		}
 			.backimg img{
			 width: 99%;
		 	position:absolute;
		    z-index: -1;
		  

		}
		.text4about{
			padding-top: 7%;
		}
		.text4about h2{
			color: #ebe9cf;
			font-size: 30px;
			font-family: 'Metropolis', sans-serif;
			text-align: center;
	    }
	    .text4about p{
			color: #ebe9cf;
			font-size: 15px;
			font-family: 'Cardo', serif;
			text-align: center;
	    }
	    .section1{
	    	margin-top: 2%;
	    	margin-left: 5%;
	    	  display:flex;
	    	flex-wrap: wrap;
	    	flex-direction: row;  
	    }
	   
	     .card {
	     	background: #EEECDF;
		    overflow: hidden;
		     position: relative;
	    	display:flex;
	    	flex-wrap: wrap;
	    	flex-direction: row;
	    	justify-content: space-around;
	
	     }
	   
		
	   .card img{
	   	     width: 339px;
	   	     height: 339px;
	    	transition: 0.3s;
           display: block;
           margin: 20px 20px;
	
	    	 }
	    	  .shopph img:hover{
	   transform: scale(1.1);
	 filter: brightness(0.5);

	  

	    }
         .btn_cart{
         	border: none;
         	background: transparent;
         	cursor: pointer;
         }

         .btn_cart:hover ~ .dark_add_cart{
           visibility: visible;
          
           z-index: 15;
                          
         }
         .dark_add_cart{
              visibility: hidden;
              text-align: center;
         }
           .shopph{
	text-align: center;
                 }
	    .shopph h1{
	    	color:#13130d;
	    	font-family: 'Metropolis', sans-serif;
	    	font-size: 20px;
	    	text-align: center;

	    }
	     .shopph p{
	     	color:#6d6d65;
	    	font-family: 'Metropolis', sans-serif;
	    	font-size: 12px;
	    	text-align: center;

	     }
	     .shopph h3{
	    	color:#c9a050;
	    	font-family: 'Cardo', serif;
	    	font-size: 22px;
	    	text-align: center;

	    }

	    /*searchh*/
.section0{
	    	margin-top: 11%;
	    		margin-left: 30%;

	    }
	    .section0 button{
	    	border:none;
	    	background: transparent;
	    	cursor: pointer;

	    }
	    .input-group form{
	    	display: flex;
	    }
	    	.form-control{
			padding-left: 10%;
			padding-right: 10%;
			padding-top: 7px;
			padding-bottom: 7px;
			margin-left: 10%;
			border-radius: 20px;
			

		}
       /*adaptive
       */

       @media all and (max-width: 1200px){

          	.img1{
			padding-left:30%;
		}
         	

        }
            @media all and (max-width: 992px){
        	 	.img1{
			display: none;
		}
		.text2{
			display: none;
		}
		

    }

     @media all and (max-width: 768px){
    	
    	
	.footer2, .footer3{
		display: none;
	}
	.section0{
	    	
	    		margin-left: 30%;

	    }
}
@media all and (max-width: 576px){

	.text4about h2{
		font-size: 20px;

	}
	.text4about p{
		font-size: 10px;
		
	}
	
		
		.text1, .img0{
			display: none;
		}
		.img4{
			padding-left: 40%;

		}
		.footer1 p{
			font-size: 14px;

		}




}

		
	</style>
</head>
<body>
		<header>
		<div class="befmenu">
			<img src="scr/clock.png" alt="clock" class="img0">
			<li class="text1"><?php echo $lang['musem_info'] ?></li>
			<img src="scr/pin.png" class="img1" alt="location">
			<li class="text2"><?php echo $lang['address'] ?></li>
			<!-- Lan -->
						<img src="scr/language.png" alt="lan" class="img3"></img>
			<div class="dropdown">
			  <button class="dropbtn"><?php echo $lang['choose_new_lang'] ?></button>
			  <div class="dropdown-content">
					<a class="" href="chooselang.php?lang=en">English</a>
					<a class="" href="chooselang.php?lang=ru">Русский</a>
                   </div>
			     </div>

			<!-- Lan -->
			<img src="scr/user.png" alt="login" class="img4"></img>

			<div class="dropdown">
			  <button class="dropbtn"><?php echo  $lang['guest'] ?></button>

			 <?php
                      if($_SESSION['role'] == 3 ){
                      	?>
                      	<div class="dropdown-content">
                      	  <a href="My_arts.php"><?php echo  $lang['cart'] ?></a>
             <a class="auto"  href="LoginForm.php?session_stop"><?php echo  $lang['exit'] ?></a>
                      	<?php
                      }
                 
			 ?>
	 <?php
                      if(!$_SESSION['role'] == 3  or $_SESSION['role'] == 4 ){
                      	?>
                      	        </div>
		
             <li><a class="auto" href="LoginForm.php"><?php echo  $lang['logIn'] ?></a></li>

                      	<?php
                      }
                 
			 ?>
        </div>
		
	</header>

	  <main>

	 <nav class="navbar navbar-expand-lg navbar-light " id="menu">

  <a class="navbar-brand" href="#"><img src="scr/logo-retina.webp" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav d-flex justify-content-around" style="width: 100%">
      <a class="nav-item nav-link active" href="homepage.php"><?php echo $lang['home'] ?><span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="collection.php"><?php echo $lang['collection'] ?></a>
      <a class="nav-item nav-link" href="aboutus.php"><?php echo $lang['about_us'] ?></a>
      <a class="nav-item nav-link " href="shop.php"><?php echo $lang['shop'] ?></a>
    </div>
  </div>
</nav>
	  	<div class="backimg">
	  	<img src="scr/4.jpg" alt="">
	  	</div>
	  	<div class="text4about" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
	  		<h2><?php echo $lang['shop'] ?></h2>
	  		<p><?php echo $lang['home'] ?> / <?php echo $lang['shop'] ?></p>
	  	</div>
		</main>
		<section class="section0">
			<div class="input-group" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500" >
				<form action="" method="post">
			  <input type="search" class="form-control" placeholder="" aria-label="Search"
			    aria-describedby="search-addon" name="search" type="text" />
			  <button type="submit" class="btn btn-outline-primary"> <img src="scr/loupe.png" alt=""></button>
			   </form>
			</div>
			</div>
		</section>
		<section class="section1">
			<div class="card">
              <?php   
                    $db = new Db();

                   if(isset($_POST['search'])){
                              $text = $_POST['search'];
                       $q = $db->query("SELECT * FROM `product` WHERE `name` LIKE '%$text%' OR `kind` LIKE '%$text%'");
                   
                   }else{
                   	 $q = $db->query("SELECT * FROM `product`");
                   }

                    if(!empty($q)){
                      foreach($q as $r){
                      	?>
				<div class="shopph" data-aos="zoom-out-up">
					<button class="btn_cart" type="submit" data-id=<?php echo $r['id'] ?>><img src="uploads/<?php echo $r['image']?>"></button><br><br>
                   <?php if($_SESSION['role']!=4){   ?> 
					<span class="dark_add_cart"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></span>
                           <?php }  ?>
					<p><?php echo $r['kind']?> </p>
					<h1><?php echo $r['name']?></h1>
					<h3><?php echo $r['price']?><span>tg</span></h3>
				</div>
 <?php }} ?>  
			</div>
		</section>
<script>
$(document).ready(function(){
    $('.btn_cart').click(function(){
    	<?php   
               if( $_SESSION['role']== 4){
                     echo "<script>alert(".$lang['sorry'].");</script>";  
               }
    	?>
    	<?php    if( $_SESSION['role']!= 4){ ?>  
		var el = this;
        var buy = $(this).data('id');
        $.ajax({
            url:'add.php',
            method:'POST',
            data:{ pid:buy },
            success:function(response){
                alert("Successfully Added");
            }
        });
       
    });
});
 <?php  }  ?>
</script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script>
		  AOS.init();
		</script>

</body>
</html>