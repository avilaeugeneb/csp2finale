<?php
	session_start();
	function get_title(){
		echo "Home";
	} 
	require_once './partials/heading.php';
?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->
	<h1>Home</h1>
	<!-- /Project ends here-->

</main>

<?php 
	require_once './partials/footer.php';
?>

