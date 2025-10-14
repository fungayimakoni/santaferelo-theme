<?php
/*
Template Name: Video Page
Template Post Type: page
*/
get_header('video');
	echo '<section class="main-layout inner-page-layout thank-you-page">';
		echo '<div class="default-container">';
			echo '<div class="container">';
				echo '<div class="content_wrapper">';
					echo get_the_content();
				echo '</div>';
				$video_mp4 =  get_field('vid_media_link');
				echo '<video width="560px" height="315px" controls="controls" style="margin-top:24px;">';
					echo '<source src="'.$video_mp4.'"/>';
				echo '</video>';
			echo '</div>';
		echo '</div>';
echo '</section>';
get_footer('form'); ?> 