<div class="<?php _e($class_preflix,'ella') ?>-collection-button-view-all">
    <div class="widget-title">
        <h3 class="box-title">
            <span class="title">

                <span>
                    <?php echo  $settings['collection_big_title']; ?>
                </span>

            </span>
        </h3>
    </div>
    <div class="collection-row-slider" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
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