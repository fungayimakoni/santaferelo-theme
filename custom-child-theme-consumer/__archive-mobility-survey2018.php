<?php get_header();
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (get_field('survey_banner', 'options')):
					$clone = get_field('survey_banner', 'options');
					$banner = $clone['banner'];
					if ( $banner ):
						echo '<div class="page-banner">';

							echo '<div class="banner-wrapper">';
								echo '<div class="container banner-content">';
								if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
									echo '<div class="col-4">';
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
				if (get_field('survey_content', 'options')) :
					echo '<div class="container">';
						echo get_field('survey_content', 'options');
					echo '</div>';
				endif;
				if( get_field('survey_enable', 'options') ):
					if( get_field('image', 'option') || get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
						echo '<div class="row">';
							echo '<div class="mobility-global">';
								echo '<div class="container">';
									echo '<div class="uk-child-width-1-2@m uk-grid-collapse" uk-grid>';
										if( get_field('image', 'option') ):
											$img = get_field('image', 'option');
											echo '<div>';
												echo '<img src="'.$img['url'].'">';
											echo '</div>';
										endif;
										if ( get_field('description', 'option') || get_field('file', 'option') || get_field('video', 'option') ):
											if ( get_field('description', 'option') ):
												echo '<div>';
													echo get_field('description', 'option');
													if ( get_field('file', 'option') || get_field('video', 'option') ):
														echo '<div class="buttons-row">';
															if( get_field('file', 'option') ):
																echo '<a class="pdf" href=#>Request a free copy</a>';
															endif;
															if( get_field('video', 'option') ):
																echo '<a class="video" target="_blank" href="https://surveys.circle-research.com/wix/9/p1869363189.aspx">Take the Survey</a>';
															endif;
														echo '</div>';
													endif;
												echo '</div>';
											endif;
										endif;
									echo '</div>';
								echo '</div>';
							echo '</div>';
						echo '</div>';
					endif;
				endif;
				if (get_field('survey_additional_content', 'options')) :
					echo '<div class="container">';
						echo get_field('survey_additional_content', 'options');
					echo '</div>';
				endif;
				$author = get_field('clone_authors', 'options');
				if( $author ):
					echo '<div class="row">';
						echo '<div class="author-content">';
							echo '<div class="container">';
								echo '<h3 class="uk-text-center">Speakers</h3>';
								echo '<div class="uk-child-width-1-2@m" uk-grid>';
								foreach($author['authors_block'] as $item):
									echo '<div>';
										echo '<div class="uk-grid-collapse" uk-grid>';
											if($item['image']):
												echo '<div class="profile-image uk-width-1-3@s">';
													echo '<img src="'.$item['image']['url'].'" class="uk-border-circle" alt="'.$item['name'].'">';
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
			echo '</div>';
		echo '</div>';
	echo '</section>';
get_footer(); ?> 