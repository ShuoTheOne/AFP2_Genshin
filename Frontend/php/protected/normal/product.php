<?php
if (isset($_POST["p"]))
{
    $id = $_POST["p"];
}
?>

<?php 
if(isset($_POST["p"]) && !empty($_POST['p'])) {
	
	$query = "SELECT * FROM product WHERE id = '$id'";
	require_once DATABASE_CONTROLLER;
	$products = getList($query);
}
?>

<?php 
if(isset($_POST["p"]) && !empty($_POST['p'])) {
	
	$query = "SELECT * FROM rating WHERE product_id = '$id'";
	require_once DATABASE_CONTROLLER;
	$ratings = getList($query);
}
?>

	<div id="container">
		<div id="product">
			<div id="product-top">

				 <?php foreach($products as $p) : ?>
				<input type="hidden" name="new" value="1" />
				<input name="id" type="hidden" value="<?php echo $id;?>" />
				<?php endforeach; ?>

				<div class="product-top producttopleft">
					<img src="<?php echo $p['img_url']?>" class="product-top-left-img">
				</div>
				<div class="product-top producttopright">
					<p> Név: <?php echo $p['name']?> </p>
					<p> Kategória: <?php echo $p['category']?> </p>
					<p> Leírás: <?php echo $p['description']?></p>
					<p> Ár: <?php echo $p['value']?> </p>
					<td> <button> <a href="index.php?P=shoppingcart" class="button">Kosárhoz adás</a> </button></td>
				</div>
			</div>
			<div id="product-bottom">
				<table>
					<tbody>
						<tr>
							<td width="60%"><textarea id="opinion" name="productopinion" placeholder="Írj véleményt..."></textarea><br></br></td>
							<td width="40%">
								<div class="rate">
									<input type="radio" id="star5" name="rate" value="5" />
									<label for="star5" title="text">5</label>
									<input type="radio" id="star4" name="rate" value="4" />
									<label for="star4" title="text">4</label>
									<input type="radio" id="star3" name="rate" value="3" />
									<label for="star3" title="text">3</label>
									<input type="radio" id="star2" name="rate" value="2" />
									<label for="star2" title="text">2</label>
									<input type="radio" id="star1" name="rate" value="1" />
									<label for="star1" title="text">1</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>

				
				
				<button id="opinionsendbutton" onclick=""> Küldés </button> <br>

				<?php
				$db = 0;
				$output = '';
				foreach ($ratings as $r) {
					$db++;				
				}
				if($db == 0)
				{
					print("Telehetsz az első hozzászóló");
				}
				else
				{
					foreach($ratings as $r)
					{
						$user_id = $r['user_id'];
						$comment = $r['comment'];
						$star = $r['star'];
						$output .= '<input type="hidden" name="new" value="1" />
									<input name="id" type="hidden" value="' .$id. '" />
									"Felhasználó '.$user_id.' : '.$comment.' : '.$star.'
						';
					}
				}
				print("$output");
				?>
			</div>
		</div>
	</div>
