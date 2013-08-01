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
class Form
{
	/**
	 * Create Form Input Method
	 *
	 * This method method streamlines form input and keeps from repeating code
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
	 
		function create_form_input( $name, $type, $errors, $placeholder = '', $classes = '', $ids = '', $postGet = '$_POST', $checked )
		{
			# Check for and process value
			$value = false;
			
			# Set value of $name if it's set
			if( isset( $_POST[$name] ) ) $value = $_POST[$name];
			
			# Strip magic slashes if enabled
			//if( $value && get_magic_quotes_gcp( ) ) $value = stripslashes( $value );
			
			# Check if the input type is text or password
			if( ( $type == 'text' ) || ( $type == 'password' ) )
			{
				# Begin creating the input
				echo '<input type="' . $type . '" name="' . $name . '" id="' . $ids . '" placeholder="' . $placeholder . '" '; 
				
				# add the input's value, if applicable and strip html special characters
				if( isset( $value ) ) 
					echo ' value="' .  $value . '" ';
				
				# Check for errors
				if( array_key_exists( $name, $errors ) )
				{
					# Set Error class and display error underneath input
					echo 'class="form-' . $name . ' ' . $classes . ' error" />'
						. '<small class="error">' . $errors[$name] . '</small>';
					
				} // end if( array_key_exists( $name, $errors ) )
				
				else
				{
					echo 'class="form-' . $name . ' ' . $classes . '" />';
					
				} // end else
				
			} // end if( ( $type == 'text' ) || ( $type == 'password' ) )
			
			elseif( $type == 'textarea' )
			{
				# Begin creating the input
				echo '<textarea name="' . $name . '" id="' . $ids . '" placeholder="' . $placeholder . '" '; 
				
				
				# Check for errors
				if( array_key_exists( $name, $errors ) )
				{
					# Set Error class and display error underneath input
					echo 'class="form-' . $name . ' ' . $classes . ' error" >';
					
					if( isset( $_POST[FORM_NEW_FULL_ADDRESS] ) ) 
						echo  htmlentities($_POST[FORM_NEW_FULL_ADDRESS]);
					
					echo  '</textarea>'
						. '<small class="error">' . $errors[$name] . '</small>';
					
				} // end if( array_key_exists( $name, $errors ) )
				
				else
				{
					echo 'class="form-' . $name . ' ' . $classes . '" >';
					
					# add the input's value, if applicable and strip html special characters
					if( isset( $_POST[FORM_NEW_FULL_ADDRESS] ) ) 
						echo  htmlentities($_POST[FORM_NEW_FULL_ADDRESS]);
					
					echo '</textarea>';
					
					
				} // end else
			
			} // end elseif( $type == 'textarea' )
			
			elseif( $type = 'checkbox' )
			{
				echo  "<label for='checkbox1' class='form-$name $classes' id='$ids'><input type='checkbox' name='$name' ";
				
				if(isset($_POST[FORM_OPT_IN]) && $_POST[FORM_OPT_IN] == 'on') 
				{
					echo " value='" . $_POST[FORM_OPT_IN] . "'";
					
					if( $checked == TRUE )

						 echo  'value="on" CHECKED ';
				}
					
					
				
				
				echo "><span class='mls'>$placeholder</span></label>";
				
			} // end
			
		} // end method create_form_input( $name, $type, $errors, $placeholder = '', $classes = '', $ids = '', $postGet = '$_POST' )
		
	/**
	 * This method method creates a hash for given password
	 *
	 * @since 1.1.1 s8
	 * @param password
	 * @return string
	 */
	 	function get_password_hash( $password )
		{
			$db = new Page( $DBH );
			
			return hash_hmac( 'sha256', $password, 'c#haRl891', false );
			
		} // end method get_password_hash( $password )
	 
		
		
	/**
	 * Validate Email Method
	 *
	 * This method method checks that only valid characters for an email are entered
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  user email
	 * @return         boolean
	 */
		function vEmail( $email )
		{
		  return filter_var( $email, FILTER_VALidATE_EMAIL );
		  
		} // end method vEmail($email)
	
	
	/**
	 * Sanitize Email Method
	 *
	 * This method function strips all invalid characters from email
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
		  
		} // end method sEmail($url)
	
	
	/**
	 * Validate Name Method
	 *
	 * This method function validates names
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
				return preg_match ('/^[A-Z \',.-]{1,30}$/i', $name);
						 
		} // end method vName($name)
	
	/**
	 * Validate Long Name Method
	 *
	 * This method function validates longer names (like combined last names)
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
			  return preg_match ('/^[A-Z \',.-]{1,50}$/i', $name);
						 
		} // end method vName($name)
		
	/**
	 * Validate Full Name Method
	 *
	 * This method function validates full names
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
			  return preg_match ('/^[A-Z \',.-]{1,750}$/i', $name);
						 
		} // end method vName($name)
		
	
	/**
	 * Validate Numbers Method
	 *
	 * This method function validates numbers
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string  number
	 * @return         boolean
	 */
		function vNumber( $value )
		{
			#return filter_var($value, FILTER_VALidATE_FLOAT); // float
			return filter_var( $value, FILTER_VALidATE_INT ); # int
			
		} // end method vNumber($value)
	
	
	/**
	 * Sanitize Numbers Method
	 *
	 * This method function sanitizes numbers
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
			
		} // end method sNumber( $value )
	
	
	/**
	 * Validate Alphanumeric Method
	 *
	 * This method validate alphanumeric strings
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
				
		} // end method vAlphanumeric( $string )
	
	
	/**
	 * Sanitize Alphanumeric Method
	 *
	 * This method sanitize alphanumeric strings
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
				
		} // end method sAlphanumeric( $string )
	
	
	/**
	 * Validate URL Exists Method
	 *
	 * This method function checks if url exists and validates it
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string url
	 * @return         boolean
	 */
		function url_exist($url)
		{
		
		} // end method url_exist($url)
	
