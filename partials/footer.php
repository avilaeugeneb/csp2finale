</div> <!-- end.grid.nopad -->

<!--Footer-->
<footer class="page-footer font-small pt-4 mt-4">

	<!--Footer Links-->
	<div class="container-fluid text-center text-md-left">
		<div class="row">

			<!--First column-->
			<div class="col-md-4">
				<h5 class="text-uppercase">Contact Us</h5>
				<p>Phone: (02)861-5555</p>
				<p>Email: purefood@puregroup.com.ph</p>
				<p>Address:</p>
				<p> #121 Di Ka Nya Mahal St.</p>
				<p>Brgy.Kinalimutan, Pinaasa City</p>
				<p>Republic of Hugotero't Hugotera</p>
			</div>
			<!--/.First column-->

			<!--Second column-->
			<div class="col-md-4">
				<h4 class="text-uppercase">PURE Group of Companies</h4>
				<h6 class="text-uppercase">Pure.Food</h6>
				<h6 class="text-uppercase">Pure.Scents</h6>
				<h6 class="text-uppercase">Pure.Tools</h6>
				<h6 class="text-uppercase">Pure.Style</h6>
				<h6 class="text-uppercase">Pure.Tech</h6>
			</div>
			<!--/.Second column-->

			<!--Third column-->
			<div class="col-md-4">
				<h4 class="text-uppercase">Terms of Use</h4>
				<h4 class="text-uppercase">Disclaimer</h4>
				<h4 class="text-uppercase">We Accept</h4>
				<div>
				<img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Credit Card Badges" class="img-fluid">
				</div>
			</div>
			<!--/.Third column-->
		</div>
	</div>
	<!--/.Footer Links-->

	<!--Copyright-->
	<div class="footer-copyright py-3 text-center">
		<a href="#"> PureFood : Ang Online Pamilihan ng Bayan </a>
	</div>
	<!--/.Copyright-->

</footer>
<!--/.Footer-->

<div style="position: fixed; bottom: 20px; left: 30px;">
		<input type="color" name="colorpicker" class="colorpicker" value=
		<?php if(isset($_SESSION['color'])): ?>
			<?= $_SESSION['color'] ?>
		<?php else: ?>
			'#00843C'
		<?php endif;?>
		>
</div>

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script src="assets/js/bootstrapjs/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="assets/js/bootstrapjs/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script src="assets/js/bootstrapjs/mdb.min.js"></script>
<!-- Custom Script -->
<script src="assets/js/script.js"></script>
</body>

</html>
