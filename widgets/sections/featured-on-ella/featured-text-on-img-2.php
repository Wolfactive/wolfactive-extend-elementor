
<div class="<?php _e($class_preflix,'ella') ?>-featured-text-on-image-two">
    <h3 class="featured-title">
        <span><?php _e($settings['featured_title'],'ella') ?></span>
    </h3>
    <div class="featured-desc">
        <?php _e($settings['featured_description'],'ella') ?>
    </div>
    <div class="feature-row">
        <?php foreach (  $settings['list'] as $item ): ?>
        <div class="one-box-featured">
            <a href="<?php echo  $item['link_featured']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-featured">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
                <div class="content-one-box">
                    <div class="title-one-box">
                        <?php echo  $item['featured_title_one_box']; ?>
                    </div>
                </div>
            </a>
            <div class="action-link">
                <a class="featured-btn-shop" href="<?php echo  $item['link_featured']['url']; ?>"><span><?php echo  $item['text_button']; ?></span> <span class="border-bt-hover" style="background-color: #fff;"></span></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>