<div class="<?php _e($class_preflix,'ella') ?>-xmas-carousel">
    <div class="carousel-xmas-contain">
        <?php foreach (  $settings['list'] as $item ): ?>
        <div class="item-carousel">
            <div class="img-contain">
                <a href="<?php echo  $item['link_carousel']['url']; ?>">
                    <img src="<?php echo  $item['list_image']['url']; ?>" alt="img-carousel">
                </a>
            </div>
            <div class="slider-content">
                <h3 class="sub-title-slider">
                    <?php echo $item['sub_title']; ?>
                </h3>
                <h2 class="title-slider"> 
                    <?php echo $item['title']; ?>
                </h2>
                <p class="slider-text">
                    <?php echo $item['collection_desc_one_box']; ?>
                </p>
                <a href="<?php echo  $item['link_carousel']['url']; ?>"
                class="mc-btn-shop-now"><?php echo  $item['name_button_shop_now']; ?></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>