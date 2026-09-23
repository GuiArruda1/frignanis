<?php
/**
 * Template Part: Mission Section
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$mission_eyebrow         = function_exists( 'get_field' ) && get_field( 'mission_eyebrow' ) 
	? get_field( 'mission_eyebrow' ) 
	: esc_html__( 'OUR MISSION', 'frignanis' );

$mission_title_lead      = function_exists( 'get_field' ) && get_field( 'mission_title_lead' ) 
	? get_field( 'mission_title_lead' ) 
	: esc_html__( 'A bridge between Italy and the', 'frignanis' );

$mission_title_highlight = function_exists( 'get_field' ) && get_field( 'mission_title_highlight' ) 
	? get_field( 'mission_title_highlight' ) 
	: esc_html__( 'world', 'frignanis' );

$mission_body            = function_exists( 'get_field' ) && get_field( 'mission_body' ) 
	? get_field( 'mission_body' ) 
	: esc_html__( "Frignani's was founded on a simple belief: that the finest Italian products deserve a direct path to international markets. We work exclusively with Italian producers, operating through transparent import & export transactions that honour their craft.", 'frignanis' );

$mission_btn_text        = function_exists( 'get_field' ) && get_field( 'mission_btn_text' ) 
	? get_field( 'mission_btn_text' ) 
	: esc_html__( 'OUR STORY', 'frignanis' );

$mission_btn_url         = function_exists( 'get_field' ) && get_field( 'mission_btn_url' ) 
	? get_field( 'mission_btn_url' ) 
	: '#story';

$mission_img_primary     = function_exists( 'get_field' ) ? get_field( 'mission_image_primary' ) : null;
$mission_img_secondary   = function_exists( 'get_field' ) ? get_field( 'mission_image_secondary' ) : null;

$primary_img_src = ! empty( $mission_img_primary['url'] ) 
	? $mission_img_primary['url'] 
	: get_template_directory_uri() . '/assets/images/mission-olive-oil.jpg';

$secondary_img_src = ! empty( $mission_img_secondary['url'] ) 
	? $mission_img_secondary['url'] 
	: get_template_directory_uri() . '/assets/images/mission-craftsman.jpg';
?>

<section class="mission" id="mission" aria-labelledby="mission-title">
	<div class="site-container">
		<div class="mission__grid">

			<!-- Left Column: Story & Narrative -->
			<div class="mission__content">
				<?php if ( ! empty( $mission_eyebrow ) ) : ?>
					<div class="eyebrow"><?php echo esc_html( $mission_eyebrow ); ?></div>
				<?php endif; ?>

				<h2 id="mission-title" class="mission__title">
					<?php echo esc_html( $mission_title_lead ); ?>
					<?php if ( ! empty( $mission_title_highlight ) ) : ?>
						<span class="text-gold italic-serif"><?php echo esc_html( $mission_title_highlight ); ?></span>.
					<?php endif; ?>
				</h2>

				<?php if ( ! empty( $mission_body ) ) : ?>
					<div class="mission__body">
						<p><?php echo wp_kses_post( nl2br( $mission_body ) ); ?></p>
					</div>
				<?php endif; ?>

				<?php if ( ! empty( $mission_btn_text ) ) : ?>
					<a href="<?php echo esc_url( $mission_btn_url ); ?>" class="btn btn-outline-dark">
						<?php echo esc_html( $mission_btn_text ); ?>
					</a>
				<?php endif; ?>
			</div>

			<!-- Right Column: Staggered Dual Photography -->
			<div class="mission__visuals">
				<div class="mission__image-wrapper mission__image-wrapper--primary">
					<img src="<?php echo esc_url( $primary_img_src ); ?>" 
						 alt="<?php esc_attr_e( 'Artisanal Italian Extra Virgin Olive Oil', 'frignanis' ); ?>" 
						 class="mission__image" 
						 width="600" 
						 height="600" 
						 loading="lazy" />
				</div>
				<div class="mission__image-wrapper mission__image-wrapper--secondary">
					<img src="<?php echo esc_url( $secondary_img_src ); ?>" 
						 alt="<?php esc_attr_e( 'Master Italian Craftsman in Traditional Bottega Workshop', 'frignanis' ); ?>" 
						 class="mission__image" 
						 width="600" 
						 height="800" 
						 loading="lazy" />
				</div>
			</div>

		</div>
	</div>
</section>
