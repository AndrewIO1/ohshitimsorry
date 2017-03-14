<html lang="en">

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
                    <li class="dropdown">
                      <script>
	   function pageclass(value){
		   document.getElementById('formsend').sort.value = value;
		   document.getElementById('formsend').submit();
		   
	   }
						  
	 function pagecategory(value){
		 document.getElementById('formsend2').category.value = value;
		   document.getElementById('formsend2').submit();
	 }
				
				</script>
                        <!-- dropdown кнопка 4 --><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Электронный фонд работ<span class="caret"></span></a>
                        <!-- форма выбора класса-->
                       <form id = "formsend" enctype="multipart/form-data" action="" method = "get" style = "display:none;">
          <input type="hidden" name="sort">
          </form>
          <!-- форма выбора категории-->
          <form id = "formsend2" enctype="multipart/form-data" action="gallery_komp.php" method = "get" style = "display:none;">
          <input type="hidden" name="category">
          </form>
          <ul class="dropdown-menu">
            <li><a href="#" onclick ="JavaScript:pageclass(1)" >1 класс</a></li>
            <li><a href="#" onclick ="JavaScript:pageclass(2)">2 класс</a></li>
            <li><a href="#" onClick = "JavaScript:pageclass(3)">3 класс</a></li>
            <li><a href="#" onClick = "JavaScript:pageclass(4)">4 класс</a></li>
            <li><a href="#" onClick = "JavaScript:pageclass(5)">5 класс</a></li>
                            <li role="separator" class="divider"></li>
                           <li><a class="dropdown-header">Композиции по категориям:</a></li>
                            <li><a href="#" onclick ="JavaScript:pagecategory(1)">Подготовительное отеление</a></li>
                            <li><a href="#" onclick ="JavaScript:pagecategory(2)">Керамика</a></li>
                            <li><a href="#" onclick ="JavaScript:pagecategory(3)">Компьютерная графика</a></li>
                            <li><a href="#" onclick ="JavaScript:pagecategory(4)">Живопись</a></li>
                            <li><a href="#" onclick ="JavaScript:pagecategory(5)">Архитектурный дизайн</a></li>
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
                    <p><strong>Сортировка</strong></p>
                    <P><a href="gallery_3.php?sort=1">1 класс</a></P>
                    <P><a href="gallery_3.php?sort=2">2 класс</a></P>
                    <P><a href="gallery_3.php?sort=3">3 класс</a></P>
                    <P><a href="gallery_3.php?sort=4">4 класс</a></P>
                    <P><a href="gallery_3.php?sort=5">5 класс</a></P>
                    <hr>
                    <?php
				if (isset($_SESSION['id']) and $_SESSION['role'] == 99){
					echo '<p><a href="picload_form.php">Добавить материал</a></p>
                <p><a href="edit_form.php">Изменить материал</a></p>';
				}
				?>
                 
                
                <p>
          
                </p>
                
                
                    <!--
      <p><a href="#">Категория 1</a></p>
      <p><a href="#">Категория 2</a></p>
      <p><a href="#">Категория 3</a></p>
      -->
                </div>
                <!-- конец левого меню -->
                <!-- основная страница -->
                <div class="col-sm-10 text-left">
                    <div class="container">
           <p><h1 class="text-center">Работы "<?php
						$class = $_GET['sort'];
						echo $class;
						?> класс"</h1>
                      </p> 
                       <hr>
                      <div id="gallery">
                            <!-- php код, который отвечает за добавление рисунков -->
                                <?php

include ("db.php");
							
						
$class = $_GET['sort'];
$q="SELECT * FROM gallery WHERE class=".$class." ORDER BY id DESC ";
							
$query = mysqli_query($db, $q);
while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
   // echo "\n".$row["img"]."\n";
    $kek = $row["img"];
	$name = $row["work_name"];
	$author = $row["author"];
	$age = $row["age"];
	$teacher = $row["teacher"];
	$year = $row["year"];
	
	
    echo " <a href='<strong></strong>http://biba.esy.es/kamathebullet/uploads/". $kek . "'". "><img src='http://biba.esy.es/kamathebullet/uploads/" . $kek . "'". " alt='"."\"" .$name. "\"" .", ". $year . ". Автор работы: " .$author . ", " .$age . " лет. Преподаватель: " .$teacher . ".' /></a> ";


}
                                

                             ?>
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                $('#gallery').jGallery();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <footer class="container-fluid text-center navbar-fixed-bottom row-fluid">
        <p>© 1990 — 2017   Электронный методический фонд художественной школы имени Марка Шагала, г. Тольятти</p>
    </footer>

</html>