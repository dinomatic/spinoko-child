<?php
/**
 * Spinoko additional navigation.
 *
 * @see https://docs.dinomatic.com/docs/spinoko/navigation#additional-navigation
 *
 * @package Spinoko Child
 */

if ( ! function_exists( 'spinoko_register_additional_nav_menu' ) ) {
	/**
	 * Register additional nav menu.
	 *
	 * @return void
	 */
	function spinoko_register_additional_nav_menu() {

		register_nav_menus( array(
			'menu-additional' => esc_html__( 'Additional', 'spinoko' ),
		) );
	}
	add_action( 'after_setup_theme', 'spinoko_register_additional_nav_menu' );
}

if ( ! function_exists( 'spinoko_display_additional_nav_menu' ) ) {
	/**
	 * Display the additional nav menu.
	 *
	 * @return void
	 */
	function spinoko_display_additional_nav_menu() {
		?>

		<nav class="additional-navigation">

		<?php
		wp_nav_menu( array(
			'theme_location' => 'menu-additional',
			'menu_id'        => 'additional-menu',
			'menu_class'     => 'additional-menu flex items-center justify-end px-4',
		) );
		?>

		</nav>
		<?php
	}
	add_action( 'spinoko_header', 'spinoko_display_additional_nav_menu', 12 );
}
