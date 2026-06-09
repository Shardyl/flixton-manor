<?php
/**
 * Contact / enquiry form handler — Flixton Manor.
 *
 * Public REST endpoint the contact form posts to (no nonce: pages are page-cached).
 * Honeypot + validation + per-IP rate limit. Delivers via wp_mail() (routed through
 * Google Workspace SMTP by the WP Mail SMTP plugin).
 *
 * Recipient: the `flixton_enquiry_to` option if set, else the default below.
 * Set it with: wp option update flixton_enquiry_to "inbox@example.com"
 *
 * @package flixton-manor
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

define( 'FLIXTON_ENQUIRY_DEFAULT', 'enquiries@flixtonmanor.com' );

function flixton_enquiry_to() {
	$opt = trim( (string) get_option( 'flixton_enquiry_to', '' ) );
	return ( $opt && is_email( $opt ) ) ? $opt : FLIXTON_ENQUIRY_DEFAULT;
}

add_action( 'rest_api_init', function () {
	register_rest_route( 'flixton/v1', '/enquiry', array(
		'methods'             => 'POST',
		'callback'            => 'flixton_handle_enquiry',
		'permission_callback' => '__return_true',
	) );
} );

function flixton_handle_enquiry( WP_REST_Request $req ) {
	$p = $req->get_json_params();
	if ( empty( $p ) ) { $p = $req->get_params(); }

	// Honeypot: real users never fill "company".
	if ( ! empty( $p['company'] ) ) {
		return new WP_REST_Response( array( 'ok' => true ), 200 );
	}

	$name    = sanitize_text_field( $p['name'] ?? '' );
	$contact = sanitize_text_field( $p['contact'] ?? '' );
	$email   = sanitize_email( $p['email'] ?? '' );
	$message = sanitize_textarea_field( $p['message'] ?? '' );

	// "contact" is a free field (phone or email); email is optional/explicit.
	if ( '' === $name || ( '' === $contact && ! is_email( $email ) ) ) {
		return new WP_REST_Response( array( 'ok' => false, 'error' => 'Please enter your name and a way to reach you.' ), 200 );
	}

	// Per-IP rate limit: 5 / 10 min.
	$ip  = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : '';
	$key = 'fm_enq_' . md5( $ip );
	$n   = (int) get_transient( $key );
	if ( $n >= 5 ) {
		return new WP_REST_Response( array( 'ok' => false, 'error' => 'Too many messages just now. Please call us on 0161 746 7175.' ), 200 );
	}
	set_transient( $key, $n + 1, 10 * MINUTE_IN_SECONDS );

	$to      = flixton_enquiry_to();
	$subject = 'New website enquiry from ' . $name . ' — Flixton Manor';
	$reply   = is_email( $email ) ? $email : ( is_email( $contact ) ? $contact : '' );

	$body = "New enquiry from the Flixton Manor website:\n\n"
		. 'Name:    ' . $name . "\n"
		. 'Contact: ' . ( '' !== $contact ? $contact : '—' ) . "\n"
		. 'Email:   ' . ( is_email( $email ) ? $email : '—' ) . "\n\n"
		. "Message:\n" . ( '' !== $message ? $message : '—' ) . "\n\n"
		. "—\n"
		. 'Time: ' . current_time( 'mysql' ) . "\n"
		. 'IP:   ' . $ip . "\n";

	$headers = array(
		'From: Flixton Manor Website <' . $to . '>',
		'Content-Type: text/plain; charset=UTF-8',
	);
	if ( $reply ) { $headers[] = 'Reply-To: ' . $name . ' <' . $reply . '>'; }

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( ! $sent ) {
		return new WP_REST_Response( array( 'ok' => false, 'error' => 'Sorry, sending failed. Please call us on 0161 746 7175.' ), 200 );
	}
	return new WP_REST_Response( array( 'ok' => true ), 200 );
}
