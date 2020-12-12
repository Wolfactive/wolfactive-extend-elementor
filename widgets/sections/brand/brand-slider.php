
<div class="<?php _e($class_preflix,'ella') ?>-brand">
    <div class="<?php _e($class_preflix,'ella') ?>-slider-brand" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
        <?php foreach (  $settings['list'] as $item ): ?>
            <a href="<?php echo  $item['link_brand']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-brand">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>