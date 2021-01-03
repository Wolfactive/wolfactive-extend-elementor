<div class="<?php _e($class_preflix,'ella') ?>-product-list product-list--loadmore
            <?php if($settings['toggle_product_item_style'] == 'yes') echo 'supermarket'?>" 
    data-plus="<?php echo $settings['slider_item_pc'] ?>"
    data-item="<?php echo (int)$settings['slider_item_pc'] * (int)$settings['row_item_pc'] ?>">
    <h3 class="<?php _e($class_preflix,'ella') ?>-product-list-title <?php if($settings['toggle_title_line'] == 'yes') echo "have-line" ?> ">  
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
    <div class="<?php _e($class_preflix,'ella') ?>-product-list-contain row-divide">
        <?php $count=0; foreach($settings['show_elements'] as $post): ?>
        <div class="<?php 
            _e($class_preflix,'ella') ?>-product-list-contain-item col-divide-sm-6 col-divide-md-3 <?php ella_check_col_render_class($settings['slider_item_pc'],$settings['slider_item_tablet']) ?>
            <?php if($count >= (int)$settings['slider_item_pc']* (int)$settings['row_item_pc']){_e('d--none','ella');}  ?>
            <?php if($settings['toggle_product_item_style'] == 'yes') echo 'supermarket'?>
            ">
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
        <?php $count++; endforeach; ?>
    </div>
    <?php if(count($settings['show_elements']) > (int)$settings['slider_item_pc']* (int)$settings['row_item_pc']): ?>
    <div class="<?php _e($class_preflix,'ella') ?>-product-list-control">
        <button class="<?php _e($class_preflix,'ella') ?>-product-list-control-button" 
                aria-label="load-more-button-product-list" >
            <?php _e($settings['button_title'],'ella') ?>
        </button>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>