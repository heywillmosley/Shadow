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
 * @since          Version 1.1.5
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

/**
 * Create new page object and set page
 */
	$p = new Page();
	$p->setPage();
 
/*
 * ------------------------------------------------------
 *  Load Application Includes
 * ------------------------------------------------------
 */
	include_once(APP_INCLUDE_URI.'constants.inc.php');
	include_once(APP_INCLUDE_URI.'functions.inc.php');
	
 /*
 * ------------------------------------------------------
 *  Load System Includes
 * ------------------------------------------------------
 */
	require_once( BASE_INCLUDE_URI.'functions.inc.php');	
 
 
/**
 * Include the header file:
 */
 include BASE_INCLUDE_URI . 'header.inc.php';


/**
 * Include the content-specific page and unset page
 */
	$p->getPage();
	unset( $p );

/**
 * Include the footer file:
 */
 include BASE_INCLUDE_URI . 'footer.inc.php';

?>