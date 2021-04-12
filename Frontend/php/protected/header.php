<div id="header">
	<form action="./index.php?P=keresesresult" method="post">
		<a href="index.php" class="genshin-logo"> Genshop </a>
		<input type="search" name='keresesresult' class="search-input-box" placeholder="Keresés...">
		<input type="submit" value="keresés">
		<a href="./index.php?P=shoppingcart" class="profileshopcartimage"><img src="public/images/shopcart.png" width="50" height="50" border="0"></img></a>
		<?php if(!IsUserLoggedIn()) : ?>
			<a href="./index.php?P=login" class="profileshopcartimage"><img src="public/images/profileimage.png" width="50" height="50"></img></a>
		<?php else : ?>
			<a href="./index.php?P=profil" class="profileshopcartimage"><img src="public/images/placeholderavatar.png" width="50" height="50"></img></a>
		<?php endif; ?>
		
	</form>
</div>