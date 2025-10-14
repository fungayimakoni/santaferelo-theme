<?php
if(isset($args)) extract($args);?>

<?php if(get_field('moving_items','option')):?>

    <div class="column-content">
            <div class="container">
                <h3><?=get_field('moving_title','option');?></h3>
                <p><?= get_field('moving_description','option');?></p>
               
                    <div class="grid-column uk-child-width-1-4@m uk-grid">
                        <?php while(have_rows('moving_items','option')): the_row();?>
                        <?php 
                            $image = get_sub_field('image');
                            $featured_img_url = $image['sizes']['corporate'];
                            
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