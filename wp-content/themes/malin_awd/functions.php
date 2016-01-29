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
    register_post_type('completed_type', [
      'label'               => __('Completed projects', 'Malin'),
      'description'         => __('Completed projects', 'Malin'),
      'labels'              => [
        'name'                  => _x('Completed projects', 'Post Type General Name', 'Malin'),
        'singular_name'         => _x('Completed projects', 'Post Type Singular Name', 'Malin'),
        'menu_name'             => __('Completed projects', 'Malin'),
        'name_admin_bar'        => __('Completed projects', 'Malin'),
        'archives'              => __('Item Archives', 'Malin'),
        'parent_item_colon'     => __('Parent Item:', 'Malin'),
        'all_items'             => __('All Items', 'Malin'),
        'add_new_item'          => __('Add New Item', 'Malin'),
        'add_new'               => __('Add New', 'Malin'),
        'new_item'              => __('New Item', 'Malin'),
        'edit_item'             => __('Edit Item', 'Malin'),
        'update_item'           => __('Update Item', 'Malin'),
        'view_item'             => __('View Item', 'Malin'),
        'search_items'          => __('Search Item', 'Malin'),
        'not_found'             => __('Not found', 'Malin'),
        'not_found_in_trash'    => __('Not found in Trash', 'Malin'),
        'featured_image'        => __('Featured Image', 'Malin'),
        'set_featured_image'    => __('Set featured image', 'Malin'),
        'remove_featured_image' => __('Remove featured image', 'Malin'),
        'use_featured_image'    => __('Use as featured image', 'Malin'),
        'insert_into_item'      => __('INSERT INTO item', 'Malin'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'Malin'),
        'items_list'            => __('Items list', 'Malin'),
        'items_list_navigation' => __('Items list navigation', 'Malin'),
        'filter_items_list'     => __('Filter items list', 'Malin'),
      ],
      'supports'            => [
        'title',
        'editor',
        'excerpt',
        'author',
        'thumbnail',
        'comments',
        'trackbacks',
        'revisions',
        'custom-fields',
        'page-attributes',
        'post-formats',
      ],
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-businessman',
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    ]);
?>
<?php
    register_post_type('development_type', [
      'label'               => __('Project in development', 'Malin'),
      'description'         => __('Project in development', 'Malin'),
      'labels'              => [
        'name'                  => _x('Project in development', 'Post Type General Name', 'Malin'),
        'singular_name'         => _x('Project in development', 'Post Type Singular Name', 'Malin'),
        'menu_name'             => __('Project in development', 'Malin'),
        'name_admin_bar'        => __('Project in development', 'Malin'),
        'archives'              => __('Item Archives', 'Malin'),
        'parent_item_colon'     => __('Parent Item:', 'Malin'),
        'all_items'             => __('All Items', 'Malin'),
        'add_new_item'          => __('Add New Item', 'Malin'),
        'add_new'               => __('Add New', 'Malin'),
        'new_item'              => __('New Item', 'Malin'),
        'edit_item'             => __('Edit Item', 'Malin'),
        'update_item'           => __('Update Item', 'Malin'),
        'view_item'             => __('View Item', 'Malin'),
        'search_items'          => __('Search Item', 'Malin'),
        'not_found'             => __('Not found', 'Malin'),
        'not_found_in_trash'    => __('Not found in Trash', 'Malin'),
        'featured_image'        => __('Featured Image', 'Malin'),
        'set_featured_image'    => __('Set featured image', 'Malin'),
        'remove_featured_image' => __('Remove featured image', 'Malin'),
        'use_featured_image'    => __('Use as featured image', 'Malin'),
        'insert_into_item'      => __('INSERT INTO item', 'Malin'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'Malin'),
        'items_list'            => __('Items list', 'Malin'),
        'items_list_navigation' => __('Items list navigation', 'Malin'),
        'filter_items_list'     => __('Filter items list', 'Malin'),
      ],
      'supports'            => [
        'title',
        'editor',
        'excerpt',
        'author',
        'thumbnail',
        'comments',
        'trackbacks',
        'revisions',
        'custom-fields',
        'page-attributes',
        'post-formats',
      ],
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 5,
      'menu_icon'           => 'dashicons-businessman',
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
    ]);
?>
