<?php
 session_start();
 session_destroy();

if (isset($_GET['session_out'])) {
	if ($_GET['session_out']== 'yes'){
		header("Location:LoginForm.php?session_stop");	}
		else{
	header('Location: LoginForm.php');
}
}

else{
	header('Location: LoginForm.php');
}


?>