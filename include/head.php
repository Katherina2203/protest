<div class="header">
	<h2>Страница инвайтов</h2>
	 <div class="menu">
	 <a href="index.php">Главная</a>
	  <a href="register.php">Зарегистрироваться</a>
	 </div>
	 <div class="auth">
	 Привет,  <?php echo $_SESSION['login_user']; ?>&nbsp;
	 <form method="post" action="logout.php">
	 <button class = "btn btn-primary btn-block" type = "submit" 
               name = "logout">Logout</button>
	 </form>
	 </div>
	 <div class="location">
	 </div>
</div>