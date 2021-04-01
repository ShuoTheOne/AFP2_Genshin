<!DOCTYPE HTML>
<html lang="hu">
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="5">
	<title> GenShop - Kártya hozzáadás </title>
 </head>
	<body>
		<div class="cardsave">
			Bankkártya hozzáadása <br>
			<form class="modal-content animate" action="http://localhost:8080/addcreditcard" method="post">
				<input type="text" class="cardcvvtext" placeholder="Kártyatulajdonos neve"  name="cardownername">
				<input type="text" class="cardnumber" placeholder="1234 5678 9123 4567" name="cardnumber">
				<div class="carddates">
				  <div class="carddatesmonth">
					<select name="cardmonth">
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
					<select name="cardyear">
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
					<input type="text" placeholder="CVV" name="cvc">
				  </div>
				  <div class="cardcvvtext">
					3 számjegy amely a kártya <br>
					hátoldalán található
				  </div>
				</div>
				<button type="submit" class="cardsavebtn"><a href="#">Mentés</a></button>
		</form>
		</div>
	</body>
 </html>