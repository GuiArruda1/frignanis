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
$ms_hero_eyebrow = frignanis_field( 'ms_hero_eyebrow', '— 02 · MISSION & SERVICES · INTERNATIONAL TRADE', '— 02 · MISSÃO & SERVIÇOS · COMÉRCIO INTERNACIONAL' );

$ms_hero_title_lead = frignanis_field( 'ms_hero_title_lead', 'The Bridge Between Italy and the', 'A Ponte entre a Itália e o' );

$ms_hero_title_highlight = frignanis_field( 'ms_hero_title_highlight', 'World', 'Mundo' );

$ms_hero_desc = frignanis_field(
	'ms_hero_desc',
	'Business management and commercial intermediation of authentic Italian excellences. We represent traditional producers with certified provenance, discretion, and personalized service — from Luxembourg to the world.',
	'Gestão de negócios e intermediação comercial de excelências italianas, segundo o procedimento padrão de cada produtor e de cada cliente. De Luxemburgo para o mundo.'
);

// 1. Nossa Missão / Our Mission
$ms_mission_eyebrow = frignanis_field( 'ms_mission_eyebrow', 'OUR MISSION', 'NOSSA MISSÃO' );

$ms_mission_title = frignanis_field( 'ms_mission_title', 'Bringing Authentic Italy to the World', 'Levar a Itália Autêntica ao Mundo' );

$ms_mission_text = frignanis_field(
	'ms_mission_text',
	'Bringing authentic Italy to the world with the rigor of those who know its origin and the care of those who honor a heritage. We connect passionate producers with discerning tables, ensuring guaranteed provenance, transparency at every step, and truly personalized service.',
	'Levar a Itália autêntica ao mundo com o rigor de quem conhece a sua origem e o cuidado de quem honra uma herança. Aproximamos quem produz com paixão de quem serve com excelência, com procedência garantida, transparência em cada etapa e um atendimento verdadeiramente pessoal.'
);

// 2. Nossos Serviços / Our Services
$ms_services_eyebrow = frignanis_field( 'ms_services_eyebrow', 'OUR SERVICES', 'NOSSOS SERVIÇOS' );

$ms_services_title = frignanis_field( 'ms_services_title', 'More Than Supplying, We Represent', 'Mais do que Fornecer, Representamos' );

$ms_services_lead = frignanis_field(
	'ms_services_lead',
	'We are your presence in Italy: from the rigorous selection of each producer to negotiation, logistics, import and export documentation, through to final delivery, handled with discretion and security wherever you are.',
	'Mais do que fornecer, representamos. Somos a sua presença na Itália: da seleção criteriosa de cada produtor à negociação, da logística à documentação de importação e exportação, até a entrega final, conduzida com discrição e segurança onde quer que esteja.'
);

// 3. A Quem Servimos / Who We Serve
$ms_audience_eyebrow = frignanis_field( 'ms_audience_eyebrow', 'WHO WE SERVE', 'A QUEM SERVIMOS' );

$ms_audience_title = frignanis_field( 'ms_audience_title', 'Strategic Partners Across Discerning Sectors', 'Parceiros Estratégicos nos Mais Exigentes Setores' );

// 4. Por Que a Frignani's / Why Frignani's
$ms_why_eyebrow = frignanis_field( 'ms_why_eyebrow', "WHY FRIGNANI'S", "POR QUE A FRIGNANI'S" );

$ms_why_title = frignanis_field( 'ms_why_title', 'The Care of a Family Maison. The Reach of International Trade.', 'O Cuidado de uma Casa de Família. O Alcance do Comércio Internacional.' );

$ms_why_text = frignanis_field(
	'ms_why_text',
	'Direct access to producers rarely available outside Italy, guaranteed authenticity from start to finish, and a relationship built with the care of a family maison.',
	'Acesso direto a produtores raramente disponíveis fora da Itália, autenticidade assegurada do início ao fim e um relacionamento construído com a atenção de uma casa de família.'
);

