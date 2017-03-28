<?php
if(isset($_SESSION['logout']))
{
	unset($_SESSION['login_user']);
	session_destroy();
	
}else{
	header("Location: login.php");
}
?>
