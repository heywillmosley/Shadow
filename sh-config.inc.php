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
	define( 'SYS_ALIAS', '' );
	
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
	
	
// If Using Wordpress	
// ----------------------------------------------------------------------------------------------

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/applications' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/applications' );


// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
{
	if( is_dir( 'wordpress' ) )
	{	
		define( 'ABSPATH', dirname( __FILE__ ) . '/wordpress/' );
		
	} // end if( is_dir( 'wordpress' ) || is_dir( 'wp' ) )
	
	elseif( is_dir( 'wp' ) )
	{	
		define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
	
	} // end elseif( is_dir( 'wp' ) )
	
}
	