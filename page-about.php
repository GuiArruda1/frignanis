<?php
/**
 * Template Name: About Us / Sobre Nós
 * Template Post Type: page
 *
 * The template for displaying the "About Us" page.
 * Centered editorial maison layout with warm heritage photography, generous whitespace,
 * uppercase section dividers, and a gold-accented grand closing block.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// --------------------------------------------------
// Dynamic ACF Fields with Official English Copy Fallbacks
// --------------------------------------------------

$about_hero_eyebrow = function_exists( 'get_field' ) && get_field( 'about_hero_eyebrow' )
	? get_field( 'about_hero_eyebrow' )
	: esc_html__( 'ABOUT US · A FAMILY HISTORY & INTERNATIONAL VISION', 'frignanis' );

$about_hero_title_lead = function_exists( 'get_field' ) && get_field( 'about_hero_title_lead' )
	? get_field( 'about_hero_title_lead' )
	: esc_html__( 'A story spanning generations,', 'frignanis' );

$about_hero_title_highlight = function_exists( 'get_field' ) && get_field( 'about_hero_title_highlight' )
	? get_field( 'about_hero_title_highlight' )
	: esc_html__( 'continents and flavours.', 'frignanis' );

// Section 1: A Story Spanning Generations, Continents and Flavours
$about_sec1_title = function_exists( 'get_field' ) && get_field( 'about_section_1_title' )
	? get_field( 'about_section_1_title' )
	: esc_html__( 'A STORY SPANNING GENERATIONS, CONTINENTS AND FLAVOURS', 'frignanis' );

$about_sec1_p1 = function_exists( 'get_field' ) && get_field( 'about_section_1_p1' )
	? get_field( 'about_section_1_p1' )
	: esc_html__( 'From the plains of Ferrara in Northern Italy was born a story defined by tradition, courage, and a spirit of discovery.', 'frignanis' );

$about_sec1_p2 = function_exists( 'get_field' ) && get_field( 'about_section_1_p2' )
	? get_field( 'about_section_1_p2' )
	: esc_html__( 'One day, the Frignani family crossed the Atlantic carrying recipes, memories, and Italy in their hearts. In Brazil and later across the Americas, Italian cuisine became a language of affection, identity, and excellence — a heritage handed down from generation to generation.', 'frignanis' );

$about_sec1_p3 = function_exists( 'get_field' ) && get_field( 'about_section_1_p3' )
	? get_field( 'about_section_1_p3' )
	: esc_html__( 'The Frignani name also carries a history spanning centuries. On August 30, 1626, in Valencia, King Philip IV created the Barony of Frignani and Frignestani, granted to Gaspar Palavicino y Centurión, leaving a historical record that forms part of the name’s journey and tradition.', 'frignanis' );

$about_sec1_p4 = function_exists( 'get_field' ) && get_field( 'about_section_1_p4' )
	? get_field( 'about_section_1_p4' )
	: esc_html__( 'Generations later, beside one of Brazil’s great ports in Vitória, Espírito Santo, Sabrina Frignani grew up between the family dining table and the rhythm of ships connecting continents. It was in this environment, suspended between Italian roots and an international vocation, that a worldview grounded in connection, trade, and excellence was born.', 'frignanis' );

$about_sec1_p5 = function_exists( 'get_field' ) && get_field( 'about_section_1_p5' )
	? get_field( 'about_section_1_p5' )
	: esc_html__( 'Following a distinguished international career in Spain, Sabrina united her heritage with extensive experience in management and international trade, inaugurating a new chapter in the family history.', 'frignanis' );

// Section 2: A Journey Back to Our Roots
$about_sec2_title = function_exists( 'get_field' ) && get_field( 'about_section_2_title' )
	? get_field( 'about_section_2_title' )
	: esc_html__( 'A JOURNEY BACK TO OUR ROOTS', 'frignanis' );

$about_sec2_p1 = function_exists( 'get_field' ) && get_field( 'about_section_2_p1' )
	? get_field( 'about_section_2_p1' )
	: esc_html__( 'Today, the new Frignani generation makes the journey back.', 'frignanis' );

$about_sec2_p2 = function_exists( 'get_field' ) && get_field( 'about_section_2_p2' )
	? get_field( 'about_section_2_p2' )
	: esc_html__( 'From Luxembourg, the heart of Europe, Frignani’s was created with the purpose of connecting producers, brands, restaurants, and markets through an international import and export service crafted with proximity, deep knowledge, and meticulous attention to detail.', 'frignanis' );

$about_sec2_p3 = function_exists( 'get_field' ) && get_field( 'about_section_2_p3' )
	? get_field( 'about_section_2_p3' )
	: esc_html__( 'With the support of the Federazione Italiana Cuochi – Delegazione Lussemburgo, Frignani’s establishes a bridge between Italian tradition and the contemporary world, curating producers and partners that embody quality, authenticity, and excellence.', 'frignanis' );

$about_sec2_p4 = function_exists( 'get_field' ) && get_field( 'about_section_2_p4' )
	? get_field( 'about_section_2_p4' )
	: esc_html__( 'More than simply transporting products across borders, we believe in building lasting connections between people, cultures, and businesses.', 'frignanis' );

// Fechamento & Signature
$about_closing_cadence = function_exists( 'get_field' ) && get_field( 'about_closing_cadence' )
	? get_field( 'about_closing_cadence' )
	: "From Italy to the world.\nFrom the world to Luxembourg.\nAnd from Luxembourg back to the world.";

$about_closing_synthesis = function_exists( 'get_field' ) && get_field( 'about_closing_synthesis' )
	? get_field( 'about_closing_synthesis' )
	: esc_html__( 'Expertise in international management. Elegance in curation. Forward-thinking vision. Excellence at every stage — through to final delivery.', 'frignanis' );

$about_closing_brand = function_exists( 'get_field' ) && get_field( 'about_closing_brand' )
	? get_field( 'about_closing_brand' )
	: 'FRIGNANI’S';

$about_closing_motto = function_exists( 'get_field' ) && get_field( 'about_closing_motto' )
	? get_field( 'about_closing_motto' )
	: esc_html__( 'A family history. An international vision. A passion that transcends borders.', 'frignanis' );
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
			     FEATURED SHOWCASE: OUR ITALIAN HERITAGE
			     ---------------------------------------- -->
			<section class="about-heritage-showcase" aria-labelledby="heritage-showcase-title">
				<!-- Gold Leaf Texture Accent Bar -->
				<div class="about-heritage-showcase__gold-bar" aria-hidden="true"></div>

				<div class="about-heritage-showcase__inner">
					
					<!-- Left Narrative Column -->
					<div class="about-heritage-showcase__content">
						<div class="about-heritage-showcase__pill-row">
							<span class="about-heritage-showcase__pill"><?php esc_html_e( 'ABOUT US', 'frignanis' ); ?></span>
							<span class="about-heritage-showcase__pill-line" aria-hidden="true"></span>
						</div>

						<h2 id="heritage-showcase-title" class="about-heritage-showcase__title">
							<?php esc_html_e( 'Our Italian heritage', 'frignanis' ); ?>
						</h2>

						<div class="about-heritage-showcase__text">
							<p>
								<?php esc_html_e( 'Rooted in Ferrara, Italy, the Frignani family carried its culinary traditions to Brazil, passing a love of Italian culture from one generation to the next.', 'frignanis' ); ?>
							</p>
							<p>
								<?php esc_html_e( 'Raised in Vitória, Espírito Santo, Sabrina Frignani brings this family heritage and her international experience to a new chapter of the Frignani story.', 'frignanis' ); ?>
							</p>
						</div>

						<!-- Discreet Grandmother Tribute (Gentila Frignani) -->
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
								 alt="<?php esc_attr_e( 'Italian terroir and architectural heritage of Ferrara', 'frignanis' ); ?>" 
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
			     SECTION 1: NOBLE HISTORICAL LINEAGE (DAL 1626)
			     ---------------------------------------- -->
			<section class="about-editorial__section" aria-labelledby="sec1-title">
				<h2 id="sec1-title" class="about-editorial__subtitle">
					<?php echo esc_html( $about_sec1_title ); ?>
				</h2>

				<div class="about-editorial__body">
					<?php if ( ! empty( $about_sec1_p3 ) ) : ?>
						<p class="about-lead-paragraph">
							<?php echo esc_html( $about_sec1_p3 ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $about_sec1_p4 ) ) : ?>
						<p>
							<?php echo esc_html( $about_sec1_p4 ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $about_sec1_p5 ) ) : ?>
						<p>
							<?php echo esc_html( $about_sec1_p5 ); ?>
						</p>
					<?php endif; ?>
				</div>
			</section>

			<!-- ----------------------------------------
			     SECTION 2: A JOURNEY BACK TO OUR ROOTS
			     ---------------------------------------- -->
			<section class="about-editorial__section" aria-labelledby="sec2-title">
				<h2 id="sec2-title" class="about-editorial__subtitle">
					<?php echo esc_html( $about_sec2_title ); ?>
				</h2>

				<div class="about-editorial__body">
					<?php if ( ! empty( $about_sec2_p1 ) ) : ?>
						<p class="about-lead-paragraph">
							<?php echo esc_html( $about_sec2_p1 ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $about_sec2_p2 ) ) : ?>
						<p>
							<?php echo esc_html( $about_sec2_p2 ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $about_sec2_p3 ) ) : ?>
						<p>
							<?php echo esc_html( $about_sec2_p3 ); ?>
						</p>
					<?php endif; ?>

					<?php if ( ! empty( $about_sec2_p4 ) ) : ?>
						<p>
							<?php echo esc_html( $about_sec2_p4 ); ?>
						</p>
					<?php endif; ?>
				</div>

				<!-- Institutional Partnership Duo -->
				<div class="about-heritage-duo">
					<div class="about-heritage-duo__quote" style="grid-column: 1 / -1; text-align: center; border-left: none; border-top: 2px solid var(--color-gold); border-bottom: 2px solid var(--color-gold); padding: 2rem 1.5rem; background-color: rgba(168, 132, 58, 0.05); border-radius: 4px;">
						<p class="about-heritage-duo__quote-text" style="font-size: 1.25rem; max-width: 680px; margin: 0 auto 0.75rem auto;">
							« <?php esc_html_e( 'With the support of Federazione Italiana Cuochi – Delegazione Lussemburgo, we build the bridge between authentic Italian heritage and the contemporary world.', 'frignanis' ); ?> »
						</p>
						<span class="about-heritage-duo__quote-author">
							✦ <?php esc_html_e( 'Frignani’s · Luxembourg', 'frignanis' ); ?>
						</span>
					</div>
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

				<!-- Presentation Request CTA -->
				<div class="about-fechamento__cta">
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
						<?php esc_html_e( 'REQUEST A PRESENTATION', 'frignanis' ); ?>
					</a>
					<a href="<?php echo esc_url( home_url( '/mission-and-services/' ) ); ?>" class="btn btn-secondary">
						<?php esc_html_e( 'OUR SERVICES', 'frignanis' ); ?>
					</a>
				</div>

			</section>

		</div>
	</article>

</div>

<?php
get_footer();
