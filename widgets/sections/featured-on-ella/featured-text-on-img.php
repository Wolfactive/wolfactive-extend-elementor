<div
    class="<?php _e($class_preflix,'ella') ?>-featured-text-on-image <?php if($settings['bg_toggle_feture'] == 'yes') echo "have--background-feature"?>">
    <div class=" container">
        <div class="feature-row">
            <?php foreach (  $settings['list'] as $item ): ?>
            <div class="one-box-featured">
                <a href="<?php echo  $item['link_featured']['url']; ?>"
                    class="<?php _e($class_preflix,'ella') ?>-image-featured">
                    <?php
                        echo '<img src="' . $item['list_image']['url'] . '">';
                    ?>
                    <div class="content-one-box">
                        <div class="sub-title-one-box">
                            <?php echo  $item['sub_title_one_box']; ?>
                        </div>
                        <div class="title-one-box">
                            <?php echo  $item['featured_title_one_box']; ?>
                        </div>
                        <div class="mc-des">
                            <?php echo  $item['featured_description_one_box']; ?>
                        </div>
                    </div>
                </a>
                <a class="featured-btn-shop"
                    href="<?php echo  $item['link_featured']['url']; ?>"><?php echo  $item['text_button']; ?></a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>