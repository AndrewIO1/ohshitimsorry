<!DOCTYPE html>
<html>
    <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
<?php

    
  include ("db.php");
	

	
//echo($file_name);
$id = $_POST['id'];
$name = $_POST['Name'];
$year = $_POST['Year'];
$table = $_POST['table'];
$author = $_POST['Author']; 
	
#доп параметры если галереия
if ($_POST['table'] == "gallery") {

$age = $_POST['Age']; 
$teacher = $_POST['Teacher']; 
$class = $_POST['Class'];
$category = $_POST['Category'];
	
}
	

if ($table == "gallery") {
$q = "UPDATE gallery SET work_name = '$name', author = '$author', category = '$category', year='$year', class='$class', teacher='$teacher', age='$age' WHERE id = $id";
$query = mysqli_query($db, $q); }
	else {
		$q = "UPDATE " . $table . " SET name = '$name', author = '$author', year='$year' WHERE id = $id";
		$query = mysqli_query($db, $q); 
	}
	
	
	
if ($query){
	echo "Редактирование прошло успешно!";
} else
	echo "Произошла проблема при редактировании";
?> 
    
    <p>Возврат на страницу через <span id="time"></span> </p>
    
    <script type="text/javascript">
        var i = 3; //время в сек.
        function time() {
            document.getElementById("time").innerHTML = i; //визуальный счетчик
            i--; //уменьшение счетчика
            if (i < 0) location.href = "index.php"; //редирект
        }
        time();
        setInterval(time, 1000);
    </script>

    
    

</html>