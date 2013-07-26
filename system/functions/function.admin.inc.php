<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * @since          Version 0.1.1 s8
 * -----------------------------------------------------------------
 *
 * System Admin Functions
 */
 
// --------------------------------------------------------------------------------

/**
 * Determines if user is logged in or not
 *
 * @since 1.1.1 b8
 * @return void
 */
	function is_logged_in()
	{
		# Set new Page object
		$u = new Admin();
		
		# Call setPage() method
		return $u->isLoggedIn();
		 
	}
	

/**
 * Checks if user is an admin user
 *
 * @since 1.1.1 s9
 * @return Void
 */		
	function is_admin()
	{
		# Set new Page object
		$c = new Admin();
		
		# Call setPage() method
		return $c->isAdmin();
		
	}
	
	
/**
 * Determins if user is logged in and sets appropriate SESSION Varibales
 *
 * @since 1.1.1 s9
 * @return Void
 */
	function loginTools()
	{
		# Set new Page object
		$c = new Admin();
		
		# Call setPage() method
		return $c->loginTools();
		 
	}
	
	
/**
 * Creates Login form
 *
 * @since 1.1.1 s9
 * @return Void
 */	
	function loginForm()
	{
		# Set new Page object
		$c = new Admin();
		
		# Call setPage() method
		return $c->loginForm();
		 
	}
	
/**
 * Clears session data, logs user out
 *
 * @since 1.1.1 s9
 * @return Void
 */		
	function logout()
	{
		# Set new Page object
		$c = new Admin();
		
		# Call setPage() method
		return $c->logout();
		
	}	
	