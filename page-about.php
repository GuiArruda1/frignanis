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
	: get_template_directory_uri() . '/assets/docs/Frignani-Apresentation.pdf';
?>

<div class="about-page-wireframe">

	<!-- ==========================================
		 HERO: ABERTURA INSTITUCIONAL
		 Fotografia panorâmica dos campos italianos
		 ========================================== -->
	<section class="about-panoramic-hero" aria-labelledby="about-hero-title">
		<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/about-ferrara-terroir.jpg'); ?>"
			alt="<?php esc_attr_e('Fotografia panorâmica dos campos de Ferrara, Emilia-Romagna', 'frignanis'); ?>"
			class="about-panoramic-hero__bg" width="1920" height="720" fetchpriority="high" />
		<div class="about-panoramic-hero__overlay" aria-hidden="true"></div>

		<div class="about-panoramic-hero__content">
			<div class="about-panoramic-hero__badge">
				<?php frignanis_icon('folder', 16, 'icon-svg--gold'); ?>
				<span><?php esc_html_e('QUEM SOMOS', 'frignanis'); ?></span>
			</div>

			<h1 id="about-hero-title" class="about-panoramic-hero__title">
				<?php esc_html_e('FRIGNANI’S — Uma herança italiana que atravessa gerações e continentes', 'frignanis'); ?>
			</h1>

			<p class="about-panoramic-hero__subtitle">
				<?php esc_html_e('Nossa história começa na Itália. Nossa tradição atravessa oceanos. Nossa visão conecta o mundo.', 'frignanis'); ?>
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
		 Fotografia panorâmica dos campos italianos,
		 acompanhada dos primeiros parágrafos sobre
		 agricultura e gastronomia.
		 ========================================== -->
	<section class="about-heritage-showcase" aria-labelledby="heritage-showcase-title">
		<!-- Gold Leaf Texture Accent Bar -->
		<div class="about-heritage-showcase__gold-bar" aria-hidden="true"></div>

		<div class="about-heritage-showcase__inner">

			<!-- Left Narrative Column -->
			<div class="about-heritage-showcase__content">
				<div class="about-heritage-showcase__pill-row">
					<span
						class="about-heritage-showcase__pill"><?php esc_html_e('1- FERRARA — AS NOSSAS RAÍZES', 'frignanis'); ?></span>
					<span class="about-heritage-showcase__pill-line" aria-hidden="true"></span>
				</div>

				<h2 id="heritage-showcase-title" class="about-heritage-showcase__title">
					Ferrara · Emilia-Romagna
				</h2>

				<div class="about-heritage-showcase__text">
					<p>
						<?php esc_html_e('Nas terras de Ferrara, na Emilia-Romagna, norte da Itália, encontram-se as raízes da família FRIGNANI. Uma região de extraordinária tradição agrícola e gastronômica, onde, entre os séculos XVIII e XIX, gerações de agricultores cultivaram trigo, vinhedos e hortas, preservando valores familiares, saberes artesanais e os sabores autênticos da cultura italiana.', 'frignanis'); ?>
					</p>
				</div>

				<!-- Tribute to Gentila Frignani -->
				<div class="about-heritage-tribute"
					aria-label="<?php esc_attr_e('Tributo a Gentila Frignani', 'frignanis'); ?>">
					<div class="about-heritage-tribute__arch">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/gentila-frignani-portrait.png'); ?>"
							alt="<?php esc_attr_e('Gentila Frignani', 'frignanis'); ?>"
							class="about-heritage-tribute__img" width="125" height="145" loading="lazy" />
					</div>
					<div class="about-heritage-tribute__info">
						<span
							class="about-heritage-tribute__intro"><?php esc_html_e('In amorevole ricordo di', 'frignanis'); ?></span>
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
						alt="<?php esc_attr_e('Campos e tradição de Ferrara, Emilia-Romagna', 'frignanis'); ?>"
						class="about-heritage-showcase__arch-img" width="1179" height="1105" loading="lazy" />
				</div>
			</div>

		</div>
	</section>

	<!-- ==========================================
		 MOMENTO 2: 1626–1891 — UMA HISTÓRIA ENTRE CONTINENTES
		 Imagem histórica discreta de Valência e fotografia
		 de imigração italiana, acompanhadas dos acontecimentos.
		 ========================================== -->
	<section class="about-wireframe-section"
		aria-label="<?php esc_attr_e('1626–1891 — Uma história entre continentes', 'frignanis'); ?>">
		<div class="site-container">

			<div class="about-section-header" style="text-align: center; margin-bottom: 3.5rem;">
				<div class="eyebrow"
					style="color: var(--color-gold); font-size: 0.8rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; margin-bottom: 0.5rem;">
					<?php esc_html_e('2- 1626–1891 — UMA HISTÓRIA ENTRE CONTINENTES', 'frignanis'); ?>
				</div>
				<h2 class="section-title"
					style="color: var(--color-navy); font-size: clamp(2rem, 3.2vw, 2.6rem); margin: 0 auto; max-width: 760px;">
					<?php esc_html_e('Registros Históricos & A Travessia Atlântica', 'frignanis'); ?>
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
								 alt="<?php esc_attr_e('Valência e os registros históricos da Baronia de Frignani', 'frignanis'); ?>" 
								 class="about-wireframe-card__img" 
								 width="1179" 
								 height="796" 
								 loading="lazy" />
						</div>
						<div class="about-wireframe-card__body">
							<div class="about-wireframe-card__icon" aria-hidden="true">
								<?php frignanis_icon('landmark', 24); ?>
							</div>
							<h3 class="about-wireframe-card__label"><?php esc_html_e('Valência, 1626', 'frignanis'); ?></h3>
							<span style="display: block; font-size: 0.8rem; color: var(--color-gold); margin-top: 0.35rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em;"><?php esc_html_e('Baronia Nobiliárquica', 'frignanis'); ?></span>
						</div>
					</div>

					<div class="about-wireframe-content">
						<h3 class="about-wireframe-content__heading">
							<?php esc_html_e('Baronia de Frignani e Frignestani', 'frignanis'); ?></h3>
						<span
							class="about-wireframe-content__tag"><?php esc_html_e('Valência, Espanha · Reinado de Filipe IV', 'frignanis'); ?></span>
						<p class="about-wireframe-content__text">
							<?php esc_html_e('A história do nome Frignani atravessa séculos e fronteiras. Em 1626, em Valência, Espanha, durante o reinado de Filipe IV, foi criada a Baronia de Frignani e Frignestani, concedida a Gaspar Palavicino y Centurión, um registro histórico da presença do nome na Europa.', 'frignanis'); ?>
						</p>
					</div>
				</div>

				<!-- Row 2: 1891 Travessia (Left) + Imigração italiana (Card Right) -->
				<div class="about-wireframe-row about-wireframe-row--reverse">
					<div class="about-wireframe-content">
						<h3 class="about-wireframe-content__heading">
							<?php esc_html_e('A Travessia Atlântica de 1891', 'frignanis'); ?></h3>
						<span
							class="about-wireframe-content__tag"><?php esc_html_e('29 de setembro de 1891 · Porto de Santa Cruz, Brasil', 'frignanis'); ?></span>
						<p class="about-wireframe-content__text">
							<?php esc_html_e('Em 29 de setembro de 1891, nossos antepassados deixaram a Itália e desembarcaram no Porto de Santa Cruz, Espírito Santo, Brasil, levando consigo suas tradições, valores e o espírito empreendedor que atravessaria gerações.', 'frignanis'); ?>
						</p>
					</div>

					<div class="about-wireframe-card">
						<div class="about-wireframe-card__icon" aria-hidden="true">
							<?php frignanis_icon('ship', 28); ?></div>
						<h3 class="about-wireframe-card__label">
							<?php esc_html_e('Imigração italiana', 'frignanis'); ?></h3>
						<span
							style="display: block; font-size: 0.8rem; color: var(--color-gold); margin-top: 0.35rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em;"><?php esc_html_e('Desembarque no Brasil', 'frignanis'); ?></span>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
		 MOMENTO 3: BRASIL — UMA HERANÇA PRESERVADA
		 Imagem de Vitória e a trajetória de Sabrina Frignani.
		 ========================================== -->
	<section class="about-wireframe-section" style="background: #F8F5EE; padding-top: 1rem;"
		aria-label="<?php esc_attr_e('Brasil — Uma herança preservada', 'frignanis'); ?>">
		<div class="site-container">

			<div class="about-section-header" style="text-align: center; margin-bottom: 3rem;">
				<div class="eyebrow"
					style="color: var(--color-gold); font-size: 0.8rem; font-weight: 700; letter-spacing: 0.16em; text-transform: uppercase; margin-bottom: 0.5rem;">
					<?php esc_html_e('3- BRASIL — UMA HERANÇA PRESERVADA', 'frignanis'); ?>
				</div>
				<h2 class="section-title"
					style="color: var(--color-navy); font-size: clamp(2rem, 3.2vw, 2.6rem); margin: 0 auto; max-width: 760px;">
					<?php esc_html_e('Vitória, Espírito Santo & A Trajetória Internacional', 'frignanis'); ?>
				</h2>
				<div class="ornament-divider" aria-hidden="true" style="margin: 1.25rem auto 0; max-width: 180px;">
					<span class="ornament-divider__symbol">❖</span>
				</div>
			</div>

			<div class="about-wireframe-container">
				<!-- Row 3: Vitória, Brasil (Card Left) + Trajetória Sabrina Frignani (Right) -->
				<div class="about-wireframe-row">
					<div class="about-wireframe-card"
						style="border-color: rgba(168, 132, 58, 0.45); background: #FFFFFF;">
						<div class="about-wireframe-card__icon" aria-hidden="true">
							<?php frignanis_icon('waves', 28); ?></div>
						<h3 class="about-wireframe-card__label"><?php esc_html_e('Vitória, Brasil', 'frignanis'); ?>
						</h3>
						<span
							style="display: block; font-size: 0.8rem; color: var(--color-gold); margin-top: 0.35rem; font-weight: 600; text-transform: uppercase; letter-spacing: 0.08em;"><?php esc_html_e('Comércio Internacional', 'frignanis'); ?></span>
					</div>

					<div class="about-wireframe-content">
						<h3 class="about-wireframe-content__heading">
							<?php esc_html_e('Sabrina Frignani · Visão Empresarial & Excelência', 'frignanis'); ?>
						</h3>
						<span
							class="about-wireframe-content__tag"><?php esc_html_e('Trajetória entre o Brasil e a Europa · Itália & Espanha', 'frignanis'); ?></span>
						<p class="about-wireframe-content__text" style="font-size: 1.05rem; line-height: 1.75;">
							<?php esc_html_e('Mais de um século depois, em Vitória, Sabrina Frignani cresceu entre a herança gastronômica italiana e o dinamismo do comércio internacional. Sua trajetória profissional entre o Brasil e a Europa, especialmente na Itália e na Espanha, consolidou uma visão empresarial orientada pela excelência e pelas conexões entre diferentes culturas e mercados.', 'frignanis'); ?>
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>

	<!-- ==========================================
		 MOMENTO 4: LUXEMBURGO — O NOVO CAPÍTULO
		 Fotografia elegante da cidade, apresentação
		 da empresa e assinatura institucional.
		 ========================================== -->
	<section class="about-lux-section" aria-labelledby="lux-heading">
		<div class="site-container">
			<div class="about-lux-container">

				<div class="about-lux-header">
					<div class="about-lux-badge">
						<?php frignanis_icon('building', 16, 'icon-svg--gold'); ?>
						<span><?php esc_html_e('4- LUXEMBURGO — O NOVO CAPÍTULO', 'frignanis'); ?></span>
					</div>
					<h2 id="lux-heading" class="about-lux-title">
						<?php esc_html_e('A Ponte entre a Itália e o Mundo', 'frignanis'); ?>
					</h2>
					<p class="about-lux-subtitle">
						<?php esc_html_e('Sede internacional no coração da Europa · Luxemburgo', 'frignanis'); ?>
					</p>
				</div>

				<!-- Panorâmica de Luxemburgo: Cidade sede e centro de operações -->
				<div class="about-lux-visual">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/luxembourg_img.jpeg'); ?>" 
						 alt="<?php esc_attr_e('Panorâmica de Luxemburgo, sede da Frignani’s Import & Export', 'frignanis'); ?>" 
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
							<?php esc_html_e('Hoje, a nova geração Frignani realiza simbolicamente o caminho de volta às suas origens europeias.', 'frignanis'); ?>
						</p>
						<p class="about-lux-text" style="margin-top: 1.25rem; font-size: 1.05rem;">
							<?php esc_html_e('Com sede em Luxemburgo, no coração da Europa, nasce a Frignani’s Import & Export, unindo tradição italiana, experiência internacional e uma visão contemporânea dos negócios.', 'frignanis'); ?>
						</p>

						<!-- Institutional Quote Block -->
						<div
							style="margin-top: 1.75rem; padding: 1.25rem 1.5rem; background: rgba(168, 132, 58, 0.08); border-left: 3px solid var(--color-gold); border-radius: 0 4px 4px 0;">
							<p
								style="margin: 0; font-family: var(--font-serif); font-size: 1.05rem; font-style: italic; color: var(--color-navy); line-height: 1.6;">
								«
								<?php esc_html_e('Porque, para nós, a excelência começa na terra, nas mãos de quem produz e nas tradições que o tempo preserva.', 'frignanis'); ?>
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
									<?php esc_html_e('Alianças & Apoios Institucionais em Luxemburgo', 'frignanis'); ?>
								</h3>
								<p class="about-alliance-card__text" style="font-size: 0.95rem; line-height: 1.65;">
									<?php esc_html_e('Com o apoio da Federazione Italiana Cuochi – Delegazione Lussemburgo, da Câmara de Comércio Italiana em Luxemburgo e da Embaixada da Itália em Luxemburgo, estabelecemos pontes entre produtores, marcas e mercados internacionais, valorizando a autenticidade, a qualidade e a excelência em cada etapa, da seleção à entrega final.', 'frignanis'); ?>
								</p>
							</div>
						</div>

						<p class="about-lux-text" style="font-size: 1.05rem;">
							<?php esc_html_e('Mais do que importar e exportar, acreditamos em preservar tradições, valorizar produtores e construir relações comerciais duradouras.', 'frignanis'); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
		 ASSINATURA INSTITUCIONAL
		 Grande fechamento em fundo branco/marfim
		 Logomarca preta + cadência continental
		 + FRASE FINAL EM DOURADO destacada
		 ========================================== -->
	<section class="about-final-ivory-section"
		aria-label="<?php esc_attr_e('Identidade Visual & Assinatura Frignani’s', 'frignanis'); ?>">
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
					<?php esc_html_e('FRIGNANI’S — Italian Heritage. International Excellence.', 'frignanis'); ?>
				</div>

				<!-- Cadência Continental de 3 Linhas -->
				<div class="about-final-cadence">
					<?php esc_html_e('Da Itália às Américas.', 'frignanis'); ?><br />
					<?php esc_html_e('Das Américas à Europa.', 'frignanis'); ?><br />
					<span class="text-gold italic-serif"
						style="font-size: 1.15em;"><?php esc_html_e('Da Europa para o mundo.', 'frignanis'); ?></span>
				</div>

				<!-- Divisor Dourado -->
				<div class="about-final-divider" aria-hidden="true">
					<span>❖</span>
				</div>

				<!-- FRASE FINAL EM DOURADO (Destaque do Briefing) -->
				<blockquote class="about-final-gold-phrase">
					«
					<?php esc_html_e('Uma história de família. Uma tradição que permanece. Uma visão que ultrapassa fronteiras.', 'frignanis'); ?>
					»
				</blockquote>

				<!-- Botões de Ação -->
				<div class="about-final-cta-row">
					<a href="<?php echo esc_url($pdf_presentation_url); ?>" class="btn btn-primary"
						download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
						<?php frignanis_icon('download', 18); ?>
						<span><?php esc_html_e('Frignani Apresentation', 'frignanis'); ?></span>
					</a>
					<a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn btn-secondary"
						style="color: var(--color-navy); border-color: rgba(20, 41, 74, 0.4);">
						<?php esc_html_e('ENTRE EM CONTATO', 'frignanis'); ?>
					</a>
				</div>

			</div>
		</div>
	</section>

</div>

<?php
get_footer();
