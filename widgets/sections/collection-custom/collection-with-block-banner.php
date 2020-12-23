<div class="<?php _e($class_preflix,'ella') ?>-collection-with-block-banner">
    <div class="collection-row">
        <div class="col-collection col-collec-left">
            <a href="<?php echo  $settings['link_colection']['url']; ?>" class="one-box-collection">
                <?php
                        echo '<img src="' . $settings['image']['url'] . '">';
                    ?>
            </a>
            <a href="<?php echo  $settings['link_colection']['url']; ?>"
                class="mc-btn-shop-now"><?php echo  $settings['name_button_shop_now']; ?></a>
        </div>
        <div class="col-collection">
            <div class="col-mb">
                <?php foreach (  $settings['list_right'] as $item ): ?>
                <div class="col-collec-right">
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
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>