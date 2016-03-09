<?php
/*
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after
* @package WordPress
* @subpackage malin_awd
* @since malin_awd 1.0
*/
?>
<!--Підключення картинок на фон, скрипт vegas.js-->
<script>
	var vegasImage = [
                { src: '<?php echo get_template_directory_uri(); ?>/img/4.png' },
                { src: '<?php echo get_template_directory_uri(); ?>/img/2.png' },
                { src: '<?php echo get_template_directory_uri(); ?>/img/3.jpg' },
            ]
</script>
<!-- Language selection -->
<!--<p class="lang">-->
<!--	<a href="" class="active">EN</a><span> | </span>-->
<!--	<a href="">UA</a>-->
<!--</p>-->

<!-- Copyright -->
<p class="copyright">©AWD Development 2015</p>
<?php wp_footer(); ?>
</body>
</html>
