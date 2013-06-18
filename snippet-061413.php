<?php

/**
 * Start Session
 */
	session_start();
		
/**
 * Autoload Classes
 */
 	function __autoload($class_name)  
    {  
        include_once FRONT_URI . 'system/inc/class.' . $class_name . '.inc.php';  
    }
	
	
/**
 * Load System Header
 */
	require_once( BASE_INCLUDE_URI . 'header.php' );


/**
 *  Create htaccess file for pretty urls if one doesn't exist
 */	
 	# Check if .htaccess file exists
	if( !file_exists( FRONT_URI. '.htaccess' ) )
	{
		$file = FRONT_URI.".htaccess";
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
 *  Load Application Includes
 * ------------------------------------------------------
 */
	require_once(APP_INCLUDE_URI.'constants.php');
	require_once(APP_INCLUDE_URI.'functions.php');



		
 /*
 * ------------------------------------------------------
 *  Load System Includes
 * ------------------------------------------------------
 */
 	require_once( BASE_INCLUDE_URI.'file_functions.inc.php');	
	require_once( BASE_INCLUDE_URI.'functions.php');	
	require_once( BASE_INCLUDE_URI.'conditions.php' );
	require_once( BASE_INCLUDE_URI.'form_functions.inc.php' );
	require_once( BASE_INCLUDE_URI.'header.php' );
	require_once( BASE_INCLUDE_URI.'page_handler.php' );
	

/*
 * -------------------------------------------------------------------
 *  Footer
 * -------------------------------------------------------------------
 */
 	require_once( BASE_INCLUDE_URI.'footer.php' );