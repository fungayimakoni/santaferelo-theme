<?php
if(isset($args)) extract($args);

?>
<section id="<?= $instance;?>" class="<?= $layout;?>">
    <div class="container">
        <?php if(get_sub_field('title')):?>
            <h2 class='section-title'><?= get_sub_field('title');?></h2>
            <div class="blocks">
                <?php while(have_rows('block')) : the_row();?>
                    <div class="card">
                        <div class="card-container">
                            <h3 style="color:<?= get_sub_field('title_color');?>"><?= get_sub_field('title');?></h3>
                            <?php the_sub_field('text');?>
                        </div>
                        
                    </div>
                <?php endwhile;?>
            </div>
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