	/**
	 * Validate URL Format Method
	 *
	 * This method function validates URLs
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string url
	 * @return         boolean
	 */
		function vUrl( $url )
		{
		  return filter_var( $url, FILTER_VALidATE_URL );
		  
		} // end method vUrl( $url )
	
	
	/**
	 * Sanitize URL Method
	 *
	 * This method function sanitizes URLs
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
		  
		} // end method sUrl( $url )
	
	
	/**
	 * Image Exists Method
	 *
	 * This method function checks if an image exists
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
			
		} // end method image_exist( $img )
	
	
	/**
	 * Validate IP Address Method
	 *
	 * This method function balidates IP addresses
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @param          string ip
	 * @return         boolean
	 */
		function vIP( $ip )
		{
		  return filter_var( $ip, FILTER_VALidATE_IP );
		  
		} // end method vIP( $ip )
	
	
	/**
	 * Validate Proxy Address Method
	 *
	 * This method function validates proxy addresses
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
	 * This method function validates usernames only a-z, A-Z, 0-9, and underscores
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
				
		} // end method vUsername( $username )
	
	
	/**
	 * Validate Strong Password Method
	 *
	 * This method function validates passwords, require 8 char,
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
				
		} // end method vPassword( $password )
		
	/**
	 * Validate Strong Password  w/ custom errors Method
	 *
	 * This method function validates passwords, require 8 char,
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
			
		} // end method vPassword2() 
	
	
	/**
	 * Validate US Phone Number Method
	 *
	 * This method function validates US Phone Number
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s5
	 * @params         string  phone number
	 * @return         boolean
	 */
		function vUSPhone( $phoneNo )
		{
			# Checks if number has dashes
			if( strpos( $phoneNo,'-' ) )
				return preg_match('/\(?\d{3}\)?[-\s.]?\d{3}[-\s.]\d{4}/x', $phoneNo);
				
			# Checks if number has periods
			elseif( strpos( $phoneNo,'.' ) )
				return preg_match('/\(?\d{3}\)?[.]?\d{3}[.]\d{4}/x', $phoneNo);
			
			# Validate just numbers	
			else
				return preg_match('/\(?\d{3}\)?\d{3}\d{4}/x', $phoneNo);
			
		} // end method vUSPhone( $phoneNo )
		
	
	/**
	 * Validate US Social Security Numbers Method
	 *
	 * This method function validates US Social Security Numbers
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
				
		} // end method vUS_SSC($ssn)
	
	
	/**
	 * Validate Credit Card Numbers Method
	 *
	 * This method function validates Credit Card Numbers
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
			
		} // end method vCC( $cc )
		
	
	/**
	 * Validate Date Method
	 *
	 * This method function validates dates
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
			
		} // end method vDate( $date )
	
	
	/**
	 * Validate Hexicolor Codes Method
	 *
	 * This method function validates hexicolor codes
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
			
		} // end method vColor( $color )
	
	
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
	 * This method makes data safe.
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
	 * This method validates MySQL database name.
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
	 * This method validates a persons sex
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
	 * This method sanitizes a persons sex
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
	 * This method checks if form name is set
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
		
	
	
	/**
	 * Use: Anything that shouldn't contain html (pretty much
	 * everything that is not a textarea)
	 *
	 * Restores the added slashes (ie.: " I\'m John " for security
	 * in output, and escapes them in htmlentities(ie.:  &quot; etc.)
	 * Also strips any <html> tags it may encouter
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @params         string
	 * @return         string
	 */
		function stripcleantohtml( $s )
		{
			return htmlentities(trim(strip_tags(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
		} // end 
		
	
	/**
	 * Use: For input fields that may contain html, like a textarea
	 *
	 * Restores the added slashes (ie.: " I\'m John " for security in output,
	 * and escapes them in htmlentities(ie.:  &quot; etc.)
	 * It preserves any <html> tags in that they are encoded aswell (like &lt;html&gt;)
	 * As an extra security, if people would try to inject tags that would 
	 * become tags after stripping away bad characters,
	 * we do still strip tags but only after htmlentities, so any genuine
	 * code examples will stay
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @params         string
	 * @return         string
	 */
		function cleantohtml( $s )
		{
		
			return strip_tags(htmlentities(trim(stripslashes($s))), ENT_NOQUOTES, "UTF-8");
		} // end function cleantohtml( $s )
 
} // end ClassName