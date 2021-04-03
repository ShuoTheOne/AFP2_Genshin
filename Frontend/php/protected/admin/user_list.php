<?php if(!isset($_SESSION['isadmin']) || $_SESSION['isadmin'] != 1) : ?>
<center> <h1>Hozzáférés megtagadva! Ehhez az oldalhoz csak az adminnak vannak jogai!</h1> </center>
<?php else : ?>

	<?php 
		if(array_key_exists('d', $_GET) && !empty($_GET['d'])) {
			$query = "DELETE FROM users WHERE id = :id";
			$params = [':id' => $_GET['d']];
			require_once DATABASE_CONTROLLER;
			if(!executeDML($query, $params)) {
				echo "Hiba törlés közben!";
			}
		}
	?>


	<?php 
	$query = "SELECT id, username, email, isregistered FROM users";
	require_once DATABASE_CONTROLLER;
	$users = getList($query);
	?>
	<?php if(count($users) <= 0) : ?>
		<center> <h1>Nem találhatóak felhasználók az adatbázisban.</h1> </center>
	<?php else : ?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Felhasználónév</th>
					<th scope="col">Email</th>
					<th scope="col">Hozzáférési szint</th>
					<th scope="col">Szerkesztés</th>	
					<th scope="col">Törlés</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 0; ?>
				<?php foreach ($users as $u) : ?>
					<?php $i++; ?>
					<tr>
						<th scope="row"><?=$i ?></th>
						<td><?=$u['username'] ?></td>
						<td><?=$u['email'] ?></td>
						<td><?=$u['isregistered'] ?></td>
						<td><a href="?P=edit_user&e=<?=$u['id'] ?>">Jogosultság Szerkesztése</a></td>
						<td><a href="?P=user_list&d=<?=$u['id'] ?>">Felhasználó Törlése</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</table>
	<?php endif; ?>
<?php endif; ?>