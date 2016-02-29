<?php
/*
* Template Name: Portfolio Template
*/
?>
<?php get_header(); ?>
<section id="home-part" class="scale-max">
	<div class="overlay">
		<canvas id="constellation"></canvas>
	</div>
</section>

	<section id="project">
		<div class="col-xs-12 col-sm-12 col-lg-12">
		<?php echo do_shortcode("[huge_it_portfolio id='1']"); ?>
			</div>
<!--		<div class="row">-->
<!--			--><?php //if ( have_posts() ) : ?>
<!--				--><?php //while ( have_posts() ) : the_post(); ?>
<!--					<div class="col-xs-12 col-sm-12 col-lg-12">-->
<!--						--><?php //the_content(); ?>
<!--					</div>-->
<!--				--><?php //endwhile; ?>
<!--			--><?php //endif; ?>
<!--		</div>-->
<!--		<div class="container">-->
<!--				<div>-->
<!--					<ul class="col-md-12 col-sm-12 col-lg-9 text-right">-->
<!--						<li class="col-xs-12 col-sm-12 col-lg-6">-->
<!--							<a href="http://www.awd-development.com/portfolio/completed-projects/">Завершені проекти</a>-->
<!--						</li>-->
<!--						<li class="col-xs-12 col-sm-12 col-lg-6">-->
<!--							<a href="http://www.awd-development.com/portfolio/projects-in-development/">Проекти в розробці</a>-->
<!--						</li>-->
<!--					</ul>-->
<!--				</div>-->
<!--			<div class="col-md-12 col-sm-12 text-center">-->
<!--				<hr>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="row margin-top">-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12">-->
<!--				<a href="http://medhouse-mc.com" target="_blank">-->
<!--					<div class="project_overlay">-->
<!--						<div class="project_overlay-text">-->
<!--							<h3>Medhouse</h3>-->
<!--							<hr>-->
<!--							<i>приватна клініка</i>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--				<img src="--><?php //echo get_template_directory_uri() ?><!--/img/portfolio/medhouse.jpg" alt="..." />-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12">-->
<!--				<a href="http://ok-karpatu.com" target="_blank">-->
<!--					<div class="project_overlay">-->
<!--						<div class="project_overlay-text">-->
<!--							<h3>Карпати</h3>-->
<!--							<hr>-->
<!--							<i>Оздоровчий комплекс</i>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--				<img src="--><?php //echo get_template_directory_uri() ?><!--/img/portfolio/karpaty.jpg" alt="..." />-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12">-->
<!--				<a href="http://tirastec.com" target="_blank">-->
<!--					<div class="project_overlay">-->
<!--						<div class="project_overlay-text">-->
<!--							<h3>Tiras Tec</h3>-->
<!--							<hr>-->
<!--							<i>Компанія по веб-розробці</i>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--				<img src="--><?php //echo get_template_directory_uri() ?><!--/img/portfolio/tirastec.jpg" alt="..." />-->
<!--			</div>-->
<!--			<div class="col-lg-3 col-md-6 col-sm-12">-->
<!--				<a href="http://home-king.com.ua" target="_blank">-->
<!--					<div class="project_overlay">-->
<!--						<div class="project_overlay-text">-->
<!--							<h3>Home King</h3>-->
<!--							<hr>-->
<!--							<i>Інтернет магазин</i>-->
<!--						</div>-->
<!--					</div>-->
<!--				</a>-->
<!--				<img src="--><?php //echo get_template_directory_uri() ?><!--/img/portfolio/home-king.jpg" alt="..." />-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="col-lg-3 col-md-6 col-sm-12">-->
<!--			<a href="http://kulmed.com.ua" target="_blank">-->
<!--				<div class="project_overlay">-->
<!--					<div class="project_overlay-text">-->
<!--						<h3>Kulyk Medicine</h3>-->
<!--						<hr>-->
<!--						<i>Стоматологія</i>-->
<!--					</div>-->
<!--				</div>-->
<!--			</a>-->
<!--			<img src="--><?php //echo get_template_directory_uri() ?><!--/img/portfolio/kulyk.jpg" alt="..." />-->
<!--		</div>-->
<!--		</div>-->
	</section>


<?php get_footer(); ?>
