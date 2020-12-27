
<div class="<?php _e($class_preflix,'ella') ?>-brand brand-have-tt-des">
    <h3 class="<?php _e($class_preflix,'ella') ?>-title-brand">
        <?php _e($settings['brand_title'],'ella') ?>
    </h3>
    <div class="<?php _e($class_preflix,'ella') ?>-description-brand">
        <?php _e($settings['brand_description'],'ella') ?>
    </div>
    <div class="<?php _e($class_preflix,'ella') ?>-slider-brand-mobile">
        <?php foreach (  $settings['list'] as $item ): ?>
            <a href="<?php echo  $item['link_brand']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-brand col-divide-2 col-divide-md-4">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>