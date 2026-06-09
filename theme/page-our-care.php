<?php
/**
 * Our Care — services hub.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow"><?php flixton_text( 'care_eyebrow', 'Our Care' ); ?></p>
    <h1><?php flixton_text( 'care_h1', 'Care shaped around the person' ); ?></h1>
    <p class="page-hero-sub"><?php flixton_text( 'care_intro', 'From around-the-clock nursing to gentle residential and dementia support, every aspect of life at Flixton Manor is built around the comfort, dignity and wellbeing of the people who live here.' ); ?></p>
  </div>
</section>

<!-- Care types -->
<section class="band services">
  <div class="wrap">
    <div class="svc-grid">
      <article class="card"><div class="ph"><img src="<?php flixton_img( 'care_nursing_img', 'NURSING-CARE-1200.jpg' ); ?>" alt="Nursing care"></div><div class="bd"><h3><?php flixton_text( 'care_nursing_h', 'Nursing Care' ); ?></h3><p><?php flixton_text( 'care_nursing_p', 'We keep medical practice in the background so residents can focus on wellness. A highly experienced nursing team is on hand 24 hours a day, using computerised care planning and medication systems for robust monitoring and faultless care. Our nurses have great relationships with local GPs to put residents&rsquo; needs first.' ); ?></p></div></article>
      <article class="card"><div class="ph"><img src="<?php flixton_img( 'care_residential_img', 'light-lounge-1.jpg' ); ?>" alt="Residential care"></div><div class="bd"><h3><?php flixton_text( 'care_residential_h', 'Residential Care' ); ?></h3><p><?php flixton_text( 'care_residential_p', 'Comfortable, homely living for residents who value their independence, with warm support always close by whenever it is needed, day or night.' ); ?></p></div></article>
      <article class="card"><div class="ph"><img src="<?php flixton_img( 'care_dementia_img', 'LAUGHING-MUM.jpg' ); ?>" alt="Dementia care"></div><div class="bd"><h3><?php flixton_text( 'care_dementia_h', 'Dementia Care' ); ?></h3><p><?php flixton_text( 'care_dementia_p', 'A calm, dementia-friendly environment built on patience, familiarity and the four pillars of comfort, helping residents living with dementia feel safe, settled and understood.' ); ?></p></div></article>
    </div>
  </div>
</section>

<!-- Detail rows -->
<section class="band ethos">
  <div class="wrap">
    <?php
    $rows = array(
      array( 'beds',   'WINDOW-BED.jpg',  'Comfortable Bedrooms', 'We have 37 bedrooms in a range of sizes, some en-suite for fully independent residents and larger rooms for married couples. We keep the decor minimal so residents can personalise and decorate their rooms, and we arrange repainting or wallpapering to their requirements. Televisions are available, Sky and personal phone lines can be arranged, and the entire home has free WiFi.' ),
      array( 'pers',   'WINDOW-SILL.jpg', 'Personalised Rooms',   'We know Flixton Manor is truly home for our residents, so we always encourage them to personalise their rooms. We help families keep things just the way mum or dad would like them, arranging decorators and handymen to paint rooms and put up shelves and pictures wherever needed.' ),
      array( 'day',    'lounge-8.jpg',    'Light, Airy Day Rooms','Our day rooms are light, airy and spacious, with a large conservatory that fills the home with sunshine. We keep everywhere clean, fresh and welcoming, with carpets shampooed weekly. We even surveyed residents&rsquo; favourite colours before our last refurbishment, and decorated accordingly.' ),
      array( 'meals',  'cottage-pie-1200.jpg', 'Home-Cooked Meals','We provide a choice of at least two freshly prepared meals at every sitting, using fresh vegetables and fruit daily. Many residents love traditional English meals, and we happily cater for all tastes and dietary needs, including softened meals for those with swallowing difficulties. Our cook has been with us for over 20 years.' ),
      array( 'act',    'HAPPY-GROUP.jpg', 'Activities &amp; Wellbeing', 'We do our very best to keep residents happy and engaged, with games, quizzes and chat sessions plus visits from schools, church choirs and professional entertainers. Tina, our in-house activities co-ordinator, makes sure everyone can be as involved as they wish, and we go out of our way to meet residents&rsquo; and families&rsquo; requests.' ),
      array( 'facil',  'AIDCALL-1200.jpg','Modern Facilities &amp; Technology', 'We have spared no expense on comfort: a luxury wet room with soft ambient lighting for relaxing, easy showering; a state-of-the-art self-cleaning toilet in a hotel-style room for hygienic, dignified care; and the Aidcall nurse-call system that lets us respond quickly and log response times, so residents rarely wait more than a couple of minutes for assistance.' ),
    );
    foreach ( $rows as $i => $r ) {
      $k = $r[0];
      $img = sc_img( 'care_' . $k . '_img' ) ? sc_img( 'care_' . $k . '_img' ) : flixton_asset( 'img/' . $r[1] );
      $rev = ( $i % 2 === 1 ) ? ' care-row--rev' : '';
      echo '<div class="care-row' . $rev . '">';
      echo '<div class="care-row__media"><img src="' . esc_url( $img ) . '" alt="' . esc_attr( wp_strip_all_tags( $r[2] ) ) . '"></div>';
      echo '<div class="care-row__body"><h2>' . wp_kses_post( flixton_text_raw( 'care_' . $k . '_h', $r[2] ) ) . '</h2>';
      echo '<p>' . wp_kses_post( flixton_text_raw( 'care_' . $k . '_p', $r[3] ) ) . '</p></div>';
      echo '</div>';
    }
    ?>
  </div>
</section>

<section class="band cta">
  <div class="wrap">
    <h2><?php flixton_text( 'care_cta_h2', 'Could Flixton Manor be the right home?' ); ?></h2>
    <p><?php flixton_text( 'care_cta_p', 'Every resident is different. Call us for an informal chat about your needs, or arrange a visit to see our care for yourself.' ); ?></p>
    <div class="btns">
      <?php $ph = preg_replace( '/[^0-9+]/', '', flixton_text_raw( 'site_phone', '0161 746 7175' ) ); ?>
      <a href="tel:<?php echo esc_attr( $ph ); ?>" class="btn btn-amber">Call <?php flixton_text( 'site_phone', '0161 746 7175' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-ghost" style="border-color:#fff;color:#fff">Arrange a Visit</a>
    </div>
  </div>
</section>
<?php
get_footer();
