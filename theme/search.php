<?php
/**
 * Search results.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow">Search</p>
    <h1>Results for &ldquo;<?php echo esc_html( get_search_query() ); ?>&rdquo;</h1>
  </div>
</section>
<section class="band">
  <div class="wrap">
    <?php if ( have_posts() ) : ?>
      <div class="news-grid">
        <?php while ( have_posts() ) : the_post();
          $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
          if ( ! $thumb ) { $thumb = flixton_asset( 'img/the-flixton-manor-team.jpg' ); }
          ?>
          <article class="post"><a href="<?php the_permalink(); ?>"><div class="ph"><img src="<?php echo esc_url( $thumb ); ?>" alt="<?php the_title_attribute(); ?>"></div></a>
            <div class="bd"><div class="date"><?php echo esc_html( get_the_date( 'F Y' ) ); ?></div>
              <h3><a href="<?php the_permalink(); ?>" style="color:inherit"><?php the_title(); ?></a></h3>
              <p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <p class="prose">No results found. Please try another search.</p>
    <?php endif; ?>
  </div>
</section>
<?php
get_footer();
