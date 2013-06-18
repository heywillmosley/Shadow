<?php
header( 'HTTP/1.1 503 Service Temporarily Unavailable' );
header( 'Status: 503 Service Temporarily Unavailable' );

/* In Seconds 3600 = 1 hour
 * or actual date: Sun, 5 Jan 2013 13:00 GMT */
header( 'Retry-After: 3600' );


# Your staging database name
define( 'DB_NAME', 'kingbioc_stage' );

# Your staging database username
define( 'DB_USER', 'kingbioc_KingBi0' );

# Your staging database user password
define( 'DB_PASSWORD', 'T)VKB-f$u(Tx' );

# Your staging databases's connection type
define( 'DB_HOST', 'localhost' ); // Most likely localhost


# ================================================
# You almost certainly do not want to change these
# ================================================

define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
 
define( 'SITE_NAME' , "Dr King's Natural Medicine");

# Define Admin Contact email for error reporting
define( 'ADMIN_EMAIL', 'wmosley@kingbio.com' );

# Define mailing email
define( 'MAIL_EMAIL', 'hi@kingbio.com' );

# Define current App
define( 'CURRENT_APP', 'dknm' );

# Use Google Fonts
define( 'USE_GOOGLE_FONTS', true );

# Set Google Font Family
define( 'GOOGLE_FONTS', '' );

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
 
$system_PATH = 'system';
$system_url = $system_PATH;


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


define( 'CORE_PATH', dirname( dirname( dirname(__FILE__) ) ) . '/' );

/*
 * ---------------------------------------------------------------
 *  Resolve the front path for increased reliability
 * ---------------------------------------------------------------
 */

define( 'FRONT_PATH', dirname( dirname(__FILE__) ) . '/' );


 	# Establish production database settings
 	if( $_SERVER['HTTP_HOST'] === 'kingbio.com' )
	{	
		# Set Alias folder name if using alias from htdocs to original
		define( 'SYS_ALIAS', '' );
		
	} // end if( $_SERVER['HTTP_HOST'] === 'kingbio.com' )
	
	# Establish development database settings
	elseif( $_SERVER['HTTP_HOST'] === 'kingbio.com/stage/html/' )
	{
		
		# Set staging Alias folder name if using alias from htdocs to original
		define( 'SYS_ALIAS', 'kingbio/html/' );
		
	}
	
	# Establish development database settings
	elseif( $_SERVER['HTTP_HOST'] === 'localhost' )
	{
		
		# Set development Alias folder name if using alias from htdocs to original
		define( 'SYS_ALIAS', 'kingbio/html/' );
		
	}

/*
 *---------------------------------------------------------------
 * ROOT FOLDER NAME
 *---------------------------------------------------------------
 */
 	# Check if alias is being used
	if( !SYS_ALIAS == "" ) 
	{
		define( 'ROOT_NAME', SYS_ALIAS );
		
	} // end if( !SYS_ALIAS == "" ) 
	
	else
	{
		define( 'ROOT_NAME', basename( FRONT_PATH ) );
	
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

	$system_PATH = dirname(dirname(dirname(__FILE__))) . '/' . $system_PATH;
	$system_PATH = rtrim( $system_PATH, '/\\');
	$system_PATH = $system_PATH . '/';
	
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
	define('BASEPATH', str_replace("\\", "/", $system_PATH));
	
	// URL to the system folder
	define('BASEURL', str_replace("\\", "/", $system_url));
	
	// Path to the application folder
	define('APPLICATIONS_PATH', str_replace("\\", "/", $application_folder));
	
	// URL to the system folder
	define('APPLICATIONS_URL', str_replace("\\", "/", $application_url));
	
	// Path to the application folder
	define('APPPATH', str_replace("\\", "/", $application_folder) . CURRENT_APP . '/' );
	
	// URL to the system folder
	define('APPURL', str_replace("\\", "/", $application_url) . CURRENT_APP . '/' );

	// Path to the front controller (this file)
	define('ROOTPATH', str_replace("\\", "/", FRONT_PATH));
	
	// URL to the system folder
	define('ROOTURL', str_replace("\\", "/", $front_url));
	
	// Name of the "system folder"
	define('ROOTDIR', trim(strrchr(trim(ROOTPATH, '/'), '/'), '/'));
	
	// Name of the "system folder"
	define('BASENAME', trim(strrchr(trim(ROOTURL, '/'), '/'), '/'));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));
	
	define( 'SITEURL', ROOTURL );
	
	# MYSQL INC FILE
	define( 'MYSQL', CORE_PATH . 'mysql.inc.php' );
	
	echo APPURL;
	
	

