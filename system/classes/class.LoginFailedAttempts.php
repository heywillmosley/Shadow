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
 * This script defines the Page class
 * @since 0.1.1 s9
 * @author William Mosley, III <will@livesuperamazing.com>
 * The class contains 27 attributes: id, role, prefix, firstName, middleName, maiden, lastName, suffix, username, pass, securityQuestion1, securityQuestion2, securityQuestion3, dateRegistered, lastLoginDate, lastLoginIp, dateModified, releaseLevel, dateExpires, birthdate, sex, primaryEmail, additionalEmails, phone, address, prifilePictureImg, spreadImg
 * - The attributes match the corresponding database columns.
 * The class contains 5 methods
 * - getId()
 * - isAdmin()
 * - canEditPage()
 * - canCreatePage()
 * - is_logged_in()
 *
 * @since 0.1.1 s9
 */
class LoginFailedAttempts
{
	protected $id = NULL;
	protected $username = NULL;
	protected $email = NULL;
	protected $pass = NULL;
	protected $ip = NULL;
	protected $datetimeFailed = NULL;
	
	

	
	/**
	 * This method gets the user id:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getId()
		{
			return $this->id;
			
		} // end method getId()
		
		
	/**
	 * This method gets the user's username:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getUsername()
		{
			return $this->username;
			
		} // end method getUsername()	
		
		
	/**
	 * This method gets the user's email:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getEmail()
		{
			return $this->email;
			
		} // end method getUsername()	
		
		
	/**
	 * This method gets the user's password:
	 * @since 0.1.1 s9
	 * @return string
	 */
		private function getPassword()
		{
			return $this->pass;
			
		} // end method getPassword()
		
		
	/**
	 * This returns the date/time login attempt failed
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getDatetimeFailed()
		{
			return $this->datetimeFailed;
			
		} // end method getDateRegistered()
 
} // end ClassName