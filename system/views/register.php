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
 * Register page template
 */
 
// --------------------------------------------------------------------------------

// Require the database connection:
require ( MYSQL );

app_header();

/* ----------------------------------------
 * Validate the form
 * ----------------------------------------
 */
	
	/* Initiate $reg_errors array
	 * This array will be used to store any errors that occur during
	 * the validation process */
	$reg_errors = array(); 
	
	/* Check for a form submission
	 * The first time the user goest to the page, it will be a GET request
	 * When the user clicks submit, a POST request will be made */
	if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	{
		/* --------------------------
		* First Name Required
		* -------------------------- 
		*/
			# Check if first name is empty
			if ( !empty( $_POST[FORM_FIRST_NAME] ) ) 
			{
				# Check if first name is valid name
				if ( vName($_POST[FORM_FIRST_NAME], $dbc ) )
				{
					# Set first name
					$fn = _cleanData( $_POST[ FORM_FIRST_NAME], $dbc );
					
				} else { $reg_errors[] = ERR_INVALid_FIRST_NAME; }
				
			} else { $reg_errors[] = ERR_EMPTY_FIRST_NAME; }
		
		/* --------------------------
		* Last Name Required
		* -------------------------- 
		*/
			# Check if last name is empty
			if ( !empty( $_POST[FORM_LAST_NAME] ) ) 
			{
				# Check if last name is valid name
				if ( vLongName($_POST[FORM_LAST_NAME]) )
				{
					# Set last name
					$ln = _cleanData( $_POST[ FORM_LAST_NAME], $dbc );
					
				} else { $reg_errors[] = ERR_INVALid_LAST_NAME; }
				
			} else { $reg_errors[] = ERR_EMPTY_FIRST_NAME; }
			
			
		/* --------------------------
		* Username Required
		* --------------------------
		*/
			# Check if username name is empty
			if ( !empty( $_POST[FORM_NEW_USERNAME] ) ) 
			{
				# Check if username is valid name
				if ( vUsername($_POST[FORM_NEW_USERNAME]) )
				{
					# Set username
					$un = _cleanData( $_POST[ FORM_NEW_USERNAME], $dbc );
					
				} else { $reg_errors[] = ERR_INVALid_NEW_USERNAME; }
				
			} else { $reg_errors[] = ERR_EMPTY_NEW_USERNAME; }
			
			
		/* -----------------
		 * Email Required
		 * -----------------
		 */
			# Email required
			if ( !empty($_POST[FORM_NEW_EMAIL])) {
				
				# Validate email
				if ( vEmail($_POST[FORM_NEW_EMAIL]) ) {
					
					# Sanitize email and set variable
					$e = sEmail($_POST[FORM_NEW_EMAIL]);
					
				} else { $reg_errors[] = ERR_INVALid_NEW_EMAIL; }
				
			} else { $reg_errors[] = ERR_EMPTY_NEW_EMAIL; }
			
			
		/* -----------------
		* Password Required
		* -----------------
		*/
		
			# Check if password is empty
			if ( !empty( $_POST[FORM_NEW_PASS] ) ) 
			{
				# Set Password
				$p1 = _cleanData( $_POST[ FORM_NEW_PASS ], $dbc );
					
			} else { $reg_errors[] = ERR_EMPTY_NEW_PASS; };
			
			# Check if Confirm Password is empty
			if ( !empty( $_POST[FORM_CONFIRM_NEW_PASS] ) ) 
			{	
				# Set email and sanitize
				$p2 = _cleanData( $_POST[ FORM_CONFIRM_NEW_PASS], $dbc );
				
			} else { $reg_errors[] = ERR_EMPTY_NEW_CONFIRM_PASS; }
			
			
			# Check if passwords are the same
			if ( !empty($p1) && !empty($p2) ) {
				
				if ( $p1 == $p2 ) {
					
					# Validate Password
					if ( vPassword($p1) )
					{
						# Set Password from POST variable
						$p = $p1;
						
					} else { $reg_errors[] = ERR_INVALid_PASS; }
					
				} else { $reg_errors[] = ERR_MM_PASS; }
				
			} // end if
				
		/* -----------------------------------------------------
		* Check if the avaliability of the username
		* ------------------------------------------------------
		*/
			# If there aren't any errors
			if( empty( $reg_errors ) )
			{
				$q = "SELECT email, username FROM sh-users WHERE email='$e'
					OR username='$u'";
					
				$r = mysqli_query( $dbc, $q );
				$rows = mysqli_num_rows( $r );
				if( $rows == 0 )
				{
					$q = "INSERT INTO sh-users( username, email, pass, firstName, lastName, dateExpires )
						  VALUES ('$un', '$e', '" . create_password_hash( $p ) . "' '$fn', '$ln', ADDDATE(NOW(), INTERVAL 1 MONTH) )";
					
					$r = mysqli_query( $dbc, $q );
					
					# If one row was updated, than the user
					if( mysqli_affected_rows( $dbc ) == 1 )
					{
						echo '<h2>Thanks!</h2><p>You may now login and access the site\'s content</p>';
						
						# mail registration success
						$message = "Thank you for registering at" . SITE_NAME . "!";
						mail( $e, 'Registration Confirmation', $message, 'From:' . MAIL_EMAIL  );
						
						app_footer();
						exit();
					
					} // end if( mysqli_affected_rows( $dbc ) == 1 )
					
					else
					{
						trigger_error( 'You could not be registered due to a system error. We apologize for the inconvenience.' );	
						
					} // end of mysqli_affected_rows( $dbc ) == 1 ELSE
					
				} // end if( $rows == 0 )
				
				# If the email address or username is unavailable, create errors
				else
				{
					# Both are taken
					if( $rows == 2 )	
					{
						# Set Email and Username Errors
						$reg_errors['email'] = ERR_EMAIL_TAKEN;
						$reg_errors['username'] = ERR_USERNAME_TAKEN;
						
						
					} // end if( $rows == 2 )
					
					# Confirm which item has been registered. One or both are taken
					else
					{
						$row = mysqli_fetch_array( $r, MYSQLI_NUM );
						
						# Both Match
						if( ( $row[0] == $e ) && ( $row[1] == $un ) )
						{
							# Set Email and Username Errors
							$reg_errors['email'] = ERR_EMAIL_TAKEN;
							$reg_errors['username'] = ERR_USERNAME_TAKEN;
							
						} // end if( ( $row[0] == $e ) && ( $row[1] == $un ) )
						
						# Email Matches
						elseif( $row[0] == $e )
						{
							$reg_errors['email'] = ERR_EMAIL_TAKEN;
							
						} // end elseif( $row[0] == $e )
						
						# Username Matches
						elseif( $row[0] == $un )
						{
							$reg_errors['email'] = ERR_USERNAME_TAKEN;
							
						} // end elseif( $row[0] == $e )
						
					} // end of $rows == 2 ELSE
					
				} // end of $rows == 0 ELSE
				
			} // end of empty( $reg_errors ) ELSE
		
	} // end if( $_SERVER['REQUEST_METHOD'] == 'POST' )

