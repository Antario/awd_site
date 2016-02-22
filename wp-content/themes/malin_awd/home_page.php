<?php
/*
*Template Name: Home Template
*/ 
?>
<?php get_header(); ?>
	<div class="loading-part animated-quick">

		<div class="loader-part opacity-0 animated-quick">

			<div class="loader-circle"></div>
			<div class="loader-text">AWD Development</div>

		</div>

	</div>
<section id="home-part" class="scale-max">
	<div class="overlay">
		<canvas id="constellation"></canvas>
	</div>

	<div class="item-title text-center animated-quick">

		<!-- Your logo -->
		<img src="<?php echo get_template_directory_uri(); ?>/img/awd12_1.png" alt="" class="brand-logo"/>

<!--		<h1 class="cd-headline letters rotate-2">-->
<!--			Ми-->
<!---->
<!--			<div class="cd-words-wrapper">-->
<!--				<b class="is-visible">Професійні</b>-->
<!--				<b>Відповідальні</b>-->
<!--				<b>AWD&nbsp;Development!</b> <!-- use the code &nbsp; to add a space between 2 words -->-->
<!---->
<!--			</div>-->
<!---->
<!--		</h1>-->

		<p>Made for awesome people </p>

<!--		<a class="btn open-newsletter btn-color">Newsletter</a>-->
<!---->
<!--		<a class="btn open-content btn-light about-content">More info</a>-->

	</div> <!-- CLOSE item-title -->

</section> <!-- CLOSE #home-part -->

<!--<section id="newsletter-part" class="opacity-0 newsletter-touch">-->
<!---->
<!--	<div class="item-title text-center animated-quick">-->
<!---->
<!--		<h1 class="newsletter-title">Newsletter</h1>-->
<!---->
<!--		<p>Enter your mail to Get notified</p>-->
<!---->
<!--		<!-- OPEN - Newsletter part -->-->
<!--		<div id="subscribe">-->
<!---->
<!--			<!-- OPEN - Newsletter form -->-->
<!--			<form action="php/notify-me.php" id="notifyMe" method="POST">-->
<!---->
<!--				<div class="form-group">-->
<!---->
<!--					<div class="controls">-->
<!---->
<!--						<!-- Field  -->-->
<!--						<input type="text" id="mail-sub" name="email" placeholder="Write your email here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Write your email here'" class="form-control email srequiredField" />-->
<!---->
<!--						<i class="fa fa-spinner opacity-0"></i>-->
<!---->
<!--						<!-- Button  -->-->
<!--						<button class="btn btn-lg submit">Notify Me</button>-->
<!---->
<!--						<div class="clear"></div>-->
<!---->
<!--					</div>-->
<!---->
<!--				</div>-->
<!---->
<!--			</form> <!-- CLOSE - Newsletter form -->-->
<!---->
<!--			<!-- OPEN - Newsletter message -->-->
<!--			<div class="block-message">-->
<!---->
<!--				<div class="message">-->
<!---->
<!--					<p class="notify-valid"></p>-->
<!---->
<!--				</div>-->
<!---->
<!--			</div> <!-- CLOSE - Newsletter message -->-->
<!---->
<!--		</div> <!-- CLOSE - Newsletter part -->-->
<!---->
<!--	</div>-->
<!---->
<!--</section> <!-- CLOSE #newsletter-part -->-->
<?php get_footer(); ?>