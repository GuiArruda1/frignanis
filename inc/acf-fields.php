<?php
/**
 * Programmatic ACF Fields Registration
 * Ensures all fields exist automatically when ACF Pro or ACF Free is active.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action( 'acf/init', 'frignanis_register_acf_field_groups' );

function frignanis_register_acf_field_groups() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	// 1. HERO SECTION FIELD GROUP
	acf_add_local_field_group(
		array(
			'key'      => 'group_frignanis_hero',
			'title'    => esc_html__( 'Hero Section Settings', 'frignanis' ),
			'fields'   => array(
				array(
					'key'           => 'field_hero_eyebrow',
					'label'         => esc_html__( 'Eyebrow Text', 'frignanis' ),
					'name'          => 'hero_eyebrow',
					'type'          => 'text',
					'default_value' => 'LUXEMBOURG · THE BRIDGE BETWEEN ITALY AND THE WORLD',
				),
				array(
					'key'           => 'field_hero_title_lead',
					'label'         => esc_html__( 'Title Lead Line', 'frignanis' ),
					'name'          => 'hero_title_lead',
					'type'          => 'text',
					'default_value' => 'Authentic Italy, brought to the',
				),
				array(
					'key'           => 'field_hero_title_highlight',
					'label'         => esc_html__( 'Title Highlighted Word (Italic Gold)', 'frignanis' ),
					'name'          => 'hero_title_highlight',
					'type'          => 'text',
					'default_value' => 'most demanding tables',
				),
				array(
					'key'           => 'field_hero_title_end',
					'label'         => esc_html__( 'Title Trailing Line', 'frignanis' ),
					'name'          => 'hero_title_end',
					'type'          => 'text',
					'default_value' => 'of the world.',
				),
				array(
					'key'           => 'field_hero_description',
					'label'         => esc_html__( 'Hero Description', 'frignanis' ),
					'name'          => 'hero_description',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Business management and commercial intermediation of Italian excellence, following the standard procedure of each producer and client. From Luxembourg to the world.',
				),
				array(
					'key'           => 'field_hero_primary_btn_text',
					'label'         => esc_html__( 'Primary Button Text', 'frignanis' ),
					'name'          => 'hero_primary_btn_text',
					'type'          => 'text',
					'default_value' => 'REQUEST A PRESENTATION',
				),
				array(
					'key'           => 'field_hero_primary_btn_url',
					'label'         => esc_html__( 'Primary Button Link', 'frignanis' ),
					'name'          => 'hero_primary_btn_url',
					'type'          => 'url',
					'default_value' => '/contact/',
				),
				array(
					'key'           => 'field_hero_secondary_btn_text',
					'label'         => esc_html__( 'Secondary Button Text', 'frignanis' ),
					'name'          => 'hero_secondary_btn_text',
					'type'          => 'text',
					'default_value' => 'OUR SERVICES',
				),
				array(
					'key'           => 'field_hero_secondary_btn_url',
					'label'         => esc_html__( 'Secondary Button Link', 'frignanis' ),
					'name'          => 'hero_secondary_btn_url',
					'type'          => 'url',
					'default_value' => '#mission',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'front-page.php',
					),
				),
			),
		)
	);

	// 2. INSTITUTIONAL PRESENTATION FIELD GROUP
	acf_add_local_field_group(
		array(
			'key'      => 'group_frignanis_presentation',
			'title'    => esc_html__( 'Home Presentation Section Settings', 'frignanis' ),
			'fields'   => array(
				array(
					'key'           => 'field_presentation_eyebrow',
					'label'         => esc_html__( 'Eyebrow Text', 'frignanis' ),
					'name'          => 'presentation_eyebrow',
					'type'          => 'text',
					'default_value' => 'LUXEMBOURG · THE HEART OF EUROPE · INTERNATIONAL TRADE MAISON',
				),
				array(
					'key'           => 'field_presentation_title_lead',
					'label'         => esc_html__( 'Title Lead Text', 'frignanis' ),
					'name'          => 'presentation_title_lead',
					'type'          => 'text',
					'default_value' => 'Business management and commercial intermediation of',
				),
				array(
					'key'           => 'field_presentation_title_highlight',
					'label'         => esc_html__( 'Title Highlighted Word (Italic Gold)', 'frignanis' ),
					'name'          => 'presentation_title_highlight',
					'type'          => 'text',
					'default_value' => 'Italian excellence',
				),
				array(
					'key'           => 'field_presentation_p1',
					'label'         => esc_html__( 'Presentation Paragraph 1 (Maison Scope & Terroir)', 'frignanis' ),
					'name'          => 'presentation_p1',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Headquartered in Luxembourg, in the heart of Europe, Frignani’s Import & Export is dedicated to business management and commercial intermediation of what Italy produces finest: terroir wines and proseccos, gourmet and biological delicacies from selected producers, and art décor pieces that elevate haute cuisine kitchens and high-end tables. Each partnership is conducted according to the standard operating procedure of each producer and client.',
				),
				array(
					'key'           => 'field_presentation_p2',
					'label'         => esc_html__( 'Presentation Paragraph 2 (Markets & Representation)', 'frignanis' ),
					'name'          => 'presentation_p2',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'We represent traditional Italian producers before distributors, fine dining restaurants, institutions, and major corporations in Luxembourg, Belgium, Germany, Spain, Netherlands, United States, Brazil, Chile, and Colombia.',
				),
				array(
					'key'           => 'field_presentation_tagline',
					'label'         => esc_html__( 'Manifesto Tagline', 'frignanis' ),
					'name'          => 'presentation_tagline',
					'type'          => 'text',
					'default_value' => 'We do not sell products. We connect excellences.',
				),
				array(
					'key'           => 'field_presentation_cta_primary_text',
					'label'         => esc_html__( 'Primary Button Text', 'frignanis' ),
					'name'          => 'presentation_cta_primary_text',
					'type'          => 'text',
					'default_value' => 'REQUEST A PRESENTATION',
				),
				array(
					'key'           => 'field_presentation_cta_primary_url',
					'label'         => esc_html__( 'Primary Button URL', 'frignanis' ),
					'name'          => 'presentation_cta_primary_url',
					'type'          => 'url',
					'default_value' => '/contact/',
				),
				array(
					'key'           => 'field_presentation_cta_secondary_text',
					'label'         => esc_html__( 'Secondary Button Text', 'frignanis' ),
					'name'          => 'presentation_cta_secondary_text',
					'type'          => 'text',
					'default_value' => 'EXPLORE OUR SERVICES',
				),
				array(
					'key'           => 'field_presentation_cta_secondary_url',
					'label'         => esc_html__( 'Secondary Button URL', 'frignanis' ),
					'name'          => 'presentation_cta_secondary_url',
					'type'          => 'url',
					'default_value' => '/mission-and-services/',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'front-page.php',
					),
				),
			),
		)
	);

	// 3. CATEGORIES SECTION FIELD GROUP
	acf_add_local_field_group(
		array(
			'key'      => 'group_frignanis_categories',
			'title'    => esc_html__( 'Categories Export Settings', 'frignanis' ),
			'fields'   => array(
				array(
					'key'           => 'field_categories_eyebrow',
					'label'         => esc_html__( 'Eyebrow Text', 'frignanis' ),
					'name'          => 'categories_eyebrow',
					'type'          => 'text',
					'default_value' => 'CATEGORIES',
				),
				array(
					'key'           => 'field_categories_heading',
					'label'         => esc_html__( 'Section Heading', 'frignanis' ),
					'name'          => 'categories_heading',
					'type'          => 'text',
					'default_value' => 'What we export',
				),
				array(
					'key'           => 'field_categories_link_text',
					'label'         => esc_html__( 'View All Link Text', 'frignanis' ),
					'name'          => 'categories_link_text',
					'type'          => 'text',
					'default_value' => 'VIEW ALL CATEGORIES',
				),
				array(
					'key'           => 'field_categories_link_url',
					'label'         => esc_html__( 'View All Link URL', 'frignanis' ),
					'name'          => 'categories_link_url',
					'type'          => 'url',
					'default_value' => '#categories',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'front-page.php',
					),
				),
			),
		)
	);

	// 4. ABOUT PAGE FIELD GROUP (ABOUT US / SOBRE NÓS)
	acf_add_local_field_group(
		array(
			'key'      => 'group_frignanis_about',
			'title'    => esc_html__( 'About Page Settings (Sobre Nós / Quem Somos)', 'frignanis' ),
			'fields'   => array(
				// --- HERO ---
				array(
					'key'           => 'field_about_hero_eyebrow',
					'label'         => esc_html__( 'Hero Eyebrow', 'frignanis' ),
					'name'          => 'about_hero_eyebrow',
					'type'          => 'text',
					'default_value' => '— 03 . ABOUT US · HERITAGE & VISION',
				),
				array(
					'key'           => 'field_about_hero_title_lead',
					'label'         => esc_html__( 'Hero Title Lead', 'frignanis' ),
					'name'          => 'about_hero_title_lead',
					'type'          => 'text',
					'default_value' => 'A family legacy,',
				),
				array(
					'key'           => 'field_about_hero_title_highlight',
					'label'         => esc_html__( 'Hero Title Highlight (Italic Gold)', 'frignanis' ),
					'name'          => 'about_hero_title_highlight',
					'type'          => 'text',
					'default_value' => 'shared with the world.',
				),
				array(
					'key'           => 'field_about_lead_desc',
					'label'         => esc_html__( 'Hero Lead Summary', 'frignanis' ),
					'name'          => 'about_lead_desc',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "FRIGNANI'S is an international trade maison based in Luxembourg, with authentic Italian origins and identity — connecting prestigious Italian producers and European partners directly to international professionals.",
				),

				// --- PHILOSOPHICAL QUOTE ---
				array(
					'key'           => 'field_about_quote_text',
					'label'         => esc_html__( 'Quote Banner Text', 'frignanis' ),
					'name'          => 'about_quote_text',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'We do not seek indiscriminate volumes; we cultivate terroirs, honour centuries of tradition, and build lasting relationships of mutual trust.',
				),
				array(
					'key'           => 'field_about_quote_cite',
					'label'         => esc_html__( 'Quote Citation', 'frignanis' ),
					'name'          => 'about_quote_cite',
					'type'          => 'text',
					'default_value' => "FRIGNANI'S · MAISON OF INTERNATIONAL TRADE",
				),

				// --- 3 PILLARS ---
				array(
					'key'           => 'field_about_pillars_eyebrow',
					'label'         => esc_html__( 'Pillars Section Eyebrow', 'frignanis' ),
					'name'          => 'about_pillars_eyebrow',
					'type'          => 'text',
					'default_value' => 'OUR GLOBAL REACH',
				),
				array(
					'key'           => 'field_about_pillars_title',
					'label'         => esc_html__( 'Pillars Section Title', 'frignanis' ),
					'name'          => 'about_pillars_title',
					'type'          => 'text',
					'default_value' => 'Three Pillars of Excellence Serving Demanding Markets',
				),
				array(
					'key'           => 'field_about_pillars_text_1',
					'label'         => esc_html__( 'Pillars Paragraph 1', 'frignanis' ),
					'name'          => 'about_pillars_text_1',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'We operate across three core pillars: Wines & Beverages, Italian Gastronomy (Food Italy), and Tableware & Lifestyle (Kitchen & Art de Vivre), serving restaurants, luxury hotels, premium supermarkets, and casinos in Europe and the Americas.',
				),
				array(
					'key'           => 'field_about_pillars_text_2',
					'label'         => esc_html__( 'Pillars Paragraph 2', 'frignanis' ),
					'name'          => 'about_pillars_text_2',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Headquartered in the Grand Duchy of Luxembourg, we connect Italian producers and European artisans directly to international professionals, without superfluous intermediaries and with complete operational security.',
				),
				array(
					'key'           => 'field_about_pillars_quote',
					'label'         => esc_html__( 'Pillars Callout Quote', 'frignanis' ),
					'name'          => 'about_pillars_quote',
					'type'          => 'text',
					'default_value' => 'Our approach: curatorship over volume, relationship over transaction.',
				),

				// --- SECTION 1: A STORY SPANNING GENERATIONS ---
				array(
					'key'           => 'field_about_section_1_title',
					'label'         => esc_html__( 'Section 1 Title (Uppercase)', 'frignanis' ),
					'name'          => 'about_section_1_title',
					'type'          => 'text',
					'default_value' => 'A STORY SPANNING GENERATIONS, CONTINENTS AND FLAVOURS',
				),
				array(
					'key'           => 'field_about_section_1_p1',
					'label'         => esc_html__( 'Section 1 - Paragraph 1', 'frignanis' ),
					'name'          => 'about_section_1_p1',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'From the plains of Ferrara in Northern Italy was born a story defined by tradition, courage, and a spirit of discovery.',
				),
				array(
					'key'           => 'field_about_section_1_p2',
					'label'         => esc_html__( 'Section 1 - Paragraph 2', 'frignanis' ),
					'name'          => 'about_section_1_p2',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'One day, the Frignani family crossed the Atlantic carrying recipes, memories, and Italy in their hearts. In Brazil and later across the Americas, Italian cuisine became a language of affection, identity, and excellence — a heritage handed down from generation to generation.',
				),
				array(
					'key'           => 'field_about_section_1_p3',
					'label'         => esc_html__( 'Section 1 - Paragraph 3', 'frignanis' ),
					'name'          => 'about_section_1_p3',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'The Frignani name also carries a history spanning centuries. On August 30, 1626, in Valencia, King Philip IV created the Barony of Frignani and Frignestani, granted to Gaspar Palavicino y Centurión, leaving a historical record that forms part of the name’s journey and tradition.',
				),
				array(
					'key'           => 'field_about_section_1_p4',
					'label'         => esc_html__( 'Section 1 - Paragraph 4', 'frignanis' ),
					'name'          => 'about_section_1_p4',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Generations later, beside one of Brazil’s great ports in Vitória, Espírito Santo, Sabrina Frignani grew up between the family dining table and the rhythm of ships connecting continents. It was in this environment, suspended between Italian roots and an international vocation, that a worldview grounded in connection, trade, and excellence was born.',
				),
				array(
					'key'           => 'field_about_section_1_p5',
					'label'         => esc_html__( 'Section 1 - Paragraph 5', 'frignanis' ),
					'name'          => 'about_section_1_p5',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Following a distinguished international career in Spain, Sabrina united her heritage with extensive experience in management and international trade, inaugurating a new chapter in the family history.',
				),

				// --- SECTION 2: A JOURNEY BACK TO OUR ROOTS ---
				array(
					'key'           => 'field_about_section_2_title',
					'label'         => esc_html__( 'Section 2 Title (Uppercase)', 'frignanis' ),
					'name'          => 'about_section_2_title',
					'type'          => 'text',
					'default_value' => 'A JOURNEY BACK TO OUR ROOTS',
				),
				array(
					'key'           => 'field_about_section_2_p1',
					'label'         => esc_html__( 'Section 2 - Paragraph 1', 'frignanis' ),
					'name'          => 'about_section_2_p1',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'Today, the new Frignani generation makes the journey back.',
				),
				array(
					'key'           => 'field_about_section_2_p2',
					'label'         => esc_html__( 'Section 2 - Paragraph 2', 'frignanis' ),
					'name'          => 'about_section_2_p2',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'From Luxembourg, the heart of Europe, Frignani’s was created with the purpose of connecting producers, brands, restaurants, and markets through an international import and export service crafted with proximity, deep knowledge, and meticulous attention to detail.',
				),
				array(
					'key'           => 'field_about_section_2_p3',
					'label'         => esc_html__( 'Section 2 - Paragraph 3', 'frignanis' ),
					'name'          => 'about_section_2_p3',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'With the support of the Federazione Italiana Cuochi – Delegazione Lussemburgo, Frignani’s establishes a bridge between Italian tradition and the contemporary world, curating producers and partners that embody quality, authenticity, and excellence.',
				),
				array(
					'key'           => 'field_about_section_2_p4',
					'label'         => esc_html__( 'Section 2 - Paragraph 4', 'frignanis' ),
					'name'          => 'about_section_2_p4',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'More than simply transporting products across borders, we believe in building lasting connections between people, cultures, and businesses.',
				),

				// --- FECHAMENTO & SIGNATURE (GOLDEN HIGHLIGHT) ---
				array(
					'key'           => 'field_about_closing_cadence',
					'label'         => esc_html__( 'Closing Cadence (3 Lines)', 'frignanis' ),
					'name'          => 'about_closing_cadence',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => "From Italy to the world.\nFrom the world to Luxembourg.\nAnd from Luxembourg back to the world.",
				),
				array(
					'key'           => 'field_about_closing_synthesis',
					'label'         => esc_html__( 'Closing Synthesis Narrative', 'frignanis' ),
					'name'          => 'about_closing_synthesis',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Expertise in international management. Elegance in curation. Forward-thinking vision. Excellence at every stage — through to final delivery.',
				),
				array(
					'key'           => 'field_about_closing_brand',
					'label'         => esc_html__( 'Closing Brand Name', 'frignanis' ),
					'name'          => 'about_closing_brand',
					'type'          => 'text',
					'default_value' => 'FRIGNANI’S',
				),
				array(
					'key'           => 'field_about_closing_motto',
					'label'         => esc_html__( 'Closing Motto / Subtitle', 'frignanis' ),
					'name'          => 'about_closing_motto',
					'type'          => 'text',
					'default_value' => 'A family history. An international vision. A passion that transcends borders.',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-about.php',
					),
				),
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-sobre-nos.php',
					),
				),
			),
		)
	);

	// 5. CONTACT PAGE FIELD GROUP
	acf_add_local_field_group(
		array(
			'key'      => 'group_frignanis_contact',
			'title'    => esc_html__( 'Contact Page Settings', 'frignanis' ),
			'fields'   => array(
				// Hero
				array(
					'key'           => 'field_contact_hero_eyebrow',
					'label'         => esc_html__( 'Hero Eyebrow', 'frignanis' ),
					'name'          => 'contact_hero_eyebrow',
					'type'          => 'text',
					'default_value' => '04 / CONTACT',
				),
				array(
					'key'           => 'field_contact_hero_title_lead',
					'label'         => esc_html__( 'Hero Title Lead', 'frignanis' ),
					'name'          => 'contact_hero_title_lead',
					'type'          => 'text',
					'default_value' => "Let's talk",
				),
				array(
					'key'           => 'field_contact_hero_title_highlight',
					'label'         => esc_html__( 'Hero Title Highlight (Italic Gold)', 'frignanis' ),
					'name'          => 'contact_hero_title_highlight',
					'type'          => 'text',
					'default_value' => 'trade.',
				),
				array(
					'key'           => 'field_contact_hero_desc',
					'label'         => esc_html__( 'Hero Lead Description', 'frignanis' ),
					'name'          => 'contact_hero_desc',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => "For import & export enquiries, partnership proposals, or any question about our categories — we're here.",
				),
				// Left Column Contact Info
				array(
					'key'           => 'field_contact_email_label',
					'label'         => esc_html__( 'Email Label', 'frignanis' ),
					'name'          => 'contact_email_label',
					'type'          => 'text',
					'default_value' => 'EMAIL',
				),
				array(
					'key'           => 'field_contact_email_address',
					'label'         => esc_html__( 'Email Address', 'frignanis' ),
					'name'          => 'contact_email_address',
					'type'          => 'text',
					'default_value' => 'info@frignanis.com',
				),
				array(
					'key'           => 'field_contact_insta_label',
					'label'         => esc_html__( 'Instagram Label', 'frignanis' ),
					'name'          => 'contact_insta_label',
					'type'          => 'text',
					'default_value' => 'INSTAGRAM',
				),
				array(
					'key'           => 'field_contact_insta_handle',
					'label'         => esc_html__( 'Instagram Handle', 'frignanis' ),
					'name'          => 'contact_insta_handle',
					'type'          => 'text',
					'default_value' => '@frignanisgourmet',
				),
				array(
					'key'           => 'field_contact_insta_url',
					'label'         => esc_html__( 'Instagram URL', 'frignanis' ),
					'name'          => 'contact_insta_url',
					'type'          => 'url',
					'default_value' => 'https://instagram.com/frignanisgourmet',
				),
				array(
					'key'           => 'field_contact_insta_subtext',
					'label'         => esc_html__( 'Instagram Subtext', 'frignanis' ),
					'name'          => 'contact_insta_subtext',
					'type'          => 'text',
					'default_value' => 'Instagram is our primary direct contact channel.',
				),
				array(
					'key'           => 'field_contact_sla_label',
					'label'         => esc_html__( 'Response Time Label', 'frignanis' ),
					'name'          => 'contact_sla_label',
					'type'          => 'text',
					'default_value' => 'RESPONSE TIME',
				),
				array(
					'key'           => 'field_contact_sla_text',
					'label'         => esc_html__( 'Response Time Text', 'frignanis' ),
					'name'          => 'contact_sla_text',
					'type'          => 'text',
					'default_value' => 'Within 2 working days for all trade enquiries.',
				),
				// Right Column Form
				array(
					'key'           => 'field_contact_form_btn_text',
					'label'         => esc_html__( 'Form Submit Button Text', 'frignanis' ),
					'name'          => 'contact_form_btn_text',
					'type'          => 'text',
					'default_value' => 'SEND MESSAGE',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-contact.php',
					),
				),
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-contato.php',
					),
				),
			),
		)
	);

	// 6. MISSION & SERVICES PAGE FIELD GROUP
	acf_add_local_field_group(
		array(
			'key'      => 'group_frignanis_mission_services_page',
			'title'    => esc_html__( 'Mission & Services Page Settings', 'frignanis' ),
			'fields'   => array(
				array(
					'key'           => 'field_ms_hero_eyebrow',
					'label'         => esc_html__( 'Hero Eyebrow Text', 'frignanis' ),
					'name'          => 'ms_hero_eyebrow',
					'type'          => 'text',
					'default_value' => '— 02 · MISSION & SERVICES · INTERNATIONAL TRADE',
				),
				array(
					'key'           => 'field_ms_hero_title_lead',
					'label'         => esc_html__( 'Hero Title Lead Text', 'frignanis' ),
					'name'          => 'ms_hero_title_lead',
					'type'          => 'text',
					'default_value' => 'The Bridge Between Italy and the',
				),
				array(
					'key'           => 'field_ms_hero_title_highlight',
					'label'         => esc_html__( 'Hero Title Highlight (Italic Gold)', 'frignanis' ),
					'name'          => 'ms_hero_title_highlight',
					'type'          => 'text',
					'default_value' => 'World',
				),
				array(
					'key'           => 'field_ms_hero_desc',
					'label'         => esc_html__( 'Hero Description', 'frignanis' ),
					'name'          => 'ms_hero_desc',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Business management and commercial intermediation of authentic Italian excellences. We represent traditional producers with certified provenance, discretion, and personalized service — from Luxembourg to the world.',
				),
				array(
					'key'           => 'field_ms_mission_eyebrow',
					'label'         => esc_html__( 'Mission Eyebrow', 'frignanis' ),
					'name'          => 'ms_mission_eyebrow',
					'type'          => 'text',
					'default_value' => 'OUR MISSION',
				),
				array(
					'key'           => 'field_ms_mission_title',
					'label'         => esc_html__( 'Mission Title', 'frignanis' ),
					'name'          => 'ms_mission_title',
					'type'          => 'text',
					'default_value' => 'Bringing Authentic Italy to the World',
				),
				array(
					'key'           => 'field_ms_mission_text',
					'label'         => esc_html__( 'Mission Body Text', 'frignanis' ),
					'name'          => 'ms_mission_text',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => 'Bringing authentic Italy to the world with the rigor of those who know its origin and the care of those who honor a heritage. We connect passionate producers with discerning tables, ensuring guaranteed provenance, transparency at every step, and truly personalized service.',
				),
				array(
					'key'           => 'field_ms_services_eyebrow',
					'label'         => esc_html__( 'Services Eyebrow', 'frignanis' ),
					'name'          => 'ms_services_eyebrow',
					'type'          => 'text',
					'default_value' => 'OUR SERVICES',
				),
				array(
					'key'           => 'field_ms_services_title',
					'label'         => esc_html__( 'Services Title', 'frignanis' ),
					'name'          => 'ms_services_title',
					'type'          => 'text',
					'default_value' => 'More Than Supplying, We Represent',
				),
				array(
					'key'           => 'field_ms_services_lead',
					'label'         => esc_html__( 'Services Lead Text', 'frignanis' ),
					'name'          => 'ms_services_lead',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'We are your presence in Italy: from the rigorous selection of each producer to negotiation, logistics, import and export documentation, through to final delivery, handled with discretion and security wherever you are.',
				),
				array(
					'key'           => 'field_ms_audience_eyebrow',
					'label'         => esc_html__( 'Audience Eyebrow', 'frignanis' ),
					'name'          => 'ms_audience_eyebrow',
					'type'          => 'text',
					'default_value' => 'WHO WE SERVE',
				),
				array(
					'key'           => 'field_ms_audience_title',
					'label'         => esc_html__( 'Audience Title', 'frignanis' ),
					'name'          => 'ms_audience_title',
					'type'          => 'text',
					'default_value' => 'Strategic Partners Across Discerning Sectors',
				),
				array(
					'key'           => 'field_ms_why_eyebrow',
					'label'         => esc_html__( 'Why Frignanis Eyebrow', 'frignanis' ),
					'name'          => 'ms_why_eyebrow',
					'type'          => 'text',
					'default_value' => "WHY FRIGNANI'S",
				),
				array(
					'key'           => 'field_ms_why_title',
					'label'         => esc_html__( 'Why Frignanis Title', 'frignanis' ),
					'name'          => 'ms_why_title',
					'type'          => 'text',
					'default_value' => 'The Care of a Family Maison. The Reach of International Trade.',
				),
				array(
					'key'           => 'field_ms_why_text',
					'label'         => esc_html__( 'Why Frignanis Text', 'frignanis' ),
					'name'          => 'ms_why_text',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'Direct access to producers rarely available outside Italy, guaranteed authenticity from start to finish, and a relationship built with the care of a family maison.',
				),
				array(
					'key'           => 'field_ms_why_quote',
					'label'         => esc_html__( 'Why Frignanis Focal Quote', 'frignanis' ),
					'name'          => 'ms_why_quote',
					'type'          => 'text',
					'default_value' => 'A single interlocutor. The whole of Italy within your reach.',
				),
			),
			'location' => array(
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-mission-and-services.php',
					),
				),
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-mission-services.php',
					),
				),
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-missao-e-servicos.php',
					),
				),
				array(
					array(
						'param'    => 'page_template',
						'operator' => '==',
						'value'    => 'page-missao-servicos.php',
					),
				),
			),
		)
	);
}

