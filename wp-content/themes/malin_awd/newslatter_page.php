<?php
/*
*Template Name: Newslatter Template
*/ 
?>
<?php get_header(); ?>
<section id="newsletter-part" class="opacity-0 newsletter-touch">

	<div class="item-title text-center animated-quick">

		<h1 class="newsletter-title">Newsletter</h1>

		<p>Enter your mail to Get notified</p>

		<!-- OPEN - Newsletter part -->
		<div id="subscribe">

			<!-- OPEN - Newsletter form -->
			<form action="php/notify-me.php" id="notifyMe" method="POST">

				<div class="form-group">

					<div class="controls">

						<!-- Field  -->
						<input type="text" id="mail-sub" name="email" placeholder="Write your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Write your email here'" class="form-control email srequiredField" />

						<i class="fa fa-spinner opacity-0"></i>

						<!-- Button  -->
						<button class="btn btn-lg submit">Notify Me</button>

						<div class="clear"></div>

					</div>

				</div>

			</form> <!-- CLOSE - Newsletter form -->

			<!-- OPEN - Newsletter message -->
			<div class="block-message">

				<div class="message">

					<p class="notify-valid"></p>

				</div>

			</div> <!-- CLOSE - Newsletter message -->

		</div> <!-- CLOSE - Newsletter part -->

	</div>

</section> <!-- CLOSE #newsletter-part -->
<?php get_footer(); ?>