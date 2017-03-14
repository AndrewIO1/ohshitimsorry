<html>
	<head>
		   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
	</head>
	
	<body>
	<div class="row" >
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:15%">
		
		<?php
		
		include ('db.php');
		//путь к файлам
		$abspath=$_SERVER['DOCUMENT_ROOT'];
		$mydir = $abspath.'/uploads/';
		
		if ($_POST['table'] == "gallery"){
			
			$id = $_POST['id'];
			$p = mysqli_query($db, "SELECT * FROM gallery WHERE id ='".$id."'");
			$row = mysqli_fetch_assoc($p);
			$path = $row['img'];
			$q="DELETE FROM `gallery` WHERE `gallery`.`id` = ". $id;
			$query = mysqli_query($db,$q);


			if ($query) {
			unlink($mydir.$row['img']);
			unlink($mydir.'min/minimized_'.$row['img']);
			echo "Удаление успешно!";
			mysqli_close($db);
			}

			else {
			"Произошла ошибка!";

				mysqli_close($db);
			}
			}
		//документ
		if ($_POST['table'] == "docs"){
			$id = $_POST['id'];
			$p = mysqli_query($db, "SELECT * FROM docs WHERE id ='".$id."'");
			$row = mysqli_fetch_assoc($p);
			$path = $row['filedir'];
			if ($row['link'] == NULL){
				$link = false;
			}
			else {
				$link = true;
			}
			echo $link;
			$q="DELETE FROM `docs` WHERE `docs`.`id` = ". $id;
			$query = mysqli_query($db,$q);


			if ($query) {
				
			if ($link == FALSE){
			unlink($mydir.'files/'.$path);
			}
				
			echo "Удаление успешно!";
			mysqli_close($db);
			}

			else {
			"Произошла ошибка!";

				mysqli_close($db);
			}
			}
		
		
		

		
		?>
		
		
		<p>Возврат на страницу через: <span id="time"></span> </p>
   <a href="docs.php" class="btn btn-lg btn-primary btn-block">Вернуться к документам</a>
		</div></div>
    
 <!-- <script type="text/javascript">
        var i = 3; //время в сек.
        function time() {
            document.getElementById("time").innerHTML = i; //визуальный счетчик
            i--; //уменьшение счетчика
            if (i < 0) location.href = "<?php echo $goback?>"; //редирект
        }
        time();
        setInterval(time, 1000);
    </script> -->
    
	</body>
</html>