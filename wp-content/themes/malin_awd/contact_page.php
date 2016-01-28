<?php
/*
*Template Name: Contact Template
*/ 
?>
<?php get_header(); ?>
	<section id="home-part" class="scale-max">
		<div class="overlay">
			<canvas id="constellation"></canvas>
		</div>
	</section>
	<section id="content-part">
		<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2620.8173930059093!2d24.750378714929386!3d48.93791980305886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4730c18615b732f5%3A0xd941d6c37f024e53!2z0LLRg9C7LiDQktCw0YHQuNC70Y8g0KHQuNC80L7QvdC10L3QutCwLCAzMSwg0IbQstCw0L3Qvi3QpNGA0LDQvdC60ZbQstGB0YzQuiwg0IbQstCw0L3Qvi3QpNGA0LDQvdC60ZbQstGB0YzQutCwINC-0LHQu9Cw0YHRgtGMLCA3NjQ5MQ!5e0!3m2!1suk!2sua!4v1453559275118" width="807" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>

		<div class="inner-content" id="contact-content">

			<h2>Get in touch!</h2>
			<div class="separator"></div>

			<div class="row">

				<div class="col-xs-12 col-sm-12 col-lg-4">

					<div class="contact-item">

						<h6><i class="icon ion-ios-location"></i> Main address</h6>

						<p>
							<a href="https://goo.gl/maps/2eF6Z" target="_blank"><strong>66 Grand Central,</strong><br>
								<strong>New York, USA</strong></a>
						</p>

					</div>

					<div class="contact-item">

						<h6><i class="icon ion-ios-telephone"></i> Call us</h6>

						<p>
							<strong><a href="tel:+661254611">(+33) 66-1254-611</a></strong><br>
							<strong><a href="tel:+665628146">(+37) 66-5628-146</a></strong>
						</p>

					</div>

					<div class="contact-item">

						<h6><i class="icon ion-paper-airplane"></i> Write us</h6>

						<p>
							<strong><a href="mailto:moet@exemple.com">malin@marketing.com</a></strong><br>
							<strong><a href="mailto:moet@exemple.com">malin@customer.com</a></strong>
						</p>

					</div>

				</div>

				<div class="col-xs-12 col-sm-12 col-lg-8">

					<!-- Contact form -->
					<form id="contact-form" name="contact-form" method="POST" data-name="Contact Form">

						<div class="row">

							<!-- Full name -->
							<div class="col-xs-12 col-sm-6 col-lg-6">
								<div class="form-group">
									<input type="text" id="name" class="form form-control" placeholder="Your Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Name'" name="name" data-name="Name" required>
								</div>
							</div>

							<!-- E-mail -->
							<div class="col-xs-12 col-sm-6 col-lg-6">
								<div class="form-group">
									<input type="email" id="email" class="form form-control" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'" name="email-address" data-name="Email Address" required>
								</div>
							</div>

							<!-- Subject -->
							<div class="col-xs-12 col-sm-12 col-lg-12">
								<div class="form-group">
									<input type="text" id="subject" class="form form-control" placeholder="Write the subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Write the subject'" name="subject" data-name="Subject">
								</div>
							</div>

							<!-- Message -->
							<div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
								<div class="form-group">
									<textarea id="text-area" class="form textarea form-control" placeholder="Your message here... 20 characters Min." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your message here... 20 characters Min.'" name="message" data-name="Text Area" required></textarea>
								</div>
							</div>

						</div>

						<!-- Button submit -->
						<button type="submit" id="valid-form" class="btn btn-color">Send my Message</button>

					</form>
					<!-- /. Contact form -->

					<div id="block-answer">
						<div id="answer"></div>
					</div>

				</div>

			</div>

		</div>

	</section> <!-- CLOSE #content-part -->
<?php get_footer(); ?>