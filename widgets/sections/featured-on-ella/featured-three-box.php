
<div class="<?php _e($class_preflix,'ella') ?>-featured"> 
    <h3 class="featured-title <?php if($settings['toggle_title_line'] == 'yes') echo 'have-line' ?>">
        <span><?php _e($settings['featured_title'],'ella') ?></span>
    </h3>
    <div class="feature-row">
        <?php foreach (  $settings['list'] as $item ): ?>
        <div class="one-box-featured">
            <a href="<?php echo  $item['link_featured']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-image-featured">
                <?php
                    echo '<img src="' . $item['list_image']['url'] . '">';
                ?>
            </a>
            <div class="content-one-box">
                <div class="title-one-box">
                    <?php echo  $item['featured_title_one_box']; ?>
                </div>
                <div class="mc-des">
                    <?php echo  $item['featured_description_one_box']; ?>
                </div>
                <a class="featured-btn-shop" href="<?php echo  $item['link_featured']['url']; ?>"><?php echo  $item['text_button']; ?></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>