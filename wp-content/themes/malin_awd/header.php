<?php
/**
 * The Header for our theme
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage malin_awd
 * @since malin_awd 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://awd-development.com.ua/wp-content/uploads/2016/01/favicon.png">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://awd-development.com/wp-content/uploads/2016/01/favicon-retina-ipad.png">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://awd-development.com/wp-content/uploads/2016/01/favicon-retina-iphone.png">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://awd-development.com/wp-content/uploads/2016/01/favicon-standard-ipad.png">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://awd-development.com/wp-content/uploads/2016/01/favicon-standard-iphone.png">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php if ( is_singular() && pings_open(get_queried_object() ) ) : ?>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php endif; ?>
    <!-- ============== Resources style ============== -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,600,700|PT+Sans:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
   <?php include_once("analyticstracking.php") ?>
    <button class="open-menu-mobile">
        <i class="icon ion-navicon-round opening-menu"></i>
        <i class="icon ion-close-round closing-menu display-none"></i>
    </button>

    <div id="navigation" class="mobile-nav animated-middle">

        <ul class="main-navigation">

            <li>
                <a class="nav-link-close" href="http://awd-development.com/">
                    <i class="icon ion-ios-home-outline"></i>
                    Головна
                </a>
            </li>

            <li>
                <a class="nav-link about-content" href="http://awd-development.com/about">
                    <i class="icon ion-ios-people-outline"></i>
                    Про нас
                </a>
            </li>

            <li>
                <a class="nav-link services-content" href="http://awd-development.com/portfolio">
                    <i class="ion-ios-camera-outline"></i>
                    Портфоліо
                </a>
            </li>

            <li>
                <a class="nav-link contact-content" href="http://awd-development.com/contact">
                    <i class="icon ion-ios-chatbubble-outline"></i>
                    Контакти
                </a>
            </li>

            <li class="newsletter-color">
                <a class="open-newsletter" href="http://www.awd-development.com/news">
                    <i class="icon ion-ios-bell-outline"></i>
                    Новини
                </a>
            </li>

        </ul> <!-- CLOSE Main nav -->

        <ul class="bottom-nav">

            <li class="twitter-color">
                <a href="https://vk.com/awd_development" title="" target="_blank">
                    <i class="ion-social-vimeo-outline"></i>
                    VK
                </a>
            </li>

            <li class="facebook-color">
                <a href="https://www.facebook.com/groups/1691436421071921/" title="" target="_blank">
                    <i class="icon ion-social-facebook-outline"></i>
                    Facebook
                </a>
            </li>

        </ul> <!-- CLOSE .bottom-nav -->

    </div> <!-- CLOSE #navigation -->
