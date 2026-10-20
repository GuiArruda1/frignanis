<?php
/**
 * Template Part: Hero Section
 *
 * Full-width cinematic banner hero featuring authentic Italian vineyard terroir
 * and wine barrels (IMG_9880.JPG), with noble typography and B2B positioning.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$hero_eyebrow = frignanis_field( 'hero_eyebrow', 'LUXEMBOURG · THE BRIDGE BETWEEN ITALY AND THE WORLD', 'LUXEMBURGO · A PONTE ENTRE A ITÁLIA E O MUNDO' );

$hero_title_lead = frignanis_field( 'hero_title_lead', 'Authentic Italy, brought to the', 'A Itália autêntica, conduzida às' );

$hero_title_highlight = frignanis_field( 'hero_title_highlight', 'most demanding tables', 'mesas mais exigentes' );

$hero_title_end = frignanis_field( 'hero_title_end', 'of the world.', 'do mundo.' );

$hero_description = frignanis_field( 'hero_description', 'Business management and commercial intermediation of Italian excellence, following the standard procedure of each producer and client. From Luxembourg to the world.', 'Gestão de negócios e intermediação comercial de excelências italianas, segundo o procedimento padrão de cada produtor e cliente. De Luxemburgo para o mundo.' );

$hero_primary_btn_text = frignanis_field( 'hero_primary_btn_text', 'REQUEST A PRESENTATION', 'SOLICITAR UMA APRESENTAÇÃO' );

$hero_primary_btn_url = function_exists( 'get_field' ) && get_field( 'hero_primary_btn_url' ) 
	? get_field( 'hero_primary_btn_url' ) 
	: home_url( '/contact/' );

$hero_secondary_btn_text = frignanis_field( 'hero_secondary_btn_text', 'OUR SERVICES', 'NOSSOS SERVIÇOS' );

$hero_secondary_btn_url = function_exists( 'get_field' ) && get_field( 'hero_secondary_btn_url' ) 
	? get_field( 'hero_secondary_btn_url' ) 
	: home_url( '/mission-and-services/' );

$hero_bg_image = get_template_directory_uri() . '/assets/images/italian-hero-estate-vineyard-color.jpg';
?>

<section class="hero hero--banner" id="hero" aria-labelledby="hero-title">
	<!-- Full-Width Cinematic Background Media (IMG_9880.JPG Estate Vineyards & Barrels) -->
	<div class="hero__bg-media" aria-hidden="true">
		<img src="<?php echo esc_url( $hero_bg_image ); ?>" 
			 alt="<?php esc_attr_e( 'Italian Vineyard Terroir Hills, Estate Villa and Wine Barrels', 'frignanis' ); ?>" 
			 class="hero__bg-photo hero__bg-photo--estate" 
			 width="1179" 
			 height="632" 
			 fetchpriority="high" />
		<div class="hero__bg-overlay hero__bg-overlay--banner"></div>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-ambient.svg' ); ?>" 
			 alt="" 
			 class="hero__ambient-bg" 
			 width="1440" 
			 height="900" />
	</div>

	<div class="site-container">
		<div class="hero__layout hero__layout--banner">

			<!-- Hero Narrative & Positioning (Left Content Section) -->
			<div class="hero__content hero__content--banner">

				<!-- Eyebrow -->
				<?php if ( ! empty( $hero_eyebrow ) ) : ?>
					<div class="eyebrow">
						<span class="eyebrow-dot" aria-hidden="true"></span>
						<?php echo esc_html( $hero_eyebrow ); ?>
					</div>
				<?php endif; ?>

				<!-- Main Headline with Italic Gold Accent -->
				<h1 id="hero-title" class="hero__title">
					<?php if ( ! empty( $hero_title_lead ) ) : ?>
						<?php echo esc_html( $hero_title_lead ); ?><br />
					<?php endif; ?>
					<?php if ( ! empty( $hero_title_highlight ) ) : ?>
						<span class="text-gold italic-serif"><?php echo esc_html( $hero_title_highlight ); ?></span><br />
					<?php endif; ?>
					<?php if ( ! empty( $hero_title_end ) ) : ?>
						<?php echo esc_html( $hero_title_end ); ?>
					<?php endif; ?>
				</h1>

				<!-- Italian Flag Ribbon Accent -->
				<div class="italian-flag-stripe italian-flag-stripe--left" aria-hidden="true" style="margin-bottom: 1.5rem;">
					<span class="italian-flag-stripe__green"></span>
					<span class="italian-flag-stripe__white"></span>
					<span class="italian-flag-stripe__red"></span>
				</div>

				<!-- Subtitle / Value Proposition -->
				<?php if ( ! empty( $hero_description ) ) : ?>
					<p class="hero__description">
						<?php echo esc_html( $hero_description ); ?>
					</p>
				<?php endif; ?>

				<!-- Call-to-Action Buttons -->
				<div class="hero__cta-row">
					<?php if ( ! empty( $hero_primary_btn_text ) ) : ?>
						<a href="<?php echo esc_url( $hero_primary_btn_url ); ?>" class="btn btn-primary">
							<?php echo esc_html( $hero_primary_btn_text ); ?>
						</a>
					<?php endif; ?>

					<?php if ( ! empty( $hero_secondary_btn_text ) ) : ?>
						<a href="<?php echo esc_url( $hero_secondary_btn_url ); ?>" class="btn btn-secondary">
							<?php echo esc_html( $hero_secondary_btn_text ); ?>
						</a>
					<?php endif; ?>
				</div>

				<!-- Quality & Curatorship Badges -->
				<div class="hero__badges">
					<div class="hero__badge-item">
						<span class="hero__badge-icon" aria-hidden="true">✦</span>
						<span class="hero__badge-text"><?php frignanis_e( 'Business Management & Intermediation', 'Gestão de Negócios & Intermediação Comercial' ); ?></span>
					</div>
					<div class="hero__badge-item">
						<span class="hero__badge-icon" aria-hidden="true">✦</span>
						<span class="hero__badge-text"><?php frignanis_e( 'B2B Standard Procedure', 'Procedimento Padrão B2B' ); ?></span>
					</div>
					<div class="hero__badge-item">
						<span class="hero__badge-icon" aria-hidden="true">✦</span>
						<span class="hero__badge-text"><?php frignanis_e( '9 International Markets', '9 Mercados Internacionais' ); ?></span>
					</div>
				</div>

			</div>

		</div>
	</div>

	<!-- Bottom Architectural Key Metrics Banner -->
	<div class="hero__bottom-stats" aria-label="<?php esc_attr_e( 'Key Performance Indicators', 'frignanis' ); ?>">
		<div class="site-container">
			<div class="hero__stats-grid">
				<div class="hero__stat-block">
					<span class="hero__stat-number">9</span>
					<span class="hero__stat-title"><?php frignanis_e( 'Countries Served', 'Países Atendidos' ); ?></span>
					<span class="hero__stat-sub"><?php frignanis_e( 'Europe, Americas & Global Hubs', 'Europa, Américas & Centros Globais' ); ?></span>
				</div>
				<div class="hero__stat-divider" aria-hidden="true"></div>
				<div class="hero__stat-block">
					<span class="hero__stat-number">100%</span>
					<span class="hero__stat-title"><?php frignanis_e( 'Excellence & Terroir Origin', 'Excelência & Origem de Terroir' ); ?></span>
					<span class="hero__stat-sub"><?php frignanis_e( 'Selected Italian Family Estates', 'Propriedades Familiares Selecionadas' ); ?></span>
				</div>
				<div class="hero__stat-divider" aria-hidden="true"></div>
				<div class="hero__stat-block">
					<span class="hero__stat-number">B2B</span>
					<span class="hero__stat-title"><?php frignanis_e( 'Direct Representation', 'Representação Direta' ); ?></span>
					<span class="hero__stat-sub"><?php frignanis_e( 'A single interlocutor across Italy', 'Um único interlocutor para toda a Itália' ); ?></span>
				</div>
			</div>
		</div>
	</div>
</section>
