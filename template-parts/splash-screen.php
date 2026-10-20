<?php
/**
 * Template Part: Luxury Splash Screen / Welcome Curtain
 *
 * An elevated welcoming animation centered on the noble Frignani's Crest,
 * with subtle breathing radiance, Italian tricolor, and an elegant
 * "Italy · Luxembourg" trade axis loader that gracefully bridges the two worlds.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$splash_tagline_1 = function_exists( 'get_field' ) && get_field( 'splash_tagline_line1' )
	? get_field( 'splash_tagline_line1' )
	: esc_html__( 'The bridge between Italy and the world', 'frignanis' );

$splash_tagline_2 = function_exists( 'get_field' ) && get_field( 'splash_tagline_line2' )
	? get_field( 'splash_tagline_line2' )
	: esc_html__( 'A ponte entre a Itália e o mundo', 'frignanis' );
?>

<!-- ==========================================
     HOMEPAGE LUXURY SPLASH SCREEN
     ========================================== -->
<div id="splash-screen" class="splash-screen" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e( "Benvenuti a Frignani's", 'frignanis' ); ?>">
	
	<!-- Ambient Background Glow & Celestial Shimmer -->
	<div class="splash-screen__backdrop">
		<div class="splash-screen__radial-glow"></div>
		<div class="splash-screen__ambient-ring"></div>
	</div>

	<div class="splash-screen__content">
		
		<!-- 1. Central Hero Emblem & Logo Animation -->
		<div class="splash-screen__emblem-stage">
			<div class="splash-screen__halo" aria-hidden="true"></div>
			
			<div class="splash-screen__logo-wrap">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/logo-fundo-escuro-web.png' ); ?>" 
					 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
					 class="splash-screen__logo" 
					 width="600" 
					 height="760" />
			</div>

			<!-- Italian Tricolor Ribbon Accent -->
			<div class="splash-screen__flag" aria-label="<?php esc_attr_e( 'Italian Origin Flag', 'frignanis' ); ?>">
				<span class="splash-screen__flag-color splash-screen__flag-color--green"></span>
				<span class="splash-screen__flag-color splash-screen__flag-color--white"></span>
				<span class="splash-screen__flag-color splash-screen__flag-color--red"></span>
			</div>
		</div>

		<!-- 2. Italy <-> Luxembourg Geographic Map Axis Dynamic Loader -->
		<div class="splash-screen__axis" aria-label="<?php esc_attr_e( 'Connecting Italy and Luxembourg', 'frignanis' ); ?>">
			
			<!-- Italy Geographical Map Card & Origin Node -->
			<div class="splash-screen__map-card splash-screen__map-card--italy">
				<div class="splash-screen__map-frame">
					<!-- Italy High-Fidelity Geographic Map Silhouette -->
					<svg class="splash-screen__country-map splash-screen__country-map--italy" viewBox="0 0 100 135" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Mappa d'Italia">
						<!-- Continental North + Apennine Peninsula / Boot + Calabria + Sicily -->
						<path class="splash-screen__map-shape" d="M 44.6 15.8 L 46.8 16.3 L 47.4 18.2 L 50.4 20.4 L 56.9 21.2 L 57.8 22.1 L 57.3 25.1 L 57.8 27.7 L 59.1 29.6 L 59.3 31.2 L 58.4 32.5 L 54.1 31.6 L 51.5 32.7 L 48.5 35.3 L 49.4 38.3 L 48.5 41.5 L 49.1 45.4 L 57.5 51.6 L 59.5 55.3 L 60.4 59.4 L 63.4 63.5 L 68.3 67.2 L 72.9 66.7 L 75.9 67.4 L 77.0 69.3 L 76.3 70.8 L 77.6 73.0 L 82.8 74.7 L 85.4 77.1 L 89.0 78.4 L 91.2 81.0 L 92.5 81.6 L 94.0 85.1 L 92.9 88.5 L 92.3 89.0 L 89.0 88.3 L 88.0 85.9 L 83.6 83.8 L 82.6 83.8 L 80.6 85.5 L 80.2 88.7 L 83.9 91.8 L 83.4 92.2 L 84.5 94.1 L 84.3 96.1 L 83.4 97.8 L 81.3 98.2 L 80.0 99.7 L 79.8 102.5 L 77.2 104.9 L 76.3 106.9 L 74.2 107.5 L 71.4 107.3 L 70.5 108.2 L 69.8 111.4 L 70.9 114.6 L 69.6 118.5 L 69.0 119.2 L 64.9 118.9 L 62.1 117.2 L 61.6 116.1 L 58.2 115.3 L 52.6 111.4 L 49.6 111.0 L 47.6 109.0 L 47.4 106.2 L 49.6 103.6 L 53.2 102.8 L 55.8 103.0 L 58.4 104.3 L 61.4 104.3 L 63.8 104.1 L 71.4 101.7 L 74.2 98.0 L 74.4 96.5 L 74.2 93.9 L 72.6 91.3 L 72.6 89.8 L 71.1 88.1 L 67.7 86.8 L 64.7 82.5 L 62.3 82.1 L 59.7 79.7 L 58.8 80.1 L 58.6 78.4 L 57.1 76.2 L 53.9 76.0 L 48.9 73.6 L 45.7 70.6 L 44.6 68.5 L 42.2 67.0 L 41.8 65.9 L 38.1 64.4 L 37.3 62.2 L 34.9 60.5 L 34.0 59.0 L 33.6 60.5 L 30.6 60.1 L 33.0 57.3 L 33.2 55.1 L 31.7 52.9 L 32.1 52.7 L 31.5 52.1 L 31.2 49.9 L 29.9 48.2 L 28.2 47.8 L 24.5 45.2 L 22.0 44.7 L 18.9 47.1 L 17.9 49.1 L 15.3 50.4 L 13.3 50.4 L 11.8 49.5 L 11.6 47.5 L 9.5 46.3 L 7.3 43.2 L 7.3 38.5 L 6.0 37.0 L 6.4 36.3 L 6.0 35.7 L 8.6 33.1 L 8.8 31.8 L 7.5 30.3 L 8.2 27.9 L 10.1 26.8 L 15.9 26.0 L 16.6 24.3 L 19.2 21.9 L 20.7 22.1 L 21.1 23.6 L 23.3 25.1 L 25.2 23.0 L 25.8 24.0 L 26.3 21.7 L 28.6 22.5 L 30.6 22.1 L 34.0 18.2 L 37.9 18.4 L 40.1 16.5 L 44.4 16.1 Z" />
						
						<!-- Sardinia with authentic coastline from reference -->
						<path class="splash-screen__map-island" d="M 25.0 73.4 L 26.7 74.3 L 28.6 76.7 L 29.7 81.6 L 28.6 87.9 L 28.6 92.6 L 27.6 95.6 L 23.7 96.5 L 21.5 98.5 L 19.6 98.5 L 18.3 98.0 L 16.1 95.2 L 16.8 93.7 L 17.4 87.2 L 17.0 87.0 L 17.0 83.1 L 15.3 79.9 L 15.9 77.1 L 17.6 75.6 L 19.2 76.7 L 21.1 76.2 L 22.8 74.1 L 24.8 73.6 Z" />
						
						<!-- Ferrara / Origin Geographic Beacon Point (Po Delta / Emilia-Romagna) -->
						<circle class="splash-screen__geo-beacon splash-screen__geo-beacon--ferrara" cx="48" cy="36" r="3.5" />
						<circle class="splash-screen__geo-beacon-pulse" cx="48" cy="36" r="7" />
					</svg>
					<span class="splash-screen__map-radar" aria-hidden="true"></span>
				</div>
				<div class="splash-screen__node-meta">
					<span class="splash-screen__node-label">ITALIA</span>
					<span class="splash-screen__node-sub">Origine · Ferrara</span>
				</div>
			</div>

			<!-- Glowing Dynamic Trade Bridge & Particle Flow -->
			<div class="splash-screen__bridge-line">
				<svg class="splash-screen__arc-svg" viewBox="0 0 180 50" fill="none" preserveAspectRatio="none">
					<path class="splash-screen__arc-track" d="M15 38 C 55 8, 125 8, 165 38" />
					<path class="splash-screen__arc-pulse" d="M15 38 C 55 8, 125 8, 165 38" />
				</svg>
				<span class="splash-screen__bridge-dot"></span>
				<div class="splash-screen__trade-badge">
					<span class="splash-screen__trade-badge-text">IMPORT & EXPORT</span>
				</div>
			</div>

			<!-- Luxembourg Geographical Map Card & Headquarters Node -->
			<div class="splash-screen__map-card splash-screen__map-card--luxembourg">
				<div class="splash-screen__map-frame">
					<!-- Luxembourg High-Fidelity Geographic Map Silhouette -->
					<svg class="splash-screen__country-map splash-screen__country-map--lux" viewBox="0 0 100 135" fill="none" xmlns="http://www.w3.org/2000/svg" aria-label="Carte officielle du Luxembourg">
						<!-- Exact Luxembourg Perimeter Contour from Reference -->
						<path class="splash-screen__map-shape" d="M 39.1 10.1 L 41.0 10.6 L 42.9 13.2 L 47.1 12.0 L 48.9 12.7 L 50.4 14.3 L 50.8 17.4 L 52.5 20.4 L 51.1 31.9 L 53.2 39.2 L 55.5 43.1 L 60.2 48.1 L 62.8 56.3 L 70.7 62.1 L 74.0 62.8 L 77.8 66.8 L 79.6 67.3 L 82.9 66.6 L 88.1 68.4 L 89.0 69.8 L 87.1 79.7 L 88.1 82.3 L 87.6 84.4 L 81.7 90.0 L 80.6 96.1 L 75.6 103.3 L 75.2 109.7 L 73.5 112.2 L 74.5 117.2 L 74.0 121.8 L 72.6 123.0 L 69.8 122.3 L 65.8 120.4 L 62.3 116.2 L 59.3 116.0 L 55.5 116.7 L 50.8 120.2 L 47.8 124.0 L 44.5 123.7 L 41.9 124.9 L 37.2 124.4 L 34.9 122.3 L 33.0 118.3 L 31.4 117.6 L 26.9 117.9 L 24.6 116.9 L 19.2 110.4 L 19.4 108.0 L 22.9 105.2 L 22.7 101.7 L 27.4 93.5 L 23.6 90.0 L 24.1 85.3 L 20.4 83.2 L 17.8 76.2 L 13.8 73.6 L 12.6 72.0 L 11.0 66.6 L 12.9 59.8 L 11.0 55.8 L 13.8 50.9 L 15.0 46.2 L 19.2 42.9 L 19.0 38.0 L 22.2 34.7 L 22.5 29.8 L 25.1 26.7 L 26.7 21.8 L 31.4 18.3 L 33.7 12.0 L 38.9 10.3 Z" />
						
						<!-- Luxembourg Ville / Capital Beacon Point -->
						<circle class="splash-screen__geo-beacon splash-screen__geo-beacon--lux" cx="52" cy="89" r="3.5" />
						<circle class="splash-screen__geo-beacon-pulse" cx="52" cy="89" r="7" />
					</svg>
					<span class="splash-screen__map-radar" aria-hidden="true"></span>
				</div>
				<div class="splash-screen__node-meta">
					<span class="splash-screen__node-label">LUXEMBOURG</span>
					<span class="splash-screen__node-sub">Siège · Europe</span>
				</div>
			</div>

		</div>

		<!-- 3. Italian Script Tagline & Noble Heritage Signature -->
		<div class="splash-screen__tagline-wrap">
			<p class="splash-screen__tagline-text">
				<span class="splash-screen__tagline-text--1"><?php echo esc_html( $splash_tagline_1 ); ?></span>
				<span class="splash-screen__tagline-text--2"><?php echo esc_html( $splash_tagline_2 ); ?></span>
			</p>
		</div>

		<!-- 4. Enter / Skip Button -->
		<footer class="splash-screen__footer">
			<button type="button" id="splash-enter-btn" class="splash-screen__btn" aria-label="<?php esc_attr_e( 'Enter website', 'frignanis' ); ?>">
				<span><?php esc_html_e( 'Enter', 'frignanis' ); ?></span>
				<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
					<line x1="5" y1="12" x2="19" y2="12"></line>
					<polyline points="12 5 19 12 12 19"></polyline>
				</svg>
			</button>
			<span class="splash-screen__hint"><?php esc_html_e( 'Click anywhere to continue', 'frignanis' ); ?></span>
		</footer>

	</div>
</div>
