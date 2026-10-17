<?php
/**
 * Template Name: Sobre Nós / About Us
 * Template Post Type: page
 *
 * Legacy redirect/include for Sobre Nós to the unified English About Us page.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Load the canonical About page layout
require get_template_directory() . '/page-about.php';
