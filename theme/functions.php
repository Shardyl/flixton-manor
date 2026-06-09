<?php
/**
 * Flixton Manor theme — bootstrap.
 *
 * Kadence child theme. Bespoke code templates render the design; all editable
 * content runs through the Sensa CMS plugin (sc_text / sc_img / sensa_photos).
 *
 * @package flixton-manor
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'FLIXTON_VERSION', '0.2.0' );

/* ---------------------------------------------------------------------------
 * Theme setup
 * ------------------------------------------------------------------------- */
add_action( 'after_setup_theme', function () {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'automatic-feed-links' );
	register_nav_menus( array(
		'primary' => 'Primary Menu',
		'footer'  => 'Footer Menu',
	) );
} );

/* ---------------------------------------------------------------------------
 * Includes
 * ------------------------------------------------------------------------- */
require get_stylesheet_directory() . '/inc/enqueue.php';
require get_stylesheet_directory() . '/inc/cms-config.php';
require get_stylesheet_directory() . '/inc/helpers.php';
require get_stylesheet_directory() . '/inc/contact-form.php';

/* ---------------------------------------------------------------------------
 * Graceful fallbacks if the Sensa CMS plugin is not active yet.
 * (So templates never fatal during first deploy / plugin install.)
 * ------------------------------------------------------------------------- */
if ( ! function_exists( 'sc_text' ) ) {
	function sc_text( $key ) { return apply_filters( 'flixton_default_text', '', $key ); }
}
if ( ! function_exists( 'sc_img' ) ) {
	function sc_img( $key ) { return apply_filters( 'flixton_default_img', '', $key ); }
}
if ( ! function_exists( 'sensa_photos' ) ) {
	function sensa_photos( $slug, $default = array() ) { return $default; }
}
