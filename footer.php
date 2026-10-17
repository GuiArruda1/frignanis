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
	: esc_html__( 'We do not sell products. We connect excellences. Business management and commercial intermediation of Italian excellence — from Luxembourg to the world.', 'frignanis' );

$footer_cta_label     = function_exists( 'get_field' ) && get_field( 'footer_cta_label' ) 
	? get_field( 'footer_cta_label' ) 
	: esc_html__( 'REQUEST A PRESENTATION', 'frignanis' );

$footer_cta_url       = function_exists( 'get_field' ) && get_field( 'footer_cta_url' ) 
	? get_field( 'footer_cta_url' ) 
	: home_url( '/contact/' );

$footer_email         = function_exists( 'get_field' ) && get_field( 'footer_contact_email' ) 
	? get_field( 'footer_contact_email' ) 
	: 'info@frignanis.com';

$footer_phone         = function_exists( 'get_field' ) && get_field( 'footer_contact_phone' ) 
	? get_field( 'footer_contact_phone' ) 
	: '+352 621 766 684';

$footer_location      = function_exists( 'get_field' ) && get_field( 'footer_location' ) 
	? get_field( 'footer_location' ) 
	: esc_html__( 'Luxembourg · Europe', 'frignanis' );

$footer_insta_handle  = function_exists( 'get_field' ) && get_field( 'footer_instagram_handle' ) 
	? get_field( 'footer_instagram_handle' ) 
	: '@frignanisgourmet';

$footer_insta_url     = function_exists( 'get_field' ) && get_field( 'footer_instagram_url' ) 
	? get_field( 'footer_instagram_url' ) 
	: 'https://instagram.com/frignanisgourmet';

$footer_copyright     = function_exists( 'get_field' ) && get_field( 'footer_copyright' ) 
	? get_field( 'footer_copyright' ) 
	: sprintf( '© %s %s', date( 'Y' ), esc_html__( "Frignani's Import & Export · The bridge between Italy and the world", 'frignanis' ) );
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

				<div class="italian-flag-stripe italian-flag-stripe--left" aria-hidden="true">
					<span class="italian-flag-stripe__green"></span>
					<span class="italian-flag-stripe__white"></span>
					<span class="italian-flag-stripe__red"></span>
				</div>

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

			<!-- Column 2: Navigation -->
			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'NAVIGATION', 'frignanis' ); ?></h3>
				<ul class="site-footer__menu-list">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Home', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/mission-and-services/' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Mission & Services', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'About Us', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Contact', 'frignanis' ); ?></a></li>
				</ul>
			</div>

			<!-- Column 3: Categories -->
			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'CATEGORIES', 'frignanis' ); ?></h3>
				<ul class="site-footer__menu-list">
					<li><a href="<?php echo esc_url( home_url( '/categories/#vinhos' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Terroir Wines & Prosecco', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/categories/#gourmet' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Gourmet & Biological Delicacies', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/categories/#cooking-supreme' ) ); ?>" class="site-footer__link"><?php esc_html_e( 'Art Décor · Cooking Supreme', 'frignanis' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="site-footer__link text-gold">✦ <?php esc_html_e( 'Download PDF Folder', 'frignanis' ); ?></a></li>
				</ul>
			</div>

			<!-- Column 4: Official Contact -->
			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'CONTACT & HEADQUARTERS', 'frignanis' ); ?></h3>
				
				<?php if ( ! empty( $footer_email ) ) : ?>
					<div class="site-footer__contact-item">
						<a href="mailto:<?php echo esc_attr( $footer_email ); ?>">
							✉ <?php echo esc_html( $footer_email ); ?>
						</a>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $footer_phone ) ) : ?>
					<div class="site-footer__contact-item">
						<a href="https://wa.me/352621766684" target="_blank" rel="noopener noreferrer">
							☎ <?php echo esc_html( $footer_phone ); ?> (WhatsApp)
						</a>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $footer_location ) ) : ?>
					<div class="site-footer__contact-item">
						<span style="color: var(--color-text-muted-light); font-size: 0.85rem;">
							📍 <?php echo esc_html( $footer_location ); ?>
						</span>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $footer_insta_handle ) ) : ?>
					<div class="site-footer__contact-item" style="margin-top: 0.5rem;">
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
						<?php esc_html_e( 'Privacy Policy', 'frignanis' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/terms-conditions/' ) ); ?>" class="site-footer__legal-link">
						<?php esc_html_e( 'Terms & Conditions', 'frignanis' ); ?>
					</a>
				</div>
			</div>
		</div>

	</div>
</footer>

<!-- Floating WhatsApp Action -->
<a href="https://wa.me/352621766684" target="_blank" rel="noopener noreferrer" class="floating-whatsapp-btn" aria-label="<?php esc_attr_e( 'Chat with us on WhatsApp', 'frignanis' ); ?>">
	<svg viewBox="0 0 24 24" aria-hidden="true">
		<path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.771-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.312.045-.694.075-2.221-.555-1.831-.755-3.008-2.612-3.099-2.733-.09-.12-0.733-.976-.733-1.86 0-.884.464-1.319.629-1.498.165-.18.36-.225.48-.225.12 0 .24.002.345.006.11.004.255-.042.398.303.148.358.508 1.238.553 1.328.045.09.075.195.015.315-.06.12-.09.195-.18.3-.09.105-.188.235-.269.315-.09.09-.184.187-.079.367.105.18.468.772 1.004 1.249.69.614 1.272.805 1.452.895.18.09.285.075.39-.045.105-.12.45-.525.57-.705.12-.18.24-.15.405-.09.165.06 1.05.495 1.23.585.18.09.3.135.345.21.045.075.045.435-.099.84z"/>
	</svg>
	<span>WhatsApp</span>
</a>

<?php wp_footer(); ?>
</body>
</html>
