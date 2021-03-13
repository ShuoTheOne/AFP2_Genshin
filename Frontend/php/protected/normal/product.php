<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="/afp2/public/css/default.css" rel="stylesheet" type="text/css" />
	<title> Termék </title>
 </head>
 <body>
	<div id="container">
		<div id="header">
			<a href="/afp2/index.php" class="genshin-logo"> Genshop </a>
			<input type="search" class="search-input-box" placeholder="Keresés...">
			<button class="search-button"> Keresés </button>
			<a href="shoppingcart.php" class="profileshopcartimage"><img src="/afp2/public/images/shopcart.png"></img></a>
			<a href="/afp2/protected/user/login.php" class="profileshopcartimage"><img src="/afp2/public/images/profileimage.png"></img></a>
			
		</div>
		<div id="navbar">
			<ul>
				<li><a href="/afp2/index.php" class="navbar-button"> Kezdőlap </a></li>
				<li><a href="#" class="navbar-button"> Kategóriák </a></li>
				<li><a href="#" class="navbar-button"> Kiemelt Ajánlatok </a></li>
				<li><a href="subscribe.php" class="navbar-button"> Íratkozz fel hírlevelünkre </a></li>
			</ul>
		</div>

		<div id="product">
			<div id="product-top">
				<div class="product-top producttopleft">
					<img src="/afp2/public/images/shopcart.png" class="product-top-left-img">
				</div>
				<div class="product-top producttopright">
					<p> Értékelés: </p>
					<p> Forgalmazó: </p>
					<p> Kiszállítási idő: </p>
					<p> Ár: 421341 FT </p>
					<button> Vásárlás </button>
				</div>
			</div>
			<div id="product-middle">
			
			</div>
			<div id="product-bottom">
				<textarea id="opinion" name="productopinion" placeholder="Írj véleményet..."></textarea><br></br>
				<p id="opinionstartext"> Értékelés: </p>
				<div class="rate">
					<input type="radio" id="star5" name="rate" value="5" />
					<label for="star5" title="text">5</label>
					<input type="radio" id="star4" name="rate" value="4" />
					<label for="star4" title="text">4</label>
					<input type="radio" id="star3" name="rate" value="3" />
					<label for="star3" title="text">3</label>
					<input type="radio" id="star2" name="rate" value="2" />
					<label for="star2" title="text">2</label>
					<input type="radio" id="star1" name="rate" value="1" />
					<label for="star1" title="text">1</label>
				</div>
				<button id="opinionsendbutton" onclick=""> Küldés </button> 
			</div>
		
		</div>
		
		<div id = "footer">
			GenShop was made by Genshin Team 2021
		</div>
	</div>
</html>