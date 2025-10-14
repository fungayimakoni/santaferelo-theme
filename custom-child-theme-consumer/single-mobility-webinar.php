<?php
if(get_field('form_assembly_id') ):
	get_header('form');
else:
	get_header();
endif;
// $record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
/*
* New function based on new GeoTargetingWP plugin
* Author: Fungayi 03/10/2025
*/
if (function_exists('geot_get')) {
	$record = (object) [
		'country' => geot_get('country'),
		'city' => geot_get('city'),
		'ip' => geot_get('ip'),
		'continent' => geot_get('continent'),
		'state' => geot_get('state')
	];
} else {
	$record = null;
}

if(is_grandchild_page()) :
	?>
    <?php
	echo '<section class="main-layout inner-page-layout thank-you-page">';
		echo '<div class="default-container">';
			echo '<div class="container">';
				echo get_the_content();
			echo '</div>';
		echo '</div>';
		
echo '</section>';
else:
	if(get_field('form_assembly_id')):
		echo '<section class="main-layout inner-page-layout">';
			echo '<div class="default-container">';
				echo '<div class="row">';
					global $post;
					if ( get_field( 'form_assembly_id' ) ):
						$forms = get_field( 'form_assembly_id' );
						echo '<div class="container">';
							echo do_shortcode('[formassembly formid="'.$forms.'" server="https://santafe.tfaforms.net"]');
						echo '</div>';
					endif;
				echo '</div>';
				if ( get_field( 'custom_css' )):
					echo '<div class="custom-css">';
						echo '<style type="text/css">';
							echo get_field('custom_css');
						echo '</style>';
						echo get_field('custom_javascript');
					echo '</div>';
				endif;
			echo '</div>';
		echo '</section>';
	else:
		wpb_set_post_views(get_the_ID());
		echo '<section class="main-layout inner-page-layout">';
			echo '<div class="container-fluid default-container">';
				$type = get_field('webinar_type');
				$v_source = get_field('video_source');
				$f_source = get_field('form_page_link');
				$z_source = get_field('zoom_link');
				$black = '';
				$red = '';
				$link = '#';
				if($type == 'form'):
					$black = 'Webinar';
					$red = 'Register for webinar';
					if(get_the_ID()=='11296'):
						$banner = get_field('banner');
						$link = $banner['banner_button']['url'];
					else:
						$link = $f_source ;
					endif;
				endif;
				if($type == 'video'):
					$black = 'Webinar video';
					$red = 'Watch the video';
					if($v_source):
						$link = "#modal-media-youtube";
						$video = '';
						$video2 = '';
						

						if($v_source == 'youtube'):
							if(get_field('youtube_link')):
								$video = get_field('youtube_link');
							endif;
						endif;

						if($v_source == 'hosted'):
							if(get_field('internal_video_link')):
								$video = get_field('internal_video_link');
								$video2 = get_field('internal_video_link_ogv');
							endif;
						endif;
					endif;
				endif;
				if($type == 'zoom'):
					$black = 'Webinar';
					$red = 'Register';
					$link = $z_source;
				endif;
				echo '<div class="featured-image">';
					echo '<div class="row">';
						$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
						echo '<div class="responsive uk-cover-container '.( $featured_img_url ? '' : 'no-image').'">';
							if ($featured_img_url):
								echo '<img src="'.$featured_img_url.'" alt="'.get_the_title().'" uk-cover>';
							endif;
							echo '<div class="uk-overlay uk-position-cover uk-overlay uk-overlay-primary uk-light uk-flex uk-flex-center uk-flex-middle">';
								echo '<div class="container">';
									echo '<div class="row">';
										echo '<div uk-grid>';
											echo '<div class="uk-width-5-6@l">';
												if($type):
													echo '<span>'.$black.'</span>';
												endif;
												echo '<h1>'.get_the_title().'</h1>';
												
												// echo '<div>'.get_post_time( 'd/m/Y' ).'</div>';
												// echo '<div>Author: Santa Fe Relocation</div>';
												if($type || $v_source || $f_source):
													echo '<div class="cta" style="width:85%;">';
														// updated with two buttons instead of one for form pages.
														
														if(get_the_ID()=='11296'):?>
							
															<a target="_blank" href="https://www.linkedin.com/video/event/urn:li:ugcPost:7011538999710294016/" style="margin-right:10px;">
															Register 8:15 session
															</a>
															<a target="_blank" href="https://www.linkedin.com/video/event/urn:li:ugcPost:7011541923723186176/" style="margin-right:10px;">
															Register 15:15 session
															</a>
														<?php elseif(get_the_ID()=='11309'):
														
															else:
															if(get_field('button_text')):
																$red = get_field('button_text');
															elseif( $type == 'zoom' ):
																$red = 'Register';
															else:
																$red = 'Watch the video';
															endif;

															if(is_user_logged_in()): 
																
																if($record->country->data->iso_code =='PH' && get_field('china_video_link') ):

																	echo '<a target="_blank" href="'.get_field('china_video_link').'"'.' style="margin-right:10px;">';
																else:
																	echo '<a href="'.$link.'" '.( ( $type == 'video' ) ? 'uk-toggle' : '').' '.( ( $type == 'zoom' ) ? 'target="_blank"' : '').'style="margin-right:10px;">';
																endif;
															else:
																echo '<a href="'.$link.'" '.( ( $type == 'video' ) ? 'uk-toggle' : '').' '.( ( $type == 'zoom' ) ? 'target="_blank"' : '').'style="margin-right:10px;">';
															endif;
															
															if (is_single(8208)):
																echo 'Enregistrez-vous';
															elseif(is_single(8253)):
																echo 'Registre-se!';
															elseif(is_single(8211)):
																echo 'Watch the video';
															elseif(is_single(8242)):
																echo 'Registrati';
																elseif(is_single(8550)):
																echo 'Register';
															elseif(is_single(8489)):
																echo '<style>.cta { display:none;}</style>';
															elseif(is_single(8913)):
																echo 'Accede al video';
															elseif(is_single(8441)):
																echo 'Watch the video';
															else:
																echo $red;
															endif;

															echo '</a>';
														endif;
															if( $v_source ):
																echo '<div id="modal-media-youtube" class="uk-flex-top" uk-modal>';
																	echo '<div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">';
																	    echo '<button class="uk-modal-close-outside" type="button" uk-close></button>';
																        if($v_source == 'youtube'):
																			
																        		echo '<iframe src="https://www.youtube-nocookie.com/embed/'.$video.'" width="560" height="315" frameborder="0" uk-responsive uk-video allowfullscreen></iframe>';
																		
																        endif;
																        if($v_source == 'hosted'):
																	        echo '<video controls playsinline uk-video>';
																	            echo '<source src="'.$video.'" type="video/mp4">';
																	            echo '<source src="'.$video2.'" type="video/ogg">';
																	        echo '</video>';
																	    endif;
																	echo '</div>';
																echo '</div>';
															endif;
															if(get_field('form_page_link2')):
															if(get_field('button_text2')):
																$red = get_field('button_text2');
															endif;
															echo '<a href="'.get_field('form_page_link2').'">'.$red.'</a>';
														endif;
														if(get_field('form_page_link3')):
															if(get_field('button_text3')):
																$red = get_field('button_text3');
															endif;
															echo '<a href="'.get_field('form_page_link3').'" style="margin-right:10px;">'.$red.'</a>';
														endif;
														if(get_field('form_page_link4')):
															if(get_field('button_text4')):
																$red = get_field('button_text4');
															endif;
															echo '<a href="'.get_field('form_page_link4').'">'.$red.'</a>';
														endif;
													echo '</div>';
												endif;
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="row main-content">';
						echo '<div class="container">';
							the_content();
						echo '</div>';
					echo '</div>';
				endif;
				$author = get_field('authors_block');
				if( $author ):
					echo '<div class="row">';
						echo '<div class="author-content">';
							echo '<div class="container">';
								echo '<h3 class="uk-text-center">Speakers</h3>';
								echo '<div class="uk-child-width-1-2@m" uk-grid>';
								foreach($author as $item):
									echo '<div>';
										echo '<div class="uk-grid-collapse" uk-grid>';
											if($item['image']):
												echo '<div class="profile-image uk-width-1-3@s">';
													echo '<img src="'.$item['image']['url'].'" class="uk-border-circle" alt="'.$item['name'].'">';
												echo '</div>';
											endif;
											if( $item['name'] || $item['title'] || $item['description'] ):
												echo '<div class="profile-meta uk-width-2-3@s">';
													if($item['name']):
														echo '<div class="name">'.$item['name'].'</div>';
													endif;
													if ($item['title']):
														echo '<div class="title">'.$item['title'].'</div>';
													endif;
													if( $item['description'] ):
														echo '<div class="description">'.$item['description'].'</div>';
													endif;
												echo '</div>';
											endif;
										echo '</div>';
									echo '</div>';
								endforeach; 
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				// if( get_field('enable_mobility') ):
				// 	if( get_field('image', 'option') || get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
				// 		echo '<div class="row">';
				// 			echo '<div class="mobility-global">';
				// 				echo '<div class="container">';
				// 					echo '<div class="uk-child-width-1-2@m uk-grid-collapse" uk-grid>';
				// 						if( get_field('image', 'option') ):
				// 							$img = get_field('image', 'option');
				// 							echo '<div>';
				// 								echo '<img src="'.$img['url'].'" alt="global mobility survey">';
				// 							echo '</div>';
				// 						endif;
				// 						if ( get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
				// 							if ( get_field('description', 'option') ):
				// 								echo '<div>';
				// 									echo get_field('description', 'option');
				// 									if ( get_field('file', 'option') || get_field('video', 'option') ):
				// 										echo '<div class="buttons-row">';
				// 											if( get_field('file', 'option') ):
				// 												echo '<a class="pdf" href=#>Request a free copy</a>';
				// 											endif;
				// 											if( get_field('video', 'option') ):
				// 												echo '<a class="video" href="#">Learn more</a>';
				// 											endif;
				// 										echo '</div>';
				// 									endif;
				// 								echo '</div>';
				// 							endif;
				// 						endif;
				// 					echo '</div>';
				// 				echo '</div>';
				// 			echo '</div>';
				// 		echo '</div>';
				// 	endif;
				// endif;
				$args1 = array(
					'post_type' => get_post_type(get_the_ID()),
					'posts_per_page' => 4,
					'meta_key' => 'wpb_post_views_count',
					'orderby' => 'meta_value_num',
					'order' => 'DESC',
					'post_parent' => 0
				);
				$query = new WP_Query( $args1 );
				if ( $query->have_posts()):
					echo '<div class="row">';
						echo '<div class="blog-tabs">';
							echo '<div class="container uk-margin">';
								if ( $query->have_posts() ):
									echo '<h3 class="uk-text-center">Popular webinars</h3>';
									echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match page-listing" uk-grid>';
										while ( $query->have_posts() ):
											$query->the_post();
											echo '<div class="uk-card">';
												echo '<a href="'.get_permalink(  $query->post->ID ).'">';
													echo '<div class="cards-bg">';
														echo '<div class="uk-card-media-top">';
															$img = get_the_post_thumbnail_url(get_the_ID(),'custom');
															echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
																echo '<span>Webinar video</span>';
															echo '</div>';
														echo '</div>';
														echo '<div class="uk-card-body">';
															echo '<p class="uk-text-bold">'.get_the_title( $query->post->ID ).'</p>';
															echo '<p class="date uk-position-bottom-left">Posted '.get_post_time( 'd/m/Y' ).'</p>';
														echo '</div>';
													echo '</div>';
												echo '</a>';
											echo '</div>';
										endwhile;
										wp_reset_postdata();
									echo '</div>';
								endif;
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				echo '<div class="container">';
					echo '<div class="row">';
						echo '<div class="share">';
							echo '<h4>Share this article</h4>';
							echo '<div class="social-media">';
								echo do_shortcode('[addtoany]');
							echo '</div>';
							echo '<div class="return">';
								$cpt = get_post_type( get_the_ID() );
								echo '<a href="'.get_post_type_archive_link($cpt).'"><span uk-icon="icon: chevron-left; ratio: 1.25"></span>Back to webinars</a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</section>';
	endif;
endif;
if(get_field('form_assembly_id') ):
	get_footer('form');
else:
	get_footer();
endif;?>