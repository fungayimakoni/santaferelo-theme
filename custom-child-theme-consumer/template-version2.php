<?php 
/*
Template Name: Corporate Relocation
Template Post Type: page, mobility-insights
*/
get_header();
		echo '<section class="main-layout inner-page-layout">';
			echo '<div class="container-fluid default-container">';
				echo '<div class="row '.( is_page('777') ? 'home' : '' ).'">';
	
					if (get_field('banner') && !is_page('928')):

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
									echo "<img src='".$banner['banner_image']['url']."' alt='".get_the_title()." hero background image' style='display:none;'>";
									echo '</div>';
								echo '</div>';
							echo '</div>';
						endif;
					endif;
					global $post;
					if(get_the_ID()=='777'):?>
					    <!-- <div class="alert-notice">
							<div class="container">
								<div class="notice-alert">
		
									<div class="title">
										<?=get_field('notification_title','option');?>
									</div>
									<div class="text">
									<?=get_field('notification_text','option',false,false);?>
									</div>
									<div class="cta-container">
										<a target="_blank" href="<?=get_field('notification_cta_link','option');?>" class="cta-button"><?=get_field('notification_cta_label','option');?></a>
									</div>
								</div>
							</div>
						</div> -->
						<style>
							.notice-alert{
								background-color:#3C91B4;
								color: #FFF;
								display: flex;
								flex-direction: column;
								align-items: center;
								justify-content: center;
								padding: 25px 50px 30px;
								margin-top:50px;
							}
							.notice-alert .title{
								font-size: 24px;
								font-weight: 700;
								line-height: 58px;
								font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
								margin-bottom: 10px;
							}
							.notice-alert .text{
								color: #FFF;
								margin-bottom: 20px;
							
							}
							.notice-alert .text p{
								color: #FFF;
								font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
								font-weight: 400;
								font-size: 16px;
								line-height: 24px;
							}
							.notice-alert .cta-container{
								margin-bottom: 20px;
							}
							.notice-alert .cta-container .cta-button{
								color: #FFF;
								font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
								font-weight: 700;
								font-size: 16px;
								border: 1px solid #FFF;
								padding:10px 35px;
							}
							.notice-alert .cta-container .cta-button:hover{
								border-color:#000;
								color: #000;
							}
							@media (max-width: 480px) {
								.notice-alert{
									padding: 25px;
									margin-top: 10px;
								}
							}

						</style>
					<?php endif;
					if (empty_content($post->post_content)) :
					else:
						echo '<div class="container">';
							the_content();
						echo '</div>';
					endif;
					if ( have_rows('content_editor') ):
						echo '<div class="container">';
							while ( have_rows('content_editor') ) : the_row();
								if( get_row_layout() == 'header_layout' ):
									if ( get_sub_field('header') ):
										echo '<'.get_sub_field('header_style').'>'.get_sub_field('header').'</'.get_sub_field('header_style').'>';
									endif;
								elseif( get_row_layout() == 'paragraph_layout' ): 
									if ( get_sub_field('paragraph') ):
										echo '<p>'.get_sub_field('paragraph').'</p>';
									endif;
								elseif( get_row_layout() == 'list_layout' ): 
									if ( get_sub_field('list') ):
										echo '<ul>';
											foreach ( get_sub_field('list') as $item ):
												echo '<li>'.$item['item'].'</li>';
											endforeach;
										echo '</ul>';
									endif;
								endif;
							endwhile;
						echo '</div>';
					endif;
					if( have_rows('content_blocks') ):
						echo '<div class="content-block content-blockv2">';
						    while ( have_rows('content_blocks') ) : the_row();
						    	if( get_row_layout() =='corporate_reloaction_listing' ):
						    		$args = array(
					    				'post_type'		=> 'page',
					    				'meta_query'	=> array(
					    					array(
					    						'key'   => '_wp_page_template',
					    						'value' => 'template-version2.php'
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

																		echo '<div class="uk-background-cover" style="background-image: url('.$img['banner_image']['sizes']['custom'].');">';
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
						    	if( get_row_layout() == 'column_listing' ):
								 	echo '<div class="container column-listing">';
								 		echo '<div class="uk-child-width-1-1@s uk-child-width-1-2@m uk-grid-match" uk-grid uk-height-match="target: > div .list">';
									 		$items = get_sub_field('column_listing');
									 		foreach( $items as $item ):
									 			echo '<div>';
						        					if ( $item['title_color'] ):
						        					echo '<div class="bordered" style="border-color:'.$item['title_color'].';">';
						        						echo ( $item['title'] ? '<h3 class="title" style="color:'.$item['title_color'].';">'.$item['title'].'</h3>' : '' );
						        					else:
						        						echo ( $item['title'] ? '<h3 class="title">'.$item['title'].'</h3>' : '' );
						        					endif;

						        					if ( $item['title_color'] ):
						        					echo '</div>';
						        					endif;
						        					if( $item['list'] ):
						        						echo '<div class="list">';
							        						echo '<ul>';
									        					foreach( $item['list'] as $item2 ):
									        						echo '<li>';
									        							if($item2['link']['url']):
									        							echo '<a href="'.$item2['link']['url'].'">';
									 									endif;
									        								echo $item2['item'];
									        							if($item2['link']['url']):
									        							echo '<i class="material-icons">chevron_right</i>';
									        							echo '</a>';
									 									endif;
									        						echo '</li>';
									        					endforeach;
									        				echo '</ul>';
									        			echo  '</div>';
								        			endif;
						        					//pre($item);
						        				echo '</div>';
									 		endforeach;
								 		echo '</div>';
								 	echo '</div>';								
						        elseif( get_row_layout() == 'front_page_header-subheader-repeater' ):
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
					        					echo '<img src="'.$block['banner_logo']['url'].'" alt="'.$block['banner_logo']['title'].'">';
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
						        				echo '<div class="uk-child-width-1-3@m uk-grid-match" uk-grid uk-height-match="target: > div > .bordered p.description">';
						        					$many = count( get_sub_field('icon_item') ) ;
								        			foreach ( get_sub_field('icon_item') as $item ):
								        				echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-match">';
									        					if ( $item['color'] ):
									        					echo '<div class="bordered" style="border-color:'.$item['color'].';">';
									        					endif;
											        					echo ( $item['icons'] ? '<div class="uk-inline icon-container"><div class="uk-position-center"><i class="'.$item['icons'].'" style="color:'.$item['color'].';"></i></div></div>' : '' );
											        					echo '<div class="text_wrapper">';
											        					echo ( $item['title'] ? '<p class="title" style="color:'.$item['color'].';">'.$item['title'].'</p>' : '' );
											        					echo '<p class="description">'.$item['description'].'</p>';
											        					echo ( $item['link'] ? '<a href="'.$item['link']['url'].'" target="'.( $item['link']['target'] ? "_blank" : "_self").'" class="icon-link">'.$item['link']['title'].'</a>' : '' );
										        				if ( $item['color'] ):
										        						echo '</div>';
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



									// TRUSTPILOT
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
						        elseif( get_row_layout() == 'call_to_action_block' ): 
						        	echo '<div class="call-to-action">';
						        		echo '<div class="container">';
						        			echo 'Call to Action Block';
						        		echo '</div>';
						        	echo '</div>';
						        elseif( get_row_layout() == 'colored_module' ):
						        	
						        	$bgc = get_sub_field( 'background_color' );
									$img = get_sub_field( 'image' ); 
									$content = get_sub_field( 'content' );
									$link = get_sub_field( 'link' );
									$orientation = get_sub_field( 'orientation' );

									$updated_bgc  = '';
									if( $bgc == '#ffffff'):
										$updated_bgc = 'invert';
									endif;

									

									echo '<div class="colored-module '.$updated_bgc.'" style="background-color:'.( $bgc ? $bgc : '#000' ).';margin-bottom:0;">';
										echo '<div class="container">';
											echo '<div uk-grid>';
												if( $orientation == 'image' ):
													if( $img ):
														echo '<div class="uk-width-1-2@s image">';
														echo wp_get_attachment_image( $img['id'], 'corporate', false, ['alt'=>$img['alt']] );
															//echo '<img src="'.$img['sizes']['corporate'].'"  alt="'.$img['alt'].'">';
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
							    	
						        endif;
						    endwhile;
						echo '</div>';
					endif;
					if ( get_field( 'form_assembly_forms', 'option' ) ):
						$forms = get_field( 'form_assembly_forms', 'option' );
						foreach ( $forms['form_list'] as $form ):
							$postid = url_to_postid( $form['page'] );
							if ( $postid == get_the_ID() ):
								echo '<div class="container">';
									echo do_shortcode('[formassembly formid="'.$form['form_assembly_id'].'" server="https://santafe.tfaforms.net"]');
								echo '</div>';
							endif;
						endforeach;
					endif;
				echo '</div>';
			echo '</div>';
		echo '</section>';
get_footer(); ?> 