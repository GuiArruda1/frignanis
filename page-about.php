<?php
/**
 * Template Name: About Us / Sobre Nós
 * Template Post Type: page
 *
 * The template for displaying the "About Us / Sobre Nós" page.
 * Editorial maison layout with authentic heritage storytelling, 
 * historical milestone badges, and gold-accented grand closing block.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// --------------------------------------------------
// Official Text & Dynamic ACF Fields
// --------------------------------------------------

$about_hero_eyebrow = function_exists( 'get_field' ) && get_field( 'about_hero_eyebrow' )
	? get_field( 'about_hero_eyebrow' )
	: esc_html__( 'SOBRE NÓS · UMA HISTÓRIA FAMILIAR & VISÃO INTERNACIONAL', 'frignanis' );

$about_hero_title_lead = function_exists( 'get_field' ) && get_field( 'about_hero_title_lead' )
	? get_field( 'about_hero_title_lead' )
	: esc_html__( 'Uma herança italiana.', 'frignanis' );

$about_hero_title_highlight = function_exists( 'get_field' ) && get_field( 'about_hero_title_highlight' )
	? get_field( 'about_hero_title_highlight' )
	: esc_html__( 'Uma história que atravessa gerações e continentes.', 'frignanis' );

// Section Roots: Ferrara, Emilia-Romagna
$about_roots_text = esc_html__( 'Nas terras verdejantes do norte da Itália, na Emilia-Romagna, província de Ferrara, encontram-se as raízes da família Frignani. Uma região onde a tradição, a arte de viver e a excelência gastronômica fazem parte de um patrimônio cultural transmitido ao longo dos séculos.', 'frignanis' );

// Section 1: Linhagem Histórica & A Travessia do Atlântico
$about_sec1_title = function_exists( 'get_field' ) && get_field( 'about_section_1_title' )
	? get_field( 'about_section_1_title' )
	: esc_html__( 'LINHAGEM HISTÓRICA & A TRAVESSIA DO ATLÂNTICO', 'frignanis' );

$about_sec1_p1 = esc_html__( 'A história do nome Frignani, entretanto, ultrapassa as fronteiras italianas. Sua presença nos registros históricos europeus remonta a séculos anteriores, incluindo a criação da Baronia de Frignani e Frignestani, em 30 de agosto de 1626, em Valência, Espanha, durante o reinado de Filipe IV, concedida a Gaspar Palavicino y Centurión.', 'frignanis' );

$about_sec1_p2 = esc_html__( 'Em 29 de setembro de 1891, um novo capítulo dessa história familiar começou quando nossos antepassados, vindos da Itália, desembarcaram no Porto de Santa Cruz, no Espírito Santo, Brasil. Trouxeram consigo suas tradições, seus valores, os sabores da terra natal e o espírito empreendedor que atravessaria gerações.', 'frignanis' );

$about_sec1_p3 = esc_html__( 'Mais de um século depois, em Vitória, Espírito Santo, Sabrina Frignani cresceu entre a herança cultural italiana e o dinamismo de uma cidade portuária conectada ao comércio internacional. Sua trajetória profissional entre o Brasil e a Europa, especialmente na Espanha, fortaleceu uma visão empresarial pautada pela excelência, pelo conhecimento de diferentes mercados e pela valorização das relações humanas.', 'frignanis' );

// Section 2: O Caminho de Volta às Origens Europeias
$about_sec2_title = function_exists( 'get_field' ) && get_field( 'about_section_2_title' )
	? get_field( 'about_section_2_title' )
	: esc_html__( 'O CAMINHO DE VOLTA ÀS ORIGENS EUROPEIAS', 'frignanis' );

$about_sec2_p1 = esc_html__( 'Hoje, a nova geração Frignani realiza simbolicamente o caminho de volta às suas origens europeias.', 'frignanis' );

$about_sec2_p2 = esc_html__( 'Com sede em Luxemburgo, no coração da Europa, nasce a Frignani’s Import & Export, unindo tradição italiana, experiência em gestão internacional e uma visão contemporânea de negócios.', 'frignanis' );

$about_sec2_p3 = esc_html__( 'Com o apoio da Federazione Italiana Cuochi – Delegazione Lussemburgo, estabelecemos pontes entre produtores, marcas e mercados, promovendo produtos selecionados pela sua autenticidade, qualidade e excelência.', 'frignanis' );

$about_sec2_p4 = esc_html__( 'Mais do que importar e exportar, nossa missão é aproximar culturas, valorizar produtores e construir relações comerciais duradouras, oferecendo um serviço personalizado, criterioso e eficiente, da origem à entrega final.', 'frignanis' );

// Fechamento & Signature
$about_closing_cadence = "Da Itália às Américas.\nDas Américas à Europa.\nDa Europa para o mundo.";

$about_closing_synthesis = esc_html__( 'Mais do que importar e exportar, nossa missão é aproximar culturas, valorizar produtores e construir relações comerciais duradouras — com um serviço personalizado, criterioso e eficiente, da origem à entrega final.', 'frignanis' );

$about_closing_brand = 'FRIGNANI’S IMPORT & EXPORT';

$about_closing_motto = esc_html__( 'A ponte entre a Itália e o mundo.', 'frignanis' );
?>

<div class="about-page-editorial">

	<!-- ==========================================
	     HERO HEADER: ABOUT US
	     ========================================== -->
	<section class="about-hero about-hero--editorial" aria-labelledby="about-hero-title">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-ambient.svg' ); ?>" 
			 alt="" 
			 class="about-hero__ambient" 
			 width="1440" 
			 height="900" 
			 aria-hidden="true" />

		<div class="site-container">
			<div class="about-hero__inner about-hero__inner--editorial">
				<?php if ( ! empty( $about_hero_eyebrow ) ) : ?>
					<div class="eyebrow">
						<span class="eyebrow-dot" aria-hidden="true"></span>
						<?php echo esc_html( $about_hero_eyebrow ); ?>
					</div>
				<?php endif; ?>

				<h1 id="about-hero-title" class="about-hero__title">
					<?php echo esc_html( $about_hero_title_lead ); ?><br />
					<span class="text-gold italic-serif"><?php echo esc_html( $about_hero_title_highlight ); ?></span>
				</h1>

				<!-- Italian Flag Ribbon Accent -->
				<div class="italian-flag-stripe" aria-hidden="true">
					<span class="italian-flag-stripe__green"></span>
					<span class="italian-flag-stripe__white"></span>
					<span class="italian-flag-stripe__red"></span>
				</div>
			</div>
		</div>
	</section>

	<!-- ==========================================
	     MAIN EDITORIAL ARTICLE & SHOWCASE
	     ========================================== -->
	<article class="about-editorial" id="about-story" aria-label="<?php esc_attr_e( 'Our History and Heritage', 'frignanis' ); ?>">
		<div class="site-container site-container--wide">

			<!-- ----------------------------------------
			     FEATURED SHOWCASE: AS RAÍZES EM FERRARA
			     ---------------------------------------- -->
			<section class="about-heritage-showcase" aria-labelledby="heritage-showcase-title">
				<!-- Gold Leaf Texture Accent Bar -->
				<div class="about-heritage-showcase__gold-bar" aria-hidden="true"></div>

				<div class="about-heritage-showcase__inner">
					
					<!-- Left Narrative Column -->
					<div class="about-heritage-showcase__content">
						<div class="about-heritage-showcase__pill-row">
							<span class="about-heritage-showcase__pill"><?php esc_html_e( 'AS RAÍZES FAMILIARES', 'frignanis' ); ?></span>
							<span class="about-heritage-showcase__pill-line" aria-hidden="true"></span>
						</div>

						<h2 id="heritage-showcase-title" class="about-heritage-showcase__title">
							Ferrara · Emilia-Romagna
						</h2>

						<div class="about-heritage-showcase__text">
							<p>
								<?php echo esc_html( $about_roots_text ); ?>
							</p>
						</div>

						<!-- Tribute to Gentila Frignani -->
						<div class="about-heritage-tribute" aria-label="<?php esc_attr_e( 'Tribute to Gentila Frignani', 'frignanis' ); ?>">
							<div class="about-heritage-tribute__arch">
								<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gentila-frignani-portrait.png' ); ?>" 
									 alt="<?php esc_attr_e( 'Gentila Frignani', 'frignanis' ); ?>" 
									 class="about-heritage-tribute__img" 
									 width="250" 
									 height="300" 
									 loading="lazy" />
							</div>
							<div class="about-heritage-tribute__info">
								<span class="about-heritage-tribute__intro"><?php esc_html_e( 'In amorevole ricordo di', 'frignanis' ); ?></span>
								<h3 class="about-heritage-tribute__name">Gentila Frignani</h3>
								<p class="about-heritage-tribute__dedication"><?php esc_html_e( 'Le nostre radici, sempre nel cuore.', 'frignanis' ); ?></p>
							</div>
						</div>
					</div>

					<!-- Right Architectural Arch Window & Navy Block -->
					<div class="about-heritage-showcase__visual" aria-hidden="true">
						<div class="about-heritage-showcase__navy-block"></div>
						<div class="about-heritage-showcase__arch-frame">
							<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-ferrara-estate-arch.jpg' ); ?>" 
								 alt="<?php esc_attr_e( 'Terras verdejantes e patrimônio de Ferrara, Emilia-Romagna', 'frignanis' ); ?>" 
								 class="about-heritage-showcase__arch-img" 
								 width="1179" 
								 height="1105" 
								 loading="lazy" />
						</div>
					</div>

				</div>
			</section>

		</div>

		<div class="about-editorial__container">

			<!-- ----------------------------------------
			     SECTION 1: LINHAGEM HISTÓRICA & A TRAVESSIA DO ATLÂNTICO
			     ---------------------------------------- -->
			<section class="about-editorial__section" aria-labelledby="sec1-title">
				<h2 id="sec1-title" class="about-editorial__subtitle">
					<?php echo esc_html( $about_sec1_title ); ?>
				</h2>

				<div class="about-editorial__body">
					<p class="about-lead-paragraph">
						<?php echo esc_html( $about_sec1_p1 ); ?>
					</p>

					<p>
						<?php echo esc_html( $about_sec1_p2 ); ?>
					</p>

					<p>
						<?php echo esc_html( $about_sec1_p3 ); ?>
					</p>
				</div>

				<!-- Milestones Grid: 1626 · 1891 · Século XXI -->
				<div class="about-milestones-grid" aria-label="<?php esc_attr_e( 'Marcos Históricos da Família Frignani', 'frignanis' ); ?>">
					<!-- 1626 -->
					<div class="about-milestone-card">
						<div class="about-milestone-card__year-badge">
							<span>🏛️</span> 1626
						</div>
						<span class="about-milestone-card__tag"><?php esc_html_e( 'Valência · Espanha', 'frignanis' ); ?></span>
						<p class="about-milestone-card__text">
							<?php esc_html_e( 'Criação da Baronia de Frignani e Frignestani por Filipe IV, outorgada a Gaspar Palavicino y Centurión.', 'frignanis' ); ?>
						</p>
					</div>

					<!-- 1891 -->
					<div class="about-milestone-card">
						<div class="about-milestone-card__year-badge">
							<span>🚢</span> 1891
						</div>
						<span class="about-milestone-card__tag"><?php esc_html_e( 'Porto de Santa Cruz · Brasil', 'frignanis' ); ?></span>
						<p class="about-milestone-card__text">
							<?php esc_html_e( 'Desembarque dos antepassados italianos com suas tradições, valores, sabores da terra natal e espírito empreendedor.', 'frignanis' ); ?>
						</p>
					</div>

					<!-- Hoje / Internacional -->
					<div class="about-milestone-card">
						<div class="about-milestone-card__year-badge">
							<span>🌐</span> Século XXI
						</div>
						<span class="about-milestone-card__tag"><?php esc_html_e( 'Vitória, Espanha & Luxemburgo', 'frignanis' ); ?></span>
						<p class="about-milestone-card__text">
							<?php esc_html_e( 'Sabrina Frignani une raízes culturais italianas, vocação portuária e sólida trajetória corporativa internacional.', 'frignanis' ); ?>
						</p>
					</div>
				</div>
			</section>

			<!-- ----------------------------------------
			     SECTION 2: O CAMINHO DE VOLTA ÀS ORIGENS EUROPEIAS
			     ---------------------------------------- -->
			<section class="about-editorial__section" aria-labelledby="sec2-title">
				<h2 id="sec2-title" class="about-editorial__subtitle">
					<?php echo esc_html( $about_sec2_title ); ?>
				</h2>

				<div class="about-editorial__body">
					<p class="about-lead-paragraph">
						<?php echo esc_html( $about_sec2_p1 ); ?>
					</p>

					<p>
						<?php echo esc_html( $about_sec2_p2 ); ?>
					</p>
				</div>

				<!-- Alliance Callout: Federazione Italiana Cuochi – Delegazione Lussemburgo -->
				<div class="about-alliance-card" role="region" aria-label="<?php esc_attr_e( 'Parceria Institucional Federazione Italiana Cuochi', 'frignanis' ); ?>">
					<div class="about-alliance-card__icon" aria-hidden="true">✦</div>
					<div>
						<h3 class="about-alliance-card__title">
							Federazione Italiana Cuochi · Delegazione Lussemburgo
						</h3>
						<p class="about-alliance-card__text">
							<?php echo esc_html( $about_sec2_p3 ); ?>
						</p>
					</div>
				</div>

				<div class="about-editorial__body">
					<p>
						<?php echo esc_html( $about_sec2_p4 ); ?>
					</p>
				</div>
			</section>

			<!-- ----------------------------------------
			     GRAND CLOSING: CENTERED IN GOLD
			     ---------------------------------------- -->
			<section class="about-fechamento" aria-label="<?php esc_attr_e( 'Frignani’s Institutional Manifesto & Signature', 'frignanis' ); ?>">
				
				<!-- 3-Line Cadence -->
				<div class="about-fechamento__cadence">
					<?php echo nl2br( esc_html( $about_closing_cadence ) ); ?>
				</div>

				<div class="about-fechamento__divider" aria-hidden="true">
					<span>❖</span>
				</div>

				<!-- Synthesis Narrative -->
				<?php if ( ! empty( $about_closing_synthesis ) ) : ?>
					<p class="about-fechamento__synthesis">
						<?php echo esc_html( $about_closing_synthesis ); ?>
					</p>
				<?php endif; ?>

				<!-- Brand Title & Subtitle -->
				<h3 class="about-fechamento__brand-title">
					<?php echo esc_html( $about_closing_brand ); ?>
				</h3>

				<?php if ( ! empty( $about_closing_motto ) ) : ?>
					<p class="about-fechamento__brand-subtitle">
						<?php echo esc_html( $about_closing_motto ); ?>
					</p>
				<?php endif; ?>

				<!-- Action CTAs -->
				<div class="about-fechamento__cta">
					<a href="<?php echo esc_url( frignanis_get_presentation_pdf_url() ); ?>" class="btn btn-primary" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
						<span>📥</span> <span><?php esc_html_e( 'Frignani Apresentation', 'frignanis' ); ?></span>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary">
						<?php esc_html_e( 'ENTRE EM CONTATO', 'frignanis' ); ?>
					</a>
				</div>

			</section>

		</div>
	</article>

</div>

<?php
get_footer();
