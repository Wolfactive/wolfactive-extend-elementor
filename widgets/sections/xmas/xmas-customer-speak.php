<div class="<?php _e($class_preflix,'ella') ?>-xmas-customer-speak">
    <div class="container">
        <div class="widget-title">   
            <h3 class="box-title">
            <span class="title"> 
                <span>
                    <?php echo $settings['title_customer_speak']; ?>
                </span>
            </span>
            </h3>
        </div>
        <div class="slider-customer-speak" data-show-item="<?php _e($settings['slider_item_customer_speak'],'ella') ?>">
            <?php foreach (  $settings['list_customer_speak'] as $item ): ?>
            <div class="one-box-customer">
                <div class="background-one-col">
                    <div class="item-image">
                    <?php
                        echo '<img src="' . $item['image_customer']['url'] . '">';
                    ?>
                    </div>
                    <h2 class="heading-review">
                        <span>
                            <?php echo $item['sub_title_cs_speak']; ?>
                        </span>
                    </h2>
                    <div class="body-review">
                        <span>
                            <?php echo $item['desc_cs_speak']; ?>
                        </span>
                    </div>
                    <div class="star-reviews star5">
                        <svg viewBox="0 0 306 306" id="icon-star" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125 94.35,187.425 58.65,299.625 "></polygon> 
                        </svg>
                        <svg viewBox="0 0 306 306" id="icon-star" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125 94.35,187.425 58.65,299.625 "></polygon> 
                        </svg>
                        <svg viewBox="0 0 306 306" id="icon-star" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125 94.35,187.425 58.65,299.625 "></polygon> 
                        </svg>
                        <svg viewBox="0 0 306 306" id="icon-star" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125 94.35,187.425 58.65,299.625 "></polygon> 
                        </svg>
                        <svg viewBox="0 0 306 306" id="icon-star" width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <polygon points="153,230.775 247.35,299.625 211.65,187.425 306,121.125 191.25,121.125 153,6.375 114.75,121.125 0,121.125 94.35,187.425 58.65,299.625 "></polygon> 
                        </svg>
                    </div>
                    <div class="title-reviews">
                        <span class="purchased-text">
                            <span>
                                Purchased:
                            </span>
                        </span>
                        <a class="title" href="" title="Magnis darturien eros laciniados..." tabindex="0">
                            <h4>
                                <span>
                                    <?php echo $item['purchased']; ?>
                            </span>
                            </h4>
                        </a>
                    </div>
                    <div class="name-review">
                        <h5>
                            <span>
                                <?php echo $item['name_customer']; ?>
                            </span>
                        </h5>
                    </div>
                    <p class="date-review">
                        <span>
                            <?php echo $item['date_speak']; ?>
                        </span>
                    </p>
                </div>
                
            </div> 
            <?php endforeach; ?>
        </div>
    </div>
</div>