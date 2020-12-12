<div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner">
    <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container row-divide">
        <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image col-divide-md-12 col-divide-lg-6 column-banner-plugin">
            <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image-item">
                <?php echo wp_get_attachment_image( $settings['banner_image']['id'], 'full' ); ?>
            </div>
            <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image-content">
                <?php if($settings['title_banner']): ?>
                <h3 class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image-content-title">
                    <?php  _e($settings['title_banner'],'ella'); ?>
                </h3>
                <?php endif; ?>
                <?php if($settings['label_banner']): ?>
                <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image-content-label">
                    <?php  _e($settings['label_banner'],'ella'); ?>
                </div>
                <?php endif; ?>
                <?php if($settings['description_banner']): ?>
                <p class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image-content-description">
                    <?php  _e($settings['description_banner'],'ella'); ?>
                </p>
                <?php endif; ?>
                <?php if(settings['button_banner_content'] && $settings['button_banner_link']['url']): ?>
                <?php
                    $target = $settings['button_banner_link']['is_external'] ? ' target="_blank"' : '';
                    $nofollow = $settings['button_banner_link']['nofollow'] ? ' rel="nofollow"' : '';
                ?>
                <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image-content-link">
                    <a href="<?php _e($settings['button_banner_link']['url'],'ella') ?>" class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-image-content-button" <?php _e($target.$nofollow ,'ella') ?> >
                        <?php esc_html_e( $settings['button_banner_content'] , 'wolfactive-extend-elementor' ); ?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-product col-divide-md-12 col-divide-lg-6 column-product-plugin">
            <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-product-content">
                <?php if($settings['title_product']):?>
                <h3 class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-product-title">
                    <?php _e($settings['title_product'],'ella') ?>
                </h3>
                <?php endif;?>
                <?php if($settings['description_product']):?>
                <p class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-product-description">
                    <?php _e($settings['description_product'],'ella') ?>
                </p>
                <?php endif;?>
                <?php if($settings['show_elements']):?>
                <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-product-contain" data-show-pc="<?php _e($settings['slider_item_pc'],'ella'); ?>" data-show-tablet="<?php _e($settings['slider_item_tablet'],'ella'); ?>">
                    <?php foreach($settings['show_elements'] as $post): ?>
                    <div class="<?php _e($class_preflix,'ella') ?>-product-list-with-banner-container-product--contain-item">
                        <?php  
                            $params = array(
                                'p' => (int)$post, 
                                'post_type' => 'product'
                            );
                            $wc_query = new WP_Query($params);
                            if ($wc_query->have_posts()) :
                                while ($wc_query->have_posts()) : $wc_query->the_post(); 
                                        get_template_part('sections/product-item-slider');
                                endwhile;
                                wp_reset_postdata();
                            endif;
                        ?>
                    </div>
                    <?php  endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>