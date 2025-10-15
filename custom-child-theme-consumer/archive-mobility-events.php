<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('event_banner', 'options')):
					$clone = get_field('event_banner', 'options');
					$banner = $clone['banner'];
					if ( $banner ):
						echo '<div class="page-banner">';

							echo '<div class="banner-wrapper">';
								echo '<div class="container banner-content">';
								if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
									echo '<div class="col-4">';
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

							/*echo '<div class="d-md-none d-block">';
								echo '<div class="container banner-content1">';
								if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
									echo ( $banner['banner_title'] ? "<h1>".$banner['banner_title']."</h1>" : "");
											echo ( $banner['banner_description'] ? "<p>".$banner['banner_description']."</p>" : "" );
											echo ( $banner['banner_button'] ? "<a href='".( $banner['banner_button']['url'] )."' target='".$banner['banner_button']['target']."' class='button primary'>".$banner['banner_button']['title']."</a>" : "" );
								endif;
								echo '</div>';
							echo '</div>';*/
						echo '</div>';
					endif;
				endif;
				if (get_field('event_content', 'options')) :
					echo '<div class="container">';
						echo get_field('event_content', 'options');
					echo '</div>';
				endif;
				if(get_field('featured_event', 'options')):
					echo '<div class="featured-event">';
						$selected = get_field('featured_event', 'options')->ID;
						$banner = get_the_post_thumbnail_url( $selected, 'full');
						echo '<div class="container">';
							echo '<h3>Next event</h3>';
						echo '</div>';
						echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
							echo '<div class="uk-overlay-primary">';
								echo '<div class="uk-panel uk-flex uk-flex-center uk-flex-middle container-height">';
									echo '<div class="uk-text-center">';
										echo '<h3>'.get_the_title($selected).'</h3>';
										echo '<a href="'.get_the_permalink($selected).'"><button class="primary button">Register for event</button></a>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				if( ( get_field('event_additional_content', 'options') || get_field('upcoming_events', 'options') || get_field('past_events', 'options') ) ):
					echo '<div class="tab-events">';
						if( get_field('event_additional_content', 'options') ):
							echo '<div class="container">';
								echo get_field('event_additional_content', 'options');
							echo '</div>';
						endif;
						if( get_field('upcoming_events', 'options') || get_field('past_events', 'options') ):
							echo '<div class="main-tab">';
								echo '<div class="tab-component">';
									echo '<div class="container">';
										echo '<ul uk-tab="connect: #my-id">';
											if ( get_field('upcoming_events', 'options') ):
												echo '<li><a href="#">Upcoming events</a></li>';
											endif;
											if ( get_field('past_events', 'options') ):
												echo '<li><a href="#">Past events</a></li>';
											endif;
										echo '</ul>';
									echo '</div>';
								echo '</div>';
								echo '<div class="container uk-margin">';
									echo '<ul id="my-id" class="uk-switcher">';
										if ( get_field('upcoming_events', 'options') ):
											echo '<li>';
												echo '<div class="uk-child-width-1-3@l uk-grid-small uk-grid-match" uk-grid>';
													foreach ( get_field('upcoming_events', 'options') as $item ):
														echo '<div class="uk-card">';
															echo '<a href="'.get_permalink( $item->ID ).'">';
																echo '<div class="cards-bg">';
																	echo '<div class="uk-card-media-top">';
																		$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
																		echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																			echo '<span>Events</span>';
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
																		echo '<p>'.$excerpt.'</p>';
																	echo '</div>';
																echo '</div>';
															echo '</a>';
														echo '</div>';
													endforeach;
												echo '</div>';
											echo '</li>';
										endif;
										if ( get_field('past_events', 'options') ):
											echo '<li>';
												echo '<div class="uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
													foreach ( get_field('past_events', 'options') as $item ):
														echo '<div class="uk-card">';
															echo '<a href="'.get_permalink( $item->ID ).'">';
																echo '<div class="cards-bg">';
																	echo '<div class="uk-card-media-top">';
																		$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
																		echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																			echo '<span>Events</span>';
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
																		echo '<p>'.$excerpt.'</p>';
																	echo '</div>';
																echo '</div>';
															echo '</a>';
														echo '</div>';
													endforeach;
												echo '</div>';
											echo '</li>';
										endif;
									echo '</ul>';
								echo '</div>';
							echo '</div>';
						endif;
					echo '</div>';
				endif;
				echo '<div class="container-fluid fourth-content"><div class="uk-cover-container"><img src="https://www.santaferelo.com/wp-content/uploads/2019/02/iStock-469484166.jpg" alt="" uk-cover="" class="uk-cover"><div class="uk-overlay uk-position-cover uk-overlay uk-light uk-flex uk-flex-center uk-flex-middle"><div class="uk-position-center"><div>Email subscription</div><div class="container description" style="font-size: 24px;padding-top: 24px;">Get the latest insights, research and updates delivered straight to your inbox</div><a href="https://www.santaferelo.com/en/keep-me-informed/global-mobility-and-immigration-insights/" target="" class="button primary" style="margin-top:15px;">Subscribe</a></div></div></div></div>';
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 