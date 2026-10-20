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
							<?php frignanis_e( 'A story spanning generations, continents and flavours.', 'Uma história entre gerações, continentes e sabores.' ); ?>
						</p>
					</div>

					<div class="triptych-diamonds" aria-hidden="true">
						<span class="triptych-diamond">◆</span>
						<span class="triptych-diamond">◆</span>
						<span class="triptych-diamond">◆</span>
					</div>

					<p class="triptych-body">
						<?php frignanis_e( 'From the plains of Ferrara in northern Italy to the Barony of Frignani and Frignestani (1626), our history united a passion for the land with international maritime trade in Vitória (ES) and international management in Spain.', 'Das terras de Ferrara, no norte da Itália, à Baronia de Frignani e Frignestani (1626), nossa história uniu a paixão pela terra ao comércio marítimo em Vitória (ES) e à gestão internacional na Espanha.' ); ?>
					</p>

					<p class="triptych-body triptych-body--highlight">
						<?php frignanis_e( 'Today, in Luxembourg, the new generation makes the return journey with the support of the Federazione Italiana Cuochi – Delegazione Lussemburgo.', 'Hoje, em Luxemburgo, a nova geração realiza o caminho de volta com o apoio da Federazione Italiana Cuochi – Delegazione Lussemburgo.' ); ?>
					</p>

				</div>
			</article>

			<!-- PANEL 2: OUR MISSION AND SERVICES (NAVY / GOLD / AUTHENTIC HARVEST PHOTOGRAPHY) -->
			<article class="triptych-panel triptych-panel--mission">
				<div class="triptych-panel__media-bg" aria-hidden="true">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-vineyard-grape-rows.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Italian Vineyard Terroir & Grape Harvest', 'frignanis' ); ?>" 
						 class="triptych-panel__bg-img" 
						 width="1600" 
						 height="1069" 
						 loading="lazy" />
					<div class="triptych-panel__media-overlay"></div>
				</div>

				<div class="triptych-panel__inner">
					
					<div class="triptych-eyebrow">
						<?php frignanis_e( 'OUR MISSION & SERVICES', 'NOSSA MISSÃO E SERVIÇOS' ); ?>
					</div>

					<blockquote class="triptych-quote">
						« <?php frignanis_e( 'Bringing authentic Italy to the world with the rigor of those who know its origin and the care of those who honor a heritage.', 'Conduzindo a Itália autêntica ao mundo com o rigor de quem conhece a origem e o cuidado de quem honra uma herança.' ); ?> »
					</blockquote>

					<div class="triptych-divider" aria-hidden="true"></div>

					<div class="triptych-channels">
						<h4 class="triptych-channels__label">
							<?php frignanis_e( 'More than supplying, we represent:', 'Mais do que fornecer, nós representamos:' ); ?>
						</h4>
						<p class="triptych-channels__text">
							<?php frignanis_e( 'We are your presence in Italy: from the rigorous selection of each producer to negotiation, logistics, import and export documentation, through to final delivery with discretion and security.', 'Somos a sua presença na Itália: da rigorosa seleção de cada produtor à negociação, logística, documentação aduaneira e entrega final com total discrição e segurança.' ); ?>
						</p>
					</div>

				</div>
			</article>

			<!-- PANEL 3: WHO WE SERVE (CREAM) -->
			<article class="triptych-panel triptych-panel--products">
				<div class="triptych-panel__inner">
					
					<div class="triptych-pill">
						<?php frignanis_e( 'WHO WE SERVE', 'A QUEM ATENDEMOS' ); ?>
					</div>

					<h3 class="triptych-products__title">
						<?php frignanis_e( 'Tailored Italian Excellence', 'Excelência Italiana Sob Medida' ); ?>
					</h3>

					<p class="triptych-products__subtitle">
						<?php frignanis_e( 'A single interlocutor. The whole of Italy within your reach.', 'Um único interlocutor. A Itália inteira ao seu alcance.' ); ?>
					</p>

					<div class="triptych-categories">
						
						<!-- Item 1 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php frignanis_e( 'DISTRIBUTORS & SUPERMARKETS', 'DISTRIBUIDORES E SUPERMERCADOS' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php frignanis_e( 'Consistent and certified supply, carrying the signature of authentic Italian production.', 'Fornecimento regular, escalável e com a chancela dos melhores selos de denominação italianos.' ); ?>
							</p>
						</div>

						<!-- Item 2 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php frignanis_e( 'RESTAURANTS & HAUTE CUISINE', 'RESTAURANTES E ALTA GASTRONOMIA' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php frignanis_e( 'Exceptional ingredients, terroir wines, and art décor pieces that transform every service into an experience.', 'Ingredientes excepcionais, vinhos de terroir e peças de art décor que transformam cada serviço numa experiência memorável.' ); ?>
							</p>
						</div>

						<!-- Item 3 -->
						<div class="triptych-cat-item">
							<h4 class="triptych-cat-item__title">
								<?php frignanis_e( 'EMBASSIES & MAJOR CORPORATIONS', 'EMBAIXADAS E GRANDES CORPORAÇÕES' ); ?>
							</h4>
							<p class="triptych-cat-item__desc">
								<?php frignanis_e( 'Official receptions, diplomatic dinners, corporate gifts, and bespoke holiday hampers.', 'Recepções oficiais, jantares diplomáticos, presentes corporativos de alto padrão e cestas personalizadas.' ); ?>
							</p>
						</div>

					</div>

					<div class="triptych-footnote">
						<p>
							<?php frignanis_e( 'Serving: Luxembourg, Belgium, Germany, Spain, Netherlands, USA, Brazil, Chile, and Colombia.', 'Atendendo: Luxemburgo, Bélgica, Alemanha, Espanha, Países Baixos, EUA, Brasil, Chile e Colômbia.' ); ?>
						</p>
					</div>

				</div>
			</article>

		</div>
	</div>
</section>
