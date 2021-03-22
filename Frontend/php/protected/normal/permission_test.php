<center>
<?php 
	$query = "SELECT real_name, email, permission FROM users";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	?>

<?php if(!isset($_SESSION['isregistered']) || $_SESSION['isregistered'] < 1) : ?>
	<h2>Hozzáférés megtagadva! Kérjen jogosultságot egy admintól!</h2>
	Hozzáférés teszt: <?=isset($_SESSION['isregistered']) ? $_SESSION['isregistered'] : "Nincs hozzáférési szintje." ?>


<?php elseif(isset($_SESSION['isregistered']) && $_SESSION['isregistered'] == 1) : ?>
	<h2>I am a super tag</h2>
	<h2>Szint: Bejelentkezett </h2>

<?php endif; ?>
</center>