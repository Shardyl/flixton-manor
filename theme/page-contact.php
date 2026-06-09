<?php
/**
 * Contact page.
 *
 * @package flixton-manor
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }
get_header();
$phone      = flixton_text_raw( 'site_phone', '0161 746 7175' );
$phone_link = preg_replace( '/[^0-9+]/', '', $phone );
$email      = flixton_text_raw( 'site_email', 'enquiries@flixtonmanor.com' );
$address    = flixton_text_raw( 'site_address', '2-8 Delamere Road, Flixton, Urmston, Manchester, M41 5QL' );
$hours      = flixton_text_raw( 'site_hours', 'Open 7 days, 9am - 9pm' );
?>
<section class="page-hero">
  <div class="wrap">
    <p class="eyebrow"><?php flixton_text( 'contact_eyebrow', 'Get in Touch' ); ?></p>
    <h1><?php flixton_text( 'contact_h1', 'We&rsquo;re here to help' ); ?></h1>
    <p class="page-hero-sub"><?php flixton_text( 'contact_intro', 'Whether you have a question or would like to arrange a visit, we&rsquo;d love to hear from you. Call us, email us, or send a message below.' ); ?></p>
  </div>
</section>

<section class="band contact">
  <div class="wrap contact-grid">
    <div>
      <div class="info-row"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 21s-7-5.5-7-11a7 7 0 0 1 14 0c0 5.5-7 11-7 11z"/><circle cx="12" cy="10" r="2.5"/></svg></div><div><b>Visit us</b><span><?php echo esc_html( $address ); ?></span></div></div>
      <div class="info-row"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 1.9.7 2.8a2 2 0 0 1-.5 2.1L8.1 9.9a16 16 0 0 0 6 6l1.3-1.2a2 2 0 0 1 2.1-.5c.9.3 1.8.6 2.8.7a2 2 0 0 1 1.7 2z"/></svg></div><div><b>Call us</b><span><a href="tel:<?php echo esc_attr( $phone_link ); ?>"><?php echo esc_html( $phone ); ?></a> &middot; <?php echo esc_html( $hours ); ?></span></div></div>
      <div class="info-row"><div class="ic"><svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8l9 6 9-6"/><rect x="3" y="5" width="18" height="14" rx="2"/></svg></div><div><b>Email us</b><span><a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a></span></div></div>
      <div class="contact-map">
        <iframe title="Map to Flixton Manor" src="https://www.google.com/maps?q=Flixton+Manor+2-8+Delamere+Road+M41+5QL&output=embed" width="100%" height="280" style="border:0;border-radius:16px;margin-top:10px" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

    <form class="form" id="flixton-enquiry">
      <div class="form-status" id="fm-status" role="status" aria-live="polite"></div>
      <label for="fm-name">Your name</label>
      <input type="text" id="fm-name" name="name" required placeholder="Jane Smith">
      <label for="fm-contact">Phone or email</label>
      <input type="text" id="fm-contact" name="contact" required placeholder="So we can get back to you">
      <label for="fm-message">How can we help?</label>
      <textarea id="fm-message" name="message" rows="4" placeholder="I&rsquo;d like to arrange a visit for my mother..."></textarea>
      <input type="text" name="company" autocomplete="off" tabindex="-1" style="position:absolute;left:-9999px" aria-hidden="true">
      <button class="btn btn-primary" type="submit" id="fm-submit" style="width:100%;justify-content:center">Send Enquiry</button>
    </form>
  </div>
</section>

<script>
(function(){
  var f=document.getElementById('flixton-enquiry');
  if(!f) return;
  var status=document.getElementById('fm-status');
  var btn=document.getElementById('fm-submit');
  f.addEventListener('submit',function(e){
    e.preventDefault();
    status.className='form-status';status.textContent='';
    btn.disabled=true;btn.textContent='Sending...';
    var data={name:f.name.value,contact:f.contact.value,message:f.message.value,company:f.company.value};
    fetch('<?php echo esc_url_raw( rest_url( 'flixton/v1/enquiry' ) ); ?>',{
      method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(data)
    }).then(function(r){return r.json();}).then(function(res){
      if(res.ok){
        f.reset();
        status.className='form-status ok';
        status.textContent='Thank you. Your message has been sent and we will be in touch very soon.';
      }else{
        status.className='form-status err';
        status.textContent=res.error||'Sorry, something went wrong. Please call us on <?php echo esc_js( $phone ); ?>.';
      }
    }).catch(function(){
      status.className='form-status err';
      status.textContent='Sorry, something went wrong. Please call us on <?php echo esc_js( $phone ); ?>.';
    }).finally(function(){btn.disabled=false;btn.textContent='Send Enquiry';});
  });
})();
</script>
<?php
get_footer();
