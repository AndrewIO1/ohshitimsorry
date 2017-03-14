<!DOCTYPE html>
<html>

<head>
    <title>Электронный методический фонд ДХШ им. Марка Шагала</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--Бутстрап стили -->
    <link rel="stylesheet" type="text/css" href="style.css"> <!-- Таблица стилей -->
    <link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.min.css" /> <!-- шрифты для галереи -->
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery.css?v=1.6.0" /> <!-- галерея -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css"> <!--Бутстрап селект (выпадающее) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> <!--JQUERY-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script> 
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="js/jgallery.js?v=1.6.0"></script>
    <script type="text/javascript" src="js/touchswipe.min.js"></script>
    <script type="text/javascript" src="js/getYear.js"></script>
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <script type="text/javascript" src="js/bootstrap-confirmation.js"></script>
</head>

<body>
    <!-- шапка и навигация -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                <img src="img/logo_icon.png" width="70">
                <!-- Брэнд--><a class="navbar-brand" href="index.php">ДХШ им. Марка Шагала</a> </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <!-- кнопки навигации -->
                    <!--<li class="active"><a href="#">(обычная конпка)<span class="sr-only">(current)</span></a></li>
        <li><a href="#">(обычная кнопка)</a></li>
-->
                    <li class="dropdown">
                        <!-- dropdown кнопка --><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Методические материалы<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="docs.php">Учебники</a></li>
                            <li><a href="#">Пошаговые уроки</a></li>
                            <li><a href="#">Методические пособия</a></li>
                            <li><a href="#">Брошюры</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Видеоуроки</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <!-- dropdown кнопка 2 --><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Программное обеспечение<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">ФГТ1</a></li>
                            <li><a href="#">ФГТ2</a></li>
                            <li><a href="#">ФГТ3</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <!-- dropdown кнопка 3 --><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Фонд оценочных средств<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery.html">1 класс</a></li>
                            <li><a href="#">2 класс</a></li>
                            <li><a href="#">3 класс</a></li>
                            <li><a href="#">4 класс</a></li>
                            <li><a href="#">5 класс</a></li>
                        </ul>
                    </li>
                      <script>
	   function pageclass(value){
		   document.getElementById('formsend').sort.value = value;
		   document.getElementById('formsend').submit();
		   
	   }
				
				</script>
                    <li class="dropdown">
                        <!-- dropdown кнопка 4 --><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Электронный фонд работ<span class="caret"></span></a>
                        <form id = "formsend" enctype="multipart/form-data" action="gallery_3.php" method = "get" style = "display:none;">
          <input type="hidden" name="sort">
          </form>
          <ul class="dropdown-menu">
            <li><a href="#" onclick ="JavaScript:pageclass(1)" >1 класс</a></li>
            <li><a href="#" onclick ="JavaScript:pageclass(2)">2 класс</a></li>
            <li><a href="#" onClick = "JavaScript:pageclass(3)">3 класс</a></li>
            <li><a href="#" onClick = "JavaScript:pageclass(4)">4 класс</a></li>
            <li><a href="#" onClick = "JavaScript:pageclass(5)">5 класс</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Композиции по категориям</a></li>
                            <li><a href="#">Подготовительное отеление</a></li>
                            <li><a href="#">Керамика</a></li>
                            <li><a href="#">Компьютерная графика</a></li>
                            <li><a href="#">Живопись</a></li>
                            <li><a href="#">Архитектурный дизайн</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <!-- dropdown кнопка 5 --><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Проекты<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">ЛТШ</a></li>
                            <li><a href="#">ЗТШ</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <!-- dropdown кнопка 5 --><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Палитра методичеких идей<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Авторские программы</a></li>
                            <li><a href="#">Открытые уроки</a></li>
                            <li><a href="#">Эссе и статьи преподавателей</a></li>
                            <li><a href="#">Методичекие разработки</a></li>
                        </ul>
                    </li>
                    <!-- конец навбара 1 -->
                </ul>
                 <?php
		if (isset($_SESSION['id'])){
			echo "
			
		   <ul class='nav navbar-nav navbar-right'>

		  <a href='exit.php' class='btn btn-default navbar-btn'>Выход</a>
          
		</ul>
		";
		}
		else
		{
			echo "<ul class='nav navbar-nav navbar-right'>
          <a href='login.php' class='btn btn-default navbar-btn'>Вход на сайт</a>
          
		</ul>";
		}
	
		?>
                <!-- правая сторона навбара с поиском -->
                <ul class="nav navbar-nav navbar-right"> </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- конец всего хедера -->
    <!-- контейнер -->

    <body>
        <div class="container-fluid text-center">
            <div class="row content">
                <!-- левое меню -->
                <div class="col-sm-2 sidenav">
                    <p>
                        <div class="input-group">
                            <!-- поиск -->
                            <input type="text" class="form-control" placeholder="Поиск по сайту..."> <span class="input-group-btn">
        <button class="btn btn-default" type="button">Поиск</button>
      </span> </div>
                    </p>
                    <p><a href="docload_form.php">Добавить материал</a></p>
                    <!--
      <p><a href="#">Категория 1</a></p>
      <p><a href="#">Категория 2</a></p>
      <p><a href="#">Категория 3</a></p>
      -->
                </div>
                <!-- конец левого меню -->
                <!-- основная страница -->
                <div class="col-sm-8 text-left col-lg-10">
                   <table>
                   <style>
					   th {
						   padding: 4px;
					   }
					   
					   .glyphicon{
						   padding-right: 7px;
						  
						  
					   }
					 
					  
					   </style>
                   
                 <p><h1 class="text-center">Изменение учебника</h1></p>
                  <hr>
                    <?php
					
					include ("db.php");
					
					$id = $_POST['id'];
$q="SELECT * FROM docs WHERE (id)='$id'";
$query = mysqli_query($db, $q);
					
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
 
    $filedir = $row["filedir"];
	$id = $row["id"];
	$name = $row["name"];
	$author = $row["author"];
	$year = $row["year"];
	
	
	echo " <div class='col-sm-6 col-md-4' style='margin-left: 30%;' margin-right: 30%;>
              
      <div class='caption'>
	  <form action='edit_confirm.php' method='post'>
	  
		<p>Название работы:  <input type='text' name='Name' class='form-control' value='".$name."' aria-describedby='basic-addon2'> </p> 
        <p>Автор:  <input type='text' name='Author' class='form-control' value='".$author."' aria-describedby='basic-addon2'> </p> 
		<p>Год:  <input type='text' name='Year' class='form-control' value='".$year."' aria-describedby='basic-addon2'> </p>
		<input type='hidden' name='id' value='".$id."'>
		<input type='hidden' name='table' value='docs'>
        <p><input type='submit' class='btn btn-primary' role='button' value='Подтвердить изменения'/>
		</form>
		
     
    </div>
        </div>";
	


}
					
					?>
					
					</form>
				  
					  <script>
						  
					$('[data-toggle=confirmation]').confirmation({
    rootSelector: '[data-toggle=confirmation]',
    container: 'body'
  });
		   
		   </script>
					</table>   
                </div>
            </div>
        </div>
    </body>
   
    <footer class="container-fluid text-center navbar-fixed-bottom row-fluid">
        <p>© 1990 — 2017   Электронный методический фонд художественной школы имени Марка Шагала, г. Тольятти</p>
    </footer>

</html>