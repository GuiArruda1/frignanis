<?php
/**
 * The main template file
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>

<div class="site-container" style="padding-top: calc(var(--header-height) + 4rem); padding-bottom: var(--space-3xl); min-height: 70vh;">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: var(--space-2xl);">
				<header class="entry-header" style="margin-bottom: var(--space-md);">
					<?php the_title( '<h1 class="entry-title font-serif" style="font-size: var(--font-size-h2); color: var(--color-text-light);">', '</h1>' ); ?>
				</header>
				<div class="entry-content" style="color: var(--color-text-muted-light); font-size: var(--font-size-body); line-height: 1.8;">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	<?php else : ?>
		<p style="color: var(--color-text-muted-light);"><?php esc_html_e( 'No content found.', 'frignanis' ); ?></p>
	<?php endif; ?>
</div>

<?php
get_footer();
