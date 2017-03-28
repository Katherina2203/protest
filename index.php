<?php
ob_start();
session_start();
if (!isset($_SESSION['login_user'])) {header('Location: login.php');}
else {header("Location: home.php");}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="content">
	<h2>Main page</h2>
	 
	 <form method="post" action="logout.php">
	 <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "logout">
			  Logout</button>
	 </form>
        </div>
</body>
</html>