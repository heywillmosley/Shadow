<?php

# Our custom secure way of starting a php session
sec_session_start();

if(isset($_POST['useroremail'], $_POST['pass'] ) )
{
	$uoe = $_POST['useroremail'];
	
	# The hashed password
	$p = $_POST['pass']; 
	
	if ( login($uoe, $p, $db ) == true )
	{
		load("home");
		
	} # end if login...
	else
	{
		# Login Failed
		header('Location: '.ROOTURL.'login?error=1');
		echo 'Definitely didnt work';
		
	} // end else
	
} // end if isset...
else
{
	
	# The correct POST variables were not sent to this page
	echo 'Invalid Request';
	
} // end else