<?php
if(isset($args)) extract($args);
$cta_container = get_sub_field('cta_container');
?>
<section id="<?= $instance;?>" class="<?= $layout;?>">
    <div class="container">
        <?php if(get_sub_field('title')):?>
            <h2 class='section-title'><?= get_sub_field('title');?></h2>
        <?php endif;?>
        <?php if(have_rows('block')):?>
            <div class="blocks">
                <?php while(have_rows('block')) : the_row();?>

                    <div class="card">
                        <?php if($img_url = get_sub_field('image')):?>
                            <?php 
                                $image_id = attachment_url_to_postid($img_url);
                                $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                
                             
                            ?>
                            <div class="card-image">
                                <?php echo wp_get_attachment_image( $image_id, 'full',false,['alt'=>$image_alt?:get_sub_field('title').' image'] );?>
                                <!-- <img src="<?= get_sub_field('image');?>" alt="<?= get_sub_field('title');?> image"> -->
                          
                            </div>
            
                        <?php endif;?>
                        <div class="card-container">
                            <h3><?= get_sub_field('title');?></h3>
                            <?php the_sub_field('text');?>
                        </div>
                       
                        <?php if($cta_container=='container'):?>
                            <a href="<?php the_sub_field('cta_link');?>"><?php the_sub_field('cta_label');?></a>
                        <?php endif;?>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif;?>
        <?php if($cta_container=='block'):?>
            <?php if(have_rows('cta')):?>
                <div class="cta-container">
                    <?php while(have_rows('cta')) : the_row();?>
                    <a href="<?php the_sub_field('link');?>"><?php the_sub_field('label');?></a>
                    <?php endwhile;?>
                </div>
            <?php endif;?>
        <?php endif;?>
       
    </div>
</section>