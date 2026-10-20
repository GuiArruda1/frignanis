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
$pres_eyebrow = frignanis_field( 'presentation_eyebrow', 'LUXEMBOURG · THE HEART OF EUROPE · INTERNATIONAL TRADE MAISON', 'LUXEMBURGO · O CORAÇÃO DA EUROPA · CASA DE COMÉRCIO INTERNACIONAL' );

$pres_title_lead = frignanis_field( 'presentation_title_lead', 'Business management and commercial intermediation of', 'Gestão de negócios e intermediação comercial de' );

$pres_title_highlight = frignanis_field( 'presentation_title_highlight', 'Italian excellence', 'excelências italianas' );

$pres_p1 = frignanis_field(
	'presentation_p1',
	'Headquartered in Luxembourg, in the heart of Europe, Frignani’s Import & Export is dedicated to business management and commercial intermediation of what Italy produces finest: terroir wines and proseccos, gourmet and biological delicacies from selected producers, and art décor pieces that elevate haute cuisine kitchens and high-end tables. Each partnership is conducted according to the standard operating procedure of each producer and client.',
	'Com sede em Luxemburgo, no coração da Europa, a Frignani’s Import & Export dedica-se à gestão de negócios e intermediação comercial do que a Itália produz de mais refinado: vinhos e proseccos de terroir, iguarias gourmet e biológicas de produtores selecionados e peças de art décor que elevam cozinhas de alta gastronomia e mesas requintadas. Cada parceria é conduzida segundo o procedimento padrão de cada produtor e cliente.'
);

$pres_p2 = frignanis_field(
	'presentation_p2',
	'We represent traditional Italian producers before distributors, fine dining restaurants, institutions, and major corporations in Luxembourg, Belgium, Germany, Spain, Netherlands, United States, Brazil, Chile, and Colombia.',
	'Representamos produtores tradicionais italianos perante distribuidores, restaurantes de alta gastronomia, instituições e grandes corporações em Luxemburgo, Bélgica, Alemanha, Espanha, Países Baixos, Estados Unidos, Brasil, Chile e Colômbia.'
);

$pres_tagline = frignanis_field(
	'presentation_tagline',
	'« We connect you to the finest of Italy! From prestigious Italian brands to international markets. From Luxembourg, in the heart of Europe, we transform tradition, quality, innovation, and vanguard into strategic business opportunities. »',
	'« Conectamos você ao melhor da Itália! De marcas italianas de prestígio a mercados internacionais. A partir de Luxemburgo, no coração da Europa, transformamos tradição, qualidade, inovação e vanguarda em oportunidades estratégicas de negócios. »'
);

$pres_cta_primary_text = frignanis_field( 'presentation_cta_primary_text', 'REQUEST A PRESENTATION', 'SOLICITAR UMA APRESENTAÇÃO' );

$pres_cta_primary_url = function_exists( 'get_field' ) && get_field( 'presentation_cta_primary_url' ) 
	? get_field( 'presentation_cta_primary_url' ) 
	: home_url( '/contact/' );

$pres_cta_secondary_text = frignanis_field( 'presentation_cta_secondary_text', 'EXPLORE OUR SERVICES', 'CONHECER NOSSOS SERVIÇOS' );

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
						<?php frignanis_icon( 'download', 18 ); ?> <span><?php frignanis_e( 'Frignani Presentation', 'Apresentação Frignani' ); ?></span>
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
							<span class="presentation-manifesto-card__lead"><?php frignanis_e( 'We connect you to the finest of Italy! From prestigious Italian brands to international markets.', 'Conectamos você ao melhor da Itália! De marcas italianas de prestígio a mercados internacionais.' ); ?></span>
							<span class="presentation-manifesto-card__body"><?php frignanis_e( 'From Luxembourg, in the heart of Europe, we transform tradition, quality, innovation, and vanguard into strategic business opportunities.', 'A partir de Luxemburgo, no coração da Europa, transformamos tradição, qualidade, inovação e vanguarda em oportunidades estratégicas de negócios.' ); ?></span>
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
							 alt="<?php frignanis_attr_e( 'Italian Vineyard Terroir & Noble Grape Curation', 'Terroir de vinhedos italianos e curadoria de uvas nobres' ); ?>" 
							 class="mission__image" 
							 width="1600" 
							 height="1066" 
							 loading="lazy" />
						<div class="mission__image-badge">
							<span class="mission__badge-origin"><?php esc_html_e( "TERROIR D'ITALIA", 'frignanis' ); ?></span>
							<span class="mission__badge-title"><?php frignanis_e( 'B2B Intermediation', 'Intermediação B2B' ); ?></span>
						</div>
					</div>
				</div>

				<div class="mission__frame-overlap">
					<div class="mission__image-wrapper mission__image-wrapper--secondary">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-harvest-heritage.png' ); ?>" 
							 alt="<?php frignanis_attr_e( 'Historic Italian Grape Harvest and Tradition', 'Colheita histórica de uvas e tradição italiana' ); ?>" 
							 class="mission__image" 
							 width="1179" 
							 height="1599" 
							 loading="lazy" />
						<div class="mission__archival-tag">
							<span class="mission__tag-icon"><?php frignanis_icon( 'landmark', 18 ); ?></span>
							<div class="mission__tag-text">
								<strong><?php frignanis_e( 'Historical Archive', 'Arquivo Histórico', 'Archivio Storico' ); ?></strong>
								<span><?php frignanis_e( 'Ferrara · 19th Century', 'Ferrara · Século XIX' ); ?></span>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</section>
