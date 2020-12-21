<div class="<?php _e($class_preflix,'ella') ?>-different-collection">
    <div class="collection-contain">
        <div class="different-collection-row">
            <div class="col-df-collection">
                <?php foreach (  $settings['list'] as $item ): ?>
                <div class="mc-style-one-box">
                    <a href="<?php echo  $item['link_colection']['url']; ?>" class="one-box-collection">
                        <?php
                            echo '<img src="' . $item['image']['url'] . '">';
                        ?>
                        <div class="df-title-one-collection">
                            <h3 class="df-title-collection">
                                <?php
                                    echo  $item['collection_title_one_box'];
                                ?>
                            </h3>
                            <p class="number-products">
                                <?php
                                    echo  $item['number_products'];
                                ?>
                            </p>
                        </div>
                    </a>
                    <a href="<?php echo  $item['link_colection']['url']; ?>"
                        class="mc-btn-shop-now"><?php echo  $item['name_button_shop_now']; ?></a>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-df-collection">
                <?php foreach (  $settings['list_right'] as $item ): ?>
                <div class="mc-style-one-box">
                    <a href="<?php echo  $item['link_colection']['url']; ?>" class="one-box-collection">
                        <?php
                            echo '<img src="' . $item['image']['url'] . '">';
                        ?>
                        <div class="df-title-one-collection">
                            <h3 class="df-title-collection">
                                <?php
                                    echo  $item['collection_title_one_box'];
                                ?>
                            </h3>
                            <p class="number-products">
                                <?php
                                    echo  $item['number_products'];
                                    ?>
                            </p>
                        </div>
                    </a>
                    <a href="<?php echo  $item['link_colection']['url']; ?>"
                        class="mc-btn-shop-now"><?php echo  $item['name_button_shop_now']; ?></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="sub-des">
            <div><?php
                echo  $settings['collection_custom_description'];
            ?></div>
        </div>
    </div>
</div>