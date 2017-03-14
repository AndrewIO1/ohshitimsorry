<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
<?php

    
  include ("db.php");
	


$abspath=$_SERVER['DOCUMENT_ROOT'];
		$uploaddir = $abspath.'/uploads/';
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
$age = $_POST['Age']; 
$teacher = $_POST['Teacher']; 
$class = $_POST['Class'];
$category = $_POST['Category'];
$year = $_POST['Year'];
	
$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
$size = 10240000;
	
	

//echo $file_name, $name, $author, $age, $teacher, $class; 
                                //проверка расширения
if (!in_array($_FILES['userfile']['type'], $types))
die('Невозможно загрузить файл с данным расширением. <a href="picload_form.php">Попробуйте другой файл.</a>');
                                 //проверка размера
if ($_FILES['userfile']['size'] > $size)
die('Слишком большой размер файла. <a href="picload_form.php">Попробуйте другой файл.</a>');

	
                              //загрузка файлов
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir . 
$file_name)) { 

$q = "INSERT INTO gallery (work_name, author, category, year, class, teacher, age, img) VALUES ('$name','$author', '$category', '$year','$class','$teacher','$age', '$file_name')"; 
$query = mysqli_query($db, $q); 

print "Файл загружен. Данные Успешно занесены"; 
	mysqli_close($db);

} else { 
print "При загрузке файла произошли проблемы.";
	mysqli_close($db);
}

?> 
    
    <p>Возврат на страницу через <span id="time"></span> </p>
    
    <script type="text/javascript">
        var i = 3; //время в сек.
        function time() {
            document.getElementById("time").innerHTML = i; //визуальный счетчик
            i--; //уменьшение счетчика
            if (i < 0) location.href = "gallery_3.php?sort=1"; //редирект
        }
        time();
        setInterval(time, 1000);
    </script>

    
    

</html>