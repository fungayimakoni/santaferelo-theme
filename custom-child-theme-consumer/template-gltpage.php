<?php 
/*
Template Name: GLT Layout
*/

get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				// if (get_field('banner')):
				// 	$banner = get_field('banner');
				// 	if ( $banner['banner_image'] ):
				// 		echo '<div class="page-banner">';

				// 			echo '<div class="banner-wrapper">';
				// 				echo '<div class="container banner-content">';
				// 				if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
				// 					echo '<div class="col-4">';
				// 						echo '<div class="uk-position-center">';
				// 							echo ( $banner['banner_title'] ? "<h1><span>".$banner['banner_title']."</span></h1>" : "");
				// 							echo ( $banner['banner_description'] ? "<p>".$banner['banner_description']."</p>" : "" );
				// 							echo ( $banner['banner_button'] ? "<a href='".( $banner['banner_button']['url'] )."' target='".$banner['banner_button']['target']."' class='button primary'>".$banner['banner_button']['title']."</a>" : "" );
				// 						echo '</div>';
				// 					echo '</div>';
				// 				endif;
				// 				echo '</div>';

				// 				echo '<div class="banner-image ';
				// 				if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
				// 					echo 'banner-meta';
				// 				endif;
				// 				echo '" style="background-image:url('. ( $banner['banner_image']['url'] ?  $banner['banner_image']['url'] : "none") . ')">';

				// 				echo '</div>';
				// 			echo '</div>';
				// 		echo '</div>';
				// 	endif;
				// endif;
				echo '<div class="uk-cover-container banner-video">';
				    //echo '<iframe src="https://www.youtube-nocookie.com/embed/BHM324NGMeE?autoplay=1&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1;disablekb=1;" width="1920" height="1080" frameborder="0" allowfullscreen uk-responsive uk-video="automute: true"></iframe>';
					echo '<video src="https://www.santaferelo.com/wp-content/uploads/santafe_vid/glt.mp4" autoplay loop muted playsinline uk-cover></video>';
				echo '</div>';
				global $post;
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container">';
						the_content();
					echo '</div>';
				endif;
				echo '<div class="container">';
					if(get_field('leader_content')):
						echo '<div class="leader-content" id="leader-content">';
							echo get_field('leader_content');
						echo '</div>';
					endif;
					if(get_field('profile_pages')):
						echo '<div class="profile-pages uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-small" uk-grid>';
							foreach( get_field('profile_pages') as $item ):
								echo '<div>';
									echo '<a href="'.get_the_permalink($item).'" style="display:inherit;"><div class="uk-background-cover" style="background-image: url('.get_the_post_thumbnail_url($item).'); height: 230px;">';
									echo '</div></a>';
									echo '<div class="profile-meta">';
										echo '<span class="name"><a href="'.get_the_permalink($item).'">'.get_the_title($item).'</a></span>';
										if( get_field('email', $item) ):
											echo '<a href="mailto:'.get_field('email', $item).'" class="uk-icon-link uk-align-right" uk-icon="mail"></a>';
										endif;
										if( get_field('position', $item) ):
											echo '<span class="position">'.get_field('position', $item).'</span>';
										endif;
									echo '</div>';
								echo '</div>';
							endforeach;
						echo '</div>';
					endif;
					if(get_field('lower_content')):
						echo '<div>';
							echo get_field('lower_content');
						echo '</div>';
					endif;
					if( get_field('link_list') ):
						echo '<div class="list-link">';
							echo '<h2>Learn more</h2>';
							echo '<ul class="check">';
								foreach( get_field('link_list') as $item ):
									echo '<li><a href="'.get_the_permalink($item).'">'.get_the_title($item).'<i class="material-icons">chevron_right</i></a></li>';
								endforeach;
							echo '</ul>';
						echo '</div>';
					endif;
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 