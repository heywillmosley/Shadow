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
class Page
{
	function setPage()
	{
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
		
	} // end 
	
	function getPage()
	{
		/**
		 * Include the content-specific page:
		 * $page is determined from the above switch.
		 
		 */
		 
		 return include( $page );
		
	}
	
	# Load Function @since 1.1.5
	function load($page = 'login') {
		$url = ROOTURL;
		$url = rtrim( $url, '/\\');
		$url .= '/' . $page;	
		
		header("Location: $url");
		exit();
	}
	
	# Load Path Function @since 1.1.5
	function load_URI($page = 'login') {
		$path = ROOTPATH;
		$path = rtrim( $url, '/\\');
		$path .= '/' . $page;	
		
		header("Location: $path");
		exit();
	}
	
	
	# Page 404 @since 1.1.5
	function page404 ()
	{
		# Check if there's a 404.php file in application directory
		if ( !file_exists( APP_PAGE_URI. '404.php' ) )
		{
	
			# Check if there's a 404.html file in application directory
			if ( !file_exists( APP_PAGE_URI. '404.html' ) )
			{
				# Include System 404
				include ( BASE_PAGE_URI.'404.php' );
				exit;
				
			} // end if
			
			else
			{
				# Load Application 404.php
				include ( APP_PAGE_URI.'404.html' );
				exit;
			
			} // end else
			
		} // end if
		else {
			
			# Load Application 404.php
			include ( APP_PAGE_URI.'404.php' );
			exit;
			
			
		} // end else
		
	} // end page404
 
} // end ClassName