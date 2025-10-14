<?php 
/*
Template Name:  Sanelo Thank you
*/

get_header('sanelo');?>
<?php
	// $record = geoip_detect2_get_info_from_ip( geoip_detect2_get_client_ip(), NULL );
?>
<section class="main-layout inner-page-layout sanelo-frontpage">
<div class="content-wrapper">
    <div class="column_block_image thank-you">
        <div class="container">
			<?php if(get_field('logo')):?>
				<div class="logo">
					<img src="<?= get_field('logo');?>" alt="Sanelo Logo" class="sanelo-logo">
				</div>
				
			<?php endif;?>
			<?php if(get_field('title')):?>
				<h2 class="section-title thank">
					<?php the_field('title');?>
				</h2>
			<?php endif;?>
			<?php if(get_field('text')):?>
				<div class="text">
					
						<strong>
							<?php the_field('text');?>
						</strong>

				</div>
				
				
			<?php endif;?>
			<?php if(get_field('cta_link')):?>
				<div class="cta-container">
					<a href="<?php the_field('cta_link');?>">
						<?php the_field('cta_label');?>
					</a>

				</div>
				
			<?php endif;?>
        </div>
    </div>
</div>
</section>
<?php get_footer();?> 

		
		