<?php # Prevents direct access to config.inc.php 
define('INDEX',TRUE);
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
 * This is the main page
 * This page includes the configuration file,
 * the templates, and any content-specific modules.
 */
 
// --------------------------------------------------------------------------------

/**
 * Require the configuration file before any PHP code:.
 */
 	require_once 'system/inc/config.inc.php';

/*
 * ------------------------------------------------------
 *  Load Application Includes
 * ------------------------------------------------------
 */
 	if( file_exists( APP_INC_URI.'constants.inc.php' ) )
		include_once(APP_INC_URI.'constants.inc.php');
		
	if( file_exists( APP_INC_URI.'functions.inc.php' ) )
		include_once(APP_INC_URI.'functions.inc.php');
 	
if( SHDW )
{ 
	/**
	 * Include the header file:
	 */
	 include SYS_INC_URI . 'header.inc.php';
	
	get_page();
	
	
	/**
	 * Include the footer file:
	 */
	 include SYS_INC_URI . 'footer.inc.php';
	 
} // end SHDW
?>