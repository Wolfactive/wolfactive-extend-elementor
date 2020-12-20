<div class="<?php _e($class_preflix,'ella') ?>-multi-block-banner-default">
    <div class="block-banner-row">
        <?php foreach (  $settings['list'] as $item ): ?>
        <div class="col-block-banner">
            <a href="<?php echo  $item['link_block_banner']['url']; ?>" class="one-block-banner">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
            </a>
            <a href="<?php echo  $item['link_block_banner']['url']; ?>"
                class="mc-btn-shop-now"><?php echo  $item['name_button_shop_now']; ?></a>
        </div>
        <?php endforeach; ?>
    </div>
</div>