<div class="<?php _e($class_preflix,'ella') ?>-collection-with-block-banner-two">
    <div class="collection-row">
        <div class="col-collection mc-not-mg">
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
        <div class="col-collection col-collec-left">
            <a href="<?php echo  $settings['link_colection']['url']; ?>" class="one-box-collection">
                <?php
                        echo '<img src="' . $settings['image']['url'] . '">';
                    ?>
                <div class="title-one-collection">

                    <h3 class="title-collection">
                        <?php
                            echo  $settings['collection_title_one_box'];
                        ?>
                    </h3>
                </div>
            </a>
        </div>
    </div>
    <div class="des-bottom">
        <div><?php echo  $settings['desc_bottom'];?>
        </div>
    </div>
</div>