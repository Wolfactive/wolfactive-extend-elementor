<section class="wa-lookbook-custom">
    <div class="wa-lookbook-custom-contain">
        <div class="loobook-row">
            <div class="small_img_lb">
                <?php foreach ($settings['img_gallery_lb'] as $index=>$image): ?>
                <?php if($index % 5 == 0): ?>
                <div class="row-sm">
                    <?php endif;?>
                    <div class="lb_small">
                        <?php
                                echo '<img src="' . $image['url'] . '">';
                            ?>
                        <?php if($settings['list_child']): ?>
                        <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-buttons">
                            <?php  foreach($settings['list_child'] as $child): ?>
                            <?php if(($index + 1 )== $child['carousel_choose']):?>
                            <div class="<?php _e($class_preflix,'ella') ?>-carousel-item-image-button"
                                data-product="<?php _e($child['show_elements'],'ella') ?>"
                                data-location="<?php _e($child['location_modal'],'ella') ?>"
                                data-position="<?php _e($child['left'],'ella') ?>"
                                style="position:absolute; top:<?php echo $child['top'] ?>%;left:<?php echo $child['left'] ?>%; z-index:1000">
                                <div class="mc-icon-plus">
                                    <i class="gg-add"></i>
                                </div>
                            </div>
                            <?php endif;?>
                            <?php  endforeach;?>
                        </div>
                        <?php endif;?>
                    </div>
                    <?php if($index % 5 == 4%5): ?>
                </div>
                <?php endif;?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="lb-default-contain">
        <div class="text-share">
            <?php _e($settings['lbc_text_share'],'ella') ?>
        </div>
        <div class="addthis_inline_share_toolbox_fsvi"></div>
    </div>
    <div class="btn-lookbook">
        <a href="<?php _e($settings['lbc_link'],'ella') ?>" class="button-lookbook">
            <?php _e($settings['text_button_lbc'],'ella') ?>
        </a>
    </div>
</section>