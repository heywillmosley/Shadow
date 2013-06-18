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
 * @since          Version 1.1.5
 * @filesource     /html/system/inc/config.inc.php
 */
 
// --------------------------------------------------------------------------------
 


/**
 * Shadow Version
 *
 * @var string
 *
 */
	define('SYS_VER', '1.1.6');
	
/**
 * Define Framework Name
 */
 
 define('FW_NAME', 'Shadow Framework');


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


define( 'CORE_PATH', dirname(dirname(dirname(dirname(__FILE__)))) . '/' );

/*
 * ---------------------------------------------------------------
 *  Resolve the front path for increased reliability
 * ---------------------------------------------------------------
 */

define( 'FRONT_PATH', dirname(dirname(dirname(__FILE__))) . '/' );

/*
 *---------------------------------------------------------------
 * Load Shadow Config Settings
 *---------------------------------------------------------------
 */
 	# Include TEMP BOS file
 	require_once( FRONT_PATH . 'TEMP-bos.php' );
	
	// require_once( CORE_PATH . 'sh-config.inc.php' );
	require_once( FRONT_PATH . 'sh-config.inc.php' );



/*
 *---------------------------------------------------------------
 * Define Environment Folders
 *---------------------------------------------------------------
 */
 	define( 'PRODUCTION_FOLDER', 'production' );
	
	define( 'STAGE_FOLDER', 'stage' );
	
	define( 'QA_FOLDER', 'qa' );
	
	define( 'DEVELOPMENT_NOTICE', 'Development environment of ' . SITE_NAME . ' - Used for developing site components and functionality.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . str_replace( ' ', '%20', SITE_NAME ) . '%20-%20' . ENVIRONMENT . '%20feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );
	
	define( 'STAGE_NOTICE', 'Stage environment of ' . SITE_NAME . ' - Used for testing site functionality & usability.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . str_replace( ' ', '%20', SITE_NAME ) . '%20-%20' . ENVIRONMENT . '%20feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );
	
	define( 'QA_NOTICE', 'Quality Assurance environment of ' . SITE_NAME . ' - Used for testing processes such as logging in and shopping experience, as well as proofing copy and surveying broken links.<br/>Please email ' . ADMIN_NAME . ' at <a href="mailto:' . ADMIN_EMAIL . '?subject=' . str_replace( ' ', '%20', SITE_NAME ) . '%20-%20' . ENVIRONMENT . '%20feedback">' . ADMIN_EMAIL . '</a> with feedback and questions.' );

/*
 * --------------------------------------------------------------------
 * IF USING WORDPRESS or WP directory exists, load Wordpress
 * --------------------------------------------------------------------
 */
 	if( is_dir( 'wordpress' ) )
	{	
		# Wordpress view bootstrapper
		define( 'WP_USE_THEMES', true );
		
		# Load wordpress's bootstrap file
		require( ABSPATH .'wp-blog-header.php' );
	
	} // end if( is_dir( 'wordpress' ) || is_dir( 'wp' ) )
	
	elseif( is_dir( 'wp' ) )
	{	
		# Wordpress view bootstrapper
		define( 'WP_USE_THEMES', true );
		
		
		# Load wordpress's bootstrap file
		require( ABSPATH . 'wp-blog-header.php' );
	
	} // end elseif( is_dir( 'wp' ) )
	
/*
 *---------------------------------------------------------------
 * ROOT FOLDER NAME
 *---------------------------------------------------------------
 */
 	# Check if alias is being used
	if( SYS_ALIAS == "" ) 
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
 	# Check if there is an addon domain
 	if( ADDON_DOMAIN != '' && ENVIRONMENT != 'development' )
	{
		# Set Front URL to Add on domain
		$front_url = 'http://' . ADDON_DOMAIN . '/';
		$front_url = rtrim( $front_url, '/\\' );
		$front_url = $front_url . '/';
		
	} // end if( ADDON_DOMAIN != '' )
	
	# Set Front URL based on Server url
	else
	{
		$front_url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . ROOT_NAME;
		$front_url = rtrim( $front_url, '/\\' );
		$front_url = $front_url . '/';
	}
	


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

# Require system wide constants
require_once( FRONT_PATH.'system/inc/constants.inc.php');	

/*
 *---------------------------------------------------------------
 * Start Session
 *---------------------------------------------------------------
 */
 	
	session_start();


