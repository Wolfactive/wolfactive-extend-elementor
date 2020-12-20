

<div class="<?php _e($class_preflix,'ella') ?>-policy-description" <?php echo 'style="background: ' . $settings['background_color'] . '"' ?>>
    <div class="container">
        <div class="<?php _e($class_preflix,'ella') ?>-background-policy" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
            <?php foreach (  $settings['list'] as $item ): ?>
                <div href="<?php echo  $item['link_policy']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-polict-text">
                    <div class="style-icon-policy">
                        <?php
                            echo  $item['policy_icon'];
                        ?>
                    </div>
                    <div class="mc-gc">
                        <?php
                            echo  $item['policy_text'];
                        ?>
                    </div>
                    <div class="wa-policy-des">
                        <?php
                            echo  $item['policy_description'];
                        ?>
                    </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    
</div>