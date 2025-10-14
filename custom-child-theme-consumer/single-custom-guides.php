<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (empty_content($post->post_content)) :
				else:
					echo '<div class="container">';
						the_content();
					echo '</div>';
				endif;
				if( get_field('downloadable_content') ):
					echo '<div class="downloadable-content">';
						echo '<div class="container">';
							echo '<div class="uk-child-width-expand" uk-grid>';
								foreach( get_field('downloadable_content') as $item ):
									echo '<div class="text-center">';
										// pre($item);
										echo '<div class="bordered">';
											echo '<i class="sf-icons b"></i>';
											$type = $item['download_type'];
											$title = '';
											if( $type == "cs"):
												$title = "Customs guide";
											elseif( $type == "form" ):
												$title = "Form";
											endif;
											if( !$title == '' ):
												echo '<div class="type">'.$title.'</div>';
											endif;
											if( !$title == '' ):
												echo '<div class="title">'.$item['title'].'</div>';
											endif;
											if( $item['file']['title'] ):
												echo '<div class="file"><a href="'.$item['file'].'" target="_blank">Download</a></div>';
											endif;
										echo '</div>';
									echo '</div>';
								endforeach;
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
				if (get_field('additional_content')):
					echo '<div class="container additional-content">';
						echo get_field('additional_content');
					echo '</div>';
				endif;
				if( get_field('connect_moving') ):
					echo '<div class="moving-feature">';
						$selected = get_field('connect_moving')->ID;
						$banner = get_field('banner', $selected );
						echo '<div class="uk-background-cover" style="background-image: url('.$banner['banner_image']['url'].');">';
							echo '<div class="uk-overlay-primary">';
								echo '<div class="uk-panel uk-flex uk-flex-center uk-flex-middle container-height">';
									echo '<div class="uk-text-center">';
										echo '<h3>'.get_the_title($selected).'?</h3>';
										if(get_field('form_link')):
											echo '<a href="'.get_field('form_link').'"><button class="primary button">Get in touch</button></a>';
										endif;
										echo '<a href="'.get_the_permalink($selected).'"><button class="secondary button">See guide</button></a>';
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer('office'); ?> 