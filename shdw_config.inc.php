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
 	if( $_SERVER['HTTP_HOST'] === 'kingbio.com' )
	{	
		# Your production database name
		define( 'DB_NAME', 'kingbio_kingbio' );
		
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
	elseif( $_SERVER['HTTP_HOST'] === 'www.kingbio.com/stage/html' )
	{
		# Your staging database name
		define( 'DB_NAME', 'kingbioc_stage' );
		
		# Your staging database username
		define( 'DB_USER', 'kingbioc_KingBi0' );
		
		# Your staging database user password
		define( 'DB_PASSWORD', 'T)VKB-f$u(Tx' );
		
		# Your staging databases's connection type
		define( 'DB_HOST', 'localhost' ); // Most likely localhost
		
		# Set staging Environment
		define( 'ENVIRONMENT', 'development' );
		
		# Set staging Alias folder name if using alias from htdocs to original
		define( 'SYS_ALIAS', 'kingbio/html/' );
		
	}
	
	# Establish development database settings
	elseif( $_SERVER['HTTP_HOST'] === 'localhost' )
	{
		# Your development database name
		define( 'DB_NAME', 'kingbio' );
		
		# Your development database username
		define( 'DB_USER', 'K!ngB!0Inc' );
		
		# Your development database user password
		define( 'DB_PASSWORD', 'ZbayKVGpSKVMzAxh' );
		
		# Your development databases's connection type
		define( 'DB_HOST', 'localhost' ); // Most likely localhost
		
		# Set development Environment
		define( 'ENVIRONMENT', 'development' );
		
		# Set development Alias folder name if using alias from htdocs to original
		define( 'SYS_ALIAS', 'kingbio/html/' );
		
	}