<?php 
session_start();
function get_title(){
	echo "My Cart";
} 
require_once './lib/connect.php';
require_once './partials/heading.php';
$indexarrays = array_keys($_SESSION['cart']); //gets all indexes of session cart
$strarray = implode("','",$indexarrays); //return string of array 
$products_qry = "SELECT * FROM products WHERE id IN('".$strarray."') ORDER BY pName";
$result_products = mysqli_query($conn,$products_qry); 

?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->

	<div class="grid cart">
		<h2>You Ordered</h2>
		<div class="grid cartheader">
			<h4>Product</h4>
			<h4>Quantity</h4>
			<h4>Price</h4>
			<h4>Subtotal</h4>
		</div>
	<?php while($products = mysqli_fetch_assoc($result_products)):?>

		<div class="grid cartitems">
			<p><?= $products['pName']?></p>
			<p><?= $_SESSION['cart'][$products['id']] ?></p>
			<p><?= "₱".$products['pPrice'] ?></p>
			<p><?= "₱".$products['pPrice'] * $_SESSION['cart'][$products['id']] ?></p>
		</div>
		
	<?php endwhile;?>
		<div class="grid totalcont">
			<h2 class="text-right">Total Amount : </h2>
			<h5><?= "₱".$_SESSION['total_amount'] ?></h5>
		</div>
	</div>


	<!-- /Project ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>
