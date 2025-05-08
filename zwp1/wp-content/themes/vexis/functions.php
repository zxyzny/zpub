<?php
/**
 * Theme bootstrap functions.
 *
 * @package Vexis
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'VEXIS_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'VEXIS_VERSION', '1.0.3' );
}

if ( ! function_exists( 'vexis_asset_url' ) ) {
	/**
	 * Return vexis theme folder asset url
	 * 
	 * @param mixed $path
	 * @return string
	 */
	function vexis_asset_url( $path ) {
		return trailingslashit( get_stylesheet_directory_uri() ) . 'assets/' . $path;
	}

}

if ( ! function_exists( 'vexis_the_asset_url' ) ) {
	/**
	 * Echo vexis theme folder asset url
	 * 
	 * @param mixed $path
	 * @return void
	 */
	function vexis_the_asset_url( $path ) {
		echo esc_url( vexis_asset_url( $path ) );
	}

}

if ( ! function_exists( 'vexis_register_block_pattern_category' ) ) {
	/**
	 * Register vexis pattern category
	 * 
	 * @return void
	 */
	function vexis_register_block_pattern_category() {
		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category( 'vexis', array(
				'label' => __( 'Vexis Theme', 'vexis' )
			) );
		}
	}

}

add_action( 'init', 'vexis_register_block_pattern_category' );


function vexis_template_part_areas( array $areas ) {
	$areas[] = array(
		'area' => 'posts',
		'area_tag' => 'section',
		'label' => __( 'Posts', 'vexis' ),
		'description' => __( 'Displaying posts.', 'vexis' ),
		'icon' => 'layout'
	);

	$areas[] = array(
		'area' => 'footer',
		'area_tag' => 'footer',
		'label' => __( 'Footer', 'vexis' ),
		'description' => __( 'Footer', 'vexis' ),
		'icon' => 'layout'
	);

	$areas[] = array(
		'area' => 'site-sidebar',
		'area_tag' => 'aside',
		'label' => __( 'Site wide sidebar', 'vexis' ),
		'description' => __( 'Site wide sidebar', 'vexis' ),
		'icon' => 'layout'
	);
	
	$areas[] = array(
		'area' => 'sidebar',
		'area_tag' => 'aside',
		'label' => __( 'Sidebar', 'vexis' ),
		'description' => __( 'Sidebar', 'vexis' ),
		'icon' => 'layout'
	);

	return $areas;
}

add_filter( 'default_wp_template_part_areas', 'vexis_template_part_areas' );

//
// Theme dashboard hook
//
if ( ! function_exists( 'vexis_theme_screenshot' ) ) {
	function vexis_theme_screenshot() {
		return trailingslashit( get_stylesheet_directory_uri() ) . 'screenshot.png';
	}

}
add_filter( 'plover_welcome_theme_screenshot', 'vexis_theme_screenshot' );

if ( ! function_exists( 'vexis_support_forum_url' ) ) {
	function vexis_support_forum_url() {
		return 'https://wordpress.org/support/theme/vexis/';
	}

}
add_filter( 'plover_theme_support_forum_url', 'vexis_support_forum_url' );

if ( ! function_exists( 'vexis_rate_us_url' ) ) {
	function vexis_rate_us_url() {
		return 'https://wordpress.org/support/theme/vexis/reviews/?rate=5#new-post';
	}

}
add_filter( 'plover_theme_rate_us_url', 'vexis_rate_us_url' );

if ( ! function_exists( 'vexis_default_color_mode' ) ) {
	function vexis_default_color_mode() {
		return 'light';
	}
}
add_filter( 'plover_theme_default_color_mode', 'vexis_default_color_mode' );

if ( ! function_exists( 'vexis_enqueue_main_style' ) ) {
	function vexis_enqueue_main_style() {
		wp_enqueue_style( 'vexis-style', get_stylesheet_uri(), array(), VEXIS_VERSION );
	}
}
add_action( 'wp_enqueue_scripts', 'vexis_enqueue_main_style' );
add_action( 'enqueue_block_assets', 'vexis_enqueue_main_style' );
