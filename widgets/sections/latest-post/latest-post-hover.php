
<div class="<?php _e($class_preflix,'ella') ?>-latest-post-hover"> 
    <div class="latest-post-row">
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
                        <div class="mc-lt">
                            <div class="content-one-box-lt">
                            <div class="author-and-date">
                                    <span><?php _e('by','ella') ?> </span><span><?php echo get_the_author(); ?> </span><span>on </span> <span><?php echo get_the_date( 'F j, Y' ); ?></span>
                                </div>
                                <div class="title-one-box">
                                    <div class="">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                                <div class="mc-des">
                                    <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="btn-read-more">
                                    Read more
                                </a>
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