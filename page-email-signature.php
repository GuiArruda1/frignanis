<?php
/**
 * Template Name: Email Signature Showcase
 * Template Post Type: page
 *
 * The template for displaying the interactive email signature showcase.
 * Loads the standalone HTML showcase file.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the standalone HTML email signature showcase
require_once get_template_directory() . '/email-signature.html';
exit;
