<!DOCTYPE html>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="public/css/default.css" rel="stylesheet" type="text/css" />
	<title> Fizetés módja</title>
 </head>

	<script>
			
			function loginoljBe() {
				var checkBox = document.getElementById("loginoljBe");
  				if (checkBox.checked == true){
   					 window.location = 'index.php?P=login';
  				}
			}
			

			function pay() {
				var checkBox2 = document.getElementById("creditcard");
				var checkBox = document.getElementById("pay");
  				if (checkBox.checked == true || checkBox2.checked == true){
   					  window.location = 'index.php?P=confirmation';
  						} 
					}
	</script>

 <body>
		<div id="shoppingcart">
			<table>
				<tbody>
					<tr>
						<th> Áfa nélküli összeg </th> <br>
						<th> Áfa </th> <br>
						<th> Végösszeg </th> <br>
						<th> Bankkártyával </th>
						<th> Utánvéttel </th>
					</tr>
					<tr>
						<td> 218992FT</td>
						<td> 81000FT</td>
						<td> 299998FT</td>
						<?php if(IsUserLoggedIn()) : ?>	
							<td><input type="checkbox" id="creditcard" onclick="pay()"> </td>
						<?php endif; ?>
						<?php if(!IsUserLoggedIn()) : ?>	
							<td><input type="checkbox" id="loginoljBe" onclick="loginoljBe()"> </td>
						<?php endif; ?>
						<td><input type="checkbox" id="pay" onclick="pay()"> </td>	

					</tr>
				</tbody>
			</table>
		</div>
	</div>
</html>