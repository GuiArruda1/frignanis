<?php
/**
 * Internationalization (i18n) & Language Management Helper for Frignani's
 *
 * Ensures 100% consistent, unmixed multilingual delivery across:
 * PT (Portuguese - Official briefing human text)
 * EN (English - Official luxury trade human text)
 * FR, IT, ES, DE (Clean dynamic translation from standard base without mixed artifacts)
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Detect current active language (pt, en, fr, it, es, de)
 * Priority: 1. URL query (?lang=xx) -> 2. Cookie (frignanis_lang) -> 3. Browser header -> 4. Default ('en')
 */
add_action( 'init', 'frignanis_init_language_cookie' );
function frignanis_init_language_cookie() {
	if ( ! empty( $_GET['lang'] ) && ! headers_sent() ) {
		$supported = array( 'en', 'pt', 'it', 'fr', 'es', 'de' );
		$param     = strtolower( sanitize_text_field( wp_unslash( $_GET['lang'] ) ) );
		if ( in_array( $param, $supported, true ) ) {
			setcookie( 'frignanis_lang', $param, time() + ( 86400 * 365 ), '/' );
			$_COOKIE['frignanis_lang'] = $param;
		}
	}
}

function frignanis_get_current_language() {
	static $current_lang = null;
	if ( null !== $current_lang ) {
		return $current_lang;
	}

	$supported = array( 'en', 'pt', 'it', 'fr', 'es', 'de' );

	// 1. URL parameter override
	if ( ! empty( $_GET['lang'] ) ) {
		$param = strtolower( sanitize_text_field( wp_unslash( $_GET['lang'] ) ) );
		if ( in_array( $param, $supported, true ) ) {
			$current_lang = $param;
			return $current_lang;
		}
	}

	// 2. Cookie preference
	if ( ! empty( $_COOKIE['frignanis_lang'] ) ) {
		$cookie_lang = strtolower( sanitize_text_field( wp_unslash( $_COOKIE['frignanis_lang'] ) ) );
		if ( in_array( $cookie_lang, $supported, true ) ) {
			$current_lang = $cookie_lang;
			return $current_lang;
		}
	}

	// 3. Browser locale auto-detection on first visit
	if ( ! empty( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) ) {
		$browser = strtolower( substr( sanitize_text_field( wp_unslash( $_SERVER['HTTP_ACCEPT_LANGUAGE'] ) ), 0, 2 ) );
		if ( 'pt' === $browser ) {
			$current_lang = 'pt';
			return $current_lang;
		}
	}

	// 4. Default to English (standard international trade language)
	$current_lang = 'en';
	return $current_lang;
}

/**
 * Helper to check if active language is Portuguese
 */
function frignanis_is_pt() {
	return 'pt' === frignanis_get_current_language();
}

/**
 * Helper to translate between English (default) and Portuguese (hardcoded authentic),
 * with optional direct support for Italian, French, Spanish, German.
 *
 * @param string      $en  English string
 * @param string      $pt  Portuguese string
 * @param string|null $it  Optional Italian string
 * @param string|null $fr  Optional French string
 * @param string|null $es  Optional Spanish string
 * @param string|null $de  Optional German string
 * @return string
 */
function frignanis_t( $en, $pt, $it = null, $fr = null, $es = null, $de = null ) {
	$lang = frignanis_get_current_language();

	switch ( $lang ) {
		case 'pt':
			return $pt;
		case 'it':
			return ( null !== $it ) ? $it : $en;
		case 'fr':
			return ( null !== $fr ) ? $fr : $en;
		case 'es':
			return ( null !== $es ) ? $es : $en;
		case 'de':
			return ( null !== $de ) ? $de : $en;
		case 'en':
		default:
			return $en;
	}
}

/**
 * Multilingual ACF Field Resolver
 * Guarantees that when in Portuguese (pt), the authentic Portuguese copy is delivered,
 * while in English/International, custom ACF field or English defaults are delivered.
 */
function frignanis_field( $field_name, $default_en, $default_pt ) {
	if ( frignanis_is_pt() ) {
		if ( function_exists( 'get_field' ) ) {
			$val_pt = get_field( $field_name . '_pt' );
			if ( ! empty( $val_pt ) ) {
				return $val_pt;
			}
		}
		return $default_pt;
	} else {
		if ( function_exists( 'get_field' ) ) {
			$val_en = get_field( $field_name );
			if ( ! empty( $val_en ) ) {
				return $val_en;
			}
		}
		return $default_en;
	}
}

/**
 * Echoes the translated string
 */
function frignanis_e( $en, $pt, $it = null, $fr = null, $es = null, $de = null ) {
	echo esc_html( frignanis_t( $en, $pt, $it, $fr, $es, $de ) );
}

/**
 * Echoes the translated attribute string (escaped for HTML attribute)
 */
function frignanis_attr_e( $en, $pt, $it = null, $fr = null, $es = null, $de = null ) {
	echo esc_attr( frignanis_t( $en, $pt, $it, $fr, $es, $de ) );
}
