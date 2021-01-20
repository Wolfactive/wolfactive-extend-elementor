<section class="wa-lookbook-custom">
    <div class="wa-lookbook-custom-contain">
        <?php $countR=0; foreach (  $settings['list_lbl'] as $item ): ?>
        <?php if($countR % 2 === 0){ ?>
        <div class="loobook-row">
            <div class="small_img_lb">
                <div class="row-sm">
                    <?php foreach (  $item['gallery_lb'] as $image ): ?>
                    <div class="lb_small">
                        <?php
                            echo '<img src="' . $image['url'] . '">';
                        ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="big_img_lb">
                <?php
                        echo '<img src="' . $item['list_image_lb_big']['url'] . '">';
                    ?>
            </div>
        </div>
        <?php }else{ ?>
        <div class="loobook-row">
            <div class="big_img_lb">
                <?php
                        echo '<img src="' . $item['list_image_lb_big']['url'] . '">';
                    ?>
            </div>
            <div class="small_img_lb">
                <div class="row-sm">
                    <?php foreach (  $item['gallery_lb'] as $image ): ?>
                    <div class="lb_small">
                        <?php
                                    echo '<img src="' . $image['url'] . '">';
                                ?>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php } ?>
        <?php $countR++; endforeach; ?>
    </div>
    <div class="lb-default-contain">
        <div class="text-share">
            <?php _e($settings['lbc_text_share'],'ella') ?>
        </div>
        <div class="addthis_inline_share_toolbox_fsvi"></div>
    </div>
    <div class="btn-lookbook">
        <a href="<?php _e($settings['lbc_link'],'ella') ?>" class="button-lookbook">
            <?php _e($settings['text_button_lbc'],'ella') ?>
        </a>
    </div>
</section>