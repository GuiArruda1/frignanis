<?php
/**
 * Frignani's Theme Setup
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Theme Supports & Nav Menus
 */
function frignanis_theme_setup() {
	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable featured images / post thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 800, true );

	// Custom Image Sizes for Editorial Photography
	add_image_size( 'editorial-portrait', 600, 800, true );
	add_image_size( 'editorial-square', 700, 700, true );

	// HTML5 markup support
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Custom Logo support
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Navigation Menus
	register_nav_menus(
		array(
			'primary' => esc_html__( 'Primary Header Navigation', 'frignanis' ),
			'footer'  => esc_html__( 'Footer Navigation Links', 'frignanis' ),
		)
	);
}
add_action( 'after_setup_theme', 'frignanis_theme_setup' );
