<div id="header">
	<form action="./index.php?P=keresesresult" method="post">
		<a href="index.php" class="genshin-logo"> Genshop </a>
		<input type="search" name='keresesresult' class="search-input-box" placeholder="Keresés...">
		<input type="submit" value="keresés">
		<a href="./index.php?P=shoppingcart" class="profileshopcartimage"><img src="public/images/shopcart.png"></img></a>
		<?php if(!IsUserLoggedIn()) : ?>
			<a href="./index.php?P=login" class="profileshopcartimage"><img src="public/images/profileimage.png"></img></a>
		<?php else : ?>
			<a href="./index.php?P=changeprofiledatas" class="profileshopcartimage"><img src="public/images/placeholderavatar.png"></img></a>
		<?php endif; ?>
		
	</form>
</div>