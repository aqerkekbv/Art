<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>LIST Art</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="scriptslab8.js"></script>
</head>

<body>

	<div class="content">
		<div class="container">
			<div class="row mt-3">
				<div class="col-md-12">
					<div class="col-md-12 mb-5 text-center">
						<br>
						<a href="USER_MAIN_PAGE.php">Back to Main Page</a>
						<br>
						<h5>About Art</h5>
					</div>

					<div class="col-md-12">
						<?php
						require_once "db.php";
						$db = new Db();
						$q = $db->query("SELECT * FROM `product`");

						echo "<table class='table'><thead><tr><th scope='col'>#</th><th scope='col'>Name</th><th scope='col'>Kind</th><th scope='col'>Price</th><th scope='col'>Buy</th></tr></thead><tbody id='resusers'>";
						if (!empty($q)) {
							foreach ($q as $row) {
									echo "<tr><td>" . $row["id"] .
										"</td><td>" . $row["name"] .
										"</td><td>" . $row["kind"] .
										"</td><td>" . $row["price"] .
										"</td><td>" . "<button style='border:none; font-weight: 700; background-color: rgba(0,0,0,0);' class='buy'; type='submit' data-id='$row[id]'>Buy</button>" .
										"</td></tr>";
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
    $('.buy').click(function(){
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
</script>
</html>