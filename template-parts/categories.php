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
	: esc_html__( 'CATEGORIES', 'frignanis' );

$categories_heading = function_exists( 'get_field' ) && get_field( 'categories_heading' ) 
	? get_field( 'categories_heading' ) 
	: esc_html__( 'What we export', 'frignanis' );

$categories_link_text = function_exists( 'get_field' ) && get_field( 'categories_link_text' ) 
	? get_field( 'categories_link_text' ) 
	: esc_html__( 'VIEW ALL CATEGORIES', 'frignanis' );

$categories_link_url = function_exists( 'get_field' ) && get_field( 'categories_link_url' ) 
	? get_field( 'categories_link_url' ) 
	: '#categories';

// Category cards data
$default_categories = array(
	array(
		'num'   => 'I',
		'title' => esc_html__( 'Wines & Prosecco', 'frignanis' ),
		'tags'  => esc_html__( 'DOC · DOCG · SPUMANTE', 'frignanis' ),
		'url'   => '#',
	),
	array(
		'num'   => 'II',
		'title' => esc_html__( 'Olive Oil', 'frignanis' ),
		'tags'  => esc_html__( 'ITALIAN & BIOLOGICAL', 'frignanis' ),
		'url'   => '#',
	),
	array(
		'num'   => 'III',
		'title' => esc_html__( 'Truffle', 'frignanis' ),
		'tags'  => esc_html__( 'TARTUFO · SEASONAL', 'frignanis' ),
		'url'   => '#',
	),
	array(
		'num'   => 'IV',
		'title' => esc_html__( 'Biological', 'frignanis' ),
		'tags'  => esc_html__( 'ORGANIC · CERTIFIED', 'frignanis' ),
		'url'   => '#',
	),
	array(
		'num'   => 'V',
		'title' => esc_html__( 'Kitchen & Lifestyle', 'frignanis' ),
		'tags'  => esc_html__( 'LUXURY EUROPEAN', 'frignanis' ),
		'url'   => '#',
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

		<!-- 5-Column Luxury Cards Grid -->
		<div class="categories__grid">
			<?php foreach ( $default_categories as $item ) : ?>
				<article class="category-card">
					<span class="category-card__num"><?php echo esc_html( $item['num'] ); ?></span>
					<div class="category-card__body">
						<h3 class="category-card__title"><?php echo esc_html( $item['title'] ); ?></h3>
						<p class="category-card__tags"><?php echo esc_html( $item['tags'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

	</div>
</section>
