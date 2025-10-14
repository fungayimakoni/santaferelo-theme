<?php
if(isset($args)) extract($args);?>

<?php if($carousel = get_field('link_pages')):?>

    <div class="column-content">
            <div class="container">
                <h3><?=get_field('link_pages_title');?></h3>
                <p><?= get_field('link_pages_text');?></p>
                <?php if($carousel):?>
                    <div class="grid-column uk-child-width-1-4@m uk-grid">
                        <?php foreach($carousel as $l):?>
                            <div class="item">
                                <a href="<?=get_the_permalink($l->ID);?>">
                                    <?= get_the_title($l->ID);?>
                                </a>
                            </div>
                        <?php endforeach;?>
                    </div>   
                <?php endif;?>
            </div>
           
    </div>
<?php endif;?>