<div class="<?php _e($class_preflix,'ella') ?>-xmas-video">
    <div class="home-custom-block" style="background-image: url(<?php  echo  $settings['image_background_video']['url']; ?>);">
        <div class="container-ss">
            <div class="row-video">
                <div class="no-padd">
                    <div class="custom-block-banner banner-large-img">
                        <div class="img-box">
                            <a href="javascript:void(0)">
                                <img src="<?php echo  $settings['image_left_video']['url']; ?>" alt="img-video">
                            </a>
                            <div class="video-open-popup">
                                <a href="javascript:void(0)" class="icon-video" id="btnParallaxShowPopupVideo">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                        <path style="fill:transparent;" d="M256,20C125.872,20,20,125.872,20,256s105.872,236,236,236s236-105.872,236-236S386.128,20,256,20z   M156.64,387.712V124.288l246.72,131.72L156.64,387.712z"></path>
                                        <path d="M512,256C512,114.616,397.384,0,256,0S0,114.616,0,256s114.616,256,256,256S512,397.384,512,256z   M256,492C125.872,492,20,386.128,20,256S125.872,20,256,20s236,105.872,236,236S386.128,492,256,492z"></path>
                                        <polygon points="156.64,387.712 403.36,256.008 156.64,124.288 "></polygon><g></g> <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                                    </svg>
                                </a>
                            </a>
                        </div>
                        </div>
                        <div id="myModalPopupVideo" class="modal-parallax-video">
                            <div class="modal-content fade-in">
                                <span class="close" id="closeID">&times;</span>
                                <?php echo  $settings['iframe_video'] ?>
                            </div>
                        </div>
                        <div class="banner-content inner abs_right">
                            <h3 class="banner-sub-heading">
                                <span>
                                <?php echo $settings['sub_title_video']; ?>
                            </span>
                            </h3> 
                            <h2 class="banner-heading">
                            <span>
                                <?php echo $settings['title_video']; ?>
                            </span>
                            </h2>
                            <p class="banner-des">
                            <span>
                                <?php echo $settings['xmas_desc_video']; ?>
                            </span>
                            </p>
                            <a href="<?php echo $settings['link_video_shop']['url']; ?>" class="banner-button">
                            <span>
                                <?php echo $settings['name_button_video']; ?>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>