/*
 * -------------------------------------------------------------------
 *  Define Include and Page constants
 * -------------------------------------------------------------------
 */	
	// Path to system include folder
	define('BASE_INCLUDE_PATH', BASEPATH.'include/');
	
	// URL to application include folder
	define('APP_INCLUDE_PATH', APPPATH.'include/');
	
	// Path to system page folder
	define('BASE_PAGE_PATH', BASEPATH.'pages/');
	
	// URL to application page folder
	define('APP_PAGE_PATH', APPPATH.'pages/');	
	
/*
 * -------------------------------------------------------------------
 *  Constants for our styles and javascripts
 * -------------------------------------------------------------------
 */	
	// Path to system css/styles Folder
	define('BASE_STYLE_PATH', BASEPATH.'assets/css/');
	
	// URL to system css/styles
	define('BASE_STYLE_URL', BASEURL.'assets/css/');
	
	// Path to application css/styles Folder
	define('APP_STYLE_PATH', APPPATH.'assets/css/');
	
	// URL to system css/styles
	define('APP_STYLE_URL', APPURL.'assets/css/');
	
	// Path to system less Folder
	define('BASE_LESS_PATH', BASEPATH.'assets/less/');
	
	// URL to system less
	define('BASE_LESS_URL', BASEURL.'assets/less/');
	
	// Path to application less/styles Folder
	define('APP_LESS_PATH', APPPATH.'assets/less/');
	
	// URL to system less/styles
	define('APP_LESS_URL', APPURL.'assets/less/');
	
	// Path to system javascript Folder
	define('BASE_JS_PATH', BASEPATH.'assets/js/');
	
	// URL to system javascript
	define('BASE_JS_URL', BASEURL.'assets/js/');
	
	// Path to application javascript Folder
	define('APP_JS_PATH', APPPATH.'assets/js/');
	
	// URL to system javascript
	define('APP_JS_URL', APPURL.'assets/js/');
	
	// Path to system javascript Folder
	define('BASE_IMG_PATH', BASEPATH.'assets/img/');
	
	// URL to system javascript
	define('BASE_IMG_URL', BASEURL.'assets/img/');
	
	// Path to application javascript Folder
	define('APP_IMG_PATH', APPPATH.'assets/img/');
	
	// URL to system javascript
	define('APP_IMG_URL', APPURL.'assets/img/');
	
	
	
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


/*
 * -------------------------------------------------------------------
 *  Server HTTP port (can omit if the default 80 is used)
 * -------------------------------------------------------------------
 */	
 	define( 'HTTP_SERVER_PORT', '80' );
	
	/* Name of the virtual directory the site runs in, for example:
	 * '/ninja/' if the sit runs at http://www.example.com/ninja/
	 * '/' if the site runs at http://www.example.com/ */
	 define('VIRTUAL_LOCATION', '/kingbio/' );
 	

/*
 *---------------------------------------------------------------
 * Start Session
 *---------------------------------------------------------------
 */
 	
	session_start();


?>

<!-- Load Stylesheets ---------------------->
<!-- Load Shadow Styles -->
<?php echo APP_STYLE_URL; ?>
<link rel="stylesheet" href="<?php echo APP_STYLE_URL; ?>all.css" type="text/css" media="screen" />

<!-- Load Google Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Federo|Titillium+Web:300" type="text/css" media="screen" />





<!DOCTYPE html>
<html>
<head>
	<title>Scheduled Maintenance</title>
</head>
<?php

define( 'MAINTENANCE_URL', $front_url . 'maintenance/' );

?>
<style>
	.maintenance_page{
		max-width: 1000px;
		margin: 0 auto;	
		text-align: center;
		padding-top: 50px;
	}
</style>
<body>

<div class="maintenance_page">
	<div class="row">
    	<div class="small-12 columns">
        	<img src="<?php echo MAINTENANCE_URL . 'dknm-logo.png'; ?>" />
        	<h2>We're undergoing schedule maintenance</h2>
    		<p>We'll be back shortly</p>
        </div><!-- end small-12 columns -->
    </div><!-- end row -->
</div><!-- end maintenance_page -->

</body>
</html>
