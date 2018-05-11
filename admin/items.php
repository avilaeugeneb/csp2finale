<?php 
require_once '../lib/connect.php';
include_once './adminpartials/header.php';
include_once './adminpartials/navbar.php';

function get_title(){
		echo "Products Page";
	} 

$products_qry = "SELECT * FROM products";
$result_productsqry = mysqli_query($conn,$products_qry);
?>

<div class="grid products">
	<h3>Products Available</h3>

	<div class="grid tableheader">
		<div><b>Product Name</b><i class="fa fa-caret-down" aria-hidden="true"></i></div>
		<div><b>Product Description</b></div>
		<div><b>Product Image</b></div>
		<div><b>Product Stocks</b></div>
		<div><b>Product Price</b></div>
	</div>

	<?php while($product = mysqli_fetch_assoc($result_productsqry)) :?>

		<div class="grid tableproducts">
			<div><?= $product['pName']; ?></div>
			<div><?= $product['pDesc']; ?></div>
			<div><img src="../assets/img/<?= $product['pImage']; ?>" class="img-fluid"></div>
			<div><?= $product['pStocks']; ?></div>
			<div><?= $product['pPrice']; ?></div>
		</div>

	<?php endwhile; ?>

	<button class="btn btn-info">Add Product</button>
</div>



<?php
include_once './adminpartials/footer.php';
?>