<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LIST USERS</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src=""></script>
</head>
<body>
	 <?php   session_start(); 
error_reporting(E_ALL ^ E_NOTICE);
        include('lang.php');
if(isset($_COOKIE["user"])){
    
  }
  else{header("Location:logout.php?session_out=yes");}
?>
	<div class="content">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="col-md-12 mb-5 text-center">
						<br>
						<a href="Admin_Action.php"><?php echo $lang['back'] ?></a>
						<br>
						<h5><?php echo $lang['see_users'] ?></h5>	
					</div>

					<div class="col-md-12">
						<?php
						require_once "db.php";
						$db = new Db();
						$q = $db->query("SELECT * FROM users");

						echo "<table class='table'><thead><tr><th scope='col'>#</th><th scope='col'>".$lang['loginh1']."</th><th scope='col'>".$lang['passwordU']."</th><th scope='col'>".$lang['nameU']."</th><th scope='col'>".$lang['delete']."</th></tr></thead><tbody id='resusers'>";
						if (!empty($q)) {
							foreach ($q as $row) {
								if($row['id'] > 1){
									echo "<tr><td>" . $row["id"] .
										"</td><td>" . $row["login"] .
										"</td><td>" . $row["password"] .
										"</td><td>" . $row["name"] .
										"</td><td>" . "<button style='border:none; font-weight: 700; background-color: rgba(0,0,0,0);' class='delete'; data-id='$row[id]'>".$lang['delete']."</button>" .
										"</td></tr>";
								}
							}
						}
						echo "</tbody></table>";
						?>
					</div>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
</body>

<script>
$(document).ready(function(){
    $('.delete').click(function(){
        var el = this;
        var deleteprod = $(this).data('id');
		$.ajax({
			url: 'del.php',
			type: 'POST',
			data: { user:deleteprod },
			success: function(response){
				$(el).closest('tr').slideUp(300,function(){
				$(this).remove();
				});
			}
		});
    });
});
</script>
</html>