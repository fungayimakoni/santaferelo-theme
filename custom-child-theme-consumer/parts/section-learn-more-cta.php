<?php
if(isset($args)) extract($args);
?>
<div class="content-block">
    <div class="multi-link-block-custom">
        <div class="container">
            <div class="bordered <?=$data['style'];?>">
                <h3><?= $data['title'];?></h3>
                <a <?=($data['link_cta']['target']) ?'target='.$data['link_cta']['target']:'';?> href="<?= $data['link_cta']['url'];?>" class="learn-more-cta button primary"><?= $data['link_cta']['title'];?></a>
            </div>
        </div>
    </div>
</div>