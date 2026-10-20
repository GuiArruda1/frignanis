<?php
/**
 * Template Name: Mission & Services / Missão e Serviços
 * Template Post Type: page
 *
 * The template for displaying the "Missão e Serviços" (Mission & Services) page.
 * Implements the official briefing, B2B representation positioning,
 * authentic Drive photos, and luxury Italian trade design system.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// =========================================================================
// ACF Dynamic Fields with Agency-Standard Fallbacks (English Official Text)
// =========================================================================

// Hero Section
$ms_hero_eyebrow = function_exists( 'get_field' ) && get_field( 'ms_hero_eyebrow' )
	? get_field( 'ms_hero_eyebrow' )
	: esc_html__( '— 02 · MISSION & SERVICES · INTERNATIONAL TRADE', 'frignanis' );

$ms_hero_title_lead = function_exists( 'get_field' ) && get_field( 'ms_hero_title_lead' )
	? get_field( 'ms_hero_title_lead' )
	: esc_html__( 'The Bridge Between Italy and the', 'frignanis' );

$ms_hero_title_highlight = function_exists( 'get_field' ) && get_field( 'ms_hero_title_highlight' )
	? get_field( 'ms_hero_title_highlight' )
	: esc_html__( 'World', 'frignanis' );

$ms_hero_desc = function_exists( 'get_field' ) && get_field( 'ms_hero_desc' )
	? get_field( 'ms_hero_desc' )
	: esc_html__( 'Business management and commercial intermediation of authentic Italian excellences. We represent traditional producers with certified provenance, discretion, and personalized service — from Luxembourg to the world.', 'frignanis' );

// 1. Nossa Missão / Our Mission
$ms_mission_eyebrow = function_exists( 'get_field' ) && get_field( 'ms_mission_eyebrow' )
	? get_field( 'ms_mission_eyebrow' )
	: esc_html__( 'OUR MISSION', 'frignanis' );

$ms_mission_title = function_exists( 'get_field' ) && get_field( 'ms_mission_title' )
	? get_field( 'ms_mission_title' )
	: esc_html__( 'Bringing Authentic Italy to the World', 'frignanis' );

$ms_mission_text = function_exists( 'get_field' ) && get_field( 'ms_mission_text' )
	? get_field( 'ms_mission_text' )
	: esc_html__( 'Bringing authentic Italy to the world with the rigor of those who know its origin and the care of those who honor a heritage. We connect passionate producers with discerning tables, ensuring guaranteed provenance, transparency at every step, and truly personalized service.', 'frignanis' );

// 2. Nossos Serviços / Our Services
$ms_services_eyebrow = function_exists( 'get_field' ) && get_field( 'ms_services_eyebrow' )
	? get_field( 'ms_services_eyebrow' )
	: esc_html__( 'OUR SERVICES', 'frignanis' );

$ms_services_title = function_exists( 'get_field' ) && get_field( 'ms_services_title' )
	? get_field( 'ms_services_title' )
	: esc_html__( 'More Than Supplying, We Represent', 'frignanis' );

$ms_services_lead = function_exists( 'get_field' ) && get_field( 'ms_services_lead' )
	? get_field( 'ms_services_lead' )
	: esc_html__( 'We are your presence in Italy: from the rigorous selection of each producer to negotiation, logistics, import and export documentation, through to final delivery, handled with discretion and security wherever you are.', 'frignanis' );

// 3. A Quem Servimos / Who We Serve
$ms_audience_eyebrow = function_exists( 'get_field' ) && get_field( 'ms_audience_eyebrow' )
	? get_field( 'ms_audience_eyebrow' )
	: esc_html__( 'WHO WE SERVE', 'frignanis' );

$ms_audience_title = function_exists( 'get_field' ) && get_field( 'ms_audience_title' )
	? get_field( 'ms_audience_title' )
	: esc_html__( 'Strategic Partners Across Discerning Sectors', 'frignanis' );

// 4. Por Que a Frignani's / Why Frignani's
$ms_why_eyebrow = function_exists( 'get_field' ) && get_field( 'ms_why_eyebrow' )
	? get_field( 'ms_why_eyebrow' )
	: esc_html__( "WHY FRIGNANI'S", 'frignanis' );

$ms_why_title = function_exists( 'get_field' ) && get_field( 'ms_why_title' )
	? get_field( 'ms_why_title' )
	: esc_html__( 'The Care of a Family Maison. The Reach of International Trade.', 'frignanis' );

$ms_why_text = function_exists( 'get_field' ) && get_field( 'ms_why_text' )
	? get_field( 'ms_why_text' )
	: esc_html__( 'Direct access to producers rarely available outside Italy, guaranteed authenticity from start to finish, and a relationship built with the care of a family maison.', 'frignanis' );

$ms_why_quote = function_exists( 'get_field' ) && get_field( 'ms_why_quote' )
	? get_field( 'ms_why_quote' )
	: esc_html__( 'A single interlocutor. The whole of Italy within your reach.', 'frignanis' );

// Assets URIs (Authentic Client Photography)
$img_vineyard_estate  = get_template_directory_uri() . '/assets/images/italian-grapes-sunlit-vine.jpg';
$img_archival_harvest = get_template_directory_uri() . '/assets/images/about-harvest-heritage.png';
$img_world_map        = get_template_directory_uri() . '/assets/images/hero-world-map-web.png';

$img_audience_retail      = get_template_directory_uri() . '/assets/images/italian-grape-harvest-workers.jpg';
$img_audience_restaurants = get_template_directory_uri() . '/assets/images/italian-fine-dining-dinner.jpg';
$img_audience_diplomatic  = get_template_directory_uri() . '/assets/images/italian-art-decor-shelving-display.jpg';
$img_audience_corporate   = get_template_directory_uri() . '/assets/images/italian-wine-celebration-toast.jpg';

$pdf_folder_url = frignanis_get_presentation_pdf_url();
?>

<!-- ==========================================
     HERO SECTION: MISSION & SERVICES
     ========================================== -->
<section class="ms-hero" aria-labelledby="ms-hero-heading">
	<div class="ms-hero__bg-media" aria-hidden="true">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-hero-estate-vineyard-color.jpg' ); ?>" 
			 alt="<?php esc_attr_e( 'Italian Terroir Hills and Vineyards', 'frignanis' ); ?>" 
			 class="ms-hero__bg-photo" 
			 width="1179" 
			 height="1105" 
			 fetchpriority="high" />
		<div class="ms-hero__bg-overlay"></div>
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-ambient.svg' ); ?>" 
			 alt="" 
			 class="ms-hero__ambient" 
			 width="1440" 
			 height="900" />
	</div>

	<div class="site-container">
		<div class="ms-hero__content">
			<div class="eyebrow">
				<span class="eyebrow-dot" aria-hidden="true"></span>
				<?php echo esc_html( $ms_hero_eyebrow ); ?>
			</div>

			<h1 id="ms-hero-heading" class="ms-hero__title">
				<?php echo esc_html( $ms_hero_title_lead ); ?><br />
				<span class="text-gold italic-serif"><?php echo esc_html( $ms_hero_title_highlight ); ?></span>.
			</h1>

			<!-- Italian Tricolor Stripe Ribbon -->
			<div class="italian-flag-stripe" aria-hidden="true">
				<span class="italian-flag-stripe__green"></span>
				<span class="italian-flag-stripe__white"></span>
				<span class="italian-flag-stripe__red"></span>
			</div>

			<p class="ms-hero__lead">
				<?php echo esc_html( $ms_hero_desc ); ?>
			</p>

			<div class="hero__cta-row" style="margin-top: 2rem; margin-bottom: 0;">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
					<?php esc_html_e( 'REQUEST A PRESENTATION', 'frignanis' ); ?>
				</a>
				<a href="#services" class="btn btn-secondary">
					<?php esc_html_e( 'EXPLORE SERVICES', 'frignanis' ); ?>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 1: NOSSA MISSÃO / OUR MISSION
     ========================================== -->
<section class="ms-mission" id="mission" aria-labelledby="mission-heading">
	<div class="site-container">
		<div class="ms-mission__layout">

			<!-- Left Column: Story & Narrative -->
			<div class="ms-mission__info">
				<div class="eyebrow"><?php echo esc_html( $ms_mission_eyebrow ); ?></div>
				
				<h2 id="mission-heading" class="section-title">
					<?php echo esc_html( $ms_mission_title ); ?>
				</h2>

				<div class="ornament-divider ornament-divider--left" aria-hidden="true">
					<span class="ornament-divider__symbol">❖</span>
				</div>

				<p class="section-lead">
					<?php echo esc_html( $ms_mission_text ); ?>
				</p>

				<!-- Historical Key Metrics -->
				<div class="ms-mission__badges">
					<div class="ms-badge-card">
						<span class="ms-badge-card__num">1626</span>
						<div class="ms-badge-card__desc">
							<strong><?php esc_html_e( 'Barony of Frignani & Frignestani', 'frignanis' ); ?></strong>
							<span><?php esc_html_e( 'Ferrara & Valencia · Centuries of noble tradition and culinary heritage.', 'frignanis' ); ?></span>
						</div>
					</div>

					<div class="ms-badge-card">
						<span class="ms-badge-card__num">100%</span>
						<div class="ms-badge-card__desc">
							<strong><?php esc_html_e( 'Guaranteed Provenance & Rigour', 'frignanis' ); ?></strong>
							<span><?php esc_html_e( 'Direct relationship with producers, transparency, and personal care.', 'frignanis' ); ?></span>
						</div>
					</div>
				</div>

				<div class="ms-mission__quote-box">
					<blockquote class="ms-mission__quote">
						« <?php esc_html_e( 'We do not sell products. We connect excellences.', 'frignanis' ); ?> »
					</blockquote>
					<cite class="ms-mission__cite"><?php esc_html_e( "FRIGNANI'S IMPORT & EXPORT · LUXEMBOURG", 'frignanis' ); ?></cite>
				</div>
			</div>

			<!-- Right Column: Archival & Terroir Dual Photography Frame -->
			<div class="ms-mission__visuals">
				<div class="ms-mission__frame-main">
					<div class="ms-img-wrapper ms-img-wrapper--primary">
						<img src="<?php echo esc_url( $img_vineyard_estate ); ?>" 
							 alt="<?php esc_attr_e( 'Italian Vineyard Terroir and Estate Production', 'frignanis' ); ?>" 
							 class="ms-img" 
							 width="1179" 
							 height="632" 
							 loading="lazy" />
						<div class="ms-img-badge">
							<span class="ms-img-badge__tag"><?php esc_html_e( "TERROIR D'ITALIA", 'frignanis' ); ?></span>
							<span class="ms-img-badge__title"><?php esc_html_e( 'Selected Family Estates', 'frignanis' ); ?></span>
						</div>
					</div>
				</div>

				<div class="ms-mission__frame-overlap">
					<div class="ms-img-wrapper ms-img-wrapper--secondary">
						<!-- Florentine Gold Corner Accents -->
						<div class="ms-corner ms-corner--tl" aria-hidden="true"></div>
						<div class="ms-corner ms-corner--tr" aria-hidden="true"></div>
						<div class="ms-corner ms-corner--bl" aria-hidden="true"></div>
						<div class="ms-corner ms-corner--br" aria-hidden="true"></div>

						<img src="<?php echo esc_url( $img_archival_harvest ); ?>" 
							 alt="<?php esc_attr_e( 'Archival Italian Grape Harvest and Family Heritage', 'frignanis' ); ?>" 
							 class="ms-img" 
							 width="1179" 
							 height="1599" 
							 loading="lazy" />
						<div class="ms-archival-tag">
							<span class="ms-archival-tag__icon"><?php frignanis_icon( 'landmark', 18 ); ?></span>
							<div class="ms-archival-tag__text">
								<strong><?php esc_html_e( 'Archivio Storico', 'frignanis' ); ?></strong>
								<span><?php esc_html_e( 'Tradizione & Raccolta', 'frignanis' ); ?></span>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 2: NOSSOS SERVIÇOS / OUR SERVICES
     ========================================== -->
<section class="ms-services" id="services" aria-labelledby="services-heading">
	<div class="site-container">
		
		<!-- Section Header -->
		<div class="ms-services__header">
			<div class="eyebrow"><?php echo esc_html( $ms_services_eyebrow ); ?></div>
			<h2 id="services-heading" class="section-title"><?php echo esc_html( $ms_services_title ); ?></h2>
			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>
			<p class="section-lead ms-services__lead-text">
				<?php echo esc_html( $ms_services_lead ); ?>
			</p>
		</div>

		<!-- World Map Artwork Centerpiece Feature -->
		<div class="ms-map-banner">
			<div class="ms-map-banner__media">
				<img src="<?php echo esc_url( $img_world_map ); ?>" 
					 alt="<?php esc_attr_e( "Frignani's Global Trade Connections - The Bridge Between Italy, Luxembourg and the World", 'frignanis' ); ?>" 
					 class="ms-map-banner__img" 
					 width="1536" 
					 height="1024" 
					 loading="lazy" />
			</div>
			<div class="ms-map-banner__caption">
				<span class="ms-map-banner__tag"><?php esc_html_e( 'INTERNATIONAL TRADE & MANAGEMENT', 'frignanis' ); ?></span>
				<h3 class="ms-map-banner__title"><?php esc_html_e( 'Your Institutional Presence Across Italian Terroirs', 'frignanis' ); ?></h3>
				<p class="ms-map-banner__desc">
					<?php esc_html_e( 'Operating from the heart of Europe in Luxembourg, connecting Italy to Luxembourg, Belgium, Germany, Spain, Netherlands, United States, Brazil, Chile, and Colombia.', 'frignanis' ); ?>
				</p>
			</div>
		</div>

		<!-- 4 Phases of End-to-End Representation -->
		<div class="ms-process-grid">
			
			<!-- Step 1 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">01</span>
					<span class="ms-process-card__pill"><?php esc_html_e( 'CURATION', 'frignanis' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php esc_html_e( 'Rigorous Producer Selection', 'frignanis' ); ?></h3>
				<p class="ms-process-card__body">
					<?php esc_html_e( 'Meticulous on-site identification of authentic family estates, evaluating harvest methods, certified organic standards, and unique terroir character.', 'frignanis' ); ?>
				</p>
				<span class="ms-process-card__it"><?php esc_html_e( 'Da seleção criteriosa de cada produtor', 'frignanis' ); ?></span>
			</div>

			<!-- Step 2 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">02</span>
					<span class="ms-process-card__pill"><?php esc_html_e( 'NEGOTIATION', 'frignanis' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php esc_html_e( 'Commercial Intermediation', 'frignanis' ); ?></h3>
				<p class="ms-process-card__body">
					<?php esc_html_e( 'High-level business management and direct negotiations conducted according to the bespoke procedural standards of each producer and client.', 'frignanis' ); ?>
				</p>
				<span class="ms-process-card__it"><?php esc_html_e( 'À negociação e gestão de negócios', 'frignanis' ); ?></span>
			</div>

			<!-- Step 3 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">03</span>
					<span class="ms-process-card__pill"><?php esc_html_e( 'CUSTOMS & FREIGHT', 'frignanis' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php esc_html_e( 'Logistics & Documentation', 'frignanis' ); ?></h3>
				<p class="ms-process-card__body">
					<?php esc_html_e( 'Complete handling of import/export customs clearance, European sanitary documentation, origin certificates, and temperature-controlled transit.', 'frignanis' ); ?>
				</p>
				<span class="ms-process-card__it"><?php esc_html_e( 'Da logística à documentação aduaneira', 'frignanis' ); ?></span>
			</div>

			<!-- Step 4 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">04</span>
					<span class="ms-process-card__pill"><?php esc_html_e( 'FULFILLMENT', 'frignanis' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php esc_html_e( 'Discreet & Secure Delivery', 'frignanis' ); ?></h3>
				<p class="ms-process-card__body">
					<?php esc_html_e( 'White-glove final delivery conducted with the utmost discretion, safety, and punctuality directly to your cellars, establishments, or venues.', 'frignanis' ); ?>
				</p>
				<span class="ms-process-card__it"><?php esc_html_e( 'Até a entrega final com discrição e segurança', 'frignanis' ); ?></span>
			</div>

		</div>

	</div>
</section>

<!-- ==========================================
     SECTION 3: A QUEM SERVIMOS / WHO WE SERVE
     ========================================== -->
<section class="ms-audience" id="audience" aria-labelledby="audience-heading">
	<div class="site-container">
		
		<div class="ms-audience__header">
			<div class="eyebrow"><?php echo esc_html( $ms_audience_eyebrow ); ?></div>
			<h2 id="audience-heading" class="section-title"><?php echo esc_html( $ms_audience_title ); ?></h2>
			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>
			<p class="section-lead">
				<?php esc_html_e( 'Tailored international representation designed exclusively for institutional and B2B clients.', 'frignanis' ); ?>
			</p>
		</div>

		<!-- 4 B2B Audience Pillars Cards -->
		<div class="ms-audience__grid">

			<!-- 1. Distributors & Supermarkets -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_retail ); ?>" 
						 alt="<?php esc_attr_e( 'Distributors and Supermarket Chains Supply', 'frignanis' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>B2B & RETAIL</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">01</span>
					<h3 class="ms-audience-card__title"><?php esc_html_e( 'Distributors & Supermarket Chains', 'frignanis' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php esc_html_e( 'Constant and certified supply, with the hallmark of authentic Italian production. Scalable procurement with full European compliance and traceability.', 'frignanis' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php esc_html_e( 'Distribuidores e redes de supermercados: fornecimento constante e certificado.', 'frignanis' ); ?></span>
					</div>
				</div>
			</article>

			<!-- 2. Fine Dining & Chefs -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_restaurants ); ?>" 
						 alt="<?php esc_attr_e( 'High Gastronomy Restaurants and Master Chefs', 'frignanis' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>GASTRONOMY & CHEFS</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">02</span>
					<h3 class="ms-audience-card__title"><?php esc_html_e( 'Fine Dining Restaurants & Chefs', 'frignanis' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php esc_html_e( 'Exceptional ingredients, terroir wines, and art décor pieces (Cooking Supreme) that transform every culinary service into an unforgettable sensory experience.', 'frignanis' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php esc_html_e( 'Restaurantes de alta gastronomia e chefs: ingredientes de exceção e vinhos de terroir.', 'frignanis' ); ?></span>
					</div>
				</div>
			</article>

			<!-- 3. Embassies & Institutions -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_diplomatic ); ?>" 
						 alt="<?php esc_attr_e( 'Embassies, Federations and Diplomatic Institutions', 'frignanis' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>DIPLOMATIC & INSTITUTIONAL</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">03</span>
					<h3 class="ms-audience-card__title"><?php esc_html_e( 'Embassies, Federations & Institutions', 'frignanis' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php esc_html_e( 'Curated selections worthy of official state receptions, diplomatic banquets, and philanthropic galas. Backed by Federazione Italiana Cuochi – Delegazione Lussemburgo.', 'frignanis' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php esc_html_e( 'Embaixadas, federações e instituições: à altura de recepções oficiais e eventos.', 'frignanis' ); ?></span>
					</div>
				</div>
			</article>

			<!-- 4. Corporations & Private Groups -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_corporate ); ?>" 
						 alt="<?php esc_attr_e( 'Major Corporations and Private Luxury Groups', 'frignanis' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>CORPORATE & BESPOKE</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">04</span>
					<h3 class="ms-audience-card__title"><?php esc_html_e( 'Major Corporations & Private Groups', 'frignanis' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php esc_html_e( 'Tailored corporate gifts, luxury gastronomic assortments, and exclusive holiday hampers composed to order for executive relations and prestigious recognition.', 'frignanis' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php esc_html_e( 'Grandes empresas e grupos privados: presentes corporativos e cestas sob medida.', 'frignanis' ); ?></span>
					</div>
				</div>
			</article>

		</div>

	</div>
</section>

<!-- ==========================================
     SECTION 4: POR QUE A FRIGNANI’S / WHY FRIGNANI'S
     ========================================== -->
<section class="ms-why" id="why-frignanis" aria-labelledby="why-heading">
	<div class="site-container">
		
		<div class="ms-why__inner">
			<div class="eyebrow"><?php echo esc_html( $ms_why_eyebrow ); ?></div>
			
			<h2 id="why-heading" class="ms-why__title">
				<?php echo esc_html( $ms_why_title ); ?>
			</h2>

			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>

			<p class="ms-why__lead">
				<?php echo esc_html( $ms_why_text ); ?>
			</p>

			<!-- Philosophical Focal Tagline Banner -->
			<div class="ms-why__quote-banner">
				<div class="italian-flag-stripe" aria-hidden="true" style="margin-bottom: 1.5rem;">
					<span class="italian-flag-stripe__green"></span>
					<span class="italian-flag-stripe__white"></span>
					<span class="italian-flag-stripe__red"></span>
				</div>
				<blockquote class="ms-why__quote-text">
					« <?php echo esc_html( $ms_why_quote ); ?> »
				</blockquote>
				<span class="ms-why__quote-origin">
					✦ <?php esc_html_e( "FRIGNANI'S · FERRARA · LUXEMBOURG", 'frignanis' ); ?> ✦
				</span>
			</div>

			<!-- 4 Pillars of Distinction -->
			<div class="ms-why__grid">
				<div class="ms-why__card">
					<div class="ms-why__icon"><?php frignanis_icon( 'landmark', 24, 'icon-svg--gold' ); ?></div>
					<h3 class="ms-why__card-title"><?php esc_html_e( 'Direct Estate Access', 'frignanis' ); ?></h3>
					<p class="ms-why__card-text">
						<?php esc_html_e( 'Direct partnerships with artisan producers and historical wineries rarely accessible outside Italy.', 'frignanis' ); ?>
					</p>
				</div>

				<div class="ms-why__card">
					<div class="ms-why__icon"><?php frignanis_icon( 'check', 24, 'icon-svg--gold' ); ?></div>
					<h3 class="ms-why__card-title"><?php esc_html_e( 'Uncompromising Authenticity', 'frignanis' ); ?></h3>
					<p class="ms-why__card-text">
						<?php esc_html_e( 'Guaranteed provenance and certified standards from the Italian terroir through to final delivery.', 'frignanis' ); ?>
					</p>
				</div>

				<div class="ms-why__card">
					<div class="ms-why__icon"><?php frignanis_icon( 'sparkles', 24, 'icon-svg--gold' ); ?></div>
					<h3 class="ms-why__card-title"><?php esc_html_e( 'Family Maison Care', 'frignanis' ); ?></h3>
					<p class="ms-why__card-text">
						<?php esc_html_e( 'An enduring relationship built with the warmth, discretion, and personal dedication of a noble family house.', 'frignanis' ); ?>
					</p>
				</div>

				<div class="ms-why__card">
					<div class="ms-why__icon"><?php frignanis_icon( 'globe', 24, 'icon-svg--gold' ); ?></div>
					<h3 class="ms-why__card-title"><?php esc_html_e( 'Single Strategic Interlocutor', 'frignanis' ); ?></h3>
					<p class="ms-why__card-text">
						<?php esc_html_e( 'One trusted contact for curation, negotiation, customs documentation, and seamless international logistics.', 'frignanis' ); ?>
					</p>
				</div>
			</div>

		</div>

	</div>
</section>

<!-- ==========================================
     SECTION 5: INSTITUTIONAL FOLDER & CTA
     ========================================== -->
<section class="ms-cta" aria-labelledby="ms-cta-heading">
	<div class="site-container">
		
		<div class="ms-cta__box">
			<div class="ms-cta__header">
				<div class="eyebrow"><?php esc_html_e( 'OFFICIAL INSTITUTIONAL PRESENTATION', 'frignanis' ); ?></div>
				<h2 id="ms-cta-heading" class="ms-cta__title">
					<?php esc_html_e( 'Begin a Bespoke Trade Partnership', 'frignanis' ); ?>
				</h2>
				<div class="ornament-divider" aria-hidden="true">
					<span class="ornament-divider__symbol">❖</span>
				</div>
				<p class="ms-cta__desc">
					<?php esc_html_e( 'We invite you to download our complete institutional PDF dossier or get in touch with our Luxembourg headquarters to discuss tailored supply, wine curation, or executive gifting.', 'frignanis' ); ?>
				</p>
			</div>

			<div class="ms-cta__actions">
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary ms-cta__btn">
					<?php esc_html_e( 'REQUEST A PRESENTATION', 'frignanis' ); ?>
				</a>
				<a href="<?php echo esc_url( $pdf_folder_url ); ?>" class="btn btn-secondary ms-cta__btn" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
					<?php frignanis_icon( 'download', 18 ); ?>
					<span><?php esc_html_e( 'Frignani Apresentation', 'frignanis' ); ?></span>
				</a>
			</div>
		</div>

	</div>
</section>

<?php
get_footer();
