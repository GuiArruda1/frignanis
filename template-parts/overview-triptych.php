<?php
/**
 * Template Part: 3-Panel Editorial Overview Triptych
 *
 * Displays the 3 plain typographic information sections in English:
 * - Panel 1 (Navy): Heritage & Atlantic Origin Story
 * - Panel 2 (Burgundy): Mission & Distribution Channels
 * - Panel 3 (Ivory/White): Curated Products & Advisory Services
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<!-- ==========================================
     3-PANEL EDITORIAL OVERVIEW (TRIPTYCH)
     ========================================== -->
<section class="triptych-section" id="brand-overview" aria-label="<?php esc_attr_e( 'Brand Overview & Portfolio', 'frignanis' ); ?>">
	<div class="site-container">
		<div class="triptych-grid">

			<!-- PANEL 1: HERITAGE & ORIGINS (NAVY) -->
			<article class="triptych-panel triptych-panel--heritage">
				<div class="triptych-panel__inner">
					
					<div class="triptych-callout">
						<p class="triptych-callout__text">
							<?php esc_html_e( "FRIGNANI'S is an international trading house, born from an authentic Italian heritage story.", 'frignanis' ); ?>
						</p>
					</div>

					<div class="triptych-diamonds" aria-hidden="true">
						<span class="triptych-diamond">◆</span>
						<span class="triptych-diamond">◆</span>
						<span class="triptych-diamond">◆</span>
					</div>

					<p class="triptych-body">
						<?php esc_html_e( 'Over a century ago, a transatlantic voyage began. On board: an Italian family, ancestral traditions, and the promise to bring the authentic flavors of Italy to the world. That story is our story.', 'frignanis' ); ?>
					</p>

					<p class="triptych-body triptych-body--highlight">
						<?php esc_html_e( 'Today, this promise continues: connecting Italian producers directly to discerning markets worldwide, and exporting the finest authentic terroir.', 'frignanis' ); ?>
					</p>

				</div>
			</article>

			<!-- PANEL 2: OUR MISSION & CHANNELS (BURGUNDY) -->
			<article class="triptych-panel triptych-panel--mission">
				<div class="triptych-panel__inner">
					
					<div class="triptych-eyebrow">
						<?php esc_html_e( 'OUR MISSION', 'frignanis' ); ?>
					</div>

					<blockquote class="triptych-quote">
						<?php esc_html_e( 'To share and elevate Italian gastronomic culture across the globe through the direct import and export of exceptional products and culinary experiences.', 'frignanis' ); ?>
					</blockquote>

					<div class="triptych-divider" aria-hidden="true"></div>

					<div class="triptych-channels">
						<h4 class="triptych-channels__label">
							<?php esc_html_e( 'Distribution & Commercial Channels:', 'frignanis' ); ?>
						</h4>
						<p class="triptych-channels__text">
							<?php esc_html_e( 'Direct trade, B2B digital marketplaces, retail partnerships, international food fairs, and specialized trade exhibitions.', 'frignanis' ); ?>
						</p>
					</div>

				</div>
			</article>

			<!-- PANEL 3: OUR PRODUCTS & SERVICES (IVORY / WHITE) -->
			<article class="triptych-panel triptych-panel--products">
				<div class="triptych-panel__inner">
					
					<div class="triptych-pill">
						<?php esc_html_e( 'OUR PRODUCTS', 'frignanis' ); ?>
					</div>

					<h3 class="triptych-products__title">
						<?php esc_html_e( 'Italian Gastronomy & Artisanal Terroir', 'frignanis' ); ?>
					</h3>

					<p class="triptych-products__subtitle">
						<?php esc_html_e( 'A curated selection of agri-food excellence embodying authentic Italian craftsmanship.', 'frignanis' ); ?>
					</p>

					<div class="triptych-categories">
						
						<!-- Item 1 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php esc_html_e( 'VINS & SPARKLING · WINES & PROSECCO', 'frignanis' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php esc_html_e( 'Exceptional vintages and sparkling selections, sourced directly from certified viticultural partner regions.', 'frignanis' ); ?>
							</p>
						</div>

						<!-- Item 2 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php esc_html_e( 'OLIVE OIL & FINE GROCERY', 'frignanis' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php esc_html_e( 'Extra virgin olive oils, truffle condiments, and artisanal preserves, curated with exacting standards.', 'frignanis' ); ?>
							</p>
						</div>

						<!-- Item 3 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php esc_html_e( 'LIFESTYLE & ART DE VIVRE', 'frignanis' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php esc_html_e( 'Tableware, crystal glassware, ambient dining lighting, and bespoke hospitality accessories.', 'frignanis' ); ?>
							</p>
						</div>

					</div>

					<div class="triptych-footnote">
						<p>
							<?php esc_html_e( 'Services: international trade advisory, end-to-end logistics, and customs documentation.', 'frignanis' ); ?>
						</p>
					</div>

				</div>
			</article>

		</div>
	</div>
</section>
