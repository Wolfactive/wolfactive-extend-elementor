<div class="<?php _e($class_preflix,'ella') ?>-collection-button-shop-now" 
            <?php if($settings['bg_toggle'] == 'yes') echo "have--background"?>>
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
                </div>

            </a>
            <a href="<?php echo  $item['link_shop_now']['url']; ?>"
                class="mc-btn-shop-now"><?php echo  $item['name_button_shop_now']; ?></a>
        </div>

        <?php endforeach; ?>
    </div>
    <div class="collection-button-view">
        <a href="<?php echo  $settings['link_view_all']['url']; ?>" class="mc-btn-view-all">
            <span>
                View All Collections
            </span>
        </a>
    </div>
</div>