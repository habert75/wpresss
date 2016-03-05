<?php
/*
Plugin Name: taging a post
Plugin URI: http://www.habbert.com
Description: add tagz to your posts, awesome hein
Version: 1.0
Author: Habinshuti Jean Bertrand
Author URI: http://www.habbert.com
*/

add_action('publish_post','add_tag_function');
function add_tag_function(){

	$post_id=get_the_ID();
	$tags=array('Programmingg ','wordpress');
	wp_set_post_tags($post_id,$tags,true);
}

//add_filter('the_title',ucwords);

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'Custom Menu Title', 'textdomain' ),
        'custom menu',
        'manage_options',
        'custompage',
        'my_custom_menu_page',
        plugins_url( 'myplugin/images/icon.png' ),
        6
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/**
 * Display a custom menu page
 */
function my_custom_menu_page(){
    esc_html_e( 'Admin Page Test', 'textdomain' );  
}