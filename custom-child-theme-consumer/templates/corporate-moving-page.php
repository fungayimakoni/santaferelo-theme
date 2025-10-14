<?php
/**
 * Template Name: Corporate Moving Country Page
 */
get_header( 'corporate');?>
	<section class="main-layout inner-page-layout">
		<div class="container-fluid default-container">
			<div class="row">
				<?php if (get_field('banner')):
					$banner = get_field('banner');
					if ( $banner['banner_image'] ):?>
					    <div class="page-banner">
							<div class="banner-wrapper">
								<div class="container banner-content">
								<?php if ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ):?>
									<div class="col-xs-4">
										<div class="uk-position-center">
                                            <?php
											echo ( $banner['banner_title'] ? "<h1><span>".$banner['banner_title']."</span></h1>" : "");
											echo ( $banner['banner_description'] ? "<p>".$banner['banner_description']."</p>" : "" );
											echo ( $banner['banner_button'] ? "<a href='".( $banner['banner_button']['url'] )."' target='".$banner['banner_button']['target']."' class='button primary'>".$banner['banner_button']['title']."</a>" : "" );
											?>
										</div>
									</div>
								<?php endif;?>
								</div>
                                <?
                                $banner_meta = ( $banner['banner_title'] || $banner['banner_description'] || $banner['banner_button'] ) ?'banner-meta':'';
                                $bg_style = !empty($banner['banner_image']['url']) ? "style='background-image:url(".$banner['banner_image']['url'].")'":"";
                                ?>
								<div class="banner-image <?=$banner_meta;?>" <?=$bg_style;?>>

								</div>
							</div>
						</div>
					<?php endif;
				endif;
				
				
                if (!empty(get_the_content())) :?>
					<div class="container">
						<?php the_content();?>
					</div>
				<?php endif;?>

			</div>

            <?php if($learn_more = get_field('learn_more_cta')):?>
               
                <div class="row">
                    <?php get_template_part('parts/section-learn-more','cta',[
                        'data'=>$learn_more
                    ]);?>
                </div>
            <?php endif;?>
           
            <?php 
            $parts = get_field('grab_global_content_setting')  ? 'link-pages-global': 'link-pages';
          
            get_template_part('parts/section',$parts);
            ?>
            

		</div>
	</section>


<?php get_footer();
