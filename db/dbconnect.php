<?php
$connect = mysqli_connect('localhost', 'root', '');

if(!$connect){
	die("Database connection failed!". mysqli_error($connect));
}

$select_db = mysqli_select_db($connect, 'protest');

if(!$select_db){
	die("Database selection failed!". mysqli_error($connection));
}