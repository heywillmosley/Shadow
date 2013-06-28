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
		<h1>Thank you for visiting the King Bio SafeCarRx site</h1>
        <p>For more information or for any questions you might have, please contact us:</p>
        <address>
        	King Bio, Inc.<br/>
            3 Westside Drive<br/>
            Asheville, NC 28806
      	</address>
        <p>Phone: 866-298-2740 (Toll Free) or 828-398-2072 Fax: 828-255-0940</p>
        <p>Email: <a href="#">procsr@safecarerx.com</a></p>
    </div><!-- end small-12 columns -->
</div><!-- end row -->


<?php 
# includes footer.php
app_footer();

