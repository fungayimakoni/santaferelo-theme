<?php 
if(isset($args)) extract($args);
$background = get_sub_field('background')?'background-color:'.get_sub_field('background').';':'';
$bottom_space = get_sub_field('bottom_spacing')?'margin-bottom:'.get_sub_field('bottom_spacing').'rem;':'';
$inside_pads = get_sub_field('inside_padding')?'padding:'.get_sub_field('inside_padding').'rem 0;':'';
$style = !empty($background) || !empty($inside_pads) || !empty($bottom_space) ?"style='$background $inside_pads $bottom_space'":'';

?>
<?php if(get_sub_field('link')):?>
    <?php if( !get_sub_field('fluid')):?>
        <div class="container">
    <?php endif;?>
    
    <div class="cta component" <?= $style;?>>
        <?php if( get_sub_field('fluid')):?>
            <div class="container">
        <?php endif;?>
        
        <div class="cta-blocks">
            <?php if(get_sub_field('title')):?>
                <div class="block-title">
                    <?= get_sub_field('title');?>
                </div>
            <?php endif;?>
            <?php 
                $label = get_sub_field('label');
                $border = get_sub_field('border_color')?'style="border-color:'.get_sub_field('border_color').'"':'';
            ?>
            <?php if(have_rows('link')): ?>
                <?php while(have_rows('link')) : the_row();?>
                    
                    <?php if(get_row_layout()=='email'):?>
                        <a href="mailto:<?= get_sub_field('link');?>" class="cta button" <?= $border?>>
                            <?= $label;?>
                        </a>
                    <?php endif;?>

                    <?php if(get_row_layout()=='phone'):?>
                        <a href="tel:<?= get_sub_field('link');?>" class="cta button" <?= $border;?>>
                        <?= $label;?>
                        </a>
                    <?php endif;?>
                    <?php if(get_row_layout()=='url'):?>
                        <a href="<?= get_sub_field('link');?>" class="cta button" <?=get_sub_field('new_tab')?'target="_blank"':'';?> <?= $border;?>>
                        <?= $label;?>
                        </a>
                    <?php endif;?>
                <?php endwhile;?>
            <?php endif;?>
        </div>

        <?php if( get_sub_field('fluid')):?>
            </div>
        <?php endif;?>
    </div>

    <?php if( !get_sub_field('fluid')):?>
        </div>
    <?php endif;?>
<?php endif;?>