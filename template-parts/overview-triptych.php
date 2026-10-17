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
<section class="triptych-section" id="brand-overview" aria-label="<?php esc_attr_e( 'Overview & Services', 'frignanis' ); ?>">
	<div class="site-container">
		<div class="triptych-grid">

			<!-- PANEL 1: HERITAGE & ORIGINS (NAVY) -->
			<article class="triptych-panel triptych-panel--heritage">
				<div class="triptych-panel__inner">
					
					<div class="triptych-callout">
						<p class="triptych-callout__text">
							<?php esc_html_e( 'A story spanning generations, continents and flavours.', 'frignanis' ); ?>
						</p>
					</div>

					<div class="triptych-diamonds" aria-hidden="true">
						<span class="triptych-diamond">◆</span>
						<span class="triptych-diamond">◆</span>
						<span class="triptych-diamond">◆</span>
					</div>

					<p class="triptych-body">
						<?php esc_html_e( 'From the plains of Ferrara in northern Italy to the Barony of Frignani and Frignestani (1626), our history united a passion for the land with international maritime trade in Vitória (ES) and international management in Spain.', 'frignanis' ); ?>
					</p>

					<p class="triptych-body triptych-body--highlight">
						<?php esc_html_e( 'Today, in Luxembourg, the new generation makes the return journey with the support of the Federazione Italiana Cuochi – Delegazione Lussemburgo.', 'frignanis' ); ?>
					</p>

				</div>
			</article>

			<!-- PANEL 2: OUR MISSION AND SERVICES (NAVY / GOLD / AUTHENTIC HARVEST PHOTOGRAPHY) -->
			<article class="triptych-panel triptych-panel--mission">
				<div class="triptych-panel__media-bg" aria-hidden="true">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-grape-harvest-color.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Italian Vineyard Harvest Celebration', 'frignanis' ); ?>" 
						 class="triptych-panel__bg-img" 
						 width="1600" 
						 height="1069" 
						 loading="lazy" />
					<div class="triptych-panel__media-overlay"></div>
				</div>

				<div class="triptych-panel__inner">
					
					<div class="triptych-eyebrow">
						<?php esc_html_e( 'OUR MISSION & SERVICES', 'frignanis' ); ?>
					</div>

					<blockquote class="triptych-quote">
						« <?php esc_html_e( 'Bringing authentic Italy to the world with the rigor of those who know its origin and the care of those who honor a heritage.', 'frignanis' ); ?> »
					</blockquote>

					<div class="triptych-divider" aria-hidden="true"></div>

					<div class="triptych-channels">
						<h4 class="triptych-channels__label">
							<?php esc_html_e( 'More than supplying, we represent:', 'frignanis' ); ?>
						</h4>
						<p class="triptych-channels__text">
							<?php esc_html_e( 'We are your presence in Italy: from the rigorous selection of each producer to negotiation, logistics, import and export documentation, through to final delivery with discretion and security.', 'frignanis' ); ?>
						</p>
					</div>

				</div>
			</article>

			<!-- PANEL 3: WHO WE SERVE (CREAM) -->
			<article class="triptych-panel triptych-panel--products">
				<div class="triptych-panel__inner">
					
					<div class="triptych-pill">
						<?php esc_html_e( 'WHO WE SERVE', 'frignanis' ); ?>
					</div>

					<h3 class="triptych-products__title">
						<?php esc_html_e( 'Tailored Italian Excellence', 'frignanis' ); ?>
					</h3>

					<p class="triptych-products__subtitle">
						<?php esc_html_e( 'A single interlocutor. The whole of Italy within your reach.', 'frignanis' ); ?>
					</p>

					<div class="triptych-categories">
						
						<!-- Item 1 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php esc_html_e( 'DISTRIBUTORS & SUPERMARKETS', 'frignanis' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php esc_html_e( 'Consistent and certified supply, carrying the signature of authentic Italian production.', 'frignanis' ); ?>
							</p>
						</div>

						<!-- Item 2 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php esc_html_e( 'RESTAURANTS & HAUTE CUISINE', 'frignanis' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php esc_html_e( 'Exceptional ingredients, terroir wines, and art décor pieces that transform every service into an experience.', 'frignanis' ); ?>
							</p>
						</div>

						<!-- Item 3 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php esc_html_e( 'EMBASSIES & MAJOR CORPORATIONS', 'frignanis' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php esc_html_e( 'Official receptions, diplomatic dinners, corporate gifts, and bespoke holiday hampers.', 'frignanis' ); ?>
							</p>
						</div>

					</div>

					<div class="triptych-footnote">
						<p>
							<?php esc_html_e( 'Serving: Luxembourg, Belgium, Germany, Spain, Netherlands, USA, Brazil, Chile, and Colombia.', 'frignanis' ); ?>
						</p>
					</div>

				</div>
			</article>

		</div>
	</div>
</section>
