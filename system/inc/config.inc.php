<?php defined('INDEX') or die() and exit(); // Prevents direct script access
/**
 * Shadow
 *
 * An open source application development framework that streamlines
 * responsive e-ecommerce development for php 5.0.0 or newer
 *
 * @package        Shadow
 * @author         Super Amazing, William Mosley, III <will@livesuperamazing.com>
 * @copyright      Copyright (c) 2010 - 2013, Super Amazing
 * @license        MIT
 * @link           http://shadow.superamazingstore.com
 * --------------------------------------------------------------------------------
 *
 * System Config
 *
 * Configuration file does the following things:
 * - Has site settings in one location
 * - Stores URLs and URIs as constants.
 * - Sets how errors will be handled
 *
 * @since          Version 0.1.7
 */
 
// --------------------------------------------------------------------------------
 
# ******************** #
# ***** SETTINGS ***** # 
 
/**
 * Shadow Version
 *
 * What's New:
 *  -Added basic database connection functionality
 * - Added responsive image system
 * - Fixed javascripts
 * - Added Drop Nav
 * - Added Netflix like product slider
 * - New IE Alert Panel for Legacy IE Browsers
 * -Added Basic Product Catalog
 * -Implement Pilot Interface
 */
 
	define('SYS_VER', '0.1 s9');
	
	# Numeric - strip dots and characters E.g. 1.1.2 s6 to 112.6
	define('NUM_SYS_VER', str_replace( ' ', '', str_replace( 'b', '', str_replace( '.', '', SYS_VER ) ) ) );

	
/**
 * Check if Content is above Shadow root folder
 *
 * This allows Shadow to be fully copied in to a website directory
 * And useable. This looks for the content folder
 * @todo Add another file/folder to look for E.g. db.inc.php to prevent breakage
 */
 	define( 'IS_ROOT', !is_dir( dirname( dirname (dirname (dirname(__FILE__) ) ) ) . '/content' ) );


/**
 *  Resolve the root path of website for increased reliability
 */
 	# If shadow isn't root
 	if( !IS_ROOT ) define( 'ROOT_URI', dirname(dirname(dirname(dirname(__FILE__)))) . '/' );
	
	else define( 'ROOT_URI', dirname(dirname(dirname(__FILE__))) . '/' );
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'FRONT_PATH', ROOT_URI );

/**
 * Define Core Path for accessing scripts not stored in PUBLIC_HTML
 * One level above root
 */
	define( 'CORE_URI', dirname( ROOT_URI ) . '/' );
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'CORE_PATH', CORE_URI );


/**
 * Load Shadow Config Settings
 * @todo make all of this functionality doable through the database and pilot
 */
 	# Include Pilot
	if( !IS_ROOT ) require_once( ROOT_URI . 'pilot.php' );
	
	elseif( file_exists( CORE_URI . 'pilot.php' ) )
		require_once( CORE_URI . 'pilot.php' );
	
	else require_once( ROOT_URI . 'pilot.php' );
	
	# Include App Settings
 	require_once( ROOT_URI . 'content/apps/' . CURRENT_APP . '/app-settings.php' );
	


/**
 * Check if database is above root
 */
 	$db_level2 = dirname( ROOT_URI  ) . '/db.inc.php';
	$db_level1 = ROOT_URI . 'db.inc.php';
	$db_root = ROOT_URI . 'db.inc.php';
	
	# Check if db.inc.php is level 2 up from Shadow Root
		if( file_exists( $db_level2 ) && !file_exists( $db_level1 ) ) 
		{	
			/**
			 * Define Database constant
			 */
				define( 'DB', $db_level2 );
		}
		# Check if db.inc.php is level 2 up from Shadow Root
		elseif( file_exists( $db_level1 ) ) 
		{	
			/**
			 * Define Database constant
			 */
				define( 'DB', $db_level1 );
		}
		
		elseif( file_exists( $db_root ) ) 
		{	
			/**
			 * Define Database constant
			 */
				define( 'DB', $db_root );
		}
		else
		{
			echo '<h1>Database not set.</h1><p>Please place <code>db.inc.php</code> inside of your root folder.</p> <p>Alternatively, you can copy this from the root of your Shadow directory.';
			exit;
		}
 	
		/**
		 * Define Database
		 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
		 */
		  define( 'MYSQL', DB );


