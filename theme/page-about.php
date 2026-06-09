<?php
/**
 * About page.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow"><?php flixton_text( 'about_eyebrow', 'About Flixton Manor' ); ?></p>
    <h1><?php flixton_text( 'about_h1', 'A home built on genuine care' ); ?></h1>
    <p class="page-hero-sub"><?php flixton_text( 'about_intro', 'For over 25 years, Flixton Manor has cared for the people of Trafford and Greater Manchester with warmth, dignity and a true sense of family.' ); ?></p>
  </div>
</section>

<section class="band ethos">
  <div class="wrap ethos-grid">
    <div class="ethos-media">
      <img src="<?php flixton_img( 'about_img', 'the-flixton-manor-team.jpg' ); ?>" alt="The Flixton Manor team">
      <div class="est"><b><?php flixton_text( 'about_est_n', '25' ); ?></b><span><?php flixton_text( 'about_est_l', 'Years of<br>care' ); ?></span></div>
    </div>
    <div>
      <p class="eyebrow"><?php flixton_text( 'about_story_eyebrow', 'The FM Care Ethos' ); ?></p>
      <h2><?php flixton_text( 'about_story_h2', 'Good care is simply about being caring.' ); ?></h2>
      <p><?php flixton_text( 'about_story_p1', 'Flixton Manor is a nursing and residential care home in the heart of Trafford, around three minutes from the Trafford Centre. We have been established for over 25 years and consider ourselves a unique and forward-thinking home in the Manchester area.' ); ?></p>
      <p><?php flixton_text( 'about_story_p2', 'FM Care is an ethos we live by. We believe in a common-sense approach to care we can be proud of: we treat all our residents, their families and each other the way we would like to be treated. We listen, and we do everything we can to make sure everyone is as happy as can be.' ); ?></p>
      <p><?php flixton_text( 'about_story_p3', 'Our doors are always open for visiting, so you can see our home with no pretences. If you would like to be shown around by the home manager, please call to make an appointment and she will be happy to answer all of your questions.' ); ?></p>
    </div>
  </div>
</section>

<section class="band why">
  <div class="wrap">
    <div class="center">
      <p class="eyebrow" style="color:var(--amber)"><?php flixton_text( 'about_why_eyebrow', 'Our Values' ); ?></p>
      <h2><?php flixton_text( 'about_why_h2', 'What matters to us' ); ?></h2>
    </div>
    <div class="why-grid">
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 1 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/></svg></div><h3><?php flixton_text( 'about_v1_h', 'Compassion' ); ?></h3><p><?php flixton_text( 'about_v1_p', 'Kindness in every interaction, every day.' ); ?></p></div>
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg></div><h3><?php flixton_text( 'about_v2_h', 'Dignity' ); ?></h3><p><?php flixton_text( 'about_v2_p', 'Respecting every resident as an individual.' ); ?></p></div>
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.5-6 8-6s8 2 8 6"/></svg></div><h3><?php flixton_text( 'about_v3_h', 'Family' ); ?></h3><p><?php flixton_text( 'about_v3_p', 'A warm, family-style home for everyone in it.' ); ?></p></div>
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3><?php flixton_text( 'about_v4_h', 'Quality' ); ?></h3><p><?php flixton_text( 'about_v4_p', 'High standards, independently rated Good.' ); ?></p></div>
    </div>
  </div>
</section>

<section class="band cta">
  <div class="wrap">
    <h2><?php flixton_text( 'about_cta_h2', 'Come and see for yourself' ); ?></h2>
    <p><?php flixton_text( 'about_cta_p', 'The best way to get a feel for Flixton Manor is to visit. Call us for an informal chat or to arrange a look around.' ); ?></p>
    <div class="btns">
      <?php $ph = preg_replace( '/[^0-9+]/', '', flixton_text_raw( 'site_phone', '0161 746 7175' ) ); ?>
      <a href="tel:<?php echo esc_attr( $ph ); ?>" class="btn btn-amber">Call <?php flixton_text( 'site_phone', '0161 746 7175' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-ghost" style="border-color:#fff;color:#fff">Arrange a Visit</a>
    </div>
  </div>
</section>
<?php
get_footer();
