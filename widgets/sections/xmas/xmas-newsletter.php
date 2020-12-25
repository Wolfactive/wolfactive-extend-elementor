<div class="<?php _e($class_preflix,'ella') ?>-xmas-newsletter">
    <div class="custom-block-banner" style="background-image: url(<?php echo $settings['image_background_newsletter_xmas']['url']; ?>);">
        <div class="banner-content">
            <h4 class="banner-title">
                <span>
                    <?php echo $settings['xmas_newsletter_title']; ?>
                </span>
            </h4>
            <h2 class="banner-heading">
                <span>
                    <?php echo $settings['xmas_newsletter_description']; ?>
                </span>
            </h2>
        <div class="block-content">
            <form method="post" action="/contact" id="contact_form" accept-charset="UTF-8" class="input-group"><input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">
                <input type="hidden" name="contact[tags]" value="newsletter">
                <div class="content-input">
                <i class="far fa-envelope"></i>
                    <input class="input-group-field" type="email" name="contact[email]" aria-label="Email Address" placeholder="enter your email address" required="required">
                </div>
                <input class="btn-news" type="submit" value="Submit"></form>
            </div>
        </div>
    </div>
</div>