<?php
/**
 * Template Part: Categories / "What we export" Section
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$categories_eyebrow = function_exists( 'get_field' ) && get_field( 'categories_eyebrow' ) 
	? get_field( 'categories_eyebrow' ) 
	: esc_html__( 'ITALIAN EXCELLENCE', 'frignanis' );

$categories_heading = function_exists( 'get_field' ) && get_field( 'categories_heading' ) 
	? get_field( 'categories_heading' ) 
	: esc_html__( 'Our Representation Categories', 'frignanis' );

$categories_link_text = function_exists( 'get_field' ) && get_field( 'categories_link_text' ) 
	? get_field( 'categories_link_text' ) 
	: esc_html__( 'EXPLORE ALL CATEGORIES', 'frignanis' );

$categories_link_url = function_exists( 'get_field' ) && get_field( 'categories_link_url' ) 
	? get_field( 'categories_link_url' ) 
	: home_url( '/categories/' );

// Category cards data (Official Briefing - Sept 2026)
$default_categories = array(
	array(
		'num'   => 'I',
		'title' => esc_html__( 'Terroir Wines & Prosecco', 'frignanis' ),
		'tags'  => esc_html__( 'DOC · DOCG · VALDOBBIADENE · FRANCIACORTA', 'frignanis' ),
		'desc'  => esc_html__( 'Selected Italian wineries, noble sparkling wines, and appellation wines for prestigious lists.', 'frignanis' ),
		'url'   => home_url( '/categories/#vinhos' ),
	),
	array(
		'num'   => 'II',
		'title' => esc_html__( 'Gourmet & Biological Delicacies', 'frignanis' ),
		'tags'  => esc_html__( 'EXTRA VIRGIN OLIVE OIL · TRUFFLES · ORGANIC', 'frignanis' ),
		'desc'  => esc_html__( 'Certified organic Italian olive oils, seasonal truffles, and products from traditional producers.', 'frignanis' ),
		'url'   => home_url( '/categories/#gourmet' ),
	),
	array(
		'num'   => 'III',
		'title' => esc_html__( 'Art Décor · Cooking Supreme', 'frignanis' ),
		'tags'  => esc_html__( 'CERAMICS · LIGHTING · TABLEWARE', 'frignanis' ),
		'desc'  => esc_html__( 'Exclusive pieces and European ceramics that elevate fine dining kitchens and prestigious tables.', 'frignanis' ),
		'url'   => home_url( '/categories/#cooking-supreme' ),
	),
);
?>

<section class="categories" id="categories" aria-labelledby="categories-heading">
	<div class="site-container">
		
		<!-- Section Header -->
		<div class="categories__header">
			<div class="categories__title-wrap">
				<?php if ( ! empty( $categories_eyebrow ) ) : ?>
					<div class="eyebrow"><?php echo esc_html( $categories_eyebrow ); ?></div>
				<?php endif; ?>
				<h2 id="categories-heading" class="categories__heading">
					<?php echo esc_html( $categories_heading ); ?>
				</h2>
			</div>

			<?php if ( ! empty( $categories_link_text ) ) : ?>
				<a href="<?php echo esc_url( $categories_link_url ); ?>" class="action-link">
					<span><?php echo esc_html( $categories_link_text ); ?></span>
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/arrow-right.svg' ); ?>" 
						 alt="" 
						 width="16" 
						 height="16" 
						 aria-hidden="true" />
				</a>
			<?php endif; ?>
		</div>

		<!-- 3-Column Luxury Cards Grid -->
		<div class="categories__grid" style="grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));">
			<?php foreach ( $default_categories as $item ) : ?>
				<a href="<?php echo esc_url( $item['url'] ); ?>" class="category-card" style="display: block; text-decoration: none;">
					<span class="category-card__num"><?php echo esc_html( $item['num'] ); ?></span>
					<div class="category-card__body">
						<h3 class="category-card__title"><?php echo esc_html( $item['title'] ); ?></h3>
						<p class="category-card__tags"><?php echo esc_html( $item['tags'] ); ?></p>
						<p style="font-size: 0.9rem; color: var(--color-text-muted-dark); margin-top: 0.5rem; line-height: 1.5;">
							<?php echo esc_html( $item['desc'] ); ?>
						</p>
					</div>
				</a>
			<?php endforeach; ?>
		</div>

	</div>
</section>
