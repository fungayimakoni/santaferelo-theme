<?php
/*
Template Name: Zoho Form
Template Post Type: mobility-webinar, mobility-survey, mobility-wpapers, mobility-events
*/
get_header('form');
	echo '<section class="main-layout inner-page-layout thank-you-page">';
		echo '<div class="default-container">';
			echo '<div class="container">';
				echo get_the_content();
			echo '</div>';
		echo '</div>';
		if ( get_field( 'custom_css' )):
			echo '<div class="custom-css">';
				echo '<style type="text/css">';
					echo get_field('custom_css');
				echo '</style>';
				echo get_field('custom_javascript');
			echo '</div>';
		endif;
	echo '</section>';
echo '</section>';
get_footer('form'); ?> 