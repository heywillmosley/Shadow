<?php 
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
 * --------------------------------------------------------------------------------
 *
 * System Config
 *
 * Define systemwide settings so they may be changed easily
 * Define useful constants that may be used by multiple scripts
 * Start the session, Establish how errors will be handled
 *
 * @since          Version 0.1.1 s5
 * @filesource     /html/system/inc/config.inc.php
 */
 
// --------------------------------------------------------------------------------
 

define( 'SITE_NAME' , "Natural Pet Pharmaceuticals");

# Admin Name
define( 'ADMIN_NAME', 'William Mosley, III' );

# Define Admin Contact email for error reporting
define( 'ADMIN_EMAIL', 'wmosley@kingbio.com' );

# Define mailing email
define( 'MAIL_EMAIL', 'hi@kingbio.com' );

# Define current App
define( 'CURRENT_APP', 'npp' );

# Use Google Fonts
define( 'USE_GOOGLE_FONTS', true );

# Set Google Font Family
define( 'GOOGLE_FONTS', '' );



/**
 * Shadow Version
 *
 * @var string
 *
 */
	define('SH_VERSION', '0.1.1 s5');
	
/**
 * Define Framework Name
 */
 
 define('FW_NAME', 'Shadow');
 
# Establish production database settings
if( $_SERVER['HTTP_HOST'] == 'natural-pet.com' || $_SERVER['HTTP_HOST'] == 'www.natural-pet.com' )
{	
	# Your production database name
	define( 'DB_NAME', 'kingbio_naturalpet' );
	
	# Your production database username
	define( 'DB_USER', 'root' );
	
	# Your production database user password
	define( 'DB_PASSWORD', 'agdadg3cMvmf5a6y4b' );
	
	# Your production databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
	# The production environment
	define( 'ENVIRONMENT', 'production' );
	
	# Set Alias folder name if using alias from htdocs to original
	define( 'SYS_ALIAS', '' );
	

	
} // end if( $_SERVER['HTTP_HOST'] === 'kingbio.com' )

# Establish development database settings
elseif( $_SERVER['HTTP_HOST'] == 'stg.natural-pet.com' || $_SERVER['HTTP_HOST'] == 'www.stg.natural-pet.com' )
{
	# Your staging database name
	define( 'DB_NAME', 'naturalpet_stage' );
	
	# Your staging database username
	define( 'DB_USER', 'kingbioc_KingBi0' );
	
	# Your staging database user password
	define( 'DB_PASSWORD', 'T)VKB-f$u(Tx' );
	
	# Your staging databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
	# Set staging Environment
	define( 'ENVIRONMENT', 'stage' );
	
	# Set staging Alias folder name if using alias from htdocs to original
	define( 'SYS_ALIAS', 'maint' );
	
	# Set Root Domain for use for add on domains
	define( 'ROOT_SERVER', 'kingbio.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ADDON_DOMAIN', 'stg.natural-pet.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ROOT_FOLDER', 'naturalpet' );
	
}

