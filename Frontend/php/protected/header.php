<hr>
<h3>
<center>Üdvözöljük 
<?php if(!isset($_SESSION['isregistered']) || $_SESSION['isregistered'] < 1) : ?>

<?php else : ?>
<?=$_SESSION['real_name'] ?>!
</center>
</h3>
<?php endif; ?>