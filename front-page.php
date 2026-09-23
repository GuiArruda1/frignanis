<?php
/**
 * The template for displaying the front page
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// Homepage Luxury Splash Screen / Welcome Curtain
get_template_part( 'template-parts/splash-screen' );

// Hero Section
get_template_part( 'template-parts/hero' );

// 3-Panel Editorial Overview Triptych (Heritage, Mission, Products)
get_template_part( 'template-parts/overview-triptych' );

// Mission / About Section
get_template_part( 'template-parts/mission' );

// Categories / "What we export" Section
get_template_part( 'template-parts/categories' );

get_footer();
