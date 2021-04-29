<div id="container">
	<div id="searchtable">

		<?php 
			$output = '';
			if (isset($_POST['keresesresult']) && $_POST['keresesresult'] !== ' ') 
				{
				$search = $_POST['keresesresult'];

				$query = "SELECT * FROM product WHERE description LIKE '%$search%' || name LIKE '%$search%'";
				require_once DATABASE_CONTROLLER;
				$searchlist = getList($query);

				$db = 0; 
					foreach ($searchlist as $sl) {
						$db++;				
					}

				$products = getList($query);
				$i = 0;
	

				if ($db == 0) {
					print("Nincs találat '$search' ");
				}

				else{
					foreach ($searchlist as $sl) 
						{
							$id = $sl['id'];
							$name = $sl['name'];
							$img_url = $sl['img_url'];
							$value = $sl['value'];
							
							$output .= 
							'<table>
								<thead>
								</thead>
								<tbody>
									<tr>
										<th scope="row"><?=$i ?></th>
										<td> <img src='  .$img_url. '></td>
										<td>' .$name. '</td>
										<td>' .$value. '</td>

									</tr>
								</tbody>
							</table>';
						}
					}
				}
			print("$output");
		?>

				<?php if($db != 0) : ?>	
					<?php foreach ($products as $p) : ?>
						<?php $i++; ?>
						<tr>
							<th scope="row"><?=$i ?></th>
							<td><a href="?P=product&p=<?=$p['id'] ?>">Termékhez</a></td>
							<br>
						</tr>
					<?php endforeach;?>
				<?php endif; ?>
		</div>
</div>