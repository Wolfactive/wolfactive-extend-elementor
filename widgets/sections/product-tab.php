<div class="<?php _e($class_preflix,'ella') ?>-product-tab">
    <?php if($settings['title']):?>
    <h3 class="<?php _e($class_preflix,'ella') ?>-product-tab-title">
        <span>
            <?php _e($settings['title'],'ella') ?>
        </span>
    </h3>
    <?php endif;?>
    <?php if($settings['description']):?>
    <p class="<?php _e($class_preflix,'ella') ?>-product-tab-description">
        <?php _e($settings['description'],'ella') ?>
    </p>
    <?php endif;?>
    <?php if($settings['list']):?>
        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-contain">
            <div class="<?php _e($class_preflix,'ella') ?>-product-tab-contain-tabs">
                <div class="<?php _e($class_preflix,'ella') ?>-product-tab-contain-tabs-list <?php if($settings['tab_style'] == 'style2'){echo 'special--style';} ?>">
                <?php $count=0; foreach($settings['list'] as $item): ?>
                    <div class="<?php _e($class_preflix,'ella') ?>-product-tab-contain-tabs-item <?php if($count === 0){echo 'active';} ?>" data-product="<?php _e(implode(", ",$item['show_elements']),'ella')  ?>">
                        <?php 
                            _e($item['list_title'],'ella');
                        ?>
                    </div>
                <?php $count++; endforeach;?>
                </div>
                <div class="<?php _e($class_preflix,'ella') ?>-product-tab-contain-slider">
                    <div class="<?php _e($class_preflix,'ella') ?>-product-tab-contain-list" data-show-pc="<?php _e($settings['slider_item_pc'],'ella'); ?>" data-show-tablet="<?php _e($settings['slider_item_tablet'],'ella'); ?>">
                    <?php foreach($settings['list'][0]['show_elements'] as $post): ?>
                        <div class="<?php _e($class_preflix,'ella') ?>-product-tab-contain-list-item">
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
        <div>
    <?php endif;?>
</div>