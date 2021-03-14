<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="../../public/css/default.css" rel="stylesheet" type="text/css" />
	<title> Kosár </title>
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
		
		<div id="shoppingcart">
			<table>
				<tbody>
					<tr>
						<th> Termék </th>
						<th> Mennyiség </th>
						<th> Egység ár </th>
						<th> Összeg </th>
						<th> Törlés </th>
					</tr>
					<tr>
						<td><img src="../../public/images/bosschair.jpg"></img></td>
						<td><input type="number"></td>
						<td>49999FT</td>
						<td>49999FT</td>
						<td><button> <img src="../../public/images/trash.png"></img> </button></td>
					<tr>
						<td><img src="../../public/images/asusvivobook.jpg"></img></td>
						<td><input type="number"></td>
						<td>199999FT</td>
						<td>199999FT</td>
						<td><button> <img src="../../public/images/trash.png"></img> </button></td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td> Áfa nélküli összeg: 218992FT</td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td> Áfa: 81000FT</td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td> Végösszeg: 299998FT</td>
					</tr>
					<tr>
						<td colspan="4"></td>
						<td><button> Rendelés </button></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div id = "footer">
			GenShop was made by Genshin Team 2021
		</div>
	</div>
</html>