<?php
session_start();
function get_title(){
	echo "Products";
} 
require_once './partials/heading.php';
require_once './lib/connect.php';

$category_qry = "SELECT * FROM categories WHERE parent = 0";
$result_cats = mysqli_query($conn,$category_qry);

?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>
	<!-- Start your Page here-->
	<div class="grid productscont">
		
		<!-- Nav tabs -->
		<ul class="nav md-pills flex-column" role="tablist">
		    <?php while($category = mysqli_fetch_assoc($result_cats)): ?>
		    	<li class="nav-item">
	        	<a class="nav-link" data-toggle="tab" href="#panel<?=$category['id']?>" role="tab"><?=$category['cName']?></a>
	    		</li>
		    <?php endwhile;?>
		</ul>

		<?php require_once './partials/productcatalog.php'; ?>

	</div>

	<!-- /Page ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>
