<?php include('lang.php');
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>LIST User Art</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src=""></script>
</head>

<body>

	<div class="content">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="col-md-12 mb-5 text-center">
						<br>
						<a href="shop.php"><?php echo $lang['back']?></a>
						<br>
						<h5><?php echo $lang['cart']?></h5>
					</div>

					<div class="col-md-12">
						<?php
						session_start();
						require_once "db.php";
						$db = new Db();

						$uid = $_SESSION['id'];
                          $total = 0;
						$q = $db->query("SELECT product.id, product.name, product.kind, product.price FROM users_cart INNER JOIN product ON users_cart.pid = product.id WHERE users_cart.uid ='$uid'");
						echo "<table class='table'><thead><tr><th>#</th><th>".$lang['art_name']."</th><th>". $lang['kind']."</th><th>".$lang['price']."</th><th>".$lang['delete']."</th></tr></thead><tbody id='resusers'>";
						if (!empty($q)) {
							 $total = 0;
							foreach ($q as $row) {
								$total+= $row['price'];
									echo "<tr><td>" ."#" .
									"</td><td>" . $row["name"] .
									"</td><td>" . $row["kind"] .
									"</td><td>" . $row["price"] .
									"</td><td>" . "<button style='border:none; font-weight: 700; background-color: rgba(0,0,0,0);' class='delete'; data-id='$row[id]'>".$lang['delete']."</button>" .
									"</td></tr>";
								}
							}
                                      echo "<tr><td>" ."" .
									"</td><td>" ."" .
									"</td><td>" . "" .
									"</td><td>" . "" .
									"</td><td>  <b>".$lang['total']."<b> " . $total ."<span> tg<span> ".
									"</td></tr>";
							echo "</tbody></table>";
							$total = 0;
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
			url: 'del_cart_item.php',
			type: 'POST',
			data: { product:deleteprod },
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