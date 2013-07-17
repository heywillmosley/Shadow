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
			 * Remove trailing slash from page slug
			 */
			 	if( substr( $this->p, -1 ) == '/' ) 

					$this->p = substr($this->p, 0, -1 );
			 
			/**
			 * Determine what page to display:
			 */
			 if( $this->p == '' )
			 {
				 if( file_exists( APP_INC_URI . 'index.php' ) && is_file ( APP_INC_URI . 'index.php' ) )
				{
					$this->page = APP_VIEWS_URI . 'index.php';
					
				}
				elseif( APP_URI . 'index.php' ) 
				{
					$this->page = APP_URI . 'index.php';
				} 
			 }
			 
			 elseif( $this->p == 'home' )
			 {
				 if( file_exists( APP_INC_URI . 'index.php' ) )
					$this->page = APP_VIEWS_URI . 'index.php';
				else
					$this->page = APP_URI . 'index.php';
					
				$this->page_title = SITE_NAME; 
			 }
			 
			 elseif( $this->p == 'admin/pilot' )
			 {
				 $this->page = BASE_PAGE_URI . 'pilot.php';
				$this->page_title = FW_NAME . ' Pilot';
			 }
			 
			 elseif( $this->p == 'admin/pilot/products' )
			 {
				 $this->page = BASE_PAGE_URI . 'pilot/products.php';
				$this->page_title = FW_NAME . ' Products';
			 }
			 
			 elseif( $this->p == 'login' )
			 {
				$this->page = BASE_PAGE_URI . 'login.php';
				$this->page_title = 'Login';
			 }
			 
			 elseif( $this->p == 'connections/profile' )
			 {
				$this->page = BASE_PAGE_URI . 'profile.php';
				$this->page_title = 'Profile';
			 }

			/**
			 * Application Pages
			 */
			
			elseif( $this->p == 'start' )
			 {
				$this->page = APP_PAGE_URI . 'start.php';
				$this->page_title = 'Become as a Practioner';
			 }
			 
			 elseif( $this->p == 'homeopathy' )
			 {
				$this->page = APP_PAGE_URI . 'homeopathy.php';
				$this->page_title = 'About Homeopathy';
			 }
			 
			 elseif( $this->p == 'safecarerx-medicine' )
			 {
				$this->page = APP_PAGE_URI . 'about-medicine.php';
				$this->page_title = SITE_NAME. ' + Medicine';
			 }
			 
			 elseif( $this->p == 'products' )
			 {
				$this->page = APP_PAGE_URI . 'products.php';
				$this->page_title = 'Our Products';
			 }
			 
			 elseif( $this->p == 'manuals' )
			 {
				$this->page = APP_PAGE_URI . 'manuals.php';
				$this->page_title = 'Manuals & Guides';
			 }
			 
			 elseif( $this->p == 'other-services' )
			 {
				$this->page = APP_PAGE_URI . 'other-services.php';
				$this->page_title = 'Other Services';
			 }
			 
			 elseif( $this->p == 'contact' )
			 {
				$this->page = APP_PAGE_URI . 'contact.php';
				$this->page_title = 'Contact';
			 }
			 
			 elseif( $this->p == 'lecture' )
			 {
				$this->page = APP_PAGE_URI . 'lecture.php';
				$this->page_title = 'Lecture';
			 }
			
			else
			 {
				$this->page = BASE_PAGE_URI . '404.php';
				$this->page_title = 404; 
			 }
			 
			 

			
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