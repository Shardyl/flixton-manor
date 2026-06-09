<?php
/**
 * Generic page template.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
while ( have_posts() ) : the_post();
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow">Flixton Manor</p>
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
    </article>
  </div>
</section>
<?php
endwhile;
get_footer();
