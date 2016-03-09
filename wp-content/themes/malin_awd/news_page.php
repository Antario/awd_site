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
<section id="project">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">
    <article class="news_background">
        <?php
        $temp = $wp_query; $wp_query= null;
        $wp_query = new WP_Query(); $wp_query->query('showposts=10' . '&paged='.$paged);
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <h3><a href="<?php the_permalink(); ?>" title="Читати дальше"><?php the_title(); ?></a></h3>
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('small') ?></a>
        <?php the_excerpt(); ?>

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
