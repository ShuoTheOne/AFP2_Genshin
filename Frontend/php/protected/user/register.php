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

<script>
  window.onload=function(){
  var numberinput=document.getElementById('number');
  numberinput.addEventListener('change',changedValue);
}

function changedValue(){
  var input=this.value
  var number=parseInt(input,10);
      
    var numbersArray = input.split(".");
    numbersArray[0] = numbersArray[0].replace(/(?=(\d{4})+(?!\d))/g, " ");
    this.value= numbersArray.join(".");
}

function maxLengthCheck(object)
  {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }

</script>


 <body>
	<div id="container">		
		<div id="registerpanel">
			<form class="modal-content animate" action="http://localhost:8080/register" method="post">
				Felhasználónév <br></br>
				<input type="text" class="registerinput" name="username" required> <br></br>
				Jelszó <br></br>
				<input type="password" class="registerinput" oninput="maxLengthCheck(this)"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
				title="A jelszónak tartalmaznia kell 8 karaktert, köztük kisbetű-nagybetűt és számot!" 
				 maxlength="64" required> <br></br>
				E-mail <br></br>
				<input type="email" class="registerinput" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
				title="Adj meg valós email címet! (példa@példa.com)"
				required> <br></br>
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
				<input type="number" class="registerinput" oninput="maxLengthCheck(this)" name="zip_code" min="1000" max="9999" maxlength="4" required> <br></br>
				Város <br></br>
				<input type="text" class="registerinput"
					onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'
				 name="city" minlength="2" required> <br></br>
				Út/utca <br></br>
				<input type="text" class="registerinput"
					onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'
				 name="street" minlength="2" required> <br></br>
				Házszám <br></br>
				<input type="number" class="registerinput" oninput="maxLengthCheck(this)" name="house_number" min="1" max ="9999" maxlength="4" required> <br></br>
				Ország <br></br>
				<input type="text" class="registerinput" oninput="maxLengthCheck(this)"
					onkeypress='return ((event.charCode >= 65 && event.charCode <= 90) || (event.charCode >= 97 && event.charCode <= 122) || (event.charCode == 32))'
				name="country" minlength="2" maxlength="20" required> <br></br>
				<button class="registersubmit" type="submit"> Regisztrálás </button> <br></br>
			</form>
				<a href="index.php?P=login" class="hrefunderline"> Rendelkezem felhasználóval </a> 
		</div>
	</div>
 </body>
 </html>