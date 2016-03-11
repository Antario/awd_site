<?php
/*
*Template Name: News Template
*/
?>
<?php get_header(); ?>
<section id="home-part" class="scale-max">
	<div class="overlay">
		<canvas id="constellation"></canvas>
	</div>
</section>
<section id="project_news">
    <div class="row_news">
        <div class="col-xs-12 col-sm-12 col-lg-12">
    <article class="news_background">
        <?php
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


        <h3><a href="<?php the_permalink(); ?>" title="Читати дальше"><?php the_title(); ?></a></h3>
        <p class="post_excert"><?php main_excerpt(); ?></p>
        <a class="img_post" href="<?php the_permalink() ?>" title="Читати дальше"><?php echo get_the_post_thumbnail($page->ID, 'thumbnail'); ?></a><hr/>

        <?php endwhile; ?>

        <?php if ($paged > 1) { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
            <div class="next"><?php previous_posts_link('Newer Posts &raquo;'); ?></div>
        </nav>

        <?php } else { ?>

        <nav id="nav-posts">
            <div class="prev"><?php next_posts_link('&laquo; Previous Posts'); ?></div>
        </nav>

        <?php } ?>

        <?php wp_reset_postdata(); ?>

    </article>

<?php get_footer(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
