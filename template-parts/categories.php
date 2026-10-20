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
$categories_eyebrow = frignanis_field( 'categories_eyebrow', 'ITALIAN EXCELLENCE', 'EXCELÊNCIA ITALIANA' );

$categories_heading = frignanis_field( 'categories_heading', 'Our Representation Categories', 'Nossas Categorias de Representação' );

$categories_link_text = frignanis_field( 'categories_link_text', 'EXPLORE ALL CATEGORIES', 'VER TODAS AS CATEGORIAS' );

$categories_link_url = function_exists( 'get_field' ) && get_field( 'categories_link_url' ) 
	? get_field( 'categories_link_url' ) 
	: home_url( '/categories/' );

// Category cards data (Official Briefing - Sept 2026)
$default_categories = array(
	array(
		'num'   => 'I',
		'title' => frignanis_t( 'Terroir Wines & Prosecco', 'Vinhos e Proseccos de Terroir' ),
		'tags'  => frignanis_t( 'DOC · DOCG · VALDOBBIADENE · FRANCIACORTA', 'DOC · DOCG · VALDOBBIADENE · FRANCIACORTA' ),
		'desc'  => frignanis_t( 'Selected Italian wineries, noble sparkling wines, and appellation wines for prestigious lists.', 'Vinícolas italianas selecionadas, espumantes nobres e vinhos de denominação para cartas de prestígio.' ),
		'image' => get_template_directory_uri() . '/assets/images/italian-sommelier-prosecco-pour.jpg',
		'url'   => home_url( '/categories/#vinhos' ),
	),
	array(
		'num'   => 'II',
		'title' => frignanis_t( 'Gourmet & Biological Delicacies', 'Iguarias Gourmet e Biológicas' ),
		'tags'  => frignanis_t( 'EXTRA VIRGIN OLIVE OIL · TRUFFLES · ORGANIC', 'AZEITE EXTRA VIRGEM · TRUFAS · ORGÂNICOS' ),
		'desc'  => frignanis_t( 'Certified organic Italian olive oils, seasonal truffles, and products from traditional producers.', 'Azeites italianos com certificação biológica, trufas sazonais e produtos de produtores tradicionais.' ),
		'image' => get_template_directory_uri() . '/assets/images/italian-olive-picking-hand.jpg',
		'url'   => home_url( '/categories/#gourmet' ),
	),
	array(
		'num'   => 'III',
		'title' => frignanis_t( 'Art Décor · Cooking Supreme', 'Art Décor · Cooking Supreme' ),
		'tags'  => frignanis_t( 'CERAMICS · LIGHTING · TABLEWARE', 'CERÂMICAS · ILUMINAÇÃO · ARTE DA MESA' ),
		'desc'  => frignanis_t( 'Exclusive pieces and European ceramics that elevate fine dining kitchens and prestigious tables.', 'Peças exclusivas e cerâmicas europeias que elevam cozinhas de alta gastronomia e mesas de prestígio.' ),
		'image' => get_template_directory_uri() . '/assets/images/italian-art-decor-emerald-ceramics.jpg',
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
				<a href="<?php echo esc_url( $item['url'] ); ?>" class="category-card" style="display: flex; flex-direction: column; text-decoration: none; overflow: hidden;">
					<?php if ( ! empty( $item['image'] ) ) : ?>
						<div style="height: 180px; width: 100%; overflow: hidden; border-radius: 4px; margin-bottom: 1.25rem;">
							<img src="<?php echo esc_url( $item['image'] ); ?>" 
								 alt="<?php echo esc_attr( $item['title'] ); ?>" 
								 style="width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease;" 
								 loading="lazy" />
						</div>
					<?php endif; ?>
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
