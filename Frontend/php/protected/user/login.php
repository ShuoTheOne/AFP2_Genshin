<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<link href="../../public/css/default.css" rel="stylesheet" type="text/css" />
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
				<a href="forgetpassword.php" class="hrefunderline"> Elfelejtett jelszó</a><br></br>
				<a href="register.php" class="hrefunderline"> Regisztráció</a> <br></br>
		</div>
	</div>
 </body>
 </html>