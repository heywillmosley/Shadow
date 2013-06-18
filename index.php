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
 * Validate what page to show:
 */
 if( isset( $_GET['p'] ) )
 
	$p = $_GET['p']; 
 
 # Forms
 elseif( isset( $_POST['p'] ) )
 
 	$p = $_POST['p']; 
 
 else
 	
	$p = NULL;
	

/**
 * Determine what page to display:
 */
switch( $p )
{
/**
 * System
 */
  case '':
	$page = APP_PAGE_URI . 'index.php';
	$page_title = SITE_NAME;
	break;
	
 case 'home':
	$page = APP_PAGE_URI . 'index.php';
	$page_title = SITE_NAME;
	break;
 
 case 'admin/pilot':
	$page = BASE_PAGE_URI . 'pilot.php';
	$page_title = FW_NAME . ' Pilot';
	break;
	
 case 'login':
	$page = BASE_PAGE_URI . 'login.php';
	$page_title = 'Login';
	break;
	
case 'connections/profile':
	$page = BASE_PAGE_URI . 'profile.php';
	$page_title = 'Profile';
	break;
 
 /**
 * Application
 */
 case 'profile':
	$page = APP_PAGE_URI . 'profile.php';
	$page_title = 'Profile';
	break;
	
 case 'search':
	$page = BASE_PAGE_URI . 'search.php';
	$page_title = 'Search';
	break;
	
 case 'search-results':
	$page = APP_PAGE_URI . 'search-results.php';
	$page_title = 'Search Results';
	break;
 
 # Default is to include the main page.
 default:
 	$page = BASE_PAGE_URI . '404.php';
 	$page_title = 404;
	break;
 
} // end switch( $p )

/**
 * Page 404 setup
 */


/**
 * Make sure the file exists:
 */
 if( !file_exists( $page ) )
 {
	$page = BASE_PAGE_URI . '404.php';
	
 } // end if( !file_exists( $page ) )
 
 
/*
 * ------------------------------------------------------
 *  Load Application Includes
 * ------------------------------------------------------
 */
	require_once(APP_INCLUDE_URI.'constants.inc.php');
	require_once(APP_INCLUDE_URI.'functions.inc.php');
	
 /*
 * ------------------------------------------------------
 *  Load System Includes
 * ------------------------------------------------------
 */
 	require_once( BASE_INCLUDE_URI.'file_functions.inc.php');	
	require_once( BASE_INCLUDE_URI.'functions.inc.php');	
	require_once( BASE_INCLUDE_URI.'conditions.inc.php' );
	require_once( BASE_INCLUDE_URI.'form_functions.inc.php' );
 
 
/**
 * Include the header file:
 */
 include BASE_INCLUDE_URI . 'header.inc.php';


/**
 * Include the content-specific page:
 * $page is determined from the above switch.
 
 */
 
 include( $page );
 

/**
 * Include the footer file:
 */
 include BASE_INCLUDE_URI . 'footer.inc.php';

?>