<?php
/**
 * Frignani's SVG Icon Helper Library
 *
 * Provides crisp, scalable, accessible SVG icons (based on Lucide / Feather icon standards)
 * and micro-flag vectors to eliminate emojis and maintain luxury maison visual standards.
 *
 * @package Frignanis
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Returns SVG markup for a given icon name.
 *
 * @param string $name       Icon name (e.g., 'download', 'landmark', 'ship', 'waves', 'folder', 'phone', 'mail', 'map-pin', 'instagram', 'building').
 * @param int    $size       Width/height in pixels. Default 20.
 * @param string $class_name Additional CSS class names.
 * @return string Safe SVG markup.
 */
function frignanis_get_icon( $name, $size = 20, $class_name = '' ) {
	$size       = absint( $size );
	$class_attr = 'icon-svg' . ( $class_name ? ' ' . esc_attr( $class_name ) : '' );

	$icons = array(
		'download'   => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" x2="12" y1="15" y2="3"/></svg>',
		'folder'     => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 20h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-7.93a2 2 0 0 1-1.66-.9l-.82-1.2A2 2 0 0 0 7.93 3H4a2 2 0 0 0-2 2v13c0 1.1.9 2 2 2Z"/></svg>',
		'landmark'   => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="3" x2="21" y1="22" y2="22"/><line x1="6" x2="6" y1="18"/><line x1="10" x2="10" y1="18"/><line x1="14" x2="14" y1="18"/><line x1="18" x2="18" y1="18"/><polygon points="12 2 20 7 4 7"/><line x1="4" x2="20" y1="11" y2="11"/></svg>',
		'ship'       => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 21c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M19.38 20A11.6 11.6 0 0 0 21 14l-9-4-9 4c0 2.9.94 5.34 2.81 7.76"/><path d="M19 13V7a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v6"/><line x1="12" x2="12" y1="1" y2="10"/></svg>',
		'waves'      => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M2 6c.6.5 1.2 1 2.5 1C7 7 7 5 9.5 5c1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 12c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/><path d="M2 18c.6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1 .6.5 1.2 1 2.5 1 2.5 0 2.5-2 5-2 1.3 0 1.9.5 2.5 1"/></svg>',
		'phone'      => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
		'mail'       => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>',
		'map-pin'    => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>',
		'instagram'  => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>',
		'building'   => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"/><path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"/><path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"/><path d="M10 6h4"/><path d="M10 10h4"/><path d="M10 14h4"/><path d="M10 18h4"/></svg>',
		'globe'      => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><circle cx="12" cy="12" r="10"/><line x1="2" x2="22" y1="12" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>',
		'arrow-right'=> '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>',
		'check'      => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><polyline points="20 6 9 17 4 12"/></svg>',
		'file-text'  => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>',
		'sparkles'   => '<svg class="' . $class_attr . '" width="' . $size . '" height="' . $size . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m12 3-1.9 5.8a2 2 0 0 1-1.3 1.3L3 12l5.8 1.9a2 2 0 0 1 1.3 1.3L12 21l1.9-5.8a2 2 0 0 1 1.3-1.3L21 12l-5.8-1.9a2 2 0 0 1-1.3-1.3Z"/></svg>',
	);

	return isset( $icons[ $name ] ) ? $icons[ $name ] : '';
}

/**
 * Echoes SVG markup for a given icon name.
 *
 * @param string $name       Icon name.
 * @param int    $size       Width/height in pixels. Default 20.
 * @param string $class_name Additional CSS class names.
 */
function frignanis_icon( $name, $size = 20, $class_name = '' ) {
	echo frignanis_get_icon( $name, $size, $class_name ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}

/**
 * Returns micro SVG flag markup for international country chips.
 *
 * @param string $code       Country ISO code ('lu', 'be', 'de', 'es', 'nl', 'us', 'br', 'cl', 'co').
 * @param int    $width      Width in pixels. Default 18.
 * @param int    $height     Height in pixels. Default 12.
 * @param string $class_name Additional CSS class names.
 * @return string Safe SVG markup.
 */
function frignanis_get_flag( $code, $width = 18, $height = 12, $class_name = '' ) {
	$code       = strtolower( trim( $code ) );
	$class_attr = 'flag-svg' . ( $class_name ? ' ' . esc_attr( $class_name ) : '' );
	$w          = absint( $width );
	$h          = absint( $height );

	$flags = array(
		'lu' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="4" fill="#ED2939"/><rect y="4" width="18" height="4" fill="#FFFFFF"/><rect y="8" width="18" height="4" fill="#00A1DE"/></svg>',
		'be' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="6" height="12" fill="#000000"/><rect x="6" width="6" height="12" fill="#FDDA24"/><rect x="12" width="6" height="12" fill="#EF3340"/></svg>',
		'de' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="4" fill="#000000"/><rect y="4" width="18" height="4" fill="#DD0000"/><rect y="8" width="18" height="4" fill="#FFCE00"/></svg>',
		'es' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="3" fill="#AA151B"/><rect y="3" width="18" height="6" fill="#F1BF00"/><rect y="9" width="18" height="3" fill="#AA151B"/></svg>',
		'nl' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="4" fill="#AE1C28"/><rect y="4" width="18" height="4" fill="#FFFFFF"/><rect y="8" width="18" height="4" fill="#21468B"/></svg>',
		'us' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="12" fill="#B22234"/><rect y="2" width="18" height="2" fill="#FFFFFF"/><rect y="6" width="18" height="2" fill="#FFFFFF"/><rect y="10" width="18" height="2" fill="#FFFFFF"/><rect width="8" height="7" fill="#3C3B6E"/></svg>',
		'br' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="12" fill="#009B3A"/><polygon points="9 1.5 16.5 6 9 10.5 1.5 6" fill="#FEDF00"/><circle cx="9" cy="6" r="2.4" fill="#002776"/></svg>',
		'cl' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="6" fill="#FFFFFF"/><rect y="6" width="18" height="6" fill="#D52B1E"/><rect width="6" height="6" fill="#0039A6"/><polygon points="3 1.5 3.5 2.8 4.8 2.8 3.8 3.6 4.2 4.9 3 4.1 1.8 4.9 2.2 3.6 1.2 2.8 2.5 2.8" fill="#FFFFFF"/></svg>',
		'co' => '<svg class="' . $class_attr . '" width="' . $w . '" height="' . $h . '" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" style="border-radius:2px;box-shadow:0 0 1px rgba(0,0,0,0.4);vertical-align:middle;"><rect width="18" height="6" fill="#FCD116"/><rect y="6" width="18" height="3" fill="#003893"/><rect y="9" width="18" height="3" fill="#CE1126"/></svg>',
	);

	return isset( $flags[ $code ] ) ? $flags[ $code ] : '';
}

/**
 * Echoes micro SVG flag markup for international country chips.
 *
 * @param string $code       Country ISO code.
 * @param int    $width      Width in pixels. Default 18.
 * @param int    $height     Height in pixels. Default 12.
 * @param string $class_name Additional CSS class names.
 */
function frignanis_flag( $code, $width = 18, $height = 12, $class_name = '' ) {
	echo frignanis_get_flag( $code, $width, $height, $class_name ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
}
