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
	protected $DBH = NULL;
	protected $form = NULL;
	protected $first_name = NULL;
	protected $last_name = NULL;
	protected $username = NULL;
	protected $email = NULL;
	protected $register = NULL;
	protected $register_errors = NULL;
	protected $uoe = NULL;
	protected $pass = NULL;
	protected $pass2 = NULL;
	protected $submit = NULL;
	protected $publickey = NULL;
	protected $privatekey = NULL;
	protected $catcha_valid = NULL;
	protected $valid_username = NULL;
	protected $valid_email = NULL;
	protected $valid_pass = NULL;
	protected $ata = NULL;
	protected $stmt = NULL;
	protected $STH = NULL;
	protected $err = NULL;
	protected $row = NULL;
	
	# Set Errors array
	public $login_errors = array();

	
	function __construct( Database $DBH )
	{
		$this->DBH = $DBH;
		
	}
	
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
		function loginTools()
		{
			
			/* ############################# */
			/* ##### SET FORM ELEMENTS ##### */
			if( the_page_slug() == '' )
				$action = SITE_URL.'admin/login';
			else
				$action = '#';
			
			$this->form = new Form( 'system-login', 'mxw300 mCenter', 'POST', $action );
			$this->uoe = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'text', // REQUIRED
					'name'        => 'uoe', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'Username or Email',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => ''
			) ); // end $siteTitle = new Element
			
			$this->pass = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'password', // REQUIRED
					'name'        => 'pass', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'Password',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => ''
				
			) ); // end $siteTitle = new Element
			
			$this->submit = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'submit', // REQUIRED
					'name'        => 'submit', // REQUIRED a-z only, dashes, underscores, no spaces
					'class'       => 'btn-primary',
					'value'       => 'Login',
			) ); // end $siteTitle = new Element
			
			$this->signup = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'button', // REQUIRED
					'name'        => 'signup', // REQUIRED a-z only, dashes, underscores, no spaces
					'value'       => 'Signup',
			) ); // end $siteTitle = new Element
				
			
			/* ##### SET FORM ELEMENTS ##### */
			/* ############################# */
			
			$this->login_errors = array();
			
			/* ##################################### */
			/* ##### CONTINUE AFTER VALIDATION ##### */
			
			require_once SYS_INC_URI.'recaptchalib.inc.php';
			$this->publickey = "6Ld3j-YSAAAAAJ52zWpNX43mQuDA0p36y6M0w-P-"; // you got this from the signup page
			$this->privatekey = '6Ld3j-YSAAAAAOdN76K3Nb15CC_Sv-UdgCGFUU-z';
			
			$this->catcha_valid = TRUE;
			
			
			if( $this->form->isSubmitted() && $this->uoe['v'] && $this->pass['v'] )
			{ 
				# Check credentials
				try 
				{   
					# values in the select statement.  
					if( strpos( $this->uoe['o'], '@') )
					{
						$this->username_valid = NULL;
						$this->this->email_valid = $this->uoe['output'];
					}
					else
					{
						$this->username_valid = $this->uoe['output'];
						$this->email_valid = NULL;
						
					}
					
					$this->pass_valid = get_password_hash( $this->pass['output'] );
					
					try 
					{  
						
						$this->data = array( $this->username_valid, $this->email_valid, $this->pass_valid );
						$this->stmt = "INSERT INTO shdw_login_failed_attempts ( username, email, pass )
												VALUES ( ?, ?, ? )";
						$this->STH = $this->DBH->prepare( $this->stmt );  
						$this->STH->execute( $this->data );  
					
					}  
					catch(PDOException $e) {
						$err = new Error;  
						$err->exceptionHandler( $e );  
					}  
					
					$this->STH = $this->DBH->prepare("SELECT id, username, primaryEmail, firstName, lastName, role, releaseLevel, pass FROM shdw_users WHERE ( `username` = :username OR `primaryEmail` = :email ) AND pass = :pass");  
					$this->STH->execute( array(
						':username' => $this->username_valid,
						':email'    => $this->email_valid,
						':pass'     => $this->pass_valid
						));
					  
					# setting the fetch mode  
					$this->STH->setFetchMode( PDO::FETCH_ASSOC );
					
					# Check if there was a match
					if( $this->STH->rowCount() == 1 && $this->catcha_valid )
					{
						while($this->row = $this->STH->fetch( ) ) 
						{  
							# Set Session Variables from the database
							$_SESSION['user_id'] = $this->row['id']; 
							$_SESSION['username'] = $this->row['username']; 
							$_SESSION['email'] = $this->row['primaryEmail']; 
							$_SESSION['firstName'] = $this->row['firstName'];
							$_SESSION['lastName'] = $this->row['lastName'];
							$_SESSION['pass'] = $this->row['pass']; 
							$_SESSION['role'] = $this->row['role']; 
							$_SESSION['releaseLevel'] = $this->row['releaseLevel'];
							
						}  // while($row = $STH->fetch( ) ) 
						
						header('Location: '.SITE_URL);
exit;
					}
					else
					{
						$this->login_errors['mm_credentials'] = ERR_MM_LOGIN;
						
						# Get number of failed login attempts in the last two hours
						$this->STH = $this->DBH->prepare("SELECT datetimeFailed FROM shdw_login_failed_attempts WHERE ( `username` = :username OR `email` = :email ) AND datetimeFailed >+ '".date( "Y-m-d H:i:s", time()-ONE_HOUR*2 )."'" );  
						$this->STH->execute( array(
							':username' => $this->username_valid,
							':email'    => $this->email_valid
							));
						  
						# setting the fetch mode  
						$this->STH->setFetchMode( PDO::FETCH_ASSOC );
						
						// The metrics used are somewhat arbitrary, but seem to work well.
						if ( $this->STH->rowCount() >= 15 )
						{
							sleep( $this->STH->rowCount() * ONE_SECOND * 3);
							define( 'CATCHA', TRUE );
							
							// At this point we are pretty positive its a brute force attempt:
					 
							// At the 30th failure, we send an email to support about the brute force attempt.
							if ( $this->STH->rowCount() >= 10 || $this->STH->rowCount() == 20 )
								$message = "Attempted brute force of username/email: " . $this->uoe['output'] . " from IP: " . $_SERVER['REMOTE_ADDR'] . " on ". SITE_NAME . " at ". SITE_URL . '. ' . $this->STH->rowCount() . " Attempts. Time UTC: " . date( 'Y-m-d H:i:s', time() . 'TAKE IMMEDIATE ACTION!' );
								$headers = "From: " . ADMIN_EMAIL . "\r\n" .
								"Reply-To:" . ADMIN_EMAIL . "\r\n" .
								'X-Mailer: PHP/' . phpversion();
								$headers .= "X-Priority: 1 (Highest)\n";
								$headers .= "X-MSMail-Priority: High\n";
								$headers .= "Importance: High\n";
							
								// Send
								mail( ADMIN_EMAIL, 'BRUTE FORCE ATTACK DETECTED! - ' . SITE_URL . ' WARNING! WARNING! WARNING!', $message, $headers );
								
							// Sleep between 15 seconds and 1 min per request
						}
						elseif ( $this->STH->rowCount() >= 5 )
						{
							// Sleep between 9 and 21 seconds
							// Enable Captcha
							sleep( $this->STH->rowCount() * ONE_SECOND * 2);
							if( !defined( 'CATCHA' ) )
								define( 'CATCHA', TRUE );
							if( isset( $_POST["recaptcha_challenge_field"] ) )
							{
								$this->catcha_valid = recaptcha_check_answer ($this->privatekey,
									$_SERVER["REMOTE_ADDR"],
									$_POST["recaptcha_challenge_field"],
									$_POST["recaptcha_response_field"]);
							}
							
						}
						elseif ( $this->STH->rowCount() >= 3 )
						{
							// Sleep between 1.5 seconds and 7 seconds.
							sleep( $this->STH->rowCount() * HALF_SECOND);
							// No Captcha
				
						}
					}
				}
				catch(PDOException $e) {  
					exceptionHandler( $e );  
				} 
				
			} // end error check
			
			/* ##### CONTINUE AFTER VALIDATION ##### */
			/* ##################################### */
			 
			return true;
		}
		
		
	/**
	 * Creates login form
	 *
	 * @since 1.1.1 s9
	 * @return Void
	 */	
		function loginForm( $type = 'stacked' )
		{
			if( !is_logged_in() )
			{
				$this->loginTools();
				
				/* #################### */
				/* ##### THE FORM ##### */
				
				if( !$this->form->isSubmitted() || !$this->uoe['v'] || !$this->pass['v'] || !empty( $this->login_errors ) || !$this->catcha_valid )
				{ 
					if( $type == 'stacked' )
					{
					?>
						<?php $this->form->openForm(); ?>
							<h3 class="mbt pull-left">Sign in</h3>
							<h3 class="pull-right"><small class="text-muted txtR"><?php echo SITE_NAME; ?></small></h3>
							<hr class="mbn"/>
							<?php if( isset( $this->login_errors['mm_credentials'] ) ) 
								echo $this->login_errors['mm_credentials']; ?>
							<?= $this->uoe['e']; ?>
							<?= $this->pass['e']; ?>
							<?php
								# Catcha Element after 7 invalid attempts
								if( defined( 'CATCHA' ) )
									echo recaptcha_get_html($this->publickey);
							?>
							<?= $this->submit['e']; ?> <?= $this->signup['e']; ?>
							<div class="mtm"><a href="#">Can't access your account?</a></div>
						<?php $this->form->closeForm(); ?>
					<?php
					}
					elseif( $type == 'inline' )
					{ ?>
						<?php $this->form->openForm( 'form-inline mxw600 pan', '', FALSE, 'form' ); ?>
							<h3 class="mbt pull-left sr-only">Sign in</h3>
							<h3 class="pull-right sr-only"><small class="text-muted txtR"><?php echo SITE_NAME; ?></small></h3>
							<?php if( isset( $this->login_errors['mm_credentials'] ) ) 
								echo $this->login_errors['mm_credentials']; ?>
							<div class="form-group">
								<div class="mxw150 ilb">
									<?= $this->uoe['e']; ?>
								</div>
								<div class="mxw150 ilb">
									<?= $this->pass['e']; ?>
								</div>
								<?php
									# Catcha Element after 7 invalid attempts
									if( defined( 'CATCHA' ) )
										echo recaptcha_get_html($this->publickey);
								?>
								<?= $this->submit['e']; ?>
							</div><!-- end form-group -->
						<?php $this->form->closeForm(); ?>
						
					<?php }
					
					elseif( $type == 'responsive-inline' )
					{ ?>
                    	<a href="<?php echo SITE_URL; ?>admin/login" class="btn btn-primary visible-xs">Login</a>
						<?php 
						$this->form->openForm( 'form-inline mxw600 pan hidden-xs', '', FALSE, 'form' ); ?>
							<h3 class="mbt pull-left sr-only">Sign in</h3>
							<h3 class="pull-right sr-only"><small class="text-muted txtR"><?php echo SITE_NAME; ?></small></h3>
							<?php if( isset( $this->login_errors['mm_credentials'] ) ) 
								echo $this->login_errors['mm_credentials']; ?>
							<div class="form-group">
								<div class="mxw150 ilb">
									<?= $this->uoe['e']; ?>
								</div>
								<div class="mxw150 ilb">
									<?= $this->pass['e']; ?>
								</div>
								<?php
									# Catcha Element after 7 invalid attempts
									if( defined( 'CATCHA' ) )
										echo recaptcha_get_html($this->publickey);
								?>
								<?= $this->submit['e']; ?>
							</div><!-- end form-group -->
						<?php $this->form->closeForm(); ?>
						
					<?php }
				
				} // end else 
				
				/* ##### THE FORM ##### */
				/* #################### */
				
			} // end is_logged_in()
              
			
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
			 * has a record of the session id. Sends cookie with the same session name,
			 but no value ( no session id ) and expiration of five minutes ago */
			setcookie( session_name(), '', time()-300 );	
			
			return true;
			
		}
		
		
	/**
	 * Creates login form
	 *
	 * @since 1.1.1 s9
	 * @return Void
	 */	
		function registerForm()
		{
			if( !is_logged_in() )
			{
			
			$this->form = new Form( 'register');
			$this->first_name = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'text', // REQUIRED
					'name'        => 'fname', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'First Name',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => '',
					'val_name'     => ''
			) ); // end $firstName = new Element
			
			$this->last_name = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'text', // REQUIRED
					'name'        => 'lname', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'Last Name',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => '',
					'val_name'     => ''
			) ); // end $lastName = new Element
			
			$this->username = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'text', // REQUIRED
					'name'        => 'username', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'Username',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => '',
					'val_username'=> ERR_INVALID_NEW_USERNAME
			) ); // end $username = new Element
			
			$this->email = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'text', // REQUIRED
					'name'        => 'email', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'Email',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => '',
					'val_email'     => ERR_INVALID_NEW_EMAIL
			) ); // end $lastName = new Element
			
			$this->pass = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'password', // REQUIRED
					'name'        => 'pass', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'Password',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => '',
					'val_password'=> '' 
				
			) ); // end $pass = new Element
			
			$this->pass2 = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'password', // REQUIRED
					'name'        => 'pass-two', // REQUIRED a-z only, dashes, underscores, no spaces
					'placeholder' => 'Confirm Password',
					# VALIDATION  => Custom Error Message
					# RULE           Leave blank for default message
					'val_req'     => '',
					'val_password'=> '' 
				
			) ); // end $pass = new Element
			
			$this->register = $this->form->addElement( array( 
					# ELEMENT ATTRIBUTES 
					'type'        => 'submit', // REQUIRED
					'name'        => 'register', // REQUIRED a-z only, dashes, underscores, no spaces
					'class'       => 'btn-success btn-block',
					'value'       => 'Register',
			) ); // end $siteTitle = new Element
				
			
			/* ##### SET FORM ELEMENTS ##### */
			/* ############################# */
			
			$this->register_errors = array();
			
			/* ##################################### */
			/* ##### CONTINUE AFTER VALIDATION ##### */
				
			# Check password matches
			if( $this->pass['v'] && $this->pass2['v'] && $this->pass['o'] != $this->pass2['o'] )
			{
				$this->pass['v'] = FALSE;
				$this->pass2['v'] = FALSE;
				$this->pass['em'] = "<small class='error'>".ERR_MM_PASS."</small>";
				//$this->register_errors['mm_password'] = '<div class="alert alert-danger">'.ERR_MM_PASS.'</div>';
			}
			
			# Check for username or email in database
			
			if( $this->form->isSubmitted() && $this->first_name['v'] && $this->last_name['v'] && $this->username['v'] && $this->email['v'] && $this->pass['v'] && $this->pass2['v'] )
			{ 
				
				if( $this->pass['o'] == $this->pass2['o'] )
				{
					# Set valid outputs
					$this->username_valid = $this->username['o'];
					$this->email_valid = $this->email['o'];
					
					$this->STH = $this->DBH->prepare("SELECT username, primaryEmail FROM shdw_users WHERE ( `username` = :username OR `primaryEmail` = :email )");  
					$this->STH->execute( array(
						':username' => $this->username_valid,
						':email'    => $this->email_valid,
						));
					  
					# setting the fetch mode  
					$this->STH->setFetchMode( PDO::FETCH_ASSOC );
					
					# Check if there was a match
					if( $this->STH->rowCount() == 1 )
						echo 'email or username exist in database';
					else
						echo 'all good';
				
					
					
				} // end if( $this->pass['o'] == $this->pass2['o'] )
				
			} // end error check
			
			/* ##### CONTINUE AFTER VALIDATION ##### */
			/* ##################################### */
			 
				
				/* #################### */
				/* ##### THE FORM ##### */
				
				if( !$this->form->isSubmitted() || !$this->uoe['v'] || !$this->pass['v'] || !empty( $this->register_errors ) )
				{ 
					?>
						<?php $this->form->openForm( 'mxw600 mCenter' ); ?>
                        	<div class="row">
                            	<div class="col-xs-12">
                                	<h3 class="mbt pull-left">Register</h3>
                                    <h3 class="pull-right"><small class="text-muted txtR"><?php echo SITE_NAME; ?></small></h3>
                                    <hr class="mbn"/>
                                </div><!-- end col-xs-12 -->
                            </div><!-- end row -->
                           	<div class="row">
                            	<div class="col-xs-12 col-sm-6">
									<?= $this->first_name['e']; ?>
                               	</div><!-- end col-xs-12 col-sm-6 -->
                                <div class="col-xs-12 col-sm-6">
									<?= $this->last_name['e']; ?>
                               	</div><!-- end col-xs-12 col-sm-6 -->
                            </div><!-- end row -->
                            <div class="row">
                            	<div class="col-xs-12 col-sm-6">
									<?= $this->username['e']; ?>
                               	</div><!-- end col-xs-12 col-sm-6 -->
                                <div class="col-xs-12 col-sm-6">
									<?= $this->email['e']; ?>
                               	</div><!-- end col-xs-12 col-sm-6 -->
                            </div><!-- end row -->
                            <div class="row">
                            	<div class="col-xs-12">
                                	<?php if( isset( $this->register_errors['mm_password'] ) ) 
                                        echo $this->register_errors['mm_password']; ?>
                                </div><!-- end col-xs-12 -->
                            </div><!-- end row -->
                            <div class="row">
                            	<div class="col-xs-12 col-sm-6">
                                	<?php if( !$this->pass['em'] ) : ?>
										<?= $this->pass['f']; ?>
                                   	<?php else : ?>
                                    	<?= $this->pass['ef']; ?>
                                    <?php endif; ?>
                                    <?= $this->pass['em']; ?>
                               	</div><!-- end col-xs-12 col-sm-6 -->
                                <div class="col-xs-12 col-sm-6">
									<?php if( !$this->pass['em'] ) : ?>
										<?= $this->pass['f']; ?>
                                   	<?php else : ?>
                                    	<?= $this->pass['ef']; ?>
                                    <?php endif; ?>
                                    <?= $this->pass2['em']; ?>
                               	</div><!-- end col-xs-12 col-sm-6 -->
                            </div><!-- end row -->
                            <div class="row">
                            	<div class="col-xs-12">
                                	<?= $this->register['e']; ?>
                                </div><!-- end col-xs-12 -->
                          	</div><!-- end row -->
						<?php $this->form->closeForm(); ?>
				
				<?php } // end else 
				
				/* ##### THE FORM ##### */
				/* #################### */
				
			} // end is_logged_in()
              
			
			 return true;
			
		} // end method loginForm()
		
	
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
	
	/**
	 * This method returns the site name
	 *
	 * @since 1.3.0
	 * @return string
	 */
	 	function theSiteName()
		{
			return SITE_NAME;
				
		} // end method the_site_name()
		
	/**
	 * This method echos the site name
	 *
	 * @since 1.3.0
	 * @return string
	 */
	 	function getSiteName()
		{
			echo  $this->theSiteName();
				
		} // end method the_site_name()
		
	/**
	 * This method returns the site's first initial
	 *
	 * @since 1.3.0
	 * @return string
	 */
	 	function theSiteInitial()
		{
			return substr( SITE_NAME, 0, 1 );
				
		} // end method the_site_initial()
		
	/**
	 * This method echos the site's first initial
	 *
	 * @since 1.3.0
	 * @return string
	 */
	 	function getSiteInitial()
		{
			echo $this->theSiteInitial();
				
		} // end method the_site_initial()
 
} // end Admin