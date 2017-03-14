<!doctype html>
<html>
<head>
<link rel=stylesheet href=style.css>
<link rel=stylesheet href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
<div class="container">
<?php
	session_start();
	 session_unset();
         session_destroy();
	?>

<body>
<div class="row" >
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:25%">
		
			<fieldset>
				<h2>Вы успешно разлогинились</h2>
				
				
				
			
					
						<a href="index.php" class="btn btn-lg btn-primary btn-block">Вернуться на главную</a>
					
				</div>
			</fieldset>
		
	</div>
</div>
</body>
</html>
