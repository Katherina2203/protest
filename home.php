<?php
//session_start();
include_once 'include/dbconnect.php';
if(isset($_POST['logout'])){
	session_destroy();
header('location: index.php');
}


?>


<?php include "include/header.php";?>
<body>
<div class="wrapper">
<div class="content">
<?php include "include/head.php";?>
 <div class="container">       
	<form method="post" action="logout.php">
	 <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "logout">
			  Logout</button>
	 </form>

</div>
</div>
</div>
</body>
</html>