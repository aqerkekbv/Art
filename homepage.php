<?php include('lang.php'); ?>
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<title>OZEUM</title>
	<style type="text/css">
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
		
		#menu{
			display: flex;
			justify-content: space-around;
			background: rgba(0, 0, 0, 0.7);
			width: 100%;
			padding-top: 10px;
			padding-bottom: 10px;

			margin-top: 2px;
			
			}
		main img{
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
		 video{
            width: 99%;
		 	position:absolute;
		    min-width:50%;
		    min-height:100%;
		    z-index: -1;
		    overflow:hidden; 
		    left:0.7%;
		    top:0;
		    padding-top: 20px;

		    }
		    .textformain{
		    
		    	color: #ebe9cf;
		    	padding: 15%;


		    }
		    .auto{
		    	font-size: 11px;
             font-family: 'Metropolis', sans-serif; 
             color: #949380;
          text-decoration: none;
		    }
		    .textformain p{

		    	font-family: 'Cardo', serif;
		    	font-size: 17px;
		    	text-shadow: 1px 1px 2px black, 0 0 1em black;

		    	
		    }
		    .textformain h2{

		    	font-family:  'Metropolis', sans-serif;
		    	font-size: 60px;
		    	margin-top: -10px;
		    	text-shadow: 1px 1px 2px black, 0 0 1em black;

		    }
		    .gtext{
		    	background: rgba(0, 0, 0, 0.7);
		    	width: 100%;
			padding-top: 5px;
			padding-bottom: 5px;
			margin-top: 7%;

			

		    }
		    #section1 h1{
		    	color: #f4f1de;
		    	font-family: 'Metropolis', sans-serif;
		    	text-align: center;


		    }

		      .allimg{
			position: relative;
			margin-top: 3%;
			display: flex;
			
			
			
		}
		.selimg1{
			width: 100%;
			position: relative;

		}
		.selimg1 img {
			left:3%;
			padding-top: 15px;
			width: 96%;
			height: 32%;
			filter: grayscale(100%); 
			
		}


		.selimg1 img:hover{

			filter: grayscale(0%); 
		}


		.selimg2{

			width: 100%;
			
		}
		.selimg2 img{

			padding-top: 15px;
			width: 96%;
			height: 32%;
			filter: grayscale(100%); 
		}
		.selimg2 img:hover{
			
			filter: grayscale(0%); 
		}
		  #section2 h1{
		    	color: #f4f1de;
		    	font-family: 'Metropolis', sans-serif;
		    	text-align: center;


		    }
		      .atext{
		    	background: rgba(0, 0, 0, 0.7);
		    	width: 100%;
			padding-top: 5px;
			padding-bottom: 5px;
			margin-top:2%;

		}
		#section2 img{
			 width: 99%;
		 	position:absolute;
		    z-index: -1;
		   padding-top: 20px;
		   margin-top: 3%;

		}
		.textforsection{
			padding: 10%;
		}
		.textforsection h5{
			color: #ebe9cf;
			font-size: 30px;
			font-family: 'Metropolis', sans-serif;
			text-align: center;
		}
		.textforsection p{
			text-align: center;
			color: #949380;
			font-family: 'Cardo', serif;
		    font-size: 22px;

		}
		.textforsection a{
			color: #ebe9cf;
			font-size: 11px;
			font-family: 'Metropolis', sans-serif;
			text-decoration: none;
			margin-left:46%;

		}
		#section3 img{
			
			 width: 50%;
		 	position:absolute;
		    z-index: -1;
		   padding-top: 20px;
		   margin-top: 3%;
		   margin-left: 50%;

		}
		form{
			padding: 12%;
		}
		#section3 h2{
			color: #949380;
			font-size: 30px;
			font-family: 'Metropolis', sans-serif;
			margin-left: 17%;
		}
		#section3 p{
			color: #949380;
			font-size: 17px;
			font-family: 'Metropolis', sans-serif;
			margin-left: 7%;
		}
		.form-control {
			width: 300px;
			padding-left: 7%;
			padding-right: 7%;
			padding-top: 9px;
			padding-bottom: 9px;
			margin-left: 10%;
			border-radius: 20px;

		}
		.form-check-label {
			color: #949380;
			font-size: 11px;
			font-family: 'Metropolis', sans-serif;
			
			margin-left: 6%;
			padding-top: 1%;
					}
		.form-check-input{
			margin-left: 3%;
				margin-top: 0.7%;
		}
		.email {
			display: flex;
		}
		 .btn{
			padding-left:15px;
			padding-right:15px;

			border-radius: 17px;
			padding-top: 8px;
			padding-bottom: 8px;
			background-color: #949380;
			color: #EEECDF;
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
		.textformain p{
			font-size: 15px;

		}
		.textformain h2{
			font-size: 51px;

		}
		.textforsection p{
			display: none;
		}
			#section2 img{
			width: 96%;
		 	
		 
		}
		#section3 img{
			
			display: none;

		}
			.form-control {
			width: 200px;
			padding-left: 8%;
			padding-right: 8%;
			padding-top: 5px;
			padding-bottom: 5px;
			
		}
			 .btn{
			
			padding-top: 5px;
			padding-bottom: 5px;
			

		}



		

    }
     @media all and (max-width: 768px){
    	
    	
	.footer2, .footer3{
		display: none;
	}
	.form-check-label {
			
			font-size: 9px;
			
			
			margin-left: 6%;
			padding-top: 1%;
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
		.textforsection{
			text-align: center;
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
             <li><a class="auto" href="LoginForm.php?session_stop"><?php echo  $lang['exit'] ?></a></li>

                      	<?php
                      }
                 
			 ?>
	 <?php
                      if(!$_SESSION['role'] == 3 or $_SESSION['role'] == 4){
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
	  	
	  	<video  loop autoplay muted poster src="scr/videofinal.mp4" type="video/mp4"> </video>
	  	<div class="textformain">
	  	<p><?php echo $lang['welcome'] ?></p>
	  	<h2> <?php echo $lang['qaa'] ?> <br> <?php echo $lang['qhm'] ?> </h2>
	  	</div>
	  </main>
	 
	  <section id="section1"> 
	  	<div class="gtext">
	  		<h1 ><?php echo $lang['our_gallery'] ?></h1> <br>
	  		</div>


	  		<div  class="allimg">
  					<div class="selimg1" data-aos="fade-down-right">
  						<img src="scr/sel1.jpg" alt="">
  						<img src="scr/sel2.jpg" alt="">
  						<img src="scr/sel3.jpg" alt="">
  						</div>
  						<div class="selimg2" data-aos="fade-down-left">
                       <img src="scr/sel4.jpg" alt="">
                       <img src="scr/sel5.jpg" alt="">
                       <img src="scr/sel6.jpg" alt="">
  					
  				</div>
  		  </div>

	  </section>

	   <section  id="section2">
	   	 	<div class="atext">

	   		<h1 ><?php echo $lang['about_us'] ?></h1> <br>
	   		</div>

	   	<img src="scr/2.jpg" alt="">
	   		<div class="textforsection" >
	  	<h5><?php echo $lang['welcome_long'] ?> <br> <?php echo $lang['welcome_short'] ?></h5>	
	  	<p><?php echo $lang['not_only'] ?><br><?php echo $lang['not_only_2'] ?> <br> <?php echo $lang['not_only_3'] ?> </p>
	  	<a href="aboutus.php"><?php echo $lang['more_about'] ?></a>
	  		</div>
	  	
	  </section>
	    <section id="section3">
	    	<img src="scr/3.jpg" alt="">
	    	 <form action="" method="">

	    	 	<h2><?php echo $lang['news'] ?></h2>
	    	 	<p><?php echo $lang['news_2'] ?></p>
	    	 	<div class="email" > 
	    	 	<input type="email" name="email_message" class="form-control" placeholder="Enter email" required> <br>
	    	 	<div class="form-check"> 
	    	 		<button class="btn" type="submit"><?php echo $lang['send'] ?></button> 
	    	 		</div>
	    	 		</div>
	    	 		<br>
                   <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
				  <label class="form-check-label" for="flexCheckDefault">
				 <?php echo $lang['agreement'] ?>
				  </label>
				
	    	 </form>


	  </section>
	  <footer>
	    <div  class="mainfooter">
	  	<div  class="footer1" >
	  		<img src="scr/logo_2.webp" alt="footer logo">
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
	    <script>
		  AOS.init();
		</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>
</html>
<?php
  if(isset($_POST['email_message'])){
$to      = 'peterpensonber@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
 echo "<script>alert('send');</script>";
  }


?>