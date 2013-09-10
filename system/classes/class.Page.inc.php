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
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * This script defines the Page class
 * @since 0.1.1 s9
 * @author William Mosley, III <will@livesuperamazing.com>
 * The class contains 8 attributes: id, parentId, creatorId, title, content, slug dateAdded, and dateUpdated
 * - The attributes match the corresponding database columns.
 * The class contains 7 methods
 * - getId()
 * - getParentId()
 * - getCreatorId()
 * - getTitle()
 * - getContent()
 * - getSlug()
 * - getDateAdded()
 * - getDateUpdated()
 * - getIntro()
 *
 * @since 0.1.1 s9
 */
class Page
{
	private $p = NULL;
	private $page = NULL;
	private $id = NULL;
	private $parentId = NULL;
	private $creatorId = NULL;
	private $title = NULL;
	private $content = NULL;
	private $slug = NULL;
	private $dateAdded = NULL;
	private $dateUpdated = NULL;
	private $viewFile = NULL;
	private $pilotViewFile = NULL;
	private $type = NULL;
	protected $DBH;
	
	
	/**
	 * This method establishes a database connection on set
	 * @since 0.1.1 s9
	 * @return string
	 */
		function __construct( Database $DBH )
		{
			$this->DBH = $DBH;
			$this->setPage();
		}
	
	/**
	 * This method returns the page Id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getId()
		{
			echo $this->theId();
			
		} // end function getId()
		
		
	/**
	 * This method gets the page Id
	 * @since 1.1.0
	 * @return string
	 */
		function theId()
		{
			return $this->id;
			
		} // end function theId()
		
		
	/**
	 * This method gets the page parent Id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getParentId()
		{
			echo $this->theParentId();
			
		} // end function getParentId()
		
		
	/**
	 * This method gets the page parent Id
	 * @since 1.1.0
	 * @return string
	 */
		function theParentId()
		{
			return $this->parentId;
			
		} // end function gtheParentId()
		
		
	/**
	 * This method gets the pilot view file
	 * @since 1.1.0
	 * @return string
	 */
		function thePilotViewFile()
		{
			return  $this->pilotViewFile;
			
		} // end function thePilotViewFile()
		
		
	/**
	 * This method returns the pilot view file
	 * @since 1.1.0
	 * @return string
	 */
		function getPilotViewFile()
		{
			echo  $this->thePilotViewFile();
			
		} // end function thePilotViewFile()
		
		
	/**
	 * This method returns the page creator id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getCreatorId()
		{
			echo $this->theCreatorId();
			
		} // end method getCreatorId()
		
		
	/**
	 * This method gets the page creator id
	 * @since 1.1.0
	 * @return string
	 */
		function theCreatorId()
		{
			return $this->creatorId;
			
		} // end method theCreatorId()
		
		
		
	/**
	 * This method returns the page type
	 * @since 1.1.0
	 * @return string
	 */
		function getType()
		{
			echo $this->theType();
			
		} // end method theType()
		
		
	/**
	 * This method gets the page type
	 * @since 1.1.0
	 * @return string
	 */
		function theType()
		{
			return $this->type;
			
		} // end method theType()
		
	/**
	 * This method returns the page title
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getTitle()
		{
			echo $this->theTitle();
			
		} // end method getTitle()
		
		
	/**
	 * This method gets the page title
	 * @since 1.1.0
	 * @return string
	 */
		function theTitle()
		{
			return $this->title;
			
		} // end method theTitle()	
	
	
	/**
	 * This method gets the page title
	 * @since 1.1.0
	 * @return string
	 */
		function getHeaderTitle()
		{
			echo $this->theHeaderTitle();
			
		} // end method getHeaderTitle()
		
		
	/**
	 * This method gets the page title
	 * @since 1.1.0
	 * @return string
	 */
		function theHeaderTitle()
		{
			if( $this->title == SITE_NAME )
				return SITE_NAME;
			else
				return $this->title . ' | '.SITE_NAME; 
			
		} // end method theHeaderTitle()
		

