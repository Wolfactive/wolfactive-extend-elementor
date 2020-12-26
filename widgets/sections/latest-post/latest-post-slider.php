
<div class="<?php _e($class_preflix,'ella') ?>-latest-post-slider"> 
    <h3 class="latest-post-title <?php if($settings['toggle_title_line']) echo 'have-line' ?>">
        <span><?php _e($settings['latest_post_title'],'ella') ?></span>
    </h3>
    <p class="desc-mc-lt">
        <?php _e($settings['latest_post_description'],'ella') ?>
    </p>
    <div class="latest-post-slider-lt" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
    <?php foreach($settings['show_elements'] as $post): ?>
        <?php  
            $params = array(
                'p' => (int)$post, 
                'post_type' => 'post'
            );
            $wc_query = new WP_Query($params);
            if ($wc_query->have_posts()) :
                while ($wc_query->have_posts()) : $wc_query->the_post(); 
                        ?>
                    <div class="one-box-latest-post">
                        <a href="<?php the_permalink(); ?>" class="<?php _e($class_preflix,'ella') ?>-image-latest-post">
                            <?php
                                the_post_thumbnail('full');
                            ?>
                        </a>
                        <div class="content-one-box-lt">
                            <div class="title-one-box">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </div>
                            <div class="author-and-date">
                                <span><?php _e('by','ella') ?> </span><span><?php echo get_the_author(); ?> </span><span>on </span> <span><?php echo get_the_date( 'F j, Y' ); ?></span>
                            </div>
                            <div class="mc-des">
                                <?php echo wp_trim_words( get_the_content(), 30, '...' ); ?>
                            </div>
                        </div>
                    </div>
                        <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        <?php  endforeach; ?>
    </div>
</div>