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
 * Process login template
 */
 
// --------------------------------------------------------------------------------

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