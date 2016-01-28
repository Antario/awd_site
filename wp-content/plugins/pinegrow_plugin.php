<?php
/**
 * @package Pinegrow WordPress Plugin
 * @version 1.0
 */
/*
 Plugin Name: Pinegrow WordPress Plugin
 Plugin URI: http://pinegrow.com/wordpress
 Description: A simple plugin that is used by Pinegrow to render a specific theme .php file. The plugin lets Pinegrow render temp theme files instead of regular theme files. This plugin is onlu used while editing your theme in Pinegrow. Do not activate it on your production site.
 Author: Matjaz Trontelj
 Version: 1.0
 Author URI: http://pinegrow.com
 */

function pgwp_choose_page($template) {
    $force = get_query_var("pgwp_template");
    if(!empty($force)) {
        $template = locate_template(array($force));
    }
    return $template;
}

function pgwp_comments_template($template) {
    $prefix = get_query_var("pgwp_include_prefix");
    if(!empty($prefix)) {
        $template = locate_template(array( $prefix.basename( $template )));
    }
    return $template;
}

add_action( "template_include", "pgwp_choose_page" );
add_action( "comments_template", "pgwp_comments_template" );

function add_query_vars($vars) {
    $vars[] = "pgwp_template";
    $vars[] = "pgwp_include_prefix";
    return $vars;
}

add_filter("query_vars", "add_query_vars");

?>
