<?php
/**
 * Template Name: Categories / O Que Exportamos
 * Template Post Type: page
 *
 * The template for displaying the Categories ("What we export") page.
 * Follows FRIGNANI'S brand concept, Figma design (Categories 1440x3559),
 * zero-supplier disclosure rule, and luxury agency standards.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$hero_eyebrow = function_exists( 'get_field' ) && get_field( 'cat_hero_eyebrow' )
	? get_field( 'cat_hero_eyebrow' )
	: esc_html__( '— 02 · CATEGORIES & CURATION', 'frignanis' );

$hero_title_lead = function_exists( 'get_field' ) && get_field( 'cat_hero_title_lead' )
	? get_field( 'cat_hero_title_lead' )
	: esc_html__( 'Italian Excellence Across', 'frignanis' );

$hero_title_highlight = function_exists( 'get_field' ) && get_field( 'cat_hero_title_highlight' )
	? get_field( 'cat_hero_title_highlight' )
	: esc_html__( 'Three Management Pillars', 'frignanis' );

$hero_description = function_exists( 'get_field' ) && get_field( 'cat_hero_description' )
	? get_field( 'cat_hero_description' )
	: esc_html__( 'Terroir wines and prosecco, gourmet and organic delicacies from traditional producers, and art décor pieces for high-end kitchens and dining (Cooking Supreme). We communicate exclusively by categories of excellence and guaranteed provenance.', 'frignanis' );

// Default Category Rows matching Official Briefing (Sept 2026)
$categories_data = array(
	array(
		'id'          => 'vinhos',
		'num'         => 'I',
		'tags'        => esc_html__( 'DOC · DOCG · VALDOBBIADENE · FRANCIACORTA', 'frignanis' ),
		'title'       => esc_html__( 'Terroir Wines & Prosecco', 'frignanis' ),
		'desc'        => esc_html__( 'Terroir wines and prosecco from selected Italian wineries. From the mineral elegance of the north to the noble reds of the center and south, we connect exclusive vintages and traditional method sparkling wines directly to gastronomic wine lists, importers, and distributors.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/category-wine.jpg',
		'image_alt'   => esc_attr__( 'Italian Vineyards and Noble Terroir', 'frignanis' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'gourmet',
		'num'         => 'II',
		'tags'        => esc_html__( 'OLIVE OIL · ORGANIC & EXTRA VIRGIN', 'frignanis' ),
		'title'       => esc_html__( 'Italian & Organic Olive Oil', 'frignanis' ),
		'desc'        => esc_html__( 'Extra virgin olive oil of verified Italian origin, available in conventional and certified organic lines. The organic line is identified by the green seal of traceability and sustainable agriculture.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/mission-olive-oil.jpg',
		'image_alt'   => esc_attr__( 'Certified Organic Extra Virgin Italian Olive Oil', 'frignanis' ),
		'layout'      => 'image-right',
		'badge'       => esc_html__( 'CERTIFIED ORGANIC', 'frignanis' ),
	),
	array(
		'id'          => 'trufas',
		'num'         => 'III',
		'tags'        => esc_html__( 'TARTUFO · SEASONAL ITALIAN HARVESTS', 'frignanis' ),
		'title'       => esc_html__( 'Truffles & Truffle Condiments', 'frignanis' ),
		'desc'        => esc_html__( 'The tartufo is one of Italy\'s greatest gastronomic treasures. We represent fresh seasonal harvests and preserved products of high aromatic density for fine dining restaurants, gourmet emporiums, and diplomatic events.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/category-truffle.jpg',
		'image_alt'   => esc_attr__( 'Fresh and Preserved Italian Truffles', 'frignanis' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'organicos',
		'num'         => 'IV',
		'tags'        => esc_html__( 'EU CERTIFIED ORGANIC PRODUCTS', 'frignanis' ),
		'title'       => esc_html__( 'Gourmet Delicacies & Organic Products', 'frignanis' ),
		'desc'        => esc_html__( 'Special selection of organic and biological products from traditional producers — grains, pulses, artisanal sauces, and preserves that honor health, biodiversity, and European standard certification procedures.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/category-organic-bio.jpg',
		'image_alt'   => esc_attr__( 'Certified Italian Organic and Biological Delicacies', 'frignanis' ),
		'layout'      => 'image-right',
		'badge'       => esc_html__( 'CERTIFIED ORGANIC', 'frignanis' ),
	),
	array(
		'id'          => 'cooking-supreme',
		'num'         => 'V',
		'tags'        => esc_html__( 'COOKING SUPREME · LIFESTYLE & ART DE LA TABLE', 'frignanis' ),
		'title'       => esc_html__( 'Art Décor · Cooking Supreme Line', 'frignanis' ),
		'desc'        => esc_html__( 'Art décor for high-end kitchens and dining. High-level artisanal European ceramics, ambient lighting, and exclusive pieces that transform dining into a memorable experience of hospitality and style.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/mission-craftsman.jpg',
		'image_alt'   => esc_attr__( 'Handcrafted European Ceramics and Tableware', 'frignanis' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
);
?>

<!-- ==========================================
     CATEGORIES HERO SECTION
     ========================================== -->
<section class="cat-page-hero" aria-labelledby="cat-page-title">
	<div class="site-container">
		<div class="cat-page-hero__content">
			<div class="cat-page-hero__eyebrow">
				<?php echo esc_html( $hero_eyebrow ); ?>
			</div>

			<h1 id="cat-page-title" class="cat-page-hero__title">
				<?php echo esc_html( $hero_title_lead ); ?><br />
				<span class="cat-page-hero__highlight"><?php echo esc_html( $hero_title_highlight ); ?></span>
			</h1>

			<div class="italian-flag-stripe" aria-hidden="true">
				<span class="italian-flag-stripe__green"></span>
				<span class="italian-flag-stripe__white"></span>
				<span class="italian-flag-stripe__red"></span>
			</div>

			<p class="cat-page-hero__desc">
				<?php echo esc_html( $hero_description ); ?>
			</p>
		</div>
	</div>
</section>

<!-- ==========================================
     CATEGORIES EDITORIAL 50/50 ROWS
     ========================================== -->
<section class="cat-page-list" aria-label="<?php esc_attr_e( 'Categories List', 'frignanis' ); ?>">
	<?php foreach ( $categories_data as $index => $cat ) : 
		$is_image_left = ( 'image-left' === $cat['layout'] );
	?>
		<article id="<?php echo esc_attr( $cat['id'] ); ?>" class="cat-row cat-row--<?php echo esc_attr( $cat['layout'] ); ?>">
			
			<?php if ( $is_image_left ) : ?>
				<!-- Left: Media -->
				<div class="cat-row__col cat-row__col--media">
					<div class="cat-row__img-wrap">
						<img src="<?php echo esc_url( $cat['image'] ); ?>" 
							 alt="<?php echo esc_attr( $cat['image_alt'] ); ?>" 
							 class="cat-row__img" 
							 loading="lazy" />
						<?php if ( ! empty( $cat['badge'] ) ) : ?>
							<div class="cat-row__badge" aria-label="<?php echo esc_attr( $cat['badge'] ); ?>">
								<span class="cat-row__badge-dot" aria-hidden="true"></span>
								<span><?php echo esc_html( $cat['badge'] ); ?></span>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<!-- Right: Content -->
				<div class="cat-row__col cat-row__col--content">
					<div class="cat-row__text-wrap">
						<div class="cat-row__meta">
							<span class="cat-row__num"><?php echo esc_html( $cat['num'] ); ?></span>
							<span class="cat-row__tags"><?php echo esc_html( $cat['tags'] ); ?></span>
						</div>
						<h2 class="cat-row__title"><?php echo esc_html( $cat['title'] ); ?></h2>
						<p class="cat-row__desc"><?php echo esc_html( $cat['desc'] ); ?></p>
						<div style="margin-top: 1.5rem;">
							<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="padding: 8px 18px; font-size: 0.75rem;">
								<?php esc_html_e( 'REQUEST PRESENTATION FOR THIS CATEGORY', 'frignanis' ); ?>
							</a>
						</div>
					</div>
				</div>

			<?php else : ?>
				<!-- Left: Content -->
				<div class="cat-row__col cat-row__col--content">
					<div class="cat-row__text-wrap">
						<div class="cat-row__meta">
							<span class="cat-row__num"><?php echo esc_html( $cat['num'] ); ?></span>
							<span class="cat-row__tags"><?php echo esc_html( $cat['tags'] ); ?></span>
						</div>
						<h2 class="cat-row__title"><?php echo esc_html( $cat['title'] ); ?></h2>
						<p class="cat-row__desc"><?php echo esc_html( $cat['desc'] ); ?></p>
						<div style="margin-top: 1.5rem;">
							<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="padding: 8px 18px; font-size: 0.75rem;">
								<?php esc_html_e( 'REQUEST PRESENTATION FOR THIS CATEGORY', 'frignanis' ); ?>
							</a>
						</div>
					</div>
				</div>

				<!-- Right: Media -->
				<div class="cat-row__col cat-row__col--media">
					<div class="cat-row__img-wrap">
						<img src="<?php echo esc_url( $cat['image'] ); ?>" 
							 alt="<?php echo esc_attr( $cat['image_alt'] ); ?>" 
							 class="cat-row__img" 
							 loading="lazy" />
						<?php if ( ! empty( $cat['badge'] ) ) : ?>
							<div class="cat-row__badge" aria-label="<?php echo esc_attr( $cat['badge'] ); ?>">
								<span class="cat-row__badge-dot" aria-hidden="true"></span>
								<span><?php echo esc_html( $cat['badge'] ); ?></span>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

		</article>
	<?php endforeach; ?>

	<!-- Folder Download Banner inside Categories -->
	<div class="site-container" style="margin-top: 3rem;">
		<div class="folder-download-banner">
			<div class="folder-download-banner__content">
				<span class="folder-download-banner__eyebrow"><?php esc_html_e( 'OFFICIAL CATALOGUE & FOLDER', 'frignanis' ); ?></span>
				<h3 class="folder-download-banner__title"><?php esc_html_e( 'Frignani’s Institutional PDF Folder', 'frignanis' ); ?></h3>
				<p class="folder-download-banner__desc">
					<?php esc_html_e( 'Request our complete executive presentation with operational guidelines, packaging specifications, and standard import procedures.', 'frignanis' ); ?>
				</p>
			</div>
			<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn-folder-download">
				<span>📥</span>
				<span><?php esc_html_e( 'REQUEST PDF FOLDER', 'frignanis' ); ?></span>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
