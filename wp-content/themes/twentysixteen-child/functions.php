<?php

add_action( 'wp_enqueue_scripts', 'parent_theme_styles' );
function parent_theme_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

