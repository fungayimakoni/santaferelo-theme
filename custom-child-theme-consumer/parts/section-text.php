<?php 
if(isset($args)) extract($args);
$background = get_sub_field('background')?'background-color:'.get_sub_field('background').';':'';
$bottom_space = get_sub_field('bottom_spacing')?'margin-bottom:'.get_sub_field('bottom_spacing').'rem;':'';
$inside_pads = get_sub_field('inside_padding')?'padding:'.get_sub_field('inside_padding').'rem 0;':'';
$style = !empty($background) ||!empty($inside_pads) || !empty($bottom_space) ?"style='$background $inside_pads $bottom_space'":'';
?>
<div class="text component" <?= $style;?>>
    <div class="container" >
        <?php if(get_sub_field('title')):?>
            <h2><?php the_sub_field('title');?></h2>
        <?php endif;?>
        <?php if(get_sub_field('text')):?>
            <div class="text">
                <?php the_sub_field('text');?>
            </div>
        <?php endif;?>
    </div>
</div>