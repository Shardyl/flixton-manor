<?php
/**
 * Our Team page.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow"><?php flixton_text( 'team_eyebrow', 'Our Team' ); ?></p>
    <h1><?php flixton_text( 'team_h1', 'The people who make it home' ); ?></h1>
    <p class="page-hero-sub"><?php flixton_text( 'team_intro', 'We believe our staff are the most important part of the home. In fact, they are the home: their work and energy provide the care, the atmosphere and the very essence of what Flixton Manor is.' ); ?></p>
  </div>
</section>

<section class="band">
  <div class="wrap">
    <div class="prose" style="margin-bottom:48px">
      <p><?php flixton_text( 'team_body1', 'We respect and value our staff and create a family-style working environment. After all, our care home is the home for all of our residents, and by having a family-like team we are able to create a caring and loving environment for them.' ); ?></p>
      <p><?php flixton_text( 'team_body2', 'We are proud to say that the majority of our staff have been with the home for over five years, and a group of staff members, including the deputy manager, have been with us for more than 20 years. This long-standing team works fantastically together and instinctively supports each other.' ); ?></p>
      <p><?php flixton_text( 'team_body3', 'We have very high standards when recruiting, because we know that only clever, caring and committed people should become part of the team. We keep a relaxed yet efficient environment where staff are free to laugh and enjoy themselves, so the home has a wonderful atmosphere and our residents get the very best.' ); ?></p>
    </div>
  </div>
</section>

<section class="band team" style="padding-top:0">
  <div class="wrap">
    <div class="team-grid">
      <?php
      $team = array(
        array( 't1', 'ASHLEIGH.jpg',      'Clare', 'Home Manager',          'Dedicated, caring and driven, Clare strives to provide a high quality of standards throughout the home.' ),
        array( 't2', 'LEKHA-MARLENE.jpg', 'Sue',   'Deputy Manager',        'A caring and dedicated deputy manager, Sue has been part of the Flixton Manor family for over 30 years.' ),
        array( 't3', 'MUM.jpg',           'Susan', 'Senior Carer',          'With a warm and caring personality, Susan&rsquo;s heart is invested in our residents and the work she loves.' ),
        array( 't4', 'HAPPY-GROUP.jpg',   'Tina',  'Activities Co-ordinator','Tina makes sure our residents are as involved as they wish to be in all the daily games, quizzes and chat sessions.' ),
      );
      foreach ( $team as $m ) {
        $k = $m[0];
        $img = sc_img( 'team_' . $k . '_img' ) ? sc_img( 'team_' . $k . '_img' ) : flixton_asset( 'img/' . $m[1] );
        echo '<div class="member"><div class="ph"><img src="' . esc_url( $img ) . '" alt="' . esc_attr( $m[2] ) . '"></div>';
        echo '<div class="bd"><h3>' . wp_kses_post( flixton_text_raw( 'team_' . $k . '_name', $m[2] ) ) . '</h3>';
        echo '<div class="role">' . wp_kses_post( flixton_text_raw( 'team_' . $k . '_role', $m[3] ) ) . '</div>';
        echo '<p>' . wp_kses_post( flixton_text_raw( 'team_' . $k . '_bio', $m[4] ) ) . '</p></div></div>';
      }
      ?>
    </div>
  </div>
</section>

<section class="band cta">
  <div class="wrap">
    <h2><?php flixton_text( 'team_cta_h2', 'Meet the team in person' ); ?></h2>
    <p><?php flixton_text( 'team_cta_p', 'Our home manager would be delighted to show you around and introduce you to the team. Call us any day between 9am and 9pm.' ); ?></p>
    <div class="btns">
      <?php $ph = preg_replace( '/[^0-9+]/', '', flixton_text_raw( 'site_phone', '0161 746 7175' ) ); ?>
      <a href="tel:<?php echo esc_attr( $ph ); ?>" class="btn btn-amber">Call <?php flixton_text( 'site_phone', '0161 746 7175' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-ghost" style="border-color:#fff;color:#fff">Arrange a Visit</a>
    </div>
  </div>
</section>
<?php
get_footer();
