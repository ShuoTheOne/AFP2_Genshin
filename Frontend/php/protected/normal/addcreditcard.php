<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="5">
	<link href="../../public/css/default.css" rel="stylesheet" type="text/css" />
	<title> GenShop - Hírlevélre felíratkozás </title>
 </head>
 <body>
	<div id="container">
		<div id="header">
			<a href="../../index.php" class="genshin-logo"> Genshop </a>
			<input type="search" class="search-input-box" placeholder="Keresés...">
			<button class="search-button"> Keresés </button>
			<a href="shoppingcart.php" class="profileshopcartimage"><img src="../../public/images/shopcart.png"></img></a>
			<a href="../user/login.php" class="profileshopcartimage"><img src="../../public/images/profileimage.png"></img></a>
		</div>
		<div id="navbar">
			<ul>
				<li><a href="../../index.php" class="navbar-button"> Kezdőlap </a></li>
				<li><a href="#" class="navbar-button"> Kategóriák </a></li>
				<li><a href="#" class="navbar-button"> Kiemelt Ajánlatok </a></li>
				<li><a href="subscribe.php" class="navbar-button"> Íratkozz fel hírlevelünkre </a></li>
			</ul>
		</div>
		
		
		<div class="cardsave">
			Bankkártya hozzáadása <br>
			<input type="text" class="cardnumber" placeholder="1234 5678 9123 4567">
			<div class="carddates">
			  <div class="carddatesmonth">
				<select name="carddatesMonth">
				  <option value="january">01</option>
				  <option value="february">02</option>
				  <option value="march">03</option>
				  <option value="april">04</option>
				  <option value="may">05</option>
				  <option value="june">06</option>
				  <option value="july">07</option>
				  <option value="august">08</option>
				  <option value="september">09</option>
				  <option value="october">10</option>
				  <option value="november">11</option>
				  <option value="december">12</option>
				</select>
			  </div>
			  <div class="carddatesyear">
				<select name="carddatesYear">
				  <option value="2021">2021</option>
				  <option value="2022">2022</option>
				  <option value="2023">2023</option>
				  <option value="2024">2024</option>
				  <option value="2025">2025</option>
				  <option value="2026">2026</option>
				  <option value="2027">2027</option>
				  <option value="2028">2028</option>
				  <option value="2029">2029</option>
				  <option value="2030">2030</option>
				</select>
			  </div>
			</div>
			<div class="card-verification">
			  <div class="cardcvv">
				<input type="text" placeholder="CVV">
			  </div>
			  <div class="cardcvvtext">
				3 számjegy amely a kártya <br>
				hátoldalán található
			  </div>
			</div>
			<button type="submit" class="cardsavebtn"><a href="#">Mentés</a></button>
		</div>
		<div id = "footer">
			GenShop was made by Genshin Team 2021
		</div>
	</div>
 </body>
 </html>