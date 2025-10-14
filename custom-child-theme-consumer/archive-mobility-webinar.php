<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('web_banner', 'options')):
					$clone = get_field('web_banner', 'options');
					$banner = $clone['banner'];
					if ( $banner ):
						echo '<div class="page-banner">';

							echo '<div class="banner-wrapper">';
								echo '<div class="container banner-content">';
								if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
									echo '<div class="col-xs-4">';
										echo '<div class="uk-position-center">';
											echo ( $banner['banner_title'] ? "<h1><span>".$banner['banner_title']."</span></h1>" : "");
											echo ( $banner['banner_description'] ? "<p>".$banner['banner_description']."</p>" : "" );
											echo ( $banner['banner_button'] ? "<a href='".( $banner['banner_button']['url'] )."' target='".$banner['banner_button']['target']."' class='button primary'>".$banner['banner_button']['title']."</a>" : "" );
										echo '</div>';
									echo '</div>';
								endif;
								echo '</div>';

								echo '<div class="banner-image ';
								if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
									echo 'banner-meta';
								endif;
								echo '" style="background-image:url('. ( $banner['banner_image']['url'] ?  $banner['banner_image']['url'] : "none") . ')">';

								echo '</div>';
							echo '</div>';
						echo '</div>';
					endif;
				endif;
				if (get_field('web_content', 'options')) :
					echo '<div class="container">';
						echo get_field('web_content', 'options');
					echo '</div>';
				endif;
				// if(get_field('featured_webinar', 'options')):
				// 	echo '<div class="featured-webinar">';
				// 		echo '<div class="container">';
				// 			echo '<h3>Learn with Santa Fe Relocation</h3>';
				// 		echo '</div>';
				// 		echo '<div class="webinar-container">';
				// 			echo '<div class="absolute-position">';
				// 				echo '<div class="container">';
				// 					echo '<h3>Upcoming webinar</h3>';
				// 				echo '</div>';
				// 			echo '</div>';
				// 			echo '<div class="webinar-slide">';
				// 				foreach( get_field('featured_webinar', 'options') as $item ):
				// 					$banner = get_the_post_thumbnail_url( $item->ID, 'full');						
				// 					echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
				// 						echo '<div class="uk-overlay-primary">';
				// 							echo '<div class="uk-panel uk-flex uk-flex-center container-height">';
				// 								echo '<div class="uk-text-center">';
				// 									echo '<h3>'.get_the_title($item->ID).'</h3>';
				// 									echo '<a href="'.get_the_permalink($item->ID).'"><button class="primary button">Register for webinar</button></a>';
				// 								echo '</div>';
				// 							echo '</div>';
				// 						echo '</div>';
				// 					echo '</div>';
				// 				endforeach;
				// 			echo '</div>';
				// 			echo '<div class="absolute-position bottom">';
				// 				echo '<div class="container mid">';
				// 					echo '<div class="nav-slide">';
				// 						foreach( get_field('featured_webinar', 'options') as $item ):
				// 							$banner = get_the_post_thumbnail_url( $item->ID, 'full');
				// 							echo '<div>';						
				// 								echo '<div class="uk-background-cover bordered" style="background-image: url('.$banner.');">';
				// 									echo '<div class="container-height">';
				// 									echo '</div>';
				// 								echo '</div>';
				// 								echo '<h3>'.get_the_title($item->ID).'</h3>';
				// 								echo '<span style="color: #fff;">'.get_the_date('l F j, Y',$item->ID).'</span>';
				// 							echo '</div>';
				// 						endforeach;
				// 					echo '</div>';
				// 				echo '</div>';
				// 			echo '</div>';
				// 		echo '</div>';
				// 	echo '</div>';
				// endif;

				if(!get_field('featured_webinar', 'options')):
					echo '<div class="featured-webinar">';
						$selected = get_field('featured_webinar', 'options')->ID;
						$banner = get_the_post_thumbnail_url( $selected, 'full');
						echo '<div class="container">';
							echo '<h3>Featured Webinar</h3>';
						echo '</div>';
						echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
							echo '<div class="uk-overlay-primary">';
								echo '<div class="uk-panel uk-flex uk-flex-center uk-flex-middle container-height">';
									echo '<div class="uk-text-center">';
										echo '<h3>'.get_the_title($selected).'</h3>';
										$type = get_field('webinar_type', $selected);
										$v_source = get_field('video_source', $selected);

										$black = 'Webinar video';
										$red = 'Watch the video';

										if($v_source):
											$link = "#modal-media-youtube";
											$video = '';
											$video2 = '';
											if($v_source == 'youtube'):
												if(get_field('youtube_link', $selected)):
													$video = get_field('youtube_link', $selected);
												endif;
											endif;
											if($v_source == 'hosted'):
												if(get_field('internal_video_link', $selected)):
													$video = get_field('internal_video_link', $selected);
													$video2 = get_field('internal_video_link_ogv', $selected);
												endif;
											endif;
										endif;

										if($type == 'video'):
											echo '<a href="'.$link.'" '.( ( $type == 'video' ) ? 'uk-toggle' : '').' style="margin-right:10px;"><button class="primary button">Watch the video</button></a>';
											if( $v_source ):
												echo '<div id="modal-media-youtube" class="uk-flex-top" uk-modal>';
													echo '<div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">';
													    echo '<button class="uk-modal-close-outside" type="button" uk-close></button>';
												        if($v_source == 'youtube'):
												        	echo '<iframe src="https://www.youtube-nocookie.com/embed/'.$video.'" width="560" height="315" frameborder="0" uk-responsive uk-video></iframe>';
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
										else:
											echo '<a href="'.get_the_permalink($selected).'"><button class="primary button">Register</button></a>';
										endif;
										
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				$past = get_field('upcoming_webinars2', 'option');
				if( $past['selected_pages_gmw'] || $past['selected_pages_iw'] ):
					echo '<div class="tab-webinar upcoming">';
						echo '<div class="container">';
							echo '<h3>Upcoming webinars</h3>';
						echo '</div>';
						echo '<div class="main-tab">';
							echo '<div class="tab-component">';
								echo '<div class="container">';
									echo '<ul uk-tab="connect: #my-id">';
										echo '<li><a href="#">Global Mobility Webinars</a></li>';
										echo '<li><a href="#">Immigration Webinars</a></li>';
									echo '</ul>';
								echo '</div>';
							echo '</div>';
							echo '<div class="container uk-margin">';
								echo '<ul id="my-id" class="uk-switcher">';
									echo '<li>';
										$uw =  get_field('upcoming_webinars2', 'options');
										echo '<div class="tab-description">';
											echo $uw['description_gmw'];
										echo '</div>';
										echo '<div class="mobility">';
											// $args = array(
											//     'post_type' => 'mobility-webinar',
											//    	'tax_query' => array(
											//         array(
											//             'taxonomy' => 'web_ctg',
											//             'field'    => 'slug',
											//             'terms'    => 'global-mobility-webinars',
											//         ),
											//     ),
											// );
											// $query = new WP_Query( $args );
											// $posts = $query->get_posts();
											// foreach ( $posts as $item ):
												// echo '<div class="uk-card">';
												// 	echo '<a href="'.get_permalink( $item->ID ).'">';
												// 		echo '<div class="cards-bg">';
												// 			echo '<div class="uk-card-media-top">';
												// 				$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
												// 				echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
												// 					echo '<span>Webinar</span>';
												// 				echo '</div>';
												// 			echo '</div>';
												// 			echo '<div class="uk-card-body">';
												// 				echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
												// 				$excerpt = '';
												// 				if ( get_the_excerpt($item->ID) ):
												// 					$excerpt = get_the_excerpt($item->ID);
												// 				else:
												// 					$excerpt = $img['banner_description'];
												// 				endif;
												// 				echo '<p>'.myTruncate2($excerpt,150).'</p>';
												// 			echo '</div>';
												// 		echo '</div>';
												// 	echo '</a>';
												// echo '</div>';
											// endforeach;
											
											foreach ( $uw['selected_pages_gmw'] as $item ):
												echo '<div class="uk-card">';
													echo '<a href="'.get_permalink( $item->ID ).'">';
														echo '<div class="cards-bg">';
															echo '<div class="uk-card-media-top">';
																$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
																echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																	echo '<span>Webinar</span>';
																echo '</div>';
															echo '</div>';
															echo '<div class="uk-card-body">';
																echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
																$excerpt = '';
																if ( get_the_excerpt($item->ID) ):
																	$excerpt = get_the_excerpt($item->ID);
																else:
																	$excerpt = $img['banner_description'];
																endif;
																echo '<p>'.myTruncate2($excerpt,150).'</p>';
															echo '</div>';
														echo '</div>';
													echo '</a>';
												echo '</div>';
											endforeach;
										echo '</div>';
										echo '<div class="nav-button">';
										echo '</div>';
									echo '</li>';
									
									echo '<li>';
										echo '<div class="tab-description">';
											echo $uw['desription_iw'];
										echo '</div>';
										echo '<div class="immigration">';
											$uw =  get_field('upcoming_webinars2', 'options');
											foreach ( $uw['selected_pages_iw'] as $item ):
												echo '<div class="uk-card">';
													echo '<a href="'.get_permalink( $item->ID ).'">';
														echo '<div class="cards-bg">';
															echo '<div class="uk-card-media-top">';
																$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
																echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																	echo '<span>Webinar</span>';
																echo '</div>';
															echo '</div>';
															echo '<div class="uk-card-body">';
																echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
																$excerpt = '';
																if ( get_the_excerpt($item->ID) ):
																	$excerpt = get_the_excerpt($item->ID);
																else:
																	$excerpt = $img['banner_description'];
																endif;
																echo '<p>'.myTruncate2($excerpt,150).'</p>';
															echo '</div>';
														echo '</div>';
													echo '</a>';
												echo '</div>';
											endforeach;
										echo '</div>';
										echo '<div class="nav-button">';
										echo '</div>';
									echo '</li>';

								echo '</ul>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				$past = get_field('past_webinars2', 'option');
				if( $past['selected_pages_gmw'] || $past['selected_pages_iw'] ):
					echo '<div class="tab-webinar past">';
						echo '<div class="container">';
							echo '<h3>Past webinars</h3>';
						echo '</div>';
						echo '<div class="main-tab">';
							echo '<div class="tab-component">';
								echo '<div class="container">';
									echo '<ul uk-tab="connect: #someid">';
										echo '<li><a href="#">Global Mobility Webinars</a></li>';
										echo '<li><a href="#">Immigration Webinars</a></li>';
									echo '</ul>';
								echo '</div>';
							echo '</div>';
							echo '<div class="container uk-margin">';
								echo '<ul id="someid" class="uk-switcher">';
									echo '<li>';
										$uw =  get_field('past_webinars2', 'options');
										echo '<div class="tab-description">';
											echo $uw['description_gmw'];
										echo '</div>';
										echo '<div class="mobility">';
											// $args = array(
											//     'post_type' => 'mobility-webinar',
											//    	'tax_query' => array(
											//         array(
											//             'taxonomy' => 'web_ctg',
											//             'field'    => 'slug',
											//             'terms'    => 'global-mobility-webinars',
											//         ),
											//     ),
											// );
											// $query = new WP_Query( $args );
											// $posts = $query->get_posts();
											// foreach ( $posts as $item ):
												// echo '<div class="uk-card">';
												// 	echo '<a href="'.get_permalink( $item->ID ).'">';
												// 		echo '<div class="cards-bg">';
												// 			echo '<div class="uk-card-media-top">';
												// 				$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
												// 				echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
												// 					echo '<span>Webinar</span>';
												// 				echo '</div>';
												// 			echo '</div>';
												// 			echo '<div class="uk-card-body">';
												// 				echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
												// 				$excerpt = '';
												// 				if ( get_the_excerpt($item->ID) ):
												// 					$excerpt = get_the_excerpt($item->ID);
												// 				else:
												// 					$excerpt = $img['banner_description'];
												// 				endif;
												// 				echo '<p>'.myTruncate2($excerpt,150).'</p>';
												// 			echo '</div>';
												// 		echo '</div>';
												// 	echo '</a>';
												// echo '</div>';
											// endforeach;
											$uw =  get_field('past_webinars2', 'options');
											foreach ( $uw['selected_pages_gmw'] as $item ):
												echo '<div class="uk-card">';
													echo '<a href="'.get_permalink( $item->ID ).'">';
														echo '<div class="cards-bg">';
															echo '<div class="uk-card-media-top">';
																$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
																echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																	echo '<span>Webinar video</span>';
																echo '</div>';
															echo '</div>';
															echo '<div class="uk-card-body">';
																echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
																$excerpt = '';
																if ( get_the_excerpt($item->ID) ):
																	$excerpt = get_the_excerpt($item->ID);
																else:
																	$excerpt = $img['banner_description'];
																endif;
																echo '<p>'.myTruncate2($excerpt,150).'</p>';
															echo '</div>';
														echo '</div>';
													echo '</a>';
												echo '</div>';
											endforeach;
										echo '</div>';
										echo '<div class="nav-button">';
										echo '</div>';
									echo '</li>';
									
									echo '<li>';
										echo '<div class="tab-description">';
											echo $uw['desription_iw'];
										echo '</div>';
										echo '<div class="immigration">';
											$uw =  get_field('past_webinars2', 'options');
											foreach ( $uw['selected_pages_iw'] as $item ):
												echo '<div class="uk-card">';
													echo '<a href="'.get_permalink( $item->ID ).'">';
														echo '<div class="cards-bg">';
															echo '<div class="uk-card-media-top">';
																$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
																echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																	echo '<span>Webinar video</span>';
																echo '</div>';
															echo '</div>';
															echo '<div class="uk-card-body">';
																echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
																$excerpt = '';
																if ( get_the_excerpt($item->ID) ):
																	$excerpt = get_the_excerpt($item->ID);
																else:
																	$excerpt = $img['banner_description'];
																endif;
																echo '<p>'.myTruncate2($excerpt,150).'</p>';
															echo '</div>';
														echo '</div>';
													echo '</a>';
												echo '</div>';
											endforeach;
										echo '</div>';
										echo '<div class="nav-button">';
										echo '</div>';
									echo '</li>';

								echo '</ul>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				echo '<div class="buttons-container">';
					$first = get_field('first_button', 'option');
					$second = get_field('second_button', 'option');
					if ( ( $first['file'] || $second['file']  ) ):
						echo '<div class="container">';
							echo '<div class="uk-child-width-1-'.( ( $first['file'] && $second['file']  ? '2' : '1' ) ).'@m uk-grid-small uk-grid-match" uk-grid>';
								echo '<div><a href="'.$first['file'].'" tabindex="-1" target="_blank" ><button class="primary button tabindex="-1">'.$first['button_text'].'</button></a></div>';
								echo '<div><a href="'.$second['file'].'" tabindex="-1" target="_blank" ><button class="primary button tabindex="-1">'.$second['button_text'].'</button></a></div>';
							echo '</div>';
						echo '</div>';
					endif;
				echo '</div>';
				echo '<div class="container-fluid fourth-content"><div class="uk-cover-container"><img src="https://www.santaferelo.com/wp-content/uploads/2019/02/iStock-469484166.jpg" alt="" uk-cover="" class="uk-cover"><div class="uk-overlay uk-position-cover uk-overlay uk-light uk-flex uk-flex-center uk-flex-middle"><div class="uk-position-center"><div>Email subscription</div><div class="container description" style="font-size: 24px;padding-top: 24px;">Get the latest insights, research and updates delivered straight to your inbox</div><a href="https://www.santaferelo.com/en/keep-me-informed/" target="" class="button primary" style="margin-top:15px;">Subscribe</a></div></div></div></div>';
				//gms removed 6-8-2020
				// if( get_field('image', 'option') || get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
				// 	echo '<div class="row">';
				// 		echo '<div class="mobility-global">';
				// 			echo '<div class="container">';
				// 				echo '<div class="uk-child-width-1-2@m uk-grid-collapse" uk-grid>';
				// 					if( get_field('image', 'option') ):
				// 						$img = get_field('image', 'option');
				// 						echo '<div>';
				// 							echo '<img src="'.$img['url'].'" alt="global mobility survey">';
				// 						echo '</div>';
				// 					endif;
				// 					if ( get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
				// 						if ( get_field('description', 'option') ):
				// 							echo '<div>';
				// 								echo get_field('description', 'option');
				// 								if ( get_field('file', 'option') || get_field('video', 'option') ):
				// 									echo '<div class="buttons-row">';
				// 										if( get_field('file', 'option') ):
				// 											echo '<a class="pdf" href=#>Request a free copy</a>';
				// 										endif;
				// 										if( get_field('video', 'option') ):
				// 											echo '<a class="video" href="'.get_field('video', 'option').'" target="_blank">Take the Survey</a>';
				// 										endif;
				// 									echo '</div>';
				// 								endif;
				// 							echo '</div>';
				// 						endif;
				// 					endif;
				// 				echo '</div>';
				// 			echo '</div>';
				// 		echo '</div>';
				// 	echo '</div>';
				// endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 