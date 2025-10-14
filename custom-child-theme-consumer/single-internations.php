<?php
//if(get_field('form_assembly_id') || is_grandchild_page() ):
if(get_field('form_assembly_id')):
	get_header('form');
else:
	get_header();
endif;
if(is_grandchild_page()) :
	?>
    <?php
	echo '<section class="main-layout inner-page-layout thank-you-page">';
		echo '<div class="default-container">';
			echo '<div class="container">';
				echo get_the_content();
			echo '</div>';
		echo '</div>';
	echo '</section>';
else:
	if(get_field('form_assembly_id')):
		echo '<section class="main-layout inner-page-layout">';
			echo '<div class="default-container">';
				echo '<div class="row">';
					global $post;
					if ( get_field( 'form_assembly_id' ) ):
						$forms = get_field( 'form_assembly_id' );
						echo '<div class="container">';
							echo do_shortcode('[formassembly formid="'.$forms.'" server="https://santafe.tfaforms.net"]');
						echo '</div>';
					endif;
				echo '</div>';
				if ( get_field( 'custom_css' )):
					echo '<div class="custom-css">';
						echo '<style type="text/css">';
							echo get_field('custom_css');
						echo '</style>';
						echo get_field('custom_javascript');
					echo '</div>';
				endif;
			echo '</div>';
		echo '</section>';
	else:
		wpb_set_post_views(get_the_ID());
		echo '<section class="main-layout inner-page-layout">';
			echo '<div class="container-fluid default-container">';

				echo '<div class="featured-image">';
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

									/*echo '<div class="d-md-none d-block">';
										echo '<div class="container banner-content1">';
										if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):
											echo ( $banner['banner_title'] ? "<h1>".$banner['banner_title']."</h1>" : "");
													echo ( $banner['banner_description'] ? "<p>".$banner['banner_description']."</p>" : "" );
													echo ( $banner['banner_button'] ? "<a href='".( $banner['banner_button']['url'] )."' target='".$banner['banner_button']['target']."' class='button primary'>".$banner['banner_button']['title']."</a>" : "" );
										endif;
										echo '</div>';
									echo '</div>'; */
								echo '</div>';
							endif;
						endif;
					echo '</div>';
				echo '</div>';
				echo '<div class="container text-container">';
					echo '<div class="row">';
						the_content();
					echo '</div>';
				echo '</div>';

			echo '</div>';
		echo '</section>';
	endif;
endif;
if(get_field('form_assembly_id') || is_grandchild_page()):
	get_footer('form');
else:
	get_footer();
endif; ?>