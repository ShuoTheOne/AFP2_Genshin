<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
 </head>
 <body>
	<div id="container">		
		<div id="registerpanel">
			<form class="modal-content animate" action="http://localhost:8080/addproduct" method="post">
				Termék név <br></br>
				<input type="text" class="registerinput" name="name" > <br></br>
				Érték <br></br>
				<input type="number" class="registerinput" name="value" > <br></br>
				Leírás <br></br>
				<input type="text" class="registerinput" name="description" > <br></br>
				Mennyiség <br></br>
				<input type="number" class="registerinput" name="amount" > <br></br>
				Kép url <br></br>
				<input type="text" class="registerinput" name="img_url" > <br></br>
				Kategória <br></br>
				<input type="text" class="registerinput" name="category" > <br></br>
				<button class="registersubmit" type="submit"> Küldés </button> <br></br>
			</form>
		</div>
	</div>
 </body>
 </html>