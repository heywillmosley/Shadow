<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
?>


<?php 
	# Validate Form
	
	# Set Errors array
	$errors = array(); 
	
	# Check for form submission
	if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	{
		# Full name validation and santization
		if( !empty( $_POST[FORM_USERNAME_EMAIL] ) )
		{
			# Validate for Username
			if( vUsername( $_POST[FORM_USERNAME_EMAIL] ) )
				
				$ue = _cleanQuery( $_POST[FORM_USERNAME_EMAIL] );
				
			elseif( vEmail( $_POST[FORM_USERNAME_EMAIL] ) )
				
				$ue = _cleanQuery( $_POST[FORM_USERNAME_EMAIL] );
				
			else $errors[FORM_USERNAME_EMAIL] = ERR_MM_LOGIN;
			
		} else $errors[FORM_USERNAME_EMAIL] = ERR_EMPTY_USERNAME_EMAIL;
	
	# Password validation and santization
	if( !empty( $_POST[FORM_PASS] ) )
	{
		$p = get_password_hash( _cleanQuery( $_POST[FORM_PASS] ) );
		
	} else $errors[FORM_PASS] = ERR_EMPTY_PASS;
	

		
	} // end if( $_SERVER['REQUEST_METHOD'] == 'POST' )

	
	?>
    <div>
    	<?php 
			if(  $_SERVER['REQUEST_METHOD'] == 'POST' && empty( $errors ) )
			{	
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
						$STH = $DBH->query("SELECT username, pass FROM shdw_users WHERE username = '$ue' AND pass = '$p'");  
						  
						# setting the fetch mode  
						$STH->setFetchMode(PDO::FETCH_ASSOC);  
						  
						while($row = $STH->fetch()) 
						{  
							echo $row['username'] . "<br/>";  
							echo $row['pass'] . "<br/><br/>";   
						}  
						
					}  
					catch(PDOException $e) {  
						echo "Could not fetch data.";  
						file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
					} 
					
				$errors = NULL; 
					 
			 } // end if( empty( $errors ) )
		?>
    	<?php if( $_SERVER['REQUEST_METHOD'] != 'POST' || !empty($errors) ) : ?>
        	<div class="shdw-login-form">
                <h2>Login</h2>
                <form class="custom" action="#" method="POST">
                    <div class="row">
                        <?php create_form_input( FORM_USERNAME_EMAIL, 'text', $errors, 'Username or Email (Required)', 'mbt' ); ?>
                    </div><!-- end row -->
                    <div class="row">
                        <?php create_form_input( FORM_PASS, 'password', $errors, 'Password' ); ?>
                    </div><!-- end row -->
                    <input name="<?php echo FORM_SUBMIT; ?>" type="submit" class="primary button" value="Login" />
                </form>
         	</div><!-- end shdw-login-form -->
      	<?php endif; ?>

<?php 
# includes header.php
app_footer(); ?>
