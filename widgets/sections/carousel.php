<div class="<?php _e($class_preflix,'ella') ?>-carousel 
            <?php if($settings['slider_style'] == 'limit' || $settings['slider_style'] == 'boxed') echo "limit"; ?>
            <?php if($settings['spacing_toggle'] != 'yes') echo "no-spacing-bottom"?>
            <?php if($settings['slider_style'] == 'absoblute') echo "header--float"; ?>
            <?php if($settings['slider_style'] == 'absoblute') echo "header--boxed"; ?>"
    <?php if($settings['slider_style'] == 'absoblute') echo 'data-header="header--float"'; ?>
    <?php if($settings['slider_style'] == 'boxed') echo 'data-header="header--boxed"'; ?>
    <?php if($settings['slider_style'] == 'absoblute'): ?> data-logo="<?php echo  $settings['logo_image']['url']  ?>"
    <?php endif; ?> <?php if($settings['slider_style'] == 'absoblute'): ?>
    data-icon="<?php echo  $settings['cart_image']['url']?>" <?php endif; ?>
    <?php if($settings['slider_style'] == 'boxed'): ?> 
    data-outter="<?php echo $settings['background_color'].'px' ?>"
    data-boexed="<?php echo $settings['boxed__container']['size'].$settings['width']['unit'] ?>" <?php endif; ?>>
    <?php if ( $settings['list'] ):  ?>
    <div class="<?php _e($class_preflix,'ella') ?>-carousel-list" data-speed="<?php echo $settings['speed_slider'] ?>">
        <?php $count = 0; foreach (  $settings['list'] as $item ): ?>
        <div class="<?php _e($class_preflix,'ella') ?>-carousel-item">
            <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-image">
                <?php if($item['list_title']): ?>
                <h3 class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-title">
                    <?php esc_html_e( $item['list_title'] , 'wolfactive-extend-elementor' ); ?>
                </h3>
                <?php endif; ?>
                <?php
                    echo wp_get_attachment_image( $item['list_image']['id'], 'full' );
                ?>
                <?php if($settings['list_child']): ?>
                <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-buttons">
                    <?php  foreach($settings['list_child'] as $child): ?>
                    <?php if(($count + 1 )== $child['carousel_choose']):?>
                    <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-button"
                        data-product="<?php _e($child['show_elements'],'ella') ?>"
                        data-location="<?php _e($child['location_modal'],'ella') ?>"
                        data-position="<?php _e($child['left'],'ella') ?>"
                        style="position:absolute; top:<?php echo $child['top'] ?>%;left:<?php echo $child['left'] ?>%; z-index:1000">
                        <div class="mc-icon-plus">
                            <i class="gg-add"></i>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php  endforeach;?>
                </div>
                <?php endif;?>

            </div>
            <?php if($item['list_title'] || $item['list_content'] || $item['button_title']): ?>
            <div
                class="<?php _e($class_preflix,'ella') ?>-carousel-item-contain <?php esc_html_e( $item['location_contain'] , 'wolfactive-extend-elementor' ); ?>">
                <?php if($item['list_title']): ?>
                <h3 class="<?php _e($class_preflix,'ella') ?>-carousel-item-title">
                    <?php esc_html_e( $item['list_title'] , 'wolfactive-extend-elementor' ); ?>
                </h3>
                <?php endif; ?>
                <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-description">
                    <?php _e( $item['list_content'] , 'wolfactive-extend-elementor' ); ?>
                </div>

                <?php
                    $target = $item['button_link']['is_external'] ? ' target="_blank"' : '';
                    $nofollow = $item['button_link']['nofollow'] ? ' rel="nofollow"' : '';
                ?>
                <?php if($item['button_title'] && $item['button_link']['url']): ?>
                <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-link">
                    <a href="<?php _e($item['button_link']['url'],'ella') ?>"
                        class="<?php _e($class_preflix,'ella') ?>-carousel-item-button"
                        <?php _e($target.$nofollow ,'ella') ?>>
                        <?php esc_html_e( $item['button_title'] , 'wolfactive-extend-elementor' ); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
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