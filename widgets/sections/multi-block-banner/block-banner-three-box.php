<div class="<?php _e($class_preflix,'ella') ?>-mt-block-banner-three-box">
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
            <div class="block-all-content">
                <h2 class="banner-heading">
                    <span class="line"></span>
                    <span><?php echo $item['block_banner_title']; ?></span>
                </h2>
                <p class="banner-des">
                    <span>
                        <?php echo $item['block_banner_description']; ?>
                    </span>
                </p>
                <a href="<?php echo $item['link_block_banner']['url']; ?>" class="block-banner-button">
                    <?php echo $item['name_button_shop_now']; ?>
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>