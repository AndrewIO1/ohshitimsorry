<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="row" >
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:15%">
<?php

    
  include ("db.php");
	
$abspath=$_SERVER['DOCUMENT_ROOT'];
$uploaddir = $abspath.'/uploads/files/';
		
		
		if (!isset($_POST['link'])){
$file_name = $_FILES['userfile']['name']; 
	
function translit($s) {
  $s = (string) $s; // преобразуем в строковое значение
  $s = strip_tags($s); // убираем HTML-теги
  $s = str_replace(array("\n", "\r"), " ", $s); // убираем перевод каретки
  $s = preg_replace("/\s+/", ' ', $s); // удаляем повторяющие пробелы
  $s = trim($s); // убираем пробелы в начале и конце строки
  $s = function_exists('mb_strtolower') ? mb_strtolower($s) : strtolower($s); // переводим строку в нижний регистр (иногда надо задать локаль)
  $s = strtr($s, array('а'=>'a','б'=>'b','в'=>'v','г'=>'g','д'=>'d','е'=>'e','ё'=>'e','ж'=>'j','з'=>'z','и'=>'i','й'=>'y','к'=>'k','л'=>'l','м'=>'m','н'=>'n','о'=>'o','п'=>'p','р'=>'r','с'=>'s','т'=>'t','у'=>'u','ф'=>'f','х'=>'h','ц'=>'c','ч'=>'ch','ш'=>'sh','щ'=>'shch','ы'=>'y','э'=>'e','ю'=>'yu','я'=>'ya','ъ'=>'','ь'=>''));
  //$s = preg_replace("/[^0-9a-z-_ ]/i", "", $s); // очищаем строку от недопустимых символов
  $s = str_replace(" ", "-", $s); // заменяем пробелы знаком минус
  return $s; // возвращаем результат
}
	
$file_name = translit($file_name);
	
//echo($file_name);

$name = $_POST['Name']; 
$author = $_POST['Author']; 
$year = $_POST['Year'];
	
//$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
$size = 26214400;
	
	

//echo $file_name, $name, $author, $age, $teacher, $class; 
                                //проверка расширения
//if (!in_array($_FILES['userfile']['type'], $types))
//die('Невозможно загрузить файл с данным расширением. <a href="docload_form.php">Попробуйте другой файл.</a>');
                                 //проверка размера
if ($_FILES['userfile']['size'] > $size)
die('Слишком большой размер файла. <a href="docload_form.php">Попробуйте другой файл.</a>');

	
                              //загрузка файлов
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . 
$file_name)) { 

$q = "INSERT INTO docs (name, author,
year, filedir) VALUES ('$name','$author', '$year','$file_name')"; 
$query = mysqli_query($db, $q); 



print "<h2>Файл ".$file_name ." успешно загружен.</h2>"; 
	mysqli_close($db);

} else { 
print "<h2>При загрузке файла произошли проблемы. ош1</h2>";
	mysqli_close($db);
}
		}
		else
		{
			$name = $_POST['Name']; 
$author = $_POST['Author']; 
$year = $_POST['Year'];
			$link = $_POST['link'];
			
			$q = "INSERT INTO docs (name, author,
year, link) VALUES ('$name','$author', '$year','$link')"; 
$query = mysqli_query($db, $q); 
			
			if ($query){
			
			print "<h2>Файл успешно загружен.</h2>"; 
	mysqli_close($db);

} else { 
print "<h2>При загрузке файла произошли проблемы. ош2</h2>";
	mysqli_close($db);
}
			
		}

?> 
    
    <p>Возврат на страницу через <span id="time"></span> </p>
     <a href="docs.php" class="btn btn-lg btn-success btn-block">Вернуться к документам</a>
		</div></div>
    </body>
    
   <!--<script type="text/javascript">
        var i = ; //время в сек.
        function time() {
            document.getElementById("time").innerHTML = i; //визуальный счетчик
            i--; //уменьшение счетчика
            if (i < 0) location.href = "docs.php"; //редирект
        }
        time();
        setInterval(time, 1000);
    </script> --> 
   

    
    

</html>