<div class="<?php _e($class_preflix,'ella') ?>-product-list product-list--slider">
    <h3 class="<?php _e($class_preflix,'ella') ?>-product-list-title">
        <?php _e($settings['title'],'ella') ?>
    </h3>
    <?php if($settings['description']):?>
    <p class="<?php _e($class_preflix,'ella') ?>-product-list-description>">
        <?php _e($settings['description'],'ella') ?>
    </p>
    <?php endif;?>
    <?php if($settings['show_elements']):?>
    <div class="<?php _e($class_preflix,'ella') ?>-product-list-contain">
        <?php foreach($settings['show_elements'] as $post): ?>
        <div class="<?php _e($class_preflix,'ella') ?>-product-list-contain-item">
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