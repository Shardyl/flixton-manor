<?php
/**
 * Flixton Manor — small template helpers.
 *
 * @package flixton-manor
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

/** Absolute URL to a file in the theme's assets folder. */
function flixton_asset( $path ) {
	return get_stylesheet_directory_uri() . '/assets/' . ltrim( $path, '/' );
}

/** Echo an editable image URL, falling back to a theme asset default. */
function flixton_img( $key, $asset_default ) {
	$url = sc_img( $key );
	if ( ! $url ) {
		$url = flixton_asset( 'img/' . $asset_default );
	}
	echo esc_url( $url );
}

/** Echo editable text, falling back to a coded default. */
function flixton_text( $key, $default = '' ) {
	$val = sc_text( $key );
	echo wp_kses_post( $val !== '' ? $val : $default );
}

/** Return editable text (no echo). */
function flixton_text_raw( $key, $default = '' ) {
	$val = sc_text( $key );
	return $val !== '' ? $val : $default;
}

/**
 * Primary navigation. Uses the assigned WP menu if present, otherwise a sensible
 * default pointing at the site's main pages/anchors.
 */
function flixton_primary_nav() {
	if ( has_nav_menu( 'primary' ) ) {
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'container'      => false,
			'menu_class'     => 'menu',
			'menu_id'        => 'menu',
			'fallback_cb'    => false,
		) );
		return;
	}
	$home = home_url( '/' );
	$items = array(
		'About'    => $home . 'about/',
		'Our Care' => $home . 'our-care/',
		'Daily Life' => $home . '#life',
		'Our Team' => $home . 'our-team/',
		'News'     => $home . 'news/',
		'Contact'  => $home . 'contact/',
	);
	echo '<nav class="menu" id="menu">';
	foreach ( $items as $label => $url ) {
		echo '<a href="' . esc_url( $url ) . '">' . esc_html( $label ) . '</a>';
	}
	echo '</nav>';
}
