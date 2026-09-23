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
					'default_value' => 'ITALIAN EXCELLENCE · INTERNATIONAL TRADE',
				),
				array(
					'key'           => 'field_hero_title_lead',
					'label'         => esc_html__( 'Title Lead Line', 'frignanis' ),
					'name'          => 'hero_title_lead',
					'type'          => 'text',
					'default_value' => 'Italian',
				),
				array(
					'key'           => 'field_hero_title_highlight',
					'label'         => esc_html__( 'Title Highlighted Word (Italic Gold)', 'frignanis' ),
					'name'          => 'hero_title_highlight',
					'type'          => 'text',
					'default_value' => 'Excellence',
				),
				array(
					'key'           => 'field_hero_title_end',
					'label'         => esc_html__( 'Title Trailing Line', 'frignanis' ),
					'name'          => 'hero_title_end',
					'type'          => 'text',
					'default_value' => 'International Trade',
				),
				array(
					'key'           => 'field_hero_description',
					'label'         => esc_html__( 'Hero Description', 'frignanis' ),
					'name'          => 'hero_description',
					'type'          => 'textarea',
					'rows'          => 3,
					'default_value' => 'We connect Italian producers directly to international professionals — promoting Italian culinary culture and heritage around the world, through direct import & export transactions.',
				),
				array(
					'key'           => 'field_hero_primary_btn_text',
					'label'         => esc_html__( 'Primary Button Text', 'frignanis' ),
					'name'          => 'hero_primary_btn_text',
					'type'          => 'text',
					'default_value' => 'EXPLORE CATEGORIES',
				),
				array(
					'key'           => 'field_hero_primary_btn_url',
					'label'         => esc_html__( 'Primary Button Link', 'frignanis' ),
					'name'          => 'hero_primary_btn_url',
					'type'          => 'url',
					'default_value' => '#categories',
				),
				array(
					'key'           => 'field_hero_secondary_btn_text',
					'label'         => esc_html__( 'Secondary Button Text', 'frignanis' ),
					'name'          => 'hero_secondary_btn_text',
					'type'          => 'text',
					'default_value' => 'GET IN TOUCH',
				),
				array(
					'key'           => 'field_hero_secondary_btn_url',
					'label'         => esc_html__( 'Secondary Button Link', 'frignanis' ),
					'name'          => 'hero_secondary_btn_url',
					'type'          => 'url',
					'default_value' => '#footer',
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

	// 2. MISSION SECTION FIELD GROUP
	acf_add_local_field_group(
		array(
			'key'      => 'group_frignanis_mission',
			'title'    => esc_html__( 'Mission Section Settings', 'frignanis' ),
			'fields'   => array(
				array(
					'key'           => 'field_mission_eyebrow',
					'label'         => esc_html__( 'Eyebrow Text', 'frignanis' ),
					'name'          => 'mission_eyebrow',
					'type'          => 'text',
					'default_value' => 'OUR MISSION',
				),
				array(
					'key'           => 'field_mission_title_lead',
					'label'         => esc_html__( 'Title Lead Text', 'frignanis' ),
					'name'          => 'mission_title_lead',
					'type'          => 'text',
					'default_value' => 'A bridge between Italy and the',
				),
				array(
					'key'           => 'field_mission_title_highlight',
					'label'         => esc_html__( 'Title Highlighted Word (Italic Gold)', 'frignanis' ),
					'name'          => 'mission_title_highlight',
					'type'          => 'text',
					'default_value' => 'world',
				),
				array(
					'key'           => 'field_mission_body',
					'label'         => esc_html__( 'Mission Narrative', 'frignanis' ),
					'name'          => 'mission_body',
					'type'          => 'textarea',
					'rows'          => 5,
					'default_value' => "Frignani's was founded on a simple belief: that the finest Italian products deserve a direct path to international markets. We work exclusively with Italian producers, operating through transparent import & export transactions that honour their craft.",
				),
				array(
					'key'           => 'field_mission_btn_text',
					'label'         => esc_html__( 'Button Text', 'frignanis' ),
					'name'          => 'mission_btn_text',
					'type'          => 'text',
					'default_value' => 'OUR STORY',
				),
				array(
					'key'           => 'field_mission_btn_url',
					'label'         => esc_html__( 'Button URL', 'frignanis' ),
					'name'          => 'mission_btn_url',
					'type'          => 'url',
					'default_value' => '#story',
				),
				array(
					'key'           => 'field_mission_image_primary',
					'label'         => esc_html__( 'Primary Image (e.g. Olive Oil Jar)', 'frignanis' ),
					'name'          => 'mission_image_primary',
					'type'          => 'image',
					'return_format' => 'array',
				),
				array(
					'key'           => 'field_mission_image_secondary',
					'label'         => esc_html__( 'Secondary Image (e.g. Italian Craftsman)', 'frignanis' ),
					'name'          => 'mission_image_secondary',
					'type'          => 'image',
					'return_format' => 'array',
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

				// --- GRANDMOTHER TRIBUTE & HISTORY ---
				array(
					'key'           => 'field_about_history_eyebrow',
					'label'         => esc_html__( 'History Section Eyebrow', 'frignanis' ),
					'name'          => 'about_history_eyebrow',
					'type'          => 'text',
					'default_value' => 'OUR STORY · AN ITALIAN FAMILY HERITAGE',
				),
				array(
					'key'           => 'field_about_history_title',
					'label'         => esc_html__( 'History Section Title', 'frignanis' ),
					'name'          => 'about_history_title',
					'type'          => 'text',
					'default_value' => 'Century-Old Roots, Tradition and Family Passion',
				),
				array(
					'key'           => 'field_about_history_lead',
					'label'         => esc_html__( 'History Lead Narrative', 'frignanis' ),
					'name'          => 'about_history_lead',
					'type'          => 'textarea',
					'rows'          => 4,
					'default_value' => "Sabrina Frignani, founder of FRIGNANI'S, is of Italian descent, with deep family roots in Trento — a historical territory that was once part of the Austro-Hungarian Empire before becoming Italian. This rich cultural heritage transmitted to the Frignani family the secrets and sacred rituals of authentic gastronomy.",
				),
				array(
					'key'           => 'field_about_tribute_caption',
					'label'         => esc_html__( 'Tribute Frame Caption', 'frignanis' ),
					'name'          => 'about_tribute_caption',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => 'Your love, your strength, and your kindness will live forever in our hearts.',
				),
				array(
					'key'           => 'field_about_tribute_seal',
					'label'         => esc_html__( 'Tribute Archival Seal Text', 'frignanis' ),
					'name'          => 'about_tribute_seal',
					'type'          => 'text',
					'default_value' => "FRIGNANI'S · EST. TRENTO · ITALIA",
				),
				array(
					'key'           => 'field_about_history_motto',
					'label'         => esc_html__( 'Family Motto / Signature', 'frignanis' ),
					'name'          => 'about_history_motto',
					'type'          => 'text',
					'default_value' => "Frignani's : Una passione, mille sapori.",
				),

				// --- MISSION, VISION & VALUES ---
				array(
					'key'           => 'field_about_mvv_eyebrow',
					'label'         => esc_html__( 'MVV Section Eyebrow', 'frignanis' ),
					'name'          => 'about_mvv_eyebrow',
					'type'          => 'text',
					'default_value' => 'OUR FOUNDING PRINCIPLES',
				),
				array(
					'key'           => 'field_about_mvv_title',
					'label'         => esc_html__( 'MVV Section Title', 'frignanis' ),
					'name'          => 'about_mvv_title',
					'type'          => 'text',
					'default_value' => 'Mission, Vision & Values',
				),
				array(
					'key'           => 'field_about_mvv_lead',
					'label'         => esc_html__( 'MVV Lead Description', 'frignanis' ),
					'name'          => 'about_mvv_lead',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => "The core principles guiding FRIGNANI'S in building enduring trade bridges between Italy, Europe, and the world.",
				),

				// --- CTA SECTION ---
				array(
					'key'           => 'field_about_cta_eyebrow',
					'label'         => esc_html__( 'CTA Eyebrow', 'frignanis' ),
					'name'          => 'about_cta_eyebrow',
					'type'          => 'text',
					'default_value' => 'RESTAURANTS · HOTELS · CASINOS · PREMIUM RETAIL',
				),
				array(
					'key'           => 'field_about_cta_title',
					'label'         => esc_html__( 'CTA Title', 'frignanis' ),
					'name'          => 'about_cta_title',
					'type'          => 'text',
					'default_value' => "Let's Build a Direct and Lasting Partnership",
				),
				array(
					'key'           => 'field_about_cta_desc',
					'label'         => esc_html__( 'CTA Description', 'frignanis' ),
					'name'          => 'about_cta_desc',
					'type'          => 'textarea',
					'rows'          => 2,
					'default_value' => "Sabrina Frignani is at your disposal to present our curated portfolio of wines, olive oils, and luxury articles for your business.",
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
}
