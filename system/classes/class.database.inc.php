<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 0 Arguments
 * 0 Methods
 */
class Database
{
	/**
	 * Sets database connection
	 *
	 * @since 1.1.1 s8
	 * @param
	 */
	 function setDB( $host, $user, $password, $dbName = '' )
	 {
		 # Set Database connection with database
		if( $dbName != '' )
		{
			 # Turn off PHP Errors
			 ini_set('display_errors', 0);
			 
			 # Set database connection or call error message
			 $dbc = mysqli_connect( $host, $user, $password, $dbName ) or die( '<h1>Could not connect to the database.</h1>' .  mysqli_connect_error() ); 
			 
			 # Turn back on PHP Errors
			 ini_set('error_reporting', E_ALL);
			 
			 
		} // end if( $dbName != FALSE )
		
		# Set Database connection with database without database
		else 
		{
			$dbc = mysqli_connect( $host, $user, $password );
			
		} // end else
		
		mysqli_close( $dbc );
		 
	 }
	
 
} // end ClassName