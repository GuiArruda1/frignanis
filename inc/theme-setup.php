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
 * Filter primary navigation items: translate all menu items according to active language
 */
function frignanis_filter_primary_nav_menu_items( $items, $args ) {
	if ( ! empty( $args->theme_location ) && 'primary' === $args->theme_location ) {
		foreach ( $items as $key => $item ) {
			$title = trim( $item->title );
			$url   = $item->url ? $item->url : '';

			// 1. Home / Início
			if ( '/' === rtrim( (string) parse_url( $url, PHP_URL_PATH ), '/' ) || '' === (string) parse_url( $url, PHP_URL_PATH ) || strcasecmp( $title, 'Home' ) === 0 || strcasecmp( $title, 'Início' ) === 0 ) {
				$item->title = frignanis_t( 'Home', 'Início', 'Home', 'Accueil', 'Inicio', 'Startseite' );
				continue;
			}

			// 2. Mission & Services / Missão e Serviços
			if ( stripos( $url, 'mission' ) !== false || stripos( $url, 'missao' ) !== false || stripos( $title, 'Mission' ) !== false || stripos( $title, 'Missão' ) !== false ) {
				$item->title = frignanis_t( 'Mission & Services', 'Missão e Serviços', 'Missione e Servizi', 'Mission et Services', 'Misión y Servicios', 'Mission & Dienstleistungen' );
				continue;
			}

			// 3. Categories / Categorias
			if ( stripos( $url, 'categor' ) !== false || stripos( $title, 'Categor' ) !== false ) {
				$item->title = frignanis_t( 'Categories', 'Categorias', 'Categorie', 'Catégories', 'Categorías', 'Kategorien' );
				continue;
			}

			// 4. About Us / Sobre Nós / Quem Somos
			if ( stripos( $url, 'about' ) !== false || stripos( $url, 'sobre' ) !== false || stripos( $url, 'quem-somos' ) !== false || stripos( $title, 'About' ) !== false || stripos( $title, 'Sobre' ) !== false || stripos( $title, 'Quem Somos' ) !== false ) {
				$item->title = frignanis_t( 'About Us', 'Sobre Nós', 'Chi Siamo', 'À Propos', 'Sobre Nosotros', 'Über Uns' );
				continue;
			}

			// 5. Contact / Contato
			if ( stripos( $url, 'contact' ) !== false || stripos( $url, 'contat' ) !== false || stripos( $title, 'Contact' ) !== false || stripos( $title, 'Contato' ) !== false ) {
				$item->title = frignanis_t( 'Contact', 'Contato', 'Contatto', 'Contact', 'Contacto', 'Kontakt' );
				continue;
			}
		}
	}
	return $items;
}
add_filter( 'wp_nav_menu_objects', 'frignanis_filter_primary_nav_menu_items', 10, 2 );