# Establish development database settings
elseif( $_SERVER['HTTP_HOST'] == 'qa.natural-pet.com' || $_SERVER['HTTP_HOST'] == 'www.qa.natural-pet.com' )
{
	# Your staging database name
	define( 'DB_NAME', 'naturalpet_stage' );
	
	# Your staging database username
	define( 'DB_USER', 'kingbioc_KingBi0' );
	
	# Your staging database user password
	define( 'DB_PASSWORD', 'T)VKB-f$u(Tx' );
	
	# Your staging databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
	# Set staging Environment
	define( 'ENVIRONMENT', 'qa' );
	
	# Set staging Alias folder name if using alias from htdocs to original
	define( 'SYS_ALIAS', '' );
	
	# Set Root Domain for use for add on domains
	define( 'ROOT_SERVER', 'kingbio.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ROOT_FOLDER', 'naturalpet/qa' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ADDON_DOMAIN', 'qa.natural-pet.com' );
	
}

# Establish development database settings
elseif( $_SERVER['HTTP_HOST'] == 'localhost' )
{
	# Your development database name
	define( 'DB_NAME', 'naturalpet' );
	
	# Your development database username
	define( 'DB_USER', 'K!ngB!0Inc' );
	
	# Your development database user password
	define( 'DB_PASSWORD', 'ZbayKVGpSKVMzAxh' );
	
	# Your development databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
	# Set development Environment
	define( 'ENVIRONMENT', 'development' );
	
	# Set development Alias folder name if using alias from htdocs to original
	define( 'SYS_ALIAS', '' );
	
}


/*
 *---------------------------------------------------------------
 * Define Environment Folders
 *---------------------------------------------------------------
 */
 	define( 'PRODUCTION_FOLDER', 'production' );
	
	define( 'STAGE_FOLDER', 'stage' );
	
	define( 'QA_FOLDER', 'qa' );
	
	define( 'DEVELOPMENT_NOTICE', 'Development environment of ' . SITE_NAME . ' - Used for developing site components and functionality.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . SITE_NAME . ' - ' . ENVIRONMENT . ' feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );
	
	define( 'STAGE_NOTICE', 'Stage environment of ' . SITE_NAME . ' - Used for testing site functionality & usability.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . SITE_NAME . ' - ' . ENVIRONMENT . ' feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );
	
	define( 'QA_NOTICE', 'Quality Assurance environment of ' . SITE_NAME . ' - Used for testing processes such as logging in and shopping experience, as well as proofing copy and surveying broken links.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . SITE_NAME . ' - ' . ENVIRONMENT . ' feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );
/*
 *---------------------------------------------------------------
 * SYSTEM FOLDER NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your "system" folder.
 * Include the path if the folder is not in the same  directory
 * as this file.
 *
 */
 
$system_URI = 'system';
$system_url = $system_URI;


/*
 *---------------------------------------------------------------
 * APPLICATION FOLDER NAME
 *---------------------------------------------------------------
 *
 * If you want this front controller to use a different "application"
 * folder then the default one you can set its name here. The folder
 * can also be renamed or relocated anywhere on your server.  If
 * you do, use a full server path. For more info please see the user guide:
 * http://codeigniter.com/user_guide/general/managing_apps.html
 *
 * NO TRAILING SLASH!
 *
 */
	$application_folder = 'applications';
	$application_url = $application_folder;
	
// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Define Core Path for accessing scripts not stored in PUBLIC_HTML
 * ---------------------------------------------------------------
 */
	define( 'CORE_URI', dirname(dirname(__FILE__)) . '/' );
	

/*
 * ---------------------------------------------------------------
 *  Resolve the front path for increased reliability
 * ---------------------------------------------------------------
 */

if( ENVIRONMENT != 'development' )
	define( 'FRONT_URI', dirname(dirname(__FILE__)) . '/' );

else
	define( 'FRONT_URI', dirname(dirname(__FILE__)) . '/' );
	



/*
 *---------------------------------------------------------------
 * ROOT FOLDER NAME
 *---------------------------------------------------------------
 */
 	# Check if alias is being used
	if( SYS_ALIAS == '' ) 
	{
		define( 'ROOT_NAME', SYS_ALIAS );
		
	} // end if( !SYS_ALIAS == "" ) 
	
	else
	{
		define( 'ROOT_NAME', SYS_ALIAS );
	
	} // end else


/*
 * ---------------------------------------------------------------
 *  Resolve the front url for increased reliability
 * ---------------------------------------------------------------
 */
 
	$front_url = 'http://' .$_SERVER['HTTP_HOST'] . '/' . ROOT_NAME ;
	$front_url = rtrim( $front_url, '/\\');
	$front_url = $front_url . '/';
	
	


/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	$system_URI = dirname(dirname(dirname(__FILE__))) . '/' . $system_URI;
	$system_URI = rtrim( $system_URI, '/\\');
	$system_URI = $system_URI . '/';
	
/*
 * ---------------------------------------------------------------
 *  Resolve the system url for increased reliability
 * ---------------------------------------------------------------
 */
 
 	$system_url = $front_url . $system_url;
	$system_url = rtrim( $system_url, '/\\');
	$system_url = $system_url . '/';
	
/*
 * ---------------------------------------------------------------
 *  Resolve the application path for increased reliability
 * ---------------------------------------------------------------
 */

	$application_folder = dirname(dirname(dirname(__FILE__))) . '/' . $application_folder;
	$application_folder = rtrim( $application_folder, '/\\');
	$application_folder = $application_folder . '/';
	
/*
 * ---------------------------------------------------------------
 *  Resolve the application url for increased reliability
 * ---------------------------------------------------------------
 */
 
 	$application_url = $front_url . $application_url;
	$application_url = rtrim( $application_url, '/\\');
	$application_url = $application_url . '/';

/*
 * -------------------------------------------------------------------
 *  Now that we know the path, set the main path constants
 * -------------------------------------------------------------------
 */
	// The name of THIS file
	define('SELF', pathinfo(__FILE__, PATHINFO_BASENAME));

	// The PHP file extension
	// this global constant is deprecated.
	define('EXT', '.php');

	// Path to the system folder
	define('BASEPATH', str_replace("\\", "/", $system_URI));
	
	// URL to the system folder
	define('BASEURL', str_replace("\\", "/", $system_url));
	
	// Path to the application folder
	define('APPLICATIONS_URI', str_replace("\\", "/", $application_folder));
	
	// URL to the system folder
	define('APPLICATIONS_URL', str_replace("\\", "/", $application_url));
	
	// Path to the application folder
	define('APPPATH', str_replace("\\", "/", $application_folder) . CURRENT_APP . '/' );
	
	// URL to the system folder
	define('APPURL', str_replace("\\", "/", $application_url) . CURRENT_APP . '/' );

	// Path to the front controller (this file)
	define('ROOTPATH', str_replace("\\", "/", FRONT_URI));
	
	// URL to the system folder
	define('ROOTURL', str_replace("\\", "/", $front_url));
	
	// Add On Domain Root URL
	define('ADDON_ROOTURL', str_replace("\\", "/", $addon_front_url));
	
	// Name of the "system folder"
	define('ROOTDIR', trim(strrchr(trim(ROOTPATH, '/'), '/'), '/'));
	
	// Name of the "system folder"
	define('BASENAME', trim(strrchr(trim(ROOTURL, '/'), '/'), '/'));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));
	
	define( 'SITEURL', ROOTURL );
	
	# MYSQL INC FILE
	define( 'MYSQL', CORE_URI . 'mysql.inc.php' );
	

