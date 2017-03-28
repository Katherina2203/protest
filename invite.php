<html>
   
   <head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>Add invite</title>
      <link rel = "stylesheet" href = "css/bootstrap.min.css" >
	  <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
      <link rel="stylesheet" type="text/css" href="css/style.css"  >
    
   </head>
	
   <body>
<div class = "content">
    <h2>Добавить инвайт</h2> 

         
<?php
include_once 'include/dbconnect.php';
$msg = '';
            
if (isset($_POST['submit'])){
	$invite = mysqli_real_escape_string($connect, $_POST['invite']);
	//check invite
	$invite=(isset($_POST['invite'])) ? mysql_real_escape_string($_POST['invite']) : '';
	if (!preg_match("/^([0-9]{6})$/",$invite)){
		 echo "<h4 class = 'form-signin-heading'><div class='error'>Инвайт должен состоять из 6 цифр.</div></h4>'";
	}else{
		
		//$invite = md5($invite);
		$query = mysqli_query($connect, "INSERT INTO invites(invite) VALUES('".md5($invite)."')");
		echo "<h4 class = 'form-signin-heading'><div class='success'>Инвайт добавлен успешно!</div></h4>'";
		header("location: home.php");
   
    }
}
?>
     
<div class = "container">
<form class = "form-register" action = "invite.php" method = "post">
        <input type = "text" class = "form-control" name = "invite" placeholder = "invite" required autofocus></br>
            
		<button class = "btn btn-lg btn-primary btn-block" type = "submit" name = "submit">Добавить</button>
</form>
			
         
         
      </div> 
      
   </body>
</html>