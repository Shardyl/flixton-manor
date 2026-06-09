<?php
/**
 * FAQ page.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();

$faqs = array(
  array( 'q1', 'What types of care do you provide?', 'Flixton Manor provides nursing care, residential care and dementia care for older people. Our experienced nursing team is on site 24 hours a day. If you are unsure which type of care is right for your loved one, please call us for a chat.' ),
  array( 'q2', 'Can we visit before deciding?', 'Absolutely. Our doors are always open and we welcome visits with no pretences. The best way to get a feel for the home is to come and see it. Call us to arrange a time and the home manager will be happy to show you around and answer your questions.' ),
  array( 'q3', 'What are your visiting hours?', 'We have open visiting and welcome family and friends throughout the day. The home is contactable seven days a week between 9am and 9pm.' ),
  array( 'q4', 'Are you inspected and regulated?', 'Yes. We are registered with and inspected by the Care Quality Commission (CQC), and following our most recent inspection we are rated Good. Our staff are also registered and trained with the relevant professional bodies.' ),
  array( 'q5', 'What are the bedrooms like?', 'We have 37 bedrooms in a range of sizes, some en-suite and some larger rooms suitable for couples. Residents are encouraged to personalise and decorate their rooms, and every room has access to free WiFi, with TV, Sky and personal phone lines available on request.' ),
  array( 'q6', 'What about meals and dietary needs?', 'Our long-serving cook prepares fresh, home-cooked meals with a choice of at least two options at every sitting. We cater for different tastes, cultural preferences and dietary needs, including softened meals for residents with swallowing difficulties.' ),
  array( 'q7', 'How much does it cost?', 'Fees depend on the type of care and the room. Costs of care can be affected by several factors, so the best thing to do is call us for a friendly, no-obligation conversation about your situation and what is included.' ),
  array( 'q8', 'How do we arrange a place?', 'Simply give us a call on 0161 746 7175 or send an enquiry through our contact page. We will talk through your needs, arrange a visit and an assessment, and guide you through every step.' ),
);
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow"><?php flixton_text( 'faq_eyebrow', 'Questions &amp; Answers' ); ?></p>
    <h1><?php flixton_text( 'faq_h1', 'Frequently asked questions' ); ?></h1>
    <p class="page-hero-sub"><?php flixton_text( 'faq_intro', 'Choosing a care home raises a lot of questions. Here are some of the ones families ask us most. If yours isn&rsquo;t here, please just give us a call.' ); ?></p>
  </div>
</section>

<section class="band">
  <div class="wrap">
    <div class="faq-list">
      <?php foreach ( $faqs as $f ) {
        $k = $f[0];
        $q = flixton_text_raw( 'faq_' . $k . '_q', $f[1] );
        $a = flixton_text_raw( 'faq_' . $k . '_a', $f[2] );
        echo '<details class="faq-item"><summary>' . wp_kses_post( $q ) . '</summary><div class="faq-a"><p>' . wp_kses_post( $a ) . '</p></div></details>';
      } ?>
    </div>
  </div>
</section>

<section class="band cta">
  <div class="wrap">
    <h2><?php flixton_text( 'faq_cta_h2', 'Still have a question?' ); ?></h2>
    <p><?php flixton_text( 'faq_cta_p', 'We&rsquo;re always happy to help. Call us for an informal chat, any day between 9am and 9pm.' ); ?></p>
    <div class="btns">
      <?php $ph = preg_replace( '/[^0-9+]/', '', flixton_text_raw( 'site_phone', '0161 746 7175' ) ); ?>
      <a href="tel:<?php echo esc_attr( $ph ); ?>" class="btn btn-amber">Call <?php flixton_text( 'site_phone', '0161 746 7175' ); ?></a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-ghost" style="border-color:#fff;color:#fff">Send an Enquiry</a>
    </div>
  </div>
</section>
<?php
get_footer();
