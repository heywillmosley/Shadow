<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 3 Arguments
 * 5 Methods
 */
class Page
{
	private $p;
	private $page = NULL;
	private $page_title = NULL;
	
	function __construct()
	{
		$this->setPage();
		
	}

	
	/**
	 * This method gets the page title
	 */
	 	function getPageTitle()
		{
			return $this->page_title;
			
		} // end 
	
	/**
	 * This methhod sets the page called from url slug
	 */
		function setPage()
		{
			/**
			 * Validate what page to show:
			 */
			 if( isset( $_GET['p'] ) )
			 
				$this->p = $_GET['p']; 
			 
			 # Forms
			 elseif( isset( $_POST['p'] ) )
			 
				$this->p = $_POST['p']; 
			 
			 else
				
				$this->p = NULL;
				
			/**
			 * Determine what page to display:
			 */
			switch( $this->p )
			{
			/**
			 * System
			 */
			  case '':
				if( file_exists( APP_INC_URI . 'index.php' ) && is_file ( APP_INC_URI . 'index.php' ) )
				{
					$this->page = APP_VIEWS_URI . 'index.php';
					
				}
				elseif( APP_URI . 'index.php' ) 
				{
					$this->page = APP_URI . 'index.php';
				}
					
				$this->page_title = SITE_NAME;
				break;
				
			 case 'home':
				if( file_exists( APP_INC_URI . 'index.php' ) )
					$this->page = APP_VIEWS_URI . 'index.php';
				else
					$this->page = APP_URI . 'index.php';
					
				$this->page_title = SITE_NAME;
				break;
			 
			 case 'admin/pilot':
				$this->page = BASE_PAGE_URI . 'pilot.php';
				$this->page_title = FW_NAME . ' Pilot';
				break;
				
			 case 'login':
				$this->page = BASE_PAGE_URI . 'login.php';
				$this->page_title = 'Login';
				break;
				
			case 'connections/profile':
				$this->page = BASE_PAGE_URI . 'profile.php';
				$this->page_title = 'Profile';
				break;
			 
			 /**
			 * Application
			 */
			 case 'profile':
				$this->page = APP_PAGE_URI . 'profile.php';
				$this->page_title = 'Profile';
				break;
				
			 case 'search':
				$this->page = BASE_PAGE_URI . 'search.php';
				$this->page_title = 'Search';
				break;
				
			 case 'search-results':
				$this->page = APP_PAGE_URI . 'search-results.php';
				$this->page_title = 'Search Results';
				break;
			 
			 # Default is to include the main page.
			 default:
				$this->page = BASE_PAGE_URI . '404.php';
				$this->page_title = 404;
				break;
			 
			} // end switch( $p )
			
			/**
			 * Page 404 setup
			 */
			
			
			/**
			 * Make sure the file exists:
			 */
			 if( !file_exists( $this->page ) )
			 {
				$this->page = BASE_PAGE_URI . '404.php';
				
			 } // end if( !file_exists( $page ) )
			
		} // end 
	
	function getPage()
	{
		/**
		 * Include the content-specific page:
		 * $page is determined from the above switch.
		 
		 */
		 
		 return include( $this->page );
		
	}
	
	# Load Function @since 0.1.1 s5
	function load($page = 'login') {
		$url = ROOTURL;
		$url = rtrim( $url, '/\\');
		$url .= '/' . $page;	
		
		header("Location: $url");
		exit();
	}
	
	# Load Path Function @since 0.1.1 s5
	function load_URI($page = 'login') {
		$path = ROOTPATH;
		$path = rtrim( $url, '/\\');
		$path .= '/' . $page;	
		
		header("Location: $path");
		exit();
	}
	
	
	# Page 404 @since 0.1.1 s5
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