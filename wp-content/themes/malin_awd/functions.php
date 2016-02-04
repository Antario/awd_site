<?php
/**
 * malin_awd functions and definitions
 * @package WordPress
 * @subpackage malin_awd
 * @since malin_awd 1.0
 */
?>
<?php
//Register Custom Style
function custom_styles() {

    $cssPath = get_template_directory_uri().'/css/';

    wp_register_style( 'jquery.mCustomScrollbar', $cssPath.'jquery.mCustomScrollbar.css', 'style.css', 'false' );
    wp_enqueue_style( 'jquery.mCustomScrollbar' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles' );
?>

<?php
//Register Custom Script
function custom_script() {

    $jsPath = get_template_directory_uri().'/js/';

    wp_register_script( 'modernizr', $jsPath.'modernizr.js', false, false, true);
    wp_enqueue_script( 'modernizr' );
    wp_register_script('jquery_min', $jsPath.'jquery.min.js', false, false, true);
    wp_enqueue_script('jquery_min');
    wp_register_script('jquery_easings_min', $jsPath.'jquery.easings.min.js', false, false, true);
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
    wp_register_script('jquery_swipebox', $jsPath.'jquery.swipebox.js', false, false, true);
    wp_enqueue_script('jquery_swipebox');
    wp_register_script('animated-headlines', $jsPath.'animated-headlines.js', false, false, true);
    wp_enqueue_script('animated-headlines');
    wp_register_script('jquery_mousewheel', $jsPath.'jquery.mousewheel.js', false, false, true);
    wp_enqueue_script('jquery_mousewheel');
    wp_register_script('constellation', $jsPath.'constellation.js', false, false, true);
    wp_enqueue_script('constellation');
    wp_register_script('vegas', $jsPath.'vegas.js', false, false, true);
    wp_enqueue_script('vegas');
    wp_register_script('jquery_mCustomScrollbar', $jsPath.'jquery.mCustomScrollbar.js', false, false, true);
    wp_enqueue_script('jquery_mCustomScrollbar');
    wp_register_script('main', $jsPath.'main.js', false, false, true);
    wp_enqueue_script('main');

}
add_action( 'wp_enqueue_scripts', 'custom_script' );
?>
<?php
function theme_features()  {

    show_admin_bar( false );
}
add_action( 'init', 'theme_features' );
?>
<?php
    add_theme_support( 'post-thumbnails' );
?>
<?php
    // Register Custom Post Type
    function portfolio() {

        $labels = [
          'name'                  => _x( 'Портфоліо', 'Post Type General Name', 'text_domain' ),
          'singular_name'         => _x( 'Портфоліо', 'Post Type Singular Name', 'text_domain' ),
          'menu_name'             => __( 'Портфоліо', 'text_domain' ),
          'name_admin_bar'        => __( 'Портфоліо', 'text_domain' ),
          'archives'              => __( 'Item Archives', 'text_domain' ),
          'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
          'all_items'             => __( 'Всі записи', 'text_domain' ),
          'add_new_item'          => __( 'Додати новий запис', 'text_domain' ),
          'add_new'               => __( 'Додати запис', 'text_domain' ),
          'new_item'              => __( 'New Item', 'text_domain' ),
          'edit_item'             => __( 'Edit Item', 'text_domain' ),
          'update_item'           => __( 'Update Item', 'text_domain' ),
          'view_item'             => __( 'View Item', 'text_domain' ),
          'search_items'          => __( 'Search Item', 'text_domain' ),
          'not_found'             => __( 'Not found', 'text_domain' ),
          'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
          'featured_image'        => __( 'Featured Image', 'text_domain' ),
          'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
          'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
          'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
          'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
          'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
          'items_list'            => __( 'Items list', 'text_domain' ),
          'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
          'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
        ];
        $rewrite = [
          'slug'                  => 'http://www.awd-development.com/portfolio/',
          'with_front'            => true,
          'pages'                 => true,
          'feeds'                 => true,
        ];
        $args = [
          'label'                 => __( 'portfolio', 'text_domain' ),
          'description'           => __( 'portfolio', 'text_domain' ),
          'labels'                => $labels,
          'supports'              => [ 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments',
            'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ],
          'taxonomies'            => [ 'category', 'post_tag' ],
          'hierarchical'          => false,
          'public'                => true,
          'show_ui'               => true,
          'show_in_menu'          => true,
          'menu_position'         => 5,
          'show_in_admin_bar'     => true,
          'show_in_nav_menus'     => true,
          'can_export'            => true,
          'has_archive'           => true,
          'exclude_from_search'   => false,
          'publicly_queryable'    => true,
          'query_var'             => 'post_type',
          'rewrite'               => $rewrite,
          'capability_type'       => 'page',
        ];
        register_post_type( 'portfolio', $args );

    }
    add_action( 'init', 'portfolio', 0 );
?>