?>

<div class="page_register">
    <div class="row">
    	<div class="small-12 columns">
        	<h1><?php echo $page['register'][0]; ?></h1>
            <h6 class="pbs"><strong>Registering is simple and easy. Get started below.</strong></h6>
        	<form action="<?php echo $page['register'][1]; ?>" method="POST" accept-charset="utf-8" class="custom">
            	<div class="row">
                	<div class="small-12 large-6 columns">
                    	<label>First Name</label>
            			<?php create_form_input( FORM_FIRST_NAME, 'text', $reg_errors ); ?>
                    </div><!-- end small-12 large-6 columns -->
                    <div class="small-12 large-6 columns">
                    	<label>Last Name</label>
            			<?php create_form_input( FORM_LAST_NAME, 'text', $reg_errors ); ?>
                    </div><!-- end small-12 large-6 columns -->
                </div><!-- end row -->
                <label>Username</label>
                <div class="caption">Only letters and numbers allowed</div>
            	<?php create_form_input( FORM_NEW_USERNAME, 'text', $reg_errors ); ?>
                <label>Email</label>
            	<?php create_form_input( FORM_NEW_EMAIL, 'text', $reg_errors ); ?>
                <div class="row">
                	<div class="small-12 large-6 columns">
                    	<label>Password</label>
                		<div class="caption">Must be between 8 and 20 characters long, with at least on lowercase letter, one uppercase letter, and one number</div>
                        <?php create_form_input( FORM_NEW_PASS, 'password', $reg_errors ); ?>
                    </div><!-- end small-12 large-6 columns -->
                    <div class="small-12 large-6 columns">
                    	<label>Confirm Password</label>
            			<?php create_form_input( FORM_CONFIRM_NEW_PASS, 'password', $reg_errors ); ?>
                    </div><!-- end small-12 large-6 columns -->
                </div><!-- end row -->
                <input type="submit" name="submit_button" value="Register" class="join button" />
            </form>
        </div><!-- end small-12 columns -->
    </div><!-- end row -->
</div><!-- end page_register -->

<?php app_footer(); ?>