<?php
/*
Template Name: New Sanelo Formpage
*/

get_header('sanelo-form'); ?>

<?php
// $record = geoip_detect2_get_info_from_ip(geoip_detect2_get_client_ip(), NULL);
?>
<section class="main-layout inner-page-layout sanelo-frontpage" style="background-color: #f6f6f6;">
	<?php
	echo '<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9GgkTRZwHEjUTWEfflsnDB6c_qqe2SIE&libraries=places&callback=initAutocomplete&loading=async" defer></script>';
	echo '<div style="width: 90%;max-width: 1080px;justify-self: center;margin: auto;">';
	echo do_shortcode('[contact-form-7 id="13a2040" title="Get Estimate"]');
	echo '</div>';
	?>
</section>
<?php get_footer(); ?>