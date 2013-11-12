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
	protected $_elements = array();
	protected $_validation = array();
	protected $_prefix = "http";
	protected $_values = array();
	protected $_attributes = array();
	protected $ajax;
	protected $ajaxCallback;
	protected $errorView;
	protected $labelToPlaceholder;
	protected $resourcesPath;
	protected $prevent = array();
	protected $form_id;
	protected $form_class;
	protected $form_method;
	protected $form_action;
	protected $element_name;
	protected $form_token = FALSE;
	protected $form_role = NULL;
	
	
	/**
	 * This method configures the new form
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @param          string
	 * @param          string
	 * @param          string
	 * @param          string
	 * @return         void
	 */
		function __construct( $id = 'form-formula', $class = '', $method = 'POST', $action = '#', $role = NULL )
		{
			$this->form_id = 'form-'.$id;
			$this->form_method = $method;
			$this->form_action = $action;
			$this->form_class = $class;
			$this->form_token = $this->generateFormToken( $this->form_id );
			$this->form_role = $role;
			
			if( $this->form_action == '#' )
				$this->form_action = '#'.$_SESSION[$this->form_id.'_token'];
			
			# Check if HTTPS is on, set prefix to https
			if(isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on")
			$this->_prefix = "https";
			
		} // end function __construct( $id = 'Formula', $method = 'POST' )
		
		
		
	/**
	 * This method calls all of the defined elements
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @return         void
	 */
	 	function openForm( $class = NULL, $id = NULL, $action = FALSE, $role = NULL )
		{
			# Open form and configure
			if( $action != FALSE )
				$this->form_action = $action;

			echo "<form id='$this->form_id' class='$this->form_token $this->form_id $this->form_class $class' method='$this->form_method' action='$this->form_action' role='$role' style = 'padding: 20px'>";

			echo "<input type='hidden' name='$this->form_id-issubmitted' />";
		}
		
	
	/**
	 * This closes the form
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @return         void
	 */
	 	function closeForm()
		{
			# Open form and configure
			echo "</form>";
		}
		
		
	/**
	 * This closes the form
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @return         void
	 */
	 	function isSubmitted()
		{
			if( isset($_POST[$this->form_id.'-issubmitted'] ) )
				return TRUE;
			else
				return FALSE;

		}
				
		
	/**
	 * This method creates the element
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @return         void
	 */
	 	function addElement( $element )
		{
			$id = NULL;
			$class = NULL;
			$eValue = NULL;
			$caption = NULL;
			$label = NULL;
			$placeholder = NULL;
			$value = NULL;
			$type = NULL;
			$name = NULL;
			
			
			foreach( $element as $attribute => $eValue ) 
			{
				# ELEMENT ATTRIBUTES
				switch ( $attribute ) 
				{
					case 'type':
						switch ( $eValue ) 
						{
							case 'button': // Defines a clickable button
							case 'btn': // Defines a clickable button
								$type = 'button';
								break;
								
							case 'checkbox': // Defines a checkbox
								$type = 'checkbox';
								break;
								
							case 'color': // Defines a color picker
								$type = 'color';
								break;
								
							case 'date': // Defines a date control (year, month and day (no time))
								$type = 'date';
								break;
								
							case 'datetime': // Defines a date and time control (year, month, day, hour, minute, second, and fraction of a second, based on UTC time zone)
								$type = 'datetime';
								break;
								
							case 'datetime-local': // Defines a date and time control (year, month, day, hour, minute, second, and fraction of a second (no time zone)
								$type = 'datetime-local';
								break;
								
							case 'email': // Defines a field for an e-mail address
								$type = 'email';
								break;
								
							case 'file': // Defines a file-select field and a "Browse..." button (for file uploads)
								$type = 'file';
								break;
								
							case 'hidden': // Defines a hidden input field
								$type = 'hidden';
								break;
								
							case 'image': // Defines an image as the submit button
								$type = 'image';
								break;
								
							case 'month': // Defines a month and year control (no time zone)
								$type = 'month';
								break;
								
							case 'number': // Defines a field for entering a number
								$type = 'number';
								break;
								
							case 'password': // Defines a password field (characters are masked)
							case 'pass': // Defines a password field (characters are masked)
								$type = 'password';
								break;
								
							case 'radio': // Defines a radio button
								$type = 'radio';
								break;
								
							case 'range': // Defines a control for entering a number whose exact value is not important (like a slider control)
								$type = 'range';
								break;
								
							case 'reset': // Defines a reset button (resets all form values to default values)
								$type = 'reset';
								break;
								
							case 'search': // Defines a text field for entering a search string
								$type = 'search';
								break;
								
							case 'submit': // Defines a submit button
								$type = 'submit';
								break;
								
							case 'tel': // Defines a field for entering a telephone number
								$type = 'tel';
								break;
								
							case 'text': // Default. Defines a single-line text field (default width is 20 characters)
							case 'textbox':
								$type = 'text';
								break;
								
							case 'textarea': // Defines a nulti-line text field
								$type = 'textarea';
								break;
								
							case 'time': // Defines a control for entering a time (no time zone)
								$type = 'time';
								break;
								
							case 'url': // Defines a field for entering a URL
								$type = 'url';
								break;
								
							case 'week': // Defines a week and year control (no time zone)
								$type = 'week';
								break;
							default:
								throw new Exception( 'Invalid attribute with new Element Class. Please check your form. Please use one of the following as defined in W3 Attribute Values. <a href="http://www.w3schools.com/tags/att_input_type.asp" target="_blank">Valid Attribute Values</a>' );
								break 2;
							
						} // end switch ( $eValue ) type
						break;
								
						case 'name':
							if( $eValue != '' && $eValue != NULL && $eValue != FALSE )
								$name = $this->form_id . '-'. preg_replace( '/[^A-Za-z-_]/', "", $eValue );
							else
							{
								throw new Exception( 'Please set a name for your form element.' );
								break 2;
								
							} // end else			
							break;
							
						case 'class':
						case 'classes':
							$class = $eValue;	
							break;
							
						case 'id':
						case 'ids':
							$id = $eValue;	
							break;
							
						case 'placeholder':
							$placeholder = $eValue;	
							break;
						
						case 'label':
							$label = $eValue;	
							break;	
							
						case 'caption':
						case 'captions':
							$caption = $eValue;	
							break;	
							
						case 'value':
							$value = $eValue;	
							break;	
						
				} // end switch ( $rule ) 
				
			} // end foreach( $element as $attribute => $eValue ) 
			
			$errors = array();
			
			# VALIDATION

			if( $this->isSubmitted() )
			{
				foreach( $element as $rule => $msg ) 
				{
					switch ( $rule ) 
					{
						case 'val_req':
						case 'val_required':
							if( empty( $_POST[$name] ) )
								
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
									$errors[$name] = 'This field is required. Please enter a value.';
									
								break 2;
							break;
							
						case 'val_email':
							if( $this->vEmail( $_POST[$name] ) )
								$this->_cleanQuery( $this->sEmail( $_POST[$name] ) );
							else
							{
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
								{ 
									$errors[$name] = ERR_INVALID_NEW_EMAIL;
									break 2;
								}
							}
							break;
							
							
						case 'val_name':
							
							if( $this->vName( $_POST[$name] ) == 1 )
								$this->_cleanQuery( $_POST[$name] );
							else
							{
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
								{ 
									$errors[$name] = ERR_INVALID_NAME;
									break 2;
								}
							}
							break;
							
						case 'val_alpha':
							if( $this->vAlpha( $_POST[$name] ) )
								$this->_cleanQuery( $_POST[$name] );
							else
							{
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
								{ 
									$errors[$name] = ERR_INVALID_ALPHA;
									break 2;
								}
							}
							break;
							
						case 'val_alphanumeric':
							if( $this->vAlphanumeric( $_POST[$name] ) )
								$this->_cleanQuery( $_POST[$name] );
							else
							{
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
								{ 
									$errors[$name] = ERR_INVALID_ALPHANUMERIC;
									break 2;
								}
							}
							break;
							
						case 'val_int':
							if( $this->vInt( $_POST[$name] ) )
								$this->_cleanQuery( $_POST[$name] );
							else
							{
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
								{ 
									$errors[$name] = ERR_INVALID_INT;
									break 2;
								}
							}
							break;
							
						case 'val_number':
							if( $this->vNumber( $_POST[$name] ) )
								$this->_cleanQuery( $_POST[$name] );
							else
							{
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
								{ 
									$errors[$name] = ERR_INVALID_NUMBER;
									break 2;
								}
							}
							break;
							
							
						case 'val_pass':
						case 'val_password':
							if( $this->vPassword( $_POST[$name] ) == 1 )
								$this->_cleanQuery( $_POST[$name] );
							else
							{
								if( !empty( $msg ) ) $errors[$name] = $msg;
								else 
								{ 
									$errors[$name] = ERR_INVALID_PASS;
									break 2;
								}
							}
							break;
							
						case 'val_match':
							
							if( $_POST[$name] == $msg['match'] )
								$this->_cleanQuery( $_POST[$name] );
							else
							{
								if( !array_key_exists('message', $msg ) )
									$errors[$name] = ERR_MM_VALUE;
								else
									$errors[$name] = $msg['message'];
									break 2;
							}
							break;
							
						/* ----------- SANITIZE DATA ------------*/
						
						case 's_query':
							$this->_cleanQuery( $_POST[$name] );
							break;
						
							
							
					} // end switch ( $rule ) 
					
				} // end foreach( $element as $attribute => $eValue ) 
				
			}
			
			/* ####################################### */
			/* ############## ELEMENT ################ */
			
			
			/* ################# */
			/* ##### LABEL ##### */
			
			# Add label if there is one
			if( !empty( $label ) )	
				echo "<label>$label</label>";
			
			/* ##### LABEL ##### */
			/* ################# */
			
			/* ######################## */
			/* ##### ELEMENT TYPE ##### */
			
			
				/* -------------------- Text, Textbox, or Password -------------------- */
				
				if( $type == 'text' || $type == 'textbox' || $type == 'password' || $type == 'email' )
				{
					# Begin creating the input
					$element = "<input type='$type' name='$name' id='$name' placeholder='$placeholder' value='";
					
					# Set value of $name if it's set ( using $_POST , $_GET or $value

					if( isset( $_POST[$name] ) )  $element .= $_POST[$name];
					elseif( isset( $_GET[$name] ) ) $element .= $_GET[$name]; 
					elseif( !isset( $_POST[$name] ) && !isset( $_GET[$name] ) && isset( $value ) ) $element .= $value;
						
					# Set the class
					$element .= "' class='$name $class";
					
					# Add appropriate spacing if there's a caption
					if( !empty( $caption ) ) $element .= " mbt ";
					
					# Check for errors, # Set Error class and display error underneath input
					if( array_key_exists( $name, $errors ) ) $element .= " error ";
					
					# Close text tag	
					$element .= "' />";
					
				} // end if( $type == 'text' || $type == 'textbox' || $type == 'password' )
				
				
				/* -------------------- Textarea -------------------- */
				
				if( $type == 'textarea' )
				{
					# Begin creating the input
					$element = "<textarea type='$type' name='$name' id='$name' placeholder='$placeholder"; 
				
					# Set the class
					$element .= "' class='$name $class ";
					
					# Add appropriate spacing if there's a caption
					if( !empty( $caption ) ) $element .= " mbt ";
					
					# Check for errors, # Set Error class and display error underneath input
					if( array_key_exists( $name, $errors ) ) $element .= " error ";
					
					# Close tag	
					$element .= "' >";
					
					# Set value of $name if it's set ( using $_POST , $_GET or $value
					if( isset( $_POST[$name] ) )  $element .= $_POST[$name];
					elseif( isset( $_GET[$name] ) ) $element .= $_GET[$name]; 
					elseif( !isset( $_POST[$name] ) && !isset( $_GET[$name] ) && isset( $value ) ) $element .= $value;
					
					$element .=  '</textarea>';
					
				} // end if( $type == 'textarea' )
				
				
				/* -------------------- Submit -------------------- */
				
				if( $type == 'submit' || $type == 'button' || $type == 'btn' )
				{
					# Begin creating the input
					$element = "<input type='$type' name='$name' id='$name' value='";
					
					# Set value of $name if it's set ( using $_POST , $_GET or $value
					if( $value != '' || $value != FALSE || $value != NULL )  $element .= $value;
					else $element .= 'Submit';
						
					# Set the class
					$element .= "' class='$name btn btn-default $class ";
					
					# Add appropriate spacing if there's a caption
					if( !empty( $caption ) ) $element .= " mbt ";
					
					# Check for errors, # Set Error class and display error underneath input
					if( array_key_exists( $name, $errors ) ) $element .= " error ";
					
					# Close text tag	
					$element .= "' />";
					
				} // end if( $type == 'textarea' )
			
			
			/* ##### ELEMENT TYPE ##### */
			/* ######################## */
			
			/* ################### */
			/* ##### ERRORS ###### */
			
			# Check for errors
			$error_msg = NULL;
			if( array_key_exists( $name, $errors ) )	
				$error_msg = "<small class='error'>$errors[$name]</small>";
				
			/* ##### ERRORS ###### */
			/* ################### */
			
			/* ################### */
			/* ##### CAPTION ##### */
			
			
			if( !empty( $caption ) )	
				$error_msg .= "<div class='caption mbs'>&uarr; $caption</div>";
				
				
			/* ##### CAPTION ##### */
			/* ################### */	
				
			
			/* ############## ELEMENT ################ */
			/* ####################################### */
			
			
			if( isset( $_POST[$name] ) )
			{
				$output = $_POST[$name];
				$error_field = "<style>input.$name, textarea.$name{ border-color: #c60f13; background-color:rgba(198,15,19,0.1);}</style>".$element;
				if( empty( $errors ) )
					$valid = TRUE;
					
				else
					$valid = FALSE;
				
			}
			else
			{
				$output = FALSE;
				$valid = FALSE;
				$error_msg = FALSE;
				$error_field = FALSE;
				
			}					  
				
			return array( 'element' => $element.$error_msg,
						  'e' => $element.$error_msg,
						  'field' => $element,
						  'f' => $element,
						  'error_field' => $error_field,
						  'ef' => $error_field,
						  'error_msg' => $error_msg,
						  'em' => $error_msg,
						  'output' => $output,
						  'o' => $output,
						  'valid' => $valid, 
						  'v' => $valid,
						  'name' => $name,
						  'n' => $name );
			
		}
	
	/* ############### ELEMENTS ################# */
	
	/**
	 * This method generates a unique token for every session
	 * to prevent against CSFR attacks. Form token must match 
	 * session token
	 *
	 * @since 1.1.1 s9
	 * @return string
	 */	
		function generateFormToken( $form ) {
		
		   // generate a token from an unique value
			$token = md5( uniqid( microtime( ), true) );  
			
			// Write the generated token to the session variable to check it against the hidden field when the form is sent
			$_SESSION[$form.'_token'] = $token; 
			
			return $token;
	
		}
		
	/**
	 * This method generates a unique token for every session
	 * to prevent against CSFR attacks. Form token must match 
	 * session token
	 *
	 * @since 1.1.1 s9
	 * @return string
	 */		
		function verifyFormToken($form) {
		
		// check if a session is started and a token is transmitted, if not return an error
		if(!isset($_SESSION[$form.'_token'])) { 
			return false;
		}
		
		// check if the form is sent with token in it
		if(!isset($_POST['token'])) {
			return false;
		}
		
		// compare the tokens against each other if they are still the same
		if ($_SESSION[$form.'_token'] !== $_POST['token']) {
			return false;
		}
		
		return true;
	}
	
	
	/**
	 * This method method creates a hash for given password
	 *
	 * @since 1.1.1 s8
	 * @param password
	 * @return string
	 */
	 	function get_password_hash( $password )
		{
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
		  return filter_var( $email, FILTER_VALIDATE_EMAIL );
		  
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
				
				return preg_match ("/^[a-zA-ZàáâäãåąćęèéêëìíîïłńòóôöõøùúûüÿýżźñçčšžÀÁÂÄÃÅĄĆĘÈÉÊËÌÍÎÏŁŃÒÓÔÖÕØÙÚÛÜŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u", $name);
						 
		} // end method vName($name)
		
		
	/**
	 * Validate Name Method
	 *
	 * This method function validates alpha characters
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @param          string  name
	 * @return         boolean
	 */
		function vAlpha( $name ) 
		{	  
				return ctype_alpha( $name );
						 
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
			#return filter_var($value, FILTER_VALIDATE_FLOAT); // float
			return filter_var( $value, FILTER_VALIDATE_INT ); # int
			
		} // end method vNumber($value)
		
		
	/**
	 * Validate Numbers Method
	 *
	 * This method function validates if string is an integer ( negative, decimal, etc )
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @param          string  number
	 * @return         boolean
	 */
		function vInt( $value )
		{
			#return filter_var($value, FILTER_VALIDATE_FLOAT); // float
			return filter_var( $value, FILTER_VALIDATE_INT ); # int
			
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
		  return filter_var( $url, FILTER_VALIDATE_URL );
		  
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
		  return filter_var( $ip, FILTER_VALIDATE_IP );
		  
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
		function vdb_name ($db) 
		{
			return !preg_match('/[^a-z_\-0-9]/i', $db);
			
		} // end function vdb_name ($db) 
	
	
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

						if( isset( $_POST[$name] ))
						echo htmlentities($_POST[$name]);

					echo  '</textarea>'
						. '<small class="error">' . $errors[$name] . '</small>';

				} // end if( array_key_exists( $name, $errors ) )

				else
				{
					echo 'class="form-' . $name . ' ' . $classes . '" >';

					# add the input's value, if applicable and strip html special characters
					  if( isset( $_POST[$name] ))
						echo htmlentities($_POST[$name]);

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

 
} // end ClassName