	/**
	 * This method returns the page content
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getContent()
		{
			echo $this->theContent();
			
		} // end method getContent()
		
		
	/**
	 * This method gets the page content
	 * @since 1.1.0
	 * @return string
	 */
		function theContent()
		{
			return $this->content;
			
		} // end method theContent()
		
		
	/**
	 * This method returns the page slug
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getSlug()
		{
			echo $this->theSlug();
			
		} // end method getSlug()
		
		
	/**
	 * This method gets the page slug
	 * @since 1.0.0
	 * @return string
	 */
		function theSlug()
		{
			return $this->page;
			
		} // end method theSlug()
		
		
	/**
	 * This method returns the date the page was added
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getDateAdded()
		{
			echo $this->theDateAdded();
			
		} // end method getDateAdded()
		
		
	/**
	 * This method gets the date the page was added
	 * @since 1.1.0
	 * @return string
	 */
		function theDateAdded()
		{
			return $this->dateAdded;
			
		} // end method theDateAdded()
		
		
	/**
	 * This method returns the date the page was updated
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getDateUpdated()
		{
			echo $this->theDateUpdated();
			
		} // end method getDateUpdated()
		
		
	/**
	 * This method gets the date the page was updated
	 * @since 1.1.0
	 * @return string
	 */
		function theDateUpdated()
		{
			return $this->dateUpdated;
			
		} // end method theDateUpdated()
		
		
	/**
	 * This method returns the page title
	 * @depreciated since 1.1.0. Will not be in 2.0.0. Use getTitle() instead.
	 * @since 0.1.1 s9
	 * @return string
	 */
	 	function getPageTitle()
		{
			echo $this->pageTitle();
			
		} // end method getPageTitle()
		
		
		
