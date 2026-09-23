<?php
/**
 * The template for displaying the footer
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$footer_tagline       = function_exists( 'get_field' ) && get_field( 'footer_tagline' ) 
	? get_field( 'footer_tagline' ) 
	: esc_html__( 'Connecting Italian producers directly to international professionals — promoting Italian culinary culture and heritage around the world through direct import & export transactions.', 'frignanis' );

$footer_cta_label     = function_exists( 'get_field' ) && get_field( 'footer_cta_label' ) 
	? get_field( 'footer_cta_label' ) 
	: esc_html__( 'GET IN TOUCH', 'frignanis' );

$footer_cta_url       = function_exists( 'get_field' ) && get_field( 'footer_cta_url' ) 
	? get_field( 'footer_cta_url' ) 
	: 'mailto:info@frignanis.com';

$footer_email         = function_exists( 'get_field' ) && get_field( 'footer_contact_email' ) 
	? get_field( 'footer_contact_email' ) 
	: 'info@frignanis.com';

$footer_insta_handle  = function_exists( 'get_field' ) && get_field( 'footer_instagram_handle' ) 
	? get_field( 'footer_instagram_handle' ) 
	: '@frignanisgourmet';

$footer_insta_url     = function_exists( 'get_field' ) && get_field( 'footer_instagram_url' ) 
	? get_field( 'footer_instagram_url' ) 
	: 'https://instagram.com/frignanisgourmet';

$footer_copyright     = function_exists( 'get_field' ) && get_field( 'footer_copyright' ) 
	? get_field( 'footer_copyright' ) 
	: sprintf( '© %s %s', date( 'Y' ), esc_html__( "Frignani's · Italian Excellence, International Trade", 'frignanis' ) );
?>

</main><!-- #primary-content -->

<footer id="footer" class="site-footer" role="contentinfo">
	<div class="site-container">
		<div class="site-footer__grid">

			<!-- Column 1: Brand & Tagline -->
			<div class="site-footer__brand">
				<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/logo-fundo-escuro-web.png' ); ?>" 
					 alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" 
					 class="site-footer__logo" 
					 width="72" 
					 height="91" 
					 loading="lazy" />

				<?php if ( ! empty( $footer_tagline ) ) : ?>
					<p class="site-footer__tagline">
						<?php echo esc_html( $footer_tagline ); ?>
					</p>
				<?php endif; ?>

				<?php if ( ! empty( $footer_cta_label ) ) : ?>
					<a href="<?php echo esc_url( $footer_cta_url ); ?>" class="btn btn-secondary">
						<?php echo esc_html( $footer_cta_label ); ?>
					</a>
				<?php endif; ?>
			</div>

			<!-- Column 2: Navigate -->
			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'NAVIGATE', 'frignanis' ); ?></h3>
				<ul class="site-footer__menu-list">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Home', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/sobre-nos/' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'About Us', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Contact', 'frignanis' ); ?></a></li>
				</ul>
			</div>

			<!-- Column 3: Categories -->
			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'CATEGORIES', 'frignanis' ); ?></h3>
				<ul class="site-footer__menu-list">
					<li><a href="#categories" class="site-footer__link"><?php esc_html_e( 'Wines & Prosecco', 'frignanis' ); ?></a></li>
					<li><a href="#categories" class="site-footer__link"><?php esc_html_e( 'Olive Oil', 'frignanis' ); ?></a></li>
					<li><a href="#categories" class="site-footer__link"><?php esc_html_e( 'Truffle', 'frignanis' ); ?></a></li>
					<li><a href="#categories" class="site-footer__link"><?php esc_html_e( 'Biological', 'frignanis' ); ?></a></li>
					<li><a href="#categories" class="site-footer__link"><?php esc_html_e( 'Kitchen & Lifestyle', 'frignanis' ); ?></a></li>
				</ul>
			</div>

			<!-- Column 4: Contact -->
			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'CONTACT', 'frignanis' ); ?></h3>
				
				<?php if ( ! empty( $footer_email ) ) : ?>
					<div class="site-footer__contact-item">
						<a href="mailto:<?php echo esc_attr( $footer_email ); ?>">
							<?php echo esc_html( $footer_email ); ?>
						</a>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $footer_insta_handle ) ) : ?>
					<div class="site-footer__contact-item">
						<span class="site-footer__contact-icon">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/instagram.svg' ); ?>" 
								 alt="" 
								 width="18" 
								 height="18" 
								 loading="lazy" />
						</span>
						<a href="<?php echo esc_url( $footer_insta_url ); ?>" target="_blank" rel="noopener noreferrer">
							<?php echo esc_html( $footer_insta_handle ); ?>
						</a>
					</div>
				<?php endif; ?>
			</div>

		</div>

		<!-- Bottom Copyright & Legal Links -->
		<div class="site-footer__bottom">
			<div class="site-footer__bottom-inner">
				<p class="site-footer__copyright">
					<?php echo esc_html( $footer_copyright ); ?>
				</p>
				<div class="site-footer__legal-links">
					<a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" class="site-footer__legal-link">
						<?php esc_html_e( 'Privacy', 'frignanis' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>" class="site-footer__legal-link">
						<?php esc_html_e( 'Terms', 'frignanis' ); ?>
					</a>
				</div>
			</div>
		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
