<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="../../public/css/default.css" rel="stylesheet" type="text/css" />
	<title> GenShop - Felhasználói adatmódosítások </title>
 </head>
 <body>
	<div id="container">
		<div id="header">
			<a href="../../index.php" class="genshin-logo"> Genshop </a>
			<input type="text" class="search-input-box" placeholder="Keresés...">
			<button class="search-button"> Keresés </button>
			<a href="../normal/shoppingcart.php" class="profileshopcartimage"><img src="../../public/images/shopcart.png"></img></a>
			<a href="login.php" class="profileshopcartimage"><img src="../../public/images/profileimage.png"></img></a>
		</div>
		<div id="navbar">
			<ul>
				<li><a href="../../index.php" class="navbar-button"> Kezdőlap </a></li>
				<li><a href="#" class="navbar-button"> Kategóriák </a></li>
				<li><a href="../normal/offers.php" class="navbar-button"> Kiemelt Ajánlatok </a></li>
				<li><a href="../normal/subscribe.php" class="navbar-button"> Íratkozz fel hírlevelünkre </a></li>
			</ul>
		</div>
		
		<div id="changeprofiledatas">
			<table>
				<tbody>
					<tr>
						<th colspan="2"> Adat modosítás </th> 
					</tr>
					<tr>
						<td>Felhasználónév</td>
						<td><input type="text"class="registerinput" placeholder="valaki"></td>
					</tr>
					<tr>
						<td>Jelszó</td>
						<td><input type="password" class="registerinput" placeholder="*****"></td>
					</tr>
					<tr>
						<td>E-mail</td>
						<td><input type="email" class="registerinput" placeholder="valami@valami.hu"></td>
					</tr>
					<tr>
						<td>Teljes név</td>
						<td><input type="text" class="registerinput" placeholder="Valaki Valahol"></td>
					</tr>
					<tr>
						<td>Születési dátum</td>
						<td><input type="date" class="registerinput" placeholder=""></td>
					</tr>
					<tr>
						<td>Irányítószám</td>
						<td><input type="number" class="registerinput" placeholder="3547"></td>
					</tr>
					<tr>
						<td>Város</td>
						<td><input type="text" class="registerinput" placeholder="Valahol"></td>
					</tr>
					<tr>
						<td>Út/utca</td>
						<td><input type="text" class="registerinput" placeholder="Valahol"></td>
					</tr>
					<tr>
						<td>Házszám</td>
						<td><input type="number" class="registerinput" placeholder="548"></td>
					</tr>
					<tr>
						<td colspan="2"><button class="registersubmit" onclick=""> Módosítás </button></td>
					</tr>
				</tbody>
			</table>			
		</div>
		<div id = "footer">
			GenShop was made by Genshin Team 2021
		</div>
	</div>
 </body>
 </html>