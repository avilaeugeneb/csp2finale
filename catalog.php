<?php
	session_start();
	function get_title(){
		echo "Products";
	} 
	require_once './partials/heading.php';
?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->
	<div class="grid page-header">
		<h1>Products</h1>
	</div>

	<div class="grid catalog">
		<?php
			for($i=1;$i<20;$i++){
				echo '
				<div class="grid item nice-border">
					<h4>Item Name</h4>
					<div>
						<img src="assets/img/pholder.png" alt="Placeholder Image" class="img-fluid">
					</div>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet similique aperiam iusto sed, consectetur dolor, quia nostrum quidem quod rerum, adipisci illo ipsa modi vero. Ducimus beatae reiciendis nemo eveniet?
					</p>
				</div>
				';
			}
		?>
	</div>


	<!-- /Project ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>
