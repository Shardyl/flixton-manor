<?php
/**
 * Sensa CMS — Flixton Manor field registry.
 *
 * Declares which content is editable in wp-admin (Sensa CMS plugin reads this
 * via the `sensa_cms_config` filter). Helpers in templates: sc_text(), sc_img(),
 * sensa_photos(). Defaults here are the live copy; clearing a field restores it.
 *
 * @package flixton-manor
 */

if ( ! defined( 'ABSPATH' ) ) { exit; }

add_filter( 'sensa_cms_config', function () {
	$u = get_stylesheet_directory_uri() . '/assets/img/';

	return array(

		// Pages whose layout lives in code templates (clean classic editor + on-page panels).
		'bespoke_slugs' => array( 'home', 'about', 'our-care', 'our-team', 'faq', 'contact' ),

		/* ---- TEXT --------------------------------------------------------- */
		'text' => array(
			'groups' => array(
				'home' => array(
					'label'  => 'Homepage',
					'fields' => array(
						// Global site details (shown in header/footer site-wide).
						array( 'k' => 'site_phone',   'l' => 'Site: phone number', 'd' => '0161 746 7175' ),
						array( 'k' => 'site_email',   'l' => 'Site: email', 'd' => 'enquiries@flixtonmanor.com' ),
						array( 'k' => 'site_address', 'l' => 'Site: address', 'ta' => 1, 'd' => '2-8 Delamere Road, Flixton, Urmston, Manchester, M41 5QL' ),
						array( 'k' => 'site_hours',   'l' => 'Site: opening hours', 'd' => 'Open 7 days, 9am - 9pm' ),
						array( 'k' => 'footer_blurb', 'l' => 'Footer: blurb', 'ta' => 1, 'd' => 'A family-run nursing and residential care home in Flixton, Urmston, caring for the people of Trafford and Greater Manchester for over 25 years.' ),

						// Hero
						array( 'k' => 'home_hero_eyebrow', 'l' => 'Hero: eyebrow', 'd' => 'Nursing &amp; Residential Care &middot; Urmston, Manchester' ),
						array( 'k' => 'home_hero_h1',    'l' => 'Hero: headline (line 1)', 'd' => 'A warm, caring home' ),
						array( 'k' => 'home_hero_h1_em', 'l' => 'Hero: headline (emphasis)', 'd' => 'where life feels like home.' ),
						array( 'k' => 'home_hero_lead',  'l' => 'Hero: intro paragraph', 'ta' => 1, 'd' => 'For over 25 years, Flixton Manor has been a family-run home offering compassionate nursing and residential care, just three minutes from the Trafford Centre. Our doors are always open.' ),
						array( 'k' => 'home_stat1_n', 'l' => 'Hero stat 1: number', 'd' => '25+' ),
						array( 'k' => 'home_stat1_l', 'l' => 'Hero stat 1: label', 'd' => 'Years caring' ),
						array( 'k' => 'home_stat2_n', 'l' => 'Hero stat 2: number', 'd' => '37' ),
						array( 'k' => 'home_stat2_l', 'l' => 'Hero stat 2: label', 'd' => 'Bedrooms' ),
						array( 'k' => 'home_stat3_n', 'l' => 'Hero stat 3: number', 'd' => '24/7' ),
						array( 'k' => 'home_stat3_l', 'l' => 'Hero stat 3: label', 'd' => 'Nursing on site' ),
						array( 'k' => 'home_stat4_n', 'l' => 'Hero stat 4: number', 'd' => 'Good' ),
						array( 'k' => 'home_stat4_l', 'l' => 'Hero stat 4: label', 'd' => 'CQC rated' ),
						array( 'k' => 'home_cqc_title', 'l' => 'Hero badge: title', 'd' => 'Rated &lsquo;Good&rsquo;' ),
						array( 'k' => 'home_cqc_sub',   'l' => 'Hero badge: subtitle', 'd' => 'Care Quality Commission' ),

						// Ethos
						array( 'k' => 'home_est_n', 'l' => 'Ethos seal: number', 'd' => '25' ),
						array( 'k' => 'home_est_l', 'l' => 'Ethos seal: label', 'd' => 'Years of<br>care' ),
						array( 'k' => 'home_ethos_eyebrow', 'l' => 'Ethos: eyebrow', 'd' => 'The FM Care Ethos' ),
						array( 'k' => 'home_ethos_h2', 'l' => 'Ethos: heading', 'ta' => 1, 'd' => 'Good care is simply about being caring.' ),
						array( 'k' => 'home_ethos_p1', 'l' => 'Ethos: paragraph 1', 'ta' => 1, 'd' => 'Flixton Manor is a nursing and residential care home based in the heart of Trafford. We have been established for over 25 years and consider ourselves a unique and forward-thinking home in the Manchester area.' ),
						array( 'k' => 'home_ethos_p2', 'l' => 'Ethos: paragraph 2', 'ta' => 1, 'd' => 'FM Care is an ethos we live by. We believe in a common-sense approach to care we can be proud of: we treat all our residents, their families and each other the way we would like to be treated.' ),
						array( 'k' => 'home_ethos_pill1', 'l' => 'Ethos: point 1', 'd' => 'Family-run, with staff who have stayed for decades' ),
						array( 'k' => 'home_ethos_pill2', 'l' => 'Ethos: point 2', 'd' => 'Open visiting, with no pretences, any time' ),
						array( 'k' => 'home_ethos_pill3', 'l' => 'Ethos: point 3', 'd' => 'Just 3 minutes from the Trafford Centre' ),

						// Services
						array( 'k' => 'home_care_eyebrow', 'l' => 'Care: eyebrow', 'd' => 'Our Care' ),
						array( 'k' => 'home_care_h2', 'l' => 'Care: heading', 'd' => 'Personalised care for every need' ),
						array( 'k' => 'home_care_intro', 'l' => 'Care: intro', 'ta' => 1, 'd' => 'From around-the-clock nursing to gentle residential support, every aspect of life at Flixton Manor is built around the comfort, dignity and wellbeing of the people who live here.' ),
						array( 'k' => 'home_svc_nursing_h', 'l' => 'Service 1: title', 'd' => 'Nursing Care' ),
						array( 'k' => 'home_svc_nursing_p', 'l' => 'Service 1: text', 'ta' => 1, 'd' => 'A highly experienced nursing team on hand 24 hours a day, with computerised care planning and faultless medication management.' ),
						array( 'k' => 'home_svc_residential_h', 'l' => 'Service 2: title', 'd' => 'Residential Care' ),
						array( 'k' => 'home_svc_residential_p', 'l' => 'Service 2: text', 'ta' => 1, 'd' => 'Comfortable, homely living for residents who value their independence, with help always close by whenever it is needed.' ),
						array( 'k' => 'home_svc_dementia_h', 'l' => 'Service 3: title', 'd' => 'Dementia Care' ),
						array( 'k' => 'home_svc_dementia_p', 'l' => 'Service 3: text', 'ta' => 1, 'd' => 'A calm, dementia-friendly environment built on patience, familiarity and the four pillars of comfort for those living with dementia.' ),
						array( 'k' => 'home_svc_dining_h', 'l' => 'Service 4: title', 'd' => 'Dining &amp; Meals' ),
						array( 'k' => 'home_svc_dining_p', 'l' => 'Service 4: text', 'ta' => 1, 'd' => 'Fresh, home-cooked food with a choice at every sitting, prepared by a cook who has been with us for over 20 years.' ),
						array( 'k' => 'home_svc_activities_h', 'l' => 'Service 5: title', 'd' => 'Activities &amp; Wellbeing' ),
						array( 'k' => 'home_svc_activities_p', 'l' => 'Service 5: text', 'ta' => 1, 'd' => 'A full programme of games, quizzes, music and visitors, led by Tina, our in-house activities co-ordinator.' ),
						array( 'k' => 'home_svc_facilities_h', 'l' => 'Service 6: title', 'd' => 'Comfort &amp; Facilities' ),
						array( 'k' => 'home_svc_facilities_p', 'l' => 'Service 6: text', 'ta' => 1, 'd' => 'A luxury wet room, state-of-the-art toileting, Aidcall nurse-call technology and free WiFi throughout the home.' ),

						// Why choose
						array( 'k' => 'home_why_eyebrow', 'l' => 'Why: eyebrow', 'd' => 'Why Families Choose Us' ),
						array( 'k' => 'home_why_h2', 'l' => 'Why: heading', 'd' => 'Peace of mind for the whole family' ),
						array( 'k' => 'home_why_intro', 'l' => 'Why: intro', 'ta' => 1, 'd' => 'Choosing a care home is one of the most important decisions a family can make. Here is why families across Trafford trust Flixton Manor.' ),
						array( 'k' => 'home_why1_h', 'l' => 'Why 1: title', 'd' => 'Genuine warmth' ),
						array( 'k' => 'home_why1_p', 'l' => 'Why 1: text', 'd' => 'A home where residents, families and staff are treated like one extended family.' ),
						array( 'k' => 'home_why2_h', 'l' => 'Why 2: title', 'd' => 'CQC &lsquo;Good&rsquo;' ),
						array( 'k' => 'home_why2_p', 'l' => 'Why 2: text', 'd' => 'Independently inspected and rated Good by the Care Quality Commission.' ),
						array( 'k' => 'home_why3_h', 'l' => 'Why 3: title', 'd' => 'Experienced team' ),
						array( 'k' => 'home_why3_p', 'l' => 'Why 3: text', 'd' => 'Long-serving carers and nurses, many with us for 20 or 30 years.' ),
						array( 'k' => 'home_why4_h', 'l' => 'Why 4: title', 'd' => 'A real home' ),
						array( 'k' => 'home_why4_p', 'l' => 'Why 4: text', 'd' => 'Bright lounges, a sunny conservatory and gardens, kept fresh and welcoming.' ),

						// Gallery + testimonial
						array( 'k' => 'home_gal_eyebrow', 'l' => 'Gallery: eyebrow', 'd' => 'Daily Life' ),
						array( 'k' => 'home_gal_h2', 'l' => 'Gallery: heading', 'd' => 'A glimpse of life at Flixton Manor' ),
						array( 'k' => 'home_gal_intro', 'l' => 'Gallery: intro', 'd' => 'Light, airy rooms, good company and plenty going on. Take a look around our home.' ),
						array( 'k' => 'home_testi_q', 'l' => 'Testimonial: quote', 'ta' => 1, 'd' => '&ldquo;Thank you to all the staff for making Dorothy&rsquo;s 100th birthday so special. The buffet, cake, decorations and entertainment were all brilliant. All the family were thrilled, and delighted to see Dorothy looking so well. Well done everyone!&rdquo;' ),
						array( 'k' => 'home_testi_by', 'l' => 'Testimonial: attribution', 'd' => 'Wendy, daughter of a resident' ),

						// Team
						array( 'k' => 'home_team_eyebrow', 'l' => 'Team: eyebrow', 'd' => 'Meet the Team' ),
						array( 'k' => 'home_team_h2', 'l' => 'Team: heading', 'd' => 'The people who make it home' ),
						array( 'k' => 'home_team_intro', 'l' => 'Team: intro', 'ta' => 1, 'd' => 'Our team is the heart of Flixton Manor, many of whom have cared for our residents for decades.' ),
						array( 'k' => 'home_m1_name', 'l' => 'Team 1: name', 'd' => 'Clare' ),
						array( 'k' => 'home_m1_role', 'l' => 'Team 1: role', 'd' => 'Home Manager' ),
						array( 'k' => 'home_m1_bio', 'l' => 'Team 1: bio', 'ta' => 1, 'd' => 'Dedicated, caring and driven, Clare strives to provide a high quality of standards throughout the home.' ),
						array( 'k' => 'home_m2_name', 'l' => 'Team 2: name', 'd' => 'Sue' ),
						array( 'k' => 'home_m2_role', 'l' => 'Team 2: role', 'd' => 'Deputy Manager' ),
						array( 'k' => 'home_m2_bio', 'l' => 'Team 2: bio', 'ta' => 1, 'd' => 'A caring and dedicated deputy manager, Sue has been part of the Flixton Manor family for over 30 years.' ),
						array( 'k' => 'home_m3_name', 'l' => 'Team 3: name', 'd' => 'Susan' ),
						array( 'k' => 'home_m3_role', 'l' => 'Team 3: role', 'd' => 'Senior Carer' ),
						array( 'k' => 'home_m3_bio', 'l' => 'Team 3: bio', 'ta' => 1, 'd' => 'With a warm and caring personality, Susan&rsquo;s heart is invested in our residents and the work she loves.' ),

						// News + CTA
						array( 'k' => 'home_news_eyebrow', 'l' => 'News: eyebrow', 'd' => 'Latest News' ),
						array( 'k' => 'home_news_h2', 'l' => 'News: heading', 'd' => 'What&rsquo;s happening at the Manor' ),
						array( 'k' => 'home_cta_h2', 'l' => 'CTA: heading', 'd' => 'Come and see our home for yourself' ),
						array( 'k' => 'home_cta_p', 'l' => 'CTA: text', 'ta' => 1, 'd' => 'Our doors are always open. Call us for an informal chat, or arrange a visit with our home manager who&rsquo;ll be delighted to show you around and answer all your questions.' ),
					),
				),
			),
			'slug_groups' => array( 'home' => 'home' ),
		),

		/* ---- IMAGES ------------------------------------------------------- */
		'images' => array(
			'groups' => array(
				'home' => array(
					'label'  => 'Homepage',
					'fields' => array(
						array( 'k' => 'logo',           'l' => 'Site logo', 'd' => $u . 'main-logo-blue-300-trans.png' ),
						array( 'k' => 'home_hero_img',  'l' => 'Hero image', 'd' => $u . 'tea-on-the-lawn.jpg' ),
						array( 'k' => 'home_ethos_img', 'l' => 'Ethos image (team)', 'd' => $u . 'the-flixton-manor-team.jpg' ),
						array( 'k' => 'home_svc_nursing_img',     'l' => 'Service 1 image (Nursing)', 'd' => $u . 'NURSING-CARE-1200.jpg' ),
						array( 'k' => 'home_svc_residential_img', 'l' => 'Service 2 image (Residential)', 'd' => $u . 'light-lounge-1.jpg' ),
						array( 'k' => 'home_svc_dementia_img',    'l' => 'Service 3 image (Dementia)', 'd' => $u . 'LAUGHING-MUM.jpg' ),
						array( 'k' => 'home_svc_dining_img',      'l' => 'Service 4 image (Dining)', 'd' => $u . 'cottage-pie-1200.jpg' ),
						array( 'k' => 'home_svc_activities_img',  'l' => 'Service 5 image (Activities)', 'd' => $u . 'HAPPY-GROUP.jpg' ),
						array( 'k' => 'home_svc_facilities_img',  'l' => 'Service 6 image (Facilities)', 'd' => $u . 'shower-room1.jpg' ),
						array( 'k' => 'home_m1_img', 'l' => 'Team 1 photo', 'd' => $u . 'ASHLEIGH.jpg' ),
						array( 'k' => 'home_m2_img', 'l' => 'Team 2 photo', 'd' => $u . 'LEKHA-MARLENE.jpg' ),
						array( 'k' => 'home_m3_img', 'l' => 'Team 3 photo', 'd' => $u . 'MUM.jpg' ),
					),
				),
			),
			'slug_groups' => array( 'home' => 'home' ),
		),

		/* ---- GALLERIES ---------------------------------------------------- */
		'galleries' => array(
			'photo' => array(
				'home_gallery' => array( 'label' => 'Homepage gallery', 'default' => array() ),
			),
		),
	);
} );
