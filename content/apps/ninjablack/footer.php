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
 * Sets footer settings
 */
 
// --------------------------------------------------------------------------------?>

<div class="footer row">
	<div class="left">&copy; <?php auto_copyright(); echo ' ' . SITE_NAME; ?></div>
    <div class="right">
    	<a href="#" class="txt_wht">&uarr; Back to the Top</a>
    </div>
</div>
</div><!-- end wrapper -->

<script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo BASE_JS_URL; ?>vendor/zepto' : '<?php echo BASEURL; ?>js/vendor/jquery') +
  '.js><\/script>')
</script>
<script src="<?php echo BASE_JS_URL; ?>vendor/foundation/foundation.min.js"></script>

<!-- Load Javascripts -->
<script src="<?php echo APP_JS_URL; ?>application.js"></script>

<script src="<?php echo BASE_JS_URL; ?>shadow.js"></script>
<script src="<?php echo BASE_JS_URL; ?>vendor/respond.min.js"></script>

<script>
  $(document).foundation();
</script>

</body>
