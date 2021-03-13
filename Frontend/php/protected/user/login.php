<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="/afp2/public/css/default.css" rel="stylesheet" type="text/css" />
	<title> GenShop - Bejelentkezés </title>
 </head>
 <body>
	<div id="container">
		<div id="header">
			<a href="/afp2/index.php" class="genshin-logo"> Genshop </a>
			<input type="text" class="search-input-box" placeholder="Keresés...">
			<button class="search-button"> Keresés </button>
			<a href="/afp2/protected/normal/shoppingcart.php" class="profileshopcartimage"><img src="/afp2/public/images/shopcart.png"></img></a>
			<a href="login.php" class="profileshopcartimage"><img src="/afp2/public/images/profileimage.png"></img></a>
		</div>
		<div id="navbar">
			<ul>
				<li><a href="/afp2/index.php" class="navbar-button"> Kezdőlap </a></li>
				<li><a href="#" class="navbar-button"> Kategóriák </a></li>
				<li><a href="#" class="navbar-button"> Kiemelt Ajánlatok </a></li>
				<li><a href="/afp2/protected/normal/subscribe.php" class="navbar-button"> Íratkozz fel hírlevelünkre </a></li>
			</ul>
		</div>
		
		<div id="loginpanel">
			Felhasználónév <br></br>
			<input class="logininput" type="text"> <br></br>
			Jelszó <br></br>
			<input class="logininput" type="password"> <br></br>
			<button class="loginsubmit" onclick=""> Bejelentkezés </button> <br></br>
			
			<a href="forgetpassword.php" class="hrefunderline"> Elfelejtett jelszó</a><br></br>
			<a href="register.php" class="hrefunderline"> Regisztráció</a> <br></br>
		</div>
		
		<div id = "footer">
			GenShop was made by Genshin Team 2021
		</div>
	</div>
 </body>
 </html>