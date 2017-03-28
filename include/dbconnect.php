<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'protest';
$db_charset = 'utf8';


try {
    $conn = new PDO('mysql:host='.$db_host.'; dbname='.$db_name, $db_user, $db_pass, array(PDO :: MYSQL_ATTR_INIT_COMMAND => 'SET NAMES `'.$db_charset.'`'));
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
    }
catch(PDOException $e)
    {
    echo "<br>" . $e->getMessage();
    }

$conn = null;

