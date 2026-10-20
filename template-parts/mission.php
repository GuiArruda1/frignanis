<?php
/**
 * Template Part: Home Presentation & Commercial Intermediation Section
 *
 * Official Institutional Presentation of FRIGNANI'S Import & Export.
 * Explains the Luxembourg headquarters, commercial intermediation of Italian excellences,
 * the 9 international markets served, and the core brand manifesto:
 * "We do not sell products. We connect excellences."
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Dynamic ACF Fields with agency fallbacks
$pres_eyebrow = function_exists( 'get_field' ) && get_field( 'presentation_eyebrow' ) 
	? get_field( 'presentation_eyebrow' ) 
	: esc_html__( 'LUXEMBOURG · THE HEART OF EUROPE · INTERNATIONAL TRADE MAISON', 'frignanis' );

$pres_title_lead = function_exists( 'get_field' ) && get_field( 'presentation_title_lead' ) 
	? get_field( 'presentation_title_lead' ) 
	: esc_html__( 'Business management and commercial intermediation of', 'frignanis' );

$pres_title_highlight = function_exists( 'get_field' ) && get_field( 'presentation_title_highlight' ) 
	? get_field( 'presentation_title_highlight' ) 
	: esc_html__( 'Italian excellence', 'frignanis' );

$pres_p1 = function_exists( 'get_field' ) && get_field( 'presentation_p1' ) 
	? get_field( 'presentation_p1' ) 
	: esc_html__( 'Headquartered in Luxembourg, in the heart of Europe, Frignani’s Import & Export is dedicated to business management and commercial intermediation of what Italy produces finest: terroir wines and proseccos, gourmet and biological delicacies from selected producers, and art décor pieces that elevate haute cuisine kitchens and high-end tables. Each partnership is conducted according to the standard operating procedure of each producer and client.', 'frignanis' );

$pres_p2 = function_exists( 'get_field' ) && get_field( 'presentation_p2' ) 
	? get_field( 'presentation_p2' ) 
	: esc_html__( 'We represent traditional Italian producers before distributors, fine dining restaurants, institutions, and major corporations in Luxembourg, Belgium, Germany, Spain, Netherlands, United States, Brazil, Chile, and Colombia.', 'frignanis' );

$pres_tagline = function_exists( 'get_field' ) && get_field( 'presentation_tagline' ) 
	? get_field( 'presentation_tagline' ) 
	: esc_html__( 'Conectamos você ao melhor da Itália! De marcas italianas de prestígio a mercados internacionais. A partir de Luxemburgo, no coração da Europa, transformamos tradição, qualidade, inovação e vanguarda em oportunidades estratégicas de negócios.', 'frignanis' );

$pres_cta_primary_text = function_exists( 'get_field' ) && get_field( 'presentation_cta_primary_text' ) 
	? get_field( 'presentation_cta_primary_text' ) 
	: esc_html__( 'REQUEST A PRESENTATION', 'frignanis' );

$pres_cta_primary_url = function_exists( 'get_field' ) && get_field( 'presentation_cta_primary_url' ) 
	? get_field( 'presentation_cta_primary_url' ) 
	: home_url( '/contact/' );

$pres_cta_secondary_text = function_exists( 'get_field' ) && get_field( 'presentation_cta_secondary_text' ) 
	? get_field( 'presentation_cta_secondary_text' ) 
	: esc_html__( 'EXPLORE OUR SERVICES', 'frignanis' );

$pres_cta_secondary_url = function_exists( 'get_field' ) && get_field( 'presentation_cta_secondary_url' ) 
	? get_field( 'presentation_cta_secondary_url' ) 
	: home_url( '/mission-and-services/' );
?>

<!-- ==========================================
     HOME: INSTITUTIONAL PRESENTATION SECTION
     ========================================== -->
<section class="mission home-presentation" id="presentation" aria-labelledby="presentation-title">
	<div class="site-container site-container--wide">
		<div class="mission__grid">

			<!-- Left Column: Story, Intermediation & Markets -->
			<div class="mission__content">
				
				<?php if ( ! empty( $pres_eyebrow ) ) : ?>
					<div class="eyebrow">
						<span class="eyebrow-dot" aria-hidden="true"></span>
						<?php echo esc_html( $pres_eyebrow ); ?>
					</div>
				<?php endif; ?>

				<h2 id="presentation-title" class="mission__title">
					<?php echo esc_html( $pres_title_lead ); ?>
					<?php if ( ! empty( $pres_title_highlight ) ) : ?>
						<span class="text-gold italic-serif"><?php echo esc_html( $pres_title_highlight ); ?></span>.
					<?php endif; ?>
				</h2>

				<!-- Italian Flag Ribbon Accent -->
				<div class="italian-flag-stripe italian-flag-stripe--left" aria-hidden="true" style="margin-bottom: 1.75rem;">
					<span class="italian-flag-stripe__green"></span>
					<span class="italian-flag-stripe__white"></span>
					<span class="italian-flag-stripe__red"></span>
				</div>

				<div class="mission__body">
					<?php if ( ! empty( $pres_p1 ) ) : ?>
						<p class="mission__lead-p">
							<?php echo esc_html( $pres_p1 ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $pres_p2 ) ) : ?>
						<p class="mission__markets-p">
							<?php echo esc_html( $pres_p2 ); ?>
						</p>
					<?php endif; ?>
				</div>

				<!-- International Market Chips (9 Countries Served) -->
				<div class="presentation-countries" aria-label="<?php esc_attr_e( 'International Markets Served', 'frignanis' ); ?>">
					<span class="country-chip"><?php frignanis_flag( 'lu' ); ?> <span>Luxembourg</span></span>
					<span class="country-chip"><?php frignanis_flag( 'be' ); ?> <span>Belgium</span></span>
					<span class="country-chip"><?php frignanis_flag( 'de' ); ?> <span>Germany</span></span>
					<span class="country-chip"><?php frignanis_flag( 'es' ); ?> <span>Spain</span></span>
					<span class="country-chip"><?php frignanis_flag( 'nl' ); ?> <span>Netherlands</span></span>
					<span class="country-chip"><?php frignanis_flag( 'us' ); ?> <span>United States</span></span>
					<span class="country-chip"><?php frignanis_flag( 'br' ); ?> <span>Brazil</span></span>
					<span class="country-chip"><?php frignanis_flag( 'cl' ); ?> <span>Chile</span></span>
					<span class="country-chip"><?php frignanis_flag( 'co' ); ?> <span>Colombia</span></span>
				</div>

				<!-- Action Buttons -->
				<div class="mission__cta-row">
					<a href="<?php echo esc_url( $pres_cta_primary_url ); ?>" class="btn btn-primary">
						<?php echo esc_html( $pres_cta_primary_text ); ?>
					</a>
					<a href="<?php echo esc_url( frignanis_get_presentation_pdf_url() ); ?>" class="btn btn-outline-dark" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
						<?php frignanis_icon( 'download', 18 ); ?> <span><?php esc_html_e( 'Frignani Apresentation', 'frignanis' ); ?></span>
					</a>
				</div>

			</div>

			<!-- Right Column: Climax Manifesto Card & Dual Heritage Photography -->
			<div class="mission__visuals">

				<!-- Manifesto Climax Card -->
				<div class="presentation-manifesto-card" aria-label="<?php esc_attr_e( 'Brand Manifesto', 'frignanis' ); ?>">
					<div class="presentation-manifesto-card__inner">
						<span class="presentation-manifesto-card__quote-mark" aria-hidden="true">«</span>
						<blockquote class="presentation-manifesto-card__quote">
							<span class="presentation-manifesto-card__lead"><?php esc_html_e( 'Conectamos você ao melhor da Itália! De marcas italianas de prestígio a mercados internacionais.', 'frignanis' ); ?></span>
							<span class="presentation-manifesto-card__body"><?php esc_html_e( 'A partir de Luxemburgo, no coração da Europa, transformamos tradição, qualidade, inovação e vanguarda em oportunidades estratégicas de negócios.', 'frignanis' ); ?></span>
						</blockquote>
						<div class="presentation-manifesto-card__seal">
							<span>✦</span> <?php esc_html_e( "FRIGNANI'S IMPORT & EXPORT · LUXEMBOURG", 'frignanis' ); ?> <span>✦</span>
						</div>
					</div>
				</div>

				<!-- Visual Composition: Estate Terroir & Archival Heritage -->
				<div class="mission__frame-main">
					<div class="mission__image-wrapper mission__image-wrapper--primary">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-grapes-sunlit-vine.jpg' ); ?>" 
							 alt="<?php esc_attr_e( 'Italian Vineyard Terroir & Noble Grape Curation', 'frignanis' ); ?>" 
							 class="mission__image" 
							 width="1600" 
							 height="1066" 
							 loading="lazy" />
						<div class="mission__image-badge">
							<span class="mission__badge-origin"><?php esc_html_e( "TERROIR D'ITALIA", 'frignanis' ); ?></span>
							<span class="mission__badge-title"><?php esc_html_e( 'B2B Intermediation', 'frignanis' ); ?></span>
						</div>
					</div>
				</div>

				<div class="mission__frame-overlap">
					<div class="mission__image-wrapper mission__image-wrapper--secondary">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-harvest-heritage.png' ); ?>" 
							 alt="<?php esc_attr_e( 'Historic Italian Grape Harvest and Tradition', 'frignanis' ); ?>" 
							 class="mission__image" 
							 width="1179" 
							 height="1599" 
							 loading="lazy" />
						<div class="mission__archival-tag">
							<span class="mission__tag-icon"><?php frignanis_icon( 'landmark', 18 ); ?></span>
							<div class="mission__tag-text">
								<strong><?php esc_html_e( 'Archivio Storico', 'frignanis' ); ?></strong>
								<span><?php esc_html_e( 'Ferrara · Dal 1626', 'frignanis' ); ?></span>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>
