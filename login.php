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
	<section class="grid login">
		
		<!-- Login form register -->
		<form action="./lib/login_user.php" method="POST" class="loginf">
			<p class="h4 text-center mb-4">Log In</p>

			<!-- Login input text -->
			<div class="md-form">
				<i class="fa fa-user prefix grey-text"></i>
				<input type="text" id="loginuser" name="loginuser" class="form-control">
				<label for="loginuser">Username/Email</label>
			</div>

			<!-- Login input password -->
			<div class="md-form">
				<i class="fa fa-lock prefix grey-text"></i>
				<input type="password" id="loginpassword" name="loginpassword" class="form-control">
				<label for="loginpassword">Your password</label>
			</div>
			<h6 class="loginerrmsg">
				<?php 
					if(isset($_SESSION['errormessage'])){
						echo $_SESSION['errormessage'];
					}
					unset($_SESSION['errormessage']);
				?>
			</h6>
			<div class="text-center mt-4">
				<button class="btn" type="submit" name="submit" id="submit">Log in</button>
			</div>
		</form>
		<!-- Login form register -->

	</section>
	<!-- /Project ends here-->

</main>

<?php 
require_once './partials/footer.php';
?>

