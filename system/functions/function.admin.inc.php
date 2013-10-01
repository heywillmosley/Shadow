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
 * @since          Version 0.1.1 s8
 * -----------------------------------------------------------------
 *
 * System Admin Functions
 */
 
// --------------------------------------------------------------------------------

if( SHDW )
{
	/**
	 * Determines if user is logged in or not
	 *
	 * @since 1.1.1 b8
	 * @return void
	 */
		function is_logged_in()
		{
			global $DBH;
			# Set new Page object
			$u = new Admin( $DBH );
			
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
			global $DBH;
			# Set new Page object
			$c = new Admin( $DBH );
			
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
			global $DBH;
			# Set new Page object
			$c = new Admin( $DBH );
			
			# Call setPage() method
			return $c->loginTools();
			 
		}
		
		
	/**
	 * Creates Login form
	 *
	 * @since 1.1.1 s9
	 * @return Void
	 */	
		function login_form( $type = 'stacked' )
		{
			global $DBH;
			# Set new Page object
			$c = new Admin( $DBH );
			
			# Call setPage() method
			return $c->loginForm( $type );
			 
		}
		
		/**
		 * Creates Login form
		 *
		 * @since 0.1.1 s9
		 * @depreciated since 1.0.0
		 * @return Void
		 */	
			function loginForm()
			{
				global $DBH;
				# Set new Page object
				$c = new Admin( $DBH );
				
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
			global $DBH;
			# Set new Page object
			$c = new Admin( $DBH );
			
			# Call setPage() method
			return $c->logout();
			
		}
		
		
	/**
		 * Creates Login form
		 *
		 * @since 0.1.1 s9
		 * @depreciated since 1.0.0
		 * @return Void
		 */	
			function register_form()
			{
				global $DBH;
				# Set new Page object
				$c = new Admin( $DBH );
				
				# Call setPage() method
				return $c->registerForm();
				 
			}	
} // end SHDW
	