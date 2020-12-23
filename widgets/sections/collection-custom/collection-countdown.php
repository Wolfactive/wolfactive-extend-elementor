<div class="<?php _e($class_preflix,'ella') ?>-collection-countdown">
    <div class="collection-row">

        <div class="col-collection">
            <div class="col-mb">
                <?php foreach (  $settings['list_left'] as $item ): ?>
                <div class="col-collec-left mg-30">
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
        <div class="col-collection between-custom">
            <?php $countdownt = 0; foreach (  $settings['list_between'] as $item ): ?>
            <div class="col-collec-between mg-30">
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
                        <p class="des">
                            <span>
                                Sale up to 60% off on selected items. End ins:
                            </span>
                        </p>
                        <?php if($countdownt == 0){ ?>
                        <div class="sub-banner-countdown" data-countdown="<?php echo $settings['due_date']; ?>">
                            <div class="clock-item"><span class="num" id="numberDays">00</span><span class="text-clock">days</span>
                            </div>
                            <div class="clock-item"><span class="num" id="numberHours">00</span><span class="text-clock">hours</span>
                            </div>
                            <div class="clock-item"><span class="num" id="numberMins">00</span><span class="text-clock">mins</span>
                            </div>
                            <div class="clock-item"><span class="num" id="numberSecs">00</span><span class="text-clock">secs</span>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </a>
            </div>
            <?php $countdownt++;endforeach; ?>
        </div>
        <div class="col-collection c-right">
            <div class="col-mb">
                <?php foreach (  $settings['list_right'] as $item ): ?>
                <div class="col-collec-right mg-30">
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