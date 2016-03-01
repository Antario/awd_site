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
</section>


<?php get_footer(); ?>
