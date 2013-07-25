<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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


<?php shdw_footer(); ?>
</body>
