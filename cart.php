<?php 
session_start();
function get_title(){
	echo "My Cart";
} 
require_once './lib/connect.php';
require_once './partials/heading.php';


?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->

	<div class="grid cart">

		<?php if(isset($_SESSION['cart'])):?>

			<?php
				$indexarrays = array_keys($_SESSION['cart']); //gets all indexes of session cart
				$strarray = implode("','",$indexarrays); //return string of array 
				$products_qry = "SELECT * FROM products WHERE id IN('".$strarray."') ORDER BY pName";
				$result_products = mysqli_query($conn,$products_qry); 
			?>

			<h2>Your Cart</h2>
			<div class="grid cartheader">
				<h4>Product</h4>
				<h4>Quantity</h4>
				<h4>Price</h4>
				<h4>Subtotal</h4>
			</div>

			<?php while($products = mysqli_fetch_assoc($result_products)):?>

				<div class="grid cartitems" data-productid="<?=$products['id'] ?>">
					<p><?= $products['pName']?></p>
					<div class="editqty">
						<input class="editinputqty" type="number" name="qtyproduct" value="<?= $_SESSION['cart'][$products['id']] ?>">	
						<i class="fa fa-pencil" aria-hidden="true"></i>
						<i class="fa fa-trash" aria-hidden="true"></i>
					</div>
					<p class="unitprice" data-unitprice="<?= $products['pPrice'] ?>"><?= "₱".$products['pPrice'] ?></p>
					<p class="subprice"><?= "₱".$products['pPrice'] * $_SESSION['cart'][$products['id']] ?></p>
				</div>

			<?php endwhile;?>

			<div class="grid totalcont">
				<button class="btn btn-success" data-toggle="modal" data-target="#checkoutmodal"><i class="fa fa-check-square-o" aria-hidden="true"></i>Checkout</button>
				<div class="grid totalcont">
					<h4 class="text-center">Total Amount : </h4>
					<h5 class="totalpricebot"><?= "₱".$_SESSION['total_amount'] ?></h5>
				</div>
			</div>	
		<?php endif;?>

		<?php if(!isset($_SESSION['cart'])):?>
			<h2>Your Cart is Empty!</h2>
		<?php endif;?>



		<!-- Central Modal Small -->
		<div class="modal fade" id="checkoutmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Log in Required</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body grid">
						<p>Please log in to continue purchasing</p>
						<button type="button" class="btn btn-success registercart">Register</button>
						<p class="text-center">or</p>
						<button type="button" class="btn btn-info logincart">Log IN</button>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-brown" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>


	<!-- /Project ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>