require_once( BASE_INCLUDE_PATH . 'header.php' );

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */
 
 function my_error_handler( $e_number, $e_message, $e_file, $e_line, $e_vars )
 {
	 $message = "<div><strong>An error occured your script</strong>\n
	 			file: '$e_file'\n
				line: $e_line \n
	 \n$e_message\n";
	 
	 
	 /* Add Backtrace information
	  * A backtrace is essentally everyhing that happened up until the point of the error.
	  * This will include files that were executed, functions that were called,
	  * arguments passed to the functions, and variables that existed */
	 $message .= "<pre>" .print_r( debug_backtrace(), 1 ) . "</pre></div>\n";
	 
	 # If site isn't live, show errors
	 if( ENVIRONMENT != 'production' )
	 {
	 	echo '<div data-alert class="alert-box alert-warning mas">' . nl2br($message). '</div>';
	 }
	else
	{
			error_log( $message, 1, ADMIN_EMAIL, 'From:admin@livesuperamazing.com' );
			
			echo '<div data-alert class="alert-box secondary">A system error occured, We apologize for the inconvenience.</div>';
			
			if( $e_number != E_NOTICE )
			{
				echo '<div data-alert class="alert-box secondary">A system error occured, We apologize for the inconvenience.</div>';
				
			} // end if( $e_number != E_NOTICE )
			
	} // end else
	
	# If the site is live, show a generic message, if the error isn't a notice:
	
	return true;
	 
 } // end function my_error_handler( $e_number, $e_message, $e_file, $e_line, $e_vars )


# Apply the error handler
// set_error_handler( 'my_error_handler' );

# ==============================================================
# Table prefix
# Change this if you have multiple installs in the same database
# ==============================================================
$table_prefix  = 'sh-';

/*
 * -------------------------------------------------------------------
 *  Create htaccess file for pretty urls if one doesn't exist
 * -------------------------------------------------------------------
 */	
 	# Check if .htaccess file exists
	if( !file_exists( ROOTPATH. '.htaccess' ) )
	{
		$file = ROOTPATH.".htaccess";
		$handle = fopen($file, FOPEN_WRITE_CREATE_DESTRUCTIVE );
		
		$data = '# Sets the enviroment up to follow symbolic links using "Options directive"
Options +FollowSymLinks

# Use the Rewrite Engine
RewriteEngine On
  
RewriteCond %{SCRIPT_FILENAME} !-d  
RewriteCond %{SCRIPT_FILENAME} !-f  
  
RewriteRule ^.*$ ./index.php  ';
	
		# Write Data to File
		fwrite( $handle, $data );
		
		# Close File
		fclose($handle);
		
	} // end 

/*
 * ------------------------------------------------------
 *  Form Names
 * ------------------------------------------------------
 */
 	# First Name
	define( 'FORM_FIRST_NAME', 'first_name' );
	
	# Middle Name
	define( 'FORM_MIDDLE_NAME', 'middle_name' );
	
	# Last Name
	define( 'FORM_LAST_NAME', 'last_name' );
	
	# New Username
	define( 'FORM_NEW_USERNAME', 'new_username' );
	
	# New Email
	define( 'FORM_NEW_EMAIL', 'new_email' );
	
	# New Password
	define( 'FORM_NEW_PASS', 'new_pass' );
	
	# Confirm New Password
	define( 'FORM_CONFIRM_NEW_PASS', 'confirm_new_pass' );
	
	
 
