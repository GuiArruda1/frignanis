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
		'image'       => get_template_directory_uri() . '/assets/images/italian-sommelier-prosecco-pour.jpg',
		'image_alt'   => esc_attr__( 'Italian Sommelier Pouring Traditional Method Prosecco', 'frignanis' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'gourmet',
		'num'         => 'II',
		'tags'        => esc_html__( 'OLIVE OIL · ORGANIC & EXTRA VIRGIN', 'frignanis' ),
		'title'       => esc_html__( 'Italian & Organic Olive Oil', 'frignanis' ),
		'desc'        => esc_html__( 'Extra virgin olive oil of verified Italian origin, available in conventional and certified organic lines. The organic line is identified by the green seal of traceability and sustainable agriculture.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/italian-olive-harvest-hands.jpg',
		'image_alt'   => esc_attr__( 'Certified Organic Extra Virgin Italian Olive Harvest', 'frignanis' ),
		'layout'      => 'image-right',
		'badge'       => esc_html__( 'CERTIFIED ORGANIC', 'frignanis' ),
	),
	array(
		'id'          => 'trufas',
		'num'         => 'III',
		'tags'        => esc_html__( 'TARTUFO · SEASONAL ITALIAN HARVESTS', 'frignanis' ),
		'title'       => esc_html__( 'Truffles & Truffle Condiments', 'frignanis' ),
		'desc'        => esc_html__( 'The tartufo is one of Italy\'s greatest gastronomic treasures. We represent fresh seasonal harvests and preserved products of high aromatic density for fine dining restaurants, gourmet emporiums, and diplomatic events.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/italian-lake-olive-terroir.jpg',
		'image_alt'   => esc_attr__( 'Italian Terroir Hills and Gastronomic Landscapes', 'frignanis' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'organicos',
		'num'         => 'IV',
		'tags'        => esc_html__( 'EU CERTIFIED ORGANIC PRODUCTS', 'frignanis' ),
		'title'       => esc_html__( 'Gourmet Delicacies & Organic Products', 'frignanis' ),
		'desc'        => esc_html__( 'Special selection of organic and biological products from traditional producers — grains, pulses, artisanal sauces, and preserves that honor health, biodiversity, and European standard certification procedures.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/italian-olive-picking-hand.jpg',
		'image_alt'   => esc_attr__( 'Hand Harvesting Certified Italian Organic Produce', 'frignanis' ),
		'layout'      => 'image-right',
		'badge'       => esc_html__( 'CERTIFIED ORGANIC', 'frignanis' ),
	),
	array(
		'id'          => 'cooking-supreme',
		'num'         => 'V',
		'tags'        => esc_html__( 'COOKING SUPREME · LIFESTYLE & ART DE LA TABLE', 'frignanis' ),
		'title'       => esc_html__( 'Art Décor · Cooking Supreme Line', 'frignanis' ),
		'desc'        => esc_html__( 'Art décor for high-end kitchens and dining. High-level artisanal European ceramics, ambient lighting, and exclusive pieces that transform dining into a memorable experience of hospitality and style.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/italian-art-decor-emerald-ceramics.jpg',
		'image_alt'   => esc_attr__( 'Handcrafted Italian Emerald Glazed Ceramics and Cooking Supreme Collection', 'frignanis' ),
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

	<!-- Curated Visual Gallery of Authentic Italian Heritage & Terroir -->
	<div class="cat-gallery-section">
		<div class="site-container">
			<div class="cat-gallery__header">
				<div class="eyebrow"><?php esc_html_e( 'AUTHENTIC ITALIAN EXCELLENCE', 'frignanis' ); ?></div>
				<h2 class="cat-gallery__title">
					<?php esc_html_e( 'Moments of', 'frignanis' ); ?> <span class="cat-gallery__title-highlight"><?php esc_html_e( 'Terroir & Tradition', 'frignanis' ); ?></span>
				</h2>
				<p class="cat-gallery__desc">
					<?php esc_html_e( 'From sunlit hillside vineyards to Michelin-starred tables and handcrafted ceramic workshops — every reference reflects our direct connection to Italy’s finest artisans.', 'frignanis' ); ?>
				</p>
			</div>

			<div class="cat-gallery__grid">
				<!-- 1. Grapes on Vine -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-grapes-sunlit-vine.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Sunlit Italian Vineyard Grapes', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'TERROIR WINES', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Sunlit Estate Grape Clusters', 'frignanis' ); ?></p>
					</div>
				</div>

				<!-- 2. Red Wine Pour -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-red-wine-pour.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Fine Italian Red Wine Pour', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'GRAND CRU', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Noble Appellation Vintages', 'frignanis' ); ?></p>
					</div>
				</div>

				<!-- 3. Beige Ceramic Tableware -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-art-decor-tableware-beige.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Handcrafted Italian Beige Ceramics', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'COOKING SUPREME', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Handcrafted Artisanal Tableware', 'frignanis' ); ?></p>
					</div>
				</div>

				<!-- 4. Illuminated Shelving Display -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-art-decor-shelving-display.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Illuminated Luxury Art Décor Display', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'ART DÉCOR', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Fine Living & Curated Spaces', 'frignanis' ); ?></p>
					</div>
				</div>

				<!-- 5. Fine Dining Table Setting -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-fine-dining-dinner.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Haute Gastronomy Dining Table', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'FINE DINING', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Haute Cuisine & Pairing', 'frignanis' ); ?></p>
					</div>
				</div>

				<!-- 6. Twilight Terrace Dining -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-terrace-dining-twilight.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Twilight Terrace Hospitality', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'HOSPITALITY', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Seaside Twilight Banqueting', 'frignanis' ); ?></p>
					</div>
				</div>

				<!-- 7. Vineyard Celebration Toast -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-wine-celebration-toast.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Italian Vineyard Harvest Celebration', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'CELEBRATION', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Vineyard Toast & Friendship', 'frignanis' ); ?></p>
					</div>
				</div>

				<!-- 8. Historic Estate & Church -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-estate-church-hills.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Historic Italian Heritage Estate', 'frignanis' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'HERITAGE', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php esc_html_e( 'Historic Ferrara Hillside Estate', 'frignanis' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

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
			<a href="<?php echo esc_url( frignanis_get_presentation_pdf_url() ); ?>" class="btn-folder-download" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
				<?php frignanis_icon( 'download', 18 ); ?>
				<span><?php esc_html_e( 'Frignani Apresentation', 'frignanis' ); ?></span>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
