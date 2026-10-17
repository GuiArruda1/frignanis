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

/**
 * Filter primary navigation items: replace Categories with Mission & Services
 */
function frignanis_filter_primary_nav_menu_items( $items, $args ) {
	if ( ! empty( $args->theme_location ) && 'primary' === $args->theme_location ) {
		$has_mission = false;
		foreach ( $items as $key => $item ) {
			// If item is Categories / Categorias, transform it to Mission & Services
			if ( stripos( $item->title, 'Categories' ) !== false || stripos( $item->title, 'Categorias' ) !== false || stripos( $item->url, 'categories' ) !== false || stripos( $item->url, 'categorias' ) !== false ) {
				$item->title = esc_html__( 'Mission & Services', 'frignanis' );
				$item->url   = home_url( '/mission-and-services/' );
				$has_mission = true;
			}
			if ( stripos( $item->title, 'Mission' ) !== false || stripos( $item->title, 'Missão' ) !== false || stripos( $item->url, 'mission' ) !== false || stripos( $item->url, 'missao' ) !== false ) {
				$has_mission = true;
			}
		}
	}
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'frignanis_filter_primary_nav_menu_items', 10, 2 );

