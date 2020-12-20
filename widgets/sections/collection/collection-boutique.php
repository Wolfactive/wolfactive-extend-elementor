<div class="<?php _e($class_preflix,'ella') ?>-collection-boutique">
    <h3 class="box-title">
        <span class="title">
            <span>
                <?php echo  $settings['collection_big_title']; ?>
            </span>
        </span>
    </h3>
    <div class="decs-mc">
        <?php echo  $settings['collection_description']; ?>
    </div>
    <div class="collection-row">
        <?php foreach (  $settings['list'] as $item ): ?>
        <div class="col-collection">
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
</div>