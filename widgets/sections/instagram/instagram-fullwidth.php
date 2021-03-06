
<div class="<?php _e($class_preflix,'ella') ?>-instagram instagram-no-arrow inst-fw <?php if($settings['toggle_bg'] == 'yes') echo "background" ?>">
    <h3 class="<?php _e($class_preflix,'ella') ?>-title-instagram <?php if($settings['toggle_title_line'] == 'yes') echo "line" ?>">
        <div class="mc-dp-flex">
            <p class="wa-icon-instagram"><i class="fab fa-instagram"></i></p>
            <p class="mc-text-title-inst"><?php _e($settings['instagram_title'],'ella') ?></p>
        </div>
    </h3>
    <div class="<?php _e($class_preflix,'ella') ?>-description-instagram">
        <?php _e($settings['instagram_description'],'ella') ?>
    </div>
    <div class="<?php _e($class_preflix,'ella') ?>-slider-noarrow-instagram" 
        data-show-item="<?php _e($settings['slider_item'],'ella') ?>"
        data-auto="<?php _e($settings['toggle_autoplay'] == 'yes' ? true: false,'ella') ?>"
        data-speed="<?php _e($settings['toggle_autoplay'] == 'yes' ? $settings['autoplay_speed'] : 3000 ,'ella')  ?>">
            <?php foreach (  $settings['gallery'] as $image ): ?>
            <a href="<?php echo  $image['url']; ?>" data-lightbox="roadtrip" class="<?php _e($class_preflix,'ella') ?>-image-instagram">
                <?php
                    echo '<img src="' . $image['url'] . '">';
                    // echo wp_get_attachment_image( $item['list_image']['id'], 'full' );
                ?>
            </a>
                
            <?php endforeach; ?>
    </div>
</div>