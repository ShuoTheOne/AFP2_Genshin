<hr>
<center>
<a href="index.php">Főoldal</a>
<?php if(!IsUserLoggedIn()) : ?>
    <span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=login">Bejelentkezés</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=register">Regisztrálás</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=addcreditcard">Bankkártya hozzáadása</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=shoppingcart">Bevásárló Kosár</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=product">Termék</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=offers">Ajánlatok</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=#">Work in progress</a>
<?php else : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=test">Hozzáférés teszt</a>

<?php if(isset($_SESSION['isregistered']) && $_SESSION['isregistered'] == 1) : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=changeprofiledatas">Profil adatok módosítása</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=forgetpassword">Elfelejtett jelszó</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=#">Work in progress</a>
<?php endif; ?>		

  <?php if(isset($_SESSION['isadmin']) && $_SESSION['isadmin'] == 1) : ?>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=users">Felhasználók Listája</a>
	<span> &nbsp; | &nbsp; </span>
	<a href="index.php?P=#">Work in Progress</a>
<?php endif; ?>

<a href="index.php?P=logout">Kijelentkezés</a>
<?php endif; ?> 
 </center>

<hr>