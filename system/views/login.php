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
 * This script sets template for Login Screen
 */
 
// --------------------------------------------------------------------------------
app_header(); 


/* ############################# */
/* ##### SET FORM ELEMENTS ##### */

$form = new Form( 'system-login' );
$uoe = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'text', // REQUIRED
		'name'        => 'uoe', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Username or Email',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => ''
) ); // end $siteTitle = new Element

$pass = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'password', // REQUIRED
		'name'        => 'pass', // REQUIRED a-z only, dashes, underscores, no spaces
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => ''
	
) ); // end $siteTitle = new Element

$submit = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'submit', // REQUIRED
		'name'        => 'submit', // REQUIRED a-z only, dashes, underscores, no spaces
		'class'       => 'btn-primary',
		'value'       => 'Login',
) ); // end $siteTitle = new Element
	

/* ##### SET FORM ELEMENTS ##### */
/* ############################# */

$form->openForm();
$login_errors = array();

/* ##################################### */
/* ##### CONTINUE AFTER VALIDATION ##### */

require_once SYS_INC_URI.'recaptchalib.inc.php';
$publickey = "6Ld3j-YSAAAAAJ52zWpNX43mQuDA0p36y6M0w-P-"; // you got this from the signup page
$privatekey = '6Ld3j-YSAAAAAOdN76K3Nb15CC_Sv-UdgCGFUU-z';

$catcha_valid = TRUE;


if( $form->isSubmitted() && $uoe['v'] && $pass['v'] )
{ 
	# Check credentials
	try 
	{   
		# values in the select statement.  
		if( strpos( $uoe['o'], '@') )
		{
			$username_valid = NULL;
			$email_valid = $uoe['output'];
		}
		else
		{
			$username_valid = $uoe['output'];
			$email_valid = NULL;
			
		}
		
		$pass_valid = get_password_hash( $pass['output'] );
		
		try 
		{  
			
			$data = array( $username_valid, $email_valid, $pass_valid );
			$stmt = "INSERT INTO shdw_login_failed_attempts ( username, email, pass )
									VALUES ( ?, ?, ? )";
			$STH = $this->DBH->prepare( $stmt );  
			$STH->execute( $data );  
		
		}  
		catch(PDOException $e) {  
			exceptionHandler( $e );  
		}  
		
		$STH = $this->DBH->prepare("SELECT id, username, primaryEmail, firstName, lastName, role, releaseLevel, pass FROM shdw_users WHERE ( `username` = :username OR `primaryEmail` = :email ) AND pass = :pass");  
		$STH->execute( array(
			':username' => $username_valid,
			':email'    => $email_valid,
			':pass'     => $pass_valid
			));
		  
		# setting the fetch mode  
		$STH->setFetchMode( PDO::FETCH_ASSOC );
		
		# Check if there was a match
		if( $STH->rowCount() == 1 && $catcha_valid )
		{
			while($row = $STH->fetch( ) ) 
			{  
				# Set Session Variables from the database
				$_SESSION['user_id'] = $row['id']; 
				$_SESSION['username'] = $row['username']; 
				$_SESSION['email'] = $row['primaryEmail']; 
				$_SESSION['firstName'] = $row['firstName'];
				$_SESSION['lastName'] = $row['lastName'];
				$_SESSION['pass'] = $row['pass']; 
				$_SESSION['role'] = $row['role']; 
				$_SESSION['releaseLevel'] = $row['releaseLevel'];
				
			}  // while($row = $STH->fetch( ) ) 
			
			echo '<div class="alert alert-success">Successfully logged in</div>';
		}
		else
		{
			$login_errors['mm_credentials'] = ERR_MM_LOGIN;
			
			# Get number of failed login attempts in the last two hours
			$STH = $this->DBH->prepare("SELECT datetimeFailed FROM shdw_login_failed_attempts WHERE ( `username` = :username OR `email` = :email ) AND datetimeFailed >+ '".date( "Y-m-d H:i:s", time()-ONE_HOUR*2 )."'" );  
			$STH->execute( array(
				':username' => $username_valid,
				':email'    => $email_valid
				));
			  
			# setting the fetch mode  
			$STH->setFetchMode( PDO::FETCH_ASSOC );
			
			// The metrics used are somewhat arbitrary, but seem to work well.
			if ( $STH->rowCount() >= 15 )
			{
				sleep( $STH->rowCount() * ONE_SECOND * 3);
				define( 'CATCHA', TRUE );
				
				// At this point we are pretty positive its a brute force attempt:
		 
				// At the 30th failure, we send an email to support about the brute force attempt.
				if ( $STH->rowCount() >= 10 || $STH->rowCount() == 20 )
					$message = "Attempted brute force of username/email: " . $uoe['output'] . " from IP: " . $_SERVER['REMOTE_ADDR'] . " on ". SITE_NAME . " at ". SITE_URL . '. ' . $STH->rowCount() . " Attempts. Time UTC: " . date( 'Y-m-d H:i:s', time() . 'TAKE IMMEDIATE ACTION!' );
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
			elseif ( $STH->rowCount() >= 5 )
			{
				// Sleep between 9 and 21 seconds
				// Enable Captcha
				sleep( $STH->rowCount() * ONE_SECOND * 2);
				define( 'CATCHA', TRUE );
				if( isset( $_POST["recaptcha_challenge_field"] ) )
				{
					$catcha_valid = recaptcha_check_answer ($privatekey,
						$_SERVER["REMOTE_ADDR"],
						$_POST["recaptcha_challenge_field"],
						$_POST["recaptcha_response_field"]);
				}
				
			}
			elseif ( $STH->rowCount() >= 3 )
			{
				// Sleep between 1.5 seconds and 7 seconds.
				sleep( $STH->rowCount() * HALF_SECOND);
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

/* #################### */
/* ##### THE FORM ##### */

if( !$form->isSubmitted() || !$uoe['v'] || !$pass['v'] || !empty( $login_errors ) || !$catcha_valid )
{ 
?>
		<h2 class="mbt">Login</h2>
        <?php if( isset( $login_errors['mm_credentials'] ) ) 
			echo $login_errors['mm_credentials']; ?>
            
		<?= $uoe['e']; ?>
		<?= $pass['e']; ?>
        <?php
			# Catcha Element after 7 invalid attempts
			if( defined( 'CATCHA' ) )
				echo recaptcha_get_html($publickey);
		?>
        <?= $submit['e']; ?>
        <div class="mtm"><a href="#">Can't access your account?</a></div>
	
<?php 

} // end else

$form->closeForm(); 

/* ##### THE FORM ##### */
/* #################### */


# includes header.php
app_footer(); ?>
