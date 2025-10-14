
<?php if(is_super_admin()):?>
    <div class="admin-template">
        <div>
            <?php global $template;?>
            Template: <?=basename( $template );?>
        </div>
        <div>
            Country: <?= get_country();?>
        </div>
    </div>
<?php endif;?>
<style>
    .admin-template{
        background-color:#000;
        color:#FFF;
        position:fixed;
        top:2rem;
        left:1rem;
        padding:10px;
        z-index: 9999;
        border:5px solid gray;
    }
</style>