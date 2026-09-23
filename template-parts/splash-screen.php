<?php
/**
 * Template Part: Luxury Splash Screen / Welcome Curtain
 *
 * Displays an intro splash screen on the homepage inspired by the
 * Italian wine harvest, golden crest logo, tricolor ribbon, and
 * the calligraphy tagline "Una passione ... Mille Sapori".
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$splash_tagline_1 = function_exists( 'get_field' ) && get_field( 'splash_tagline_line1' )
	? get_field( 'splash_tagline_line1' )
	: esc_html__( 'Una passione ...', 'frignanis' );

$splash_tagline_2 = function_exists( 'get_field' ) && get_field( 'splash_tagline_line2' )
	? get_field( 'splash_tagline_line2' )
	: esc_html__( '... Mille Sapori', 'frignanis' );

$splash_image = function_exists( 'get_field' ) && get_field( 'splash_image' )
	? get_field( 'splash_image' )
	: get_template_directory_uri() . '/assets/images/splash-wine-inspiration.jpg';
?>

<!-- ==========================================
     HOMEPAGE LUXURY SPLASH SCREEN
     ========================================== -->
<div id="splash-screen" class="splash-screen" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( "Benvenuti a Frignani's", 'frignanis' ); ?>">
	
	<!-- Ambient Background Glow & Shimmer -->
	<div class="splash-screen__backdrop"></div>

	<div class="splash-screen__content">
		
		<!-- 1. Header Branding & Italian Flag -->
		<header class="splash-screen__header">
			<div class="splash-screen__logo-wrap">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/logo-fundo-escuro-web.png' ); ?>" 
					 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
					 class="splash-screen__logo" 
					 width="96" 
					 height="122" />
			</div>
			
			<div class="splash-screen__flag" aria-label="<?php esc_attr_e( 'Italian Origin Flag', 'frignanis' ); ?>">
				<span class="splash-screen__flag-color splash-screen__flag-color--green"></span>
				<span class="splash-screen__flag-color splash-screen__flag-color--white"></span>
				<span class="splash-screen__flag-color splash-screen__flag-color--red"></span>
			</div>
		</header>

		<!-- 2. Arched Luxury Wine & Harvest Visual -->
		<div class="splash-screen__visual">
			<div class="splash-screen__arch-frame">
				<!-- Gold accent arch curve -->
				<div class="splash-screen__gold-arc" aria-hidden="true"></div>
				
				<img src="<?php echo esc_url( $splash_image ); ?>" 
					 alt="<?php esc_attr_e( 'Fine Italian Wine and Vineyard Harvest', 'frignanis' ); ?>" 
					 class="splash-screen__img" />
				
				<div class="splash-screen__img-overlay" aria-hidden="true"></div>

				<!-- 3. Italian Script Tagline: "Una passione ... Mille Sapori" -->
				<div class="splash-screen__tagline-wrap">
					<p class="splash-screen__tagline-text splash-screen__tagline-text--1">
						<?php echo esc_html( $splash_tagline_1 ); ?>
					</p>
					<p class="splash-screen__tagline-text splash-screen__tagline-text--2">
						<?php echo esc_html( $splash_tagline_2 ); ?>
					</p>
				</div>
			</div>
		</div>

		<!-- 4. Enter / Skip Button -->
		<footer class="splash-screen__footer">
			<button type="button" id="splash-enter-btn" class="splash-screen__btn" aria-label="<?php esc_attr_e( 'Enter website', 'frignanis' ); ?>">
				<span><?php esc_html_e( 'Entrar', 'frignanis' ); ?></span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<line x1="5" y1="12" x2="19" y2="12"></line>
					<polyline points="12 5 19 12 12 19"></polyline>
				</svg>
			</button>
			<span class="splash-screen__hint"><?php esc_html_e( 'Clique em qualquer lugar para continuar', 'frignanis' ); ?></span>
		</footer>

	</div>
</div>
