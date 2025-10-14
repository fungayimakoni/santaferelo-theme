<?php 
if(isset($args)) extract($args);
$background = get_sub_field('background')?'background-color:'.get_sub_field('background').';':'';
$bottom_space = get_sub_field('bottom_spacing')?'margin-bottom:'.get_sub_field('bottom_spacing').'rem;':'';
$inside_pads = get_sub_field('inside_padding')?'padding:'.get_sub_field('inside_padding').'rem 0;':'';
$style = !empty($background) || !empty($inside_pads) || !empty($bottom_space) ?"style='$background $inside_pads $bottom_space'":'';
$title = get_sub_field('services_title');
$text = get_sub_field('services_description');
?>
<?php if(get_sub_field('services')):?>
    <div class="services component <?= get_sub_field('no_top_margin')?'no-top-margin':'';?>" <?= $style;?>>
        <div class="container" >
            <?php if($title):?>
                <h2><?=$title?></h2>
            <?php endif;?>
            <?php if($text):?>
                <div class="text">
                    <?=$text?>
                </div>
            <?php endif;?>
            <div class="left-right">
                <i class="fas fa-hand-point-left"></i>
                <span class="notice">Swipe right or right</span>
               <i class="fas fa-hand-point-right"></i></i>
            </div>
            <div class="slider">
                <?php while(have_rows('services')) : the_row();?>
                   <div class="slide">

                   <?php if(get_row_layout()=='service'):?>
                        <?php if($id=get_sub_field('link')[0]):?>
            
                            <div class="overlay">
                                <a href="<?= get_the_permalink($id);?>" class="cta button">Read More</a>
                            </div>
                        <?php endif;?>
                        <?php if(get_sub_field('image')):?>
                            <div class="image">
                                <?php $image = wp_get_attachment_image_url( get_sub_field('image'), 'large' );?>
                                <img src="<?=$image;?>" alt="" class="service-image">
                            </div>
                        <?php endif;?>
                        <?php if(get_sub_field('title')||get_sub_field('description')):?>
                            <div class="text-area">
                                <?php if(get_sub_field('title')):?>
                                    <div class="title">
                                        <?= get_sub_field('title');?>
                                    </div>
                                <?php endif;?>
        
                                <?php if(get_sub_field('description')):?>
                                    <div class="description">
                                        <?= get_sub_field('description');?>
                                    </div>
                                <?php endif;?>

                            </div>
                        <?php endif;?> 
                   <?php endif;?>
                   <?php if(get_row_layout()=='custom'):?>
                        <?php if($id=get_sub_field('link')):?>
                            <div class="overlay">
                                <a href="<?= $id;?>" class="cta button">Read More</a>
                            </div>
                        <?php endif;?>
                        <?php if(get_sub_field('image')):?>
                            <div class="image">
                                <?php $image = wp_get_attachment_image_url( get_sub_field('image'), 'large' );?>
                                <img src="<?=$image;?>" alt="" class="service-image">
                            </div>
                        <?php endif;?>
                        <?php if(get_sub_field('title')||get_sub_field('description')):?>
                            <div class="text-area">
                                <?php if(get_sub_field('title')):?>
                                    <div class="title">
                                        <?= get_sub_field('title');?>
                                    </div>
                                <?php endif;?>
        
                                <?php if(get_sub_field('description')):?>
                                    <div class="description">
                                        <?= get_sub_field('description');?>
                                    </div>
                                <?php endif;?>

                            </div>
                        <?php endif;?> 
                   <?php endif;?>

                   </div>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif;?>