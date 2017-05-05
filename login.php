<?php include "include/header.php";?>
    <title>Login</title>
</head>
<body>
<div class="wrapper">
    <div class="content">
    <h2>Авторизация</h2>

    <?php
    session_start();
    ?>

<?php
//session_start();
include_once 'include/db.php';
           // require_once 'classes/DB.class.php';
            $db = new DB();
            $db->connect();
         //   echo $db->select('us', 'pass = bek7b7');
        ?>
   
	  
    <form class = "form-signin" action = "login.php" method = "post">
                <center><input type = "text" class = "form-control" name = "login" placeholder = "Введите логин" required autofocus></br>
                <input type = "password" class = "form-control" name = "password" placeholder = "Введите пароль" required>
                <button class = "btn btn-primary btn-md" type = "submit" name = "signin">
                        <span class="glyphicon glyphicon-log-in"></span>&nbsp; Login
                        </button><br/>
                               или <a name="register" id="register" href="register.php">зарегистрироваться</a>
                </center>
    </form>

</div> 
</div> 
    <script src="js/refreshform.js"></script>
    <script src="js/script.js"></script>
</body>
</html>