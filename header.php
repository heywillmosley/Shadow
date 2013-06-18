<?php 
/**
 * Shadow Framework
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		Shadow
 * @author		Super Amazing
 * @copyright	Copyright (c) 2013, Super Amazing
 * @license		http://shadow.superamazing.com/user_guide/license.html
 * @link		http://shadow.superamazing.com
 * @since		Version 1.0
 * @filesource
 */
 
 # Turn on PHP's Out Put Buffering feature. IMPORTANT, DO NOT DELETE. Solves Header already submitted error.
 ob_start();

/**
 * Shadow Version
 *
 * @var string
 *
 */
	define('SW_VERSION', '1.1.5');
	
/**
 * Define Framework Name
 */
 
 define('FW_NAME', 'Shadow');


/*
 *---------------------------------------------------------------
 * ROOT FOLDER NAME
 *---------------------------------------------------------------
 *
 * This variable must contain the name of your root folder.
 * Include the path if the folder is not in the same  directory
 * as this file.
 *
 */

$root_name = 'kingbio';

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
 
$system_path = 'system';
$system_url = $system_path;


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
	$application_folder = 'application';
	$application_url = $application_folder;
	
// --------------------------------------------------------------------
// END OF USER CONFIGURABLE SETTINGS.  DO NOT EDIT BELOW THIS LINE
// --------------------------------------------------------------------

/*
 * ---------------------------------------------------------------
 *  Resolve the front path for increased reliability
 * ---------------------------------------------------------------
 */

$front_path = dirname(__FILE__) . '/';


/*
 * ---------------------------------------------------------------
 *  Resolve the front url for increased reliability
 * ---------------------------------------------------------------
 */
 
$front_url = 'http://' .$_SERVER['HTTP_HOST'] . '/' . $root_name ;
$front_url = rtrim( $front_url, '/\\');
$front_url = $front_url . '/';

/*
 * ---------------------------------------------------------------
 *  Resolve the system path for increased reliability
 * ---------------------------------------------------------------
 */

	$system_path = dirname(__FILE__) . '/' . $system_path;
	$system_path = rtrim( $system_path, '/\\');
	$system_path = $system_path . '/';
	
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

	$application_folder = dirname(__FILE__) . '/' . $application_folder;
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
	define('BASEPATH', str_replace("\\", "/", $system_path));
	
	// URL to the system folder
	define('BASEURL', str_replace("\\", "/", $system_url));
	
	// Path to the application folder
	define('APPPATH', str_replace("\\", "/", $application_folder));
	
	// URL to the system folder
	define('APPURL', str_replace("\\", "/", $application_url));

	// Path to the front controller (this file)
	define('ROOTPATH', str_replace("\\", "/", $front_path));
	
	// URL to the system folder
	define('ROOTURL', str_replace("\\", "/", $front_url));
	
	// Name of the "system folder"
	define('ROOTDIR', trim(strrchr(trim(ROOTPATH, '/'), '/'), '/'));
	
	// Name of the "system folder"
	define('ROOTNAME', trim(strrchr(trim(ROOTURL, '/'), '/'), '/'));

	// Name of the "system folder"
	define('SYSDIR', trim(strrchr(trim(BASEPATH, '/'), '/'), '/'));
	

 /*
 * ------------------------------------------------------
 *  Pretty URLs
 * ------------------------------------------------------
 */

	require ( BASEPATH.'libraries/simpleUrl.php' );

	
	# If called from the index or segment 1 = home, Load homepage
	if ( !segment(1) )
	{
		# Load homepage
		define ('PAGE', 'home');
	} // end if
	
	# Load segment
	else
	{	
		# Set page segment
		define ('PAGE', segment(1));
		
	} // end else
	

/*
 *---------------------------------------------------------------
 * ERROR REPORTING
 *---------------------------------------------------------------
 *
 * Different environments will require different levels of error reporting.
 * By default development will show errors but testing and live will hide them.
 */

