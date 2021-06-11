<?php 
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="assets/style.css">
	<title>Document</title>
</head>
<body>
	<header class="header">
		<div class="headerNav">
			<ul class="main-menu">
			    <li><a href=".">Главная</a></li>
			    <li>
			        <a href="e-katalog.php">Е-Каталог</a>
			    </li>
			    <li><a href="contacts.php">Контакты</a></li>       
			    <li><a href="about.php">О нас</a></li>
			    <?php 
			    	if (isset($_SESSION["id"]))
					{
			     ?>
			    <li><a href="profile.php">Профиль</a></li>
			    <li><a href="includes/logout.inc.php">Выйти</a></li>
			    <?php 
					}else{
						echo '<li><a href="login.php">Войти</a></li>';
					}
			     ?>
			     <?php 
			     if(isset($_SESSION['permission']))
			     {
			     	if($_SESSION['permission'] == 1){
			      ?>
			     <li><a href="addBooks.php">Добавить книгу</a></li>
			     <?php 
			     }
			     } ?>
			</ul>
		</div>
	</header>
