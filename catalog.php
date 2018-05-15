<?php
	session_start();
	function get_title(){
		echo "Products";
	} 
	require_once './partials/heading.php';
	require_once './lib/connect.php';

	$_SESSION['product_qry'] = "SELECT p.id,p.pName,p.pDesc,p.pImage,p.pStocks,p.pPrice,c.cName FROM products p JOIN categories c ON(p.pCategoryID = c.id) ORDER BY p.id";
	$result_products = mysqli_query($conn,$_SESSION['product_qry']);

?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->
	<div class="grid catalogcont">

		<div class="grid page-header">
			<h1>Products</h1>
		</div>

		<div class="grid sortbuttons">
			<label for="sortselects" id="sortlabel">Sort By: </label>
			<select class="sortselects" name="sortselects" id="sortselects">
				<option value="default"></option>
				<option value="pName">Name</option>
				<option value="pCategoryID">Category</option>
				<option value="pPrice">Price</option>
			</select>
			<div class="queryshow"></div>
		</div>

		<div class="grid catalog" id="productscatalog">
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
		</div>
	</div>

	<!-- /Project ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>
