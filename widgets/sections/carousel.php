<div class="<?php _e($class_preflix,'ella') ?>-carousel">
    <?php if ( $settings['list'] ):  ?>
    <div class="<?php _e($class_preflix,'ella') ?>-carousel-list" data-speed="<?php echo $settings['speed_slider'] ?>">
        <?php $count = 0; foreach (  $settings['list'] as $item ): ?>
        <div class="<?php _e($class_preflix,'ella') ?>-carousel-item">
            <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-image">
                <h3 class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-title">
                    <?php esc_html_e( $item['list_title'] , 'wolfactive-extend-elementor' ); ?>
                </h3>
                <?php
                    echo wp_get_attachment_image( $item['list_image']['id'], 'full' );
                ?>
            </div>
            <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-contain <?php esc_html_e( $item['location_contain'] , 'wolfactive-extend-elementor' ); ?>">
                <h3 class="<?php _e($class_preflix,'ella') ?>-carousel-item-title">
                    <?php esc_html_e( $item['list_title'] , 'wolfactive-extend-elementor' ); ?>
                </h3>
                <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-description">
                    <?php _e( $item['list_content'] , 'wolfactive-extend-elementor' ); ?>
                </div>
                <?php
                    $target = $item['button_link']['is_external'] ? ' target="_blank"' : '';
                    $nofollow = $item['button_link']['nofollow'] ? ' rel="nofollow"' : '';
                ?>
                <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-link">
                    <a href="<?php _e($item['button_link']['url'],'ella') ?>" class="<?php _e($class_preflix,'ella') ?>-carousel-item-button" <?php _e($target.$nofollow ,'ella') ?> >
                        <?php esc_html_e( $item['button_title'] , 'wolfactive-extend-elementor' ); ?>
                    </a>
                </div>
            </div>
        </div>
        <?php $count++; endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if($settings['slider_style'] === 'decore'):?>
        <div class="custom-arrow-left">
            <div class="triangle-left"></div>
        </div>
        <div class="custom-arrow-right">
            <div class="triangle-right"></div>
        </div>
    <?php endif;?>
</div>