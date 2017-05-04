<?php include "include/header.php";?>
	<title>Register</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/registration.js"></script>
	<script src="js/mytest.js" async></script>
    
</head>
<body>
<div class="wrapper">
  <div class="content">
    <h2>Регистрация</h2>


    <center class="col-md-6">
        <form class="form-register" method="post" action="register.php">
            <label>Имя:</label><input class="form-control" type="text" id="name" name="name" placeholder="name" required>
            <label>Email:</label><input class="form-control" type="text" id="email" name="email" placeholder="Email" required>
            <label>Пароль:</label><input class = "form-control" id="password" type="password" name="password" placeholder="Пароль" required>
            <label>Повторный пароль:</label><input class = "form-control" id="cpassword" type="password" name="cpassword" placeholder="Повторный пароль" required >
            <button class = "btn btn-primary btn-md btn-submit" type="button" name="register" id="register" data-tooltip="status-close">Зарегистрироваться</button>
        </form>
    </center>

  </div>
</div>

</body>
</html>
