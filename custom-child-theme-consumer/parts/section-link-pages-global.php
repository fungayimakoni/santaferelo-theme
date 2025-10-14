<?php
if(isset($args)) extract($args);?>

<?php if(get_field('destination_services_items','option')):?>

    <div class="column-content">
            <div class="container">
                <h3><?=get_field('dest_title','option');?></h3>
                <p><?= get_field('dest_description','option');?></p>
               
                    <div class="grid-column uk-child-width-1-4@m uk-grid">
                        <?php while(have_rows('destination_services_items','option')): the_row();?>
                        <?php 
                            $image_id = get_sub_field('image');
                            
                            $image =  wp_get_attachment_image_src($image_id,'corporate');
                            
                          
                            $featured_img_url=$image[0];
                            $link = get_sub_field('link');
                        ?>
                            <div class="item">
                                <a href="<?=$link['url'];?>">
                                    
                                    <div class="background">
                                    <div class="uk-background-cover image uk-height-medium" style="background-image: url('<?=$featured_img_url;?>');">
                                    </div>
                                    </div>
                                    <div class="meta">
                                        <p class="title"><?php the_sub_field('title');?></p>
                                        <p><?php the_sub_field('description');?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile;?>
                    </div>   
              
            </div>
           
    </div>
<?php endif;?>