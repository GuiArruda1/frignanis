<?php
/**
 * Template Name: About Us / Sobre Nós
 * Template Post Type: page
 *
 * Wireframe-exact implementation of "História Frignani's"
 * 1. Fotografia panorâmica de Ferrara (Abertura + Título institucional)
 * 2. Origens italianas (2 parágrafos centralizados + tributo)
 * 3. Grid bento alternado (Valência 1626 / Travessia 1891 / Vitória Brasil)
 * 4. Luxemburgo — Frignani's (Panorâmica + Apresentação comercial)
 * 5. Grande fechamento em fundo marfim com logomarca preta e frase final em dourado.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

$pdf_presentation_url = function_exists( 'frignanis_get_presentation_pdf_url' )
	? frignanis_get_presentation_pdf_url()
	: get_template_directory_uri() . '/assets/docs/Frignani-Apresentation.pdf';
?>

<div class="about-page-wireframe">

	<!-- ==========================================
	     1. FOTOGRAFIA PANORÂMICA DE FERRARA
	     Imagem de abertura + título institucional
	     ========================================== -->
	<section class="about-panoramic-hero" aria-labelledby="about-hero-title">
		<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-ferrara-terroir.jpg' ); ?>" 
			 alt="<?php esc_attr_e( 'Fotografia panorâmica de Ferrara e terroir da Emilia-Romagna', 'frignanis' ); ?>" 
			 class="about-panoramic-hero__bg" 
			 width="1920" 
			 height="720" 
			 fetchpriority="high" />
		<div class="about-panoramic-hero__overlay" aria-hidden="true"></div>

		<div class="about-panoramic-hero__content">
			<div class="about-panoramic-hero__badge">
				<?php frignanis_icon( 'folder', 16, 'icon-svg--gold' ); ?> <span><?php esc_html_e( "História Frignani's", 'frignanis' ); ?></span>
			</div>

			<h1 id="about-hero-title" class="about-panoramic-hero__title">
				<?php esc_html_e( 'Uma herança italiana.', 'frignanis' ); ?>
			</h1>

			<p class="about-panoramic-hero__subtitle">
				<?php esc_html_e( 'Uma história que atravessa gerações e continentes.', 'frignanis' ); ?>
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
	     2. FEATURED SHOWCASE: AS RAÍZES EM FERRARA
	     ========================================== -->
	<section class="about-heritage-showcase" aria-labelledby="heritage-showcase-title">
		<!-- Gold Leaf Texture Accent Bar -->
		<div class="about-heritage-showcase__gold-bar" aria-hidden="true"></div>

		<div class="about-heritage-showcase__inner">
			
			<!-- Left Narrative Column -->
			<div class="about-heritage-showcase__content">
				<div class="about-heritage-showcase__pill-row">
					<span class="about-heritage-showcase__pill"><?php esc_html_e( 'AS RAÍZES FAMILIARES', 'frignanis' ); ?></span>
					<span class="about-heritage-showcase__pill-line" aria-hidden="true"></span>
				</div>

				<h2 id="heritage-showcase-title" class="about-heritage-showcase__title">
					Ferrara · Emilia-Romagna
				</h2>

				<div class="about-heritage-showcase__text">
					<p>
						<?php esc_html_e( 'Nas terras verdejantes do norte da Itália, na Emilia-Romagna, província de Ferrara, encontram-se as raízes da família Frignani. Uma região onde a tradição, a arte de viver e a excelência gastronômica fazem parte de um patrimônio cultural transmitido ao longo dos séculos.', 'frignanis' ); ?>
					</p>
				</div>

				<!-- Tribute to Gentila Frignani -->
				<div class="about-heritage-tribute" aria-label="<?php esc_attr_e( 'Tributo a Gentila Frignani', 'frignanis' ); ?>">
					<div class="about-heritage-tribute__arch">
						<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/gentila-frignani-portrait.png' ); ?>" 
							 alt="<?php esc_attr_e( 'Gentila Frignani', 'frignanis' ); ?>" 
							 class="about-heritage-tribute__img" 
							 width="125" 
							 height="145" 
							 loading="lazy" />
					</div>
					<div class="about-heritage-tribute__info">
						<span class="about-heritage-tribute__intro"><?php esc_html_e( 'In amorevole ricordo di', 'frignanis' ); ?></span>
						<h3 class="about-heritage-tribute__name">Gentila Frignani</h3>
						<p class="about-heritage-tribute__dedication"><?php esc_html_e( 'Le nostre radici, sempre nel cuore.', 'frignanis' ); ?></p>
					</div>
				</div>
			</div>

			<!-- Right Architectural Arch Window & Navy Block -->
			<div class="about-heritage-showcase__visual" aria-hidden="true">
				<div class="about-heritage-showcase__navy-block"></div>
				<div class="about-heritage-showcase__arch-frame">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/about-ferrara-estate-arch.jpg' ); ?>" 
						 alt="<?php esc_attr_e( 'Terras verdejantes e patrimônio de Ferrara, Emilia-Romagna', 'frignanis' ); ?>" 
						 class="about-heritage-showcase__arch-img" 
						 width="1179" 
						 height="1105" 
						 loading="lazy" />
				</div>
			</div>

		</div>
	</section>

	<!-- ==========================================
	     3. GRID BENTO ALTERNADO
	     Row 1: Valência, 1626 | História europeia
	     Row 2: Travessia, 1891 | Imigração italiana
	     Row 3: Vitória, Brasil | Novas gerações
	     ========================================== -->
	<section class="about-wireframe-section" aria-label="<?php esc_attr_e( 'Marcos Históricos da Família', 'frignanis' ); ?>">
		<div class="site-container">
			<div class="about-wireframe-container">

				<!-- Row 1: Valência, 1626 (Card Left) + História europeia (Right) -->
				<div class="about-wireframe-row">
					<div class="about-wireframe-card">
						<div class="about-wireframe-card__icon" aria-hidden="true"><?php frignanis_icon( 'landmark', 28 ); ?></div>
						<h3 class="about-wireframe-card__label"><?php esc_html_e( 'Valência, 1626', 'frignanis' ); ?></h3>
					</div>

					<div class="about-wireframe-content">
						<h2 class="about-wireframe-content__heading"><?php esc_html_e( 'História europeia', 'frignanis' ); ?></h2>
						<span class="about-wireframe-content__tag"><?php esc_html_e( 'Séculos de tradição nobre', 'frignanis' ); ?></span>
						<p class="about-wireframe-content__text">
							<?php esc_html_e( 'A história do nome Frignani, entretanto, ultrapassa as fronteiras italianas. Sua presença nos registros históricos europeus remonta a séculos anteriores, incluindo a criação da Baronia de Frignani e Frignestani, em 30 de agosto de 1626, em Valência, Espanha, durante o reinado de Filipe IV, concedida a Gaspar Palavicino y Centurión.', 'frignanis' ); ?>
						</p>
					</div>
				</div>

				<!-- Row 2: Travessia, 1891 (Left) + Imigração italiana (Card Right) -->
				<div class="about-wireframe-row about-wireframe-row--reverse">
					<div class="about-wireframe-content">
						<h2 class="about-wireframe-content__heading"><?php esc_html_e( 'Travessia, 1891', 'frignanis' ); ?></h2>
						<span class="about-wireframe-content__tag"><?php esc_html_e( 'Porto de Santa Cruz · Espírito Santo, Brasil', 'frignanis' ); ?></span>
						<p class="about-wireframe-content__text">
							<?php esc_html_e( 'Em 29 de setembro de 1891, um novo capítulo dessa história familiar começou quando nossos antepassados, vindos da Itália, desembarcaram no Porto de Santa Cruz, no Espírito Santo, Brasil. Trouxeram consigo suas tradições, seus valores, os sabores da terra natal e o espírito empreendedor que atravessaria gerações.', 'frignanis' ); ?>
						</p>
					</div>

					<div class="about-wireframe-card">
						<div class="about-wireframe-card__icon" aria-hidden="true"><?php frignanis_icon( 'ship', 28 ); ?></div>
						<h3 class="about-wireframe-card__label"><?php esc_html_e( 'Imigração italiana', 'frignanis' ); ?></h3>
					</div>
				</div>

				<!-- Row 3: Vitória, Brasil (Card Left) + Novas gerações (Right) -->
				<div class="about-wireframe-row">
					<div class="about-wireframe-card">
						<div class="about-wireframe-card__icon" aria-hidden="true"><?php frignanis_icon( 'waves', 28 ); ?></div>
						<h3 class="about-wireframe-card__label"><?php esc_html_e( 'Vitória, Brasil', 'frignanis' ); ?></h3>
					</div>

					<div class="about-wireframe-content">
						<h2 class="about-wireframe-content__heading"><?php esc_html_e( 'Novas gerações', 'frignanis' ); ?></h2>
						<span class="about-wireframe-content__tag"><?php esc_html_e( 'Trajetória e visão internacional', 'frignanis' ); ?></span>
						<p class="about-wireframe-content__text">
							<?php esc_html_e( 'Mais de um século depois, em Vitória, Espírito Santo, Sabrina Frignani cresceu entre a herança cultural italiana e o dinamismo de uma cidade portuária conectada ao comércio internacional. Sua trajetória profissional entre o Brasil e a Europa, especialmente na Espanha, fortaleceu uma visão empresarial pautada pela excelência, pelo conhecimento de diferentes mercados e pela valorização das relações humanas.', 'frignanis' ); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     4. LUXEMBURGO — FRIGNANI'S
	     Fotografia panorâmica + apresentação comercial
	     ========================================== -->
	<section class="about-lux-section" aria-labelledby="lux-heading">
		<div class="site-container">
			<div class="about-lux-container">
				
				<div class="about-lux-header">
					<div class="about-lux-badge">
						<?php frignanis_icon( 'building', 16, 'icon-svg--gold' ); ?> <span><?php esc_html_e( 'CENTRO DE NEGÓCIOS EUROPEU', 'frignanis' ); ?></span>
					</div>
					<h2 id="lux-heading" class="about-lux-title">
						<?php esc_html_e( "Luxemburgo — Frignani's", 'frignanis' ); ?>
					</h2>
					<p class="about-lux-subtitle">
						<?php esc_html_e( 'Fotografia panorâmica + apresentação comercial', 'frignanis' ); ?>
					</p>
				</div>

				<!-- Panorâmica de Comércio Internacional / Mapa de Camila -->
				<div class="about-lux-visual">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero-world-map-web.png' ); ?>" 
						 alt="<?php esc_attr_e( 'Mapa de Intermediação Comercial Frignanis de Luxemburgo para o mundo', 'frignanis' ); ?>" 
						 class="about-lux-visual__img" 
						 width="1200" 
						 height="380" 
						 loading="lazy" />
				</div>

				<!-- Apresentação Comercial Editorial -->
				<div class="about-lux-editorial">
					<div>
						<p class="about-lux-lead">
							<?php esc_html_e( 'Hoje, a nova geração Frignani realiza simbolicamente o caminho de volta às suas origens europeias.', 'frignanis' ); ?>
						</p>
						<p class="about-lux-text" style="margin-top: 1rem;">
							<?php esc_html_e( 'Com sede em Luxemburgo, no coração da Europa, nasce a Frignani’s Import & Export, unindo tradição italiana, experiência em gestão internacional e uma visão contemporânea de negócios.', 'frignanis' ); ?>
						</p>
					</div>

					<div>
						<div class="about-alliance-card" style="margin: 0 0 1.5rem 0; padding: 1.5rem;">
							<div class="about-alliance-card__icon" aria-hidden="true"><?php frignanis_icon( 'sparkles', 22, 'icon-svg--gold' ); ?></div>
							<div>
								<h3 class="about-alliance-card__title" style="font-size: 1.1rem; margin-bottom: 0.35rem;">
									Federazione Italiana Cuochi · Delegazione Lussemburgo
								</h3>
								<p class="about-alliance-card__text" style="font-size: 0.95rem;">
									<?php esc_html_e( 'Com o apoio da Federazione Italiana Cuochi – Delegazione Lussemburgo, estabelecemos pontes entre produtores, marcas e mercados, promovendo produtos selecionados pela sua autenticidade, qualidade e excelência.', 'frignanis' ); ?>
								</p>
							</div>
						</div>

						<p class="about-lux-text">
							<?php esc_html_e( 'Mais do que importar e exportar, nossa missão é aproximar culturas, valorizar produtores e construir relações comerciais duradouras, oferecendo um serviço personalizado, criterioso e eficiente, da origem à entrega final.', 'frignanis' ); ?>
						</p>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- ==========================================
	     5. GRANDE FECHAMENTO EM FUNDO BRANCO/MARFIM
	     Logomarca preta + cadência continental
	     + FRASE FINAL EM DOURADO destacada
	     ========================================== -->
	<section class="about-final-ivory-section" aria-label="<?php esc_attr_e( 'Identidade Visual & Assinatura Frignani’s', 'frignanis' ); ?>">
		<div class="site-container">
			<div class="about-final-ivory-container">

				<!-- Logomarca Preta / Escura sobre fundo claro -->
				<div class="about-final-logo-wrapper">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo/logo-fundo-claro-web.png' ); ?>" 
						 alt="<?php esc_attr_e( "Frignani's Import & Export", 'frignanis' ); ?>" 
						 class="about-final-logo" 
						 width="160" 
						 height="203" 
						 loading="lazy" />
				</div>

				<!-- Subtítulo Institucional -->
				<div class="about-final-brand-lockup">
					<?php esc_html_e( 'FRIGNANI’S — Italian Heritage. International Excellence.', 'frignanis' ); ?>
				</div>

				<!-- Cadência Continental de 3 Linhas -->
				<div class="about-final-cadence">
					<?php esc_html_e( 'Da Itália às Américas.', 'frignanis' ); ?><br />
					<?php esc_html_e( 'Das Américas à Europa.', 'frignanis' ); ?><br />
					<span class="text-gold italic-serif" style="font-size: 1.15em;"><?php esc_html_e( 'Da Europa para o mundo.', 'frignanis' ); ?></span>
				</div>

				<!-- Divisor Dourado -->
				<div class="about-final-divider" aria-hidden="true">
					<span>❖</span>
				</div>

				<!-- FRASE FINAL EM DOURADO (Destaque do Briefing) -->
				<blockquote class="about-final-gold-phrase">
					« <?php esc_html_e( 'Uma história de família. Uma tradição que permanece. Uma visão que ultrapassa fronteiras.', 'frignanis' ); ?> »
				</blockquote>

				<!-- Botões de Ação -->
				<div class="about-final-cta-row">
					<a href="<?php echo esc_url( $pdf_presentation_url ); ?>" class="btn btn-primary" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
						<?php frignanis_icon( 'download', 18 ); ?> <span><?php esc_html_e( 'Frignani Apresentation', 'frignanis' ); ?></span>
					</a>
					<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-secondary" style="color: var(--color-navy); border-color: rgba(20, 41, 74, 0.4);">
						<?php esc_html_e( 'ENTRE EM CONTATO', 'frignanis' ); ?>
					</a>
				</div>

			</div>
		</div>
	</section>

</div>

<?php
get_footer();