$ms_why_quote = frignanis_field(
	'ms_why_quote',
	'A single interlocutor. The whole of Italy within your reach.',
	'Um único interlocutor. A Itália inteira ao seu alcance.'
);

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
					<?php frignanis_e( 'REQUEST A PRESENTATION', 'SOLICITAR UMA APRESENTAÇÃO' ); ?>
				</a>
				<a href="#services" class="btn btn-secondary">
					<?php frignanis_e( 'EXPLORE SERVICES', 'EXPLORAR SERVIÇOS' ); ?>
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
							<strong><?php frignanis_e( 'Barony of Frignani & Frignestani', 'Baronia de Frignani & Frignestani' ); ?></strong>
							<span><?php frignanis_e( 'Ferrara & Valencia · Centuries of noble tradition and culinary heritage.', 'Ferrara & Valência · Séculos de nobre tradição e herança culinária.' ); ?></span>
						</div>
					</div>

					<div class="ms-badge-card">
						<span class="ms-badge-card__num">100%</span>
						<div class="ms-badge-card__desc">
							<strong><?php frignanis_e( 'Guaranteed Provenance & Rigour', 'Procedência Garantida & Rigor' ); ?></strong>
							<span><?php frignanis_e( 'Direct relationship with producers, transparency, and personal care.', 'Relacionamento direto com produtores, transparência e cuidado pessoal.' ); ?></span>
						</div>
					</div>
				</div>

				<div class="ms-mission__quote-box">
					<blockquote class="ms-mission__quote">
						<span class="ms-mission__quote-lead">« <?php frignanis_e( 'We connect you to the finest of Italy! From prestigious Italian brands to international markets.', 'Conectamos você ao melhor da Itália! De marcas italianas de prestígio a mercados internacionais.' ); ?></span>
						<span class="ms-mission__quote-body"><?php frignanis_e( 'From Luxembourg, in the heart of Europe, we transform tradition, quality, innovation, and vanguard into strategic business opportunities.', 'A partir de Luxemburgo, no coração da Europa, transformamos tradição, qualidade, inovação e vanguarda em oportunidades estratégicas de negócios.' ); ?> »</span>
					</blockquote>
					<cite class="ms-mission__cite"><?php esc_html_e( "FRIGNANI'S IMPORT & EXPORT · LUXEMBOURG", 'frignanis' ); ?></cite>
				</div>
			</div>

			<!-- Right Column: Archival & Terroir Dual Photography Frame -->
			<div class="ms-mission__visuals">
				<div class="ms-mission__frame-main">
					<div class="ms-img-wrapper ms-img-wrapper--primary">
						<img src="<?php echo esc_url( $img_vineyard_estate ); ?>" 
							 alt="<?php frignanis_attr_e( 'Italian Vineyard Terroir and Estate Production', 'Terroir de vinhedos e produção familiar italiana' ); ?>" 
							 class="ms-img" 
							 width="1179" 
							 height="632" 
							 loading="lazy" />
						<div class="ms-img-badge">
							<span class="ms-img-badge__tag"><?php esc_html_e( "TERROIR D'ITALIA", 'frignanis' ); ?></span>
							<span class="ms-img-badge__title"><?php frignanis_e( 'Selected Family Estates', 'Propriedades Familiares Selecionadas' ); ?></span>
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
							 alt="<?php frignanis_attr_e( 'Archival Italian Grape Harvest and Family Heritage', 'Arquivo histórico da colheita de uvas e tradição familiar italiana' ); ?>" 
							 class="ms-img" 
							 width="1179" 
							 height="1599" 
							 loading="lazy" />
						<div class="ms-archival-tag">
							<span class="ms-archival-tag__icon"><?php frignanis_icon( 'landmark', 18 ); ?></span>
							<div class="ms-archival-tag__text">
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
				<span class="ms-map-banner__tag"><?php frignanis_e( 'INTERNATIONAL TRADE & MANAGEMENT', 'IMPORTAÇÃO & EXPORTAÇÃO / GESTÃO DE NEGÓCIOS' ); ?></span>
				<h3 class="ms-map-banner__title"><?php frignanis_e( 'Your Institutional Presence Across Italian Terroirs', 'A Sua Presença Institucional nos Terroirs Italianos' ); ?></h3>
				<p class="ms-map-banner__desc">
					<?php frignanis_e( 'Operating from the heart of Europe in Luxembourg, connecting Italy to Luxembourg, Belgium, Germany, Spain, Netherlands, United States, Brazil, Chile, and Colombia.', 'Sediada em Luxemburgo, no coração da Europa, conectando a Itália a Luxemburgo, Bélgica, Alemanha, Espanha, Países Baixos, Estados Unidos, Brasil, Chile e Colômbia.' ); ?>
				</p>
			</div>
		</div>

		<!-- 4 Phases of End-to-End Representation -->
		<div class="ms-process-grid">
			
			<!-- Step 1 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">01</span>
					<span class="ms-process-card__pill"><?php frignanis_e( 'CURATION', 'CURADORIA' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php frignanis_e( 'Rigorous Producer Selection', 'Seleção Criteriosa de Produtores' ); ?></h3>
				<p class="ms-process-card__body">
					<?php frignanis_e( 'Meticulous on-site identification of authentic family estates, evaluating harvest methods, certified organic standards, and unique terroir character.', 'Identificação meticulosa de propriedades familiares autênticas, avaliando métodos de colheita, certificações biológicas e o caráter único do terroir.' ); ?>
				</p>
				<span class="ms-process-card__it"><?php frignanis_e( 'From rigorous producer selection', 'Da seleção criteriosa de cada produtor' ); ?></span>
			</div>

			<!-- Step 2 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">02</span>
					<span class="ms-process-card__pill"><?php frignanis_e( 'NEGOTIATION', 'NEGOCIAÇÃO' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php frignanis_e( 'Commercial Intermediation', 'Intermediação Comercial' ); ?></h3>
				<p class="ms-process-card__body">
					<?php frignanis_e( 'High-level business management and direct negotiations conducted according to the bespoke procedural standards of each producer and client.', 'Gestão de negócios de alto nível e negociações diretas conduzidas segundo o procedimento padrão de cada produtor e cliente.' ); ?>
				</p>
				<span class="ms-process-card__it"><?php frignanis_e( 'To business negotiation and management', 'À negociação e gestão de negócios' ); ?></span>
			</div>

			<!-- Step 3 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">03</span>
					<span class="ms-process-card__pill"><?php frignanis_e( 'CUSTOMS & FREIGHT', 'ADUANA & LOGÍSTICA' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php frignanis_e( 'Logistics & Documentation', 'Logística & Documentação' ); ?></h3>
				<p class="ms-process-card__body">
					<?php frignanis_e( 'Complete handling of import/export customs clearance, European sanitary documentation, origin certificates, and temperature-controlled transit.', 'Gestão completa do desembaraço aduaneiro de importação e exportação, documentação sanitária europeia, certificados de origem e transporte climatizado.' ); ?>
				</p>
				<span class="ms-process-card__it"><?php frignanis_e( 'From logistics to customs documentation', 'Da logística à documentação aduaneira' ); ?></span>
			</div>

			<!-- Step 4 -->
			<div class="ms-process-card">
				<div class="ms-process-card__header">
					<span class="ms-process-card__num">04</span>
					<span class="ms-process-card__pill"><?php frignanis_e( 'FULFILLMENT', 'ENTREGA' ); ?></span>
				</div>
				<h3 class="ms-process-card__title"><?php frignanis_e( 'Discreet & Secure Delivery', 'Entrega com Discrição e Segurança' ); ?></h3>
				<p class="ms-process-card__body">
					<?php frignanis_e( 'White-glove final delivery conducted with the utmost discretion, safety, and punctuality directly to your cellars, establishments, or venues.', 'Entrega final realizada com máxima discrição, segurança e pontualidade diretamente às suas adegas, estabelecimentos ou eventos.' ); ?>
				</p>
				<span class="ms-process-card__it"><?php frignanis_e( 'Through to final delivery with discretion and security', 'Até a entrega final com discrição e segurança' ); ?></span>
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
				<?php frignanis_e( 'Tailored international representation designed exclusively for institutional and B2B clients.', 'Representação internacional sob medida, concebida exclusivamente para clientes institucionais e B2B.' ); ?>
			</p>
		</div>

		<!-- 4 B2B Audience Pillars Cards -->
		<div class="ms-audience__grid">

			<!-- 1. Distributors & Supermarkets -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_retail ); ?>" 
						 alt="<?php frignanis_attr_e( 'Distributors and Supermarket Chains Supply', 'Fornecimento para distribuidores e redes de supermercados' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>B2B & RETAIL</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">01</span>
					<h3 class="ms-audience-card__title"><?php frignanis_e( 'Distributors & Supermarket Chains', 'Distribuidores e Redes de Supermercados' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php frignanis_e( 'Constant and certified supply, with the hallmark of authentic Italian production. Scalable procurement with full European compliance and traceability.', 'Fornecimento constante e certificado, com a assinatura da autêntica produção italiana. Aquisições escaláveis com total conformidade e rastreabilidade europeia.' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php frignanis_e( 'Distributors and supermarket chains: constant and certified supply.', 'Distribuidores e redes de supermercados: fornecimento constante e certificado.' ); ?></span>
					</div>
				</div>
			</article>

			<!-- 2. Fine Dining & Chefs -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_restaurants ); ?>" 
						 alt="<?php frignanis_attr_e( 'High Gastronomy Restaurants and Master Chefs', 'Restaurantes de alta gastronomia e chefs' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>GASTRONOMY & CHEFS</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">02</span>
					<h3 class="ms-audience-card__title"><?php frignanis_e( 'Fine Dining Restaurants & Chefs', 'Restaurantes de Alta Gastronomia e Chefs' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php frignanis_e( 'Exceptional ingredients, terroir wines, and art décor pieces (Cooking Supreme) that transform every culinary service into an unforgettable sensory experience.', 'Ingredientes de exceção, vinhos de terroir e peças de art décor (Cooking Supreme) que transformam cada serviço em uma experiência sensorial inesquecível.' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php frignanis_e( 'Fine dining restaurants and chefs: exceptional ingredients and terroir wines.', 'Restaurantes de alta gastronomia e chefs: ingredientes de exceção e vinhos de terroir.' ); ?></span>
					</div>
				</div>
			</article>

			<!-- 3. Embassies & Institutions -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_diplomatic ); ?>" 
						 alt="<?php frignanis_attr_e( 'Embassies, Federations and Diplomatic Institutions', 'Embaixadas, federações e instituições diplomáticas' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>DIPLOMATIC & INSTITUTIONAL</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">03</span>
					<h3 class="ms-audience-card__title"><?php frignanis_e( 'Embassies, Federations & Institutions', 'Embaixadas, Federações e Instituições' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php frignanis_e( 'Curated selections worthy of official state receptions, diplomatic banquets, and philanthropic galas. Backed by Federazione Italiana Cuochi – Delegazione Lussemburgo.', 'Seleções à altura de recepções oficiais de estado, banquetes diplomáticos e jantares beneficentes. Com o apoio da Federazione Italiana Cuochi – Delegazione Lussemburgo.' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php frignanis_e( 'Embassies, federations, and institutions: worthy of official receptions and events.', 'Embaixadas, federações e instituições: à altura de recepções oficiais e eventos.' ); ?></span>
					</div>
				</div>
			</article>

			<!-- 4. Corporations & Private Groups -->
			<article class="ms-audience-card">
				<div class="ms-audience-card__media">
					<img src="<?php echo esc_url( $img_audience_corporate ); ?>" 
						 alt="<?php frignanis_attr_e( 'Major Corporations and Private Luxury Groups', 'Grandes empresas e grupos privados' ); ?>" 
						 class="ms-audience-card__img" 
						 loading="lazy" />
					<div class="ms-audience-card__badge">
						<span>CORPORATE & BESPOKE</span>
					</div>
				</div>
				<div class="ms-audience-card__content">
					<span class="ms-audience-card__num">04</span>
					<h3 class="ms-audience-card__title"><?php frignanis_e( 'Major Corporations & Private Groups', 'Grandes Empresas e Grupos Privados' ); ?></h3>
					<p class="ms-audience-card__desc">
						<?php frignanis_e( 'Tailored corporate gifts, luxury gastronomic assortments, and exclusive holiday hampers composed to order for executive relations and prestigious recognition.', 'Presentes corporativos sob medida, sortimentos gastronômicos de luxo e cestas comemorativas exclusivas compostas por encomenda.' ); ?>
					</p>
					<div class="ms-audience-card__footer">
						<span class="ms-audience-card__pt"><?php frignanis_e( 'Major corporations and private groups: bespoke corporate gifts and hampers.', 'Grandes empresas e grupos privados: presentes corporativos e cestas sob medida.' ); ?></span>
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
					<h3 class="ms-why__card-title"><?php frignanis_e( 'Direct Estate Access', 'Acesso Direto aos Produtores' ); ?></h3>
					<p class="ms-why__card-text">
						<?php frignanis_e( 'Direct partnerships with artisan producers and historical wineries rarely accessible outside Italy.', 'Parcerias diretas com produtores artesanais e vinícolas históricas raramente acessíveis fora da Itália.' ); ?>
					</p>
				</div>

				<div class="ms-why__card">
					<div class="ms-why__icon"><?php frignanis_icon( 'check', 24, 'icon-svg--gold' ); ?></div>
					<h3 class="ms-why__card-title"><?php frignanis_e( 'Uncompromising Authenticity', 'Autenticidade Inegociável' ); ?></h3>
					<p class="ms-why__card-text">
						<?php frignanis_e( 'Guaranteed provenance and certified standards from the Italian terroir through to final delivery.', 'Procedência garantida e padrões certificados do terroir italiano até a entrega final.' ); ?>
					</p>
				</div>

				<div class="ms-why__card">
					<div class="ms-why__icon"><?php frignanis_icon( 'sparkles', 24, 'icon-svg--gold' ); ?></div>
					<h3 class="ms-why__card-title"><?php frignanis_e( 'Family Maison Care', 'Cuidado de Casa de Família' ); ?></h3>
					<p class="ms-why__card-text">
						<?php frignanis_e( 'An enduring relationship built with the warmth, discretion, and personal dedication of a noble family house.', 'Um relacionamento duradouro construído com a atenção, discrição e dedicação pessoal de uma casa nobre de família.' ); ?>
					</p>
				</div>

					<div class="ms-why__icon"><?php frignanis_icon( 'globe', 24, 'icon-svg--gold' ); ?></div>
					<h3 class="ms-why__card-title"><?php frignanis_e( 'Single Strategic Interlocutor', 'Único Interlocutor Estratégico' ); ?></h3>
					<p class="ms-why__card-text">
						<?php frignanis_e( 'One trusted contact for curation, negotiation, customs documentation, and seamless international logistics.', 'Um único contato de confiança para curadoria, negociação, documentação aduaneira e logística internacional integrada.' ); ?>
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
			<div class="ms-cta__grid">
				
				<!-- Visual Illustration Frame -->
				<div class="ms-cta__visual">
					<div class="ms-cta__img-frame">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about_us_partners.jpeg' ); ?>" 
							 alt="<?php frignanis_attr_e( 'International Trade Partnership · Handshake and European trade axis', 'Parceria Comercial Internacional · Aperto de mãos e eixo comercial europeu' ); ?>" 
							 class="ms-cta__img" 
							 width="1638" 
							 height="2048" 
							 loading="lazy" />
					</div>
				</div>

				<!-- Content Column -->
				<div class="ms-cta__content">
					<div class="ms-cta__header">
						<div class="eyebrow"><?php frignanis_e( 'OFFICIAL INSTITUTIONAL PRESENTATION', 'APRESENTAÇÃO INSTITUCIONAL OFICIAL' ); ?></div>
						<h2 id="ms-cta-heading" class="ms-cta__title">
							<?php frignanis_e( 'Begin a Bespoke Trade Partnership', 'Inicie uma parceria comercial personalizada' ); ?>
						</h2>
						<div class="ornament-divider" aria-hidden="true">
							<span class="ornament-divider__symbol">❖</span>
						</div>
						<p class="ms-cta__desc">
							<?php frignanis_e( 'We invite you to download our complete institutional PDF dossier or get in touch with our Luxembourg headquarters to discuss tailored supply, wine curation, or executive gifting.', 'Convidamos você a baixar nosso dossiê institucional completo em PDF ou a entrar em contato com nossa sede em Luxemburgo para discutir fornecimento personalizado, seleção de vinhos ou presentes executivos.' ); ?>
						</p>
					</div>

					<div class="ms-cta__actions">
						<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary ms-cta__btn">
							<?php frignanis_e( 'REQUEST A PRESENTATION', 'SOLICITAR UMA APRESENTAÇÃO' ); ?>
						</a>
						<a href="<?php echo esc_url( $pdf_folder_url ); ?>" class="btn btn-secondary ms-cta__btn" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
							<?php frignanis_icon( 'download', 18 ); ?>
							<span><?php frignanis_e( 'Frignani Presentation', 'Apresentação Frignani' ); ?></span>
						</a>
					</div>
				</div>

			</div>
		</div>

	</div>
</section>

<?php
get_footer();
