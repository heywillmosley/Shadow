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
 * Form Functions Inc
 *
 * Streamlines Form input and functionality
 *
 * @since          Version 1.1.5
 * @filesource     /sh-config.inc.php
 */
 
// --------------------------------------------------------------------------------

/* --------------------------------------
 * Check for the current environment
 *
 * Development: is your local site, where you'll develop your code
 * Staging : is where your local site will be pushed to on a
 *   section of your production server for testing before it's
 *   ready for release
 * Production: is your live site, where your end users will use your site
 * -------------------------------------- 
 */
# Establish development database settings
if(  ENVIRONMENT == 'development' )
{
	# Your development database name
	define( 'DB_NAME', 'development-database-name-here' );
	
	# Your development database username
	define( 'DB_USER', 'development-database-username-here' );
	
	# Your development database user password
	define( 'DB_PASSWORD', 'development-database-password-here' );
	
	# Your development databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
}

# OPTIONAL - Establish development database settings
elseif( ENVIRONMENT == 'stage' )
{
	# Your staging database name
	define( 'DB_NAME', 'stage-database-name-here' );
	
	# Your staging database username
	define( 'DB_USER', 'stage-database-username-here' );
	
	# Your staging database user password
	define( 'DB_PASSWORD', 'stage-database-password-here' );
	
	# Your staging databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
} // end stage database settings

# OPTIONAL - Establish development database settings
elseif( ENVIRONMENT == 'qa' )
{
	# Your staging database name
	define( 'DB_NAME', 'qa-database-name-here' );
	
	# Your staging database username
	define( 'DB_USER', 'qa-database-username-here' );
	
	# Your staging database user password
	define( 'DB_PASSWORD', 'qa-database-password-here' );
	
	# Your staging databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
} // end quality assurance database settings

elseif( ENVIRONMENT == 'production' )
{	
	# Your production database name
	define( 'DB_NAME', 'production-database-name-here' );
	
	# Your production database username
	define( 'DB_USER', 'production-database-username-here' );
	
	# Your production database user password
	define( 'DB_PASSWORD', 'production-database-password-here' );
	
	# Your production databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
	
} // end production database settings




# Prevents direct script access
if(!defined('FRONT_URI')){require'system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}