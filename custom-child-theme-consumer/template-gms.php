<?php 
/*
Template Name: GMS Layout
Template Post Type: mobility-survey
*/

	get_header();
	echo '<section class="main-layout inner-page-layout page-template-template-version2">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('banner')):
					$banner = get_field('banner');
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
											$link = '';
											$title = '';
											if(get_field('button_type') == 'pdf'):
												if(get_field('wp_file_upload')):
													$item = get_field('wp_file_upload');
													$link = $item['url'];
													$title = 'Download your copy';
												endif;
											elseif(get_field('button_type') == 'form'):
												if(get_field('form_page')):
													$link = get_field('form_page');
													$title = 'Download the report';
													if(is_single(8291)):
														$title = 'Download the report';
													endif;
												endif;
											endif;
											if(get_field('wp_file_upload') || get_field('form_page')):
												echo '<div class="cta">';
													echo '<a href="'.$link.'" target="_blank" class="button primary">'.$title.'</a>';
												echo '</div>';
											endif;
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
				global $post;
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container">';
						the_content();
					echo '</div>';
				endif;
				if( have_rows('content_blocks') ):
					echo '<div class="content-block">';
					    while ( have_rows('content_blocks') ) : the_row();
					        if( get_row_layout() == 'front_page_header-subheader-repeater' ):
					        	echo '<div class="header-subheader-repeater">';
					        		echo '<div class="container">';
				        				if ( get_sub_field( 'custom' ) ):
					        				$clone = get_sub_field('clone');
					        				$block = $clone['front_page-numbers'];
					        			else:
					        				$block = get_field( 'front_page-numbers', 'option' );
					        			endif;
				        				echo ( $block['section_title'] ? "<p>".$block['section_title']."</p>" : "" );
				        				echo ( $block['section_description'] ? "<p>".$block['section_description']."</p>" : "" );
				        				if ( $block['items'] ):
				        					echo '<div uk-grid>';
						        				foreach ( $block['items'] as $item ):
						        					echo '<div class="uk-width-expand">';
						        						echo ( $item['header'] ? "<div class='number' ".( $item['header_color'] ? "style=color:".$item['header_color'] : "" ).">".$item['header']."</div>" : "" );
						        						echo ( $item['sub_header'] ? "<div class='sub-header'>".$item['sub_header']."</div>" : "" );
						        					echo '</div>';
						        				endforeach;
						        			echo '</div>';
					        			endif;
					        		echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'multi-link-block-custom' ): 
					        	echo '<div class="multi-link-block-custom">';
					        		echo '<div class="container">';
					        			echo '<div class="bordered '.get_sub_field('style_new').'">';
							        		if ( get_sub_field( 'custom' ) ):
						        				$clone = get_sub_field('clone');
						        				$block = $clone['multi-link-block'];
						        			else:
						        				$block = get_field( 'multi-link-block', 'option' );
						        			endif;
					        				echo ( $block['link_title'] ? "<h3>".$block['link_title']."</h3>" : "" );
					        				echo ( $block['button_link'] ? "<a href='".( $block['button_link']['url'] )."' target='".$block['button_link']['target']."' class='button primary'>".$block['button_link']['title']."</a>" : "" );
					        			echo '</div>';
						        	echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'footer_content_multicolor-banner' ):
					        	if ( get_sub_field( 'custom' ) ):
			        				$clone = get_sub_field('clone');
			        				$block = $clone['multicolor-banner'];
			        			else:
			        				$block = get_field( 'multicolor-banner', 'option' );
			        			endif;
					        	echo '<div class="multicolor-banner" style="background-image: linear-gradient(80deg, '.$block['background_color_-_left'].', '.$block['background_color_-_right'].');">';
				        			// pre( $block );
					        		echo '<div class="container">';
					        			echo '<div class="banner-logo">';
				        					echo '<img src="'.$block['banner_logo']['url'].'">';
				        				echo '</div>';
				        				echo '<div class="banner-description">';
				        					echo $block['banner_description'];
				        				echo '</div>';
			        				echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'get_in_touch' ): 
					        	$block = get_field('get_touch_clone', 'option');
					        	if ( get_sub_field( 'custom' ) ):
			        				$clone = get_sub_field('clone');
			        				$block = $clone['get_touch_clone'];
			        			else:
			        				$block = get_field( 'get_touch_clone', 'option' );
			        			endif;
					        	echo '<div class="icon-item" '.( $block['background_color'] ? 'style="background-color:'.$block['background_color'].'"' : '' ).'>';
					        		echo '<div class="container">';
					        			echo ( $block['section_title'] ? "<h3>".$block['section_title']."</h3>" : "" );
				        				echo ( $block['section_description'] ? "<p>".$block['section_description']."</p>" : "" );
					        			if ( $block['icon_item'] ):
					        				echo '<div class="uk-grid-match" uk-grid>';
							        			foreach ( $block['icon_item'] as $item ):
							        				echo '<div class="uk-width-expand">';
							        					if ( $item['border_color'] ):
							        					echo '<div class="bordered" style="border-color:'.$item['border_color'].';">';
							        					endif;
								        					echo ( $item['icons'] ? '<div class="uk-inline icon-container"><div class="uk-position-center"><i class="'.$item['icons'].'"></i></div></div>' : '' );
								        					echo '<div class="text_wrapper">';
									        					echo ( $item['title'] ? '<p class="title">'.$item['title'].'</p>' : '' );
									        					echo ( $item['description'] ? '<p class="description">'.$item['description'].'</p>' : '' );
									        					echo ( $item['link'] ? '<a href="'.$item['link']['url'].'" target="'.( $item['link']['target'] ? "_blank" : "_self").'" class="icon-link">'.$item['link']['title'].'</a>' : '' );
									        				if ( $item['border_color'] ):
									        				echo '</div>';
							        					echo '</div>';
							        					endif;
								        			echo '</div>';
							        			endforeach;
						        			echo '</div>';
						        		endif;
					        		echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'icons_section' ): 
					        	//echo '<div class="icon-item" '.( get_sub_field('background_color') ? 'style="background-color:'.get_sub_field('background_color').'"' : '' ).'>';
					        	echo '<div class="icon-item new_home nh" ';
					        	//if ( get_sub_field('background_color') || get_sub_field('font_color') ):
					        		echo 'style="';
					        		if ( get_sub_field('background_color') ):
					        			echo 'background-color:'.get_sub_field('background_color').';';
					        		endif;
					        		if ( get_sub_field('font_color') ):
					        			echo 'color:'.get_sub_field('font_color').';';
					        		else:
					        			echo 'color:#353c41;';
					        		endif;
					        		echo '">';
					        	//endif;
					        		echo '<div class="container">';
					        			echo ( get_sub_field('section_title') ? "<h3>".get_sub_field('section_title')."</h3>" : "" );
				        				echo ( get_sub_field('section_description') ? "<p>".get_sub_field('section_description')."</p>" : "" );
					        			if ( get_sub_field('icon_item') ):
					        				echo '<div uk-grid uk-height-match="target: > div > .bordered p.description">';
					        					$many = count( get_sub_field('icon_item') ) ;
							        			foreach ( get_sub_field('icon_item') as $item ):
							        				echo '<div class="'.( $many > 4 ? 'uk-width-1-2@s uk-width-1-4@m': 'uk-width-expand').'">';
								        					if ( $item['color'] ):
								        					echo '<div class="bordered" style="border-color:'.$item['color'].';">';
								        					endif;
										        					echo ( $item['icons'] ? '<div class="uk-inline icon-container"><div class="uk-position-center"><i class="'.$item['icons'].'"></i></div></div>' : '' );
										        					echo '<div class="text_wrapper">';
										        					echo ( $item['title'] ? '<p class="title">'.$item['title'].'</p>' : '' );
										        					echo '<p class="description">'.$item['description'].'</p>';
										        					echo ( $item['link'] ? '<a href="'.$item['link']['url'].'" target="'.( $item['link']['target'] ? "_blank" : "_self").'" class="icon-link">'.$item['link']['title'].'</a>' : '' );
										        					echo '</div>';
									        				if ( $item['color'] ):
								        					echo '</div>';
								        					endif;
								        			echo '</div>';
							        			endforeach;
						        			echo '</div>';
						        		endif;
					        		echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'review' ):
					         	if ( get_field('testimonial', 'option') ):
					         		$review = get_field('testimonial', 'option');
						        	echo '<div class="review">';
						        		echo '<div class="title">';
							        		echo '<h3>Our award winning services aim to</h3>';
							      			echo '<h3>deliver exceptional moving experiences</h3>';
							      		echo '</div>';
						        		echo '<div class="container">';
						        			// echo '<div class="title">';
					        				// 	echo '<h3 style="text-align: center;">Our award winning services aim to</h3>';
					        				// 	echo '<h3 style="text-align: center;">deliver exceptional moving experiences</h3>';
					        				// echo '</div>';
						        			if ( $review['reviews'] ):
						        				echo '<div class="uk-grid-large" uk-grid>';
								        			foreach (  $review['reviews'] as $item ):
								        				echo '<div class="uk-width-expand">';
								        					echo ( $item['review'] ? '<div class="testimonial">'.myTruncate2($item['review'],200).'</div>' : '' );
								        					echo ( $item['name'] ? '<div class="client">'.$item['name'].'</div>' : '' );
								        					echo ( $item['star_rating'] ? '<div id="rating"><span class="stars">'.$item['star_rating'].'</span></div>' : '' );
									        			echo '</div>';
								        			endforeach;
							        			echo '</div>';
							        		endif;
							        		if ( $review['button'] ):
							        			echo '<div class="review-button">';
							        				echo ( $review['button'] ? '<a href="'.$review['button']['url'].'" target="'.( $review['button']['target'] ? "_blank" : "_self").'" class="icon-link secondary button">'.$review['button']['title'].'</a>' : '' );
							        			echo '</div>';
							        		endif;
						        		echo '</div>';
						        	echo '</div>';
						        endif;

						    if ( get_field('widget', 'option') ):
						    	$review = get_field('widget', 'option');
						    	   echo '<div class="homepage2">';
										echo '<div class="container">';
											echo $review['widget_header'];
											echo $review['widget_script'];
										echo '</div>';
									echo '</div>';
							endif;

						    elseif( get_row_layout() == 'two_column' ):
						    	if ( get_sub_field('column') ):
							    	echo '<div class="two-column">';
							        	echo '<div class="container">';
								        	echo '<div class="uk-grid-large" uk-grid>';
								        		foreach ( get_sub_field('column') as $item ):
								        			echo '<div class="uk-width-expand">';
									        			echo ( $item['header'] ? '<h3>'.$item['header'].'</h3>' : '' );
									        			if ( $item['item'] ):
									        				echo '<ul class="'.$item['list_style'].'">';
									        				foreach ( $item['item'] as $list ):
									        					echo '<li>';
									        						if ( $list['link'] ):
									        							if ( $list['link']['url'] ):
									        								echo '<a href="'.$list['link']['url'].'" target="'.( $list['link']['target'] ? '_blank' : '_self').'">';
									        							endif;
									        						endif;
									        							echo $list['list_item'];
									        						if ( $list['link'] ):
									        							if ( $list['link']['url'] ):
									        								echo '<i class="material-icons">chevron_right</i>';
									        								echo '</a>';
									        							endif;
									        						endif;
									        					echo '</li>';
									   
									        				endforeach;
									        				echo '</ul>';
									        			endif;
									        		echo '</div>';
								        		endforeach;
								        	echo '</div>';
							        	echo '</div>';
							        echo '</div>';
							    endif;
							elseif( get_row_layout() == 'accordion' ):
						    	if ( get_sub_field('accordion') ):
							    	echo '<div class="content-accordion">';
							        	echo '<div class="container">';
							        		echo '<ul uk-accordion>';
								        		foreach ( get_sub_field('accordion') as $key => $item):
								        			echo '<li' .( ( $key == 0 ) ? " class='uk-open'" : "" ).'>';
								        				echo '<a class="uk-accordion-title" href="#">'.$item['title'].'</a>';
								        				echo '<div class="uk-accordion-content">';
								        					echo $item['description'];
								        				echo '</div>';
								        			echo '</li>';
									        	endforeach;
									        echo '</ul>';
							        	echo '</div>';
							        echo '</div>';
							    endif;

							 elseif( get_row_layout() == 'virtual_survey_thumb' ):
						    	if ( get_sub_field('vs-badge') ):
							    	echo '<div class="content-virtual">';
							        	echo '<div class="container">';
							        		echo '<ul class="uk-iconnav">';
											foreach ( get_sub_field('vs-badge', 'option') as  $item ):
												echo '<li><a href="'.$item['badge_link'].'" target="_blank"><img src="'.$item['badges'].'" width="153"/></a></li>';
											endforeach;
										echo '</ul>';
							        	echo '</div>';
							        echo '</div>';
							    endif;

							 elseif( get_row_layout() == 'virtual_survey_iframe' ):
							    	echo '<div class="content-virtual-iframe">';
							    		echo '<div class="resp-container">';
										echo '<iframe id="vsurvey" src="https://calendly.com/santa-fe-relocation/santafe-relocation-virtual-consultation?embed_domain=www.santaferelo.com&embed_type=Inline" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>';
										echo '</div>';
							        echo '</div>';
					        elseif( get_row_layout() == 'content' ):
					        	if ( get_sub_field('content') ):
					        		echo '<div class="text-content">';
							        	echo '<div class="container">';
								        	echo get_sub_field('content');
							        	echo '</div>';
							        echo '</div>';
							    endif;
					        elseif( get_row_layout() == 'destination_guides' ): 
					        	echo '<div class="destination-guide">';
					        		echo '<div class="container">'; 
					        			$guide = get_sub_field('destination');
					        			if ( $guide['title'] ):
					        				echo '<h3>'.$guide['title'].'</h3>';
					        			endif;
					        			if ( $guide['description'] ):
					        				echo '<p class="description">'.$guide['description'].'</p>';
					        			endif;
					        			if ( $guide['dropbox'] ):
					        				$posts = get_pages(
										        array(
										            'post_type'  	=> 'page',
										            'numberposts' 	=> -1,
										            'orderby' 		=> 'title',
										            'order'         => 'ASC',
										            'parent' => '382'
										        )
										    );
										    if( ! $posts ) return;
										    echo '<div class="selector-form">';
										    	echo '<h3>Select a country</h3>';
											    echo '<form id="selector">';
											    	echo '<div class="select-container">';
													    $out = '<select id="wpse34320_select"><option value="#">Select a Country</option>';
													    foreach( $posts as $p ):
													        $out .= '<option value="' . get_permalink( $p ) . '">' . esc_html( $p->post_title ) . '</option>';
													    endforeach;
													    $out .= '</select>';
													    echo $out;
													echo '</div>';
												    echo '<div class="button-container">';
												    	echo '<div class="foobarsubmit"><div class="primary button">See guide</div></div>';
												    echo '</div>';
												echo '</form>';
												echo '<div class="navi-link" style="display:none;">';
													foreach( $posts as $p ):
												        echo '<a href="' . get_permalink( $p ) . '">' . esc_html( $p->post_title ) . '</a>';
												    endforeach;
												echo '</div>';
												echo '<div class="ajax">';
												echo '</div>';
											echo '</div>';
					        			endif;
					        			if ( $guide['quick_links'] ):
					        				echo '<div class="uk-grid" uk-grid>';
							        			foreach ( $guide['quick_links'] as $item ):
							        				$banner =  get_field( 'banner', $item->ID );
							        				echo '<div class="uk-width-expand">';
							        					if ( $banner ):
							        						$banner = 'style="background-image:url('.$banner['banner_image']['url'].')"';
							        					endif;
							        					echo '<div '.$banner.'>';
							        						echo '<div class="uk-overlay-primary uk-flex uk-flex-middle uk-flex-center">';
								        						echo '<div>';
										        					echo '<div class="text-section">';
										        						echo '<h3 class="title">';
										        							echo $item->post_title;
										        						echo '</h3>';
										        					echo '</div>';
										        					echo '<a href="'.get_permalink( $item->ID ).'" class="desk_button">';
										        						echo '<button class="secondary button">See guide</button>';
										        					echo '</a>';
										        				echo '</div>';
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
						        		endif;
					        		echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'cf_dropdown' ): 
					        	echo '<div class="cf-dropdown">';
					        		echo '<div class="container">';
					        			echo '<div class="selector-form">';
						        			/*echo '<h3>What can we help you with?</h3>';*/
						        			$args = array(
						        				'post_type' => 'page',
						        				'meta_query' => array(
											        array(
											            'key' => '_wp_page_template',
											            'value' => 'template-tfa.php',
											        )
											    )
						        			);
											echo '<form id="selector-contact-forms">';
												    	echo '<div class="select-container">';
														    echo '<select class="contact-forms">';
																echo '<option value="-1">Please select</option>';
																echo '<option value="'.get_home_url().'/moving/moving-form-version-3/">Get a moving quote</option>';
																echo '<option value="'.get_home_url().'/corporate-relocation/corporate-form/">Corporate Relocation</option>';
																echo '<option value="'.get_home_url().'/storage/storage-form/">Get a storage quote</option>';
																echo '<option value="'.get_home_url().'/visa/work-permit/work-permit-form/">Apply for work visa</option>';
																echo '<option value="'.get_home_url().'/visa/permanent-residence/permanent-residence-form/">Apply for UK permanent residence</option>';
																echo '<option value="'.get_home_url().'/contact/our-offices/">Find your local office</option>';
																echo '<option value="'.get_home_url().'/ask-a-question/">Have a question</option>';
															echo '</select>';
														echo '</div>';
													    echo '<div class="button-container">';
													    	echo '<div class="foobarsubmit"><div class="primary button">Continue</div></div>';
													    echo '</div>';
											echo '</form>';
										echo '</div>';
					        		echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'moving_dropdown' ): 
					        	echo '<div class="cf-dropdown moving">';
					        		echo '<div class="container">';
					        			echo '<h3>Popular international destinations</h3>';
					        			$args = array(
					        				'post_type'  	=> array('country', 'destination-guides'),
					        				'posts_per_page'   => -1,
					        				'post_parent' => 0
					        			);
					        			$query = new WP_Query( $args );
					        			if ( $query->have_posts() ):
											echo '<div>';
												echo '<div class="select-container">';
													echo '<select class="form">';
														echo '<option value="-1">Where are you moving to?</option>';
														while ( $query->have_posts() ):
															$query->the_post();
															echo '<option value="'.get_permalink($query->post->ID).'">'.$query->post->post_title.'</option>';
														endwhile;
													echo '</select>';
												echo '</div>';											    
										    echo '</div>';
										    wp_reset_postdata();
									    endif;
					        		echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'location_listing' ): 
					        	$listing = get_sub_field('guide_listings');
								if( $listing || is_singular( 'uk-content' ) ):
									if ( is_singular( 'uk-content' ) ):
										$listing = get_field('local_guide_listings', 'option' );
									endif;
									echo'<div id="london_office">';
											echo '<div class="container">'; 
												if( $listing['title'] ):
													echo '<h3>'. $listing['title'] .'</h3>';	
												endif;
												if( $listing['listings'] ):
													echo '<ul>';
														echo '<li class="uk-child-width-1-2@s uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
															foreach ( $listing['listings'] as $item):
																echo '<div>';
																	if( $item['link'] ):
																		echo '<a href="'. $item['link'] .'">';
																	endif;
																	if( $item['item'] ):
																		echo '<p>' . $item['item'] . ( $item['link'] ? '<i class="material-icons">chevron_right</i>' : '').'</p>';
																	endif;
																	if( $item['link'] ):
																		echo '</a>';
																	endif;
																echo '</div>';
															endforeach;
														echo'</li>';
													echo'</ul>';
												endif;
											echo '</div>';
									echo '</div>';
				 				endif;
					        elseif( get_row_layout() == 'ip_module' ):
					        	echo '<div class="ipajax"></div>';
					        elseif( get_row_layout() == 'image_background_module' ):
					        	$fourth = get_sub_field('fourth_content');
								if($fourth):
									echo '<div class="container-fluid fourth-content">';
										if($fourth['background_image']):
											echo '<div class="uk-cover-container">';
												echo '<img src="'.$fourth['background_image']['url'].'" alt="" uk-cover>';
												echo '<div class="uk-overlay uk-position-cover uk-overlay uk-light uk-flex uk-flex-center uk-flex-middle">';
													if($fourth['header']):
														echo '<div class="uk-position-center">';
															echo '<div>';
																echo $fourth['header'];
															echo '</div>';
															if($fourth['description']):
																echo '<div class="container description">';
																	echo $fourth['description'];
																echo '</div>';
															endif;
														echo '</div>';
													endif;
													// if($fourth['description']):
													// 	echo '<div class="uk-position-bottom">';
													// 		echo '<div class="container">';
													// 			echo $fourth['description'];
													// 		echo '</div>';
													// 	echo '</div>';
													// endif;
												echo '</div>';
											echo '</div>';
										endif;
									echo '</div>';
								endif;
							elseif( get_row_layout() =='gms_archive' ):
				    			if ( get_sub_field('posts') ):
						    		echo '<div class="cr-listing">';
							    		echo '<div class="container">';
							    			echo '<h3 class="text-center">';
							    			if(is_single(8286)):
							    				echo 'Discover our Global Mobility Survey Report archive';
							    			else:
							    				echo 'Discover more about corporate relocation';
							    			endif;
							    			echo '</h3>';
						    				echo '<div class="uk-child-width-1-2@m uk-grid-small uk-grid-match" uk-grid ">';
												foreach( get_sub_field('posts') as $item):
													echo '<div class="uk-card uk-flex uk-flex-column">';
														// if( $item['link'] ):
														// echo '<a href="'.$item['link'].'">';
														// endif;
															echo '<div class="cards-bg">';
																echo '<div class="uk-card-media-top">';
																	$img = $item['image'];
																	echo '<div class="uk-background-cover" style="background-image: url('.$img['sizes']['custom'].');">';
																	echo '</div>';
																echo '</div>';
																echo '<div class="uk-card-body" >';
																	echo '<p class="uk-text-bold">'.$item['title'].'</p>';
																	echo '<p class="exerpt">'.$item['description'].'</p>';
																	if( $item['link'] ):
																		echo '<a href="'.$item['link'].'" class="button primary" target="_blank">Download</a>';
																	endif;
																echo '</div>';
															echo '</div>';
														// if( $item['link'] ):
														// echo '</a>';
														// endif;
													echo '</div>';
												endforeach;
												
											echo '</div>';
							    		echo '</div>';
							    	echo '</div>';
							    endif;
							endif;	
					    endwhile;
					echo '</div>';
				endif;
				$author = get_field('authors_block');
				if( $author ):
					echo '<div class="row">';
						echo '<div class="author-content">';
							echo '<div class="container">';
								echo '<h2>Authors</h2>';
								echo '<p style="margin-bottom: 48px;">';
								if(is_single(8286)):
									echo 'The reports are written my our subject matter experts. Each report also includes critical analysis and insights from industry leaders.';
								elseif(is_single(8291)):
									echo 'In addition to sharing the results from the Global Mobility survey 2020/21, this report also provides critical analysis and insights from our in-house subject matter experts and external industry leaders.';
								//else:
									//echo 'In addition to sharing the results from the Global Mobility Survey 2019, this report also provides critical analysis and insights from 17 industry leaders.';
								endif;
								echo '</p>';
								echo '<div class="uk-child-width-1-2@m" uk-grid>';
								foreach($author as $item):
									echo '<div>';
										echo '<div class="uk-grid-collapse" uk-grid>';
											if($item['image']):
												echo '<div class="profile-image uk-width-1-3@s">';
													echo '<img src="'.$item['image']['url'].'" class="uk-border-circle">';
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
				$author = get_field('authors_block_external');
				if( $author ):
					echo '<div class="row">';
						echo '<div class="author-content">';
							echo '<div class="container">';
								echo '<h3>Contributors</h3>';
								if(is_single(8291) || is_single(10255)){echo '<div class="uk-child-width-1-2@m" uk-grid>';}
									foreach($author as $item):
										echo '<div class="external-contributor">';	
											if( $item['name'] || $item['title'] || $item['description'] ):
												echo '<div class="profile-meta">';
													if($item['name']):
														echo '<div class="name"><i class="material-icons">check_circle</i>'.$item['name'].'</div>';
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
									endforeach; 
								if(is_single(8291)){echo '</div>';}
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				if( is_single( array(8286, 8291) ) ):
					echo '<div class="container-fluid fourth-content"><div class="uk-cover-container"><img src="https://www.santaferelo.com/wp-content/uploads/2019/02/iStock-469484166.jpg" alt="" uk-cover="" class="uk-cover"><div class="uk-overlay uk-position-cover uk-overlay uk-light uk-flex uk-flex-center uk-flex-middle"><div class="uk-position-center"><div>Email subscription</div><div class="container description">Get the latest insights, research and updates delivered straight to your inbox</div><a href="https://www.santaferelo.com/en/keep-me-informed/global-mobility-and-immigration-insights/" target="" class="button primary" style="margin-top:15px;">Subscribe</a></div></div></div></div>';
				endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 