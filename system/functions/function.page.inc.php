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
 * @since          Version 0.1.1 s8
 * -----------------------------------------------------------------
 *
 * System Page Functions
 */
 
// --------------------------------------------------------------------------------

/**
 * Gets the page Id
 *
 * @since 1.1.1 s9
 * @return void
 */
	function getPageId()
	{
		global $DBH;
		# Set new Page object
		$c = new Page( $DBH );
		
		# Call setPage() method
		return $c->getId();
		 
	}
	

