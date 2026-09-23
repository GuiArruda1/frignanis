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
	: esc_html__( '— 02 · CATEGORIES', 'frignanis' );

$hero_title_lead = function_exists( 'get_field' ) && get_field( 'cat_hero_title_lead' )
	? get_field( 'cat_hero_title_lead' )
	: esc_html__( 'What we', 'frignanis' );

$hero_title_highlight = function_exists( 'get_field' ) && get_field( 'cat_hero_title_highlight' )
	? get_field( 'cat_hero_title_highlight' )
	: esc_html__( 'export', 'frignanis' );

$hero_description = function_exists( 'get_field' ) && get_field( 'cat_hero_description' )
	? get_field( 'cat_hero_description' )
	: esc_html__( 'Five categories of Italian excellence — selected, documented, and delivered to the world\'s most discerning buyers. We communicate by category, never by individual supplier or producer name.', 'frignanis' );

// Default Category Rows matching Figma 1440x3559
$categories_data = array(
	array(
		'id'          => 'wines-prosecco',
		'num'         => 'I',
		'tags'        => esc_html__( 'DOC · DOCG · SPUMANTE', 'frignanis' ),
		'title'       => esc_html__( 'Wines & Prosecco', 'frignanis' ),
		'desc'        => esc_html__( 'From the rolling hills of Veneto to the volcanic soils of Sicily, our wine selection spans the full breadth of Italian viticulture. We specialise in Prosecco DOC and DOCG, alongside still and sparkling wines curated for the international professional buyer.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/category-wine.jpg',
		'image_alt'   => esc_attr__( 'Italian Vineyards and Rolling Hills in Tuscany and Veneto', 'frignanis' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'olive-oil',
		'num'         => 'II',
		'tags'        => esc_html__( 'ITALIAN & BIOLOGICAL', 'frignanis' ),
		'title'       => esc_html__( 'Olive Oil', 'frignanis' ),
		'desc'        => esc_html__( 'Extra virgin olive oil of Italian origin, available in both conventional and certified biological varieties. Biological products are identified by our green designation — a commitment to traceability and organic farming practices.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/mission-olive-oil.jpg',
		'image_alt'   => esc_attr__( 'Extra Virgin Olive Oil of Italian Origin', 'frignanis' ),
		'layout'      => 'image-right',
		'badge'       => esc_html__( 'BIOLOGICAL', 'frignanis' ),
	),
	array(
		'id'          => 'truffle',
		'num'         => 'III',
		'tags'        => esc_html__( 'TARTUFO · SEASONAL HARVEST', 'frignanis' ),
		'title'       => esc_html__( 'Truffle', 'frignanis' ),
		'desc'        => esc_html__( 'The truffle — Tartufo — is among Italy\'s most prized culinary treasures. We source seasonal harvests from certified Italian regions, offering both fresh and preserved formats for restaurants, delicatessens, and luxury food distributors worldwide.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/category-truffle.jpg',
		'image_alt'   => esc_attr__( 'Italian Truffle Tartufo Harvest', 'frignanis' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'organic-biological',
		'num'         => 'IV',
		'tags'        => esc_html__( 'CERTIFIED ORGANIC PRODUCTS', 'frignanis' ),
		'title'       => esc_html__( 'Organic / Biological', 'frignanis' ),
		'desc'        => esc_html__( 'A growing selection of certified organic Italian products — from grains and legumes to condiments and preserves. All biological products carry the official EU organic certification and are identified by our green designation across the catalog.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/category-organic-bio.jpg',
		'image_alt'   => esc_attr__( 'Certified Organic Italian Biological Products and Pantry Provisions', 'frignanis' ),
		'layout'      => 'image-right',
		'badge'       => esc_html__( 'BIOLOGICAL', 'frignanis' ),
	),
	array(
		'id'          => 'luxury-kitchen-lifestyle',
		'num'         => 'V',
		'tags'        => esc_html__( 'LAMPS · CERAMICS · LIFESTYLE ARTICLES', 'frignanis' ),
		'title'       => esc_html__( 'Luxury European Kitchen & Lifestyle', 'frignanis' ),
		'desc'        => esc_html__( 'Beyond food and wine, Frignani\'s curates a selection of luxury European articles for the kitchen and restaurant environment — handcrafted ceramics, artisan lighting, and bespoke lifestyle accessories that bring Italian and European craftsmanship to the table.', 'frignanis' ),
		'image'       => get_template_directory_uri() . '/assets/images/mission-craftsman.jpg',
		'image_alt'   => esc_attr__( 'Handcrafted European Ceramics and Artisan Craftsmanship', 'frignanis' ),
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
</section>

<?php
get_footer();
