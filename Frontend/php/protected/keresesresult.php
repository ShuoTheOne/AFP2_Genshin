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

				if ($db == 0) {
					print("nincs találat '$search' ");
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
	</div>
</div>