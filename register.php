<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	
</head>
<body>

<?php


include ('db.php');


if(isset($_POST['submit']))

{

    $err = array();


    # проверям логин

    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))

    {

        $err[] = "Логин может состоять только из букв английского алфавита и цифр";

    }

    

    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 30)

    {

        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";

    }

    

    # проверяем, не сущестует ли пользователя с таким именем

    $query = mysqli_query($db, "SELECT id FROM users WHERE login='".mysqli_real_escape_string($db, $_POST['login'])."'");
	$result = mysqli_fetch_assoc($query);
	if (isset($result['id'])){
		$err[] = "Пользователь с таким логином уже существует в базе данных";
	}
    
    

    # Если нет ошибок, то добавляем в БД нового пользователя

    if(count($err) == 0)

    {

        
        $login = $_POST['login'];

        

        # Убераем лишние пробелы и делаем двойное шифрование

        $password = md5(md5(trim($_POST['password'])));

        

        mysqli_query($db, "INSERT INTO users SET login='".$login."', password='".$password."'");

        header("Location: login.php"); exit();

    }


}
	#ОТКЛЮЧЕНИЕ ПРОВЕРКИ ОШИБОК
ini_set('display_errors','Off');

?>








	
	<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" >
		<form method="POST">
			<fieldset>
				<h2>Регистрация на сайте</h2>
				
				<div class='alert alert-danger' id='alerterr'><br></div>
				<?php
				if(count($err) > 0){
					 print "<script>
					 
					 $('#alerterr').css('display', 'block');
				
					 </script>";

        foreach($err AS $error)

        {
			 print "<script>
					 
					 $('#alerterr').html('".$error."<br>');
				
					 </script>";

        }
					
				}
				?>
				
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="login" name="login" id="email" class="form-control input-lg" placeholder="Логин" required>
				</div>
				<div class="form-group">
                    <input type="password" name="pass" id="pass" class="form-control input-lg" placeholder="Пароль" required>
				</div>
				<div class="form-group">
                    <input type="password" name="repPass" id="repPass" class="form-control input-lg" placeholder="Повторите пароль" required>
				</div>
				<div class="alert alert-warning" id='alertshow' role="alert"></div>
				
				<script src="jquery.js"></script>

				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-offset-3 col-lg-6">
                        <input name="submit" type="submit" class="btn btn-lg btn-success btn-block" value="Подтвердить данные">
					</div>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>
	
	<script language="javascript">
    $(document).ready(function() {
	
		
        $('#repPass').change(function() {
            var pass = $("#pass").val();
            var pass_rep = $("#repPass").val();
			
			$('#alertshow').css('display', 'block');
            if (pass != pass_rep) {
                $("#repPass").css('border', 'red 1px solid');
                $('#alertshow').css('visibility', 'visible');
				$('#alertshow').html('Данные не совпадают');
            }
			if (pass == pass_rep) {
				$("#repPass").css('border', 'green 1px solid');
				$('#alertshow').css('display', 'none');
			}
        });
    });
</script> 
	

	</body>

</html>