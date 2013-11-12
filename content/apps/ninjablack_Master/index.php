<?php defined('INDEX') or die() and exit(); // Prevents direct script access
/**
 * Shadow
 *
 * An open source application development framework that streamlines
 * responsive e-ecommerce development for php 5.0.0 or newer
 *
 * @package        Shadow
 * @author         Super Amazing
 * @copyright      Copyright (c) 2010 - 2013, Super Amazing
 * @license        
 * @link           http://shadow.livesuperamazing.com
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * Home page template
 */
 
// --------------------------------------------------------------------------------

# includes header.php
app_header(); ?>

<div class="feature-container">
    <div class="feature">
        <div class="feature-text feature-text-left">
            <div class="feature-text-container">
                <div class="feature-desc-title">Completely Customizable</div>
                <div class="feature-item-title">The sharpest 7” tablet screen ever.</div>
                <div class="feature-item-content">
                    The world's highest-resolution 7" tablet puts over 2.3 million pixels in the palm of your hand. With 323 pixels packed into every inch, you can read text that’s sharper than the printed page, see images more vivid than the highest quality photo magazine, and watch videos come to life in vibrant 1080p HD. 
                </div><!-- end feature-item-content -->
                <div class="feature-item-title">Sound that surrounds.</div>
                <div class="feature-item-content">
                    Nexus 7 features dual stereo speakers and surround sound powered by Fraunhofer ¹ (the MP3 inventors), so you get rich and immersive audio. Hear it all more clearly with finely tuned volume boost technology that makes dialog and sound crisp and easier on the ears.
                </div><!-- end feature-item-content -->
                <div class="feature-item-title">Fast and smooth.</div>
                <div class="feature-item-content">
                    Nexus 7 is made by ASUS and packs a serious punch. With a quad-core Qualcomm Snapdragon™ S4 Pro processor and 2GB of RAM, everything runs faster, and high-performance rendering ensures 3D graphics are smooth and dynamic. 
                </div><!-- end feature-item-content -->
            </div><!-- end feature-text-container -->
        </div><!-- end feature-text -->
        <div class="feature-image feature-image-right">
            <img class="feature-desc-image" src="<?php echo APP_IMG_URL; ?>imac-device.png" alt="" />
        </div><!-- end feature-image -->
    </div><!-- end feature -->
    <div class="feature">
        <div class="feature-text feature-text-right">
            <div class="feature-text-container">
                <div class="feature-desc-title">Super Secure</div>
                <div class="feature-item-title">The sharpest 7” tablet screen ever.</div>
                <div class="feature-item-content">
                    The world's highest-resolution 7" tablet puts over 2.3 million pixels in the palm of your hand. With 323 pixels packed into every inch, you can read text that’s sharper than the printed page, see images more vivid than the highest quality photo magazine, and watch videos come to life in vibrant 1080p HD. 
                </div><!-- end feature-item-content -->
                <div class="feature-item-title">Sound that surrounds.</div>
                <div class="feature-item-content">
                    Nexus 7 features dual stereo speakers and surround sound powered by Fraunhofer ¹ (the MP3 inventors), so you get rich and immersive audio. Hear it all more clearly with finely tuned volume boost technology that makes dialog and sound crisp and easier on the ears.
                </div><!-- end feature-item-content -->
            </div><!-- end feature-text-container -->
        </div><!-- end feature-text -->
        <div class="feature-image feature-image-left">
            <img class="feature-desc-image" src="<?php echo APP_IMG_URL; ?>laptop-device.png" alt="" />
        </div><!-- end feature-image -->
    </div><!-- end feature -->
</div><!-- end feature-container -->
<?php 
# includes footer.php
app_footer();