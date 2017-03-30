<?php
include "include/header.php";
include_once 'include/dbconnect.php';
/*if(isset($_POST['logout'])){
	session_destroy();
header('location: index.php');
}*/
?>

    <title>Main page</title>
</head>
<body>
<div class="wrapper">
    <div class="content">

       
            <div class="auth">
            Привет, Андрей <?php // $_SESSION['login_user']; ?>
                <div class="btn btn-default btn-xs"><a href="">logout</a></div>
            <!--    <form method="post" action="logout.php">
                    <span class = "" type = "submit" name = "logout">Logout</span>
                </form>-->
            </div>
            <div class="location">
                Your location:
            </div>
            <div class="menu" >
                <a href="index.php">Главная</a>
                <a href="register.php">Зарегистрироваться</a>
            </div>
            
           

        
        <h2>Main page</h2>
        
	 
	
    </div>
</div>
</body>
</html>