/**
 * Define Framework Name
 */
 	define('FW_NAME', 'Shadow');

	
/**
 * Table Prefix
 */
 	define('SYS_PREFIX', 'shdw-');


	
/**
 * IF USING WORDPRESS or WP directory exists, load Wordpress
 * @todo Add Wordpress Intergration
 */
 	# Check for 'wordpress' directory
 	if( is_dir( 'wordpress' ) )
	{	
		# Wordpress view bootstrapper
		define( 'WP_USE_THEMES', true );
		
		# Load wordpress's bootstrap file
		require( ABSPATH .'wp-blog-header.php' );
	
	} // end if( is_dir( 'wordpress' ) || is_dir( 'wp' ) )
	
	# Check for 'wp' directory
	elseif( is_dir( 'wp' ) )
	{	
		# Wordpress view bootstrapper
		define( 'WP_USE_THEMES', true );
		
		# Load wordpress's bootstrap file
		require( ABSPATH . 'wp-blog-header.php' );
	
	} // end elseif( is_dir( 'wp' ) )

	
/**
 * Set Root folder name:
 */
 	# Check if alias is being used
	if( SYS_ALIAS != '' && ENVIRONMENT == 'development' ) 
	{
		define( 'ROOT_NAME', SYS_ALIAS );
		
	} // end if( !SYS_ALIAS == "" ) 
	
	else
	{
		if( !IS_ROOT )
			# Resolve url for Shadow below root
			define( 'ROOT_NAME', dirname(dirname( dirname( substr( __FILE__, strlen( $_SERVER[ 'DOCUMENT_ROOT' ] ) ) ) ) ) );
			
		else
			define( 'ROOT_NAME', basename( ROOT_URI ) );
	
	} // end else


