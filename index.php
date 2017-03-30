<?php
ob_start();
session_start();
if (!isset($_SESSION['login_user'])) {header('Location: login.php');}
else {header("Location: home.php");}

