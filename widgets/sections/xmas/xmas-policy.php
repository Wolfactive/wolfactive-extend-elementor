<div class="<?php _e($class_preflix,'ella') ?>-xmas-policy">
    <div class="policy_xmas" data-show-item="<?php _e($settings['xmas_policy_slider_item'],'ella') ?>">
        <?php foreach (  $settings['xmas_policy_list'] as $item ): ?>
            <a href="<?php echo  $item['xmas_link_policy']['url']; ?>" class="policy_xmas_content">
                <span class="policy-icon">
                    <?php echo $item['xmas_policy_icon']; ?>
                </span>
                <span class="policy-text">
                    <span>
                        <?php echo $item['xmas_policy_text']; ?>
                    </span>
                    <p>
                        <span>
                            <?php echo $item['xmas_policy_description']; ?>
                        </span>
                    </p>   
                </span>
            </a>
        <?php endforeach; ?>
    </div>
</div>