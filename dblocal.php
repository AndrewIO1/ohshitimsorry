<?php
//подключение к БД
define("ip", "127.0.0.1");
define("login", "root");
define("pass", "");
define("database", "diplom");
$db = mysqli_connect (ip, login, pass, database);
if (!$db) echo mysqli_error();
mysqli_query($db, "SET CHARACTER SET utf8");
mysqli_query($db, "SET NAMES utf8");
?>