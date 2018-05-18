<?php 
session_start();
function get_title(){
	echo "My Cart";
} 
require_once './lib/connect.php';
require_once './partials/heading.php';

$user = $_SESSION['user'];
$user_qry = "SELECT * FROM users WHERE userUid = '$user'";
$result_user = mysqli_query($conn,$user_qry);

$userinfo = mysqli_fetch_assoc($result_user);

?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->
	<?php if(isset($_SESSION['cart'])):?>
		<div class="grid checkcont">

			<div class="grid checkout">
					<?php
						$indexarrays = array_keys($_SESSION['cart']); //gets all indexes of session cart
						$strarray = implode("','",$indexarrays); //return string of array 
						$products_qry = "SELECT * FROM products WHERE id IN('".$strarray."') ORDER BY pName";
						$result_products = mysqli_query($conn,$products_qry); 
					?>

					<div class="grid btshop">
						<h2>Order Summary</h2>
						<p><a href="./cart.php#mainnav">&#8592;Edit Cart</a></p>
					</div>
					<div class="grid checkheader">
						<h4>Product</h4>
						<h4>Quantity</h4>
					</div>

					<?php while($products = mysqli_fetch_assoc($result_products)):?>

						<div class="grid checkitems" data-productid="<?=$products['id'] ?>">
							<p><?= $products['pName']?></p>
							<div class="editqty">
								<input class="editinputqty d-none" type="number" name="qtyproduct" value="<?=$_SESSION['cart'][$products['id']] ?>">
								<p><?='<strong>x </strong>'.$_SESSION['cart'][$products['id']] ?> 
									<?php if($_SESSION['cart'][$products['id']]==1):?>
										piece
									<?php endif; ?>
									<?php if($_SESSION['cart'][$products['id']]>1):?>
										pieces
									<?php endif; ?>
								</p>	
							</div>
						</div>

					<?php endwhile;?>	
				
			</div> <!-- endgridcheckout -->

			<div class="grid delivery">
				
				
				<section class="form-elegant formdeliver">

					<!--Form without header-->
					<div class="card">
						<div class="card-body mx-5">

							<!--Header-->
							<div class="text-center">
								<h3 class="dark-grey-text mb-5"><h2>Delivery Details</h2></h3>
							</div>

							<!--Body-->
							<div class="md-form">
								<input type="text" id="fullname" class="checkform form-control" value="<?= $userinfo['userFirstName']; ?> <?= $userinfo['userLastName']; ?>" readonly>
								<label for="fullname">Name</label>
							</div>

							<div class="md-form">
								<input type="email" id="email" class="checkform form-control" value="<?= $userinfo['userEmail']; ?>" readonly>
								<label for="email">Email Address</label>
							</div>

							<div class="md-form">
								<input type="tel" id="contact" class="checkform form-control" placeholder="Enter your cellphone number">
								<label for="contact">Contact Number <i class='fa fa-pencil'></i></label>
							</div>

							<div class="md-form">
								<input type="text" id="street" class="checkform form-control" placeholder="Street">
								<label for="street">Street Address <i class='fa fa-pencil'></i></label>
							</div>

							<div class="md-form">
								<input type="text" id="brgy" class="checkform form-control" placeholder="Brgy.">
								<label for="brgy">Barangay <i class='fa fa-pencil'></i></label>
							</div>

							<div class="md-form">
								<input type="text" id="city" class="checkform form-control" value="<?= $userinfo['userCity']; ?>" readonly>
								<label for="city">City</label>
							</div>

							<p>Delivery address and contact number are required. <br>
								Edit your profile here: <a href="./profile.php"><strong>Profile</strong></a></p>

							<div class="grid checktotal">
						<button class="btn"><i class="fa fa-check-square-o" aria-hidden="true"></i>Proceed to Payment</button>
						<div class="grid checktotal2">
							<h4 class="text-center">Total Amount : </h4>
							<h5 class="totalpricebot"><?= "₱".$_SESSION['total_amount'] ?></h5>
						</div>
					</div>

						</div>

					</div>
					<!--/Form without header-->

				</section>
            
			</div>
		</div> <!-- endcheckContainer -->
	<?php endif;?>

	<?php if(!isset($_SESSION['cart'])):?>
		<?php header("Location: ./catalog.php") ?>
	<?php endif;?>
	<!-- /Project ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>