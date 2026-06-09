<?php
/**
 * Legacy URL redirects.
 *
 * Blog post slugs are preserved 1:1, so they need no redirect. These cover the
 * old page-builder pages whose URLs changed in the rebuild, so any existing
 * inbound links / search results still land somewhere sensible (301).
 *
 * @package flixton-manor
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'template_redirect', function () {
	if ( is_admin() ) { return; }

	$path = trim( wp_parse_url( $_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH ) ?? '', '/' );
	if ( '' === $path ) { return; }

	// Exact-match legacy pages.
	$exact = array(
		'contacts-page' => '/contact/',
		'news-page'     => '/news/',
	);
	if ( isset( $exact[ $path ] ) ) {
		wp_safe_redirect( home_url( $exact[ $path ] ), 301 );
		exit;
	}

	// All old facility/service pages + their category archives now live under Our Care.
	if ( 0 === strpos( $path, 'my-product/' ) || 'my-product' === $path
		|| 0 === strpos( $path, 'my-product_category/' ) ) {
		wp_safe_redirect( home_url( '/our-care/' ), 301 );
		exit;
	}
} );
