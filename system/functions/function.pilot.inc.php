<?php defined('INDEX') or die( $id ) and exit( $id ); // Prevents direct script access
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
 * @since          Version 1.1.0
 * -----------------------------------------------------------------
 *
 * Pilot Functions
 */
 
// --------------------------------------------------------------------------------
	

/**
 * This function gets the pilot interface:
 * @since 1.1.0
 * @return array
 */
	function get_pilot()
	{
		global $DBH;
		# Set new Product object
		$u = new Pilot( $DBH );
		return $u->getPilot();
		
	} // end function get_pilot()
	
	
/**
 * Load pilot interface
 * @since 0.1.1 s9
 * @depreciated since 2.1.1
 */
	function pilot()
	{ 
		return false;
		
	} // end shdw_header
	