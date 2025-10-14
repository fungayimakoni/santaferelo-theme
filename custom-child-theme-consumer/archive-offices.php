<?php get_header();

	/**
	 * Set cookie to handle redirection of user from consumer page(homepage) to `Our Offices` page
	**/
	//Insertion start --- 20 dec 2022 by Ankit
	if (wp_get_referer() === get_site_url() . '/en/'):
		setcookie('wordpress_Consumer_Refer_Offices', 1, time()+86400); 
	elseif(wp_get_referer() === get_site_url() . '/en/corporate-relocation/'):
		setcookie('wordpress_Consumer_Refer_Offices', 0, time()+86400); 
	endif;
	//Insertion end --- 20 dec 2022 by Ankit

	

	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				echo '<div class="container">';
					echo '<div class="text-content">';
						if (get_field('header_office', 'option' ) ):
							echo '<h1>'.get_field('header_office', 'option' ).'</h1>';
						endif;
						if (get_field('description_office', 'option' ) ):
							echo get_field('description_office', 'option' );
						endif;
					echo '</div>';
				echo '</div>';
				echo '<div class="local-offices hidden">';
					echo '<div class="container">';
						echo '<h3 class="uk-text-center">';
							echo 'Find your local office';
						echo '</h3>';
						echo '<div class="select-ajax uk-text-center">';
							$categories = get_terms( array(
							    'taxonomy' => 'country',
							) );
							echo '<div class="select-container">';
								echo '<select class="country">';
									echo '<option value="-1">Please select a country</option>';
									foreach($categories as $category):
										echo '<option value="'.$category->slug.'">'.$category->name.'</option>';
									endforeach;
								echo '</select>';
							echo '</div>';
							echo '<div class="select-container" style="display: none;">';
								echo '<select id="select-page" hidden>';
								echo '</select>';
							echo '</div>';
							echo '<button class="primary button" hidden disabled>Select office</button>';
						echo '</div>'; 
						echo '<div class="toggle uk-text-center" uk-toggle="target: #toggle-office">';
							echo '<span>Show</span> full office list <span uk-icon="icon: chevron-down;"></span>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
				echo '<div id="toggle-office">';
					echo '<div class="container">';
						echo '<h3>Full office list</h3>';
						$continent = get_terms( array(
						    'taxonomy' 	=> 'continent',
						    'orderby'  	=> 'id',
						    'order'		=> 'ASC',
						) );
					echo '</div>';
					if ( $continent ):
						echo '<div class="country-tab">';
							echo '<div class="tab-component">';
								echo '<div class="container">';
									echo '<ul uk-switcher="connect: #my-id" uk-tab>';
										foreach($continent as $item):
											echo '<li><a href="#">'.$item->name.'</a></li>';
										endforeach;
									echo '</ul>';
								echo '</div>';
							echo '</div>';
							echo '<div class="container uk-margin">';
								echo '<ul id="my-id" class="uk-switcher uk-margin">';
									foreach($continent as $item):
										echo '<li>';
											$country = get_terms( array(
											    'taxonomy' => 'country',
											) );
											echo '<div class="country-list uk-child-width-1-2@s uk-child-width-1-4@l" uk-grid="masonry: true">';
												foreach( $country as $itemc):
													$args = array(
														'post_type' => 'offices',
														'orderby'	=> 'name',
														'order'		=> 'ASC',
														'nopaging'	=> true,
														'tax_query' => array(
															'relation' => 'AND',
															array(
																'taxonomy' => 'continent',
																'field'    => 'slug',
																'terms'    =>  $item->slug,
															),
															array(
																'taxonomy' => 'country',
																'field'    => 'slug',
																'terms'    =>  $itemc->slug,
															),
														),
													);
													$query = new WP_Query( $args );
													if ( $query->have_posts() ):
														echo '<div>';
															echo '<div class="card-body">';
																echo '<h6>'.$itemc->name.'</h6>';
																echo '<ul>';
																	while ( $query->have_posts() ):
																		$query->the_post();
																  		echo '<li><a href="'.get_permalink( $query->post->ID ).'">'.$query->post->post_title.'</a><span uk-icon="icon: chevron-right; ratio: 1"></span></li>';
															    	endwhile;
															    echo '</ul>';
															echo '</div>';
													    echo '</div>';
														
												    endif;
												endforeach;
											echo '</div>';
									    echo '</li>';
									endforeach;
									wp_reset_query();
								echo '</ul>';
							echo '</div>';
						echo '</div>';
					endif;
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?>