<?php
////Register Custom Style
//function custom_styles() {
//
//    $cssPath = get_template_directory_uri().'/css/';
//
//    wp_register_style( 'jquery.mCustomScrollbar', $cssPath.'jquery.mCustomScrollbar.css', 'style.css', 'false' );
//    wp_enqueue_style( 'jquery.mCustomScrollbar' );
//
//}
//add_action( 'wp_enqueue_scripts', 'custom_styles' );
//?>

<?php
//Register Custom Script
function custom_script() {

    $jsPath = get_template_directory_uri().'/js/';

    wp_register_script( 'modernizr', $jsPath.'modernizr.js', false, false, false);
    wp_enqueue_script( 'modernizr' );
    wp_register_script('jquery_min', $jsPath.'jquery.min.js', false, false, false);
    wp_enqueue_script('jquery_min');
    wp_register_script('jquery_easings_min', $jsPath.'jquery.easings.min.js', false, false, false);
    wp_enqueue_script('jquery_easings_min');
    wp_register_script('bootstrap_min', $jsPath.'bootstrap.min.js', false, false, true);
    wp_enqueue_script('bootstrap_min');
    wp_register_script('google_map', 'http://maps.google.com/maps/api/js?sensor=false', false, false, true);
    wp_enqueue_script('google_map');
    wp_register_script('countdown', $jsPath.'countdown.js', false, false, true);
    wp_enqueue_script('countdown');
    wp_register_script('notifyMe', $jsPath.'notifyMe.js', false, false, true);
    wp_enqueue_script('notifyMe');
    wp_register_script('contact-me', $jsPath.'contact-me.js', false, false, true);
    wp_enqueue_script('contact-me');
    wp_register_script('jquery_swipebox', $jsPath.'jquery.swipebox.js', false, false, false);
    wp_enqueue_script('jquery_swipebox');
    wp_register_script('animated-headlines', $jsPath.'animated-headlines.js', false, false, true);
    wp_enqueue_script('animated-headlines');
    wp_register_script('jquery_mousewheel', $jsPath.'jquery.mousewheel.js', false, false, false);
    wp_enqueue_script('jquery_mousewheel');
    wp_register_script('constellation', $jsPath.'constellation.js', false, false, true);
    wp_enqueue_script('constellation');
    wp_register_script('vegas', $jsPath.'vegas.js', false, false, true);
    wp_enqueue_script('vegas');
    wp_register_script('jquery_mCustomScrollbar', $jsPath.'jquery.mCustomScrollbar.js', false, false, false);
    wp_enqueue_script('jquery_mCustomScrollbar');
    wp_register_script('main', $jsPath.'main.js', false, false, true);
    wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'custom_script' );
?>
