<div class="<?php _e($class_preflix,'ella') ?>-xmas-block-banner">
    <div class="blog-detail-custom-block" style="background-image: url(<?php  echo  $settings['image_background']['url']; ?>);">
        <div class="container">
            <div class="blog-custom-content">
                <div class="row-divide">
                    <div class="blog-item">
                        <div class="content-image">
                            <a class="animate-scale" href="">
                            <img src="<?php echo  $settings['image_left']['url']; ?>" alt="img-collection">
                            </a>
                            <div class="banner-content abs_left">
                                <p class="banner-desc">
                                    <span>
                                        <?php echo $settings['collection_desc_one_box']; ?>
                                    </span>
                                </p>
                                <a href="<?php echo $settings['link_collection_left']['url']; ?>" class="banner-button button_2 ">
                                <span>
                                    <?php echo $settings['name_button_left']; ?>
                                </span>
                            </a>
                        </div>
                        </div>
                    </div>  
                    <div class="blog-item">
                        <div class="content-image">
                            <a class="animate-scale" href="">
                                <img src="<?php echo  $settings['image_right']['url']; ?>" alt="img-collection">
                            </a>
                                <div class="banner-content abs_center">
                                    <h2 class="banner-heading">
                                        <span>
                                        <?php echo $settings['title_right']; ?>
                                    </span>
                                </h2>
                                <p class="banner-desc">
                                    <span>
                                        <?php echo $settings['collection_desc_right']; ?>
                                    </span>
                                </p>
                                <a href="<?php echo $settings['link_collection_right']['url']; ?>" class="banner-button">
                                <span>
                                    <?php echo $settings['name_button_right']; ?>
                                </span>
                                </a>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>   
        </div>
    </div>
</div>