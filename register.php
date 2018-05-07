<?php
session_start();
function get_title(){
	echo "Register";
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
			<p class="h4 text-center mb-4">Register</p>

			<!-- Material input text -->
			<div class="md-form">
				<i class="fa fa-user prefix grey-text"></i>
				<input type="text" id="username" name="username" class="form-control">
				<label for="username">Desired Username</label>
			</div>

			<!-- Material input email -->
			<div class="md-form">
				<i class="fa fa-envelope prefix grey-text"></i>
				<input type="email" id="usermail" name="usermail" class="form-control">
				<label for="usermail">Your email</label>
			</div>

			<!-- Material input email -->
			<div class="md-form">
				<i class="fa fa-exclamation-triangle prefix grey-text"></i>
				<input type="email" id="usermailC" name="usermailC" class="form-control">
				<label for="usermailC">Confirm your email</label>
			</div>

			<!-- Material input password -->
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input type="password" id="userpassword" name="userpassword" class="form-control">
				<label for="userpassword">Your password</label>
			</div>

			<div class="text-center mt-4">
				<button class="btn btn-primary" type="submit" name="submit" id="submit">Sign Up</button>
			</div>
		</form>
		<!-- Material form register -->

	</section>


	<!-- /Project ends here-->
</main>
<?php 
require_once './partials/footer.php';
?>
