<div id="container">
<center>

<?php if(!IsUserLoggedIn()) : ?>
	<h2>Hozzáférés: Nem regisztrált</h2>
	<h2>Szint: Vendég </h2>

<?php elseif(IsUserLoggedIn()) : ?>
	<h2>I am a super tag</h2>
	<h2>Szint: Bejelentkezett </h2>

<?php endif; ?>
</center>
</div>