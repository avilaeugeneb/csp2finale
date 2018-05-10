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
		<div><h4>Product Name</h4></div>
		<div><h4>Product Description</h4></div>
		<div><h4>Product Image</h4></div>
		<div><h4>Product Stocks</h4></div>
		<div><h4>Product Price</h4></div>
	</div>
	<?php while($product = mysqli_fetch_assoc($result_productsqry)) :?>
		<div class="grid tableheader">
			<div><?= $product['pName']; ?></div>
			<div><?= $product['pDesc']; ?></div>
			<div><img src="../assets/img/<?= $product['pImage']; ?>" class="img-fluid"></div>
			<div><?= $product['pStocks']; ?></div>
			<div><?= $product['pPrice']; ?></div>
		</div>
	<?php endwhile; ?>
</div>



<?php
include_once './adminpartials/footer.php';
?>