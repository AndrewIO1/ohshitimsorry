<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
   
<title>Проверка</title>
</head>



<?php
// Скрипт проверки

// Соединямся с БД
include('db.php');
session_start();
	
if (isset($_SESSION['id']))
{
	
    $query = mysqli_query($db, "SELECT * FROM users WHERE id = '".$_SESSION['id']."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);

    if(($userdata['id'] !== $_SESSION['id']))
    {
        
        print "Хм, что-то не получилось";
    }
    else
    {
		$login = $userdata['login'];
        //print "Привет, ".$login.". Всё работает!";
		if ($_SESSION['role'] == 1){
			$rn = 'Обычный пользователь';
		}
		if ($_SESSION['role'] == 2){
			$rn = 'Модератор';
		}
		if ($_SESSION['role'] == 99){
			$rn = "admin";
		}
		//print '<br>';
		//print "Твоя роль -".$rn;
			
		
		
    }
}

?>
<body>
<div class="row" >
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:15%">
		
			
				<h2>Добро пожаловать на сайт, <?php print "<b>".$login."</b>"; ?>!</h2>
			
				
				<a href="index.php" class="btn btn-lg btn-success btn-block">Перейти на главную</a>
				

					
				</div>
			
		
</div>


</body>
</html>