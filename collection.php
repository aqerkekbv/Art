<?php include('lang.php');
require_once "db.php"; ?>
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
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
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
			margin: 0 5px;
		}
		.img4{
			padding-left: 4%;
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
	    	margin-top: 14%;
	    }
	    .buttons form{
	    	display: flex;
	    	justify-content: space-evenly;
           

	    }
	    button{
	    	padding-left: 5%;
	    	padding-right: 5%;
	    	padding-top: 1.2%;
	    	padding-bottom: 1.2%;
	    	border-radius: 15px;
	    	background-color: #EEECDF;
	    	font-family: 'Metropolis', sans-serif;
	    	font-size: 12px;
	    	




	    }
	    button:hover {
	    	background-color: #13130d;
	    	color: #EEECDF;


	    }
	    .section2{
	    	margin-top: 3%;
	    	margin-left: 5%;
	    	display:flex;
	    	flex-wrap: wrap;
	    	flex-direction: row;
	    }
	     .ph1 {
	     	background: #EEECDF;
	     	width: 30%;
		    overflow: hidden;
		     position: relative;
	
	     }
	   
		
	   .ph1 img{
	    	width: 100%;
	    	transition: 0.3s;
           display: block;	
	    	 }
	    	 .photos{
	    	 	display:flex;
	    	flex-wrap: wrap;
	    	flex-direction: row;
	    	justify-content: space-around;
	    	 }
	    	  .photos img:hover{
	    	  	filter: brightness(0.5);
	    	  	 opacity:1;
	        transform: scale(1.1);
	        

	    }
	    .auto{
		    	font-size: 11px;
      font-family: 'Metropolis', sans-serif; 
        color: #949380;
               text-decoration: none;
		    }
	    .ph1 h1{
	    	color:#13130d;
	    	font-family: 'Metropolis', sans-serif;
	    	font-size: 22px;

	    }
	     .ph1 p{
	     	color:#93938f;
	    	font-family: 'Metropolis', sans-serif;
	    	font-size: 22px;

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
		  min-width: 120px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
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

     	footer{
			background-color: #13130d;
			padding: 45px;
		}
		.mainfooter{
			display: flex;
			justify-content: space-around;
			
		}
		

		.footer1 p{
			font-family: 'Cardo', serif;
		    font-size: 20px;
		    color: #ebe9cf;

		}
		.footer2 h2{
			font-family: 'Metropolis', sans-serif;
		    font-size: 20px;
		    color: #ebe9cf;


		}
		.footer2 a{
			font-family: 'Metropolis', sans-serif;
		    font-size: 12px;
		    color: #949380;
		    text-decoration: none;
		    padding: 5px;
		}
		.footer2 a:hover {

		 	color: #c9a050;
		 	border-radius: 7px;
         }
         .footer3 h2{
			font-family: 'Metropolis', sans-serif;
		    font-size: 20px;
		    color: #ebe9cf;


		}
		.footer3 a{
			font-family: 'Metropolis', sans-serif;
		    font-size: 12px;
		    color: #949380;
		    text-decoration: none;
		    padding: 5px;
		}
		.footer3 a:hover {

		 	color: #c9a050;
		 	border-radius: 7px;
         }
          .footer4 h2{
			font-family: 'Metropolis', sans-serif;
		    font-size: 20px;
		    color: #ebe9cf;


		}
		.footer4 a{
			font-family: 'Metropolis', sans-serif;
		    font-size: 12px;
		    color: #949380;
		    text-decoration: none;
		    padding: 5px;
		}
		.footer4 a:hover {

		 	color: #c9a050;
		 	border-radius: 7px;
         }

         /*adaptive*/

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
			<li><?php echo  $lang['guest'] ?></li>

			 <?php
                      if($_SESSION['role'] == 3 ){
                      	?>
             <li><a class="auto"  href="LoginForm.php?session_stop"><?php echo  $lang['exit'] ?></a></li>

                      	<?php
                      }
                 
			 ?>
	 <?php
                      if(!$_SESSION['role'] == 3 OR $_SESSION['role'] == 4 ){
                      	?>
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
	  		<h2><?php echo $lang['collection'] ?></h2>
	  		<p><?php echo $lang['home'] ?>/<?php echo $lang['collection'] ?></p>
	  	</div>
		</main>
		<section class="section1">
			<div class="buttons" data-aos="zoom-out">
               <form method="post" action="">  
				<button name="all" value="all" type="submit"><?php echo $lang['all'] ?></button>
				<button name="all" value="Nature" type="submit" ><?php echo $lang['Nature'] ?></button>
				<button name="all" value="Portrait" type="submit"> <?php echo $lang['Portrait'] ?></button>
				<button name="all" value="Religious" type="submit"><?php echo $lang['Religious'] ?></button>
                </form>
			</div>
		</section>
		<section class="section2">
			  <div class="photos">
			<?php
			   $db = new Db();
              if(isset($_POST['all'])){
              	if( $_POST['all'] == 'all'){
              		$q = $db->query("SELECT * FROM `collection`");
              	}
                  else{
              	      $kind = $_POST['all'];
						$q = $db->query("SELECT * FROM `collection` WHERE type='$kind'");
                   }
						
                    if(!empty($q)){

                      foreach($q as $r){
                      	?>
                
                
				<div class="ph1">
					<img src="scr/<?php echo $r['image']?>"> <br> <br>
					<h1> <?php echo $r['name']?></h1>
					<p><?php echo $r['type']?></p>
				</div>
			               
            <?php }}}
			?>
			</div> 
		</section>

           <footer>
	    <div  class="mainfooter">
	  	<div  class="footer1" >
	  		<img src="scr/logo_2.webp" alt="footer logo"><br><br>
	  		<p><?php  echo $lang['footer'] ?> <br> <br>
			<?php  echo $lang['address'] ?> <br> <br>
			+8 (777) 777 77 77</p>	
	  	</div>
	  	<div class="footer2">
	  		<h2><?php  echo $lang['link'] ?></h2> <br>
	  		<a href="homepage.php"><?php  echo $lang['home'] ?></a> <br> <br>
  				<a href="collection.php"><?php  echo $lang['collection'] ?></a></a> <br> <br>
  				<a href="#section1"><?php  echo $lang['gallery'] ?></a>

	  	</div>
	  	<div class="footer3">
	  		<h2><?php  echo $lang['info'] ?></h2> <br>
	  		<a href="aboutus.php" ><?php  echo $lang['about_us'] ?> </a><br> <br>
 				 <a href="shop.php" id="shop"><?php  echo $lang['shop'] ?></a>

	  	</div>
	  	<div class="footer4">
	  		<h2><?php  echo $lang['social'] ?></h2> <br>
	  	<a href="https://twitter.com/tylerthecreator" >TWITTER</a> <br> <br>
  				<a href="https://www.instagram.com/ozenxo/">INSTAGRAM</a> <br> <br>
  				<a href="https://business.facebook.com/ThemeRexStudio/">FACEBOOK</a>
  				</div>

	  	</div>
	  </footer>


		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
	<script>
		  AOS.init();
		</script>
</body>
</html>	<!-- <div class="photos">
				<div class="ph1">
					<img src="scr/col2.jpg" alt=""> <br> <br>
					<h1>Flower Still Life with Crown Imperial</h1>
					<p>Collections, Nature</p>
				</div>
			</div> -->