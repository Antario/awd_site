<?php
/**
 * The default template for displaying content
 */
?>
    <section id="home-part" class="scale-max">
        <div class="overlay">
            <canvas id="constellation"></canvas>
        </div>
    </section>
    <section id="project_news">
        <div class="row_news">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <article class="news_background" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php echo get_the_post_thumbnail($page->ID, 'large'); ?>

                        <header class="entry-header">
                            <?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
                                <?php
			endif;

			if ( is_single() ) :
				the_title( '<h2 class="entry-title">', '</h2>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
		?>
                                    <div class="entry-meta">
                                        <?php
				if ( 'post' == get_post_type() )
					twentyfourteen_posted_on();

				if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
			?>

                                            <?php
				endif;

			?>
                                    </div>
                                    <!-- .entry-meta -->

                                    <hr/>
                        </header>
                        <!-- .entry-header -->

                        <?php if ( is_search() ) : ?>
                            <div class="entry-summary">
                                <?php the_excerptrpt(); ?>
                            </div>
                            <!-- .entry-summary -->
                            <?php else : ?>
                                <div class="entry-content">
                                    <?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
                                </div>
                                <!-- .entry-content -->
                                <?php endif; ?>

                                    <?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
                </article>
                <!-- #post-## -->
            </div>
