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
 * @since          Version 1.1.5
 * @filesource     /mysql.inc.php
 */
 
// --------------------------------------------------------------------------------

	
# Establish database connection
 $dbc = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
 global $dbc;

# Establish the Charset
 mysqli_set_charset( $dbc, 'utf8' );
 
/**
 * Escape Data Function
 *
 * Defining function for making data safe to use in queries
 * Prevent SQL Injection attacts from succeeding
 * Removes extra slashes if Magic Quotes is enabled
 * Trims extra spaces from the data
 * Runs the data through the mysqli_real_escape_string() functiion
 * will make a value safe to use in a query, keeping in mind the
 * database's configuration and character set in use.
 * The function needs the database connection, which is made
 * through the global command
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 1.1.5
 * @dependencies   
 * @param          string  the data
 * @return         string  binary result
 */
	function escape_data( $data ) {
		
		global $dbc;
		
		# Strip the extra slashes if Magic Quotes is on
		if( get_magic_quotes_gpc( ) )
			$data = stripslashes( $data );
			
		# Return a trimmed, secure version of the data
		return mysqli_real_escape_string( trim( $data ), $dbc );  
		
	} // end function escape_data( $data ) { 
	
	
/**
 * Get Password Hash Function
 *
 * This function hashes passwords so passwords canot be decrypted
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 1.1.5
 * @dependencies   
 * @param          string  the password inputted
 * @return         string  binary result
 */
 	function get_password_hash( $password )
	{
		# Call global $database connection
		global $dbc;
		
		/* Generate unique hash using hash-hmac & sha256,
		 * if hash-hmac set to true, output binary instead
		 * of hexadecimal character */
		return mysqli_real_escape_string( $dbc, hash-hmac( 'sha256', $password, 'c#haRl891', true ) );
		
	} // end function get_password_hash( $password )
	
	
/**
 * Get Password SHA Function
 *
 * This function encrypts passwords on older servers
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 1.1.5
 * @dependencies   
 * @param          string  the password inputted
 * @return         string  binary result
 */
 	function get_password_sha( $password )
	{
		# Call global $database connection
		global $dbc;
		
		/* Generate encrypted password using SHA1 ( not as secure as SHA256 */
		return mysqli_real_escape_string( $dbc, sha1( $password, true ) );
		
	} // end function get_password_hash( $password )


/**
 * Redirect Invalid User Function
 *
 * This function redirect unauthorized roles to a set page
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 1.1.5
 * @dependencies   
 * @param          string  OPTIONAL check session variable
 * @param          string  OPTIONAL the destination
 * @param          string  OPTIONALL http
 * @return         redirect or continue
 */
 	function redirect_invalid_user( $check = 'user_id', $destination = SITE_URL, $protocol = 'http://' )
	{
		if( !isset( $_SESSION[$check] ) )
		{
			header( "Location: $destination" );
			exit();
			
		} // end if( !isset( $_SESSION[$check] ) )
	
	} // end function redirect_invalid_user( $check = 'user_id', $destination = $page['home'][1], $protocol = 'http://' )
	

			
			
			
			