/**
 *  Resolve the front url for increased reliability
 */
 	if( ENVIRONMENT != 'development' )
	{
		# Check if there is an addon domain
		if( ADDON_DOMAIN != '' )
		{
			# Set Front URL to Add on domain
			$rooturl = 'http://' . ADDON_DOMAIN . '/';
			$rooturl = rtrim( $rooturl, '/\\' );
			$rooturl = $rooturl . '/';
			
			// URL to the system folder
			define( 'ROOT_URL', str_replace( "\\", "/", $rooturl ) );
			
			/**
			 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
			 */
			  define( 'ROOTURL', ROOT_URL );
			  
			
		} // end if( ADDON_DOMAIN != '' )
		
		else
		{
			$rooturl = 'http://' . $_SERVER['HTTP_HOST'] . '/' . ROOT_NAME;
			$rooturl = rtrim( $rooturl, '/\\' );
			$rooturl = $rooturl . '/';
			
			// URL to the system folder
			//define('ROOT_URL', str_replace("\\", "/", $rooturl));
			
			// URL to the system folder
			define('ROOT_URL', 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] );
			
			/**
			 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
			 */
			  define( 'ROOTURL', ROOT_URL );
			}
		
	
	} // end if( ENVIRONMENT != 'development' )
	
	# Set Front URL based on Server url
	else
	{
		# Define Http/https
		if( isset($_SERVER['HTTPS'] ) ) 
			$http = 'https://';
			
		else
			$http = 'http://';
		
		# Define ROOT URL	
		$root_url = strtolower( $http . $_SERVER['HTTP_HOST'] . 
			str_replace( 
				str_replace( '\\', '/', $_SERVER['DOCUMENT_ROOT'] ), 
					"", str_replace( '\\', '/', ROOT_URI ) ) );
					
		// URL to the system folder
		define('ROOT_URL', $root_url );
		
		
		/**
		 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
		 */
		  define( 'ROOTURL', ROOT_URL );
		}

	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// The PHP file extension
	// this global constant is deprecated.
	define('EXT', '.php');

	/**
	 *  Resolve the system root path
	 */
		# If shadow isn't root
		define( 'SYS_URI', dirname(dirname(__FILE__)) . '/' );
		
		/**
		 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
		 */
		  define( 'BASEPATH', SYS_URI );
		  
	if( !IS_ROOT )
	
		// URL to the system folder
		define('SYS_URL', ROOT_URL . 'Shadow/system/');
		
	
		
	else
		// URL to the system folder
		define('SYS_URL', ROOT_URL . 'system/');
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'BASEURL', SYS_URL );
	
	// Path to the application folder
	# Check if Content directory is in Shadow's root
	if( !IS_ROOT ) define( 'CONTENT_URI', ROOT_URI . 'content/');
	
	else define( 'CONTENT_URI', ROOT_URI . 'content/');
	
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'CONTENT_PATH', CONTENT_URI );
	
	// URL to the system folder
	if( !IS_ROOT )
		define( 'CONTENT_URL', ROOT_URL . 'content/' );
		
	else
		define( 'CONTENT_URL', ROOT_URL . 'content/' );
	
	// Path to the application folder
	define('APPLICATIONS_URI', CONTENT_URI . 'apps/' );
	

	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'APPLICATIONS_PATH', APPLICATIONS_URI );
	
	// URL to the system folder
	define('APPLICATIONS_URL', CONTENT_URL . 'apps/' );
	
	// Path to the application folder
	define('APP_URI',  APPLICATIONS_URI . CURRENT_APP . '/' );
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'APPPATH', APP_URI );
	
	// URL to the system folder
	define('APP_URL', APPLICATIONS_URL . CURRENT_APP . '/' );
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'APPURL', APP_URL );
	
	// Path to the application folder
	define('BRidGE_URI', CONTENT_URI . 'bridge/' );
	
	// URL to the system folder
	define('BRidGE_URL', CONTENT_URL . 'bridge/' );

	// Name of the "system folder"
	define('CONTENT_NAME', trim(strrchr(trim(CONTENT_URI, '/'), '/'), '/'));
	
	// Name of the "system folder"
	define('SYS_NAME', trim(strrchr(trim(SYS_URI, '/'), '/'), '/'));
		
		/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'BASENAME', SYS_NAME );
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'SYSNAME', SYS_NAME );
	
	define( 'SITE_URL', ROOT_URL );
	
	
	/**
	 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
	 */
	  define( 'SITEURL', SITE_URL );
		
