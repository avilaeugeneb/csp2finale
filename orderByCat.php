<?php
	require_once './lib/connect.php';

	$_SESSION['product_qry'] = "SELECT p.id,p.pName,p.pDesc,p.pImage,p.pStocks,p.pPrice,c.cName FROM products p JOIN categories c ON(p.pCategoryID = c.id) ORDER BY pCategoryID";
	$result_products = mysqli_query($conn,$_SESSION['product_qry']);
?>

<?php while($products = mysqli_fetch_assoc($result_products)):?>

	<div class="grid item nice-border">
		<h4><?= $products['pName'] ?></h4>
		<h6><?= $products['cName'] ?></h6>
		<div>
			<img src="assets/img/<?= $products['pImage'] ?>" alt="Placeholder Image" class="img-fluid">
		</div>
		<p>Price: &#8369;<?= $products['pPrice'] ?></p>
	</div>

<?php endwhile; ?>