if (defined('ENVIRONMENT'))
{
	switch (ENVIRONMENT)
	{
		case 'development':
			error_reporting(E_ALL);
		break;
	
		case 'testing':
		case 'production':
			error_reporting(0);
		break;

		default:
			exit('The application environment is not set correctly.');
	}
}

# ================================================
# You almost certainly do not want to change these
# ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

# ==============================================================
# Table prefix
# Change this if you have multiple installs in the same database
# ==============================================================
$table_prefix  = 'sw_';

# ================================
# Language
# Leave blank for American English
# ================================
define( 'SWLANG', '' );

?>

<!-- Load Stylesheets -->
	<link rel="stylesheet" href="<?php echo BASEURL; ?>css/all.css" type="text/css" media="screen" />
	
	<!-- Load Google Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Federo|Titillium+Web:300" type="text/css" media="screen" />
	
	<!-- Load Javascripts -->
	<script src="<?php echo BASEURL; ?>js/vendor/jquery.js"></script>
	<script src="<?php echo BASEURL; ?>js/vendor/custom.modernizr.js"></script>
    <script src="<?php echo BASEURL; ?>js/shadow.js"></script>
	<script src="<?php echo BASEURL; ?>js/vendor/response.js"></script>
    <script src="<?php echo BASEURL; ?>js/vendor/holder.js"></script>
	

<?php

/*
 * ------------------------------------------------------
 *  Load the global constants
 * ------------------------------------------------------
 */
	require(BASEPATH.'config/constants.php');

/*
 * ------------------------------------------------------
 *  Load the global functions
 * ------------------------------------------------------
 */
	require(BASEPATH.'libraries/functions.php');
	
 /*
 * ------------------------------------------------------
 *  Conditions
 * ------------------------------------------------------
 */

	require ( BASEPATH.'libraries/conditions.php' );
	
/*
 * ------------------------------------------------------
 *  Load the application constants
 * ------------------------------------------------------
 */
	include(APPPATH.'constants.php');

/*
 * ------------------------------------------------------
 *  Load the application functions
 * ------------------------------------------------------
 */
	include(APPPATH.'functions.php');


/*
 *---------------------------------------------------------------
 * APPLICATION ENVIRONMENT
 *---------------------------------------------------------------
 *
 * You can load different configurations depending on your
 * current environment. Setting the environment also influences
 * things like logging and error reporting.
 *
 * This can be set to anything, but default usage is:
 *
 *     development
 *     testing
 *     production
 *
 * NOTE: If you change these, also change the error_reporting() code below
 *
 */
 
 /*
 # Check if local-config.php & live-config.php don't exist
 if ( !file_exists( ROOTPATH. 'local-config.php' ) AND !file_exists( ROOTPATH. '/live-config.php' ) ) {
	 
	?>
	<script>
		
		// Set desired url name
		var url = '<?php echo 'database'; ?>';
		
		// Change browser url without refreshing
		window.history.replaceState('Object', 'Title', url);
		
	</script>
	<?php
	
	# Include new database
	include ( BASEPATH.'new_database.php' );
	exit;
	
} */
 
 
# Load Local dev settings if local-config.php exists
if ( file_exists( ROOTPATH. 'local-config.php' ) AND !file_exists( ROOTPATH. '/testing-config-active.php' ) ) {
	
	require( ROOTPATH. 'local-config.php' );
	define('ENVIRONMENT', 'development');
} 

# Load Local test settings if test-config-active.php exists
/*elseif ( file_exists( ROOTPATH. 'testing-config-active.php' ) ) {
	
	require( ROOTPATH. 'testing-config-active.php' );
	define('ENVIRONMENT', 'testing');
} */

# Load live settings
else {
	
	require( ROOTPATH. 'live-config.php' );
	define('ENVIRONMENT', 'production');
	
} // else


	
	
