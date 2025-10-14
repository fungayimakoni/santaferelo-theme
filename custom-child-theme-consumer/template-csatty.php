<?php
/*
Template Name: CSAT Thank you page with Trustpilot
Template Post Type: page
*/
get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				global $post;
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container">';
						the_content();
					echo '</div>';
				endif;
		echo '</div>';
	echo '</section>';
get_footer('csat'); ?> 