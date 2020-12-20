<div class="<?php _e($class_preflix,'ella') ?>-collection-slider">
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
        </div>

        <?php endforeach; ?>
    </div>
</div>