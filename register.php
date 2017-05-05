<?php include "include/header.php";?>
	<title>Register</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!--    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>-->
        <script type="text/javascript" src="chosen.jquery.min.js"></script>
	<script type="text/javascript" src="js/registration.js"></script>
	<script src="js/mytest.js" async></script>
        
        <link rel="stylesheet" href="chosen_v1.7.0/chosen.min.css" charset="utf-8" />
    
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
            
            <label>Выберите страну:</label>
            <select data-placeholder="Выберите страну" class = "form-control selectcity" id="country" name="country" required>
                <option value=""></option> 
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
               
            </select>
            
            <label>Выберите город:</label>
            <select data-placeholder="Выберите город" class = "form-control selectcity" id="city" name="city" required>
                <option value=""></option> 
                <option value="United States">Киев</option>
                <option value="United Kingdom">Харьков</option>
               
            </select>
            
            
            <button class = "btn btn-primary btn-md btn-submit" type="button" name="register" id="register" data-tooltip="status-close">Зарегистрироваться</button>
        </form>
    </center>

  </div>
</div>

</body>
</html>

<script>
    $('.selectcity').chosen();
// установим обработчик события
$('.selectcity').change(function(){
  // обработка события change
});
</script>
<?php
/*$connection = mysql_connect("localhost", "root", ""); // Establishing connection with server..
$db = mysql_select_db("college", $connection); // Selecting Database.
$name=$_POST['name1']; // Fetching Values from URL.
$email=$_POST['email1'];
$password= sha1($_POST['password1']); // Password Encryption, If you like you can also leave sha1.
// Check if e-mail address syntax is valid or not
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing email(Remove unexpected symbol like <,>,?,#,!, etc.)
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
echo "Invalid Email.......";
}else{
$result = mysql_query("SELECT * FROM users WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into registration(name, email, password) values ('$name', '$email', '$password')"); // Insert query
if($query){
echo "You have Successfully Registered.....";
}else
{
echo "Error....!!";
}
}else{
echo "This email is already registered, Please try another email...";
}
}
mysql_close ($connection); 
 * */

?>


