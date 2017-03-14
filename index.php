<!DOCTYPE html>
<html lang="en">
<head>
  <title>Электронный методический фонд ДХШ им. Марка Шагала</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<?php
	session_start();
	?>
    

    
    
    																			<!-- шапка и навигация -->
    
<nav class="navbar navbar-default">
  <div class="container-fluid">
      
    <!-- Brand and toggle get grouped for better mobile display -->
      
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <!-- Брэнд-->
     <img src="img/logo_icon.png" width="70">
      <a class="navbar-brand" href="index.php">ДХШ им. Марка Шагала</a>
	  
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <!-- кн=опки навигации -->
          
       <!-- <li class="active"><a href="gallery.html">(обычная конпка)<span class="sr-only">(current)</span></a></li> -->

          
        <li class="dropdown"> <!-- dropdown кнопка -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Методические материалы<span class="caret"></span></a>
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Программное обеспечение<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ФГТ1</a></li>
            <li><a href="#">ФГТ2</a></li>
            <li><a href="#">ФГТ3</a></li>
          </ul>
        </li>
         
          
           <li class="dropdown"> <!-- dropdown кнопка 3 -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Фонд оценочных средств<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="gallery/gallery.html">1 класс</a></li>
            <li><a href="gallery/gallery_2.html">2 класс</a></li>
            <li><a href="#">3 класс</a></li>
            <li><a href="#">4 класс</a></li>
            <li><a href="#">5 класс</a></li>
          </ul>
        </li>
          
            <li class="dropdown"> <!-- dropdown кнопка 4 -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Электронный фонд работ<span class="caret"></span></a>
          
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
         
          <form id = "formsend" enctype="multipart/form-data" action="gallery_3.php" method = "get" style = "display:none;">
          <input type="hidden" name="sort">
          </form>
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
          
          <li class="dropdown"> <!-- dropdown кнопка 5 -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Проекты<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">ЛТШ</a></li>
            <li><a href="#">ЗТШ</a></li>
          </ul>
        </li>
          
          <li class="dropdown"> <!-- dropdown кнопка 5 -->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Палитра методичеких идей<span class="caret"></span></a>
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
        
        
        


        
        
        
        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    
    
    
   																					 <!-- контейнер main + sidebar-->

      
<div class="container-fluid text-center">    
  <div class="row content">
      
       																						<!-- левое меню -->
       
   <nav class="col-sm-2 sidenav">
      
       <?php
		include('db.php');
		
	
			if (isset($_SESSION['id'])){
				$q = mysqli_query($db, "SELECT login FROM users WHERE id = ".$_SESSION['id']."");
				$login = mysqli_fetch_assoc($q);
				echo "Приветствую тебя, ";
				echo $login['login'];
				echo "!";
			}
		;
		
	
		?>
        <p><div class="input-group">
      <input type="text" class="form-control" placeholder="Поиск по сайту...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Поиск</button>
      </span>
        </div></p>
    </nav> 
    
    
      
      
       																				<!-- основная страница -->
    <div class="col-sm-10 text-left">
        <div class="jumbotron" padding="20px">
          <h1>Добро пожаловать!</h1>
          <p>Здесь вы можете скачать методические материалы, посмотреть разнообразные уроки, в том числе и в формате видео, а так же увидеть готовые работы учеников школы. </p>
        <p>Вверху вы можете выбрать интересующий вас раздел.</p>
    
        </div>
    </div>
   
  </div>
</div>

    







</html>
