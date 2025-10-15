<?php 
/*
Template Name: New Sanelo Frontpage
*/

get_header('sanelo');?>
<?php
	$country_name = geot_country_name();
?>
<section class="main-layout inner-page-layout sanelo-frontpage">
	
	<?php if( $country_name == 'China' ):?>
		<div class="page-banner china"><div class="banner-wrapper">
			<div class="container banner-content">
				<div class="col-4">
					<div class="uk-position-center">
						<h1><span>YOUR TRUSTED MOVING COMPANY</span></h1>
						<p>Domestic and International Movers, we make your relocation journey easy!</p>
						<a href="https://www.santaferelo.com/en/en-moving-abroad/" target="" class="button primary">Get a free quote</a>
						<a href="https://www.santaferelo.com/cn/campaigns/moving-services-cn/moving-cn/" target="" class="button primary">免费获取报价</a>
					</div></div></div><div class="banner-image banner-meta lazyloaded" data-bg="https://santaferelo.com/wp-content/themes/custom-child-theme-consumer/img/iStock-533983072_1867x553.jpg" style="background-image: url(&quot;https://santaferelo.com/wp-content/themes/custom-child-theme-consumer/img/iStock-533983072_1867x553.jpg&quot;);">
				</div>
			</div>
		</div>
	<?php else:?>
		<?php if(get_field('banner')):?>
			<?php $banner = get_field('banner') ;?>
			<div id="main-banner" class="container-fluid default-container banner uk-background-cover" <?= $banner['banner_image']?'style="background-image:url('.$banner['banner_image']['url'].')"':'';?> data-mobile = <?=$banner['banner_image_mobile']['url'] ;?>>	
			
				<div class="row">
					<div class="container uk-flex uk-flex-center uk-flex-middle" style="height: 750px;">
						<div class="banner-container">
							<?php if ($banner):
							
								echo ( $banner['banner_title'] ? "<h2>".$banner['banner_title']."</h2>" : "");
								echo '<div id="ip-check" data-ip="'.$country_name.'">';
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
		<?php endif;?>
	<?php endif;?>
	<?php if(get_the_ID()=='7422'):?>
					    <!-- <div class="alert-notice">
							<div class="container">
								<div class="notice-alert">
		
									<div class="title">
										<?=get_field('notification_title','option');?>
									</div>
									<div class="text">
									<?=get_field('notification_text','option',false,false);?>
									</div>
									<div class="cta-container">
										<a target="_blank" href="<?=get_field('notification_cta_link','option');?>" class="cta-button"><?=get_field('notification_cta_label','option');?></a>
									</div>
								</div>
							</div>
						</div> -->
						<style>
							.notice-alert{
								background-color:#3C91B4;
								color: #FFF;
								display: flex;
								flex-direction: column;
								align-items: center;
								justify-content: center;
								padding: 25px 50px 30px;
								margin-top:50px;
							}
							.notice-alert .title{
								font-size: 24px;
								font-weight: 700;
								line-height: 58px;
								font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
								margin-bottom: 10px;
							}
							.notice-alert .text{
								color: #FFF;
								margin-bottom: 20px;
							
							}
							.notice-alert .text p{
								color: #FFF;
								font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
								font-weight: 400;
								font-size: 16px;
								line-height: 24px;
							}
							.notice-alert .cta-container{
								margin-bottom: 20px;
							}
							.notice-alert .cta-container .cta-button{
								color: #FFF;
								font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
								font-weight: 700;
								font-size: 16px;
								border: 1px solid #FFF;
								padding:10px 35px;
							}
							.notice-alert .cta-container .cta-button:hover{
								border-color:#000;
								color: #000;
							}
							@media (max-width: 480px) {
								.notice-alert{
									padding: 25px;
									margin-top: 10px;
								}
							}

						</style>
					<?php endif;?>
	<?php if(have_rows('content')):?>
		<?php $instance = []; ?>
		<div class="content-wrapper">
			<?php while(have_rows('content')) : the_row()?>
				<?php 
					$layout = get_row_layout() ;
					if (!isset($instance[$layout])) :
						$instance[$layout] = 1;
					else :
						$instance[$layout]++;
					endif;
					get_template_part('parts/section', $layout, ['instance' => $layout . '-' . $instance[$layout],'layout'=>$layout]);
				?>
				
			<?php endwhile;?>
		</div>
	<?php else:?>

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


	<?php endif;?>
</section>
<?php get_footer();?> 

		