/*
 * ------------------------------------------------------
 *  Connect to database
 * ------------------------------------------------------
 */
	# Connect to database
	$db = new mysqli (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	# If Can't Connect, Error and Die
	if ($db->connect_errno > 0)
	{
		die ('Unable to connect to database [' .$db->connect_error . ']');
		
	} // end if $db->...
	
	# Set Charset
	mysqli_set_charset( $db, DB_CHARSET );
	
	
	# Check if Shadow is installed
	# Show database error if it can't connect
	if ( !mysqli_ping( $db ) ) {
		echo mysqli_error( $db );
		mysqli_close( $db );
		exit;
	} // end if 
	
	# Use database
	$q = 'USE ' . DB_NAME;
	$r = mysqli_query( $db, $q);
	
	# Check if Shadow is installed on database
	$q = 'SELECT * FROM sw_options';
	$r = mysqli_query( $db, $q);
	
	if ( $r ) 
	{
		/*
		 * ------------------------------------------------------
		 *  Define Site Name Constant
		 * ------------------------------------------------------
		 */
			$q = 'SELECT site_name FROM sw_options';
			$r = mysqli_query( $db, $q);
			
			# Check how many rows are in query
			$num = mysqli_num_rows( $r );
			
			# Check if there is only one entry
			if ( $num == 1 )
			{
				# Gets Site name from database
				while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ) )
				{
					# Set site name constant
					define ('SITE_NAME', $row['site_name']);
					
				} // end while
				
			} else { echo mysqli_error( $db ); exit; }
		
		/*
		 * ------------------------------------------------------
		 *  Define Site Tagline Constant
		 * ------------------------------------------------------
		 */
			$q = 'SELECT tagline FROM sw_options';
			$r = mysqli_query( $db, $q);
			
			# Check how many rows are in query
			$num = mysqli_num_rows( $r );
			
			# Check if there is only one entry
			if ( $num == 1 )
			{
				# Get tagline from database
				while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ) )
				{
					# Set tagline constant
					define ('TAGLINE', $row['tagline']);
					
				} // end while
				
			} else { echo mysqli_error( $db ); exit; }
		
		switch (PAGE)
		{
			# If Segment is empty or home Application Homepage
			case 'home' :
				include (APPPATH.'index.php');
			break;
			
			case 'register' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'register.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'register.php'); };
				
			break;
			
			case 'login' :
				
				# Checks if register.php doesn't exist
					if ( !file_exists( APPPATH. 'login.php' ) )
					{
						# Return 404 page
						page404();
						
					} else { include (APPPATH.'login.php'); };
				
			break;
			
			case 'process_login' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'process_login.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'process_login.php'); };
				
			break;
			
			case 'locked' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'locked.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'locked.php'); };
				
			break;
			case 'logout' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'logout.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'logout.php'); };
				
			break;
			case 'drfrankking' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'drfrankking/index.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'drfrankking/index.php'); };
			break;
			case 'naturalpet' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'naturalpet/index.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'naturalpet/index.php'); };
			break;
			case 'aquaflora' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'aquaflora/index.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'aquaflora/index.php'); };
			break;
			case 'safecare' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'safecare/index.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'safecare/index.php'); };
			break;
			case 'safecarerx' :
				
				# Checks if register.php doesn't exist
				if ( !file_exists( APPPATH. 'safecarerx/index.php' ) )
				{
					# Return 404 page
					page404();
					
				} else { include (APPPATH.'safecarerx/index.php'); };
			break;
			default : # 404 page
				
				# Return 404 page
				page404();
				
			break;
		} // end switch
	} // end if
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
		
	} // end else	
	

/*
 * -------------------------------------------------------------------
 *  Footer
 * -------------------------------------------------------------------
 */
?>
	<script>
	  document.write('<script src=' +
	  ('__proto__' in {} ? '<?php echo BASEURL; ?>js/vendor/zepto' : '<?php echo BASEURL; ?>js/vendor/jquery') +
	  '.js><\/script>')
  </script>
	<script src="<?php echo BASEURL; ?>js/vendor/foundation/foundation.min.js"></script>
    <script>
	  $(document).foundation();
	</script>

<?php
		
/* End of file header.php */
/* Location: ./header.php */