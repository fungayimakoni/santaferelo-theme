<?php 
/*
Template Name: Corporate Immigration Template
Template Post Type: page
*/

get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('banner_corporate')):
					$banner = get_field('banner_corporate');
					if ( $banner['banner_image'] ):
						echo '<div class="page-banner">';
						echo '<style scoped>';
						    echo '.page-banner {background-color:'.$banner['background_color'].';}';
						    echo '.page-banner .banner-content > div{background-color:'.$banner['background_color'].';}';
						echo '</style>';
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
				global $post;
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container default-content">';
						the_content();
					echo '</div>';
					wp_reset_postdata();
				endif;
				if( have_rows('corporate_modules') ):
					echo '<div class="content-block">';
						
						    while ( have_rows('corporate_modules') ) : the_row();


						        if( get_row_layout() == 'colored_module' ):
						        	
						        	$bgc = get_sub_field( 'background_color' );
									$img = get_sub_field( 'image' ); 
									$content = get_sub_field( 'content' );
									$link = get_sub_field( 'link' );
									$orientation = get_sub_field( 'orientation' );

									echo '<div class="colored-module" style="background-color:'.( $bgc ? $bgc : '#000' ).';">';
										echo '<div class="container">';
											echo '<div uk-grid>';
												if( $orientation == 'image' ):
													if( $img ):
														echo '<div class="uk-width-1-2@s image">';
															echo '<img src="'.$img['sizes']['corporate'].'"  alt="'.$img['alt'].'">';
														echo '</div>';
													endif;
												endif;
												if( $content ):
													echo '<div class="uk-width-1-2@s uk-flex uk-flex-middle content">';
														echo '<div>';
															echo $content['title'] ? '<h3>'.$content['title'].'</h3>' : '';
															echo $content['description'] ? '<p>'.$content['description'].'</p>' : '';

															$style = '';
															if( get_sub_field( 'button_style' ) == '1' ):
															else: 
																$style = 'class="uniform-button"';
															endif;



															echo $link ? '<a href="'.$link['url'].'" '.$style.'>'.$link['title'].'</a>' : '';
														echo '</div>';
													echo '</div>';
												endif;
												if( $orientation == 'content' ):
													if( $img ):
														echo '<div class="uk-width-1-2@s image">';
															echo '<img src="'.$img['sizes']['corporate'].'" alt="'.$img['alt'].'">';
														echo '</div>';
													endif;
												endif;	
											echo '</div>';
										echo '</div>';
									echo '</div>';

						        elseif( get_row_layout() == 'single_button' ): 

						        	$content = get_sub_field( 'content' );
						        	$link = get_sub_field( 'link' );
						        	if( $link ):
							        	echo '<div class="single-button-module">';
							        		echo '<div class="container">';
							        			echo ( $content ? "<div class='content'>".$content."</div>" : "" );
							        			echo '<a class="uniform-button" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a>';
							        		echo '</div>';
							        	echo '</div>';
						        	endif;

						        elseif( get_row_layout() == 'offices_dropdown' ): 
						        	
			        				$args = array(
							            'post_type'  	=> 'offices',
							            'posts_per_page' => -1,
							            'orderby' 		=> 'title',
							            'order'         => 'ASC',
								    );
								    $offices = new WP_Query( $args );
								    if( $offices->have_posts() ) :
									    echo '<div class="selector-form">';
									    	echo '<div class="container">';
										    	echo '<h3>Our Offices</h3>';
										    	echo '<div class="uk-flex uk-flex-center">';
												    echo '<form id="selector">';
												    	echo '<div class="select-container">';
														    $out = '<select id="offices_linkjs"><option value="#">Select a city</option>';
												    		while( $offices->have_posts() ) : $offices->the_post();
														    
														        $out .= '<option value="' . get_the_permalink( ) . '">' . get_the_title() . '</option>';
														    endwhile;
														    $out .= '</select>';
														    echo $out;
														echo '</div>';
													    echo '<div class="button-container">';
													    	echo '<div class="foobarsubmit officebutton"><div class="primary button">See</div></div>';
													    echo '</div>';
													echo '</form>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
										wp_reset_postdata();
									endif;

								elseif( get_row_layout() == 'content' ):

									$text = get_sub_field('content');
						        	if ( $text ):
						        		echo '<div class="text-content">';
								        	echo '<div class="container">';
									        	echo $text;
								        	echo '</div>';
								        echo '</div>';
								    endif;

								elseif( get_row_layout() == 'call_to_action' ): 

									$content = get_sub_field( 'content' );
					        		$cta = get_sub_field( 'call_to_action_text' );
					        		$link = get_sub_field( 'button_link' );

						        	echo '<div class="multi-link-block-custom">';
						        		echo '<div class="container">';
						        			echo ( $content ? "<div class='description'>".$content."</div>" : "" );
						        			echo '<div class="bordered">';
						        				echo ( $cta ? "<h3>".$cta."</h3>" : "" );
						        				echo ( $link ? "<a href='".( $link['url'] )."' target='".$link['target']."' class='button primary'>".$link['title']."</a>" : "" );
						        			echo '</div>';
							        	echo '</div>';
						        	echo '</div>';    
							    
							    elseif( get_row_layout() == 'column_content' ): 

							    	$content = get_sub_field( 'content' );
							    	$title = get_sub_field( 'title' );
							    	$description = get_sub_field( 'description' );
							    	$item = get_sub_field( 'item' );
							    	$col = get_sub_field( 'num_col' );
									$button = get_sub_field( 'button' );

							    	if( $item ):
							    		echo '<div class="column-content">';
						        			echo '<div class="container">';
						        				echo $content ? '<div class="content">'.$content .'</div>' : '';
						        				echo $title ? '<h3>'. $title .'</h3>' : '';
						        				echo $description ? '<p>'. $description .'</p>' : '';

						        				if( $col == "2" ):
						        					$style = 'uk-child-width-1-2@s threecol';
						        				elseif( $col == "3" ): 
						        					$style = 'uk-child-width-1-3@s three';
						        				elseif( $col == "4" ): 
						        					$style = 'uk-child-width-1-4@m uk-child-width-1-2@s four';
						        				else: 
						        					$style = 'uk-child-width-1-4@m uk-child-width-1-2@s';

						        				endif;

						        				echo '<div class="'.$style.'  grid-column" uk-height-match="target: .meta" uk-grid>';
							        				foreach( $item as $i ):
							        					if( $i['content'] == 'custom'):

							        						$post = $i['custom'];

								        					echo '<div class="item">';
								        						echo '<div class="background">';
									        						echo $post['image'] ? '<div class="uk-background-cover image uk-height-medium" style="background-image: url('.$post['image']['url'].');"></div>' : '';
									        						echo '<div class="meta">';
										        						echo $post['title'] ? '<p class="title">'.$post['title'].'</p>' : '';
										        						echo $post['description'] ? '<p>'.$post['description'].'</p>' : '';
										        						echo $post['link'] ? '<a  href="'.$post['link']['url'].'" target="'.$post['link']['target'].'">'.$post['link']['title'].'</a>' : '';
										        					echo '</div>';
									        					echo '</div>';	
								        					echo '</div>';

								        				elseif( $i['content'] == 'page' ):

								        					echo '<div class="item">';
								        						$id = $i['page'][0]->ID;

								        						$featured_img_url =  get_field('banner', $id)['banner_image']['url'] ?: get_the_post_thumbnail_url( $id ,'full');
								        						$title = get_the_title( $id );
								        						$excerpt = get_field('banner', $id)['banner_description'] ?: get_the_excerpt( $id );
								        						$link = get_the_permalink( $id );

								        						echo '<div class="background">';
									        						echo $featured_img_url ? '<div class="uk-background-cover image uk-height-medium" style="background-image: url('.$featured_img_url.');"></div>' : '';
									        						echo '<div class="meta">';
										        						echo $title ? '<p class="title">'.$title.'</p>' : '';
										        						echo $excerpt ? '<p>'.$excerpt.'</p>' : '';
										        						echo $link ? '<a  href="'.$link.'">Learn more</a>' : '';
										        					echo '</div>';
									        					echo '</div>';
								        						

								        					echo '</div>';

								        				endif;
							        				endforeach;
						        				echo '</div>';

						        				if( $button ):        	
										        	echo '<a class="uniform-button" href="'.$button['url'].'" target="'.$button['target'].'">'.$button['title'].'</a>';	
									        	endif;
						        			echo '</div>';
						        		echo '</div>';
							    	endif;

							    elseif( get_row_layout() == 'leadership_module' ): 

							    	$title = get_sub_field( 'title' );
							    	$description = get_sub_field( 'description' );
							    	$profile = get_sub_field('profile_pages');
							    	
							    	if( $profile ):
							    		echo '<div class="leadership-module">';
						        			echo '<div class="container">';
						        				echo $title ? '<h3>'. $title .'</h3>' : '';
						        				echo $description ? '<p>'. $description .'</p>' : '';

												echo '<div class="profile-pages uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-small" uk-grid>';
													foreach( $profile as $item ):
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
											echo '</div>';
					        			echo '</div>';
									endif;

								elseif( get_row_layout() == 'page_content' ): 

									$title = get_sub_field( 'title' );
							    	$description = get_sub_field( 'description' );
							    	$pages = get_sub_field( 'pages' );

							    	if( $pages ):
							    		echo '<div class="pages-content">';
						        			echo '<div class="container">';
						        				echo $title ? '<h3>'. $title .'</h3>' : '';
						        				echo $description ? '<p>'. $description .'</p>' : '';

												echo '<div class="pages uk-child-width-1-3@m uk-grid-small" uk-height-match="target: .meta" uk-grid>';
													foreach( $pages as $item ):
														echo '<div>';

															$image = get_field( 'banner', $item );

															echo '<div class="uk-background-cover" style="background-image: url('.$image['banner_image']['url'].'); height: 200px;"></div>';
															echo '<div class="meta">';
																echo '<p class="title">'.get_the_title($item).'</p>';
																echo '<p>'.$image['banner_description'].'</p>';
																echo '<a href="'.get_the_permalink($item).'">Learn more</a>';
															echo '</div>';
														echo '</div>';
													endforeach;
												echo '</div>';
											echo '</div>';
					        			echo '</div>';
									endif;

								elseif( get_row_layout() == 'archive_content' ): 

									$title = get_sub_field( 'title' );
							    	$description = get_sub_field( 'description' );
							    	$pages = get_sub_field( 'items' );
							    	$section = get_sub_field( 'section' );
							    	$button = get_sub_field( 'button' );
							    	
							    	if( $pages ):
							    		echo '<div class="mobility-content">';
						        			echo '<div class="container">';
						        				echo $title ? '<h3>'. $title .'</h3>' : '';
						        				echo $description ? '<p>'. $description .'</p>' : '';

												echo '<div class="pages uk-child-width-1-3@m" uk-height-match="target: .meta" uk-grid>';
													foreach( $pages as $item ):
														echo '<div>';
															
															$image =  get_the_post_thumbnail_url( $item->ID,'full');
															
															$pill = ''; 
															if( $item->post_type == 'insights-news' ):
																$pill = 'News & Event'; 
															elseif( $item->post_type == 'mobility-webinar' ):
																$pill = 'Webinar'; 
															elseif( $item->post_type == 'mobility-survey' ):
																$pill = 'Survey'; 
															elseif( $item->post_type == 'mobility-wpapers' ):
																$pill = 'White paper'; 
															elseif( $item->post_type == 'mobility-events' ):
																$pill = 'Events'; 
															endif;

															echo '<a href="'.get_the_permalink( $item->ID ).'">';

																if( $section ):
																	echo '<div class="uk-background-cover"  style="background-image: url('.$image.'); height: 200px;">';
																		echo '<div class="pill">'.$pill.'</div>';
																	echo '</div>';
																else:
																	echo '<div class="uk-background-cover" style="background-image: url('.$image.'); height: 200px;"></div>';
																endif;
																
																echo '<div class="meta uk-inline">';
																	echo '<p class="title">'.get_the_title( $item->ID ).'</p>';
																	echo '<div class="uk-position-bottom-left">Posted: '.get_the_date( 'd/m/Y', $item->ID ).'</div>';
																echo '</div>';
															echo '</a>';

														echo '</div>';
													endforeach;
												echo '</div>';

												if( $button ):        	
										        	echo '<a class="uniform-button" href="'.$button['url'].'" target="'.$button['target'].'">'.$button['title'].'</a>';	
									        	endif;
											echo '</div>';
					        			echo '</div>';
									endif;

								elseif( get_row_layout() == 'archive_content_2' ): 

									$title = get_sub_field( 'title' );
							    	$description = get_sub_field( 'description' );
							    	$pages = get_sub_field( 'item' );
							    	$section = get_sub_field( 'section' );
							    	
							    	if( $pages ):
							    		echo '<div class="mobility-content">';
						        			echo '<div class="container">';
						        				echo $title ? '<h3>'. $title .'</h3>' : '';
						        				echo $description ? '<p>'. $description .'</p>' : '';


						        				$args = array(
										            'post_type'  	=> $pages,
										            'posts_per_page' => 3,
										            'orderby' 		=> 'date',
										            'order'         => 'DESC',
										            'post_parent' => 0
											    );
											    $offices = new WP_Query( $args );

											    if( $offices->have_posts() ) :
													echo '<div class="pages uk-child-width-1-3@m uk-grid-small" uk-height-match="target: .meta" uk-grid>';
														while( $offices->have_posts() ) : $offices->the_post();

															echo '<div>';
																
																$image =  get_the_post_thumbnail_url( get_the_ID(), 'full' );
																
																$pill = ''; 
																if( get_post()->post_type == 'insights-news' ):
																	$pill = 'News & Event'; 
																elseif( get_post()->post_type == 'mobility-webinar' ):
																	$pill = 'Webinar'; 
																elseif( get_post()->post_type == 'mobility-survey' ):
																	$pill = 'Survey'; 
																elseif( get_post()->post_type == 'mobility-wpapers' ):
																	$pill = 'White paper'; 
																elseif( get_post()->post_type == 'mobility-events' ):
																	$pill = 'Events'; 
																endif;

																echo '<a href="'.get_the_permalink( ).'">';

																	if( $section ):
																		echo '<div class="uk-background-cover"  style="background-image: url('.$image.'); height: 200px;">';
																			echo '<div class="pill">'.$pill.'</div>';
																		echo '</div>';
																	else:
																		echo '<div class="uk-background-cover" style="background-image: url('.$image.'); height: 200px;"></div>';
																	endif;
																	
																	echo '<div class="meta uk-inline">';
																		echo '<p class="title">'.get_the_title(  ).'</p>';
																		echo '<div class="uk-position-bottom-left">Posted: '.get_the_date( 'd/m/Y' ).'</div>';
																	echo '</div>';
																echo '</a>';

															echo '</div>';

														endwhile;
													echo '</div>';

													wp_reset_postdata();

												endif;

											echo '</div>';
					        			echo '</div>';
									endif;

								elseif( get_row_layout() == 'featured_content' ): 

									$pages = get_sub_field( 'items' );

									if( $pages ):
										echo '<div class="featured-content">';
						        			echo '<div class="container">';
						        				echo '<h3>Featured content</h3>';

						        				echo '<div class="pages uk-child-width-1-2@m uk-grid-small" uk-height-match="target: .meta" uk-grid>';
						        					foreach( $pages as $item ):

						        						$image = $item['image'];
						        						$title = $item['title'];
						        						$date = $item['date'];
						        						$link = $item['link'];
						        						echo '<div>';
							        						echo '<div class="uk-background-cover uk-flex uk-flex-center uk-flex-middle"  style="background-image: url('.$image.'); height: 270px;">';
							        							echo '<div class="meta">';
								        							echo '<h3>'.$title.'</h3>';
								        							echo '<p>Posted: '.$date.'</p>';
								        							if( $link ):															        	
															        	echo '<a class="uniform-button" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a>';	
														        	endif;
							        							echo '</div>';
							        						echo '</div>';
							        					echo '</div>';
						        					endforeach;
						        				echo '</div>';
						        			echo '</div>';
						        		echo '</div>';
						        	endif;

						        elseif( get_row_layout() == 'list' ): 

						        	$list = get_sub_field( 'items' );
						        	$style = get_sub_field( 'style' );
						        	
						        	if( $list ):
						        		echo '<div class="list-container">';
						        			echo '<div class="container">';
						        				
					        					echo '<div class="pages uk-child-width-1-'.$style.'@m uk-grid-small" uk-height-match="target: .meta" uk-grid>';
								        			foreach( $list as $item ):
								        				echo '<div>';
									        				if( $item['header'] ):
										        				echo '<p><b>'.$item['header'].'</p></b>';
										        			endif;
										        			echo '<ul>';
										        				foreach( $item['list_item'] as $item ):
										        					echo '<li>'.$item['item'].'</li>';
										        				endforeach;
										        			echo '</ul>';
										        		echo '</div>';
									        		endforeach;
									        	echo '</div>';

								        	echo '</div>';
						        		echo '</div>';
						        	endif;

						        elseif( get_row_layout() == 'gms' ): 

						        	echo '<div class="mobility-global">';
										echo '<div class="container">';
											echo '<div class="uk-child-width-1-2@m" uk-grid>';
												
												echo '<div class="uk-flex uk-flex-middle">';
													echo '<div>';
														echo '<img src="'.get_stylesheet_directory_uri().'/img/santa_fe_savanta_gms_screen_focus_black_start_the_survey_1200x627px.jpg">';
													echo '</div>';	
												echo '</div>';
											
												echo '<div>';
													echo '<h3>Santa Fe Relocation’s Global Mobility Survey 2021/22 – Complete the Survey!</h3>';
													echo '<p>Our 2021 survey is now live, and we’re inviting HR and Global mobility professionals to contribute:
													share your insights and help uncover trends, hot topics and emerging issues in the industry.</p>';

													echo '<p>The survey is available in five languages: English, Portuguese, Spanish, French and Chinese.
													It will only take 15 minutes to complete.</p>';

													echo '<p>Take part for your chance to receive an exclusive pre-publication copy of the report 
													and be entered into a prize draw to win one of ten £50 Amazon vouchers.
													The research is independently conducted on our behalf by Savanta.</p>';
													
													
													echo '<div class="buttons-row">';
														
														echo '<a class="video" href="https://survey.savanta.com/?id=56d23d9c6eSa63aa36c ">Take the survey</a>';
														
													echo '</div>';
													
												echo '</div>';
													
											echo '</div>';
										echo '</div>';
						        	echo '</div>';

							    
								elseif( get_row_layout() == 'form' ): 

							    	$text = get_sub_field('content');
						        	if ( $text ):
						        		echo '<div class="form-content">';
								        	echo '<div class="container">';
								        		echo '<div  uk-grid>';
								        			echo '<div class="uk-width-3-4@m">';
									        			echo $text;
									        		echo '</div>';
									        	echo '</div>';
								        	echo '</div>';
								        echo '</div>';
								    endif;    	

								elseif( get_row_layout() == 'map_module' ): 

							    	$info = get_sub_field('contact_information');
							    	$map = get_sub_field('map');

						        	
					        		echo '<div class="contact-map">';
							        	echo '<div class="container">';
							        			//pre( $map['lat'] );
							        			echo '<div class="uk-child-width-1-2@m" uk-grid>';
							        				echo '<div>';
							        					echo $info;
							        				echo '</div>';
											    	echo '<div id="map" data-lat="'.$map['lat'].'" data-lng="'.$map['lng'].'"></div>';
											    echo '</div>';
							        	echo '</div>';
							        echo '</div>';
								      	
							    elseif( get_row_layout() == 'accordion' ): 

							    	$content = get_sub_field( 'content' );
							    	$item = get_sub_field('item');

						        	if( $item ):
						        		echo '<div class="corporate-accordion">';
								        	echo '<div class="container">';
								        		echo ( $content ? "<div class='content'>".$content."</div>" : "" );
								        		echo '<ul uk-accordion>';
								        			foreach( $item as $i ):
									        			echo '<li>';
													        echo '<a class="uk-accordion-title" href="#">'.$i['title'].'</a>';
													        echo '<div class="uk-accordion-content">';
													            echo'<p>'.$i['description'].'</p>';
													        echo '</div>';
													    echo '</li>';
													endforeach;
												echo '</ul>';
								        	echo '</div>';
								        echo '</div>';
								    endif;

								elseif( get_row_layout() == 'imm_update' ): 

									$title = get_sub_field( 'title' );
							    	$description = get_sub_field( 'description' );
							    	// $pages = get_sub_field( 'item' );
							    	// $section = get_sub_field( 'section' );
							    	
							    	// if( $pages ):
							    		echo '<div class="mobility-content">';
						        			echo '<div class="container">';
						        				echo $title ? '<h3>'. $title .'</h3>' : '';
						        				echo $description ? '<div class="content">'. $description .'</div>' : '';


						        				$args = array(
										            'post_type'  	=> 'insights-news',
										            'posts_per_page' => 3,
										            'orderby' 		=> 'date',
										            'order'         => 'DESC',
										            'post_parent' => 0,
										            'tax_query' => array(             
											             array(
											                'taxonomy' => 'mobility-insights-news-cat',
											                'field' => 'slug',
											                'terms' => 'immigration-updates' // or the category name e.g. Germany
											            ),
											         )
											    );
											    $offices = new WP_Query( $args );

											    if( $offices->have_posts() ) :
													echo '<div class="pages uk-child-width-1-3@m uk-grid-small" uk-height-match="target: .meta" uk-grid>';
														while( $offices->have_posts() ) : $offices->the_post();

															echo '<div>';
																
																$image =  get_the_post_thumbnail_url( get_the_ID(), 'full' );
																

																echo '<a href="'.get_the_permalink( ).'">';

																	if( $section ):
																		echo '<div class="uk-background-cover"  style="background-image: url('.$image.'); height: 200px;">';
																			// echo '<div class="pill">'.$pill.'</div>';
																		echo '</div>';
																	else:
																		echo '<div class="uk-background-cover" style="background-image: url('.$image.'); height: 200px;"></div>';
																	endif;
																	
																	echo '<div class="meta uk-inline">';
																		echo '<p class="title">'.get_the_title(  ).'</p>';
																		echo '<div class="uk-position-bottom-left">Posted: '.get_the_date( 'd/m/Y' ).'</div>';
																	echo '</div>';
																echo '</a>';

															echo '</div>';

														endwhile;
													echo '</div>';

													echo '<a class="uniform-button" href="https://www.santaferelo.com/en/mobility-insights/news-and-blog/" target="">See all immigration updates</a>';
													wp_reset_postdata();

												endif;

											echo '</div>';
					        			echo '</div>';
									// endif;

					        	elseif( get_row_layout() == 'imm_insight' ): 

									$title = get_sub_field( 'title' );
							    	$description = get_sub_field( 'description' );
							    	// $pages = get_sub_field( 'item' );
							    	// $section = get_sub_field( 'section' );
							    	
							    	// if( $pages ):
							    		echo '<div class="mobility-content">';
						        			echo '<div class="container">';
						        				echo $title ? '<h3>'. $title .'</h3>' : '';
						        				echo $description ? '<div class="content">'. $description .'</div>' : '';


						        				$args = array(
										            'post_type'  	=> 'mobility-webinar',
										            'posts_per_page' => 3,
										            'orderby' 		=> 'date',
										            'order'         => 'DESC',
										            'post_parent' => 0,
										            
											    );
											    $offices = new WP_Query( $args );

											    if( $offices->have_posts() ) :
													echo '<div class="pages uk-child-width-1-3@m uk-grid-small" uk-height-match="target: .meta" uk-grid>';
														while( $offices->have_posts() ) : $offices->the_post();

															echo '<div>';
																
																$image =  get_the_post_thumbnail_url( get_the_ID(), 'full' );
																

																echo '<a href="'.get_the_permalink( ).'">';

																	if( $section ):
																		echo '<div class="uk-background-cover"  style="background-image: url('.$image.'); height: 200px;">';
																			// echo '<div class="pill">'.$pill.'</div>';
																		echo '</div>';
																	else:
																		echo '<div class="uk-background-cover" style="background-image: url('.$image.'); height: 200px;"></div>';
																	endif;
																	
																	echo '<div class="meta uk-inline">';
																		echo '<p class="title">'.get_the_title(  ).'</p>';
																		echo '<div class="uk-position-bottom-left">Posted: '.get_the_date( 'd/m/Y' ).'</div>';
																	echo '</div>';
																echo '</a>';

															echo '</div>';

														endwhile;
													echo '</div>';

													echo '<a class="uniform-button" href="https://www.santaferelo.com/en/mobility-insights/webinar/" target="">See all webinars</a>';
													wp_reset_postdata();

												endif;

											echo '</div>';
					        			echo '</div>';
									// endif;

					        	elseif( get_row_layout() == 'technology_module' ):
					        		$header = get_sub_field( 'header');
					        		$content = get_sub_field( 'content');
					        		$button = get_sub_field( 'button');
					        		$item = get_sub_field( 'item');
					        		$featured = get_sub_field( 'featured');

					        		echo '<div class="technology">';
					        			echo '<div class="container">';
					        				echo $header ? '<h3>'. $header .'</h3>' : '';
					        				echo $content ? '<div class="content">'. $content .'</div>' : '';
					        				echo $button ? '<a class="uniform-button" href="'.$button['url'].'" target="'.$button['target'].'">'.$button['title'].'</a>' : '';

					        				if($item):
					        					echo '<div class="mod uk-child-width-1-2@m uk-grid-small" uk-grid>';
								        			foreach( $item as $item1 ):
								        				echo '<div>';
									        				if( $item1['header'] ):
										        				echo '<p><b>'.$item1['header'].'</p></b>';
										        			endif;
										        			echo '<ul>';
										        				foreach( $item1['item'] as $item2 ):
										        					echo '<li>'.$item2['list_item'].'</li>';
										        				endforeach;
										        			echo '</ul>';
										        		echo '</div>';
									        		endforeach;
									        	echo '</div>';
					        				endif;

					        				if( $featured ):
							        			echo '<div class="mod2 uk-child-width-1-2@m uk-grid-small" uk-grid>';
							        				echo '<div>';
							        					echo $featured['header'] ? '<h3>'. $featured['header'] .'</h3>' : '';
							        					echo $featured['content'] ? '<div class="content">'. $featured['content'] .'</div>' : '';
							        				echo '</div>';
							        				echo $featured['image'] ? '<div><img src="'.$featured['image']['url'].'"  alt="'.$featured['image']['alt'].'"></div>' : '';
							        			echo '</div>';
							        		endif;

					        			echo '</div>';
					        		echo '</div>';

								endif;

							endwhile;
						
					echo '</div>';
				endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer();
?> 