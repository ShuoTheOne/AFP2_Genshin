<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
 </head>

 <style>
/* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
</style>

 <body>
	<div id="container">		
		<div id="registerpanel">
			<form class="modal-content animate" action="http://localhost:8080/register" method="post">
				Felhasználónév <br></br>
				<input type="text" class="registerinput" name="username" required> <br></br>
				Jelszó <br></br>
				<input type="password" class="registerinput" name="password" minlength="8" maxlength="64" required> <br></br>
				E-mail <br></br>
				<input type="email" class="registerinput" name="email" required> <br></br>
				Teljes név <br></br>
				<input type="text" class="registerinput" name="real_name" minlength="5" required> <br></br>
				Neme <br></br>
                <select class="registerinput" name="sex" required>
					<option value="">Neme</option>
					<option value="0">Férfi</option>
					<option value="1">Nő</option>
					<option value="2">Egyéb</option>
				</select> <br></br>
				Születési dátum <br></br>
				<input type='date' class="registerinput" name="birthdate" min="1900-01-01" max="2021-01-01" required><br></br>
				Irányítószám <br></br>
				<input type="number" class="registerinput" name="zip_code" min="1000" max="9999" required> <br></br>
				Város <br></br>
				<input type="text" class="registerinput" name="city" minlength="2" required> <br></br>
				Út/utca <br></br>
				<input type="text" class="registerinput" name="street" minlength="2" required> <br></br>
				Házszám <br></br>
				<input type="number" class="registerinput" name="house_number" min="1" max ="9999" required> <br></br>
				Ország <br></br>
				<input type="text" class="registerinput" name="country" minlength="2" maxlength="20" required> <br></br>
				<button class="registersubmit" type="submit"> Regisztrálás </button> <br></br>
			</form>
				<a href="index.php?P=login" class="hrefunderline"> Rendelkezem felhasználóval </a> 
		</div>
	</div>
 </body>
 </html>