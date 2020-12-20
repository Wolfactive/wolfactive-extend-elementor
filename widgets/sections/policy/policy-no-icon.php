

<div class="<?php _e($class_preflix,'ella') ?>-policy policy-no-icon" <?php echo 'style="background: ' . $settings['background_color'] . '"' ?>>
    <div class="<?php _e($class_preflix,'ella') ?>-background-policy" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
        <?php foreach (  $settings['list'] as $item ): ?>
            <a href="<?php echo  $item['link_policy']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-polict-text">
                <?php
                    echo  $item['policy_text'];
                ?>
            </a>
        <?php endforeach; ?>
    </div>
</div>