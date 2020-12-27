
<div class="<?php _e($class_preflix,'ella') ?>-brand brand-have-tt-des">
    <h3 class="<?php _e($class_preflix,'ella') ?>-title-brand">
        <?php _e($settings['brand_title'],'ella') ?>
    </h3>
    <div class="<?php _e($class_preflix,'ella') ?>-description-brand">
        <?php _e($settings['brand_description'],'ella') ?>
    </div>
        <?php foreach (  $settings['list'] as $index=>$item ): 
            if($index == 0): ?>
            <div class="<?php _e($class_preflix,'ella') ?>-slider-brand-mobile">
            <?php endif;    
                if($index % 2 != 0):
            ?>
            <div class="<?php _e($class_preflix,'ella') ?>-slider-brand-mobile-item col-divide-5-col col-divide-sm-12">
                <a href="<?php echo  $item['link_brand']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-brand">
                    <?php
                        echo '<img src="' . $item['list_image']['url'] . '">';
                    ?>
                </a>
            <?php endif; ?>
            <?php if($index % 2 == 0):?>
                <a href="<?php echo  $item['link_brand']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-brand">
                    <?php
                        echo '<img src="' . $item['list_image']['url'] . '">';
                    ?>
                </a>
            </div>
            <?php endif;?>
            <?php if(($index + 1) == count($settings['list'])):?>
                <a href="<?php echo  $item['link_brand']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-brand">
                    <?php
                        echo '<img src="' . $item['list_image']['url'] . '">';
                    ?>
                </a>
            </div>
            </div>
            <?php endif;?>
        <?php endforeach; ?>
</div>