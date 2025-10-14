<?php 
/*
Template Name: November homepage
Template Post Type: page
*/
get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				echo '<div class="uk-alert-primary" uk-alert>';
					echo'<div class="container"><span><i class="material-icons">info</i></span> For the latest updates on COVID-19, please see our <a href="https://www.santaferelo.com/en/mobility-insights/news-and-blog/covid-19-update-from-santa-fe-relocation/">dedicated page</a>.</div>';
				echo '</div>';
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
											echo ( $banner['banner_button'] ? "<a href='".( $banner['banner_button']['url'] )."' class='button primary'>".$banner['banner_button']['title']."</a>" : "" );
											echo ( $banner['banner_button'] ? "<a href='https://www.santaferelo.com/en/were-here-to-lighten-your-load/' class='button secondary'>More information</a>" : "" );
											echo '<p class="note">* Valid until 30/04/2020</p>';
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
				echo '<div class="frontpage-modules">';
					if( get_field('ip_module_front') ):
						//pre( get_Field('ip_module_front') );
						echo '<div class="new-ipajax fp"></div>';
					endif;
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
			        		
			        	echo '</div>';
			        endif;
			        if ( get_field('module_3') ):
			        	$module = get_field('module_3');
			        	if ( $module['enable'] ):
					        if ( get_field('testimonial', 'option') ):
				         		$review = get_field('testimonial', 'option');
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
					        	echo '</div>';
					        endif;
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
					    if( $module['awards']):
					    	echo '<div class="module-3-extend">';
					    		echo '<div class="container">';
					    			echo '<div class="uk-child-width-1-1@s uk-child-width-1-3@m" uk-grid>';
							    		foreach( $module['awards'] as $items ):
							    			echo '<div>';
							    				echo '<div class="bordered">';
								    				echo '<div class="award-content" uk-grid>';
								    					echo '<div class="uk-width-1-3">';
								    						echo '<img src="'.$items['img']['url'].'" alt="'.$items['award_title'].'">';
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