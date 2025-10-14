<?php
/*
Template Name: Moving Form Page
Template Post Type: page
*/
get_header('moving_form');
	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				global $post;
				// if (empty_content($post->post_content)) :
				// else:
				// 	echo '<div class="container">';
				// 		the_content();
				// 	echo '</div>';
				// endif;
				// if ( have_rows('content_editor') ):
				// 	echo '<div class="container">';
				// 		while ( have_rows('content_editor') ) : the_row();
				// 			if( get_row_layout() == 'header_layout' ):
				// 				if ( get_sub_field('header') ):
				// 					echo '<'.get_sub_field('header_style').'>'.get_sub_field('header').'</'.get_sub_field('header_style').'>';
				// 				endif;
				// 			elseif( get_row_layout() == 'paragraph_layout' ): 
				// 				if ( get_sub_field('paragraph') ):
				// 					echo get_sub_field('paragraph');
				// 				endif;
				// 			elseif( get_row_layout() == 'list_layout' ): 
				// 				if ( get_sub_field('list') ):
				// 					echo '<ul>';
				// 						foreach ( get_sub_field('list') as $item ):
				// 							echo '<li>'.$item['item'].'</li>';
				// 						endforeach;
				// 					echo '</ul>';
				// 				endif;
				// 			endif;
				// 		endwhile;
				// 	echo '</div>';
				// endif;
				if(get_field('banner')):?>
					<?php $banner = get_field('banner') ;?>
					<div id="main-banner" class="container-fluid default-container banner uk-background-cover" <?= $banner['banner_image']?'style="background-image:url('.$banner['banner_image']['url'].')"':'';?> data-mobile = <?=$banner['banner_image_mobile']['url'] ;?>>	
					
						<div class="row">
							<div class="container uk-flex uk-flex-center uk-flex-middle" style="height: 750px;">
								<div class="banner-container">
									<?php if ($banner):
									
										echo ( $banner['banner_title'] ? "<h2>".$banner['banner_title']."</h2>" : "");
										echo '<div id="ip-check" data-ip="'.$record->country->names['en'].'">';
											echo ( $banner['banner_description'] ? $banner['banner_description'] : "" );
										echo '</div>';
									endif;?>
								</div>
							</div>
						</div>
						<?php if(get_field('tagline','option')):?>
							<div class="headline">
								<?= get_field('tagline','option');?>
							</div>
						<?php endif;?>
						<!-- <div class="gradient"></div> -->
					</div>
				<?php endif;
				if ( get_field( 'form_assembly_forms', 'option' ) ):
					$forms = get_field( 'form_assembly_forms', 'option' );
					foreach ( $forms['form_list'] as $form ):
						$postid = url_to_postid( $form['page'] );

						if ( $form['page'] == get_the_ID() ):
							echo '<div class="container">';
								echo do_shortcode('[formassembly formid="'.$form['form_assembly_id'].'" server="https://app.formassembly.com"]');
							echo '</div>';
						endif;
					endforeach;
				endif;
			echo '</div>';
			if ( get_field( 'custom_css' )):
				echo '<div class="custom-css">';
					echo '<style type="text/css">';
						echo get_field('custom_css');
					echo '</style>';
					if (get_field('custom_javascript')):
						echo '<script type="text/javascript">';
							echo get_field('custom_javascript');
						echo '</script>';
					endif;
				echo '</div>';
			endif;
		echo '</div>';
	echo '</section>';
get_footer('form'); ?> 