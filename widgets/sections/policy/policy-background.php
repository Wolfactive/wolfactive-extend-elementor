

<?php //echo '<div class="' . $class_preflix . '-policy" style="background: ' . $settings['background_color'] . '">'; ?>
<div class="<?php _e($class_preflix,'ella') ?>-policy" <?php echo 'style="background: ' . $settings['background_color'] . '"' ?>>
    <div class="<?php _e($class_preflix,'ella') ?>-background-policy" data-show-item="<?php _e($settings['slider_item'],'ella') ?>">
        <?php foreach (  $settings['list'] as $item ): ?>
            <a href="<?php echo  $item['link_policy']['url']; ?>" class="<?php _e($class_preflix,'ella') ?>-polict-text">
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
        <?php endforeach; ?>
    </div>
</div>