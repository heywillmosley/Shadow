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
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * Pilot
 */
 
// --------------------------------------------------------------------------------

/**
 * General Settings
 */
 	# Define Site Name
 	define( 'SITE_NAME' , 'your-site-name-here');
	
	# Define Admin name for error reporting
	define( 'ADMIN_NAME', 'your-name-here' );
	
	# Define Admin Contact email for error reporting
	define( 'ADMIN_EMAIL', 'your-admin-email-here' );
	
	# Define mailing email
	define( 'MAIL_EMAIL', 'your-mail-email-here' );
	
	/* Define a custom database file name for multiple databases in root
	 * Leave blank if unsure */
	define( 'DB_FILE', 'db.inc.php' );
	
	# Define current App
	define( 'CURRENT_APP', 'ninjablack_Master' );
	
	/* Define app type\
	 * Types:
	 * -Parent
	 * -Child */
	define( 'CURRENT_APP_TYPE', 'parent' );
	
	# Most likely localhost
	define( 'LOCAL_DOMAIN', 'your-local-domain-here' );
	
	# Your Testing domain - E.g. stg.example.com
	define( 'TESTING_DOMAIN', 'your-testing-domain-here' );
	
	# Most likely your regular domain for your site - E.g. example.com
	define( 'LIVE_DOMAIN', 'your-live-domain-here' );


/**
 * Paths & Environments
 */
 
# Define absolute url
$domain  = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

# Establish development settings
if( strstr($domain, LOCAL_DOMAIN ) )
{	
	# Set development Environment
	define( 'ENVIRONMENT', 'development' );
	
	/** 
	 * OPTIONAL - Leave blank if you're unsure
	 * Set development Alias Path/folder name if using alias from htdocs/www to original
	 * E.g. Alias = 'fruits'
	 * htdocs/fruits    Original Path "C:\Users\Tsmith\fruits website"
	 * -
	 * E.g. Alias = 'google/photos'
	 * www/google/photos    Original Path "C:\Users\Tsmith\Google Photos"
	 */
	define( 'SYS_ALIAS', '' );
	
}

# Establish stage/testing settings
elseif( strstr($domain, TEST_DOMAIN ) )
{
	# Set staging Environment
	define( 'ENVIRONMENT', 'stage' );
	
	# Set Root Domain for use for add on domains
	define( 'ROOT_SERVER', '' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ADDON_DOMAIN', '' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ROOT_FOLDER', '' );
	
}

# Define Production Settings
elseif( strstr($domain, LIVE_DOMAIN ) )
{	
	# The production environment
	define( 'ENVIRONMENT', 'production' );
	
	# Set Root Domain for use for add on domains
	define( 'ROOT_SERVER', '' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ADDON_DOMAIN', '' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ROOT_FOLDER', '' );
	
	
} // end production settings

# Throw exception if Environment isn't set
/**
 * Throw exception if Environment isn't set
 * @since 1.1.1
 */
	if(!defined( 'ENVIRONMENT' ) )
	{
		try 
		{
			throw new Exception("<h2>Please setup the correct environments in your <code>pilot.php</code> file.</h2>");
			
		} // end try 
		
		catch( Exception $e ) 
		{
			echo $e->getMessage(); exit;
			
		} // end catch( Exception $e ) 
	} // end if(!defined( 'ENVIRONMENT' ) )

	
# Prevents direct script access
if(!defined('INDEX')){require'system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}