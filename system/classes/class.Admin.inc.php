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
class Admin
{
	# Set Errors array
	public $login_errors = array();

	
	
	/**
	 * Determines if user is logged in
	 *
	 * @since 1.1.1 s8
	 * @return Boolean
	 */
	 	function isLoggedIn()
		{
			if( isset($_SESSION['username'] ) AND isset($_SESSION['user_id'] ) )
				return TRUE;
				
			else
				return FALSE;
				
		} // end function is_logged_in()
		
	
	/**
	 * Determines if user is an Admin user
	 *
	 * @since 1.1.1 s8
	 * @return Boolean
	 */
	 	function isAdmin()
		{
			if( isset($_SESSION['role'] ) )
			{	
				if( $_SESSION['role'] == 'admin' )
					return TRUE;
				else
					return FALSE;
			}
			else
				return FALSE;
				
		} // end function is_logged_in()
		
	/**
	 * Determins if user is logged in and sets appropriate SESSION Varibales
	 *
	 * @since 1.1.1 s9
	 * @return Void
	 */	
		function loginTools( )
		{
			$errors = $this->login_errors;
			# Check for form submission
			if( $_SERVER['REQUEST_METHOD'] == 'POST' )
			{
				# Full name validation and santization
				if( !empty( $_POST[FORM_USERNAME_EMAIL] ) )
				{
					$ue = _cleanQuery( $_POST[FORM_USERNAME_EMAIL] );
					
				} else $this->login_errors[FORM_USERNAME_EMAIL] = ERR_EMPTY_USERNAME_EMAIL;
			
				# Password validation and santization
				if( !empty( $_POST[FORM_PASS] ) )
				{
					$p = get_password_hash( _cleanQuery( $_POST[FORM_PASS] ) );
					
				} else $this->login_errors[FORM_PASS] = ERR_EMPTY_PASS;
				
				
				if ( empty( $this->login_errors ) ) 
				{ // OK to proceed!
				
					# Call the database
					require_once( DB );

					$host = DB_HOST;
					$dbname = DB_NAME;
					$user = DB_USER;
					$pass = DB_PASSWORD;
					
					/**
					 * connect to the database  
					 */
						try 
						{  
							# Connect to mysql using credentials
							$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);  		
							# Set Error handling method
							$DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
						  
						}  
						catch(PDOException $e) {  
							echo "Could not connect to database";  
							file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
						} 
						
					/**
					 * FETCH_ASSOC
					 *
					 * This fetch type creates an associative array, indexed by column name.
					 */
						try 
						{  
							# using the shortcut ->query() method here since there are no variable  
							# values in the select statement.  
							$STH = $DBH->query("SELECT ID, username, email, first_name, last_name, role, release_level, pass FROM shdw_users WHERE ( `username` = '$ue' OR `email` = '$ue' ) AND pass = '$p'");  
							  
							# setting the fetch mode  
							$STH->setFetchMode( PDO::FETCH_ASSOC );
							
							# Check if there was a match
							if( $STH->rowCount( ) == 1 )
							{
								while($row = $STH->fetch( ) ) 
							{  
								# Set Session Variables from the database
								$_SESSION['user_id'] = $row['ID']; 
								$_SESSION['username'] = $row['username']; 
								$_SESSION['email'] = $row['email']; 
								$_SESSION['first_name'] = $row['first_name'];
								$_SESSION['last_name'] = $row['last_name'];
								$_SESSION['pass'] = $row['pass']; 
								$_SESSION['role'] = $row['role']; 
								$_SESSION['release_level'] = $row['release_level'];
								
							}  // while($row = $STH->fetch( ) ) 
							
							header( 'Location:'. SITE_URL );
							exit;
								
							} // end $STH->setFetchMode( PDO::FETCH_ASSOC );
							
							else
							{
								$this->login_errors['login'] = ERR_MM_LOGIN;
								
							} // end else
							
						}  
						catch(PDOException $e) {  
							echo "Could not fetch data.";  
							file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
						} 
						
				} // end if (empty($this->login_errors)) { // OK to proceed!
					 
			 } // end if( empty( $this->login_errors ) )
			 
