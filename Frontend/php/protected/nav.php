<div id="navbar">
	<ul>

	<div class="dropdown">
        <div class="dropbtn">Termékek</div>
        	<div class="dropdown-one">
				<div id="link1" class="dItem" href="#">Telefon, Tablet, Laptop
					<div class="dropdown-two">
					<div class="dItem" id="file" href="#">Telefon</div>
					<div class="dItem" id="file" href="#">Telefon tartozékok</div>
					<div class="dItem" id="file" href="#">Laptop</div>
					<div class="dItem" id="file" href="#">Laptop tartozékok</div>
					<div class="dItem" id="file" href="#">Tablet</div>
					<div class="dItem" id="file" href="#">Tablet tartozékok</div>
					</div>
				</div>

				<div id="link1" class="dItem" href="#">Számítástechnika
					<div class="dropdown-two">
					<div class="dItem" id="file" href="#">Monitorok</div>
					<div class="dItem" id="file" href="#">Gaming</div>
					<div class="dItem" id="file" href="#">PC alkatrészek</div>
					<div class="dItem" id="file" href="#">Routerek</div>
					<div class="dItem" id="file" href="#">Bilentyűzetek</div>
					<div class="dItem" id="file" href="#">Egerek</div>
					<div class="dItem" id="file" href="#">PC fejhallgatók</div>
					<div class="dItem" id="file" href="#">Egyéb perifériák</div>
					<div class="dItem" id="file" href="#">Nyomtatók, szkennerek</div>
					<div class="dItem" id="file" href="#">Szünetmentes tápegységek</div>
					</div>
				</div>

				<div id="link1" class="dItem" href="#">Szépségápolás
					<div class="dropdown-two">
					<div class="dItem" id="file" href="#">Parfümök</div>
					<div class="dItem" id="file" href="#">Smink</div>
					<div class="dItem" id="file" href="#">Körömápolás</div>
					<div class="dItem" id="file" href="#">Kozmetikumok</div>
					<div class="dItem" id="file" href="#">Testápolás</div>
					<div class="dItem" id="file" href="#">Készülékek</div>
					<div class="dItem" id="file" href="#">Fogápolás</div>
					</div>
				</div>

				<div id="link1" class="dItem" href="#">Kert
					<div class="dropdown-two">
					<div class="dItem" id="file" href="#">Növények</div>
					<div class="dItem" id="file" href="#">Fűnyírók</div>
					<div class="dItem" id="file" href="#">Kaszák</div>
					<div class="dItem" id="file" href="#">Palánták</div>
					<div class="dItem" id="file" href="#">Fűnyírók</div>
					<div class="dItem" id="file" href="#">Rovarirtók</div>
				</div>
			</div>
		</div>
	</div>

		<li><a href="index.php">Főoldal</a></li>
		<li><a href="index.php?P=test">Hozzáférés</a></li>
		
	<?php if(IsUserLoggedIn()) : ?>	
		<li><a href="index.php?P=profil">Profil</a></li>
	<?php endif; ?>

		<li><a href="index.php?P=addcreditcard">Bankkártya hozzáadása</a></li>
		<li><a href="index.php?P=product">Termék</a></li>
		<li><a href="index.php?P=offers">Ajánlatok</a></li>	
		<li><a href="index.php?P=subscribe">Hírlevél</a></li>	

	<?php if(IsUserLoggedIn()) : ?>
		<li><a href="index.php?P=logout">Kijelentkezés</a></li>
	<?php endif; ?>

	</ul>
</div>