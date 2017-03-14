<?php
//подключение к БД
define("ip", "eu-cdbr-azure-west-d.cloudapp.net");
define("login", "bd9fc826e7a22c");
define("pass", "bb7da763");
define("database", "acsm_e87c8e1060cefab");
$db = mysqli_connect (ip, login, pass, database);
if (!$db) echo mysqli_error();
mysqli_query($db, "SET CHARACTER SET utf8");
mysqli_query($db, "SET NAMES utf8");
?>