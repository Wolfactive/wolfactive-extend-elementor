<div class="<?php _e($class_preflix,'ella') ?>-multi-block-banner-have-content">
    <div class="block-banner-row">
        <?php $count=0; foreach (  $settings['list'] as $item ): ?>
        <?php if($count % 2 === 0){ ?>
        <div class="col-block-banner">
            <a href="<?php echo  $item['link_block_banner']['url']; ?>" class="one-block-banner">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
            </a>
        </div>
        <div class="col-block-banner bg-mc">
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
        <?php }else{?>
        <div class="col-block-banner bg-mc">
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
        <div class="col-block-banner">
            <a href="<?php echo  $item['link_block_banner']['url']; ?>" class="one-block-banner">
                <?php
                        echo '<img src="' . $item['list_image']['url'] . '">';
                    ?>
            </a>
        </div>
        <?php 
        } ?>
        <?php $count++;endforeach; ?>
    </div>
</div>