/*
 * ------------------------------------------------------
 *  Generic Form Error messages
 * ------------------------------------------------------
 */
 	# Empty Inputs
	
		# Empty First Name
		define( 'ERR_EMPTY_FIRST_NAME', 'Enter your first name.' );
		
		# Empty Middle Name
		define( 'ERR_EMPTY_MIDDLE_NAME', 'Enter your middle name.' );
		
		# Empty Last Name
		define( 'ERR_EMPTY_LAST_NAME', 'Enter your last name.' );
		
		# Empty New Email
		define( 'ERR_EMPTY_NEW_EMAIL', 'Please enter your email address.' );
	
		# Empty New Username
		define( 'ERR_EMPTY_NEW_USERNAME', 'Please enter a username' );
		
		# Empty New Password
		define( 'ERR_EMPTY_NEW_PASS', 'Enter a password.' );
		
		# Empty New Confirm Password
		define( 'ERR_EMPTY_NEW_CONFIRM_PASS', 'Please reenter your password.' );
		
	
	# Invalid Inputs
	
		# Invalid First Name
		define( 'ERR_INVALID_FIRST_NAME', 'Please enter a valid first name.' );
		
		# Invalid Middle Name
		define( 'ERR_INVALID_MIDDLE_NAME', 'Please enter a valid middle name.' );
		
		# Invalid Last Name
		define( 'ERR_INVALID_LAST_NAME', 'Please enter a valid last name.' );
		
		# Invalid New Email
		define( 'ERR_INVALID_NEW_EMAIL', 'Please enter a valid email address.' );
		
		# Invalid New Username
		define( 'ERR_INVALID_NEW_USERNAME', 'Please enter a valid username. Usernames must be at least 2 - 30 characters long and may only contain <code>a-z</code>, <code>A-Z</code>, <code>0-9</code> and <code>_</code>.' );
		
		# Invalid Password
		define( 'ERR_INVALID_PASS', 'Password must contain at least 8 characters, 1 uppercase, 1 lowercase and 1 number.' );
		
	# Match Inputs
		
		# Mismatched Password & Confirm
		define( 'ERR_MM_PASS', 'Your passwords aren&rsquo;t the same. Please try again.' );
		
	# Taken Inputs
		
		# Email Taken
		define( 'ERR_EMAIL_TAKEN', 'This email address has already been registered. If you have forgotten your password, use the link to have your password sent to you. <a href="' . SITEURL . 'forgot_password">Forgot Password</a>.'  );
		
		# Username Taken
		define( 'ERR_USERNAME_TAKEN', 'This username has already been registered. Please try another one.'  );
	
/*
 * ------------------------------------------------------
 *  Load Application Includes
 * ------------------------------------------------------
 */
	require_once(APP_INCLUDE_PATH.'constants.php');
	require_once(APP_INCLUDE_PATH.'functions.php');



		
 /*
 * ------------------------------------------------------
 *  Load System Includes
 * ------------------------------------------------------
 */
 	require_once( BASE_INCLUDE_PATH.'file_functions.inc.php');	
	require_once( BASE_INCLUDE_PATH.'functions.php');	
	require_once( BASE_INCLUDE_PATH.'conditions.php' );
	require_once( BASE_INCLUDE_PATH.'form_functions.inc.php' );
	require_once( APPPATH.'app-config.inc.php' );
	require_once( BASE_INCLUDE_PATH.'header.php' );
	require_once( BASE_INCLUDE_PATH.'page_handler.php' );
			
/*
 * -------------------------------------------------------------------
 *  Implement Error Handling Class for most PHP errors
 * -------------------------------------------------------------------
 */	/*
	# These should be true while developing the web site
	define( 'IS_WARNING_FATAL', true );
	define( 'DEBUGGING', true);
	
	# The error types to be reported
	define( 'ERROR_TYPES', E_ALL );
	
	# Settings about mailing the error messages to admin
	define( 'SEND_ERROR_MAIL', false );
	define( 'ADMIN_ERROR_MAIL', 'wmosley@kingbio.com' );
	define( 'SENDMAIL_FROM', 'errors@kingbio.com' );
	ini_set( 'sendmail_from', SENDMAIL_FROM );
	
	# By default we don't log errors to a file
	define( 'LOG_ERRORS', true );
	define( 'LOG_ERRORS_FILE', APPPATH.'errors/log.txt' );
	
	# Generic error message to be displayed instead of debug info
	# (when DEBUGGING is false
	define( 'SITE_GENERIC_ERROR_MESSAGE', '<h1>' . SITE_NAME . ' Error!</h1>' ); */
	

/* } // end if
else {
?>
<script>

	// Set desired url name
	var url = '<?php echo 'install'; ?>';
	
	// Change browser url without refreshing
	window.history.replaceState('Object', 'Title', url);
	

</script>
<?php

# Include installation
 include( BASEPATH.'install.php');
 exit;

} // end else	*/	

/*
 * -------------------------------------------------------------------
 *  Footer
 * -------------------------------------------------------------------
 */
 	require_once( BASE_INCLUDE_PATH.'footer.php' );
		
/* End of file header.php */
/* Location: ./header.php */