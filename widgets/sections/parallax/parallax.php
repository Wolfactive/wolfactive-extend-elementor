<div class="<?php _e($class_preflix,'ella') ?>-parallax-section-one
            <?php if($settings['toggle_float'] == 'yes') echo "header--float"; ?>"
            <?php if($settings['toggle_float'] == 'yes') echo 'data-header="header--float"'; ?>
            <?php if($settings['toggle_float'] == 'yes'): ?> data-logo="<?php echo  $settings['logo_image']['url']  ?>" <?php endif; ?>
            <?php if($settings['toggle_float'] == 'yes'): ?> data-icon="<?php echo  $settings['cart_image']['url']?>" <?php endif; ?>>
    <div class="custom-block-banner banner-large-img banner-parallax">
        <div class="img-box">
            <a href="<?php echo  $settings['link_section_one']['url']; ?>">
                <div class="parallax-image" style="background-image: url(<?php echo $settings['image_bg_section_one']['url']; ?>);">
                </div> 
                <?php echo '<img class="img-parallax" src="' . $settings['image_bg_section_one']['url'] . '">'; ?>
            </a>
        </div>
        <div class="banner-content inner abs_left">
            <h2 class="banner-heading">
                <span class="line">
                    
                </span>
                <span>
                    <?php echo $settings['title_section_one']; ?>
                </span>
            </h2>
            <p class="banner-des">
            <span>
                <?php echo $settings['desc_section_one']; ?>
            </span>
            </p>
            <a href="<?php echo  $settings['link_section_one']['url']; ?>" class="banner-button">
                <span>
                    <?php echo $settings['name_button_shop_now_section_one']; ?>
                </span>
            </a>
        </div>
    </div>
    <a href="javascript:void(0);" class="scroll-down">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" zoomAndPan="disable" x="0px" y="0px" viewBox="0 0 36 18" xml:space="preserve">
            <line class="st0" x1="36" y1="0" x2="18" y2="18"></line>
            <line class="st0" x1="0" y1="0" x2="18" y2="18"></line>
        </svg>
    </a>
</div>
<div class="<?php _e($class_preflix,'ella') ?>-parallax-section-two">
    <div class="block-banner-row">
        <?php foreach (  $settings['list_section_two'] as $item ): ?>
        <div class="col-block-banner">
            <a href="<?php echo  $item['link_block_banner_section_two']['url']; ?>" class="one-block-banner">
                <?php
                    echo '<img src="' . $item['list_image_section_two']['url'] . '">';
                ?>
            </a>
            <a href="<?php echo  $item['link_block_banner_section_two']['url']; ?>"
                class="mc-btn-shop-now"><?php echo  $item['name_button_section_two']; ?></a>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="<?php _e($class_preflix,'ella') ?>-parallax-section-three">
    <div class="custom-block-banner banner-large-img banner-parallax">
        <div class="img-box">
            <a href="<?php echo  $settings['link_section_three']['url']; ?>">
                <div class="parallax-image" style="background-image: url(<?php echo $settings['image_bg_section_three']['url']; ?>);">
                </div> 
                <?php echo '<img class="img-parallax" src="' . $settings['image_bg_section_three']['url'] . '">'; ?>
            </a>
        </div>
        <div class="banner-content inner abs_left">
            <h2 class="banner-heading">
                <span class="line">
                    
                </span>
                <span>
                    <?php echo $settings['title_section_three']; ?>
                </span>
            </h2>
            <p class="banner-des">
            <span>
                <?php echo $settings['desc_section_three']; ?>
            </span>
            </p>
            <a href="<?php echo  $settings['link_section_three']['url']; ?>" class="banner-button">
                <span>
                    <?php echo $settings['name_button_shop_now_section_three']; ?>
                </span>
            </a>
        </div>
    </div>
</div>
<div class="<?php _e($class_preflix,'ella') ?>-parallax-section-four">
    <div class="custom-block-banner banner-large-img banner-parallax">
        <div class="img-box">
            <a href="<?php echo  $settings['link_section_four']['url']; ?>">
                <div class="parallax-image" style="background-image: url(<?php echo $settings['image_bg_section_four']['url']; ?>);">
                </div> 
                <?php echo '<img class="img-parallax" src="' . $settings['image_bg_section_four']['url'] . '">'; ?>
            </a>
        </div>
        <div class="banner-content inner abs_left">
            <h2 class="banner-heading">
                <span class="line">
                    
                </span>
                <span>
                    <?php echo $settings['title_section_four']; ?>
                </span>
            </h2>
            <p class="banner-des">
            <span>
                <?php echo $settings['desc_section_four']; ?>
            </span>
            </p>
            <div class="sub-banner-countdown" data-countdown="">
                <div class="clock-item">
                    <span class="num">00</span><span class="text-countdown">days</span>
                </div>
                <div class="clock-item">
                    <span class="num">00</span><span class="text-countdown">hours</span>
                </div>
                <div class="clock-item">
                    <span class="num">00</span><span class="text-countdown">mins</span>
                </div>
                <div class="clock-item">
                    <span class="num">00</span><span class="text-countdown">secs</span>
                </div>
            </div>
            <a href="<?php echo  $settings['link_section_four']['url']; ?>" class="banner-button">
                <span>
                    <?php echo $settings['name_button_shop_now_section_four']; ?>
                </span>
            </a>
        </div>
    </div>
</div>