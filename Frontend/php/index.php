<?php session_start(); ?>
<?php require_once 'protected/config.php'; ?>
<?php require_once USER_MANAGER; ?>

<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="/afp2/public/css/default.css" rel="stylesheet" type="text/css" />
	<title> Főoldal </title>
 </head>
 <body>
	<div id="container">
		<div id="header">
			<a href="index.php" class="genshin-logo"> Genshop </a>
			<input type="search" class="search-input-box" placeholder="Keresés...">
			<button class="search-button"> Keresés </button>
			<a href="protected/normal/shoppingcart.php" class="profileshopcartimage"><img src="public/images/shopcart.png"></img></a>
			<a href="protected/user/login.php" class="profileshopcartimage"><img src="public/images/profileimage.png"></img></a>

			
		</div>
		<div id="navbar">
			<ul>
				<li><a href="index.php" class="navbar-button"> Kezdőlap </a></li>
				<li><a href="#" class="navbar-button"> Kategóriák </a></li>
				<li><a href="#" class="navbar-button"> Kiemelt Ajánlatok </a></li>
				<li><a href="protected/normal/subscribe.php" class="navbar-button"> Íratkozz fel hírlevelünkre </a></li>
			</ul>
		</div>
		
		
		<div id="slideshow">
			<script src="public/js/slideshow.js"> </script>
			<div class="slidecontainer">
			<img class="slideshowimage" name="slideshow">
			<button class="slideshowBtnLeft" onclick="forceChangeImage(-1)">&#10094;</button>
			<button class="slideshowBtnRight" onclick="forceChangeImage(+1)">&#10095;</button>
			</div>
		</div>
		
		
		<div id="hastag">
		
		</div>
		<div id = "footer">
			GenShop was made by Genshin Team 2021
		</div>
	</div>
</html>
