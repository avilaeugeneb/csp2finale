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
						<h6><?= $products['pName'] ?></h6>
						<p><?= $products['cName'] ?></p>
						<div>
							<img src="assets/img/<?= $products['pImage'] ?>" alt="Placeholder Image" class="img-fluid">
						</div>
						<p>Price: &#8369;<?= $products['pPrice'] ?></p>
						<button class="btn btn-success addtocart"><i class="fa fa-cart-plus" aria-hidden="true"></i>Add to Cart</button>
						<div class="grid cartbuttons d-none" id="cartbtn<?=$products['id']?>">
							<button onclick="minus(id)"><i class="fa fa-minus-circle text-center" aria-hidden="true"></i></button>	
							<input type="number" name="" min="1" max="500" class="quantity<?=$products['id']?>" value="1">
							<button onclick="plus(id)"><i class="fa fa-plus-circle" aria-hidden="true"></i></button>
						</div>
					</div>

				<?php endwhile; ?>
			</div>
		</div>
		<?php endforeach; ?>
	</div>