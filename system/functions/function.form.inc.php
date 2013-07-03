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
		function create_form_input( $name, $type, $errors, $placeholder = '', $classes = '', $ids = '', $postGet = '$_POST' )
		{
			$c = new Form;
			return $c->create_form_input( $name, $type, $errors, $placeholder, $classes, $ids, $postGet );
			
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
		  $c->vEmail( $email );
		  return ;
		  
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
		  return filter_var( $email, FILTER_SANITIZE_EMAIL );
		  
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
				return preg_match ('/^[A-Z \'.-]{1,30}$/i', $name);
						 
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
			  return preg_match ('/^[A-Z \'.-]{1,50}$/i', $name);
						 
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
	 * @since          Version 0.1.1 s5
	 * @param          string  name
	 * @return         boolean
	 */
		function vFullName( $name ) 
		{
			  return preg_match ('/^[A-Z \'.-]{1,750}$/i', $name);
						 
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
			#return filter_var($value, FILTER_VALIDATE_FLOAT); // float
			return filter_var( $value, FILTER_VALIDATE_INT ); # int
			
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
			#return filter_var($value, FILTER_SANITIZE_NUMBER_FLOAT); // float
			return filter_var( $value, FILTER_SANITIZE_NUMBER_INT ); # int
			
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
			return ctype_alnum ( $string );
				
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
				return preg_replace( '/[^a-zA-Z0-9]/', '', $string );
				
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
		  return filter_var( $url, FILTER_VALIDATE_URL );
		  
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
		  return filter_var( $url, FILTER_SANITIZE_URL );
		  
		} // end function sUrl( $url )
	
	
	/**
	 * Image Exists Method
	 *
	 * This function function checks if an image exists
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string image
	 * @return         boolean
	 */
		function image_exist( $img ) 
		{
			if( @file_get_contents( $img,0,NULL,0,1) ){ return 1; } else{ return 0; }
			
		} // end function image_exist( $img )
	
	
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
		  return filter_var( $ip, FILTER_VALIDATE_IP );
		  
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
			if( $_SERVER['HTTP_X_FORWARDED_FOR']
			   || $_SERVER['HTTP_X_FORWARDED']
			   || $_SERVER['HTTP_FORWARDED_FOR']
			   || $_SERVER['HTTP_VIA']
			   || in_array( $_SERVER['REMOTE_PORT'], array( 8080,80,6588,8000,3128,553,554) )
			   || @fsockopen( $_SERVER['REMOTE_ADDR'], 80, $errno, $errstr, 30) )
			{
				exit('Proxy detected');
				
			} // end if( $_SERVER['HTTP_X_FORWARDED_FOR']
			
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
				return preg_match( '/^[a-zA-Z\d_@.]{2,30}$/i', $username );
				
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
				return preg_match( '/^(?=^.{8,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/', $password );
				
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
			# Check password strength
			$p = $p1;
			
			if( strlen($p) < 8 ) $reg_errors[] = "Password too short!";
			
			if( strlen($p) > 20 ) $reg_errors[] = "Password too long!";
			
			if( !preg_match("#[0-9]+#", $p) ) $reg_errors[] = "Password must include at least one number!";
			
			
			if( !preg_match("#[a-z]+#", $p) ) $reg_errors[] = "Password must include at least one letter!";
			
			if( !preg_match("#[A-Z]+#", $p) ) $reg_errors[] = "Password must include at least one CAPS!";
			
			/* if( !preg_match("#\W+#", $p) ) $errors[] = "Password must include at least one symbol!"; */	
			
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
			return preg_match('/\(?\d{3}\)?[-\s.]?\d{3}[-\s.]\d{4}/x', $phoneNo);
			
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
				#eg. 531-63-5334
				return preg_match( '/^[\d]{3}-[\d]{2}-[\d]{4}$/',$ssn );
				
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
			#eg. 718486746312031
			return preg_match('/^(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6011[0-9]{12}|3(?:0[0-5]|[68][0-9])[0-9]{11}|3[47][0-9]{13})$/', $cc);
			
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
			return preg_match('#^([0-9]?[0-9]?[0-9]{2}[- /.](0?[1-9]|1[012])[- /.](0?[1-9]|[12][0-9]|3[01]))*$#', $date);
			
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
			#CCC
			#CCCCC
			#FFFFF
			return preg_match( '/^#(?:(?:[a-f0-9]{3}){1,2})$/i', $color );
			
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
		return is_array($str) ? array_map('_cleanQuery', $str) : str_replace('\\', '\\\\', htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($str) : $str), ENT_QUOTES));
		
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
			if( !empty( $dbc ) ) 
			{
				global $dbc;
				return is_array($str) ? array_map('_cleanData', $str) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes(mysqli_real_escape_string($str)) : $str), ENT_QUOTES))));
			
			}
			else
				return is_array($str) ? array_map('_cleanData', $str) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes($str) : $str), ENT_QUOTES))));
				
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
		function vDBName ($db) 
		{
			return !preg_match('/[^a-z_\-0-9]/i', $db);
			
		} // end function vDBName ($db) 
	
	
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
			# Strip string down to first character
			$sex = strtolower( substr( $sex, 0, 1) );
			
			# Checks if result is 'f' or 'm'
			if ( $sex != "f" OR $sex != "m"  )
				$sex = true;
				
			else 
				$sex = false;
			
			return $sex;
			
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
			return strtolower(substr($sex, 0, 1));
			
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
			# Check if name is set, then echo
			if ( isset( $name ) ) echo $name;
			
			return true;
			
		} // end function kv( $name ) 	
	