	/**
	 * This method gets the page title
	 * @depreciated since 1.1.0. Will not be available in 2.0.0. Please
	 * use thePageTitle() instead.
	 */
		function pageTitle()
		{
			return $this->title;
			
		} // end 
		
		
	/**
	 * This method gets the page title
	 * @depreciated since 1.1.0. Will not be available in 2.0.0. Please use theUrl() instead.
	 * @since 0.1.1 s9
	 * @return string
	 */
	 	function getPageUrl( $id )
		{
			return $this->slug;
			
		} // end method getPageUrl( $id )
		
	
	/**
	 * This method returns the page title
	 * @since 1.1.0
	 * @return string
	 */
	 	function getUrl()
		{
			echo $this->theUrl;
			
		} // end method theUrl( $id )	
		
		
	/**
	 * This method gets the page title
	 * @since 1.1.0
	 * @return string
	 */
	 	function theUrl()
		{
			return SITE_URL . $this->slug;
			
		} // end method theUrl( $id )	
		
	
	/**
	 * This method sets the page called from url slug
	 */
		function setPage()
		{
			/**
			 * Validate what page to show:
			 */
			 if( isset( $_GET['p'] ) )
			 
				$this->page = $_GET['p']; 
			 
			 # Forms
			 elseif( isset( $_POST['p'] ) )
			 
				$this->page = $_POST['p']; 
			 
			 else
				$this->page = NULL;
					
			if( $this->page  == 'product/' || $this->page  == 'product' || $this->page  == 'products/' || $this->page  == 'products' )
				$this->type = 'products';
				
			elseif( substr( $this->page, 0, 8 ) == 'product/' )
				$this->type = 'product-single';
				
			elseif( substr( $this->page, 0, 11 ) == 'admin/pilot' )
				$this->type = 'pilot';
				
			else
				$this->type = 'page';
				
				
			
			/**
			 * Remove trailing slash from page slug
			 */
			 	if( substr( $this->page, -1 ) == '/' ) 

					$this->page = substr($this->page, 0, -1 );
			 
			/**
			 * Determine what page to display:
			 */
			 	if( $this->type == 'page' )
				{
					 switch ( $this->page ) 
					 {
						# Homepage
						case '':
							$this->title = SITE_NAME; 
							echo $this->id;
							# Checks if index.php is in App root or App View folder
							if( file_exists( APP_INC_URI . 'index.php' ) )
								$this->viewFile = APP_VIEWS_URI . 'index.php';
							else
								$this->viewFile = APP_URI . 'index.php';
	
							break;
						
						default:
								
							try 
							{  
								
								$STH = $this->DBH->query("SELECT id, title, content, slug, viewFile from shdw_pages WHERE slug = '$this->page' LIMIT 1");  
								# setting the fetch mode  
								$STH->setFetchMode(PDO::FETCH_ASSOC);
								
								if( $STH->rowCount() == 0 )
									$this->page404();
								  
								while( $row = $STH->fetch() ) 
								{  
									$this->id = $row['id'];
									$this->title = $row['title'];
									$this->content = $row['content'];
									$this->slug = $row['slug'];
									$this->viewFile = $row['viewFile'];
									if( $row['viewFile'] != NULL )
										$this->viewFile = APP_VIEWS_URI.$row['viewFile'];
	
	
								} //  while( $row = $STH->fetch() ) 
								
								
							}  
							catch( PDOException $e ) {  
								exceptionHandler( $e ); 
							}
	
					} // end switch
					
				} // end if type
				
				elseif( $this->type == 'products' )
				{
					$this->id = 0010;
					$this->title = 'Products';
					$this->slug = 'products/';
					$this->viewFile = APP_VIEWS_URI.'products.php';
				}
				
				elseif( $this->type == 'product-single' )
				{
					try 
					{  
						
						$STH = $this->DBH->query("SELECT id, name, slug from shdw_products WHERE slug = '$this->page' LIMIT 1");  
						# setting the fetch mode  
						$STH->setFetchMode(PDO::FETCH_ASSOC);
						
						if( $STH->rowCount() == 0 )
							$this->page404();
						  
						while( $row = $STH->fetch() ) 
						{  
							$this->id = $row['id'];
							$this->title = $row['name'];
							$this->slug = $row['slug'];
							$this->viewFile = APP_VIEWS_URI.'product-single.php';

						} //  while( $row = $STH->fetch() ) 
						
						
					}  
					catch( PDOException $e ) {  
						exceptionHandler( $e ); 
					}
				}
				
				
				elseif( $this->type == 'pilot' )
				{
					switch ( $this->page ) 
					 {
						case 'install':
							$this->title = 'Install '. FW_NAME; 
							$this->pilotViewFile = SYS_PAGE_URI . 'install.php';
							break;
							
						case 'admin/pilot':
							$this->title = 'Pilot'; 
							$this->id = '0001'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/pilot.php';
							break;
							
						case 'admin/pilot/products':
							$this->title = 'Products';
							$this->id = '0003';  
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/products.php';
							break;
							
						case 'admin/login':
							$this->title = 'Login'; 
							$this->id = '0004'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'login.php';
							break;
							
						case 'admin/logout':
							$this->title = 'Logout';
							$this->id = '0005'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'logout.php';
							
							# Kill session if one exists
							if ( session_status() == PHP_SESSION_NONE )
								session_start();
								
							logout();
							break;
						
						# Products	
						case 'admin/pilot/products':
							$this->title = 'Products';
							$this->id = '0006';  
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/products.php';
							break;
						
						# Pages
						case 'admin/pilot/pages':
							$this->title = 'All Pages'; 
							$this->id = '0007'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/pages.php';
							break;	
							
						case 'admin/pilot/pages/new-page':
							$this->title = 'Create New Page';
							$this->id = '0008'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/new-page.php';
							break;
							
						case 'admin/pilot/pages/edit-page':
							$this->title = 'Edit' ;
							$this->id = '0009'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/edit-page.php';
							break;	
							
						case 'admin/pilot/deploy':
							$this->title = 'Deployment &amp; Maintenance';
							$this->id = '0010'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/deploy.php';
							break;	
							
						case 'admin/pilot/backup-restore':
							$this->title = 'Backup &amp; Restore';
							$this->id = '0010'; 
							$this->pilotViewFile = SYS_PAGE_URI . 'pilot/backup-restore.php';
							break;	
							
	
					} // end switch
					
					$this->viewFile = SYS_VIEWS_URI.'pilot.php';
					
					if( $this->pilotViewFile == NULL )
						$this->page404();
				}
			
			/**
			 * Make sure the file exists:
			 */
			 	if( $this->viewFile != NULL )
				{
					
					 if( !file_exists( $this->viewFile ) )
					 {
						 //new Exception( '<div class="alert">Could not find view file. Check path and that file exists in '. APP_VIEWS_URI.' directory</div>' );
						$this->page404();
						
					 } // end if( !file_exists( $page ) )
				}
				 
				
			
		} // end 
		
	
	function getPage()
	{
		/**
		 * Include the content-specific page:
		 * $page is determined from the above switch.
		 
		 */
		 				 
		 if( $this->viewFile == NULL )
		 {
			 
			 app_header();
			echo "<h1>$this->title</h1>";
			echo $this->content;
			app_footer();
			
			return true;
		 }
		 else
		 {
		 	return include_once( $this->viewFile );
		 }
		
	}
	
	
	# Page 404 @since 0.1.1 s5
	function page404()
	{
		$this->title = '404'; 
		
		# Check if there's a 404.php file in application directory
		if ( !file_exists( APP_VIEWS_URI. '404.php' ) )
		{
			# Include System 404
			
			$this->viewFile = SYS_PAGE_URI . '404.php';
	
			# Check if there's a 404.html file in application directory
			if ( !file_exists( APP_VIEWS_URI. '404.html' ) )
			{
				# Include System 404
				$this->viewFile = SYS_PAGE_URI . '404.php';
				
			} // end if
			
			else
			{
				# Load Application 404.php
				$this->viewFile = APP_PAGE_URI . '404.html';
			
			} // end else
			
		} // end if
		else {
			
			# Load Application 404.php
			$this->viewFile = APP_PAGE_URI . '404.php';
			
			
		} // end else
		
	} // end page404
 
} // end Page