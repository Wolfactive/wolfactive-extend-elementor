<div class="<?php _e($class_preflix,'ella') ?>-block-banner-spotlight">
    <div class="widget-title">
        <h3 class="box-title">
            <span class="title">
                <span>
                    #Spotlight
                </span>
            </span>
        </h3>
        <p>
            <span>
                Quisquemos sodales suscipit tortor ditaemcos copy
            </span>
        </p>
    </div>
    <div class="banner-contain">
        <a href="<?php echo $settings['link_block']['url']; ?>" class="mc-banner">
            <?php
                echo '<img src="' . $settings['banner']['url'] . '">';
            ?>
        </a>
        <div class="block-all-content">
            <h2 class="banner-heading">
                <span class="line"></span>
                <span><?php echo $settings['block_banner_title']; ?></span>
            </h2>
            <p class="banner-des">
                <span>
                    <?php echo $settings['block_banner_description']; ?>
                </span>
            </p>
            <a href="<?php echo $settings['link_block']['url']; ?>" class="block-banner-button">
                <?php echo $settings['name_button']; ?>
            </a>
        </div>
    </div>
</div>