<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel=stylesheet href=style.css>
<link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Логин</title>
</head>
<div class="container">

<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form method="POST">
			<fieldset>
				<h2>Вход на сайт</h2>
				<div class='alert alert-danger' id='alertlogerr'><br></div>
				<hr class="colorgraph">
				<div class="form-group">
                    <input type="login" name="login" id="email" class="form-control input-lg" placeholder="Логин" required>
				</div>
				<div class="form-group">
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Пароль" required>
				</div>
				<!--<span class="button-checkbox">
					<button type="button" class="btn" data-color="info">Запомнить меня</button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
				
				</span> -->
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input name="submit" type="submit" class="btn btn-lg btn-success btn-block" value="Вход">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<a href="register.php" class="btn btn-lg btn-primary btn-block">Регистрация</a>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>



<?php
// Страница авторизации

// Функция для генерации случайной строки
function generateCode($length=6) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
            $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}

// Соединямся с БД
include ('db.php');

if(isset($_POST['submit']))
{
    // Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($db,"SELECT id, password, role FROM users WHERE login='".mysqli_real_escape_string($db,$_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);

    // Сравниваем пароли
    if($data['password'] === md5(md5($_POST['password'])))
    {
        // Генерируем случайное число и шифруем его
        $hash = md5(generateCode(10));

        // Записываем в БД новый хеш авторизации
        mysqli_query($db, "UPDATE users SET hash='".$hash."' WHERE id='".$data['id']."'");

        // Куки и сессия
       // setcookie("id", $data['id'], time()+60*60*24*30);
       // setcookie("hash", $hash, time()+60*60*24*30,null,null,null,true);// httponly !!!
		 session_unset();
         session_destroy();
		session_start();
		$_SESSION['id'] = $data['id'];
		$_SESSION['login'] = $data['login'];
		$_SESSION['hash'] = $data['hash'];
		$_SESSION['role'] = $data['role'];
		

        // Переадресовываем браузер на страницу проверки нашего скрипта
        header("Location: check.php"); exit();
    }
    else
    {
       
			print "<script>
					 
					 $('#alertlogerr').css('display', 'block');
				
					 </script>";
        
			 print "<script>
					 
					 $('#alertlogerr').html('Вы ввели неправильный логин или пароль. <br>');
				
					 </script>";

					
				}
				
    }

?>
<!--<form method="POST">
Логин <input name="login" type="text"><br>
Пароль <input name="password" type="password"><br>

<input name="submit" type="submit" value="Войти">
</form> -->


<script language="javascript">
	$(function(){
    $('.button-checkbox').each(function(){
		var $widget = $(this),
			$button = $widget.find('button'),
			$checkbox = $widget.find('input:checkbox'),
			color = $button.data('color'),
			settings = {
					on: {
						icon: 'glyphicon glyphicon-check'
					},
					off: {
						icon: 'glyphicon glyphicon-unchecked'
					}
			};

		$button.on('click', function () {
			$checkbox.prop('checked', !$checkbox.is(':checked'));
			$checkbox.triggerHandler('change');
			updateDisplay();
		});

		$checkbox.on('change', function () {
			updateDisplay();
		});

		function updateDisplay() {
			var isChecked = $checkbox.is(':checked');
			// Set the button's state
			$button.data('state', (isChecked) ? "on" : "off");

			// Set the button's icon
			$button.find('.state-icon')
				.removeClass()
				.addClass('state-icon ' + settings[$button.data('state')].icon);

			// Update the button's color
			if (isChecked) {
				$button
					.removeClass('btn-default')
					.addClass('btn-' + color + ' active');
			}
			else
			{
				$button
					.removeClass('btn-' + color + ' active')
					.addClass('btn-default');
			}
		}
		function init() {
			updateDisplay();
			// Inject the icon if applicable
			if ($button.find('.state-icon').length == 0) {
				$button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
			}
		}
		init();
	});
});
	</script>
</div>
<body>
</body>
</html>