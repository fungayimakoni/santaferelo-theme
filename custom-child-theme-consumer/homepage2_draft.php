<?php 
/*
Template Name: Homepage2 Draft
Template Post Type: page
*/
get_header();
	echo '<section class="main-layout inner-page-layout">';
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
									echo ( $banner['banner_title'] ? "<h1>".$banner['banner_title']."</h1>" : "");
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
				if ( get_field('cities') ):
					echo '<div class="page-popular-guides">';
						echo '<h3 class="uk-text-center">Popular guides</h3>';
						foreach( get_field('cities') as $city ):
							$banner_url = get_field('banner', url_to_postid( $city['link'] ) );
							$title = get_the_title( url_to_postid( $city['link'] ) ) ;
							echo '<div class="uk-child-width-1-1" uk-grid>';
								echo '<div>';
									echo '<div class="uk-background-cover" style="background-image: url('.$banner_url['banner_image']['url'].');">';
										echo '<div class="uk-overlay-primary">';
											echo '<div class="uk-panel uk-flex uk-flex-center uk-flex-middle container-height">';
												echo '<div class="uk-text-center">';
													echo '<h4>'.$title.'</h4>';
													echo '<a href="'.$city['link'].'"><button class="secondary button">See guide</button></a>';
												echo '</div>';
											echo '</div>';
										echo '</div>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						endforeach;
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
							        				echo '<div class="'.( $many > 4 ? 'uk-width-1-4': 'uk-width-expand').'">';
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
							        		//$link = the_sub_field('iframe_link');
																		     
						        		//echo '<iframe src="'.$survey_link.'"></iframe';
							        	/*$iframe = get_field('iframe_link');
							        	preg_match('/src="(.+?)"/', $iframe, $matches);
										$src = $matches[1];
										$params = array(
									    'controls'    => 0,
									    'autohide'    => 1
									);
										$new_src = add_query_arg($params, $src);
										$iframe = str_replace($src, $new_src, $iframe);
										$attributes = 'frameborder="0"';
										$iframe = str_replace('></iframe>', ' ' . $attributes . '></iframe>', $iframe);*/
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
					        				$posts = get_posts(
										        array(
										            'post_type'  	=> 'country',
										            'numberposts' 	=> -1,
										            'orderby' 		=> 'title',
										            'order'         => 'ASC',
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
					        /* elseif( get_row_layout() == 'cf_dropdown' ): 
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
					        	echo '</div>';*/
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
																echo '<option value="'.get_home_url().'/moving/moving-form/">Get a moving quote</option>';
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
					        				'post_type' => 'country',
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
					        elseif( get_row_layout() == 'call_to_action_block' ): 
					        	echo '<div class="call-to-action">';
					        		echo '<div class="container">';
					        			echo 'Call to Action Block';
					        		echo '</div>';
					        	echo '</div>';
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

				echo '<div class="frontpage-modules">';
					if( get_field('module_1') ):
			        	echo '<div class="header-subheader-repeater">';
			        		echo '<div class="container">';
			        			$block = get_field( 'module_1');
		        				echo ( $block['title'] ? "<h2>".$block['title']."</h2>" : "" );
		        				if ( $block['items'] ):
		        					echo '<div uk-grid>';
				        				foreach ( $block['items'] as $item ):
				        					echo '<div class="uk-width-expand">';
				        						echo '<div class="bordered" '.( $item['color'] ? 'style="border-bottom: 3px solid; border-color:'.$item['color'].'"' : '' ).'>';
					        						echo ( $item['number'] ? "<div class='number odometer' ".( $item['color'] ? "style='color:".$item['color']."; border-color:".$item['color']."'" : "" )." data-target=".$item['number'].">".floor( $item['number']*0.85 )."</div>" : "" );
					        					echo '</div>';
					        					echo ( $item['first_line'] ? "<div class='sub-header' ".( $item['color'] ? "style='color:".$item['color'].";'" : "" ).">".$item['first_line']."</div>" : "" );
					        					echo ( $item['second_line'] ? "<div class='second' >".$item['second_line']."</div>" : "" );
				        					echo '</div>';
				        				endforeach;
				        			echo '</div>';
			        			endif;
			        		echo '</div>';
			        	echo '</div>';
			        endif;
			        if( get_field('module_2') ):
			        	echo '<div class="module-2">';
			        		echo '<div class="container">';
			        			$block = get_field( 'module_2');
			        			echo ( $block['title'] ? "<h2>".$block['title']."</h2>" : "" );
	        					echo '<div class="" uk-grid>';
	        						if( $block['header'] || $block['item'] || $block['button'] ):
			        					echo '<div class="uk-width-expand">';
			        						echo '<div class="bordered">';
				        						echo ( $block['header'] ? "<h3>".$block['header']."</h3>" : "" );
				        						if($block['item']):
				        							echo '<ul>';
					        							foreach ($block['item'] as $item):
					        								echo '<li>'.$item['list_item'].'</li>';
					        							endforeach;
					        						echo '</ul>';
					        						echo ( $block['button'] ? "<a href='".( $block['button']['url'] )."' target='".$block['button']['target']."' class='button primary'>".$block['button']['title']."</a>" : "" );
				        						endif;
				        					echo '</div>';
			        					echo '</div>';
			        				endif;
			        				if( $block['header_2'] || $block['content'] ):
			        					echo '<div class="uk-width-expand">';
			        						echo '<div class="bordered">';
				        						echo ( $block['header_2'] ? "<h3>".$block['header_2']."</h3>" : "" );
				        						if( $block['content'] ):
				        							echo '<div class="content">';
				        								echo $block['content'];
				        							echo '</div>';
				        						endif;
				        					echo '</div>';
			        					echo '</div>';
			        				endif;
			        				if( $block['image'] ):
			        					echo '<div class="uk-width-expand image-front">';
			        						echo '<img src="'.$block['image']['url'].'" height="'.$block['image']['height'].'" width="'.$block['image']['width'].'">';
			        					echo '</div>';
			        				endif;
			        				if( $block['header_2'] || $block['content'] ):
			        					echo '<div class="uk-width-expand uk-grid-item-match">';
			        						echo '<div class="bordered"  data-src="'.$block['image']['url'].'" uk-img>';
				        						echo ( $block['header_2'] ? "<h3>".$block['header_2']."</h3>" : "" );
				        						if( $block['content'] ):
				        							echo '<div class="content">';
				        								echo $block['content'];
				        							echo '</div>';
				        						endif;
				        					echo '</div>';
			        					echo '</div>';
			        				endif;
			        			echo '</div>';
			        		echo '</div>';
			        	echo '</div>';
			        endif;
			       /* echo '<div class="homepage2">';
						echo '<div class="container">';
							echo '<h3>Our award winning services aim to <br/>
							deliver exceptional moving experiences</h3>';
							echo '<div class="trustpilot-widget" data-locale="en-GB" data-template-id="54ad5defc6454f065c28af8b" data-businessunit-id="502a29130000640005198720" data-style-height="240px" data-style-width="100%" data-theme="light" data-stars="4,5,3" data-schema-type="Organization">';
								echo '<a href="https://uk.trustpilot.com/review/santaferelo.com" target="_blank">Trustpilot</a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
					*/
					if ( get_field('widget', 'option') ):
						    	$review = get_field('widget', 'option');
						    	   echo '<div class="homepage2">';
										echo '<div class="container">';
											echo $review['widget_header'];
											echo $review['widget_script'];
										echo '</div>';
									echo '</div>';
					endif;
			        if ( get_field('module_3') ):
			        	$module = get_field('module_3');
			        	if ( $module['enable'] ):
					        if ( get_field('testimonial', 'option') ):
				         		$review = get_field('testimonial', 'option');
					        	/* hide
					        	echo '<div class="module-3 review">';
					        		echo '<div class="container">';
					        			if ( $module['module_title'] ):
					        				echo '<div class="title">';
					        					echo $module['module_title'];
					        				echo '</div>';
					        			endif;
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
						        		// if ( $review['button'] ):
						        		// 	echo '<div class="review-button">';
						        		// 		echo ( $review['button'] ? '<a href="'.$review['button']['url'].'" target="'.( $review['button']['target'] ? "_blank" : "_self").'" class="icon-link secondary button">'.$review['button']['title'].'</a>' : '' );
						        		// 	echo '</div>';
						        		// endif;
					        		echo '</div>';
					        	echo '</div>'; */
					        endif;
					    endif;
					    if( $module['awards']):
					    	echo '<div class="module-3-extend">';
					    		echo '<div class="container">';
					    			echo '<div class="uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>';
							    		foreach( $module['awards'] as $items ):
							    			echo '<div>';
							    				echo '<div class="bordered">';
								    				echo '<div class="award-content" uk-grid>';
								    					echo '<div class="uk-width-1-3">';
								    						echo '<img src="'.$items['img']['url'].'">';
								    					echo '</div>';
								    					echo '<div class="uk-width-2-3">';
								    						echo '<h3>'.$items['award_title'].'</h3>';
								    						echo '<p>'.$items['award_description'].'</p>';
								    					echo '</div>';
								    				echo '</div>';
								    			echo '</div>';
							    			echo '</div>';
							    		endforeach;
							    	echo '</div>';
						    	echo '</div>';
					    	echo '</div>';
					    endif;
				    endif;
			        
			        if( get_field('module_4') ):
			        	$block = get_field('module_4');
			        	echo '<div class="module-4">';
			        		echo '<div class="container">';
			        			echo '<div class="bordered">';
				        			if($block['header']):
				        				echo '<h3>'.$block['header'].'</h3>';
				        			endif;
				        			if ( $block['items'] ):
			        					echo '<div class="uk-position-relative">';
			        						echo '<div class="sf-slider">';
						        				foreach ( $block['items'] as $item ):
						        					echo '<div >';
						        						echo '<div class="circle"><span>'.$item['circle'].'</span></div>';
						        						echo '<div class="title">'.$item['header'].'</div>';
						        						echo '<div class="description">'.$item['description'].'</div>';
						        					echo '</div>';
						        				endforeach;
						        			echo '</div>';		
					        			echo '</div>';
					        			echo '<div class="nav-button">';
					        			echo '</div>';
				        			endif;
				        			if($block['button']):
				        				echo '<div class="slider-button">';
				        					echo ( $block['button'] ? "<a href='".( $block['button']['url'] )."' target='".$block['button']['target']."' class='button primary'>".$block['button']['title']."</a>" : "" );
				        				echo '</div>';
				        			endif;
				        			if($block['slogan']):
				        				echo '<div class="slider-slogan">';
				        					echo $block['slogan'];
				        				echo '</div>';
				        			endif;
				        		echo '</div>';
			        		echo '</div>';
			       		echo '</div>';
			        endif;
			        if( get_field('module_5')):
			        	// $clone = get_field('module_5');
			      		//   	if( $clone['relocation_services'] ):
			      //   		$relocation =  $clone['relocation_services'];
				     //    	echo '<div class="relocation-services">';
				     //    		if( $relocation['title'] ||  $relocation['description'] ):
						   //      	echo '<div class="container">';
						   //      		if( $relocation['title'] ):
						   //      			echo '<h3>'.$relocation['title'].'</h3>';
						   //      		endif;
						   //      		if( $relocation['description'] ):
						   //      			echo '<div>';
							  //       			echo $relocation['description'];
							  //       		echo '</div>';
						   //      		endif;
						   //      	echo '</div>';
						   //      endif;
						   //      if( $relocation['moving'] || $relocation['corporate'] ):
						   //      	echo '<div class="main-tab">';
									// 	echo '<div class="tab-component">';
									// 		echo '<div class="container">';
									// 			echo '<ul uk-tab="connect: #my-id">';
									// 				if ( $relocation['moving'] ):
									// 					echo '<li><a href="#">Moving home</a></li>';
									// 				endif;
									// 				if ( $relocation['corporate'] ):
									// 					echo '<li><a href="#">Corporate relocation</a></li>';
									// 				endif;
									// 			echo '</ul>';
									// 		echo '</div>';
									// 	echo '</div>';
									// 	echo '<div style="background-color:'.$relocation['section_background']['value'].';">';
									// 		echo '<div class="container uk-margin">';
									// 			echo '<ul id="my-id" class="uk-switcher">';
									// 				if ( $relocation['moving'] ):
									// 					echo '<li>';
									// 						echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
									// 							foreach ( $relocation['moving'] as $item ):
									// 								echo '<div class="uk-card">';
									// 									echo '<a href="'.get_permalink( $item->ID ).'">';
									// 										echo '<div class="cards-bg">';
									// 											echo '<div class="uk-card-media-top">';
									// 												$banner = '';
									// 												if( has_post_thumbnail( $item->ID ) ):
									// 													$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
									// 												elseif( get_field('banner', $item->ID) ):
									// 													$bannergroup = get_field('banner', $item->ID);
									// 													$banner = $bannergroup['banner_image']['sizes']['custom'];
									// 													if($bannergroup['banner_image'] === false ):
									// 														$banner = '';
									// 													endif;
									// 												endif;
									// 												echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
									// 												echo '</div>';
									// 											echo '</div>';
									// 											echo '<div class="uk-card-body">';
									// 												echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
									// 												echo '<p class="exerpt">'.get_the_excerpt($item->ID).'</p>';
									// 											echo '</div>';
									// 										echo '</div>';
									// 									echo '</a>';
									// 								echo '</div>';
									// 							endforeach;
									// 						echo '</div>';
									// 					echo '</li>';
									// 				endif;
									// 				if ( $relocation['corporate'] ):
									// 					echo '<li>';
									// 						echo '<div class="uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
									// 							foreach ( $relocation['corporate'] as $item ):
									// 								echo '<div class="uk-card">';
									// 									echo '<a href="'.get_permalink( $item->ID ).'">';
									// 										echo '<div class="cards-bg">';
									// 											echo '<div class="uk-card-media-top">';
									// 												$banner = '';
									// 												if( has_post_thumbnail( $item->ID ) ):
									// 													$banner = get_the_post_thumbnail_url( $item->ID, 'custom');
									// 												elseif( get_field('banner', $item->ID) ):
									// 													$bannergroup = get_field('banner', $item->ID);
									// 													$banner = $bannergroup['banner_image']['sizes']['custom'];
									// 													if($bannergroup['banner_image'] === false ):
									// 														$banner = '';
									// 													endif;
									// 												endif;
									// 												echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
									// 												echo '</div>';
									// 											echo '</div>';
									// 											echo '<div class="uk-card-body">';
									// 												echo '<p class="uk-text-bold">'.get_the_title($item->ID).'</p>';
									// 												echo '<p class="exerpt">'.get_the_excerpt($item->ID).'</p>';
									// 											echo '</div>';
									// 										echo '</div>';
									// 									echo '</a>';
									// 								echo '</div>';
									// 							endforeach;
									// 						echo '</div>';
									// 					echo '</li>';
									// 				endif;
									// 			echo '</ul>';
									// 		echo '</div>';
									// 	echo '</div>';
									// echo '</div>';
						   //      endif;
				     //    	echo '</div>';
				     	//    endif;
				        if( get_field('module_5') ):
				        	$mod =  get_field('module_5');
			        		//$relocation =  $clone['relocation_services'];
				        	echo '<div class="relocation-services">';
				        		if( $mod['title'] ||  $mod['description'] ):
						        	echo '<div class="container">';
						        		if( $mod['title'] ):
						        			echo '<h3>'.$mod['title'].'</h3>';
						        		endif;
						        		if( $mod['description'] ):
						        			echo '<div>';
							        			echo $mod['description'];
							        		echo '</div>';
						        		endif;
						        	echo '</div>';
						        endif;
						        if( $mod['moving'] || $mod['corporate'] ):
						        	echo '<div class="main-tab">';
										echo '<div class="tab-component">';
											echo '<div class="container">';
												echo '<ul uk-tab="connect: #my-id">';
													if ( $mod['moving'] ):
														echo '<li><a href="#">Moving home</a></li>';
													endif;
													if ( $mod['corporate'] ):
														echo '<li><a href="#">Corporate relocation</a></li>';
													endif;
												echo '</ul>';
											echo '</div>';
										echo '</div>';
										echo '<div style="background-color:'.$mod['section_background']['value'].';">';
											echo '<div class="container uk-margin">';
												echo '<ul id="my-id" class="uk-switcher">';
													if ( $mod['moving'] ):
														echo '<li>';
															echo '<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
																foreach ( $mod['moving'] as $item ):
																	echo '<div class="uk-card">';
																		echo '<a href="'.get_permalink( $item['link'] ).'">';
																			echo '<div class="cards-bg">';
																				echo '<div class="uk-card-media-top">';
																					$banner = '';
																					if( has_post_thumbnail( $item['link'] ) ):
																						$banner = get_the_post_thumbnail_url( $item['link'], 'custom');
																					elseif( get_field('banner', $item['link']) ):
																						$bannergroup = get_field('banner', $item['link']);
																						$banner = $bannergroup['banner_image']['sizes']['custom'];
																						if($bannergroup['banner_image'] === false ):
																							$banner = '';
																						endif;
																					endif;
																					echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																					echo '</div>';
																				echo '</div>';
																				echo '<div class="uk-card-body">';
																					echo '<p class="uk-text-bold">'.$item['title'].'</p>';
																					echo '<p class="exerpt">'.$item['description'].'</p>';
																				echo '</div>';
																			echo '</div>';
																		echo '</a>';
																	echo '</div>';
																endforeach;
															echo '</div>';
														echo '</li>';
													endif;
													if ( $mod['corporate'] ):
														echo '<li>';
															echo '<div class="uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>';
																foreach ( $mod['corporate'] as $item ):
																	echo '<div class="uk-card">';
																		echo '<a href="'.get_permalink( $item['link'] ).'">';
																			echo '<div class="cards-bg">';
																				echo '<div class="uk-card-media-top">';
																					$banner = '';
																					if( has_post_thumbnail( $item['link'] ) ):
																						$banner = get_the_post_thumbnail_url( $item['link'], 'custom');
																					elseif( get_field('banner', $item['link']) ):
																						$bannergroup = get_field('banner', $item['link']);
																						$banner = $bannergroup['banner_image']['sizes']['custom'];
																						if($bannergroup['banner_image'] === false ):
																							$banner = '';
																						endif;
																					endif;
																					echo '<div class="uk-background-cover" style="background-image: url('.$banner.');">';
																					echo '</div>';
																				echo '</div>';
																				echo '<div class="uk-card-body">';
																					echo '<p class="uk-text-bold">'.$item['title'].'</p>';
																					echo '<p class="exerpt">'.$item['description'].'</p>';
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
									echo '</div>';
						        endif;
				        	echo '</div>';
				        endif;
			        endif;
			    echo '</div>';

			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 