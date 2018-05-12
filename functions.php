<?php
/**
 * Rinzai child theme functions and definitions.
 */

/**
 * Enqueue theme scripts and styles.
 */
function rinzai_child_scripts_and_styles() {
    $parent_style = 'rinzai-style';
    
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'rinzai_child_scripts_and_styles' );
