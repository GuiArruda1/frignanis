<?php
/**
 * Template Part: Hero Section
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$hero_eyebrow         = function_exists( 'get_field' ) && get_field( 'hero_eyebrow' ) 
	? get_field( 'hero_eyebrow' ) 
	: esc_html__( 'ITALIAN EXCELLENCE · INTERNATIONAL TRADE', 'frignanis' );

$hero_title_lead      = function_exists( 'get_field' ) && get_field( 'hero_title_lead' ) 
	? get_field( 'hero_title_lead' ) 
	: esc_html__( 'Italian', 'frignanis' );

$hero_title_highlight = function_exists( 'get_field' ) && get_field( 'hero_title_highlight' ) 
	? get_field( 'hero_title_highlight' ) 
	: esc_html__( 'Excellence', 'frignanis' );

$hero_title_end       = function_exists( 'get_field' ) && get_field( 'hero_title_end' ) 
	? get_field( 'hero_title_end' ) 
	: esc_html__( 'International Trade', 'frignanis' );

$hero_description     = function_exists( 'get_field' ) && get_field( 'hero_description' ) 
	? get_field( 'hero_description' ) 
	: esc_html__( 'We connect Italian producers directly to international professionals — promoting Italian culinary culture and heritage around the world, through direct import & export transactions.', 'frignanis' );

$hero_primary_btn_text = function_exists( 'get_field' ) && get_field( 'hero_primary_btn_text' ) 
	? get_field( 'hero_primary_btn_text' ) 
	: esc_html__( 'EXPLORE CATEGORIES', 'frignanis' );

$hero_primary_btn_url  = function_exists( 'get_field' ) && get_field( 'hero_primary_btn_url' ) 
	? get_field( 'hero_primary_btn_url' ) 
	: '#categories';

$hero_secondary_btn_text = function_exists( 'get_field' ) && get_field( 'hero_secondary_btn_text' ) 
	? get_field( 'hero_secondary_btn_text' ) 
	: esc_html__( 'GET IN TOUCH', 'frignanis' );

$hero_secondary_btn_url  = function_exists( 'get_field' ) && get_field( 'hero_secondary_btn_url' ) 
	? get_field( 'hero_secondary_btn_url' ) 
	: '#footer';
?>

<section class="hero" id="hero" aria-labelledby="hero-title">
	<!-- Background Media Atmosphere -->
	<div class="hero__bg-media" aria-hidden="true">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-vineyard-backdrop.jpg' ); ?>" 
			 alt="" 
			 class="hero__bg-photo" 
			 width="1179" 
			 height="632" 
			 fetchpriority="high" />
		<div class="hero__bg-overlay"></div>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-ambient.svg' ); ?>" 
			 alt="" 
			 class="hero__ambient-bg" 
			 width="1440" 
			 height="900" />
	</div>

	<div class="site-container">
		<div class="hero__layout">

			<!-- Left Column: Narrative & Positioning -->
			<div class="hero__content">

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
						<span class="text-gold italic-serif"><?php echo esc_html( $hero_title_highlight ); ?></span>,<br />
					<?php endif; ?>
					<?php if ( ! empty( $hero_title_end ) ) : ?>
						<?php echo esc_html( $hero_title_end ); ?>
					<?php endif; ?>
				</h1>

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
						<span class="hero__badge-text"><?php esc_html_e( 'Curadoria Institucional', 'frignanis' ); ?></span>
					</div>
					<div class="hero__badge-item">
						<span class="hero__badge-icon" aria-hidden="true">✦</span>
						<span class="hero__badge-text"><?php esc_html_e( 'Operações Diretas B2B', 'frignanis' ); ?></span>
					</div>
					<div class="hero__badge-item">
						<span class="hero__badge-icon" aria-hidden="true">✦</span>
						<span class="hero__badge-text"><?php esc_html_e( 'Itália & Europa para o Mundo', 'frignanis' ); ?></span>
					</div>
				</div>

				<!-- Scroll Indicator -->
				<a href="#mission" class="hero__scroll-indicator" aria-label="<?php esc_attr_e( 'Scroll to content', 'frignanis' ); ?>">
					<span><?php esc_html_e( 'SCROLL', 'frignanis' ); ?></span>
					<svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
						<line x1="12" y1="5" x2="12" y2="19"></line>
						<polyline points="19 12 12 19 5 12"></polyline>
					</svg>
				</a>

			</div>

			<!-- Right Column: Creative Banner Visual Showcase (Camila's World Map) -->
			<div class="hero__visual">
				<div class="hero__showcase-card">
					<div class="hero__showcase-header">
						<div class="hero__showcase-tag">
							<span class="hero__pulse-dot" aria-hidden="true"></span>
							<span class="hero__showcase-tag-title"><?php esc_html_e( 'IMPORTAÇÃO & EXPORTAÇÃO', 'frignanis' ); ?></span>
						</div>
						<div class="hero__showcase-origin">
							<span class="hero__flag-emoji" aria-hidden="true">🇮🇹</span>
							<span><?php esc_html_e( 'Origem: Itália', 'frignanis' ); ?></span>
						</div>
					</div>

					<div class="hero__showcase-media">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-world-map.png' ); ?>" 
							 alt="<?php esc_attr_e( 'FRIGNANI\'S — Rede Internacional de Importação e Exportação', 'frignanis' ); ?>" 
							 class="hero__showcase-img" 
							 width="1536" 
							 height="1024" 
							 loading="eager" />
					</div>

					<div class="hero__showcase-footer">
						<div class="hero__showcase-stat">
							<span class="hero__stat-num">8+</span>
							<span class="hero__stat-label"><?php esc_html_e( 'Rotas Globais', 'frignanis' ); ?></span>
						</div>
						<div class="hero__showcase-divider" aria-hidden="true"></div>
						<div class="hero__showcase-stat">
							<span class="hero__stat-num">100%</span>
							<span class="hero__stat-label"><?php esc_html_e( 'Parcerias Diretas', 'frignanis' ); ?></span>
						</div>
						<div class="hero__showcase-divider" aria-hidden="true"></div>
						<div class="hero__showcase-stat">
							<span class="hero__stat-num">B2B</span>
							<span class="hero__stat-label"><?php esc_html_e( 'Curadoria Exclusiva', 'frignanis' ); ?></span>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>
