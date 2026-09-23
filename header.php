<?php
/**
 * The header for Frignani's theme
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#primary-content">
	<?php esc_html_e( 'Skip to content', 'frignanis' ); ?>
</a>

<header id="masthead" class="site-header" role="banner">
	<div class="site-container">
		<div class="site-header__inner">
			
			<!-- Branding / Logo -->
			<div class="site-header__branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo-link" rel="home" aria-label="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					<?php
					if ( has_custom_logo() ) {
						the_custom_logo();
					} else {
						?>
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/logo-fundo-escuro-web.png' ); ?>" 
							 alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
							 class="site-header__logo-img site-header__logo-img--dark" 
							 width="58" 
							 height="74" />
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/logo-fundo-claro-web.png' ); ?>" 
							 alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
							 class="site-header__logo-img site-header__logo-img--light" 
							 width="58" 
							 height="74" />
						<?php
					}
					?>
				</a>
			</div>

			<!-- Mobile Navigation Toggle -->
			<button class="site-header__nav-toggle" aria-controls="primary-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'frignanis' ); ?>">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<line x1="3" y1="12" x2="21" y2="12"></line>
					<line x1="3" y1="6" x2="21" y2="6"></line>
					<line x1="3" y1="18" x2="21" y2="18"></line>
				</svg>
			</button>

			<!-- Primary Navigation -->
			<nav id="primary-navigation" class="site-header__nav" role="navigation" aria-label="<?php esc_attr_e( 'Main Menu', 'frignanis' ); ?>">
				<?php
				if ( has_nav_menu( 'primary' ) ) {
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_class'     => 'site-header__nav-list',
							'container'      => false,
							'fallback_cb'    => false,
							'depth'          => 1,
						)
					);
				} else {
					$is_about   = is_page( 'about' ) || is_page( 'sobre-nos' ) || is_page_template( 'page-about.php' );
					$is_contact = is_page( 'contact' ) || is_page( 'contato' ) || is_page_template( 'page-contact.php' ) || is_page_template( 'page-contato.php' );
					?>
					<ul class="site-header__nav-list">
						<li class="site-header__nav-item">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__nav-link <?php echo is_front_page() ? 'is-active' : ''; ?>">
								<?php esc_html_e( 'Home', 'frignanis' ); ?>
							</a>
						</li>
						<?php /* Categories temporarily disabled per request */ ?>
						<li class="site-header__nav-item">
							<a href="<?php echo esc_url( home_url( '/sobre-nos/' ) ); ?>" class="site-header__nav-link <?php echo $is_about ? 'is-active' : ''; ?>">
								<?php esc_html_e( 'About Us', 'frignanis' ); ?>
							</a>
						</li>
						<li class="site-header__nav-item">
							<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="site-header__nav-link <?php echo $is_contact ? 'is-active' : ''; ?>">
								<?php esc_html_e( 'Contact', 'frignanis' ); ?>
							</a>
						</li>
					</ul>
					<?php
				}
				?>
			</nav>

			<!-- Header Action Button -->
			<div class="site-header__action">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-header-contact">
					<?php esc_html_e( 'CONTACT US', 'frignanis' ); ?>
				</a>
			</div>

		</div>
	</div>
</header>

<main id="primary-content" class="site-main" role="main">
