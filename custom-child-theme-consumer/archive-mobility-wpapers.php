<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('wpaper_banner', 'options')):
					$clone = get_field('wpaper_banner', 'options');
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
				if (get_field('wpaper_content', 'options')) :
					echo '<div class="container">';
						echo get_field('wpaper_content', 'options');
					echo '</div>';
				endif;
				if(get_field('featured_wpaper', 'options')):
					echo '<div class="featured-webinar">';
						$selected = get_field('featured_wpaper', 'options')->ID;
						$banner = get_the_post_thumbnail_url( $selected, 'full');
						echo '<div class="container">';
							echo '<h3>Latest white paper</h3>';
						echo '</div>';
						echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
							echo '<div class="uk-overlay-primary">';
								echo '<div class="uk-panel uk-flex uk-flex-center uk-flex-middle container-height">';
									echo '<div class="uk-text-center">';
										echo '<h3>'.get_the_title($selected).'</h3>';
										echo '<a href="'.get_the_permalink($selected).'"><button class="primary button">Learn more</button></a>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				if( ( get_field('wpaper_additional_content', 'options') || get_field('past_wpaper', 'options')  ) ):
					if( get_field('wpaper_additional_content', 'options') ):
						echo '<div class="container">';
							echo get_field('wpaper_additional_content', 'options');
						echo '</div>';
					endif;
					echo '<div class="wpaper-listing">';
						echo '<div class="container">';
							echo '<div class="uk-child-width-1-3@l uk-grid-small uk-grid-match" uk-grid>';
								foreach ( get_field('past_wpaper', 'options') as $item ):
									echo '<div class="uk-card">';
										echo '<a href="'.get_permalink( $item->ID ).'">';
											echo '<div class="cards-bg">';
												echo '<div class="uk-card-media-top">';
													$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
													echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
														echo '<span>White paper</span>';
													echo '</div>';
												echo '</div>';
												echo '<div class="uk-card-body">';
													echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
												echo '</div>';
											echo '</div>';
										echo '</a>';
									echo '</div>';
								endforeach;
							echo '</div>';		
						echo '</div>';
					echo '</div>';
				endif;
				echo '<div class="container-fluid fourth-content"><div class="uk-cover-container"><img src="https://www.santaferelo.com/wp-content/uploads/2019/02/iStock-469484166.jpg" alt="" uk-cover="" class="uk-cover"><div class="uk-overlay uk-position-cover uk-overlay uk-light uk-flex uk-flex-center uk-flex-middle"><div class="uk-position-center"><div>Email subscription</div><div class="container description" style="font-size: 24px;padding-top: 24px;">Get the latest insights, research and updates delivered straight to your inbox</div><a href="https://www.santaferelo.com/en/keep-me-informed/global-mobility-and-immigration-insights/" target="" class="button primary" style="margin-top:15px;">Subscribe</a></div></div></div></div>';
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