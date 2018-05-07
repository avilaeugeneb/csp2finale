<?php
session_start();
function get_title(){
	echo "Login";
} 
require_once './partials/heading.php';
?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->
	<section class="register">
		
		<!-- Material form register -->
		<form action="" method="POST">
			<p class="h4 text-center mb-4">Log In</p>

			<!-- Material input text -->
			<div class="md-form">
				<i class="fa fa-user prefix grey-text"></i>
				<input type="text" id="username" name="username" class="form-control">
				<label for="username">Userame/Email</label>
			</div>

			<!-- Material input password -->
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input type="password" id="userpassword" name="userpassword" class="form-control">
				<label for="userpassword">Your password</label>
			</div>

			<div class="text-center mt-4">
				<button class="btn btn-primary" type="submit" name="submit" id="submit">Log in</button>
			</div>
		</form>
		<!-- Material form register -->

	</section>
	<!-- /Project ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>

