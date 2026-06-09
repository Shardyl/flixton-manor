<?php
/**
 * Single blog post.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
while ( have_posts() ) : the_post();
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow"><?php echo esc_html( get_the_date( 'j F Y' ) ); ?></p>
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<section class="band">
  <div class="wrap">
    <article class="prose">
      <?php
      if ( has_post_thumbnail() ) {
        echo '<img class="prose-hero" src="' . esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ) . '" alt="' . the_title_attribute( array( 'echo' => false ) ) . '">';
      }
      the_content();
      ?>
      <p class="back-link"><a href="<?php echo esc_url( home_url( '/news/' ) ); ?>">&larr; Back to all news</a></p>
    </article>
  </div>
</section>
<?php
endwhile;
get_footer();
