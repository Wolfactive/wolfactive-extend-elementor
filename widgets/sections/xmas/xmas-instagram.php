
<div class="<?php _e($class_preflix,'ella') ?>-instagram-plush">
    <div class="widget-title">   
        <h3 class="box-title">
            <span class="title"> 
                <i class="fab fa-instagram"></i>
                <span>
                <?php echo $settings['xmas_instagram_title']; ?>
            </span>
            </span>
        </h3>
        <p>
            <span>
                <?php echo $settings['xmas_instagram_description']; ?>
            </span>
        </p>        
    </div>
    <div class="xmas-row-instagram">
        <?php foreach (  $settings['xmas_gallery'] as $image ): ?>
        <a href="<?php echo  $image['url']; ?>" data-lightbox="roadtrip" class="xmas-image-instagram">
            <?php
                echo '<img src="' . $image['url'] . '">';
            ?>
        </a>
        <?php endforeach; ?>
    </div>
    <div class="infinite-scrolling-instagram">
        <a href="javascript:void(0)">
            <svg id="icon-plus-instagram" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 42 42" xml:space="preserve">
            <polygon points="42,19 23,19 23,0 19,0 19,19 0,19 0,23 19,23 19,42 23,42 23,23 42,23 "></polygon>
            </svg>
        </a>
    </div>
</div>