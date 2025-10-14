<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('banner_dg', 'option')):
					$banner = get_field('banner_dg', 'option');
					if ( $banner['banner_image'] ):
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
				$main = get_field( 'main_content_dg', 'option');
				if( $main ):
					echo '<div class="container">';
						echo $main;
					echo '</div>';
				endif;
				if( get_field( 'dropdown_dg', 'option' ) == "on" || get_field( 'list_dg', 'option') == "on" ):
					echo '<div class="destination-guide">';
		        		echo '<div class="container">'; 
	        				$posts = get_posts(
						        array(
						            'post_type'  	=> 'destination-guides',
						            'numberposts' 	=> -1,
						            'orderby' 		=> 'title',
						            'order'         => 'ASC',
						            'post_parent' => 0,
						        )
						    );
						    if( ! $posts ) return;
						    echo '<div class="selector-form">';
						    	if( get_field( 'dropdown_dg', 'option' ) == "on" ):
							    	echo '<h3>Select a destination guide</h3>';
								    echo '<form id="selector">';
								    	echo '<div class="select-container">';
										    $out = '<select id="destination_select"><option value="#">Select a Country</option>';
										    foreach( $posts as $p ):
										        $out .= '<option value="' . get_permalink( $p ) . '">' . esc_html( $p->post_title ) . '</option>';
										    endforeach;
										    $out .= '</select>';
										    echo $out;
										echo '</div>';
									    echo '<div class="button-container">';
									    	echo '<div class="foobarsubmit"><div class="button">See guide</div></div>';
									    echo '</div>';
									echo '</form>';
									
									echo '<div class="ajax">';
									echo '</div>';
								endif;
								if( get_field( 'list_dg', 'option') == "on" ):
									echo '<div class="list-toogle" uk-toggle="target: #toggle-office; animation: uk-animation-slide-top-medium"><span>Show</span> full destination guide list <span uk-icon="icon: chevron-down;"></span></div>';
								endif;
							echo '</div>';
		        		echo '</div>';
		        	echo '</div>';
				endif;
				if( get_field( 'list_dg', 'option') == "on" ):
					echo '<div id="toggle-office" hidden>';
						echo '<div class="container">';
							echo '<h3>Destination Guides List</h3>';
							$continent = get_terms( array(
							    'taxonomy' 	=> 'region',
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
												    'taxonomy' 	=> 'region',
												) );
												echo '<div class="country-list uk-child-width-1-2@s uk-child-width-1-4@l" uk-grid="masonry: true">';
														$args = array(
															'post_type' 	=> 'destination-guides',
															'orderby'		=> 'name',
															'order'			=> 'ASC',
															'nopaging'		=> true,
															'post_parent'	=> 0,
															'tax_query' 	=> array(
																array(
																	'taxonomy' 	=> 'region',
																	'field'    => 'slug',
																	'terms'    =>  $item->slug,
																),
															),
														);
														$query = new WP_Query( $args );
														if ( $query->have_posts() ):
															while ( $query->have_posts() ): $query->the_post();
																$children_class = get_posts( array( 'post_parent' => $query->post->ID, 'post_type' 	=> 'destination-guides', 'post__not_in' => array(4690) ) );
																echo '<div class="card-body '.( !empty( $children_class ) ? 'parent-div':''  ).'">';
																	echo '<ul>';
																  		echo '<li>';
																  			echo '<a href="'.get_permalink( $query->post->ID ).'">'.str_replace('Moving to ','',$query->post->post_title).'</a>'.( !empty( $children_class ) ? '':'<span uk-icon="icon: chevron-right; ratio: 1"></span>'  ).'';
																	  		$args = array(
																			    'post_type'      => 'destination-guides',
																			    'posts_per_page' => -1,
																			    'post_parent'    => $query->post->ID,
																			    'order'          => 'ASC',
																			    'orderby'        => 'title',
																			    'post__not_in' => array(4690), //Commonwealth Bank of Australia
																			 );
																			$children = new WP_Query( $args );
																			if ( $children->have_posts() ):
																				echo '<ul class="children">';
																					while ( $children->have_posts() ): $children->the_post();
																						echo '<li>';
																		  	 				echo '<a href="'.get_permalink().'">'.str_replace('Moving to ','', get_the_title() ).'</a>';

																		  	 					//boroughs (not implemented )
																		  	 		// 			$args = array(
																								//     'post_type'      => 'destination-guides',
																								//     'posts_per_page' => -1,
																								//     'post_parent'    => $children->post->ID,
																								//     'order'          => 'ASC',
																								//     'orderby'        => 'title'
																								//  );
																								// $gchildren = new WP_Query( $args );
																								// if ( $gchildren->have_posts() ):
																								// 	echo '<ul class="grandchildren">';
																								// 		while ( $gchildren->have_posts() ): $gchildren->the_post();
																								// 			echo '<li>';
																							 //  	 				echo '<a href="'.get_permalink().'">'.str_replace('Moving to ','', get_the_title() ).'</a><span uk-icon="icon: chevron-right; ratio: 1"></span>';
																							 //  	 			echo '</li>';
																								// 		endwhile;
																								// 	echo '</ul>';
																								// 	wp_reset_query();
																								// endif;
																		  	 			echo '</li>';
																					endwhile;
																				echo '</ul>';
																				wp_reset_query();
																			endif;
																  		echo '</li>';	
																    echo '</ul>';
																echo '</div>';
													    	endwhile;
													    wp_reset_query();
													    endif;
												echo '</div>';
										    echo '</li>';
										endforeach;
										wp_reset_query();
									echo '</ul>';
								echo '</div>';
							echo '</div>';
						endif;
					echo '</div>';
				endif;
				if ( get_field( 'featured_dg', 'option' ) == "on" ):
					if ( get_field( 'destination_content', 'option' ) ):
						echo '<div class="destination-guide">';
							echo '<div class="container">';
		        				echo '<div class="uk-grid" uk-grid >';
				        			foreach ( get_field( 'destination_content', 'option' ) as $item ):
				        				$banner =  get_field( 'banner', $item->ID );
				        				echo '<div class="uk-width-expand">';
				        					if ( $banner ):
				        						$banner = 'background-image:url('.$banner['banner_image']['url'].'); background-position: 50% 50%;';
				        					endif;
				        					echo '<div style="'.$banner.' height: 100%;">';
				        						echo '<div class="uk-overlay-primary uk-flex uk-flex-middle uk-flex-center" style="height: 100%;">';
				        							echo '<a href="'.get_permalink( $item->ID ).'" class="desk_button">';
						        						echo '<div>';
								        					echo '<div class="text-section">';
								        						echo '<h3 class="title">';
								        							echo $item->post_title;
								        						echo '</h3>';
								        					echo '</div>';
								        				echo '</div>';
								        			echo '</a>';
							        			echo '</div>';
							        			echo '<div class="hidden_button">';
							        				echo'<a href="'.get_permalink( $item->ID ).'">';
							        					echo '<button class="secondary button">See guide</button>';
							        				echo '</a>';
							        			echo '</div>';
					        				echo '</div>';
				        				echo '</div>';
				        			endforeach;
				        		echo '</div>';
				        	echo '</div>';
				        echo '</div>';
	        		endif;
				endif;
				if( get_field( 'news_dg', 'option' ) == "on"):
					if( get_field( 'news_content', 'option') ):
						echo '<div class="cr-listing">';
				    		echo '<div class="container">';
					    		echo '<h3 class="text-center">Discover More</h3>';
				    			echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
									foreach( get_field( 'news_content', 'option') as $post ):
										setup_postdata( $post );
										echo '<div class="uk-card uk-flex uk-flex-column">';
											echo '<div class="cards-bg">';
												echo '<div class="uk-card-media-top">';
													if ( get_field('banner', $post->ID ) ):
														$img = get_field('banner', $post->ID);
														$img = $img['banner_image']['sizes']['custom'];
													else:
														$img = get_the_post_thumbnail_url( $post->ID, 'full' );
													endif;
													echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
													echo '</div>';
												echo '</div>';
												echo '<div class="uk-card-body">';
													echo '<a href="'.get_permalink(  ).'">';
														echo '<p class="uk-text-bold">'.get_the_title(  ).'</p>';
													echo '</a>';
													echo '<p class="exerpt">'.get_the_excerpt() .'</p>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									endforeach;
									wp_reset_postdata();
								echo '</div>';
				    		echo '</div>';
				    	echo '</div>';
					endif;
				endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 