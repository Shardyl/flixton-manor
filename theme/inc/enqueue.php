<?php
/**
 * Flixton Manor — assets.
 *
 * @package flixton-manor
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_action( 'wp_enqueue_scripts', function () {
	// Google Fonts: Fraunces (display) + Mulish (body).
	wp_enqueue_style(
		'flixton-fonts',
		'https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;1,9..144,400&family=Mulish:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	// Main stylesheet.
	wp_enqueue_style(
		'flixton-main',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array( 'flixton-fonts' ),
		FLIXTON_VERSION
	);

	// Tiny front-end script (mobile menu toggle + gallery lightbox).
	wp_enqueue_script(
		'flixton-main',
		get_stylesheet_directory_uri() . '/assets/js/main.js',
		array(),
		FLIXTON_VERSION,
		true
	);
}, 20 );

// Do NOT load the Kadence parent's heavy global stylesheet — our design is self-contained.
add_action( 'wp_enqueue_scripts', function () {
	wp_dequeue_style( 'kadence-global' );
}, 99 );
