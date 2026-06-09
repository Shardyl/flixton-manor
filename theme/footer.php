<?php
/**
 * Footer.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

$phone      = flixton_text_raw( 'site_phone', '0161 746 7175' );
$phone_link = preg_replace( '/[^0-9+]/', '', $phone );
$email      = flixton_text_raw( 'site_email', 'enquiries@flixtonmanor.com' );
$hours      = flixton_text_raw( 'site_hours', 'Open 7 days, 9am - 9pm' );
$year       = date( 'Y' );
?>
<footer>
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <img class="foot-logo" src="<?php flixton_img( 'logo', 'main-logo-blue-300-trans.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
        <p style="max-width:30rem"><?php flixton_text( 'footer_blurb', 'A family-run nursing and residential care home in Flixton, Urmston, caring for the people of Trafford and Greater Manchester for over 25 years.' ); ?></p>
      </div>
      <div>
        <h4>Explore</h4>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a>
        <a href="<?php echo esc_url( home_url( '/our-care/' ) ); ?>">Our Care</a>
        <a href="<?php echo esc_url( home_url( '/our-team/' ) ); ?>">Our Team</a>
        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">News</a>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
      </div>
      <div>
        <h4>Contact</h4>
        <a href="https://maps.google.com/?q=Flixton+Manor+M41+5QL" target="_blank" rel="noopener"><?php echo esc_html( flixton_text_raw( 'site_address', '2-8 Delamere Road, Flixton, Urmston, M41 5QL' ) ); ?></a>
        <a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a>
        <a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
        <a><?php echo esc_html( $hours ); ?></a>
      </div>
    </div>
    <div class="foot-bottom">
      <span>&copy; <?php echo esc_html( $year ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>. All rights reserved.</span>
      <span>Rated &lsquo;Good&rsquo; by the Care Quality Commission</span>
    </div>
  </div>
</footer>

<!-- LIGHTBOX -->
<div class="lb" id="lb"><span class="x">&times;</span><img id="lbimg" src="" alt=""></div>

<?php wp_footer(); ?>
</body>
</html>