require FRONT_URI . 'maint-settings.inc.php';

# Call Maintenance Settings
if( MAINTENANCE == 0 ) header( 'Location: ' . str_replace("maint/", "", SITEURL ) );

/*
 * -------------------------------------------------------------------
 *  Define Include and Page constants
 * -------------------------------------------------------------------
 */	
	// Path to system include folder
	define('BASE_INCLUDE_URI', BASEPATH.'inc/');
	
	// URL to application include folder
	define('APP_INCLUDE_URI', APPPATH.'inc/');
	
	// Path to system page folder
	define('BASE_PAGE_URI', BASEPATH.'pages/');
	
	// URL to application page folder
	define('APP_PAGE_URI', APPPATH.'pages/');	
	
/*
 * -------------------------------------------------------------------
 *  Constants for our styles and javascripts
 * -------------------------------------------------------------------
 */	
	// Path to system css/styles Folder
	define('BASE_STYLE_URI', BASEPATH.'assets/css/');
	
	// URL to system css/styles
	define('BASE_STYLE_URL', BASEURL.'assets/css/');
	
	// Path to application css/styles Folder
	define('APP_STYLE_URI', APPPATH.'assets/css/');
	
	// URL to system css/styles
	define('APP_STYLE_URL', APPURL.'assets/css/');
	
	// Path to system less Folder
	define('BASE_LESS_URI', BASEPATH.'assets/less/');
	
	// URL to system less
	define('BASE_LESS_URL', BASEURL.'assets/less/');
	
	// Path to application less/styles Folder
	define('APP_LESS_URI', APPPATH.'assets/less/');
	
	// URL to system less/styles
	define('APP_LESS_URL', APPURL.'assets/less/');
	
	// Path to system javascript Folder
	define('BASE_JS_URI', BASEPATH.'assets/js/');
	
	// URL to system javascript
	define('BASE_JS_URL', BASEURL.'assets/js/');
	
	// Path to application javascript Folder
	define('APP_JS_URI', APPPATH.'assets/js/');
	
	// URL to system javascript
	define('APP_JS_URL', APPURL.'assets/js/');
	
	// Path to system javascript Folder
	define('BASE_IMG_URI', BASEPATH.'assets/img/');
	
	// URL to system javascript
	define('BASE_IMG_URL', BASEURL.'assets/img/');
	
	// Path to application javascript Folder
	define('APP_IMG_URI', APPPATH.'assets/img/');
	
	// URL to system javascript
	define('APP_IMG_URL', APPURL.'assets/img/');
	
	# Include functions
	require_once( FRONT_URI . 'inc/functions.inc.php' );
	
	
/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');

		
/* End of file header.php */
/* Location: ./header.php */