			return true;
		}
		
		
	/**
	 * Creates login form
	 *
	 * @since 1.1.1 s9
	 * @return Void
	 */	
		function loginForm()
		{
			$this->loginTools();
			
			if( !$this->isLoggedIn() )
			{
				# Create an empty error array if it doesn't already exist:
				if (!isset($this->login_errors)) $this->login_errors = array();
				?>
				
				<div class="shdw-login-form">
					<h2>Login</h2>
					<form class="custom" action="#" method="POST">
						<?php if(array_key_exists( 'login', $this->login_errors ) ) {
							echo  $this->login_errors['login'];
						}?>
						<div class="row">
							<?php create_form_input( FORM_USERNAME_EMAIL, 'text', $this->login_errors, 'Username or Email (Required)', 'mbt' ); ?>
						</div><!-- end row -->
						<div class="row">
							<?php create_form_input( FORM_PASS, 'password', $this->login_errors, 'Password' ); ?>
						</div><!-- end row -->
						<input name="<?php echo FORM_SUBMIT; ?>" type="submit" class="primary button" value="Login" />
					</form>
				</div><!-- end shdw-login-form -->
                
            
            <?php }
			
			 return true;
			
		} // end method loginForm()
		
		
	/**
	 * Clears session data, logs user out
	 *
	 * @since 1.1.1 s9
	 * @return Void
	 */		
		function logout()
		{
			# Clears the session array that represents the variables available to the script
			$_SESSION = array( );
			
			# Removes the data stored on the server:
			session_destroy( );
			
			/* Modify the session cookie in the user's browser so it no longer
			 * has a record of the session ID. Sends cookie with the same session name,
			 but no value ( no session ID ) and expiration of five minutes ago */
			setcookie( session_name(), '', time()-300 );	
			
			return true;
			
		}
		
	
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
	 * Gets the users real IP Address
	 *
	 * @package        Shadow   
	 * @author         Super Amazing
	 * @since          Version 0.1.1 s9
	 * @params         string
	 * @return         string
	 */
		function getRealIp() {
		   if (!empty($_SERVER['HTTP_CLIENT_IP'])) {  //check ip from share internet
			 $ip=$_SERVER['HTTP_CLIENT_IP'];
		   } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  //to check ip is pass from proxy
			 $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		   } else {
			 $ip=$_SERVER['REMOTE_ADDR'];
		   }
		   return $ip;
		}
	
	
	/**
	 * Logs attempts at hacks on forms. ( Or emails if log fails )
	 *
	 * @since 1.1.1 s9
	 * @return string
	 */	
		function writeLog( $where ) {
	
		$ip = $_SERVER["REMOTE_ADDR"]; // Get the IP from superglobal
		$host = gethostbyaddr($ip);    // Try to locate the host of the attack
		$date = date("d M Y");
		
		// create a logging message with php heredoc syntax
		$logging = <<<LOG
		\n
		<< Start of Message >>
		There was a hacking attempt on your form. \n 
		Date of Attack: {$date}
		IP-Adress: {$ip} \n
		Host of Attacker: {$host}
		Point of Attack: {$where}
		<< End of Message >>
LOG;
        
        // open log file
		if($handle = fopen('hacklog.log', 'a')) {
		
			fputs($handle, $logging);  // write the Data to file
			fclose($handle);           // close the file
			
		} else {  // if first method is not working, for example because of wrong file permissions, email the data
		
        	$to = ADMIN_EMAIL;  
        	$subject = 'HACK ATTEMPT';
        	$header = 'From:'. ADMIN_EMAIL.'';
        	if (mail($to, $subject, $logging, $header)) {
        		echo "Sent notice to admin.";
        	}

		}
	}
 
} // end ClassName