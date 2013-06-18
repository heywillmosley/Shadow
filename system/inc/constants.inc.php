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
 * Constants
 *
 * Defines system wide constants
 *
 * @since          Version 1.1.5
 * @filesource     /html/system/inc/constants.inc.php
 */
 
// --------------------------------------------------------------------------------

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
	
	

/*
 * -------------------------------------------------------------------
 *  Define Include and Page constants
 * -------------------------------------------------------------------
 */	
	// Path to system include folder
	define('BASE_INCLUDE_PATH', BASEPATH.'inc/');
	
	// URL to application include folder
	define('APP_INCLUDE_PATH', APPPATH.'inc/');
	
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