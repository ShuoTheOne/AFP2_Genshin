<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">

	<title> GenShop - Bejelentkezés </title>
 </head>
 <body>
	<div id="container">
		<div id="loginpanel">
			<form class="modal-content animate" action="http://localhost:8080/login" method="post">
				Felhasználónév <br></br>
				<input class="logininput" type="text" name="username" placeholder="Felhasználónév"required> <br></br>
				Jelszó <br></br>
				<input class="logininput" type="password" name="password" placeholder="Jelszó" required> <br></br>
				<button class="loginsubmit" type="submit"> Bejelentkezés </button> <br></br>
			</form>
				<a href="index.php?P=forgetpassword" class="hrefunderline"> Elfelejtett jelszó</a><br></br>
				<a href="index.php?P=register" class="hrefunderline"> Regisztráció</a> <br></br>
		</div>
	</div>
 </body>
 </html>