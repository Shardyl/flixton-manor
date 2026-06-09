<?php
/**
 * Front page (Homepage).
 *
 * All copy via flixton_text()/sc_text and all imagery via flixton_img()/sc_img,
 * so everything is editable in Sensa CMS (page slug: home / front page).
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>

<!-- HERO -->
<section class="hero">
  <div class="wrap hero-grid">
    <div>
      <p class="eyebrow"><?php flixton_text( 'home_hero_eyebrow', 'Nursing &amp; Residential Care &middot; Urmston, Manchester' ); ?></p>
      <h1><?php flixton_text( 'home_hero_h1', 'A warm, caring home' ); ?> <span><?php flixton_text( 'home_hero_h1_em', 'where life feels like home.' ); ?></span></h1>
      <p class="lead"><?php flixton_text( 'home_hero_lead', 'For over 25 years, Flixton Manor has been a family-run home offering compassionate nursing and residential care, just three minutes from the Trafford Centre. Our doors are always open.' ); ?></p>
      <div class="hero-cta">
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Arrange a Visit</a>
        <a href="<?php echo esc_url( home_url( '/our-care/' ) ); ?>" class="btn btn-ghost">Explore Our Care</a>
      </div>
      <div class="hero-trust">
        <div class="trust-item"><b><?php flixton_text( 'home_stat1_n', '25+' ); ?></b><small><?php flixton_text( 'home_stat1_l', 'Years caring' ); ?></small></div>
        <div class="trust-item"><b><?php flixton_text( 'home_stat2_n', '37' ); ?></b><small><?php flixton_text( 'home_stat2_l', 'Bedrooms' ); ?></small></div>
        <div class="trust-item"><b><?php flixton_text( 'home_stat3_n', '24/7' ); ?></b><small><?php flixton_text( 'home_stat3_l', 'Nursing on site' ); ?></small></div>
        <div class="trust-item"><b><?php flixton_text( 'home_stat4_n', 'Good' ); ?></b><small><?php flixton_text( 'home_stat4_l', 'CQC rated' ); ?></small></div>
      </div>
    </div>
    <div class="hero-media">
      <img src="<?php flixton_img( 'home_hero_img', 'tea-on-the-lawn.jpg' ); ?>" alt="A resident enjoying afternoon tea in the garden at Flixton Manor">
      <div class="cqc-badge">
        <div class="tick"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg></div>
        <div><b><?php flixton_text( 'home_cqc_title', 'Rated &lsquo;Good&rsquo;' ); ?></b><small><?php flixton_text( 'home_cqc_sub', 'Care Quality Commission' ); ?></small></div>
      </div>
    </div>
  </div>
</section>

<!-- ETHOS / ABOUT -->
<section class="band ethos" id="about">
  <div class="wrap ethos-grid">
    <div class="ethos-media">
      <img src="<?php flixton_img( 'home_ethos_img', 'the-flixton-manor-team.jpg' ); ?>" alt="The Flixton Manor care team outside the home">
      <div class="est"><b><?php flixton_text( 'home_est_n', '25' ); ?></b><span><?php flixton_text( 'home_est_l', 'Years of<br>care' ); ?></span></div>
    </div>
    <div>
      <p class="eyebrow"><?php flixton_text( 'home_ethos_eyebrow', 'The FM Care Ethos' ); ?></p>
      <h2><?php flixton_text( 'home_ethos_h2', 'Good care is simply about being caring.' ); ?></h2>
      <p><?php flixton_text( 'home_ethos_p1', 'Flixton Manor is a nursing and residential care home based in the heart of Trafford. We have been established for over 25 years and consider ourselves a unique and forward-thinking home in the Manchester area.' ); ?></p>
      <p><?php flixton_text( 'home_ethos_p2', 'FM Care is an ethos we live by. We believe in a common-sense approach to care we can be proud of: we treat all our residents, their families and each other the way we would like to be treated.' ); ?></p>
      <ul class="pill-list">
        <li><span class="dot"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg></span> <?php flixton_text( 'home_ethos_pill1', 'Family-run, with staff who have stayed for decades' ); ?></li>
        <li><span class="dot"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg></span> <?php flixton_text( 'home_ethos_pill2', 'Open visiting, with no pretences, any time' ); ?></li>
        <li><span class="dot"><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><path d="M20 6L9 17l-5-5"/></svg></span> <?php flixton_text( 'home_ethos_pill3', 'Just 3 minutes from the Trafford Centre' ); ?></li>
      </ul>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="band services" id="care">
  <div class="wrap">
    <div class="center">
      <p class="eyebrow"><?php flixton_text( 'home_care_eyebrow', 'Our Care' ); ?></p>
      <h2><?php flixton_text( 'home_care_h2', 'Personalised care for every need' ); ?></h2>
      <p style="color:var(--muted)"><?php flixton_text( 'home_care_intro', 'From around-the-clock nursing to gentle residential support, every aspect of life at Flixton Manor is built around the comfort, dignity and wellbeing of the people who live here.' ); ?></p>
    </div>
    <div class="svc-grid">
      <?php
      $services = array(
        array( 'nursing',    'NURSING-CARE-1200.jpg', 'Nursing Care',           'A highly experienced nursing team on hand 24 hours a day, with computerised care planning and faultless medication management.' ),
        array( 'residential','light-lounge-1.jpg',    'Residential Care',       'Comfortable, homely living for residents who value their independence, with help always close by whenever it is needed.' ),
        array( 'dementia',   'LAUGHING-MUM.jpg',      'Dementia Care',          'A calm, dementia-friendly environment built on patience, familiarity and the four pillars of comfort for those living with dementia.' ),
        array( 'dining',     'cottage-pie-1200.jpg',  'Dining &amp; Meals',     'Fresh, home-cooked food with a choice at every sitting, prepared by a cook who has been with us for over 20 years.' ),
        array( 'activities', 'HAPPY-GROUP.jpg',       'Activities &amp; Wellbeing', 'A full programme of games, quizzes, music and visitors, led by Tina, our in-house activities co-ordinator.' ),
        array( 'facilities', 'shower-room1.jpg',      'Comfort &amp; Facilities', 'A luxury wet room, state-of-the-art toileting, Aidcall nurse-call technology and free WiFi throughout the home.' ),
      );
      foreach ( $services as $s ) {
        $k = $s[0];
        echo '<article class="card"><div class="ph"><img src="' . esc_url( sc_img( 'home_svc_' . $k . '_img' ) ? sc_img( 'home_svc_' . $k . '_img' ) : flixton_asset( 'img/' . $s[1] ) ) . '" alt="' . esc_attr( wp_strip_all_tags( $s[2] ) ) . '"></div>';
        echo '<div class="bd"><h3>' . wp_kses_post( flixton_text_raw( 'home_svc_' . $k . '_h', $s[2] ) ) . '</h3>';
        echo '<p>' . wp_kses_post( flixton_text_raw( 'home_svc_' . $k . '_p', $s[3] ) ) . '</p></div></article>';
      }
      ?>
    </div>
  </div>
</section>

<!-- WHY CHOOSE -->
<section class="band why">
  <div class="wrap">
    <div class="center">
      <p class="eyebrow" style="color:var(--amber)"><?php flixton_text( 'home_why_eyebrow', 'Why Families Choose Us' ); ?></p>
      <h2><?php flixton_text( 'home_why_h2', 'Peace of mind for the whole family' ); ?></h2>
      <p><?php flixton_text( 'home_why_intro', 'Choosing a care home is one of the most important decisions a family can make. Here is why families across Trafford trust Flixton Manor.' ); ?></p>
    </div>
    <div class="why-grid">
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7l-1-1.1a5.5 5.5 0 1 0-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8z"/></svg></div><h3><?php flixton_text( 'home_why1_h', 'Genuine warmth' ); ?></h3><p><?php flixton_text( 'home_why1_p', 'A home where residents, families and staff are treated like one extended family.' ); ?></p></div>
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l8 4v6c0 5-3.5 8-8 10-4.5-2-8-5-8-10V6z"/><path d="M9 12l2 2 4-4"/></svg></div><h3><?php flixton_text( 'home_why2_h', 'CQC &lsquo;Good&rsquo;' ); ?></h3><p><?php flixton_text( 'home_why2_p', 'Independently inspected and rated Good by the Care Quality Commission.' ); ?></p></div>
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.5-6 8-6s8 2 8 6"/></svg></div><h3><?php flixton_text( 'home_why3_h', 'Experienced team' ); ?></h3><p><?php flixton_text( 'home_why3_p', 'Long-serving carers and nurses, many with us for 20 or 30 years.' ); ?></p></div>
      <div class="why-card"><div class="ic"><svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><path d="M9 22V12h6v10"/></svg></div><h3><?php flixton_text( 'home_why4_h', 'A real home' ); ?></h3><p><?php flixton_text( 'home_why4_p', 'Bright lounges, a sunny conservatory and gardens, kept fresh and welcoming.' ); ?></p></div>
    </div>
  </div>
</section>

<!-- GALLERY -->
<section class="band gallery" id="life">
  <div class="wrap">
    <div class="center">
      <p class="eyebrow"><?php flixton_text( 'home_gal_eyebrow', 'Daily Life' ); ?></p>
      <h2><?php flixton_text( 'home_gal_h2', 'A glimpse of life at Flixton Manor' ); ?></h2>
      <p style="color:var(--muted)"><?php flixton_text( 'home_gal_intro', 'Light, airy rooms, good company and plenty going on. Take a look around our home.' ); ?></p>
    </div>
    <?php
    $gal_defaults = array(
      flixton_asset( 'img/lounge-8.jpg' ),
      flixton_asset( 'img/HAPPY-FAMILY.jpg' ),
      flixton_asset( 'img/light-lounge-2.jpg' ),
      flixton_asset( 'img/WINDOW-SILL.jpg' ),
      flixton_asset( 'img/LAUGHING.jpg' ),
      flixton_asset( 'img/light-lounge-3.jpg' ),
      flixton_asset( 'img/PIANIST.jpg' ),
      flixton_asset( 'img/WINE-AND-SUN.jpg' ),
      flixton_asset( 'img/HAPPY-GROUP.jpg' ),
    );
    $gal = sensa_photos( 'home_gallery', $gal_defaults );
    echo '<div class="gal-grid">';
    foreach ( $gal as $i => $src ) {
      $cls = ( 0 === $i ) ? ' class="big"' : '';
      echo '<img' . $cls . ' src="' . esc_url( $src ) . '" alt="Life at Flixton Manor">';
    }
    echo '</div>';
    ?>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="band testi">
  <div class="wrap">
    <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
    <p class="q"><?php flixton_text( 'home_testi_q', '&ldquo;Thank you to all the staff for making Dorothy&rsquo;s 100th birthday so special. The buffet, cake, decorations and entertainment were all brilliant. All the family were thrilled, and delighted to see Dorothy looking so well. Well done everyone!&rdquo;' ); ?></p>
    <p class="by">&mdash; <?php flixton_text( 'home_testi_by', 'Wendy, daughter of a resident' ); ?></p>
  </div>
</section>

<!-- TEAM -->
<section class="band team" id="team">
  <div class="wrap">
    <div class="center">
      <p class="eyebrow"><?php flixton_text( 'home_team_eyebrow', 'Meet the Team' ); ?></p>
      <h2><?php flixton_text( 'home_team_h2', 'The people who make it home' ); ?></h2>
      <p style="color:var(--muted)"><?php flixton_text( 'home_team_intro', 'Our team is the heart of Flixton Manor, many of whom have cared for our residents for decades.' ); ?></p>
    </div>
    <div class="team-grid">
      <?php
      $team = array(
        array( 'm1', 'ASHLEIGH.jpg',      'Clare', 'Home Manager',   'Dedicated, caring and driven, Clare strives to provide a high quality of standards throughout the home.' ),
        array( 'm2', 'LEKHA-MARLENE.jpg', 'Sue',   'Deputy Manager', 'A caring and dedicated deputy manager, Sue has been part of the Flixton Manor family for over 30 years.' ),
        array( 'm3', 'MUM.jpg',           'Susan', 'Senior Carer',   'With a warm and caring personality, Susan&rsquo;s heart is invested in our residents and the work she loves.' ),
      );
      foreach ( $team as $m ) {
        $k = $m[0];
        echo '<div class="member"><div class="ph"><img src="' . esc_url( sc_img( 'home_' . $k . '_img' ) ? sc_img( 'home_' . $k . '_img' ) : flixton_asset( 'img/' . $m[1] ) ) . '" alt="' . esc_attr( $m[2] ) . '"></div>';
        echo '<div class="bd"><h3>' . wp_kses_post( flixton_text_raw( 'home_' . $k . '_name', $m[2] ) ) . '</h3>';
        echo '<div class="role">' . wp_kses_post( flixton_text_raw( 'home_' . $k . '_role', $m[3] ) ) . '</div>';
        echo '<p>' . wp_kses_post( flixton_text_raw( 'home_' . $k . '_bio', $m[4] ) ) . '</p></div></div>';
      }
      ?>
    </div>
  </div>
</section>

<!-- NEWS (dynamic: latest posts) -->
<section class="band news" id="news">
  <div class="wrap">
    <div class="center">
      <p class="eyebrow"><?php flixton_text( 'home_news_eyebrow', 'Latest News' ); ?></p>
      <h2><?php flixton_text( 'home_news_h2', 'What&rsquo;s happening at the Manor' ); ?></h2>
    </div>
    <div class="news-grid">
      <?php
      $q = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3, 'ignore_sticky_posts' => true ) );
      if ( $q->have_posts() ) :
        while ( $q->have_posts() ) : $q->the_post();
          $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
          if ( ! $thumb ) { $thumb = flixton_asset( 'img/SEPT-13-INSPECTION-WEB-COMPRESSED.jpg' ); }
          ?>
          <article class="post"><div class="ph"><img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>"></div>
            <div class="bd"><div class="date"><?php echo esc_html( get_the_date( 'F Y' ) ); ?></div>
              <h3><?php the_title(); ?></h3>
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
              <a class="more" href="<?php the_permalink(); ?>">Read more &rarr;</a>
            </div>
          </article>
          <?php
        endwhile;
        wp_reset_postdata();
      else :
        // Fallback before posts are imported.
        $fallback = array(
          array( 'SEPT-13-INSPECTION-WEB-COMPRESSED.jpg', 'November 2024', 'Good Rating at our CQC Inspection', 'Following our December 2023 inspection, Flixton Manor has been rated Good by the Care Quality Commission.' ),
          array( 'manchester-retirement-home.jpg', 'June 2024', 'Top 5 things to do in retirement', 'Retirement is a time to take stock of all you have achieved, and to enjoy the things you love.' ),
          array( 'HAPPY-GROUP.jpg', 'March 2024', 'An adventure to Knowsley Safari Park', 'Our residents enjoyed a wonderful day out at Knowsley Safari Park in the spring sunshine.' ),
        );
        foreach ( $fallback as $p ) {
          echo '<article class="post"><div class="ph"><img src="' . esc_url( flixton_asset( 'img/' . $p[0] ) ) . '" alt="' . esc_attr( $p[2] ) . '"></div>';
          echo '<div class="bd"><div class="date">' . esc_html( $p[1] ) . '</div><h3>' . esc_html( $p[2] ) . '</h3><p>' . esc_html( $p[3] ) . '</p></div></article>';
        }
      endif;
      ?>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="band cta">
  <div class="wrap">
    <h2><?php flixton_text( 'home_cta_h2', 'Come and see our home for yourself' ); ?></h2>
    <p><?php flixton_text( 'home_cta_p', 'Our doors are always open. Call us for an informal chat, or arrange a visit with our home manager who&rsquo;ll be delighted to show you around and answer all your questions.' ); ?></p>
    <div class="btns">
      <?php $ph = preg_replace( '/[^0-9+]/', '', flixton_text_raw( 'site_phone', '0161 746 7175' ) ); ?>
      <a href="tel:<?php echo esc_attr( $ph ); ?>" class="btn btn-amber">Call <?php flixton_text( 'site_phone', '0161 746 7175' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-ghost" style="border-color:#fff;color:#fff">Send an Enquiry</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
