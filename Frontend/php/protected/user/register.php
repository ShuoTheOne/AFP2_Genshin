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
				<input type="text" class="registerinput" name="username" required> <br></br>
				Jelszó <br></br>
				<input type="password" class="registerinput" name="password" required> <br></br>
				E-mail <br></br>
				<input type="email" class="registerinput" name="email" required> <br></br>
				Teljes név <br></br>
				<input type="text" class="registerinput" name="real_name" required> <br></br>
				Neme <br></br>
                <input type="number" class="registerinput" name="sex" required> </br>
				Születési dátum <br></br>
				<input type="date" class="registerinput" name="birthdate" required> <br></br>
				Irányítószám <br></br>
				<input type="number" class="registerinput" name="zip_code" required> <br></br>
				Város <br></br>
				<input type="text" class="registerinput" name="city" required> <br></br>
				Út/utca <br></br>
				<input type="text" class="registerinput" name="street" required> <br></br>
				Házszám <br></br>
				<input type="number" class="registerinput" name="house_number" required> <br></br>
				Ország <br></br>
				<input type="text" class="registerinput" name="country" required> <br></br>
				<button class="registersubmit" type="submit"> Regisztrálás </button> <br></br>
			</form>
				<a href="login.php" class="hrefunderline"> Rendelkezem felhasználóval </a> 
		</div>
	</div>
 </body>
 </html>