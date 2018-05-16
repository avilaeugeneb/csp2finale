<div class="catalogitems tab-content">
		<?php

		foreach ($result_cats as $category):
			extract($category);
			$qry = "SELECT p.id,p.pName,p.pDesc,p.pImage,p.pStocks,p.pPrice,c.cName FROM products p JOIN categories c ON(p.pCategoryID = c.id) WHERE p.pCategoryID=$id ORDER BY pCategoryID";
			$result_qry = mysqli_query($conn,$qry);
		?>

		<div class="tab-pane fade in catalogtabs" id="panel<?=$id?>" role="tabpanel">
			<h4 class="text-center"><?=$cName?></h4>
			<div class="grid catalog">
				<?php while($products = mysqli_fetch_assoc($result_qry)):?>

					<div class="grid item nice-border" data-pid="<?=$products['id']?>">
						<div class="text-center">
							<h6><?= $products['pName'] ?></h6>
							<p><?= $products['cName'] ?></p>
						</div>
						<div>
							<img src="assets/img/<?= $products['pImage'] ?>" alt="Placeholder Image" class="img-fluid">
						</div>
						<p>Price: &#8369;<?= $products['pPrice'] ?></p>
						<button class="btn btn-success addtocart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to Cart</button>
						<div class="grid cartbuttons d-none" id="cartbtn<?=$products['id']?>">
							<div class="text-center">
								<button class="minusbtn" onclick="minus(<?=$products['id']?>)"><i class="fa fa-minus-circle" aria-hidden="true"></i></button>
							</div>
							<input type="number" name="" min="1" max="500" class="quantity<?=$products['id']?> inputqty" value="1">
							<div class="text-center">
								<button class="plusbtn" onclick="plus(<?=$products['id']?>)"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
							</div>
						</div>
					</div>

				<?php endwhile; ?>
			</div>
		</div>
		<?php endforeach; ?>
	</div>