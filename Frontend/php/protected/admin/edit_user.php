<?php if(!isset($_SESSION['isadmin']) || $_SESSION['isadmin'] != 1) : ?>
	<h1>Hozzáférés megtagadva!</h1>
<?php else : ?>
	


<?php
if (isset($_GET["e"]))
{
    $id = $_GET["e"];
}
?>

<?php 
if(isset($_GET["e"]) && !empty($_GET['e'])) {
	
	$query = "SELECT id, username, isregistered FROM users WHERE id = '$id'";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
}
?>


<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateuser'])) {
		$postData = [
			'isregistered' => $_POST['isregistered']
		];

		if($postData['isregistered'] < 0 || $postData['isregistered'] > 1) {
			echo "0 vagy 1-et adj meg!";
		} 
		else {
			$query = "UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, permission = :permission, varos = :varos, utca = :utca WHERE id = '$id'";
			$params = [
				':isregistered' => $postData['isregistered']
			];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba az adatbevitel során!";
			} header('Location: index.php?P=user_list');
		}
	}
	?>

	<form method="post"> 
 <?php foreach($users as $u) : ?>
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $id;?>" />

		<div class="form-row">
			<div class="form-group col-md-3">
				<label for="userRegistered">Regisztrált</label>
				<input type="text" class="form-control" id="userRegistered" name="isregistered" value="<?php echo $u['isregistered']?>">
			</div>
		</div>

<button type="submit" class="btn btn-primary" name="updateuser">Felhasználó jogosultságának frissítése</button>
<?php endforeach; ?>
	</form>
<?php endif; ?>

