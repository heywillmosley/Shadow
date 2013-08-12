<?php 
# Validate Form
# Set Errors array
$login_errors = array(); 

# Check for form submission
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	# Full name validation and santization
	if( !empty( $_POST[FORM_USERNAME_EMAIL] ) )
	{
		$ue = _cleanQuery( $_POST[FORM_USERNAME_EMAIL] );
		
	} else $login_errors[FORM_USERNAME_EMAIL] = ERR_EMPTY_USERNAME_EMAIL;

	# Password validation and santization
	if( !empty( $_POST[FORM_PASS] ) )
	{
		$p = get_password_hash( _cleanQuery( $_POST[FORM_PASS] ) );
		
	} else $login_errors[FORM_PASS] = ERR_EMPTY_PASS;
	
	if ( empty( $login_errors ) ) 
	{ // OK to proceed!
	
		
		$host = DB_HOST;
		$db_name = db_name;
		$user = DB_USER;
		$pass = DB_PASSWORD;
		
		/**
		 * connect to the database  
		 */
			try 
			{  
				# Connect to mysql using credentials
				$DBH = new PDO("mysql:host=$host;db_name=$db_name", $user, $pass);  		
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
				$STH = $DBH->query("SELECT id, username, email, firstName, lastName, role, releaseLevel, pass FROM shdw_users WHERE ( `username` = '$ue' OR `email` = '$ue' ) AND pass = '$p'");  
				  
				# setting the fetch mode  
				$STH->setFetchMode( PDO::FETCH_ASSOC );
				
				# Check if there was a match
				if( $STH->rowCount( ) == 1 )
				{
					while($row = $STH->fetch( ) ) 
				{  
					# Set Session Variables from the database
					$_SESSION['user_id'] = $row['id']; 
					$_SESSION['username'] = $row['username']; 
					$_SESSION['email'] = $row['email']; 
					$_SESSION['firstName'] = $row['firstName'];
					$_SESSION['lastName'] = $row['lastName'];
					$_SESSION['pass'] = $row['pass']; 
					$_SESSION['role'] = $row['role']; 
					$_SESSION['releaseLevel'] = $row['releaseLevel'];
					
				}  // while($row = $STH->fetch( ) ) 
				
					echo 'Welcome home ' . $_SESSION['firstName'];
					
				} // end $STH->setFetchMode( PDO::FETCH_ASSOC );
				
				else
				{
					$login_errors['login'] = ERR_MM_LOGIN;
					
				} // end else
				
			}  
			catch(PDOException $e) {  
				echo "Could not fetch data.";  
				file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);  
			} 
			
	} // end if (empty($login_errors)) { // OK to proceed!
		 
 } // end if( empty( $login_errors ) )