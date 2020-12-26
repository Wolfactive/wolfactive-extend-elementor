<div class="<?php _e($class_preflix,'ella') ?>-product-list product-list--slider">
    <h3 class="<?php _e($class_preflix,'ella') ?>-product-list-title <?php if($settings['toggle_title_line'] == 'yes') echo "have-line" ?>">
        <span>
            <?php _e($settings['title'],'ella') ?>
        </span>
    </h3>
    <?php if($settings['description']):?>
    <p class="<?php _e($class_preflix,'ella') ?>-product-list-description">
        <?php _e($settings['description'],'ella') ?>
    </p>
    <?php endif;?>
    <?php if($settings['show_elements']):?>
    <div class="<?php _e($class_preflix,'ella') ?>-product-list-contain" data-show-pc="<?php _e($settings['slider_item_pc'],'ella'); ?>" data-show-tablet="<?php _e($settings['slider_item_tablet'],'ella'); ?>">
        <?php foreach($settings['show_elements'] as $post): ?>
        <div class="<?php _e($class_preflix,'ella') ?>-product-list-contain-item <?php if($settings['toggle_product_item_style'] == 'yes') echo 'supermarket'?>">
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