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
        <!--Початок циклу-->
            <?php if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!--Далі перевіряється, чи знаходиться даний запис в рубриці uncategorized.
                        Якщо так, то блоку div, будет присвоєно кдас "post-cat-three".
                        Інакше, блоку div будет присвоено класс "post".-->
                        <?php if ( in_category('uncategorized') ) { ?>
                            <div class="post-cat-three">
                        <?php } else { ?>
                            <div class="post">
                        <?php } ?>
                            <!--Відображення заголовку як постійну ссилку на запис-->
                                <h2><a href="<?php the_permalink(); ?>"><?php the_title ?></a></h2>
                            <!--Відображення часу-->
                                <small><?php the_time('F jS, Y') ?></small>
                            <!--Відображення вмісту запису всередині div-->
                                <div class="entry">
                                    <?php the_content(); ?>
                                </div>
                            <!--Відображення списку рубрик записів, розділених комою-->
                                <p class="postmetadata">Опубліковано в <?php the_category(', '); ?></p>
                        <!--закриття першого блоку div-->
                            </div>
                            </div>
            <!--Зупинка циклу (але є ключове слово "else:")-->
                <?php endwhile; else: ?>
            <!--В першому "if" перевіряється чи існують якісь записи для виводу
                Ця частина "else" говорить що робити, якщо записів не знайшлося-->
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <!--Остаточне завершення циклу-->
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