/*
 * -------------------------------------------------------------------
 *  Define Classes, Includes, Views and Page constants
 * -------------------------------------------------------------------
 */	
 	/**
	 * Path to system classes folder
	 * @since 0.1.1 s8
	 */
		define( 'SYS_CLASS_URI', SYS_URI.'classes/' );
		
	/**
	 * Path to app classes folder
	 * @since 0.1.1 s8
	 */
	 	# Check if classes directory exists and define
		if( is_dir( APP_URI.'classes/' ) )
			define( 'APP_CLASS_URI', APP_URI.'classes/' );
		
		# Check if class directory exists and define
		elseif( is_dir( APP_URI.'class/' ) )
			define( 'APP_CLASS_URI', APP_URI.'class/' );
		
		# Set as root application directory
		else
			define( 'APP_CLASS_URI', APP_URI );
 
 
 	/**
	 * Path to system include folder
	 * @since 0.1.1 s8
	 */
		define( 'SYS_INC_URI', SYS_URI.'inc/' );
		
		/**
		 * Path to system include folder
		 * @depreciated 0.1.1 s8 No longer used by internal code and not recommended. Support till 6/23/2014
		 */
			define( 'BASE_INC_URI', SYS_INC_URI );
			
			/**
			 * Path to system include folder
			 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
			 */
				define('BASE_INCLUDE_URI', BASE_INC_URI );
	
	/**
	 * Path to application include folder
	 */
	 	# Check if inc directory exists and define
		if( is_dir( APP_URI.'inc/' ) )
			define( 'APP_INC_URI', APP_URI.'inc/' );
		
		# Check if includes directory exists and define
		elseif( is_dir( APP_URI.'includes/' ) )
			define( 'APP_INC_URI', APP_URI.'includes/' );
			
		# Check if include directory exists and define
		elseif( is_dir( APP_URI.'include/' ) )
			define( 'APP_INC_URI', APP_URI.'include/' );
		
		# Set as root application directory
		else
			define( 'APP_INC_URI', APP_URI );
			
		
		/**
		 * Path to application include folder
		 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
		 */
			define('APP_INCLUDE_URI', APP_INC_URI );
			
	
	/**
	 * Path to system page folder
	 * @since 1.1.1 s8
	 */
	 	define('SYS_VIEWS_URI', SYS_URI.'views/');
		
		
	 	/**
		 * Path to system page folder
		 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
		 */
			define('SYS_PAGE_URI', SYS_VIEWS_URI );
		
			/**
			 * Path to system page folder
			 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/18/2014
			 */
				define('BASE_PAGE_URI', SYS_VIEWS_URI );
		
		
	
	/**
	 * URL to application page folder
	 */
		# Check if views directory exists and define
		if( is_dir( APP_URI.'views/' ) )
			define( 'APP_PAGE_URI', APP_URI.'views/' );
		
		# Check if view directory exists and define
		elseif( is_dir( APP_URI.'view/' ) )
			define( 'APP_PAGE_URI', APP_URI.'view/' );
			
		# Check if pgs directory exists and define
		elseif( is_dir( APP_URI.'pgs/' ) )
			define( 'APP_PAGE_URI', APP_URI.'pgs/' );
			
		# Check if pages directory exists and define
		elseif( is_dir( APP_URI.'pages/' ) )
			define( 'APP_PAGE_URI', APP_URI.'pages/' );
			
		# Check if page directory exists and define
		elseif( is_dir( APP_URI.'page/' ) )
			define( 'APP_PAGE_URI', APP_URI.'page/' );
		
		# Set as root application directory
		else
			define( 'APP_PAGE_URI', APP_URI );
	
		
	/**
	 * Path to app classes folder
	 * @since 0.1.1 s8
	 */
		define( 'APP_VIEWS_URI', APP_PAGE_URI );
		
	
