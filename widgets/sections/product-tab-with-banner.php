<div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner">
    <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-top">
        <?php if($settings['title_block']): ?>
        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-top-title">
            <?php _e($settings['title_block'],'ella') ?>
        </div>
        <?php endif;?>
        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-top-tab">
            <?php $count=0; foreach($settings['list_product'] as $item): ?>
            <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-top-tab-item <?php if($count === 0){echo 'active';} ?>" data-product="<?php _e(implode(", ",$item['show_elements']),'ella')  ?>">
                    <?php _e($item['list_title'],'ella') ?>
            </div>
            <?php $count++; endforeach;?>
        </div>
    </div>
    <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container row-divide">
        <?php if($settings['list_banner']): ?>
        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image col-divide-md-12 col-divide-lg-6 column-banner-plugin">
            <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image-list">
                <?php foreach($settings['list_banner'] as $banner): ?>
                    <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image-item">
                        <?php
                            echo wp_get_attachment_image( $banner['list_image']['id'], 'full' );
                        ?>
                        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image-item-content">
                            <?php if($banner['title_banner']): ?>
                            <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image-item-content-title">
                                <?php _e($banner['title_banner'],'ella') ?>
                            </div>
                            <?php endif;?>
                            <?php if($banner['description_banner']): ?>
                            <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image-item-content-description">
                                <?php _e($banner['description_banner'],'ella') ?>
                            </div>
                            <?php endif;?>
                            <?php if($banner['button_banner_link']['url'] && $banner['button_banner_content']): ?>
                            <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image-item-content-link">
                            <?php
                                $target = $banner['button_banner_link']['is_external'] ? ' target="_blank"' : '';
                                $nofollow = $banner['button_banner_link']['nofollow'] ? ' rel="nofollow"' : '';
                            ?>
                                <a href="<?php _e($item['button_link']['url'],'ella') ?>" class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-image-item-content-button" <?php _e($target.$nofollow ,'ella') ?>>
                                    <?php _e($banner['button_banner_content'],'ella') ?>
                                </a>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
        <?php if($settings['list_product']): ?>
        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-product col-divide-md-12 col-divide-lg-6 column-product-plugin">
            <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-product-contain">
                <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-product-contain-slider" data-show-pc="<?php _e($settings['slider_item_pc'],'ella'); ?>" data-show-tablet="<?php _e($settings['slider_item_tablet'],'ella'); ?>">
                    <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-product-contain-products" data-show-pc="<?php _e($settings['slider_item_pc'],'ella'); ?>" data-show-tablet="<?php _e($settings['slider_item_tablet'],'ella'); ?>">
                    <?php foreach($settings['list_product'][0]['show_elements'] as $post): ?>
                        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-with-banner-container-product-contain-products-item">
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
                    <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>