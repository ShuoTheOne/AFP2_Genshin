<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="public/css/default.css" rel="stylesheet" type="text/css" />
	<title> Kosár </title>
 </head>
 <body>
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
						<td><a href="#" class="shoppingcart-img"><img src="public/images/bosschair.jpg"></a></img></td>
						<td><input type="number"></td>
						<td>49999FT</td>
						<td>49999FT</td>
						<td><button><img class="shoppingcart-trash" src="public/images/trash.png"></img> </button></td>
					<tr>
						<td><a href="#" class="shoppingcart-img"><img src="public/images/asusvivobook.jpg"></a></img></td>
						<td><input type="number"></td>
						<td>199999FT</td>
						<td>199999FT</td>
						<td><button><img class="shoppingcart-trash" src="public/images/trash.png"></img> </button></td>
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
						<?php if(IsUserLoggedIn()) : ?>	
							<br>
							<td><a href="index.php?P=fizetes" class="button">Folytatás</a> <br></br></td>
						<?php endif; ?>
						<?php if(!IsUserLoggedIn()) : ?>	
							<br>
							<td><a href="index.php?P=adatmegadas" class="button">Folytatás</button> <br></br></td>
						<?php endif; ?>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</html>