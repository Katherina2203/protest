<?php include "include/header.php";?>
    <title>Register</title>
</head>
<body>
<div class="wrapper">
  <div class="content">
    <h2>Регистрация</h2>
   

    
    <?php
    session_start();
    include_once 'include/dbconnect.php';
    $msg='';

    if(isset($_POST['submit'])){
            //$login = mysqli_real_escape_string($connect, $_POST['login']);
            $username = $_POST['username'];
            $password = mysqli_real_escape_string($connect, $_POST['password']);
            $repeat = mysqli_real_escape_string($connect, $_POST['repeat']);
            $phone = mysqli_real_escape_string($connect, $_POST['phone']);
            $id_country = mysqli_real_escape_string($connect, $_POST['id_country']);
            $id_city = mysqli_real_escape_string($connect, $_POST['id_city']);
            $id_territory = mysqli_real_escape_string($connect, $_POST['id_territory']);


            //checking login
            $login = (isset($_POST['login'])) ? mysqli_real_escape_string($connect, $_POST['login']) : '';
            if(!preg_match('/^[а-яА-ЯЁёa-zA-Z0-9]* ?[а-яА-ЯЁёa-zA-Z0-9]*$/', $login)) 
            {$err[] = "Логин может состоять только из букв английского и русского алфавитов, цифр и одного пробела(пробел не может быть первым)";}
             if(strlen($_POST['login']) < 5 or strlen($_POST['login']) > 20)
        {
            $err[] = "Логин должен быть не меньше 5-х символов и не больше 20";
        }
            //checking password
            $password = (isset($_POST['login'])) ? mysqli_real_escape_string($connect, $_POST['password']) : '';
            if(!preg_match('|^[a-zA-Z0-9-_\.]{5,20}$|', $password)) 
            {$err[] = "Пароль может состоять только из букв английского и русского алфавитов, цифр и одного пробела(пробел не может быть первым)";}
            if(strlen($_POST['password']) < 5 or strlen($_POST['password']) > 20)
            {
            $err[] = "Пароль должен быть не меньше 5-х символов и не больше 20";
        }


            $sql_l = "SELECT * FROM users WHERE login = '$login'";
            $res = mysqli_query($connect, $sql_l);
            $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
            //check unique login
            if(mysqli_num_rows($res) == 1)
                    {
                    echo $msg = "<h4 class = 'form-signin-heading'><div class='error'>Данный логин уже существует. Выберите другой.</div></h4>";
                    }
            else
            {
            if($password == $repeat){
                    $password = md5($password);

                    $invite = md5($_POST['invite']);

                    //check invite
                    $sql_i = "SELECT * FROM invites WHERE invite = '$invite'";
                    $res_i = mysqli_query($connect,$sql_i);
                    $rs_i = $res_i->fetch_row();
                    if($rs_i['invite'] == $invite){
                            $query_i = mysqli_query($connect, "UPDATE invites SET status=1, date_status=NOW() WHERE invite= 'md5($invite)'");	
                            echo $msg = "<h4 class = 'form-signin-heading'><div class='success'>Инвайт введен правильно!<div></h4>";
                    }else 	echo $msg = "<h4 class = 'form-signin-heading'><div class='error'>Данный инвайт уже существует. Повторите попытку</div></h4>";


                    $query = mysqli_query($connect, "INSERT INTO users (login, password, phone, id_country, id_city, invite) VALUES('$login', '$password', '$phone', '$id_country', '$id_city', '$invite')");
                    if($query)	{
                            echo $msg = "<h4 class = 'form-signin-heading'><div class='success'>Регистрация прошла успешно!<div></h4>";
                            $_SERVER['login-user'] = $login;
                            //header("location: home.php");
                    }else{	echo $msg = "<h4 class = 'form-signin-heading'><div class='error'>Возникли проблемы при регистрации. Попробуйте позже!<div></h4>";}

                    } else {
            echo $msg = "<h4 class = 'form-signin-heading'><div class='error'>Пароли не совпадают. Повторите попытку</div></h4>";
            }

    }
    }
    ?>
    <center class="col-md-6"><form class="form-register" method="post" action="register.php">

		<label>Имя:</label><input class="form-control" type="text" id="name" name="name" placeholder="surname" required>
		<label>Фамилия:</label><input class="form-control" type="text" id="surname" name="surname" placeholder="surname" required>
                <label>Телефон:</label><input class="form-control" type="text" id="phone" class="mask" name="phone" placeholder="phone" required>
		<label>Email:</label><input class="form-control" type="text" id="email" name="email" placeholder="Email" required>
		<label>Пароль:</label><input class = "form-control" id="password" type="password" name="password" placeholder="Пароль" required>
		<label>Повторный пароль:</label><input class = "form-control" type="password" name="repeat" placeholder="Повторный пароль" required >
		<label>Страна:</label>
		<select id="country-list" onChange="getCity(this.value)" class = "form-control" name="id_country" required>
		<option value="">Выберите страну</option>
		<?php 
		$sql = mysqli_query($connect,'SELECT * FROM regions');
		while($rs = mysqli_fetch_assoc($sql)){ ?>
			<option value="<?php echo $rs['id_country']; ?>"><?php echo $rs['country_name']; ?></option>
		<?php }	?>
		</select><br/>
		<label>Город:</label>
		<select id="city-list" class = "form-control" name="id_city" required>
		<option value="">Выберите город</option>
		</select><br/>
		<label>Область:</label>
		<select id="city-list" class = "form-control" name="id_city" required>
		<option value="">Выберите город</option>
		</select><br/>
		
                    <button class = "btn btn-primary btn-md btn-submit" type="submit" name="submit">
                    Зарегистрироваться
                    </button>
                    <button class = "btn btn-primary btn-md" name="refresh">Refresh</button>
	</form>
    </center>

  </div>
</div>
</body>
</html>
<script  type="text/javascript">
function getCity(val){
	$.ajax({
		type:"POST",
		url: "get_city.php",
		data:'id_country='+val,
		success:function(data){
			$("#city-list").html(data);
		}
	});
}
</script>
<script type="text/javascript">
jQuery(function(){
    jQuery(".mask").mask("(999) 999-9999");
});
</script>