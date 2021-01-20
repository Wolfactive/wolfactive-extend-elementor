<div class="<?php _e($class_preflix,'ella') ?>-flash-deals">
    <div class="widget-title not-before style-3">   
        <h3 class="box-title">
            <span class="title"> 
                <span>
                <?php _e($settings['fd_title'],'ella') ?>
            </span>
        </span>
        </h3>
        <div class="countdown countdown-style-market">
            <span class="ends-in">
            <?php _e($settings['ld_ends_in'],'ella') ?>
            </span>
            <div class="countdown-item-fld countdown-suppermarket">
                <div class="clock-item-mc">
                    <span class="num-cd">00</span>
                    <span class="text-cd">d</span>
                </div>
                <div class="clock-item-mc">
                    <span class="num-cd">00</span>&nbsp;:
                </div>
                <div class="clock-item-mc">
                    <span class="num-cd">00</span>&nbsp;:
                </div>
                <div class="clock-item-mc">
                    <span class="num-cd">00</span>
                </div>
            </div>
        </div>        
        <a class="view_all" href="<?php _e($settings['ld_link'],'ella') ?>" title="View All">
            <span>
            <?php _e($settings['ld_btn'],'ella') ?>
        </span>
        </a>
    </div>
    <?php if($settings['fd_show_elements']):?>
        <div class="flash-deals-product" data-show-item="<?php _e($settings['fd_slider_item_pc'],'ella') ?>">
            <?php foreach($settings['fd_show_elements'] as $post): ?>
            <div class="<?php _e($class_preflix,'ella') ?>-product-list-fls-deals">
                <?php  
                    $params = array(
                        'p' => (int)$post, 
                        'post_type' => 'product'
                    );
                    $wc_query = new WP_Query($params);
                    if ($wc_query->have_posts()) :
                        while ($wc_query->have_posts()) : $wc_query->the_post(); 
                                get_template_part('sections/product-item-flash-deals');
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>
            <?php  endforeach; ?>
        </div>
    <?php endif; ?>
</div>