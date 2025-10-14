<?php
/**
 * Template Name: Resources News v2
 */
get_header();?>
	<section class="main-layout inner-page-layout post-type-archive">
		<div class="container-fluid default-container">
			<div class="row">
				<div class="container">
					<h1>News</h1>

				</div>
			</div>
			<div class="row">
				<div class="body-content">
					<div class="container">
						<?php 
							$cpt = 'insights-news';
							$taxonomy = get_object_taxonomies( $cpt );
							$terms = get_terms( array(
								'taxonomy' => $taxonomy[0],
								'hide_empty' => false,
							) );
						?>
						<?php if($terms):?>
							<div class="uk-grid-small" uk-grid>
								<div class="select-container uk-width-1-4@l uk-width-1-3@m ">
									<p>Select a topic</p>
									<select class="category" data-tax="'.$taxonomy[0].'" data-cpt="'.$cpt.'">
										<option value="all">All articles</option>
										<?php foreach ( $terms as $item ):?>
											<option value="<?=$item->term_id;?>"><?=$item->name;?></option>
										<?php endforeach;?>
									</select>
								</div>
							</div>
						<?php endif;?>
						<div class="ajax-listing">
							<?php 
								$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
								$args = array(
									'post_type' 		=> $cpt,
									'posts_per_page' 	=> 12,
									'paged'          	=> $paged,
									'post-status'		=> 'publish',
								);
								$news = new WP_Query( $args );
							?>
							<?php if($news->have_posts()):?>
								<div class="uk-child-width-1-3@m uk-child-width-1-4@l uk-grid-small uk-grid-match" uk-grid>
									<?php while ( $news->have_posts() ): $news->the_post();?>
										<div class="uk-card uk-flex uk-flex-column">
											<a href="<?=get_permalink(  get_the_ID() );?>">
												<div class="cards-bg">
													<div class="uk-card-media-top">
														<?php $img = get_the_post_thumbnail_url(get_the_ID(),'custom');?>
														<div class="uk-background-cover" style="background-image: url('<?=$img;?>');">

														</div>
													</div>
													<div class="uk-card-body">
														<p class="uk-text-bold"><?=get_the_title();?></p>
														<p class="date uk-position-bottom-left">Posted <?=get_post_time( 'd/m/Y' );?></p>
													</div>
												</div>
											</a>
										</div>
									<?php endwhile;?>
								</div>
								<?php wp_bs_pagination($news->max_num_pages);?>
								<?php wp_reset_postdata();?>
			
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?> 