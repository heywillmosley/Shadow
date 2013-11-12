<?php # Login Action

# Check to see if form has been filled in
if ( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	# Ensure login succeded and get the associated user details of id, first name, and last name
	list ( $check, $data ) = vLogin( $db, $_POST['useroremail'], $_POST['pass']);
	
	# Set the user details as session data and load a home page, or assign error messages
	if ( $check )
	{
		# Start session
		session_start();
		
		# Set Session Variables
		$_SESSION['user_id'] = $data['user_id'];
		$_SESSION['firstName'] = $data['firstName'];
		$_SESSION['lastName'] = $data['lastName'];
		
		# Redirec to home
		load('home');
	
	} else { $errors = $data; }
	
	include ( APPPATH. 'login.php' );
	
	
} // end if