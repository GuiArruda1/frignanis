<?php
/**
 * Frignani's Theme Functions and Definitions
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FRIGNANIS_DIR', get_template_directory() );
define( 'FRIGNANIS_URI', get_template_directory_uri() );
define( 'FRIGNANIS_VERSION', file_exists( FRIGNANIS_DIR . '/style.css' ) ? (string) filemtime( FRIGNANIS_DIR . '/style.css' ) : '1.0.1' );

// Include Modular Inc Files
require_once FRIGNANIS_DIR . '/inc/theme-setup.php';
require_once FRIGNANIS_DIR . '/inc/acf-fields.php';

/**
 * Enqueue Theme Scripts and Styles
 */
function frignanis_enqueue_assets() {
	// Google Fonts (Playfair Display, Plus Jakarta Sans, Pinyon Script)
	wp_enqueue_style(
		'frignanis-fonts',
		'https://fonts.googleapis.com/css2?family=Pinyon+Script&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// Main Stylesheet
	wp_enqueue_style(
		'frignanis-style',
		get_stylesheet_uri(),
		array( 'frignanis-fonts' ),
		FRIGNANIS_VERSION
	);

	// Main Vanilla JavaScript
	wp_enqueue_script(
		'frignanis-main',
		FRIGNANIS_URI . '/js/main.js',
		array(),
		FRIGNANIS_VERSION,
		array(
			'strategy'  => 'defer',
			'in_footer' => true,
		)
	);
}
add_action( 'wp_enqueue_scripts', 'frignanis_enqueue_assets' );

/**
 * Preconnect for Google Fonts to improve Core Web Vitals (LCP)
 */
function frignanis_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.googleapis.com',
		);
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'frignanis_resource_hints', 10, 2 );

/**
 * Clean up unnecessary WordPress head bloat for speed and privacy
 */
function frignanis_cleanup_head() {
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
}
add_action( 'init', 'frignanis_cleanup_head' );
