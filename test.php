<html>
<head>
    
</head>
    
<body>
    
<?php
	include('db.php');
	$sql = "SELECT id FROM users WHERE login='test'";
    $q = mysqli_query($db, $sql);
	$maslina = mysqli_fetch_assoc($q);
	if (isset($maslina['id'])){
		print 'no';
	}
	

                             ?>
    
<p><a href="gallery_3.php">Вернуться</a></p>
    
    </body>
</html>