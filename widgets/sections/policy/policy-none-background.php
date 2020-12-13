

<div class="<?php _e($class_preflix,'ella') ?>-policy policy-none-background">
    <div class="<?php _e($class_preflix,'ella') ?>-background-policy" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
        <?php foreach (  $settings['list'] as $item ): ?>
            <div class="one-policy">
                <a href="<?php echo  $item['link_policy']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-polict-text" <?php echo 'style="background: ' . $settings['background_color_one_box'] . '"' ?>>
                    <span class="style-icon-policy">
                        <?php
                            echo  $item['policy_icon'];
                        ?>
                    </span>
                    <span class="mc-gc">
                        <?php
                            echo  $item['policy_text'];
                        ?>
                    </span>
                </a>
            </div>
            
        <?php endforeach; ?>
    </div>
</div>