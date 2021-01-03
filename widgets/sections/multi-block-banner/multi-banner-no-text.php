<div class="<?php _e($class_preflix,'ella') ?>-multi-block-banner-default">
    <h3 class="banner__title">
            <span><?php _e($settings['title'],'ella') ?></span>
        </h3>
    <div class="banner__desc">
        <?php _e($settings['description'],'ella') ?>
    </div>
    <div class="block-banner-row">
        <?php $count = 0; foreach (  $settings['list'] as $item ): ?>
        <div class="col-block-banner">
            <div class="one-block-banner no--hover">
                <?php
                    echo wp_get_attachment_image( $item['list_image']['id'], 'full' );
                ?>
                <?php if($settings['list_child']): ?>
                <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-buttons">
                    <?php  foreach($settings['list_child'] as $child): ?>
                    <?php if(($count+1)== $child['carousel_choose']):?>
                    <div 
                        class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-button btn-open-modal-product" 
                        data-product ="<?php _e($child['show_elements'],'ella') ?>" 
                        data-location="<?php _e($child['location_modal'],'ella') ?>"
                        data-position="<?php _e($child['left'],'ella') ?>"
                        style="position:absolute; top:<?php echo $child['top'] ?>%;left:<?php echo $child['left'] ?>%; z-index:1000"
                        >
                        <div class="mc-icon-plus">
                            <i class="gg-add"></i>
                        </div>
                    </div>
                    <?php endif;?>
                    <?php  endforeach;?>
                </div>
                <?php endif;?>    
            </div>
        </div>
        <?php $count++; endforeach; ?>
    </div>
</div>