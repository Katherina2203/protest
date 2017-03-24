<?php
require('db/dbconnect.php');
if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
	$email = $_POST['email'];
        $password = $_POST['password'];
 
        $query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
?>
<div class='container'>
	<form method="post">
		<input type="username" placeholder="enter username">
		<input type="password" placeholder="enter password">
		<button class="btn btn-primary btn-block">Register</button>
	</form>
</div>