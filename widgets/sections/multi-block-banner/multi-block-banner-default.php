<div class="<?php _e($class_preflix,'ella') ?>-multi-block-banner-default">
    <div class="block-banner-row">
        <?php $count = 0; foreach (  $settings['list'] as $item ): ?>
        <div class="col-block-banner">
            <a href="<?php echo  $item['link_block_banner']['url']; ?>" class="one-block-banner">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
            </a>
            <a href="<?php echo  $item['link_block_banner']['url']; ?>"
                class="mc-btn-shop-now"><?php echo  $item['name_button_shop_now']; ?></a>
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
        <?php $count++; endforeach; ?>
    </div>
</div>