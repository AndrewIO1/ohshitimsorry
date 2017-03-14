<!DOCTYPE html>
<html>

<head>
    <title>Электронный методический фонд ДХШ им. Марка Шагала</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="css/jgallery.css?v=1.6.0" />
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="js/jgallery.js?v=1.6.0"></script>
    <script type="text/javascript" src="js/touchswipe.min.js"></script>
    <script type="text/javascript" src="js/getYear.js"></script>
</head>

<body>
   <?php 
	session_start();
	?>
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
                    <p><a href="picload_form.php">Добавить материал</a></p>
                    <p><a href="edit_form.php">Изменить материал</a></p>
                    <!--
      <p><a href="#">Категория 1</a></p>
      <p><a href="#">Категория 2</a></p>
      <p><a href="#">Категория 3</a></p>
      -->
                </div>
                <!-- конец левого меню -->
                <!-- основная страница -->
               
       
       <div class='col-sm-6 col-md-10''>
        
 
              

                <?php
									   if ($_SESSION['role'] == 99){
	 
include("db.php");
include("tools/cropToolkit/AcImage.php");
					
$id = $_POST['id'];
$q="SELECT * FROM gallery WHERE (id)='".$id."'";
$query = mysqli_query($db, $q);
		   
	

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
	$id = $row["id"];
    $kek = $row["img"];
	$name = $row["work_name"];
	$author = $row["author"];
	$age = $row["age"];
	$teacher = $row["teacher"];
	$year = $row["year"];
	$class = $row["class"];
	$img = "http://biba.esy.es/kamathebullet/uploads/".$kek;
	//обрезка изображений
	AcImage::setRewrite(true);
	if(AcImage::isFileExists($img))
   $image = AcImage::createImage($img);
else echo "Файл не существует";
	$image
		->thumbnail (200, 150)
		->cropCenter('4pr', '3pr')
	    ->save('http://biba.esy.es/kamathebullet/uploads/min/minimized_' . $kek);
	  
	$minimized = "http://biba.esy.es/kamathebullet/uploads/min/minimized_" . $kek;
	

	
	echo " <div class='col-sm-6 col-md-4' style='margin-left: 30%;' margin-right: 30%;>
              <div class='thumbnail'>
	  <img class='.minipic' src='".$minimized."' alt='".$kek."' width=200 heigh=200>
      <div class='caption'>
	  <form action='edit_confirm.php' method='post'>
	  <p> Категория 
        <select name='Category' class='selectpicker'>
                                        <option value='Рисунок'>Рисунок</option>
                                        <option value='Живопись'>Живопись</option>
                                        <option value='Композиция'>Композиция</option>
                                    </select>
									
	</p>
		<p>Название работы:  <input type='text' name='Name' class='form-control' value='".$name."' aria-describedby='basic-addon2'> </p> 
        <p>Автор:  <input type='text' name='Author' class='form-control' value='".$author."' aria-describedby='basic-addon2'> </p> 
		<p>Преподаватель:  <input type='text' name='Teacher' class='form-control' value='".$teacher."' aria-describedby='basic-addon2'> </p>
		 <p>Возраст:  <input type='text' name='Age' class='form-control' value='".$age."' aria-describedby='basic-addon2'> </p>
		<p>Год:  <input type='text' name='Year' class='form-control' value='".$year."' aria-describedby='basic-addon2'> </p>
		<p>Класс: <select name='Class' class='selectpicker'>
                                        <option value='1'>1</option>
                                        <option value='2'>2</option>
                                        <option value='3'>3</option>
                                        <option value='4'>4</option>
                                        <option value='5'>5</option>
                                    </select> </p>
									
		
		<input type='hidden' name='id' value='".$id."'>
		<input type='hidden' name='table' value='gallery'>
        <p><input type='submit' class='btn btn-primary' role='button' value='Подтвердить изменения'/>
		</form>
		
      </div>
    </div>
        </div>";
}
	
									   }
									   else
									   {echo "Access Denied";}
				?> 
			
				
   
			</div>
            </div>
        </div>
    </body>
    
    <footer class="container-fluid text-center navbar-fixed-bottom row-fluid">
        <p>ФУТЕР</p>
    </footer>

</html>