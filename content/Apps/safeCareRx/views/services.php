<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
app_header();  
?>
<div class="row">
	<div class="small-12 columns">
		<h1>Private Label</h1>
        <p>Your Personal Label provides a professional exclusivity to your store with your own unique look that customers will automatically associate with their health and wellness.</p>
        <a href="#" class="button">View PDF</a>
    </div><!-- end small-12 columns -->
</div><!-- end row -->


<?php 
# includes footer.php
app_footer();