/*
 * -------------------------------------------------------------------
 *  Constants for our styles and javascripts
 * -------------------------------------------------------------------
 */	
	// Path to system css/styles Folder
	define('BASE_STYLE_URI', SYS_URI.'assets/css/');
	
	// URL to system css/styles
	define('BASE_STYLE_URL', SYS_URL.'assets/css/');
	
	
	# Check if assets/css directory exists and define
	if( is_dir( APP_URI.'assets/css/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL.'assets/css/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/styles/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI.'assets/styles/' );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL.'assets/styles/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/style/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI.'assets/style/' );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL.'assets/style/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'css/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI.'css/' );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL.'css/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'styles/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI.'styles/' );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL.'styles/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'style/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI.'style/' );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL.'style/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI.'assets/' );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL.'assets/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	else
	{
		# Path to application css/styles Folder
		define( 'APP_STYLE_URI', APP_URI );
		
		# URL to system css/styles
		define( 'APP_STYLE_URL', APP_URL );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	// Path to system less Folder
	define('BASE_LESS_URI', SYS_URI.'assets/less/');
	
	// URL to system less
	define('BASE_LESS_URL', SYS_URL.'assets/less/');
	
	
	# Check if assets/less directory exists and define
	if( is_dir( APP_URI.'assets/less/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_LESS_URI', APP_URI.'assets/less/' );
		
		# URL to system css/styles
		define( 'APP_LESS_URL', APP_URL.'assets/less/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'less/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_LESS_URI', APP_URI.'less/' );
		
		# URL to system css/styles
		define( 'APP_LESS_URL', APP_URL.'less/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	else
	{
		# Path to application css/styles Folder
		define( 'APP_LESS_URI', APP_URI );
		
		# URL to system css/styles
		define( 'APP_LESS_URL', APP_URL );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	

	/**
	 * Path to system javascript Folder
	 * @since 0.1.1 s8
	 */
		define( 'SYS_JS_URI', SYS_URI.'assets/js/' );
	
		/**
		 * Path to system javascript Folder
		 * @depreciated 0.1.1 s8 No longer used by internal code and not recommended. Support till 7/10/2014
		 */
			define( 'BASE_JS_URI', SYS_JS_URI );
	
	/**
	 * URL to system javascript Folder
	 * @since 0.1.1 s8
	 */
		define( 'SYS_JS_URL', SYS_URL.'assets/js/' );
	
		/**
		 * URL to system javascript Folder
		 * @depreciated 0.1.1 s8 No longer used by internal code and not recommended. Support till 7/10/2014
		 */
			define( 'BASE_JS_URL', SYS_JS_URI );
	
	
	# Check if javascript directory exists and define
	if( is_dir( APP_URI.'assets/js/' ) )
	{
		# Path to application js Folder
		define( 'APP_JS_URI', APP_URI.'assets/js/' );
		
		# URL to app js folder
		define( 'APP_JS_URL', APP_URL.'assets/js/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/javascript/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_JS_URI', APP_URI.'assets/javascript/' );
		
		# URL to system css/styles
		define( 'APP_JS_URL', APP_URL.'assets/javascript/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/javascripts/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_JS_URI', APP_URI.'assets/javascripts/' );
		
		# URL to system css/styles
		define( 'APP_JS_URL', APP_URL.'assets/javascripts/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'js/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_JS_URI', APP_URI.'js/' );
		
		# URL to system css/styles
		define( 'APP_JS_URL', APP_URL.'js/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'javascript/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_JS_URI', APP_URI.'javascript/' );
		
		# URL to system css/styles
		define( 'APP_JS_URL', APP_URL.'javascript/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'javascripts/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_JS_URI', APP_URI.'javascripts/' );
		
		# URL to system css/styles
		define( 'APP_JS_URL', APP_URL.'javascripts/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_JS_URI', APP_URI.'assets/' );
		
		# URL to system css/styles
		define( 'APP_JS_URL', APP_URL.'assets/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	else
	{
		# Path to application css/styles Folder
		define( 'APP_JS_URI', APP_URI );
		
		# URL to system css/styles
		define( 'APP_JS_URL', APP_URL );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	
	/**
	 * URL to system image folder
	 */
		define('SYS_IMG_URI', SYS_URI.'assets/img/');
		
		/**
		 * URL to system image folder
		 * @depreciated 0.1.1 s8 No longer used by internal code and not recommended. Support till 6/25/2014
		 */
			define( 'BASE_IMG_URI', SYS_IMG_URI );
	
	/**
	 * URL to system image folder
	 */
		define('SYS_IMG_URL', SYS_URL.'assets/img/');
		
		/**
		 * URL to system image folder
		 * @depreciated 0.1.1 s8 No longer used by internal code and not recommended. Support till 6/25/2014
		 */
			define( 'BASE_IMG_URL', SYS_IMG_URL );
	
	
	# Check if img directory exists and define
	if( is_dir( APP_URI.'assets/img/' ) )
	{
		# Path to application img Folder
		define( 'APP_IMG_URI', APP_URI.'assets/img/' );
		
		# URL to app js folder
		define( 'APP_IMG_URL', APP_URL.'assets/img/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if img directory exists and define
	elseif( is_dir( APP_URI.'asset/img/' ) )
	{
		# Path to application img Folder
		define( 'APP_IMG_URI', APP_URI.'asset/img/' );
		
		# URL to app js folder
		define( 'APP_IMG_URL', APP_URL.'asset/img/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/images/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_IMG_URI', APP_URI.'assets/images/' );
		
		# URL to system css/styles
		define( 'APP_IMG_URL', APP_URL.'assets/images/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if img directory exists and define
	elseif( is_dir( APP_URI.'asset/images/' ) )
	{
		# Path to application img Folder
		define( 'APP_IMG_URI', APP_URI.'asset/images/' );
		
		# URL to app js folder
		define( 'APP_IMG_URL', APP_URL.'asset/images/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/image/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_IMG_URI', APP_URI.'assets/image/' );
		
		# URL to system css/styles
		define( 'APP_IMG_URL', APP_URL.'assets/image/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if img directory exists and define
	elseif( is_dir( APP_URI.'asset/image/' ) )
	{
		# Path to application img Folder
		define( 'APP_IMG_URI', APP_URI.'asset/image/' );
		
		# URL to app js folder
		define( 'APP_IMG_URL', APP_URL.'asset/image/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'img/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_IMG_URI', APP_URI.'img/' );
		
		# URL to system css/styles
		define( 'APP_IMG_URL', APP_URL.'img/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'images/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_IMG_URI', APP_URI.'images/' );
		
		# URL to system css/styles
		define( 'APP_IMG_URL', APP_URL.'images/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'image/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_IMG_URI', APP_URI.'image/' );
		
		# URL to system css/styles
		define( 'APP_IMG_URL', APP_URL.'image/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	elseif( is_dir( APP_URI.'assets/' ) )
	{
		# Path to application css/styles Folder
		define( 'APP_IMG_URI', APP_URI.'assets/' );
		
		# URL to system css/styles
		define( 'APP_IMG_URL', APP_URL.'assets/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if img directory exists and define
	elseif( is_dir( APP_URI.'asset/' ) )
	{
		# Path to application img Folder
		define( 'APP_IMG_URI', APP_URI.'asset/' );
		
		# URL to app js folder
		define( 'APP_IMG_URL', APP_URL.'assets/' );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	# Check if assets/styles directory exists and define
	else
	{
		# Path to application css/styles Folder
		define( 'APP_IMG_URI', APP_URI );
		
		# URL to system css/styles
		define( 'APP_IMG_URL', APP_URL );
		
	} // end define( 'APP_STYLE_URI', APP_URI.'assets/css/' );
	
	
/**
 * Path to system pilot folder
 * @since 0.1.1 s8
 */
	define( 'SYS_PILOT_URI', ROOT_URI.'admin/pilot/' );
	
/**
 * URL to system pilot folder
 * @since 0.1.1 s8
 */
	define( 'SYS_PILOT_URL', ROOT_URL.'admin/pilot/' );
	

/**
 * Path to system functions folder
 * @since 0.1.1 s8
 */
	define( 'SYS_FUNCTIONS_URI', SYS_URI.'functions/' );
	
/**
 * URL to system functions folder
 * @since 0.1.1 s8
 */
	define( 'SYS_FUNCTIONS_URL', SYS_URL.'functions/' );
	
	
/**
 * Path to application functions folder
 * @since 0.1.1 s8
 */
	define( 'APP_FUNCTIONS_URI', SYS_URI.'functions/' );
	
/**
 * URL to application functions folder
 * @since 0.1.1 s8
 */
	define( 'APP_FUNCTIONS_URL', SYS_URL.'functions/' );
		
		
	
/**
 * Define Environment Constants
 */
define( 'PRODUCTION_FOLDER', 'production' );
	
define( 'STAGE_FOLDER', 'stage' );

define( 'QA_FOLDER', 'qa' );

define( 'DEVELOPMENT_NOTICE', 'Development environment of ' . SITE_NAME . ' - Used for developing site components and functionality.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . str_replace( ' ', '%20', SITE_NAME ) . '%20-%20' . ENVIRONMENT . '%20feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );

define( 'STAGE_NOTICE', 'Stage environment of ' . SITE_NAME . ' - Used for testing site functionality & usability.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . str_replace( ' ', '%20', SITE_NAME ) . '%20-%20' . ENVIRONMENT . '%20feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );

define( 'QA_NOTICE', 'Quality Assurance environment of ' . SITE_NAME . ' - Used for testing processes such as logging in and shopping experience, as well as proofing copy and surveying broken links.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . str_replace( ' ', '%20', SITE_NAME ) . '%20-%20' . ENVIRONMENT . '%20feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );	
		
	
/**
 * File and Directory Modes
 */
	define('FILE_READ_MODE', 0644);
	define('FILE_WRITE_MODE', 0666);
	define('DIR_READ_MODE', 0755);
	define('DIR_WRITE_MODE', 0777);


/**
 * File Stream Modes
 *
 * These modes are used when working with fopen()/popen()
 */
	define('FOPEN_READ',							'rb');
	define('FOPEN_READ_WRITE',						'r+b');
	define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
	define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
	define('FOPEN_WRITE_CREATE',					'ab');
	define('FOPEN_READ_WRITE_CREATE',				'a+b');
	define('FOPEN_WRITE_CREATE_STRICT',				'xb');
	define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/*
 * Server HTTP port (can omit if the default 80 is used)
 */	
 	define( 'HTTP_SERVER_PORT', '80' );


# Most Important setting!

/**
 * The $debug variable is used to set error management
 * To debug a specific page, add this to the index.php page:
 
 if( $p == 'thismodule' ) $debug = TRUE;
 require(' ./system/inc/config.inc.php' );
 
 * To debug the entire site, do
 
 $debug = TRUE;
 
 * before this next conditional
 */
 
 # Assume debugging is off
if( !isset( $debug ) )
{
	$debug = FALSE;
	 
} // end if( !isset( $debug ) )


# ***** SETTINGS ***** #
# ******************** #


# ************************ #
# ***** LOAD CLASSES ***** #

/**
 * Loads all system classes in system inc folder
 */
	function __autoload( $class_name )  
	{  
		include_once SYS_CLASS_URI . 'class.' . $class_name . '.inc.php';  
	} // end function __autoload( $class_name ) 
	

//spl_autoload_register( 'class_loader' );
	

# ***** LOAD CLASSES ***** #
# ************************ #


# ************************** #
# ***** LOAD FUNCIONS ****** #

require_once SYS_FUNCTIONS_URI.'function.inc.php';
require_once SYS_FUNCTIONS_URI.'function.admin.inc.php';
require_once SYS_FUNCTIONS_URI.'function.form.inc.php';
require_once SYS_FUNCTIONS_URI.'function.file.inc.php';

# ***** LOAD FUNCTIONS ***** #
# ************************** #


# *************************** #
# ***** ERROR MANAGEMENT **** #

require_once SYS_FUNCTIONS_URI.'function.error.inc.php';

$e = new Error();


# ***** ERROR MANAGEMENT ***** #
# **************************** #


# ***************************#
# ***** FORM CONSTANTS ***** #

/*
 * ------------------------------------------------------
 *  Form Names
 * ------------------------------------------------------
 */
 	# First Name
	define( 'FORM_FIRST_NAME', 'firstName' );

	# Middle Name
	define( 'FORM_MidDLE_NAME', 'middle_name' );

	# Last Name
	define( 'FORM_LAST_NAME', 'lastName' );
	
	# First Name
	define( 'FORM_FULLNAME', 'full_name' );

	# New Username
	define( 'FORM_NEW_USERNAME', 'new_username' );
	
	# Username or Email
	define( 'FORM_USERNAME_EMAIL', 'username_email' );

	# New Email
	define( 'FORM_NEW_EMAIL', 'new_email' );
	
	# Email
	define( 'FORM_EMAIL', 'email' );
	
	# New Telephone
	define( 'FORM_NEW_PHONE', 'new_phone' );
	
	# New Full Address
	define( 'FORM_NEW_FULL_ADDRESS', 'new_full_address' );

	# New Password
	define( 'FORM_NEW_PASS', 'new_pass' );
	
	# New Password
	define( 'FORM_PASS', 'pass' );

	# Confirm New Password
	define( 'FORM_CONFIRM_NEW_PASS', 'confirm_new_pass' );
	
	# Opt in
	define( 'FORM_OPT_IN', 'opt-in' );
	
	# Form Submit
	define( 'FORM_SUBMIT', 'submit' );


 
/*
 * ------------------------------------------------------
 *  Generic Form Error messages
 * ------------------------------------------------------
 */
 	# Empty Inputs

		# Empty First Name
		define( 'ERR_EMPTY_FIRST_NAME', 'Enter your first name.' );

		# Empty Middle Name
		define( 'ERR_EMPTY_MidDLE_NAME', 'Enter your middle name.' );

		# Empty Last Name
		define( 'ERR_EMPTY_LAST_NAME', 'Enter your last name.' );
		
		# Empty First Name
		define( 'ERR_EMPTY_FULLNAME', 'Enter your full name.' );

		# Empty New Email
		define( 'ERR_EMPTY_NEW_EMAIL', 'Please enter your email address.' );
		
		# Empty New Phone
		define( 'ERR_EMPTY_NEW_PHONE', 'Please enter your telephone number.' );
		
		# Empty New Full Address
		define( 'ERR_EMPTY_NEW_ADDRESS', 'Please enter your full address.' );

		# Empty New Username
		define( 'ERR_EMPTY_NEW_USERNAME', 'Please enter a username' );
		
		# Empty Username or Email
		define( 'ERR_EMPTY_USERNAME_EMAIL', 'Please enter your username or email.' );
		
		# Empty Password
		define( 'ERR_EMPTY_PASS', 'Please enter your password.' );

		# Empty New Password
		define( 'ERR_EMPTY_NEW_PASS', 'Enter a password.' );

		# Empty New Confirm Password
		define( 'ERR_EMPTY_NEW_CONFIRM_PASS', 'Please reenter your password.' );


	# Invalid Inputs

		# Invalid First Name
		define( 'ERR_INVALid_FIRST_NAME', 'Please enter a valid first name.' );

		# Invalid Middle Name
		define( 'ERR_INVALid_MidDLE_NAME', 'Please enter a valid middle name.' );

		# Invalid Last Name
		define( 'ERR_INVALid_LAST_NAME', 'Please enter a valid last name.' );
		
		# Invalid First Name
		define( 'ERR_INVALid_FULLNAME', 'Please enter a valid full name. <code class="txt_wht">a-z, A-Z, -, and .</code> are allowed.' );

		# Invalid New Email
		define( 'ERR_INVALid_NEW_EMAIL', 'Please enter a valid email address.' );
		
		# Invalid New Phone Number
		define( 'ERR_INVALid_NEW_PHONE', 'Please enter a valid telephone number.' );

		# Invalid New Username
		define( 'ERR_INVALid_NEW_USERNAME', 'Please enter a valid username. Usernames must be at least 2 - 30 characters long and may only contain <code>a-z</code>, <code>A-Z</code>, <code>0-9</code> and <code>_</code>.' );

		# Invalid Password
		define( 'ERR_INVALid_PASS', 'Password must contain at least 8 characters, 1 uppercase, 1 lowercase and 1 number.' );

	# Match Inputs

		# Mismatched Password & Confirm
		define( 'ERR_MM_PASS', 'Your passwords aren&rsquo;t the same. Please try again.' );
		
		# Mismatched Password & Login
		define( 'ERR_MM_LOGIN', '<div data-alert class="alert-box alert"> <strong>Incorrect Username/Email and Password combination.</strong> Please try again. Note' . SITE_NAME . ' passwords are case sensitive. Please check your CAPS lock key.</div>' );

	# Taken Inputs

		# Email Taken
		define( 'ERR_EMAIL_TAKEN', 'This email address has already been registered. If you have forgotten your password, use the link to have your password sent to you. <a href="' . SITEURL . 'forgot_password">Forgot Password</a>.'  );

		# Username Taken
		define( 'ERR_USERNAME_TAKEN', 'This username has already been registered. Please try another one.'  );


# ***** FORM CONSTANTS ***** #
# ***************************#


# ***********************#
# ***** LOGIN TIME ***** #

/**
 * Start the session
 * The session is bing started at this point so that it can access
 * all the class definitions( thanks to the autoloader). This order is
 * required should there be a stored, serialized object in the session.
 *
 * @todo Secure session_start
 */
 	ob_start();
	session_start();
	

/**
 * Check the user in the session
 * The $user variable will be referenced to the currently logged-in
 * user. The user object will be stored in the session upon successfully
 * logging in. On subsequent pages, the $user variable will be
 * reconstituted from the session.
 *
 * If the user is not logged in, then the  $user variable is set to NULL
 */
 	$user = ( isset( $_SESSION['user'] ) ) ? $_SESSION['user'] : NULL;
	
	
/**
 * Connect the the Database
 */
 	$DBH = new Database;
	global $DBH;



// If it's a POST request, handle the login attempt:
loginTools(); 


# ***** LOGIN TIME ***** #
# ***********************#

# Prevents direct script access
//if(!defined('INDEX')){header('Location:'.SITE_URL);exit;}