<?php
/**
 * Template Name: Categories / O Que Exportamos
 * Template Post Type: page
 *
 * The template for displaying the Categories ("What we export") page.
 * Follows FRIGNANI'S brand concept, Figma design (Categories 1440x3559),
 * zero-supplier disclosure rule, and luxury agency standards.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();

// ACF Fields with fallbacks (Agency Rule 1: No hardcoded text)
$hero_eyebrow = frignanis_field( 'cat_hero_eyebrow', '— 02 · CATEGORIES & CURATION', '— 02 · CATEGORIAS & CURADORIA' );

$hero_title_lead = frignanis_field( 'cat_hero_title_lead', 'Italian Excellence Across', 'Excelência Italiana em' );

$hero_title_highlight = frignanis_field( 'cat_hero_title_highlight', 'Three Management Pillars', 'Três Pilares de Atuação' );

$hero_description = frignanis_field(
	'cat_hero_description',
	'Terroir wines and prosecco, gourmet and organic delicacies from traditional producers, and art décor pieces for high-end kitchens and dining (Cooking Supreme). We communicate exclusively by categories of excellence and guaranteed provenance.',
	'Vinhos e proseccos de terroir, iguarias gourmet e biológicas de produtores selecionados, e peças de art décor para cozinhas de alto padrão e alta gastronomia (Cooking Supreme). Comunicamos exclusivamente por categorias de excelência e procedência garantida.'
);

// Default Category Rows matching Official Briefing (Sept 2026)
$categories_data = array(
	array(
		'id'          => 'vinhos',
		'num'         => 'I',
		'tags'        => frignanis_t( 'DOC · DOCG · VALDOBBIADENE · FRANCIACORTA', 'DOC · DOCG · VALDOBBIADENE · FRANCIACORTA' ),
		'title'       => frignanis_t( 'Terroir Wines & Prosecco', 'Vinhos e Proseccos de Terroir' ),
		'desc'        => frignanis_t(
			'Terroir wines and prosecco from selected Italian wineries. From the mineral elegance of the north to the noble reds of the center and south, we connect exclusive vintages and traditional method sparkling wines directly to gastronomic wine lists, importers, and distributors.',
			'Vinhos e proseccos de terroir de vinícolas italianas selecionadas. Da elegância mineral do norte aos tintos encorpados do centro e sul, conectamos safras exclusivas e espumantes de método tradicional diretamente a cartas gastronômicas, importadores e distribuidores.'
		),
		'image'       => get_template_directory_uri() . '/assets/images/italian-sommelier-prosecco-pour.jpg',
		'image_alt'   => frignanis_t( 'Italian Sommelier Pouring Traditional Method Prosecco', 'Sommelier italiano servindo prosecco de método tradicional' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'gourmet',
		'num'         => 'II',
		'tags'        => frignanis_t( 'OLIVE OIL · ORGANIC & EXTRA VIRGIN', 'AZEITE DE OLIVA · BIOLÓGICO & EXTRA VIRGEM' ),
		'title'       => frignanis_t( 'Italian & Organic Olive Oil', 'Azeite de Oliva Italiano & Biológico' ),
		'desc'        => frignanis_t(
			'Extra virgin olive oil of verified Italian origin, available in conventional and certified organic lines. The organic line is identified by the green seal of traceability and sustainable agriculture.',
			'Azeite de oliva extra virgem de origem italiana comprovada, disponível em linhas convencionais e biológicas certificadas. A linha orgânica é identificada pelo selo verde de rastreabilidade e agricultura sustentável.'
		),
		'image'       => get_template_directory_uri() . '/assets/images/italian-olive-harvest-hands.jpg',
		'image_alt'   => frignanis_t( 'Certified Organic Extra Virgin Italian Olive Harvest', 'Colheita artesanal de azeitonas italianas certificadas' ),
		'layout'      => 'image-right',
		'badge'       => frignanis_t( 'CERTIFIED ORGANIC', 'CERTIFICAÇÃO BIOLÓGICA' ),
	),
	array(
		'id'          => 'trufas',
		'num'         => 'III',
		'tags'        => frignanis_t( 'TARTUFO · SEASONAL ITALIAN HARVESTS', 'TARTUFO · SAFRAS SAZONAIS ITALIANAS' ),
		'title'       => frignanis_t( 'Truffles & Truffle Condiments', 'Trufas & Condimentos Trufados' ),
		'desc'        => frignanis_t(
			'The tartufo is one of Italy\'s greatest gastronomic treasures. We represent fresh seasonal harvests and preserved products of high aromatic density for fine dining restaurants, gourmet emporiums, and diplomatic events.',
			'O tartufo é um dos maiores tesouros gastronômicos da Itália. Representamos safras frescas sazonais e produtos em conserva de altíssima densidade aromática para restaurantes de alta gastronomia, empórios finos e recepções diplomáticas.'
		),
		'image'       => get_template_directory_uri() . '/assets/images/italian-lake-olive-terroir.jpg',
		'image_alt'   => frignanis_t( 'Italian Terroir Hills and Gastronomic Landscapes', 'Colinas e paisagens de terroir italiano' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
	array(
		'id'          => 'organicos',
		'num'         => 'IV',
		'tags'        => frignanis_t( 'EU CERTIFIED ORGANIC PRODUCTS', 'PRODUTOS BIOLÓGICOS CERTIFICADOS PELA UE' ),
		'title'       => frignanis_t( 'Gourmet Delicacies & Organic Products', 'Iguarias Gourmet & Produtos Biológicos' ),
		'desc'        => frignanis_t(
			'Special selection of organic and biological products from traditional producers — grains, pulses, artisanal sauces, and preserves that honor health, biodiversity, and European standard certification procedures.',
			'Seleção especial de produtos biológicos e orgânicos de produtores tradicionais — grãos, leguminosas, molhos artesanais e conservas que prezam pela saúde, biodiversidade e rigorosos procedimentos de certificação europeus.'
		),
		'image'       => get_template_directory_uri() . '/assets/images/italian-olive-picking-hand.jpg',
		'image_alt'   => frignanis_t( 'Hand Harvesting Certified Italian Organic Produce', 'Colheita manual de produtos biológicos italianos' ),
		'layout'      => 'image-right',
		'badge'       => frignanis_t( 'CERTIFIED ORGANIC', 'CERTIFICAÇÃO BIOLÓGICA' ),
	),
	array(
		'id'          => 'cooking-supreme',
		'num'         => 'V',
		'tags'        => frignanis_t( 'COOKING SUPREME · LIFESTYLE & ART DE LA TABLE', 'COOKING SUPREME · ESTILO DE VIDA & ARTE DA MESA' ),
		'title'       => frignanis_t( 'Art Décor · Cooking Supreme Line', 'Art Décor · Linha Cooking Supreme' ),
		'desc'        => frignanis_t(
			'Art décor for high-end kitchens and dining. High-level artisanal European ceramics, ambient lighting, and exclusive pieces that transform dining into a memorable experience of hospitality and style.',
			'Art décor para cozinhas e espaços gastronômicos de alta renda. Cerâmicas artesanais europeias de alto padrão, iluminação cênica e peças exclusivas que transformam a mesa numa experiência memorável de hospitalidade e estilo.'
		),
		'image'       => get_template_directory_uri() . '/assets/images/italian-art-decor-emerald-ceramics.jpg',
		'image_alt'   => frignanis_t( 'Handcrafted Italian Emerald Glazed Ceramics and Cooking Supreme Collection', 'Cerâmicas artesanais italianas esmaltadas em esmeralda' ),
		'layout'      => 'image-left',
		'badge'       => '',
	),
);
?>

<!-- ==========================================
     CATEGORIES HERO SECTION
     ========================================== -->
<section class="cat-page-hero" aria-labelledby="cat-page-title">
	<div class="site-container">
		<div class="cat-page-hero__content">
			<div class="cat-page-hero__eyebrow">
				<?php echo esc_html( $hero_eyebrow ); ?>
			</div>

			<h1 id="cat-page-title" class="cat-page-hero__title">
				<?php echo esc_html( $hero_title_lead ); ?><br />
				<span class="cat-page-hero__highlight"><?php echo esc_html( $hero_title_highlight ); ?></span>
			</h1>

			<div class="italian-flag-stripe" aria-hidden="true">
				<span class="italian-flag-stripe__green"></span>
				<span class="italian-flag-stripe__white"></span>
				<span class="italian-flag-stripe__red"></span>
			</div>

			<p class="cat-page-hero__desc">
				<?php echo esc_html( $hero_description ); ?>
			</p>
		</div>
	</div>
</section>

<!-- ==========================================
     CATEGORIES EDITORIAL 50/50 ROWS
     ========================================== -->
<section class="cat-page-list" aria-label="<?php esc_attr_e( 'Categories List', 'frignanis' ); ?>">
	<?php foreach ( $categories_data as $index => $cat ) : 
		$is_image_left = ( 'image-left' === $cat['layout'] );
	?>
		<article id="<?php echo esc_attr( $cat['id'] ); ?>" class="cat-row cat-row--<?php echo esc_attr( $cat['layout'] ); ?>">
			
			<?php if ( $is_image_left ) : ?>
				<!-- Left: Media -->
				<div class="cat-row__col cat-row__col--media">
					<div class="cat-row__img-wrap">
						<img src="<?php echo esc_url( $cat['image'] ); ?>" 
							 alt="<?php echo esc_attr( $cat['image_alt'] ); ?>" 
							 class="cat-row__img" 
							 loading="lazy" />
						<?php if ( ! empty( $cat['badge'] ) ) : ?>
							<div class="cat-row__badge" aria-label="<?php echo esc_attr( $cat['badge'] ); ?>">
								<span class="cat-row__badge-dot" aria-hidden="true"></span>
								<span><?php echo esc_html( $cat['badge'] ); ?></span>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<!-- Right: Content -->
				<div class="cat-row__col cat-row__col--content">
					<div class="cat-row__text-wrap">
						<div class="cat-row__meta">
							<span class="cat-row__num"><?php echo esc_html( $cat['num'] ); ?></span>
							<span class="cat-row__tags"><?php echo esc_html( $cat['tags'] ); ?></span>
						</div>
						<h2 class="cat-row__title"><?php echo esc_html( $cat['title'] ); ?></h2>
						<p class="cat-row__desc"><?php echo esc_html( $cat['desc'] ); ?></p>
						<div style="margin-top: 1.5rem;">
							<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="padding: 8px 18px; font-size: 0.75rem;">
								<?php frignanis_e( 'REQUEST PRESENTATION FOR THIS CATEGORY', 'SOLICITAR APRESENTAÇÃO DESTA CATEGORIA' ); ?>
							</a>
						</div>
					</div>
				</div>

			<?php else : ?>
				<!-- Left: Content -->
				<div class="cat-row__col cat-row__col--content">
					<div class="cat-row__text-wrap">
						<div class="cat-row__meta">
							<span class="cat-row__num"><?php echo esc_html( $cat['num'] ); ?></span>
							<span class="cat-row__tags"><?php echo esc_html( $cat['tags'] ); ?></span>
						</div>
						<h2 class="cat-row__title"><?php echo esc_html( $cat['title'] ); ?></h2>
						<p class="cat-row__desc"><?php echo esc_html( $cat['desc'] ); ?></p>
						<div style="margin-top: 1.5rem;">
							<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="padding: 8px 18px; font-size: 0.75rem;">
								<?php frignanis_e( 'REQUEST PRESENTATION FOR THIS CATEGORY', 'SOLICITAR APRESENTAÇÃO DESTA CATEGORIA' ); ?>
							</a>
						</div>
					</div>
				</div>

				<!-- Right: Media -->
				<div class="cat-row__col cat-row__col--media">
					<div class="cat-row__img-wrap">
						<img src="<?php echo esc_url( $cat['image'] ); ?>" 
							 alt="<?php echo esc_attr( $cat['image_alt'] ); ?>" 
							 class="cat-row__img" 
							 loading="lazy" />
						<?php if ( ! empty( $cat['badge'] ) ) : ?>
							<div class="cat-row__badge" aria-label="<?php echo esc_attr( $cat['badge'] ); ?>">
								<span class="cat-row__badge-dot" aria-hidden="true"></span>
								<span><?php echo esc_html( $cat['badge'] ); ?></span>
							</div>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>

		</article>
	<?php endforeach; ?>

	<!-- Curated Visual Gallery of Authentic Italian Heritage & Terroir -->
	<div class="cat-gallery-section">
		<div class="site-container">
			<div class="cat-gallery__header">
				<div class="eyebrow"><?php frignanis_e( 'AUTHENTIC ITALIAN EXCELLENCE', 'EXCELÊNCIA ITALIANA AUTÊNTICA' ); ?></div>
				<h2 class="cat-gallery__title">
					<?php frignanis_e( 'Moments of', 'Momentos de' ); ?> <span class="cat-gallery__title-highlight"><?php frignanis_e( 'Terroir & Tradition', 'Terroir & Tradição' ); ?></span>
				</h2>
				<p class="cat-gallery__desc">
					<?php frignanis_e( 'From sunlit hillside vineyards to Michelin-starred tables and handcrafted ceramic workshops — every reference reflects our direct connection to Italy’s finest artisans.', 'De vinhedos ensolarados a mesas de alta gastronomia e ateliês artesanais de cerâmica — cada referência reflete nossa conexão direta aos mais nobres produtores da Itália.' ); ?>
				</p>
			</div>

			<div class="cat-gallery__grid">
				<!-- 1. Grapes on Vine -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-grapes-sunlit-vine.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Sunlit Italian Vineyard Grapes', 'Uvas em vinhedos italianos ensolarados' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php frignanis_e( 'TERROIR WINES', 'VINHOS DE TERROIR' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Sunlit Estate Grape Clusters', 'Cachos de uvas sob o sol dos vinhedos' ); ?></p>
					</div>
				</div>

				<!-- 2. Red Wine Pour -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-red-wine-pour.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Fine Italian Red Wine Pour', 'Serviço de vinho tinto italiano nobre' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'GRAND CRU', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Noble Appellation Vintages', 'Safras de nobre denominação' ); ?></p>
					</div>
				</div>

				<!-- 3. Beige Ceramic Tableware -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-art-decor-tableware-beige.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Handcrafted Italian Beige Ceramics', 'Cerâmicas artesanais italianas' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'COOKING SUPREME', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Handcrafted Artisanal Tableware', 'Arte da mesa e louças artesanais' ); ?></p>
					</div>
				</div>

				<!-- 4. Illuminated Shelving Display -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-art-decor-shelving-display.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Illuminated Luxury Art Décor Display', 'Expositor iluminado de art décor' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'ART DÉCOR', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Fine Living & Curated Spaces', 'Ambientes sofisticados e peças exclusivas' ); ?></p>
					</div>
				</div>

				<!-- 5. Fine Dining Table Setting -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-fine-dining-dinner.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Haute Gastronomy Dining Table', 'Mesa de jantar de alta gastronomia' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'FINE DINING', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Haute Cuisine & Pairing', 'Alta gastronomia e harmonização' ); ?></p>
					</div>
				</div>

				<!-- 6. Twilight Terrace Dining -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-terrace-dining-twilight.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Twilight Terrace Hospitality', 'Recepção em terraço ao crepúsculo' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php esc_html_e( 'HOSPITALITY', 'frignanis' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Seaside Twilight Banqueting', 'Banquete ao entardecer' ); ?></p>
					</div>
				</div>

				<!-- 7. Vineyard Celebration Toast -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-wine-celebration-toast.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Italian Vineyard Harvest Celebration', 'Celebração da colheita nos vinhedos' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php frignanis_e( 'CELEBRATION', 'CELEBRAÇÃO' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Vineyard Toast & Friendship', 'Brinde e celebração nos vinhedos' ); ?></p>
					</div>
				</div>

				<!-- 8. Historic Estate & Church -->
				<div class="cat-gallery-item">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/italian-estate-church-hills.jpg' ); ?>" 
						 alt="<?php frignanis_attr_e( 'Historic Italian Heritage Estate', 'Propriedade histórica italiana' ); ?>" 
						 class="cat-gallery-item__img" 
						 loading="lazy" />
					<div class="cat-gallery-item__overlay">
						<span class="cat-gallery-item__tag"><?php frignanis_e( 'HERITAGE', 'HERANÇA' ); ?></span>
						<p class="cat-gallery-item__caption"><?php frignanis_e( 'Historic Ferrara Hillside Estate', 'Propriedade histórica em Ferrara' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Folder Download Banner inside Categories -->
	<div class="site-container" style="margin-top: 3rem;">
		<div class="folder-download-banner">
			<div class="folder-download-banner__content">
				<span class="folder-download-banner__eyebrow"><?php frignanis_e( 'OFFICIAL CATALOGUE & FOLDER', 'CATÁLOGO OFICIAL & DOSSIÊ' ); ?></span>
				<h3 class="folder-download-banner__title"><?php frignanis_e( 'Frignani’s Institutional PDF Folder', 'Dossiê Institucional Frignani em PDF' ); ?></h3>
				<p class="folder-download-banner__desc">
					<?php frignanis_e( 'Request our complete executive presentation with operational guidelines, packaging specifications, and standard import procedures.', 'Baixe nossa apresentação executiva completa com diretrizes operacionais, especificações de embalagem e procedimentos de intermediação comercial.' ); ?>
				</p>
			</div>
			<a href="<?php echo esc_url( frignanis_get_presentation_pdf_url() ); ?>" class="btn-folder-download" download="Frignani-Apresentation.pdf" target="_blank" rel="noopener noreferrer">
				<?php frignanis_icon( 'download', 18 ); ?>
				<span><?php frignanis_e( 'Frignani Presentation', 'Apresentação Frignani' ); ?></span>
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
