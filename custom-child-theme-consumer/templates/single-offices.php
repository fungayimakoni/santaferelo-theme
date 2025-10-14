<?php get_header();?>
<section class="main-layout inner-page-layout">
	<div class="container-fluid default-container">
		<div class="row">
			<div class="uk-child-width-1-2@m uk-grid-collapse map-banner" uk-grid>
				<?php if($location = get_field('map')):?>
					<div class="map-container">
					<div id="map" data-lat="<?=$location['lat'];?>" data-lng="<?=$location['lng'];?>"></div>
					</div>
				<?php endif;?>
				<?php if ( ( get_field( 'address' ) || get_field('general_enquires') || get_field('sales') || get_field('fax_1') || get_field( 'email' ) ) ):?>
					<div class="outer" <?= get_field('contact_background')?'style="background-color:'.get_field('contact_background').'"':'';?>>
						<div class="half-container">
							<h1>Santa Fe Relocation in <?=get_the_title();?></h1>
								<div class="details">
								<?php if(get_the_ID()!=1298): 
									if ( get_field( 'address' ) ):?>
										<div>
											<span>Address</span>
											<p><?=get_field( 'address' );?></p>
										</div>
									<?php endif;
								endif;
								if ( ( get_field('general_enquires') || get_field('sales') || get_field('fax_1') ) ):?>
									<div>
										<div class="uk-child-width-1-3" uk-grid>
											<?php if ( get_field('general_enquires') ):?>
													<div>
														<span>General enquiries</span>
															<p><?=get_field( 'general_enquires' );?></p>
													</div>
											<?php endif;
											if ( get_field('sales') ):?>
													<div>
														<span>Sales</span>
															<p><?=get_field( 'sales' );?></p>
														</div>
											<?php endif;
											if ( get_field('fax_1') ):?>
												<div>
													<span>Fax</span>
													<p><?=get_field( 'fax_1' );?></p>
												</div>
											<?php endif;?>
										</div>
									</div>
								<?php endif;
								if ( get_field( 'email' ) ):?>
									<div>
										<span>Email</span>
										<p><?=get_field( 'email' );?></p>
										</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				<?php endif;?>
			</div> <!-- uk-grid -->
		</div> <!-- row -->

	</div> <!-- container-fluid default-container -->
	<?php if(have_rows('contents')):?>

			<?php $instance = [];?>
			<?php while(have_rows('contents')) : the_row()?>
				<?php
                        $layout = get_row_layout();
                        if (!isset($instance[$layout])) :
                            $instance[$layout] = 1;
                        else :
                            $instance[$layout]++;
                        endif; 
					
                    ?>
				
                    <?php get_template_part('parts/section', $layout, ['instance' => $layout . '-' . $instance[$layout]]); ?>
			<?php endwhile;?>
	
	<?php endif;?>
</section> <!--main-layout-->
<?php get_footer();?>