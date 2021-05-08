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
							'<form action="./index.php?P=product" method="post">
							<table class = "searchtext">
								<thead>
								</thead>
								<tbody>
									<tr>
										<th scope="row"><?=$i ?></th>
										<td> <img src='  .$img_url. ' width = "270" height ="270"></td>
										<td>' .$name. '</td>
										<td>' .$value. '</td>
										<td> <button name="p" value="'.$id.'">Termékhez</button></td>
									</tr>
								</tbody>
							</table>
							</form>';
						}
					}
				}
			print("$output");
		?>
		</div>
</div>