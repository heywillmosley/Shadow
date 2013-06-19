<?php # Prevents direct script access
if(!defined('FRONT_URI')){require'config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * @since          Version 1.1.5
 * -----------------------------------------------------------------
 *
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 1.1.7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 0 Arguments
 * 0 Methods
 */
class Maintenance
{
	function maintenance_mode()
{
	if( MAINTENANCE == 1 ) : ?>
	
    	<div data-alert class="alert-box warning mbn" style="background-color: #d9edf7 !important; color: #3a87ad !important">
        	<?php echo MAINT_MSG; ?>
        </div><!-- end data-alert -->
		
	<?php endif;
	
	if( MAINTENANCE == 2 ) : ?>
	
    	<div data-alert class="alert-box warning mbn" style="background-color: #f2dede !important; color: #b94a48 !important">
        	<?php echo MAINT_ACTIVE_MSG; ?>
        </div><!-- end data-alert -->
		
	<?php endif;
	
	return true;
	
} // end maintenance_mode()
 
} // end ClassName