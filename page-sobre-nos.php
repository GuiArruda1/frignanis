<?php
/**
 * Template Name: Sobre Nós / Quem Somos
 * Template Post Type: page
 *
 * The template for displaying the "Sobre Nós" (Who We Are / Nossa História) page.
 * Follows FRIGNANI'S brand concept, golden rules, and luxury styling in Portuguese.
 * Inspired by Terre del Dogado (terredeldogado.it) noble Italian aesthetics.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$about_eyebrow = function_exists( 'get_field' ) && get_field( 'about_hero_eyebrow' )
	? get_field( 'about_hero_eyebrow' )
	: esc_html__( 'QUEM SOMOS · HERITAGE & COMÉRCIO INTERNACIONAL', 'frignanis' );

$about_title_lead = function_exists( 'get_field' ) && get_field( 'about_title_lead' )
	? get_field( 'about_title_lead' )
	: esc_html__( 'Maison de Comércio Internacional,', 'frignanis' );

$about_title_highlight = function_exists( 'get_field' ) && get_field( 'about_title_highlight' )
	? get_field( 'about_title_highlight' )
	: esc_html__( 'Origem & Identidade Italiana', 'frignanis' );

$about_lead_desc = function_exists( 'get_field' ) && get_field( 'about_lead_desc' )
	? get_field( 'about_lead_desc' )
	: esc_html__( 'A FRIGNANI\'S é uma maison de comércio internacional (importação e exportação) sediada em Luxemburgo, de identidade e origem italianas — não uma distribuidora convencional.', 'frignanis' );
?>

<!-- ==========================================
     ABOUT HERO SECTION
     ========================================== -->
<section class="about-hero" aria-labelledby="about-title">
	<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-ambient.svg' ); ?>" 
		 alt="" 
		 class="about-hero__ambient" 
		 width="1440" 
		 height="900" 
		 aria-hidden="true" />

	<div class="site-container">
		<div class="about-hero__content">
			<div class="eyebrow">
				<span class="eyebrow-dot" aria-hidden="true"></span>
				<?php echo esc_html( $about_eyebrow ); ?>
			</div>

			<h1 id="about-title" class="about-hero__title">
				<?php echo esc_html( $about_title_lead ); ?><br />
				<span class="text-gold italic-serif"><?php echo esc_html( $about_title_highlight ); ?></span>
			</h1>

			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>

			<p class="about-hero__lead">
				<?php echo esc_html( $about_lead_desc ); ?>
			</p>
		</div>
	</div>
</section>

<!-- ==========================================
     PHILOSOPHICAL QUOTE BANNER (TERRE DEL DOGADO STYLE)
     ========================================== -->
<section class="about-quote-banner" aria-label="<?php esc_attr_e( 'Visão e Filosofia', 'frignanis' ); ?>">
	<div class="site-container">
		<div class="about-quote-banner__inner">
			<blockquote class="about-quote-banner__text">
				« <?php esc_html_e( 'Não buscamos volumes indiscriminados; cultivamos terroirs, valorizamos tradições seculares e construímos relações duradouras de mútua confiança.', 'frignanis' ); ?> »
			</blockquote>
			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>
			<cite class="about-quote-banner__cite">
				<?php esc_html_e( 'FRIGNANI\'S · MAISON DE COMÉRCIO INTERNACIONAL', 'frignanis' ); ?>
			</cite>
		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 1: 3 PILARES & NOSSA ABORDAGEM
     ========================================== -->
<section class="about-pillars" id="piliers" aria-labelledby="pillars-heading">
	<div class="site-container">
		<div class="about-pillars__layout">

			<!-- Narrative Column -->
			<div class="about-pillars__info">
				<div class="eyebrow"><?php esc_html_e( 'NOSSA ATUAÇÃO NO MUNDO', 'frignanis' ); ?></div>
				<h2 id="pillars-heading" class="section-title">
					<?php esc_html_e( 'Três Pilares de Excelência a Serviço de Mercados Exigentes', 'frignanis' ); ?>
				</h2>

				<div class="ornament-divider ornament-divider--left" aria-hidden="true">
					<span class="ornament-divider__symbol">❖</span>
				</div>

				<p class="about-pillars__text">
					<?php esc_html_e( 'Atuamos em três pilares fundamentais: Vinhos & Bebidas, Gastronomia Italiana (Food Italy) e Acessórios & Arte de Viver (Kitchen & Lifestyle), atendendo com excelência restaurantes, hotéis, supermercados premium e cassinos na Europa e no Brasil.', 'frignanis' ); ?>
				</p>
				<p class="about-pillars__text">
					<?php esc_html_e( 'Com sede no Grão-Ducado de Luxemburgo, conectamos produtores italianos e parceiros europeus diretamente a profissionais internacionais, sem intermediários supérfluos e com total segurança operacional.', 'frignanis' ); ?>
				</p>

				<div class="about-pillars__quote-box">
					<blockquote class="about-pillars__quote-text">
						« <?php esc_html_e( 'Nossa abordagem: curadoria em vez de volume, relacionamento em vez de transação.', 'frignanis' ); ?> »
					</blockquote>
				</div>
			</div>

			<!-- KPI Cards Column (Architectural Pedestals) -->
			<div class="about-pillars__kpis">
				<div class="about-kpi__list">
					<div class="about-kpi__card">
						<span class="about-kpi__num">3</span>
						<div class="about-kpi__desc">
							<strong><?php esc_html_e( 'Pilares de Atuação', 'frignanis' ); ?></strong>
							<?php esc_html_e( 'Vinhos & Bebidas, Gastronomia Italiana e Arte de Viver.', 'frignanis' ); ?>
						</div>
					</div>

					<div class="about-kpi__card">
						<span class="about-kpi__num">4</span>
						<div class="about-kpi__desc">
							<strong><?php esc_html_e( 'Mercados Estratégicos', 'frignanis' ); ?></strong>
							<?php esc_html_e( 'Restaurantes, Hotéis, Supermercados Premium e Cassinos.', 'frignanis' ); ?>
						</div>
					</div>

					<div class="about-kpi__card">
						<span class="about-kpi__num">100%</span>
						<div class="about-kpi__desc">
							<strong><?php esc_html_e( 'Curadoria & Origem Autêntica', 'frignanis' ); ?></strong>
							<?php esc_html_e( 'Seleção direta da Itália e Europa, sem intermediários.', 'frignanis' ); ?>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 2: NOSSA HISTÓRIA & HOMENAGEM À AVÓ GENTILA
     ========================================== -->
<section class="about-history" id="histoire" aria-labelledby="history-heading">
	<div class="site-container">
		<div class="about-history__layout">

			<!-- Left Column: Emotional Heart Artwork (Archival Museum Display) -->
			<div class="about-history__visual">
				<div class="about-tribute__frame-wrapper">
					<div class="about-tribute__frame">
						<!-- Florentine Gold Corner Accents -->
						<div class="about-tribute__corner about-tribute__corner--tl" aria-hidden="true"></div>
						<div class="about-tribute__corner about-tribute__corner--tr" aria-hidden="true"></div>
						<div class="about-tribute__corner about-tribute__corner--bl" aria-hidden="true"></div>
						<div class="about-tribute__corner about-tribute__corner--br" aria-hidden="true"></div>

						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-grandmother-tribute.png' ); ?>" 
							 alt="<?php esc_attr_e( 'Em memória afetuosa de Gentila Frignani', 'frignanis' ); ?>" 
							 class="about-tribute__img" 
							 width="1087" 
							 height="1447" 
							 loading="lazy" />

						<div class="about-tribute__plaque">
							<p class="about-tribute__caption">
								« <?php esc_html_e( 'O teu amor, a tua força e a tua gentileza viverão para sempre em nossos corações.', 'frignanis' ); ?> »
							</p>
							<span class="about-tribute__seal">
								✦ <?php esc_html_e( 'FRIGNANI\'S · EST. TRENTO · ITALIA', 'frignanis' ); ?> ✦
							</span>
						</div>
					</div>
				</div>
			</div>

			<!-- Right Column: Family Timeline & Narrative -->
			<div class="about-history__text">
				<div class="eyebrow"><?php esc_html_e( 'NOSSA HISTÓRIA · UMA FAMÍLIA DE ORIGEM ITALIANA', 'frignanis' ); ?></div>
				<h2 id="history-heading" class="section-title">
					<?php esc_html_e( 'Raízes Centenárias, Tradição e Paixão Familiar', 'frignanis' ); ?>
				</h2>

				<div class="ornament-divider ornament-divider--left" aria-hidden="true">
					<span class="ornament-divider__symbol">❖</span>
				</div>

				<p class="section-lead">
					<?php esc_html_e( 'Sabrina Frignani, fundadora da FRIGNANI\'S, é de origem italiana, com raízes familiares em Trento — uma terra que, na época de seus antepassados, fazia parte do Império Austro-Húngaro antes de se tornar italiana. Esse rico patrimônio transmitiu à família Frignani as tradições e os segredos de uma culinária autêntica.', 'frignanis' ); ?>
				</p>

				<!-- Interactive Golden Thread Timeline -->
				<div class="about-timeline">
					<div class="about-timeline__item">
						<span class="about-timeline__badge">1</span>
						<div class="about-timeline__content">
							<span class="about-timeline__tag"><?php esc_html_e( 'TRENTO · ANCESTRALIDADE', 'frignanis' ); ?></span>
							<h3 class="about-timeline__heading"><?php esc_html_e( 'Trento, Itália', 'frignanis' ); ?></h3>
							<p class="about-timeline__desc">
								<?php esc_html_e( 'Terra de origem da família Frignani — na época, território do Império Austro-Húngaro. O berço de uma linhagem marcada pelo profundo respeito à terra, à colheita e aos sabores tradicionais.', 'frignanis' ); ?>
							</p>
						</div>
					</div>

					<div class="about-timeline__item">
						<span class="about-timeline__badge">2</span>
						<div class="about-timeline__content">
							<span class="about-timeline__tag"><?php esc_html_e( 'LUXEMBURGO · PRESENTE & MUNDO', 'frignanis' ); ?></span>
							<h3 class="about-timeline__heading"><?php esc_html_e( 'Hoje — Luxemburgo', 'frignanis' ); ?></h3>
							<p class="about-timeline__desc">
								<?php esc_html_e( 'Hoje estabelecida em Luxemburgo, Sabrina perpetua esse legado familiar. Em homenagem às suas raízes e à sua avó, escolheu compartilhar essa história com o mundo através da curadoria de vinhos e da alta gastronomia italiana.', 'frignanis' ); ?>
							</p>
						</div>
					</div>
				</div>

				<div class="about-history__motto-box">
					<p class="about-history__motto">
						« <?php esc_html_e( 'Frignani\'s : Una passione, mille sapori.', 'frignanis' ); ?> »
					</p>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 3: MISSÃO, VISÃO & VALORES (TRÍPTICO)
     ========================================== -->
<section class="about-mvv" id="valeurs" aria-labelledby="mvv-heading">
	<div class="site-container">
		<div class="about-mvv__header">
			<div class="eyebrow"><?php esc_html_e( 'NOSSOS PRINCÍPIOS FUNDADORES', 'frignanis' ); ?></div>
			<h2 id="mvv-heading" class="section-title"><?php esc_html_e( 'Missão, Visão & Valores', 'frignanis' ); ?></h2>
			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>
			<p class="section-lead">
				<?php esc_html_e( 'Os princípios que orientam a FRIGNANI\'S na construção de pontes comerciais duradouras entre a Itália, a Europa e o mundo.', 'frignanis' ); ?>
			</p>
		</div>

		<div class="about-mvv__grid">
			<!-- Mission -->
			<div class="about-mvv__card">
				<div class="about-mvv__num">I</div>
				<h3 class="about-mvv__title"><?php esc_html_e( 'Missão', 'frignanis' ); ?></h3>
				<p class="about-mvv__body">
					<?php esc_html_e( 'Levar aos melhores estabelecimentos produtos e vinhos italianos autênticos e de alta qualidade, provenientes de terroirs de prestígio.', 'frignanis' ); ?>
				</p>
			</div>

			<!-- Vision -->
			<div class="about-mvv__card">
				<div class="about-mvv__num">II</div>
				<h3 class="about-mvv__title"><?php esc_html_e( 'Visão', 'frignanis' ); ?></h3>
				<p class="about-mvv__body">
					<?php esc_html_e( 'Tornar-se a referência boutique em comércio e seleção de vinhos italianos premium em Luxemburgo, na Bélgica e nos mercados internacionais.', 'frignanis' ); ?>
				</p>
			</div>

			<!-- Valeurs -->
			<div class="about-mvv__card">
				<div class="about-mvv__num">III</div>
				<h3 class="about-mvv__title"><?php esc_html_e( 'Valores', 'frignanis' ); ?></h3>
				<p class="about-mvv__body">
					<?php esc_html_e( 'Excelência, autenticidade, confiança mútua e relações comerciais duradouras e sustentáveis com cada parceiro.', 'frignanis' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 4: NOSSOS DIFERENCIAIS
     ========================================== -->
<section class="about-diffs" id="differenciateurs" aria-labelledby="diffs-heading">
	<div class="site-container">
		<div class="about-diffs__header">
			<div class="eyebrow"><?php esc_html_e( 'POR QUE ESCOLHER A FRIGNANI\'S', 'frignanis' ); ?></div>
			<h2 id="diffs-heading" class="section-title"><?php esc_html_e( 'Nossos Diferenciais', 'frignanis' ); ?></h2>
			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>
			<p class="section-lead">
				<?php esc_html_e( 'Por que escolher a FRIGNANI\'S em vez de uma distribuidora generalista comum.', 'frignanis' ); ?>
			</p>
		</div>

		<div class="about-diffs__grid">
			<!-- Diff 1 -->
			<div class="about-diffs__card">
				<span class="about-diffs__badge">1</span>
				<div>
					<h3 class="about-diffs__card-title"><?php esc_html_e( 'Curadoria Exclusiva', 'frignanis' ); ?></h3>
					<p class="about-diffs__card-text">
						<?php esc_html_e( 'Seleção rigorosa de vinhedos familiares de grande prestígio — sem catálogos com centenas de referências anônimas. Cada item possui história e padrão impecável.', 'frignanis' ); ?>
					</p>
				</div>
			</div>

			<!-- Diff 2 -->
			<div class="about-diffs__card">
				<span class="about-diffs__badge">2</span>
				<div>
					<h3 class="about-diffs__card-title"><?php esc_html_e( 'Relacionamento Direto', 'frignanis' ); ?></h3>
					<p class="about-diffs__card-text">
						<?php esc_html_e( 'Um interlocutor único, dedicado e disponível, desde a primeira degustação até a logística de reabastecimento contínuo.', 'frignanis' ); ?>
					</p>
				</div>
			</div>

			<!-- Diff 3 -->
			<div class="about-diffs__card">
				<span class="about-diffs__badge">3</span>
				<div>
					<h3 class="about-diffs__card-title"><?php esc_html_e( 'Agilidade & Personalização', 'frignanis' ); ?></h3>
					<p class="about-diffs__card-text">
						<?php esc_html_e( 'Estrutura leve e eficiente: decisões rápidas, respostas imediatas e total adaptação sob medida às necessidades do seu negócio.', 'frignanis' ); ?>
					</p>
				</div>
			</div>

			<!-- Diff 4 -->
			<div class="about-diffs__card">
				<span class="about-diffs__badge">4</span>
				<div>
					<h3 class="about-diffs__card-title"><?php esc_html_e( 'Storytelling Familiar', 'frignanis' ); ?></h3>
					<p class="about-diffs__card-text">
						<?php esc_html_e( 'A história autêntica de uma família italiana, um diferencial de conexão emocional e valor real para a sua carta de vinhos e clientes.', 'frignanis' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 5: NÍVEIS DE SELEÇÃO & TERROIRS (DARK LUXURY)
     ========================================== -->
<section class="about-selection" id="selection" aria-labelledby="selection-heading">
	<div class="site-container">
		<div class="text-center" style="max-width: 720px; margin: 0 auto;">
			<div class="eyebrow"><?php esc_html_e( 'CURADORIA DE PRODUTORES E TERROIRS FAMILIARES', 'frignanis' ); ?></div>
			<h2 id="selection-heading" class="section-title"><?php esc_html_e( 'Níveis de Seleção & Terroirs', 'frignanis' ); ?></h2>
			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>
			<p class="section-lead">
				<?php esc_html_e( 'Uma seleção estruturada por perfis gastronômicos e padrões de excelência, desenhada para sommeliers, chefs e gestores de hotelaria.', 'frignanis' ); ?>
			</p>
		</div>

		<div class="about-selection__grid">
			<!-- Tier 1 -->
			<div class="about-selection__card">
				<div class="about-selection__letter">P</div>
				<h3 class="about-selection__tier"><?php esc_html_e( 'Espumantes & Prosecco Premium', 'frignanis' ); ?></h3>
				<span class="about-selection__subtier"><?php esc_html_e( 'Valdobbiadene & Franciacorta', 'frignanis' ); ?></span>
				<p class="about-selection__desc">
					<?php esc_html_e( 'Ideal para a venda em taça e cartas refinadas. Frescor vibrante, perlage elegante e acessibilidade premium para aperitivos e recepções de alto nível.', 'frignanis' ); ?>
				</p>
			</div>

			<!-- Tier 2 -->
			<div class="about-selection__card">
				<div class="about-selection__letter">V</div>
				<h3 class="about-selection__tier"><?php esc_html_e( 'Vinhos de Seleção Clássica', 'frignanis' ); ?></h3>
				<span class="about-selection__subtier"><?php esc_html_e( 'Gama Média-Alta', 'frignanis' ); ?></span>
				<p class="about-selection__desc">
					<?php esc_html_e( 'Excelente relação qualidade-preço, perfeito para compor uma carta completa e equilibrada (branco, tinto e rosé) a serviço de mesas gastronômicas.', 'frignanis' ); ?>
				</p>
			</div>

			<!-- Tier 3 -->
			<div class="about-selection__card">
				<div class="about-selection__letter">T</div>
				<h3 class="about-selection__tier"><?php esc_html_e( 'Alta Gama & Terroirs de Exceção', 'frignanis' ); ?></h3>
				<span class="about-selection__subtier"><?php esc_html_e( 'Toscana, Piemonte & Crus Nobres', 'frignanis' ); ?></span>
				<p class="about-selection__desc">
					<?php esc_html_e( 'Prestígio histórico e familiar secular. Vinhos de exceção criados para fine dining, eventos exclusivos e adegas de apreciadores exigentes.', 'frignanis' ); ?>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- ==========================================
     SECTION 6: B2B PARTNERSHIP CTA (TERRE DEL DOGADO LUXURY INVITATION)
     ========================================== -->
<section class="about-cta" aria-labelledby="cta-heading">
	<div class="site-container">
		<div class="about-cta__inner">
			<div class="eyebrow"><?php esc_html_e( 'RESTAURANTES · HOTÉIS · CASSINOS · SUPERMERCADOS', 'frignanis' ); ?></div>
			<h2 id="cta-heading" class="about-cta__title">
				<?php esc_html_e( 'Construamos uma Parceria Direta e Duradoura', 'frignanis' ); ?>
			</h2>
			<div class="ornament-divider" aria-hidden="true">
				<span class="ornament-divider__symbol">❖</span>
			</div>
			<p class="about-cta__desc">
				<?php esc_html_e( 'Sabrina Frignani está à disposição para apresentar nosso portfólio completo de vinhos, azeites e artigos de mesa de alto padrão para o seu negócio.', 'frignanis' ); ?>
			</p>
			<div class="hero__cta-row" style="justify-content: center; margin-bottom: 0;">
				<a href="mailto:info@frignanis.com" class="btn btn-primary">
					<?php esc_html_e( 'CONTATO POR E-MAIL', 'frignanis' ); ?>
				</a>
				<a href="#footer" class="btn btn-secondary">
					<?php esc_html_e( 'VER DADOS DE CONTATO', 'frignanis' ); ?>
				</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
