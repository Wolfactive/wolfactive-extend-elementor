
<div class="<?php _e($class_preflix,'ella') ?>-featured-slider"> 
    <div class="container">
        <h3 class="featured-title">
            <span><?php _e($settings['featured_title'],'ella') ?></span>
        </h3>
        <div class="featured-desc">
            <?php _e($settings['featured_description'],'ella') ?>
        </div>
        <div class="feature-slider" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
            <?php foreach (  $settings['list'] as $item ): ?>
            <div class="one-box-slider">
                <div class="sport-light">
                    <a href="<?php echo  $item['link_featured']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-featured">
                        <?php
                            echo '<img src="' . $item['list_image']['url'] . '">';
                        ?>
                    </a>
                    <div class="content-one-box">
                        <div class="title-one-box">
                            <?php echo  $item['featured_title_one_box']; ?>
                        </div>
                        <a class="featured-btn-shop" href="<?php echo  $item['link_featured']['url']; ?>"><?php echo  $item['text_button']; ?></a>
                    </div>
                </div>
                
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>