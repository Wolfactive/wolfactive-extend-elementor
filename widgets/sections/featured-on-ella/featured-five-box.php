
<div class="<?php _e($class_preflix,'ella') ?>-featured-five-box"> 
    <h3 class="featured-title">
        <span><?php _e($settings['featured_title'],'ella') ?></span>
    </h3>
    <div class="featured-desc">
        <?php _e($settings['featured_description'],'ella') ?>
    </div>
    <div class="feature-row">
        <?php foreach (  $settings['list'] as $item ): ?>
        <div class="one-box-featured">
            <a href="<?php echo  $item['link_featured']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-featured">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
                <div class="sub-title-one-box">
                    <?php echo  $item['sub_title_one_box']; ?>
                </div>
            </a>
            <div class="content-one-box">
                <div class="title-one-box">
                    <span class="space--mc"><?php echo  $item['featured_title_one_box']; ?></span>
                    
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="feature-row">
        <?php foreach (  $settings['list_two'] as $item ): ?>
        <div class="custom-two-box">
            <a href="<?php echo  $item['link_featured_two']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-featured">
                <?php
                    echo '<img src="' . $item['list_image_two']['url'] . '">';
                ?>
                <div class="sub-title-one-box">
                    <?php echo  $item['sub_title_one_box_two']; ?>
                </div>
            </a>
            <div class="content-one-box">
                <div class="title-one-box">
                    <span class="space--mc"><?php echo  $item['featured_title_one_box_two']; ?></span>
                    
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>