<?php 
if(isset($args)) extract($args);

$background = get_sub_field('background')?'background-color:'.get_sub_field('background').';':'';
$bottom_space = get_sub_field('bottom_spacing')?'margin-bottom:'.get_sub_field('bottom_spacing').'rem;':'';
$inside_pads = get_sub_field('inside_padding')?'padding:'.get_sub_field('inside_padding').'rem 0;':'';
$style = !empty($background) || !empty($inside_pads) || !empty($bottom_space) ?"style='$background $inside_pads $bottom_space'":'';
$title = get_sub_field('title');
$text = get_sub_field('text');
$full_display = get_sub_field('display_full');

?>

<?php if(have_rows('accordions')):?>
    <section class="accordions component">
        <div class="container">
            <?php if(get_sub_field('title')):?>
                <h2 class='section-title'><?= get_sub_field('title');?></h2>
            <?php endif;?>
            <?php if(get_sub_field('text')):?>
                <h2 class='section-text'><?= get_sub_field('text');?></h2>
            <?php endif;?>
            <div class="items">
                <?php $count = 1;?>
                <?php while(have_rows('accordions')) : the_row();?>
                    <dt>
                            <a href="javascript:void(0)" class="title title-toggler <?= $count==1?'active':'';?>" data-target="description-<?=$count;?>">
                                <?php the_sub_field('title');?><span class="plus"><img src="<?= get_stylesheet_directory_uri().'/overrides/img/plus.svg';?>" alt="plus icon" class="icon"></span><span class="minus"><img src="<?= get_stylesheet_directory_uri().'/overrides/img/minus.svg';?>" alt="minus icon" class="icon"></span>
                            </a>
                    </dt>
                    <dd id="description-<?= $count ;?>" class="description" style="display:<?= $count==1?'block':'none';?>">
                        <div class="text">
                            <?php the_sub_field('text');?>
                        </div>
                    </dd>
                    <?php $count++;?>
                <?php endwhile;?>
            </div>
        </div>
    </section>
<?php endif;?>

<?php return;?>
<?php if(have_rows('accordions')):?>
    <div class="accordions component" <?= $style;?>>
        <div class="container" >
            <?php if($title):?>
                <h2><?=$title?></h2>
            <?php endif;?>
            <?php if($text):?>
                <div class="text">
                    <?=$text?>
                </div>
            <?php endif;?>
            <div class="items">
                <?php $count = 1;?>
                <?php while(have_rows('accordions')) : the_row();?>
                    <dt>
                        
                        <?php if(!$full_display || wp_is_mobile()):?>
                            <a href="javascript:void(0)" class="title <?= $count==1?'active':'';?>" data-target="description-<?=$count;?>">
                                <?php the_sub_field('title');?><span class="plus"><i class="fa fa-plus"></span></i><span class="minus hide"><i class="fa fa-minus"></i></span>
                            </a>
                        <?php else:?>
                            <?php the_sub_field('title');?>
                        <?php endif;?>
                        
                       
                    </dt>

                    <?php if(have_rows('content')):?>
                        
                        <?php if(!$full_display || wp_is_mobile()):?>
                            <dd id="description-<?= $count ;?>" class="description <?= $count==1?'shown':'';?>">
                        <?php else:?>
                            <dd class="description active shown">
                        <?php endif;?>   
                            <?php while(have_rows('content')) : the_row()?>
                                
                                <?php if(get_row_layout()=='text'):?>
                                    <?php the_sub_field('text');?>
                                <?php endif;?>

                                <?php if(get_row_layout()=='director'):?>
                                    <div class="director">
                                        <?php if(get_sub_field('picture')):?>
                                            <div class="picture">
                                                <img src="<?php the_sub_field('picture');?>" alt="<?php the_sub_field('name');?> Picture" class="director-img">
                                            </div>    
                                        <?php endif;?>
                                        <div class="info">
                                            <div class="name"><?php the_sub_field('name');?></div>
                                            <?php if(get_sub_field('email')):?>
                                                <div class="email">Email: <a href="mailto:<?= get_sub_field('email');?>"><?= get_sub_field('email');?></a></div>
                                            <?php endif;?>
                                            <?php if(get_sub_field('phone')):?>
                                                <div class="phone">Phone: <a href="tel:+:<?= get_sub_field('phone');?>"><?= get_sub_field('phone');?></a></div>
                                            <?php endif;?>
                                            <?php if(get_sub_field('bio')):?>
                                                <div class="bio"><?= get_sub_field('bio');?></div>
                                            <?php endif;?>

                                        </div>
                                    </div>
                                <?php endif;?>

                            <?php endwhile;?>
                        </dd>
                    <?php endif;?>
                    <?php $count++;?>
                <?php endwhile;?>
            </div>
        </div>
    </div>
<?php endif;?>