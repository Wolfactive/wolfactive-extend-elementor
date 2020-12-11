<div class="<?php _e($class_preflix,'ella') ?>-instagram">
    <h3 class="<?php _e($class_preflix,'ella') ?>-title-instagram">
        <p class="wa-icon-instagram"><i class="fab fa-instagram"></i></p>
        <p class="mc-text-title-inst"><?php _e($settings['instagram_title'],'ella') ?></p>
    </h3>
    <div class="<?php _e($class_preflix,'ella') ?>-description-instagram">
        <?php _e($settings['instagram_description'],'ella') ?>
    </div>
    <div class="<?php _e($class_preflix,'ella') ?>-slider-instagram">
            <?php foreach (  $settings['gallery'] as $image ): ?>
            <div class="<?php _e($class_preflix,'ella') ?>-image-instagram">
                <?php
                    echo '<img src="' . $image['url'] . '">';
                    // echo wp_get_attachment_image( $item['list_image']['id'], 'full' );
                ?>
            </div>
                
            <?php endforeach; ?>
    </div>
</div>