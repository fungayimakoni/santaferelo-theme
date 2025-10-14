<?php
/**
 * Template Name: Resources News
 */
get_header();
	
	echo '<section class="main-layout inner-page-layout post-type-archive">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				echo '<div class="container">';
					echo '<h1>News</h1>';
				echo '</div>';
			echo '</div>';
			echo '<div class="row">';
				echo '<div class="body-content">';
					echo '<div class="container">';
						// $qp = get_queried_object();
						$cpt = 'insights-news';
						$taxonomy = get_object_taxonomies( $cpt );
						$terms = get_terms( array(
						    'taxonomy' => $taxonomy[0],
						    'hide_empty' => false,
						) );
						if ( $terms ):
							echo '<div class="uk-grid-small" uk-grid>';
								echo '<div class="select-container uk-width-1-4@l uk-width-1-3@m ">';
									echo '<p>Select a topic</p>';
									echo '<select class="category" data-tax="'.$taxonomy[0].'" data-cpt="'.$cpt.'">';
										echo '<option value="all">All articles</option>';	
										foreach ( $terms as $item ):
											//pre($item);
											echo '<option value="'.$item->term_id.'">'.$item->name.'</option>';
										endforeach;
									echo '</select>';
								echo '</div>';
							echo '</div>';	
						endif;
						echo '<div class="ajax-listing">';
							$feat = get_field('featured_blog_post', 'option');
							$arg = '';
							if( wp_is_mobile() ):
								$args = array(
									'post_type' 		=> $cpt,
									'posts_per_page' 	=> 8,
									'paged'          	=> $paged,

								);
							else:
								$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
								$args = array(
									'post_type' 		=> $cpt,
									'posts_per_page' 	=> 12,
									'paged'          	=> $paged,
								);
							endif;
							$query = new WP_Query( $args );

							if ( $query->have_posts() ):
								echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
									// foreach( $feat as $item ):
									// 	pre(array(get_post_type( $item ), $cpt));
									// 	if( get_post_type( $item ) == $cpt ):
									// 		echo '<div class="uk-card featured">';
									// 			echo '<a href="'.get_permalink(  $item ).'">';
									// 				echo '<div class="cards-bg">';
									// 					echo '<div class="uk-card-media-top">';
									// 						$img = get_the_post_thumbnail_url( $item,'full' );
									// 						echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
									// 							if( get_post_type( $item ) == $cpt ):
									// 								echo '<span>Featured</span>';
									// 							endif;
									// 						echo '</div>';
									// 					echo '</div>';
									// 					echo '<div class="uk-card-body">';
									// 						echo '<p class="uk-text-bold">'.get_the_title( $item ).'</p>';
									// 						echo '<p class="date uk-position-bottom-left">Posted '.get_post_time( 'd/m/Y', false, $item, false ).'</p>';
									// 					echo '</div>';
									// 				echo '</div>';
									// 			echo '</a>';
									// 		echo '</div>';
									// 	endif;
									// endforeach;
									// $count = 0;
									while ( $query->have_posts() ):
										$query->the_post();
										// foreach( $feat as $item ):
										// 	if( get_post_type( $item ) == $cpt ):
										// 		if ( $query->post->ID ==  $item):
										// 		else:
													echo '<div class="uk-card uk-flex uk-flex-column">';
														echo '<a href="'.get_permalink(  $query->post->ID ).'">';
															echo '<div class="cards-bg">';
																echo '<div class="uk-card-media-top">';
																	$img = get_the_post_thumbnail_url(get_the_ID(),'custom');
																	echo '<div class="uk-background-cover" style="background-image: url('.$img.');">';
																	// if ($count == 0):
																	// 	echo '<span class="new">New</span>';
																	// endif;
																	echo '</div>';
																echo '</div>';
																echo '<div class="uk-card-body">';
																	echo '<p class="uk-text-bold">'.get_the_title( $query->post->ID ).'</p>';
																	echo '<p class="date uk-position-bottom-left">Posted '.get_post_time( 'd/m/Y' ).'</p>';
																echo '</div>';
															echo '</div>';
														echo '</a>';
													echo '</div>';
										// 		endif;
										// 	endif;
										// endforeach;
										// $count++;
									endwhile;
								echo '</div>';
								$total_pages = $query->max_num_pages;
								$current_page = max(1, get_query_var('paged'));
              
                      

								wp_bs_pagination($query->max_num_pages);
								wp_reset_postdata();
							endif;
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 