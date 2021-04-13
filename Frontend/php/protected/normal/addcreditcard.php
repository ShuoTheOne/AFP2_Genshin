<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<title> GenShop - Kártya hozzáadás </title>
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
		<div class="cardsave">
			Bankkártya hozzáadása <br>
			<form class="modal-content animate" action="http://localhost:8080/addcreditcard" method="post">
				<input type="text" class="cardcvvtext" placeholder="Kártyatulajdonos neve"  name="cardownername" required>
				<input type="number" class="cardnumber" placeholder="1234 5678 9123 4567" name="cardnumber" required>
				<div class="carddates">
				  <div class="carddatesmonth">
					<select name="cardmonth" required>
					<option value="">Hónap</option>
					  <option value="01">01</option>
					  <option value="02">02</option>
					  <option value="03">03</option>
					  <option value="04">04</option>
					  <option value="05">05</option>
					  <option value="06">06</option>
					  <option value="07">07</option>
					  <option value="08">08</option>
					  <option value="09">09</option>
					  <option value="10">10</option>
					  <option value="11">11</option>
					  <option value="12">12</option>
					</select>
				  </div>
				  <div class="carddatesyear">
					<select name="cardyear" required>
					<option value="">Év</option>
					  <option value="21">2021</option>
					  <option value="22">2022</option>
					  <option value="23">2023</option>
					  <option value="24">2024</option>
					  <option value="25">2025</option>
					  <option value="26">2026</option>
					  <option value="27">2027</option>
					  <option value="28">2028</option>
					  <option value="29">2029</option>
					  <option value="30">2030</option>
					</select>
				  </div>
				</div>
				<div class="card-verification">
				  <div class="cardcvv">
					<input type="number" placeholder="CVV" name="cvc" min="000" max="999" required>
				  </div>
				  <div class="cardcvvtext">
					3 számjegy amely a kártya <br>
					hátoldalán található
				  </div>
				</div>
				<button type="submit" class="cardsavebtn">Mentés</button>
		</form>
		</div>
	</div>
	</body>
 </html>