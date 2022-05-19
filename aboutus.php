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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	   
	  
	<title>About us</title>


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
	    	margin-top: 9%;
	    }
	    .section1 img{
			
			 width: 50%;
		 	position:absolute;
		    z-index: -1;
		   padding-top: 20px;
		  
		   margin-left: 50%;

		}
		.text4section1{
			padding-left: 12%;
			padding-top: 6%;
		}
		.text4section1 h4{
			color: #13130d;
			font-size: 40px;
			font-family: 'Metropolis', sans-serif;

		}
		.text4section1 p{
			color: #6d6d65;
			font-size: 20px;
			font-family: 'Cardo', serif;
		}
		.section2{
			margin-top: 9%;
			margin-left: 12%;
			margin-right: 12%;



		}
		.section2 h1{
			padding-top: 9%;
			color: #13130d;
			font-size: 40px;
			font-family: 'Metropolis', sans-serif;

		}
		.section2 img{
			margin-top: 10%;
		}
		.lognum{
			
			width: 100%;
			margin-top: 7%;
			display: flex;
		    justify-content: space-around;
			flex-wrap: wrap;

			
		}
		.wr{
			width: 162px;
			
			
			
		}
		.wr img{
			margin: auto;
			width: auto;
			border:1px solid #c9a050;
			display: block;
			border-radius: 50%;
			padding: 30px;


		}
		.wr div, .wr p{
			text-align: center;
			width: 100%;
		}
     




		.content {
		  display: flex;

           }

		.value {
			  
		  font-size: 22.5px;
		   
		  color: #13130d;
		  font-weight: bold;
		  text-align: center;
		 }
		 .lognum p{
		 	color: #6d6d65;
			font-size: 15px;
			font-family: 'Metropolis', sans-serif;

		 }
		 footer{
			background-color: #13130d;
			padding: 45px;
			margin-top: 7%;
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
		.auto{
		    	font-size: 11px;
      font-family: 'Metropolis', sans-serif; 
        color: #949380;
               text-decoration: none;
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
		.text4section1 h4{
			font-size: 31px;
		}
		.text4section1 p{
			font-size: 16px;
		}

    }
    @media all and (max-width: 768px){
    	/*.section1 img{
    		display: none;
    	}*/
    	.text4section1 h4{
			font-size: 40px;
			
		}
		.text4section1 p{
			font-size: 20px;
			text-align: center;
		}
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
	.text4section1 h4{
			font-size: 29px;
			
			
		}
		.text4section1 p{
			font-size: 14px;
			text-align: center;
		}
		.section2 h1{
			font-size: 30px;


		}
		.text1, .img0{
			display: none;
		}
		.img4{
			padding-left: 40%;

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
                      if(!$_SESSION['role'] == 3 or $_SESSION['role'] == 4 ){
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
	  		<h2><?php echo $lang['about_us'] ?></h2>
	  		<p><?php echo $lang['home'] ?> /<?php echo $lang['about_us'] ?></p>
	  	</div>
		</main>
		<section class="section1">
			<img src="scr/5.png" alt="">
			<div class="text4section1" data-aos="fade-up-right" >
				<h4><?php echo $lang['welcome_long'] ?>  <br><?php echo $lang['welcome_short'] ?></h4>
				<p><?php echo $lang['new_not_1'] ?><br> <?php echo $lang['new_not_2'] ?> <br><?php echo $lang['new_not_3'] ?><br> <?php echo $lang['new_not_4'] ?><br><?php echo $lang['new_not_5'] ?></p>
			</div>
		</section>
		  <section class="section2" >
		  	
		  		<h1><?php echo $lang['what_int'] ?></h1>
		  		<div class="lognum"> 

		  		

		  			<div class="wr"  data-aos="zoom-in">
		  			<img src="scr/paint.png" alt=""><br> <br>
		  			<div class="content">
		  			<div class="value" akhi="2820">0</div> </div>
		  			<p><?php echo $lang['Oil'] ?></p>
		  		</div>
		  
		  	<div  class="wr"  data-aos="zoom-in">
		  		<img src="scr/medieval.png" alt=""><br> <br>
		  			<div class="content">
		  			<div class="value" akhi="1470">0</div> </div>
		  			<p><?php echo $lang['knight'] ?></p>
		  	</div>

		  		<div  class="wr"  data-aos="zoom-in">
		  		<img src="scr/necklace.png" alt=""><br> <br>
		  			<div class="content">
		  			<div class="value" akhi="1630">0</div> </div>
		  			<p><?php echo $lang['Royal'] ?></p>
		  	</div>

		  	<div  class="wr"  data-aos="zoom-in">
		  		<img src="scr/papyrus.png" alt=""> <br> <br>
		  			<div class="content">
		  			<div class="value" akhi="980">0</div> </div>
		  			<p><?php echo $lang['Engravings'] ?></p>
		  	</div>

		  	<div  class="wr"  data-aos="zoom-in">
		  		<img src="scr/faberge.png" alt=""><br> <br>
		  			<div class="content">
		  			<div class="value" akhi="3120">0</div> </div>
		  			<p><?php echo $lang['Faberge'] ?></p>
		  	</div>

		  	<div  class="wr"  data-aos="zoom-in">
		  		<img src="scr/hanbok.png" alt=""><br> <br>
		  			<div class="content">
		  			<div class="value" akhi="2455">0</div> </div>
		  			<p><?php echo $lang['Folk'] ?></p>
		  	</div>

		  	</div>



			<script>
				const counters = document.querySelectorAll('.value');
				const speed = 1300;

				counters.forEach( counter => {
				   const animate = () => {
				      const value = +counter.getAttribute('akhi');
				      const data = +counter.innerText;
				     
				      const time = value / speed;
				     if(data < value) {
				          counter.innerText = Math.ceil(data + time);
				          setTimeout(animate, 1);
				        }else{
				          counter.innerText = value;
				        }
				     
				   }
				   
				   animate();
				});
			</script>	
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
  				<a href=""><?php  echo $lang['collection'] ?></a></a> <br> <br>
  				<a href="#section1"><?php  echo $lang['gallery'] ?></a>

	  	</div>
	  	<div class="footer3">
	  		<h2><?php  echo $lang['info'] ?></h2> <br>
	  		<a href="aboutus.php" ><?php  echo $lang['about_us'] ?> </a><br> <br>
 				 <a href="#shop" id="shop"><?php  echo $lang['shop'] ?></a>

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
</html>