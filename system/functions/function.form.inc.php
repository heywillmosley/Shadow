<?php defined('INDEX') or die() and exit(); // Prevents direct script access
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
 * @since          Version 0.1.1 s8
 * -----------------------------------------------------------------
 *
 * System Admin Functions
 */
 
// --------------------------------------------------------------------------------


/**
	 * Create Form Input Method
	 *
	 * This function function streamlines form input and keeps from repeating code
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5  
	 * @param          string  the name of form input
	 * @param          string  the type of input
	 * @param          string  the error message
	 * @param          string  OPTIONAL add placeholder text
	 * @param          string  OPTIONAL the class input
	 * @param          string  OPTIONAL the id input
	 * @param          string  OPTIONAL set $_POST or $_GET
	 * @return         string
	 */
		function create_form_input( $name, $type, $errors, $placeholder = '', $classes = '', $ids = '', $postGet = '$_POST', $checked = FALSE )
		{
			$c = new Form;
			return $c->create_form_input( $name, $type, $errors, $placeholder, $classes, $ids, $postGet, $checked );
			
		} // end function create_form_input( $name, $type, $errors, $placeholder = '', $classes = '', $ids = '', $postGet = '$_POST' )
		
	/**
	 * This function function creates a hash for given password
	 *
	 * @since 1.1.1 s8
	 * @param password
	 * @return string
	 */
	 	function get_password_hash( $password )
		{	
			$c = new Form;
			return $c->get_password_hash( $password );
			
		} // end function get_password_hash( $password )
	 
		
		
	/**
	 * Validate Email Method
	 *
	 * This function function checks that only valid characters for an email are entered
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  user email
	 * @return         boolean
	 */
		function vEmail( $email )
		{
			$c = new Form;
			return $c->vEmail( $email );
		  
		} // end function vEmail($email)
	
	
	/**
	 * Sanitize Email Method
	 *
	 * This function function strips all invalid characters from email
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  user email
	 * @return         boolean
	 */
		function sEmail( $email )
		{
			$c = new Form;
			return $c->sEmail( $email );
		  
		} // end function sEmail($url)
	
	
	/**
	 * Validate Name Method
	 *
	 * This function function validates names
	 * Names must be between 1 - 20 characters long and only
	 * contain a combination of letters (case-insensitive)
	 * the space, a period, an apostrophe, and a hyphen
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  name
	 * @return         boolean
	 */
		function vName( $name ) 
		{	  
			$c = new Form;
			return $c->vName( $name );
						 
		} // end function vName($name)
	
	/**
	 * Validate Long Name Method
	 *
	 * This function function validates longer names (like combined last names)
	 * Names must be between 1 - 40 characters long and only
	 * contain a combination of letters (case-insensitive)
	 * the space, a period, an apostrophe, and a hyphen
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  name
	 * @return         boolean
	 */
		function vLongName( $name ) 
		{
			$c = new Form;
			return $c->vLongName( $name );
						 
		} // end function vName($name)
		
	/**
	 * Validate Full Name Method
	 *
	 * This function function validates full names
	 * Names must be between 1 - 750 characters ( The longest
	 * name in the world is a little under 750 characters! ) long and only
	 * contain a combination of letters (case-insensitive)
	 * the space, a period, an apostrophe, and a hyphen
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s8
	 * @param          string  name
	 * @return         boolean
	 */
		function vFullName( $name ) 
		{
			$c = new Form;
			return $c->vFullName( $name );
						 
		} // end function vName($name)
		
	
	/**
	 * Validate Numbers Method
	 *
	 * This function function validates numbers
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  number
	 * @return         boolean
	 */
		function vNumber( $value )
		{
			$c = new Form;
			return $c->vNumber( $value );
			
		} // end function vNumber($value)
	
	
	/**
	 * Sanitize Numbers Method
	 *
	 * This function function sanitizes numbers
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  number
	 * @return         boolean
	 */
		function sNumber( $value )
		{
			$c = new Form;
			return $c->sNumber( $value );
			
		} // end function sNumber( $value )
	
	
	/**
	 * Validate Alphanumeric Method
	 *
	 * This function validate alphanumeric strings
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string
	 * @return         boolean
	 */
		function vAlphanumeric( $string )
		{
			$c = new Form;
			return $c->vAlphanumeric( $string );
				
		} // end function vAlphanumeric( $string )
	
	
	/**
	 * Sanitize Alphanumeric Method
	 *
	 * This function sanitize alphanumeric strings
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string
	 * @return         boolean
	 */
		function sAlphanumeric( $string )
		{
				$c = new Form;
			return $c->sAlphaanumeric( $string );
				
		} // end function sAlphanumeric( $string )
	
	
	/**
	 * Validate URL Exists Method
	 *
	 * This function function checks if url exists and validates it
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string url
	 * @return         boolean
	 */
		function url_exist($url)
		{
			$c = new Form;
			return $c->url_exists( $url );
		
		} // end function url_exist($url)
	
	/**
	 * Validate URL Format Method
	 *
	 * This function function validates URLs
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string url
	 * @return         boolean
	 */
		function vUrl( $url )
		{
			$c = new Form;
			return $c->vUrl( $url );
		  
		} // end function vUrl( $url )
	
	
	/**
	 * Sanitize URL Method
	 *
	 * This function function sanitizes URLs
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string url
	 * @return         boolean
	 */
		function sUrl( $url )
		{
		  	$c = new Form;
			return $c->sUrl( $url );
		  
		} // end function sUrl( $url )
	
	
	/**
	 * Validate IP Address Method
	 *
	 * This function function balidates IP addresses
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string ip
	 * @return         boolean
	 */
		function vIP( $ip )
		{
		  	$c = new Form;
			return $c->vIP( $ip );
		  
		} // end function vIP( $ip )
	
	
	/**
	 * Validate Proxy Address Method
	 *
	 * This function function validates proxy addresses
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @return         continue or exit
	 */
		function vProxy()
		{
			$c = new Form;
			return $c->vProxy();
			
		} // function vProxy()
	
	
	/**
	 * Validate username Method
	 *
	 * This function function validates usernames only a-z, A-Z, 0-9, and underscores
	 * Minimum 2 character maximum 30 characters (email address may be more)
	 * Size limit should match the restrictions on those same values
	 * in the database columns
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  username
	 * @return         boolean
	 */
		function vUsername( $username )
		{
			$c = new Form;
			return $c->vUsername( $username );
				
		} // end function vUsername( $username )
	
	
	/**
	 * Validate Strong Password Method
	 *
	 * This function function validates passwords, require 8 char,
	 * 1 uppercase, 1 lower, and 1 number
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  password
	 * @return         boolean
	 */
		function vPassword( $password )
		{
			$c = new Form;
			return $c->vPassword( $password );
				
		} // end function vPassword( $password )
		
	/**
	 * Validate Strong Password  w/ custom errors Method
	 *
	 * This function function validates passwords, require 8 char,
	 * 1 uppercase, 1 lower, and 1 number and supplies 
	 * error messages based on output
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  password
	 * @return         array errors
	 */
		function vPassword2() 
		{
			$c = new Form;
			return $c->vPassword2();
			
		} // end function vPassword2() 
	
	
	/**
	 * Validate US Phone Number Method
	 *
	 * This function function validates US Phone Number
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  phone number
	 * @return         boolean
	 */
		function vUSPhone( $phoneNo )
		{
			$c = new Form;
			return $c->vUSPhone( $phoneNo );
			
		} // end function vUSPhone( $phoneNo )
		
	
	/**
	 * Validate US Social Security Numbers Method
	 *
	 * This function function validates US Social Security Numbers
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  ssn
	 * @return         boolean
	 */
		function vUS_SSC( $ssn )
		{
			$c = new Form;
			return $c->vUS_SSC( $ssn );
				
		} // end function vUS_SSC($ssn)
	
	
	/**
	 * Validate Credit Card Numbers Method
	 *
	 * This function function validates Credit Card Numbers
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  cc
	 * @return         boolean
	 */
		function vCC( $cc )
		{
			$c = new Form;
			return $c->vCC( $cc );
			
		} // end function vCC( $cc )
		
	
	/**
	 * Validate Date Method
	 *
	 * This function function validates dates
	 * Format: 2009/12/11, 2009-12-11, 2009.12.11, 09.12.11
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  date
	 * @return         boolean
	 */
		function vDate( $date )
		{
			$c = new Form;
			return $c->vDate( $date );
			
		} // end function vDate( $date )
	
	
	/**
	 * Validate Hexicolor Codes Method
	 *
	 * This function function validates hexicolor codes
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  color
	 * @return         boolean
	 */
		function vColor( $color )
		{
			$c = new Form;
			return $c->vColor( $color );
			
		} // end function vColor( $color )
	
	
	/**
	 * Make Query Safe
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  color
	 * @return         boolean
	 */
		function _cleanQuery( $str )
		{
			$c = new Form;
			return $c->_cleanQuery( $str );
		
		} // end function _cleanQuery( $str )
	
	
	/**
	 * This function makes data safe.
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string 
	 * @params         string  databbase connection
	 * @return         boolean
	 */
		function _cleanData( $str, $dbc = '' )
		{
			$c = new Form;
			return $c->_cleanData( $str, $dbc );
				
		} // end function _cleanData( $str, $dbc = '' )
	
	
	/**
	 * This function validates MySQL database name.
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  databbase connection
	 * @return         boolean
	 */
		function vdb_name ($db) 
		{
			$c = new Form;
			return $c->vdb_name( $db );
			
		} // end function vdb_name ($db) 
	
	
	/**
	 * This function validates a persons sex
	 *
	 * If input is 'f' or 'm' return TRUE.
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  sex
	 * @return         boolean
	 */
		function vSex ( $sex ) 
		{
			$c = new Form;
			return $c->vSex( $sex );
			
		} // end function vSex ( $sex ) 
	
	
	/**
	 * This function sanitizes a persons sex
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  sex
	 * @return         boolean
	 */
		function sSex ( $sex ) 
		{
			$c = new Form;
			return $c->sSex( $sex );
			
		} // end function sSex ( $sex ) 
	
	
	/**
	 * This function checks if form name is set
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  name
	 * @return         boolean
	 */
		function kv( $name ) 
		{
			$c = new Form;
			return $c->kv( $name );
			
		} // end function kv( $name ) 	
	