<div class="<?php _e($class_preflix,'ella') ?>-collection-slider-dot">
    <div class="collection-row-slider" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
        <?php foreach (  $settings['list'] as $item ): ?>
        <div class="col-collection-sldier">
            <a href="<?php echo  $item['link_colection']['url']; ?>" class="one-box-collection">
                <?php
                        echo '<img src="' . $item['list_image']['url'] . '">';
                    ?>
                <div class="title-one-collection">
                    <h3 class="title-collection">
                        <?php
                                echo  $item['collection_title_one_box'];
                            ?>
                    </h3>
                    <p class="desc-one-collect"><?php echo  $item['collection_desc_one_box']; ?></p>
                </div>

            </a>
            <div class="mc-btn-shop-now">
                <a
                    href="<?php echo  $item['link_shop_now']['url']; ?>"><?php echo  $item['name_button_shop_now']; ?></a>
            </div>

        </div>

        <?php endforeach; ?>
    </div>
</div>