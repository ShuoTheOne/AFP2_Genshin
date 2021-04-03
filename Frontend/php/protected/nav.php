<div id="navbar">
	<ul>
		<li><a href="index.php">Főoldal</a></li>
	<?php if(!IsUserLoggedIn()) : ?>
		<li><a href="index.php?P=login">Bejelentkezés</a></li>
		<li><a href="index.php?P=register">Regisztrálás</a></li>
	<?php endif; ?>
		<li><a href="index.php?P=test">Hozzáférés</a></li>
		<li><a href="index.php?P=addcreditcard">Bankkártya hozzáadása</a></li>
		<li><a href="index.php?P=shoppingcart">Bevásárló Kosár</a></li>
		<li><a href="index.php?P=product">Termék</a></li>
		<li><a href="index.php?P=offers">Ajánlatok</a></li>
	<?php if(isset($_SESSION['isregistered']) && $_SESSION['isregistered'] == 1) : ?>
		<li><a href="index.php?P=logout">Kijelentkezés</a></li>
	<?php endif; ?>		
  	<?php if(isset($_SESSION['isadmin']) && $_SESSION['isadmin'] == 1) : ?>
		<li><a href="index.php?P=user_list">Felhasználók Listája</a></li>
	<?php endif; ?>
	</ul>
</div>