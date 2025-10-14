<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			if( get_the_ID() == 4690 ):
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
											echo '<div class="uk-width-2-3@l">';
												
												echo '<h1>'.get_the_title().'</h1>';
											
											echo '</div>';	
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			endif;
			echo '<div class="row">';
				if ( (get_field('banner') && get_the_ID() != 4690 ) ):
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

							echo '<div class="d-md-none d-block">';
								echo '<div class="container banner-content1">';
								if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
									echo ( $banner['banner_title'] ? "<h2>".$banner['banner_title']."</h2>" : "");
											echo ( $banner['banner_description'] ? "<p>".$banner['banner_description']."</p>" : "" );
											echo ( $banner['banner_button'] ? "<a href='".( $banner['banner_button']['url'] )."' target='".$banner['banner_button']['target']."' class='button primary'>".$banner['banner_button']['title']."</a>" : "" );
								endif;
								echo '</div>';
							echo '</div>';
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

				$args = array(
				    'post_type'      => 'destination-guides',
				    'posts_per_page' => -1,
				    'post_parent'    => $post->ID,
				    'order'          => 'ASC',
				    'orderby'        => 'title',
				    'post_status'     => 'publish'
				 );
				$parent = new WP_Query( $args );
				if ( $parent->have_posts() ) :
					echo'<div id="london_office">';
							echo '<div class="container">'; 
								echo '<h3>'.str_replace('Moving to ','', get_the_title( $post->ID ) ).' Guides</h3>';	
								echo '<ul>';
									echo '<li class="uk-child-width-1-2@s uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
										while ( $parent->have_posts() ) : $parent->the_post();
											echo '<div>';
													echo '<a href="'. get_the_permalink() .'">';
														echo '<p>' . str_replace('Moving to ','', get_the_title() ) . '<i class="material-icons">chevron_right</i></p>';
													echo '</a>';
											echo '</div>';
										endwhile;
									echo'</li>';
								echo'</ul>';

							echo '</div>';
					echo '</div>';
				else:
					$args = array(
					    'post_type'      => 'destination-guides',
					    'posts_per_page' => -1,
					    'post_parent' 		 => $post->post_parent,
					    'order'          => 'ASC',
					    'orderby'        => 'title',
					    'post__not_in' => array( $post->ID ),
					    'post_status'     => 'publish'
					 );
					$sibling = new WP_Query( $args );
					if ( $sibling->have_posts() ) :
						echo'<div id="london_office">';
								echo '<div class="container">'; 
									echo '<h3>Other Guides</h3>';	
									echo '<ul>';
										echo '<li class="uk-child-width-1-2@s uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
											while ( $sibling->have_posts() ) : $sibling->the_post();
												echo '<div>';
														echo '<a href="'. get_the_permalink() .'">';
															echo '<p>' . str_replace('Moving to ','', get_the_title() ) . '<i class="material-icons">chevron_right</i></p>';
														echo '</a>';
												echo '</div>';
											endwhile;
										echo'</li>';
									echo'</ul>';

								echo '</div>';
						echo '</div>';
					endif;
					wp_reset_postdata();
 				endif;
 				wp_reset_postdata();
 				
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
				        				echo ( $block['section_title'] ? "<h2>".$block['section_title']."</h2>" : "" );
				        				echo ( $block['section_description'] ? "<p>".$block['section_description']."</p>" : "" );
				        				if ( $block['items'] ):
				        					echo '<div uk-grid>';
						        				foreach ( $block['items'] as $item ):
						        					echo '<div class="uk-width-expand">';
						        						echo ( $item['header'] ? "<div class='number odometer' ".( $item['header_color'] ? "style=color:".$item['header_color'] : "" )." data-target=".$item['header'].">".floor( $item['header']*0.85 )."</div>" : "" );
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
					        			echo '<div class="bordered">';
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
									        					echo ( $item['link'] ? '<a href="'.$item['link']['url'].'" target="'.( $item['link']['target'] ? "_blank" : "_self").' class="icon-link">'.$item['link']['title'].'</a>' : '' );
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
					        	echo '<div class="icon-item" ';
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
							        				echo '<div class="'.( $many > 4 ? 'uk-width-1-4': 'uk-width-expand').'">';
								        					if ( $item['color'] ):
								        					echo '<div class="bordered" style="border-color:'.$item['color'].';">';
								        					endif;
										        					echo ( $item['icons'] ? '<div class="uk-inline icon-container"><div class="uk-position-center"><i class="'.$item['icons'].'"></i></div></div>' : '' );
										        					echo ( $item['title'] ? '<p class="title">'.$item['title'].'</p>' : '' );
										        					echo '<p class="description">'.$item['description'].'</p>';
										        					echo ( $item['link'] ? '<a href="'.$item['link']['url'].'" target="'.( $item['link']['target'] ? "_blank" : "_self").' class="icon-link">'.$item['link']['title'].'</a>' : '' );
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
						        		echo '<div class="container">';
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
							        				echo ( $review['button'] ? '<a href="'.$review['button']['url'].' target="'.( $review['button']['target'] ? "_blank" : "_self").' class="icon-link secondary button">'.$review['button']['title'].'</a>' : '' );
							        			echo '</div>';
							        		endif;
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
										        					echo '<a href="'.get_permalink( $item->ID ).'">';
										        						echo '<button class="secondary button">See guide</button>';
										        					echo '</a>';
										        				echo '</div>';
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
					        			echo '<h3>Select a form</h3>';
					        			$args = array(
					        				'post_type' => 'page',
					        				'meta_query' => array(
										        array(
										            'key' => '_wp_page_template',
										            'value' => 'template-tfa.php',
										        )
										    )
					        			);
					        			$query = new WP_Query( $args );
					        			if ( $query->have_posts() ):
											echo '<div>';
												echo '<div class="select-container">';
													echo '<select class="form">';
														echo '<option value="-1">Please choose from below</option>';
														while ( $query->have_posts() ):
															$query->the_post();
															//pre($query->post);
															echo '<option value="'.get_permalink($query->post->ID).'">'.$query->post->post_title.'</option>';
														endwhile;
													echo '</select>';
												echo '</div>';											    
										    echo '</div>';
										    wp_reset_postdata();
									    endif;
					        		echo '</div>';
					        	echo '</div>';
					        elseif( get_row_layout() == 'moving_dropdown' ): 
					        	echo '<div class="cf-dropdown moving">';
					        		echo '<div class="container">';
					        			echo '<h3>Popular international destinations</h3>';
					        			$args = array(
					        				'post_type'  	=> array('country', 'destination-guides'),
					        				'posts_per_page'   => -1,
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
					        elseif( get_row_layout() == 'ip_module' ):
						        echo '<div class="ipajax"></div>';
						    elseif( get_row_layout() =='corporate_reloaction_listing' ):
					    		$args = array(
				    				'post_type'		=> 'page',
				    				'meta_query'	=> array(
				    					array(
				    						'key'   => '_wp_page_template',
				    						'value' => 'template-commercial-services.php'
				    					)
				    				),
				    				'post_parent'    => get_the_ID(),
				    			);
				    			$query = new WP_Query( $args );
				    			if ( $query->have_posts() ):
						    		echo '<div class="cr-listing">';
							    		echo '<div class="container">';
							    			echo '<h3 class="text-center">'.get_sub_field('title').'</h3>';
						    				echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
												while ( $query->have_posts() ):
													$query->the_post();
													echo '<div class="uk-card uk-flex uk-flex-column">';
														echo '<a href="'.get_permalink(  $query->post->ID ).'">';
															echo '<div class="cards-bg">';
																echo '<div class="uk-card-media-top">';
																	$img = get_field('banner');

																	echo '<div class="uk-background-cover" style="background-image: url('.$img['banner_image']['url'].');">';
																	echo '</div>';
																echo '</div>';
																echo '<div class="uk-card-body">';
																	echo '<p class="uk-text-bold">'.get_the_title( $query->post->ID ).'</p>';
																	echo '<p class="exerpt">'.get_the_excerpt().'</p>';
																echo '</div>';
															echo '</div>';
														echo '</a>';
													echo '</div>';
												endwhile;
												wp_reset_postdata();
											echo '</div>';
							    		echo '</div>';
							    	echo '</div>';
							    endif;
					        endif;

					    endwhile;
					echo '</div>';
				endif;

 				$feature = get_field('featured_content');
 				global $post;
 				if ( $feature && $post->post_parent != '0' ):
 					if( $post->post_parent != '0' ):
 						$feature = get_field('featured_content', wp_get_post_parent_id( $post->ID ) );
 					endif;
 					echo '<div class="cr-listing">';
						echo '<div class="container">';
							echo '<h3 class="text-center">Discover more</h3>';
								echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
				 					foreach( $feature as $post): setup_postdata($post);
				 						echo '<div class="uk-card uk-flex uk-flex-column">';
											echo '<div class="cards-bg">';
												echo '<div class="uk-card-media-top">';
													$img = get_field('banner');
													echo '<div class="uk-background-cover" style="background-image: url('.$img['banner_image']['sizes']['custom'].');">';
													echo '</div>';
												echo '</div>';
												echo '<div class="uk-card-body">';
													echo '<a href="'.get_permalink().'">';
														echo '<p class="uk-text-bold">'.get_the_title().'</p>';
													echo '</a>';
													echo '<p class="exerpt">'.get_the_excerpt().'</p>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
				 					endforeach;
				 				echo '</div>';
				 			echo '</div>';
				 		echo '</div>';
				 	echo '</div>';
		 			wp_reset_postdata();
 				endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 