<?php get_header();



	echo '<section class="main-layout inner-page-layout">';
		echo '<div class="container-fluid default-container">';
			echo '<div class="row">';
				if (!empty_content($post->post_content)) :
					echo '<div class="container">';
					?>
					<div class="office-header">
						<h1>Santa Fe Relocation &#8212; <span class="red"><?=get_the_title();?></span></h1>
						<?php if(get_field('address')):?>
							<div class="address">
								<span><strong>Address</strong></span>
								<p><?php the_field('address');?> — <a class='white goto-map' href="#"> View map</a></p>
								<hr>
							</div>
							<section>
								<div class="half">
									<?php if(get_field('email') || get_field('general_enquires') || get_field('sales') || get_field('fax_1')):?>
										<h4 class="hover-me">Corporate relocation enquiries</h4>
										<div class="company">
											<strong>Santa Fe Relocation</strong>
										</div>
										<div class="desc">
										<i class="fa fa-check-circle"></i> Relocation services that your employer fully or partly pays.
										</div>
										<?php if(get_field('email')):?>
											<div class="email">
												<p><strong>Email: </strong> <a href="mailto:<?php the_field('email');?>"><?php the_field('email');?></a> </p>
											</div>
											
										<?php endif;?>
										<?php if(get_field('general_enquires')||get_field('sales')):?>
											<div class="general-enquiries">
												<p><strong>Telephone: </strong><?php echo get_field('sales') ?: get_field('general_enquires');?></p>
											</div>
											
										<?php endif;?>
										<?php if(get_field('badge_widget')):?>
											<div class="bagde-widget">
												<?= get_field('badge_widget') ;?>
											</div>
										<?php endif;?>
									<?php endif;?>

								</div>
								<div class="half">
								<?php if(get_field('email2') || get_field('general_enquires2') || get_field('sales2') || get_field('fax2')):?>
									<h4 class="hover-me">Personal move enquiries</h4>
									<div class="company">
											<strong>Santa Fe Personal</strong>
									</div>
									<div class="desc">
									<i class="fa fa-check-circle"></i> Move enquiries that are privately paid.
									</div>

										<?php if(get_field('email2')):?>
											<div class="email">
												<p><strong>Email: </strong> <a href="mailto:<?php the_field('email2');?>"><?php the_field('email2');?></a> </p>
											</div>
											
										<?php endif;?>
										<?php if(get_field('general_enquires2')||get_field('sales2')):?>
											<div class="general-enquiries">
												<p><strong>Telephone: </strong><?php echo get_field('sales2') ?: get_field('general_enquires2');?></p>
											</div>
											
										<?php endif;?>
										<div class="sanelo-extra">
											
<p><a href="http://personal.santaferelo.com" target="_blank" rel="noopener noreferrer">personal.santaferelo.com</a></p>
										</div>
									<?php endif;?>
								</div>
							</section>
						<?php endif;?>

					</div>
					<?php 
						the_content();
						
						if( get_field('map_url')) :?>
							<div id="gotomap"></div>
							<div class="map-container">
								    
									<?php echo get_field('map_url'); ?>
							
							</div>
						<?php elseif( $location = get_field('map') ):?>
						    <div id="gotomap"></div>
							<div class="map-container">
								<div id="map" data-lat="<?=$location['lat'];?>" data-lng="<?=$location['lng'];?>"></div>
							</div>
							
						<?php endif;
					echo '</div>';
				endif;
			echo '</div>';
		echo '</div>';
	echo '</section>';?>
	<style>
		.hover-me{
			position: relative;
		}
		.pop-me{
			display:none;
			background-color:darkgray;
			border:1px solid lightgray;
			color: #FFF;
			position:absolute;
			top:30px;
			left:20%;
			padding:1.5rem 2rem;
		}
		.pop-me.show{
			display:block;
		}
		.email a{
			color:#FFF !important;
			text-decoration:underline !important;
			font-weight: bold;
		}
		.email a:first-child{
			margin-bottom: 0.7rem;
    margin-top: 0.5rem;
		}
		.email br{
			margin-bottom:1.5rem;
		}
		.office-header {
			background: #000;
			color: white;
			padding: 3rem 2rem 2rem;
		}
		.office-header h1,.office-header h4,.office-header p{
			color:#FFF;
		}
		.office-header section{
			display: flex;
			flex-wrap: wrap;
		}
		.office-header section .half{
			flex:1;
		}
		.map-container {
			max-height: 410px;
			height: 410px;
		}
		.map-container #map {
			height: 100%;
		}
		#gotomap {
			display: block;
			position: relative;
			top: -250px;
			visibility: hidden;
		}
		.white {
			color: white;
			font-weight:bold;
		}
		.hover-me{
			color:#ed1c24 !important;
			margin: 0 0 10px;
		}
		.company,.desc {
			margin-bottom: 10px;
		}
		.red{
			color:#ed1c24;
		}
		.sanelo-extra{
			line-height: 1.5;	
		}
		.sanelo-extra small{
			margin-bottom: 10px;
			display: block;
		}
		.sanelo-extra a{
			color:#FFF !important;
			text-decoration:underline !important;
			font-weight: bold;
		}

	</style>
	<script>
		const hover = document.querySelector('.goto-map')
		const target = document.querySelector('#gotomap')

		hover.addEventListener('click', (e)=>{
			e.preventDefault();
			target.scrollIntoView({ behavior: 'smooth' });
		})
	</script>
	<?php 
get_footer(); ?>