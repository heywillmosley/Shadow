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
	private $type = NULL;
	protected $DBH;
	
	
	function __construct( Database $DBH )
	{
		$this->DBH = $DBH;
		$this->setPage();
		
	}
	
	/**
	 * This method gets the page Id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getId()
		{
			return $this->id;
			
		} // end function getId()
		
		
	/**
	 * This method gets the page parent Id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getParentId()
		{
			return $this->parentId;
			
		} // end function getParentId()
		
		
		
	/**
	 * This method gets the page creator id
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getCreatorId()
		{
			return $this->creatorId;
			
		} // end method getCreatorId()
		
		
	/**
	 * This method gets the page title
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getTitle()
		{
			return $this->title;
			
		} // end method getTitle()
		
	
	/**
	 * This method gets the page content
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getContent()
		{
			return $this->content;
			
		} // end method getContent()
		
		
	/**
	 * This method gets the page slug
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getSlug()
		{
			return $this->slug;
			
		} // end method getSlug()
		
		
	/**
	 * This method gets the date the page was added
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getDateAdded()
		{
			return $this->dateAdded;
			
		} // end method getDateAdded()
		
		
	/**
	 * This method gets the date the page was updated
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getDateUpdated()
		{
			return $this->dateUpdated;
			
		} // end method getDateUpdated()
		
		
	/**
	 * This method gets the intro (excerpt) of the page
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getIntro( $count = 200 )
		{
			return substr( strip_tags( $this->content ), 0, $count ) . '...';
			
		} // end method getDateUpdated()
		
		
	/**
	 * This method gets the page title
	 */
	 	function getPageTitle()
		{
			return $this->title;
			
		} // end 
		
	/**
	 * This method gets the page title
	 */
	 	function pageTitle()
		{
			return $this->title;
			
		} // end 
		
		
	/**
	 * This method gets the page title
	 */
	 	function getPageUrl( $id )
		{
			return $this->slug;
			
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
			 
				$this->page = $_GET['p']; 
			 
			 # Forms
			 elseif( isset( $_POST['p'] ) )
			 
				$this->page = $_POST['p']; 
			 
			 else
				$this->page = NULL;
					
				
			/**
			 * Remove trailing slash from page slug
			 */
			 	if( substr( $this->page, -1 ) == '/' ) 

					$this->page = substr($this->page, 0, -1 );
					
			 
			/**
			 * Determine what page to display:
			 */
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
					
					# Administration
					case 'install':
						$this->title = 'Install '. FW_NAME; 
						$this->viewFile = SYS_PAGE_URI . 'install.php';
						break;
						
					case 'admin/pilot':
						$this->title = 'Pilot'; 
						$this->id = '0001'; 
						$this->viewFile = SYS_PAGE_URI . 'pilot/pilot.php';
						break;
						
					case 'admin/pilot/products':
						$this->title = 'Products';
						$this->id = '0003';  
						$this->viewFile = SYS_PAGE_URI . 'pilot/products.php';
						break;
						
					case 'admin/login':
						$this->title = 'Login'; 
						$this->id = '0004'; 
						$this->viewFile = SYS_PAGE_URI . 'login.php';
						break;
						
					case 'admin/logout':
						$this->title = 'Logout';
						$this->id = '0005'; 
						$this->viewFile = SYS_PAGE_URI . 'logout.php';
						
						# Kill session if one exists
						if( isset( $_SESSION ) )
							session_start() and logout();
						break;
					
					# Products	
					case 'admin/pilot/products':
						$this->title = 'Products';
						$this->id = '0006';  
						$this->viewFile = SYS_PAGE_URI . 'pilot/products.php';
						break;
					
					# Pages
					case 'admin/pilot/pages':
						$this->title = 'All Pages'; 
						$this->id = '0007'; 
						$this->viewFile = SYS_PAGE_URI . 'pilot/pages.php';
						break;	
						
					case 'admin/pilot/pages/new-page':
						$this->title = 'Create New Page';
						$this->id = '0008'; 
						$this->viewFile = SYS_PAGE_URI . 'pilot/new-page.php';
						break;
						
					case 'admin/pilot/pages/edit-page':
						$this->title = 'Edit' ;
						$this->id = '0009'; 
						$this->viewFile = SYS_PAGE_URI . 'pilot/edit-page.php';
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