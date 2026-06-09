<?php
/**
 * 404.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow">Page not found</p>
    <h1>We couldn&rsquo;t find that page</h1>
    <p class="page-hero-sub">The page you were looking for may have moved. Let&rsquo;s get you back home.</p>
    <p style="margin-top:18px"><a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">Back to homepage</a></p>
  </div>
</section>
<section class="band"></section>
<?php
get_footer();
