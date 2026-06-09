<?php
/**
 * Header — top bar + sticky nav.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="<?php echo esc_url( flixton_asset( 'img/fm-favicon.jpg' ) ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php
$phone      = flixton_text_raw( 'site_phone', '0161 746 7175' );
$phone_link = preg_replace( '/[^0-9+]/', '', $phone );
$address    = flixton_text_raw( 'site_address', '2-8 Delamere Road, Flixton, Urmston, Manchester, M41 5QL' );
$hours      = flixton_text_raw( 'site_hours', 'Open 7 days, 9am - 9pm' );
?>

<!-- TOP BAR -->
<div class="topbar"><div class="wrap">
  <div><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#eaf4f4" stroke-width="2"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg><?php echo esc_html( $address ); ?></div>
  <div class="tb-r">
    <span><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#eaf4f4" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg><a href="tel:<?php echo esc_attr( $phone_link ); ?>"><b><?php echo esc_html( $phone ); ?></b></a></span>
    <span><svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#eaf4f4" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/></svg><?php echo esc_html( $hours ); ?></span>
  </div>
</div></div>

<!-- HEADER -->
<header>
  <div class="wrap nav">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><img src="<?php flixton_img( 'logo', 'main-logo-blue-300-trans.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"></a>
    <?php flixton_primary_nav(); ?>
    <div class="nav-cta">
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-amber">Arrange a Visit</a>
    </div>
    <button class="burger" aria-label="Menu">
      <svg width="28" height="28" viewBox="0 0 24 24" stroke="#0d3b42" stroke-width="2" fill="none"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
    </button>
  </div>
</header>
