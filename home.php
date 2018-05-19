<?php
	session_start();
	function get_title(){
		echo "About us";
	} 
	require_once './partials/heading.php';
?>
<main class="content">
	<?php
	require_once './partials/navbar.php';
	?>

	<!-- Start your project here-->
	<div class="grid aboutpf">
		
		<div class="grid abouthead">
			<div class="grid imagecont">
				<img src="./assets/img/grocerybg.jpg" class="img-fluid z-depth-1" alt="Responsive image">
			</div>
			<div class="shadow">
				
			</div>
			<p><span class="highlight">
				Convenience at your fingertips- is the heart of our business. <br> Pure Food makes your grocery shopping hassle-free and saves you time. <br> With few clicks online, we can deliver the goods from our store to your doorstep any time of the day!
				</span></p>
		</div>
		<div class="grid feats">
			<div class="grid nice-border feat">
				<h4>VALUE FOR MONEY</h4>
				<p>
					We believe in Value for money, service, and time. Convenience is the cornestone of Pure Food delivery service.We promise to deliver on time without compromising the quality of the groceries you have chosen.
				</p>
			</div>
			<div class="grid nice-border feat">
				<h4>GOOD STORAGE</h4>
				<p>
					Purefood takes pride in having a state-of-the art storage facilities to keep the grocery items in good condition and maintain their freshness.
				</p>
				<p>
					We believe that quality is your outmost consideration when it comes to food.Our produce will be delivered to your home in its best state.
				</p>
			</div>
			<div class="grid nice-border feat">
				<h4>VARIOUS PRODUCTS TO CHOOSE FROM</h4>
				<p>
					Variety is the spice of life. We know that our clients would want to have various products they can choose from, and to let them feel they are not limited with options.With Pure Food, more choices means more fun in grocery shopping! 
				</p>
			</div>
		</div>
		<div class="grid faqs">
			<div class="grid nice-border faqstext">
				<h6>FAQs</h6>
				<ol>
					<li>Do you cater to other cities/areas?</li>
					<p>
						As of now, Purefood is available to customers residing in Pasig City. The company is working on expanding its service to nearby cities (and hopefully, the whole country).
					</p>
					<li>Do you have a minimum order?</li>
					<p>
						There is no minimum order. How amazing is that?
					</p>
					<li>How much is the delivery fee?</li>
					<p>The good thing is, its for FREE!</p>
					<li>Is your products the same price with the ones in the supermarket/grocery?</li>
					<p>Yes, indeed! No mark-up price yet.</p>
					<li>How long is the delivery service?</li>
					<p>Our standard time is within 60-90 minutes.</p>
					<li>Do you have cash on delivery?</li>
					<p>You bet!</p>
					<li>What if I wanted to return or exchange an item?</li>
					<p>We can accommodate them within 24 hours from delivery date.</p>
				</ol>
			</div>
			<div class="grid"></div>
		</div>

	</div>





	<!-- /Project ends here-->

</main>

<?php 
	require_once './partials/footer.php';
?>

