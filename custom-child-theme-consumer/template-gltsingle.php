<?php 
/*
Template Name: GLT Profile Layout
*/

get_header();
	echo '<section class="main-layout inner-page-layout" style="margin-top:2rem;">';
		echo '<div class="container-fluid default-container" >';
			echo '<div class="row">';
				if( get_the_post_thumbnail_url() || get_field('position') || get_field('email') ):
					echo '<div class="container">';
						echo '<div class="uk-child-width-1-1@s uk-child-width-1-2@m profile-info uk-grid-collapse" uk-grid>';
							if( get_field('position') || get_field('email') ):
								echo '<div class="profile-meta">';
									echo '<h2 class="name"><b>'.get_the_title().'</b></h2>';
									echo '<span class="position">'.get_field('position').'</span>';
									echo '<span><a href="mailto:'.get_field('email').'" class="uk-icon-link" uk-icon="icon: mail; ratio: 1.5"></a></span>';
								echo '</div>';
							endif;
							if( get_the_post_thumbnail_url() ):
								echo '<div>';
									echo '<div class="uk-background-cover" style="background-image: url('.get_the_post_thumbnail_url().'); height: 310px;">';
									echo '</div>';
								echo '</div>';
							endif;
						echo '</div>';
					echo '</div>';
				endif;
				global $post;
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container">';
						the_content();
					echo '</div>';
				endif;
				echo '<div class="container back-leader">';
					global $post;
					if ( $post->post_parent ):
						$url = rtrim( get_permalink( $post->post_parent ),'/');
						echo '<a href="'.$url.'#leader-content">Back to leadership team</a>';
					endif;
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 