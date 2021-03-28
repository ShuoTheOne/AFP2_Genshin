<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
 </head>
 <body>
	<div id="container">		
		<div id="registerpanel">
			<form class="modal-content animate" action="http://localhost:8080/register" method="post">
				Felhasználónév <br></br>
				<input type="text" class="registerinput" name="username"> <br></br>
				Jelszó <br></br>
				<input type="password" class="registerinput" name="password"> <br></br>
				E-mail <br></br>
				<input type="email" class="registerinput" name="email"> <br></br>
				Teljes név <br></br>
				<input type="text" class="registerinput" name="fullname"> <br></br>
				Születési dátum <br></br>
				<input type="date" class="registerinput" name="birthdate"> <br></br>
				Irányítószám <br></br>
				<input type="number" class="registerinput" name="zipcode"> <br></br>
				Város <br></br>
				<input type="text" class="registerinput" name="city"> <br></br>
				Út/utca <br></br>
				<input type="text" class="registerinput" name="address"> <br></br>
				Házszám <br></br>
				<input type="number" class="registerinput" name="housenumber"> <br></br>
			</form>
				<button class="registersubmit" type="submit"> Regisztrálás </button> <br></br>
				<a href="login.php" class="hrefunderline"> Rendelkezem felhasználóval </a> 
		</div>
	</div>
 </body>
 </html>