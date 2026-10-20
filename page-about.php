<?php
/**
 * Template Name: About Us / Sobre Nós
 * Template Post Type: page
 *
 * QUEM SOMOS — FRIGNANI’S
 * Estrutura visual em quatro momentos:
 * 1- Ferrara — As nossas raízes (Fotografia panorâmica dos campos italianos, agricultura e gastronomia)
 * 2- 1626–1891 — Uma história entre continentes (Acontecimentos históricos de Valência e imigração italiana)
 * 3- Brasil — Uma herança preservada (Vitória, ES e a trajetória de Sabrina Frignani)
 * 4- Luxemburgo — O novo capítulo (Sede internacional, apoios institucionais, manifesto e assinatura)
 *
 * @package Frignanis
 */

if (!defined('ABSPATH')) {
	exit;
}

get_header();

$pdf_presentation_url = function_exists('frignanis_get_presentation_pdf_url')
	? frignanis_get_presentation_pdf_url()
	: 'https://frignanis.instawp.site/wp-content/uploads/2026/10/Frignani-Apresentation.pdf';
?>

<div class="about-page-wireframe">

	<!-- ==========================================
		 HERO: ABERTURA INSTITUCIONAL
		 Fotografia panorâmica dos campos italianos
		 ========================================== -->
	<section class="about-panoramic-hero" aria-labelledby="about-hero-title">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-ferrara-terroir.jpg'); ?>"
			alt="<?php frignanis_attr_e('Panoramic photography of the fields of Ferrara - Italy, Emilia-Romagna', 'Fotografia panorâmica dos campos de Ferrara - Itália 🇮🇹, Emília Romagna'); ?>"
			class="about-panoramic-hero__bg" width="1920" height="720" fetchpriority="high" />
		<div class="about-panoramic-hero__overlay" aria-hidden="true"></div>

		<div class="about-panoramic-hero__content">
			<div class="about-panoramic-hero__badge">
				<?php frignanis_icon('folder', 16, 'icon-svg--gold'); ?>
				<span><?php frignanis_e('ABOUT US', 'QUEM SOMOS'); ?></span>
			</div>

			<h1 id="about-hero-title" class="about-panoramic-hero__title">
				<?php frignanis_e('FRIGNANI’S — An Italian heritage spanning generations and continents', 'FRIGNANI’S — Uma herança italiana que atravessa gerações e continentes'); ?>
			</h1>

			<p class="about-panoramic-hero__subtitle">
				<?php frignanis_e('Our story begins in Italy. Our tradition crosses oceans. Our vision connects the world.', 'Nossa história começa na Itália. Nossa tradição atravessa oceanos. Nossa visão conecta o mundo.'); ?>
			</p>

			<!-- Italian Flag Ribbon -->
			<div class="italian-flag-stripe" aria-hidden="true" style="margin: 0 auto; max-width: 140px;">
				<span class="italian-flag-stripe__green"></span>
				<span class="italian-flag-stripe__white"></span>
				<span class="italian-flag-stripe__red"></span>
			</div>
		</div>
	</section>

	<!-- ==========================================
		 MOMENTO 1: FERRARA — AS NOSSAS RAÍZES
		 ========================================== -->
	<section class="about-heritage-showcase" aria-labelledby="heritage-showcase-title">
		<div class="about-heritage-showcase__gold-bar" aria-hidden="true"></div>

		<div class="about-heritage-showcase__inner">

			<!-- Left Narrative Column -->
			<div class="about-heritage-showcase__content">
				<div class="about-heritage-showcase__pill-row">
					<span class="about-heritage-showcase__pill"><?php frignanis_e('1- FERRARA - ITALY 🇮🇹 — OUR ROOTS', '1- FERRARA - ITÁLIA 🇮🇹 — AS NOSSAS RAÍZES'); ?></span>
					<span class="about-heritage-showcase__pill-line" aria-hidden="true"></span>
				</div>

				<h2 id="heritage-showcase-title" class="about-heritage-showcase__title">
					Ferrara - <?php frignanis_e('Italy', 'Itália'); ?> 🇮🇹 · <span class="notranslate">Emilia-Romagna</span>
				</h2>

				<div class="about-heritage-showcase__text">
					<p>
						<?php frignanis_e(
							'In the lands of Ferrara, in Emilia-Romagna, northern Italy, lie the roots of the FRIGNANI family. A region of extraordinary agricultural and gastronomic tradition, where between the 18th and 19th centuries, generations of farmers cultivated wheat, vineyards, and orchards, preserving family values, artisan skills, and the authentic flavours of Italian culture.',
							'Nas terras de Ferrara - Itália 🇮🇹, na Emília Romagna, norte da Itália, encontram-se as raízes da família FRIGNANI. Uma região de extraordinária tradição agrícola e gastronômica, onde, entre os séculos XVIII e XIX, gerações de agricultores cultivaram trigo, vinhedos e hortas, preservando valores familiares, talentos artesanais e os sabores autênticos da cultura italiana.'
						); ?>
					</p>
				</div>

				<!-- Tribute to Gentila Frignani -->
				<div class="about-heritage-tribute"
					aria-label="<?php frignanis_attr_e('Tribute to Gentila Frignani', 'Tributo a Gentila Frignani'); ?>">
					<div class="about-heritage-tribute__arch">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gentila-frignani-portrait.png'); ?>"
							alt="<?php esc_attr_e('Gentila Frignani', 'frignanis'); ?>"
							class="about-heritage-tribute__img" width="125" height="145" loading="lazy" />
					</div>
					<div class="about-heritage-tribute__info">
						<span class="about-heritage-tribute__intro"><?php esc_html_e('In amorevole ricordo di', 'frignanis'); ?></span>
						<h3 class="about-heritage-tribute__name">Gentila Frignani</h3>
						<p class="about-heritage-tribute__dedication">
							<?php esc_html_e('Le nostre radici, sempre nel cuore.', 'frignanis'); ?></p>
					</div>
				</div>
			</div>

			<!-- Right Architectural Arch Window & Navy Block -->
			<div class="about-heritage-showcase__visual" aria-hidden="true">
				<div class="about-heritage-showcase__navy-block"></div>
				<div class="about-heritage-showcase__arch-frame">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-ferrara-estate-arch.jpg'); ?>"
						alt="<?php frignanis_attr_e('Fields and tradition of Ferrara - Italy, Emilia-Romagna', 'Campos e tradição de Ferrara - Itália 🇮🇹, Emília Romagna'); ?>"
						class="about-heritage-showcase__arch-img" width="1179" height="1105" loading="lazy" />
				</div>
			</div>

		</div>
	</section>

	<!-- ==========================================
		 MOMENTO 2: 1626–1891 — UMA HISTÓRIA ENTRE CONTINENTES
		 ========================================== -->
	<section class="about-wireframe-section"
		aria-label="<?php frignanis_attr_e('1626–1891 — A story between continents', '1626–1891 — Uma história entre continentes'); ?>">
		<div class="site-container">

			<div class="about-section-header" style="text-align: center; margin-bottom: 3.5rem;">
				<div class="eyebrow"
					style="color: var(--color-gold); font-size: 0.8rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; margin-bottom: 0.5rem;">
					<?php frignanis_e('2- 1626–1891 — A STORY BETWEEN CONTINENTS', '2- 1626–1891 — UMA HISTÓRIA ENTRE CONTINENTES'); ?>
				</div>
				<h2 class="section-title"
					style="color: var(--color-navy); font-size: clamp(2rem, 3.2vw, 2.6rem); margin: 0 auto; max-width: 760px;">
					<?php frignanis_e('Historical Records & The Atlantic Crossing', 'Registros Históricos & A Travessia Atlântica'); ?>
				</h2>
				<div class="ornament-divider" aria-hidden="true" style="margin: 1.25rem auto 0; max-width: 180px;">
					<span class="ornament-divider__symbol">❖</span>
				</div>
			</div>

			<div class="about-wireframe-container">

				<!-- Row 1: Valência, 1626 (Card Left with Image) + História (Right) -->
				<div class="about-wireframe-row">
					<div class="about-wireframe-card about-wireframe-card--has-image">
						<div class="about-wireframe-card__thumb">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/frignanis_valencia.jpeg'); ?>" 
								 alt="<?php frignanis_attr_e('Valencia and historical records of the Barony of Frignani', 'Valência e os registros históricos da Baronia de Frignani'); ?>" 
								 class="about-wireframe-card__img" 
								 width="1179" 
								 height="796" 
								 loading="lazy" />
						</div>
						<div class="about-wireframe-card__body">
							<div class="about-wireframe-card__icon" aria-hidden="true">
								<?php frignanis_icon('landmark', 24); ?>
							</div>
							<h3 class="about-wireframe-card__label notranslate"><?php frignanis_e('Valencia, 1626', 'Valência, 1626'); ?></h3>
							<span style="display: block; font-size: 0.8rem; color: var(--color-gold); margin-top: 0.35rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em;"><?php frignanis_e('Noble Barony', 'Baronia Nobiliárquica'); ?></span>
						</div>
					</div>

					<div class="about-wireframe-content">
						<h3 class="about-wireframe-content__heading">
							<?php frignanis_e('Barony of Frignani and Frignestani', 'Baronia de Frignani e Frignestani'); ?></h3>
						<span
							class="about-wireframe-content__tag"><?php frignanis_e('Valencia, Spain · Reign of Philip IV', 'Valência, Espanha · Reinado de Filipe IV'); ?></span>
						<p class="about-wireframe-content__text">
							<?php frignanis_e(
								'The history of the Frignani name spans centuries and borders. In 1626, in Valencia, Spain, during the reign of King Philip IV, the Barony of Frignani and Frignestani was created and granted to Gaspar Palavicino y Centurión, an enduring historical record of the name’s nobility and presence in Europe.',
								'A história do nome Frignani atravessa séculos e fronteiras. Em 1626, em Valência, Espanha, durante o reinado de Filipe IV, foi criada a Baronia de Frignani e Frignestani, concedida a Gaspar Palavicino y Centurión, um registro histórico da presença do nome na Europa.'
							); ?>
						</p>
					</div>
				</div>

				<!-- Row 2: 1891 Travessia (Left) + Imigração italiana (Card Right) -->
				<div class="about-wireframe-row about-wireframe-row--reverse">
					<div class="about-wireframe-content">
						<h3 class="about-wireframe-content__heading">
							<?php frignanis_e('The 1891 Atlantic Crossing', 'A Travessia Atlântica de 1891'); ?></h3>
						<span
							class="about-wireframe-content__tag"><?php frignanis_e('September 29, 1891 · Port of Santa Cruz, Brazil', '29 de setembro de 1891 · Porto de Santa Cruz, Brasil'); ?></span>
						<p class="about-wireframe-content__text">
							<?php frignanis_e(
								'On September 29, 1891, our ancestors departed Italy and disembarked at the Port of Santa Cruz, Espírito Santo, Brazil, bringing with them their traditions, recipes, memories, and the entrepreneurial spirit that would inspire future generations.',
								'Em 29 de setembro de 1891, nossos antepassados deixaram a Itália e desembarcaram no Porto de Santa Cruz, Espírito Santo, Brasil, levando consigo suas tradições, valores e o espírito empreendedor que atravessaria gerações.'
							); ?>
						</p>
					</div>

					<div class="about-wireframe-card about-wireframe-card--has-image">
						<div class="about-wireframe-card__thumb">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/italia_imigracao.jpeg'); ?>" 
								 alt="<?php frignanis_attr_e('Italian immigration and the 1891 Atlantic crossing', 'Imigração italiana e a travessia atlântica de 1891'); ?>" 
								 class="about-wireframe-card__img" 
								 width="1448" 
								 height="1086" 
								 loading="lazy" />
						</div>
						<div class="about-wireframe-card__body">
							<div class="about-wireframe-card__icon" aria-hidden="true">
								<?php frignanis_icon('ship', 24); ?>
							</div>
							<h3 class="about-wireframe-card__label">
								<?php frignanis_e('Italian Immigration', 'Imigração italiana'); ?>
							</h3>
							<span style="display: block; font-size: 0.8rem; color: var(--color-gold); margin-top: 0.35rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em;"><?php frignanis_e('Arrival in Brazil', 'Desembarque no Brasil'); ?></span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
		 MOMENTO 3: BRASIL — UMA HERANÇA PRESERVADA
		 ========================================== -->
	<section class="about-wireframe-section" style="background: #F8F5EE; padding-top: 1rem;"
		aria-label="<?php frignanis_attr_e('Brazil — A preserved heritage', 'Brasil — Uma herança preservada'); ?>">
		<div class="site-container">

			<div class="about-section-header" style="text-align: center; margin-bottom: 3rem;">
				<div class="eyebrow"
					style="color: var(--color-gold); font-size: 0.8rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; margin-bottom: 0.5rem;">
					<?php frignanis_e('3- BRAZIL 🇧🇷 — A PRESERVED HERITAGE', '3- BRASIL — UMA HERANÇA PRESERVADA'); ?>
				</div>
				<h2 class="section-title"
					style="color: var(--color-navy); font-size: clamp(2rem, 3.2vw, 2.6rem); margin: 0 auto; max-width: 760px;">
					<?php frignanis_e('Vitória, Espírito Santo & International Vocation', 'Vitória, Espírito Santo & A Trajetória Internacional'); ?>
				</h2>
				<div class="ornament-divider" aria-hidden="true" style="margin: 1.25rem auto 0; max-width: 180px;">
					<span class="ornament-divider__symbol">❖</span>
				</div>
			</div>

			<div class="about-wireframe-container">
				<!-- Row 3: Vitória, Brasil (Card Left) + Trajetória Sabrina Frignani (Right) -->
				<div class="about-wireframe-row">
					<div class="about-wireframe-card about-wireframe-card--has-image"
						style="border-color: rgba(168, 132, 58, 0.45); background: #FFFFFF;">
						<div class="about-wireframe-card__thumb">
							<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/vitoria_es.jpeg'); ?>" 
								 alt="<?php frignanis_attr_e('Port of Vitória, Espírito Santo and international trade', 'Porto de Vitória, Espírito Santo e comércio internacional'); ?>" 
								 class="about-wireframe-card__img" 
								 width="893" 
								 height="1761" 
								 loading="lazy" />
						</div>
						<div class="about-wireframe-card__body">
							<div class="about-wireframe-card__icon" aria-hidden="true">
								<?php frignanis_icon('waves', 24); ?>
							</div>
							<h3 class="about-wireframe-card__label"><?php frignanis_e('Vitória, Brazil', 'Vitória, Brasil'); ?></h3>
							<span style="display: block; font-size: 0.8rem; color: var(--color-gold); margin-top: 0.35rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em;"><?php frignanis_e('International Trade', 'Comércio Internacional'); ?></span>
						</div>
					</div>

					<div class="about-wireframe-content">
						<h3 class="about-wireframe-content__heading">
							<?php frignanis_e('Business Vision & Excellence', 'Visão Empresarial & Excelência'); ?>
						</h3>
						<span
							class="about-wireframe-content__tag"><?php frignanis_e('Career Spanning Brazil and Europe · Italy & Spain', 'Trajetória entre o Brasil e a Europa · Itália & Espanha'); ?></span>
						<p class="about-wireframe-content__text" style="font-size: 1.05rem; line-height: 1.75;">
							<?php frignanis_e(
								'More than a century later, in Vitória, Sabrina Frignani grew up between Italian gastronomic heritage and the dynamism of international maritime trade. Her professional career between Brazil and Europe, especially in Italy and Spain, consolidated a business vision driven by excellence and connections between diverse cultures and markets.',
								'Mais de um século depois, em Vitória, Sabrina Frignani cresceu entre a herança gastronômica italiana e o dinamismo do comércio internacional. Sua trajetória profissional entre o Brasil e a Europa, especialmente na Itália e na Espanha, consolidou uma visão empresarial orientada pela excelência e pelas conexões entre diferentes culturas e mercados.'
							); ?>
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- ==========================================
		 MOMENTO 4: LUXEMBURGO — O NOVO CAPÍTULO
		 ========================================== -->
	<section class="about-lux-section" aria-labelledby="lux-heading">
		<div class="site-container">
			<div class="about-lux-container">

				<div class="about-lux-header">
					<div class="about-lux-badge">
						<?php frignanis_icon('building', 16, 'icon-svg--gold'); ?>
						<span><?php frignanis_e('4- LUXEMBOURG 🇱🇺 — THE NEW CHAPTER', '4- LUXEMBURGO — O NOVO CAPÍTULO'); ?></span>
					</div>
					<h2 id="lux-heading" class="about-lux-title">
						<?php frignanis_e('The Bridge Between Italy and the World', 'A Ponte entre a Itália e o Mundo'); ?>
					</h2>
					<p class="about-lux-subtitle">
						<?php frignanis_e('International headquarters in the heart of Europe · Luxembourg', 'Sede internacional no coração da Europa · Luxemburgo'); ?>
					</p>
				</div>

				<!-- Panorâmica de Luxemburgo: Cidade sede e centro de operações -->
				<div class="about-lux-visual">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/luxembourg_img.jpeg'); ?>" 
						 alt="<?php frignanis_attr_e('Panoramic view of Luxembourg, headquarters of Frignani’s Import & Export', 'Panorâmica de Luxemburgo, sede da Frignani’s Import & Export'); ?>" 
						 class="about-lux-visual__img" 
						 width="1160" 
						 height="460" 
						 loading="lazy" />
				</div>

				<!-- Apresentação Comercial Editorial -->
				<div class="about-lux-editorial">
					<div>
						<p class="about-lux-lead"
							style="font-size: 1.25rem; font-family: var(--font-serif); color: var(--color-navy); line-height: 1.5;">
							<?php frignanis_e('Today, the new Frignani generation symbolically makes the return journey to its European roots.', 'Hoje, a nova geração Frignani realiza simbolicamente o caminho de volta às suas origens europeias.'); ?>
						</p>
						<p class="about-lux-text" style="margin-top: 1.25rem; font-size: 1.05rem;">
							<?php frignanis_e('Headquartered in Luxembourg, at the heart of Europe, Frignani’s Import & Export is born, founded by Sabrina Frignani, uniting Italian tradition, international experience, and a contemporary business vision.', 'Com sede em Luxemburgo, no coração da Europa, nasce a Frignani’s Import & Export, fundada por Sabrina Frignani, unindo tradição italiana, experiência internacional e uma visão contemporânea dos negócios.'); ?>
						</p>

						<!-- Institutional Quote Block -->
						<div
							style="margin-top: 1.75rem; padding: 1.25rem 1.5rem; background: rgba(168, 132, 58, 0.08); border-left: 3px solid var(--color-gold); border-radius: 0 4px 4px 0;">
							<p
								style="margin: 0; font-family: var(--font-serif); font-size: 1.05rem; font-style: italic; color: var(--color-navy); line-height: 1.6;">
								«
								<?php frignanis_e('Because, for us, excellence begins in the earth, in the hands of those who produce, and in the traditions that time preserves.', 'Porque, para nós, a excelência começa na terra, nas mãos de quem produz e nas tradições que o tempo preserva.'); ?>
								»
							</p>
						</div>
					</div>

					<div>
						<!-- Official Institutional Support Card -->
						<div class="about-alliance-card" style="margin: 0 0 1.5rem 0; padding: 1.75rem;">
							<div class="about-alliance-card__icon" aria-hidden="true">
								<?php frignanis_icon('sparkles', 22, 'icon-svg--gold'); ?></div>
							<div>
								<h3 class="about-alliance-card__title"
									style="font-size: 1.15rem; margin-bottom: 0.5rem; color: var(--color-navy);">
									<?php frignanis_e('Alliances & Institutional Support in Luxembourg', 'Alianças & Apoios Institucionais em Luxemburgo'); ?>
								</h3>
								<p class="about-alliance-card__text" style="font-size: 0.95rem; line-height: 1.65;">
									<?php frignanis_e('With the support of the Federazione Italiana Cuochi – Delegazione Lussemburgo, the Italian Chamber of Commerce in Luxembourg, and the Embassy of Italy in Luxembourg, we establish bridges between producers, brands, and international markets, upholding authenticity, quality, and excellence at every stage, from selection to final delivery.', 'Com o apoio da Federazione Italiana Cuochi – Delegazione Lussemburgo, da Câmara de Comércio Italiana em Luxemburgo e da Embaixada da Itália em Luxemburgo, estabelecemos pontes entre produtores, marcas e mercados internacionais, valorizando a autenticidade, a qualidade e a excelência em cada etapa, da seleção à entrega final.'); ?>
								</p>
							</div>
						</div>

						<p class="about-lux-text" style="font-size: 1.05rem;">
							<?php frignanis_e('More than importing and exporting, we believe in preserving traditions, valuing producers, and building enduring trade relationships.', 'Mais do que importar e exportar, acreditamos em preservar tradições, valorizar produtores e construir relações comerciais duradouras.'); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
		 ASSINATURA INSTITUCIONAL
		 ========================================== -->
	<section class="about-final-ivory-section"
		aria-label="<?php frignanis_attr_e('Visual Identity & Institutional Signature', 'Identidade Visual & Assinatura Frignani’s'); ?>">
		<div class="site-container">
			<div class="about-final-ivory-container">

				<!-- Logomarca Preta / Escura sobre fundo claro -->
				<div class="about-final-logo-wrapper">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/logo/logo-fundo-claro-web.png'); ?>"
						alt="<?php esc_attr_e("Frignani's Import & Export", 'frignanis'); ?>" class="about-final-logo"
						width="160" height="203" loading="lazy" />
				</div>

				<!-- Subtítulo Institucional -->
				<div class="about-final-brand-lockup">
					<?php frignanis_e('FRIGNANI’S — Italian Heritage. International Excellence.', 'FRIGNANI’S — Herança Italiana. Excelência Internacional.'); ?>
				</div>

				<!-- Cadência Continental de 3 Linhas -->
				<div class="about-final-cadence">
					<?php frignanis_e('From Italy to the Americas.', 'Da Itália às Américas.'); ?><br />
					<?php frignanis_e('From the Americas to Europe.', 'Das Américas à Europa.'); ?><br />
					<span class="text-gold italic-serif"
						style="font-size: 1.15em;"><?php frignanis_e('From Europe to the world.', 'Da Europa para o mundo.'); ?></span>
				</div>

				<!-- Divisor Dourado -->
				<div class="about-final-divider" aria-hidden="true">
					<span>❖</span>
				</div>

				<!-- FRASE FINAL EM DOURADO (Destaque do Briefing) -->
				<blockquote class="about-final-gold-phrase">
					«
					<?php frignanis_e('A family story. A lasting tradition. A vision that crosses borders.', 'Uma história de família. Uma tradição que permanece. Uma visão que ultrapassa fronteiras.'); ?>
					»
				</blockquote>

				<!-- Botões de Ação -->
				<div class="about-final-cta-row">
					<a href="<?php echo esc_url($pdf_presentation_url); ?>" class="btn btn-primary"
						download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
						<?php frignanis_icon('download', 18); ?>
						<span><?php frignanis_e('Frignani Presentation', 'Apresentação Frignani'); ?></span>
					</a>
					<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary"
						style="color: var(--color-navy); border-color: rgba(20, 41, 74, 0.4);">
						<?php frignanis_e('GET IN TOUCH', 'ENTRE EM CONTATO'); ?>
					</a>
				</div>

			</div>
		</div>
</div>

<?php
get_footer();
