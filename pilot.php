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
 * System Functions
 */
 
// --------------------------------------------------------------------------------

/**
 * General Settings
 */
 	# Define Site Name
 	define( 'SITE_NAME' , 'Shadow Architecture');
	
	# Define Admin Contact email for error reporting
	define( 'ADMIN_NAME', 'William Mosley, III' );
	
	# Define Admin Contact email for error reporting
	define( 'ADMIN_EMAIL', 'will@livesuperamazing.com' );
	
	# Define mailing email
	define( 'MAIL_EMAIL', 'will@livesuperamazing.com' );
	
	/* Define a custom database file name for multiple databases in root
	 * Leave blank if unsure */
	define( 'DB_FILE', 'db-shadow.inc.php' );
	
	/* Shadow Level location on server
	 * E.g.
	 * 0 = /shadow (root)
	 * 1 = /folder/shadow
	 * 2 = /folder/folder/shadow */
	define( 'SHADOW_URI_LEVEL', 0 );
	
	# Define current App
	define( 'CURRENT_APP', 'ninjablack_Master' );
	
	/* Define app type\
	 * Types:
	 * -Parent
	 * -Child */
	define( 'CURRENT_APP_TYPE', 'parent' );
	
	# Migration
	define( 'SHDW_MIGRATION', FALSE );


/**
 * Paths & Environments
 */
# Define Host
$host = substr( $_SERVER['HTTP_HOST'], 0, 5 );
 
# Establish development settings
if( in_array( $host, array( 'local', '127.0', '192.1' ) ))
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
	define( 'SYS_ALIAS', 'shadow' );
	
}

# Establish stage/testing settings
elseif( $_SERVER['HTTP_HOST'] == 'stgshadow.superamazing.com' || $_SERVER['HTTP_HOST'] == 'www.stgshadow.superamazing.com' )
{
	# Set staging Environment
	define( 'ENVIRONMENT', 'stage' );
	
	# Set Root Domain for use for add on domains
	define( 'ROOT_SERVER', 'superamazing.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ADDON_DOMAIN', 'stgshadow.superamazing.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ROOT_FOLDER', 'shadow' );
	
}

# OPTIONAL - Establish Quality Assurance settings
elseif( $_SERVER['HTTP_HOST'] == 'domain-name-here' || $_SERVER['HTTP_HOST'] == 'domain-name-here' )
{
	# Set staging Environment
	define( 'ENVIRONMENT', 'stage' );
	
	# Set Root Domain for use for add on domains
	define( 'ROOT_SERVER', 'superamazing.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ADDON_DOMAIN', 'stgshadow.superamazing.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ROOT_FOLDER', 'shadow' );
	
}

# Define Production Settings
elseif( $_SERVER['HTTP_HOST'] == 'shadow.superamazing.com' || $_SERVER['HTTP_HOST'] == 'www.shadow.superamazing.com' )
{	
	# The production environment
	define( 'ENVIRONMENT', 'production' );
	
	# Set Root Domain for use for add on domains
	define( 'ROOT_SERVER', 'superamazing.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ADDON_DOMAIN', 'stgshadow.superamazing.com' );
	
	# Set Add On Domain for seperate domains hosted on same server
	define( 'ROOT_FOLDER', 'shadow' );
	
	
} // end production settings

	
# Prevents direct script access
if(!defined('INDEX')){require'system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}