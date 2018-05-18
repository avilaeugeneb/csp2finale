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


	<section class="grid register">
		
		<!--form register -->
		<form action="./lib/register_user.php" method="POST" class="register">
			<p class="h4 text-center mb-4">Register</p>

			<!--input text -->
			<div class="md-form">
				<i class="fa fa-user prefix grey-text"></i>
				<input type="text" id="username" name="username" class="form-control" required>
				<label for="username">Desired Username
					<span class="reg-error-username"></span>
					<span class="username-success"></span>
				</label>
			</div>

			<!--input email -->
			<div class="md-form">
				<i class="fa fa-envelope prefix grey-text"></i>
				<input type="email" id="usermail" name="usermail" class="form-control" required>
				<label for="usermail">Your email
					<span class="reg-error-email"></span>
					<span class="email-success"></span>
				</label>
			</div>

			<!--input password -->
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input type="password" id="userpassword" name="userpassword" class="form-control" required>
				<label for="userpassword">Your password
					<span class="reg-error-pw"></span>
					<span class="userpw-success"></span>
				</label>
			</div>

			<!--Confirm password -->
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input type="password" id="confirmpassword" name="confirmpassword" class="form-control" required>
				<label for="confirmpassword">Confirm password
					<span class="reg-error-cpw"></span>
					<span class="usercpw-success"></span>
				</label>
			</div>

			<div class="text-center mt-4">
				<button class="btn" type="submit" name="submit" id="register_submit">Sign Up</button>
			</div>
		</form>
		<!--form register -->

	</section>


	<!-- /Project ends here-->
</main>
<?php 
require_once './partials/footer.php';
?>
