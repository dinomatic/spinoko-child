<?php
/**
 * Spinoko Child Theme functions and definitions.
 *
 * @package Spinoko
 */

/**
 * Enqueue parent theme styles.
 */
function spinoko_child_enqueue_parent_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'spinoko_child_enqueue_parent_styles' );
