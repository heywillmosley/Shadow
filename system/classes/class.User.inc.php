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
 * The class contains 12 attributes: id, role, firstName, lastName, username, email, altEmail, pass, releaseLevel, dateExpires, dateCreated, dateModified
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
class User
{
	protected $id = NULL;
	protected $role = NULL;
	protected $firstName = NULL;
	protected $lastName = NULL;
	protected $username = NULL;
	protected $email = NULL;
	protected $altEmail = NULL;
	protected $pass = NULL;
	protected $releaseLevel = NULL;
	protected $dateExpires = NULL;
	protected $dateCreated = NULL;
	protected $dateModified = NULL;

	
	/**
	 * This method gets the page Id:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getId()
		{
			return $this->id;
			
		} // end function getId()
		
		
	/**
	 * This method returns a Boolean if the user is an administrator:
	 * @since 0.1.1 s9
	 * @return Boolean
	 */
		function isAdmin()
		{
			return ( $this->role == 'admin' );
			
		} // end function isAdmin()
		
		
	/**
	 * This method returns a Boolean indicating if the user is an
	 * administrator or if the user is the original author of the 
	 * provided page:
	 * @since 0.1.1 s9
	 * @return Boolean
	 */
		function canEditPage( Page $p )
		{
			return ( $this->isAdmin() || $this->id == $pageCreatorId() );
			
		} // end function canEditPage
		
		
	/**
	 * This method returns a Boolean indicating if the user is an 
	 * administrator or an author:
	 * @since 0.1.1 s9
	 * @return Boolean
	 */
		function canCreatePage()
		{
			return ( $this->isAdmin() || $this->role == 'author' );
			
		} // end function canCreatePage
	
	
	
	
	
	
	
	
	
	/* Is Logged In @since 0.1.1 s5
	 *
	 * Check logged in status.
	 * We do this by checking the the "user_id" and the "login_string"
	 * SESSION variables. The "login_string" SESSION variable has the
	 * users Browser Info hashed together with the password. We use the
	 * Browser Info because it is very unlikely that the user will change
	 * their browser mid-session. Doing this helps prevent session hijacking
	 */
	function is_logged_in()
	{
		# Check if all session variables are set
		if(isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string'] ) )
		{
			# Set Session Variables
			$user_id = $_SESSION['user_id'];
			$login_string = $_SESSION['login_string'];
			$username = $_SESSION['username'];
			
			# Get the user-agent string of the user
			$user_browser = $_SERVER['HTTP_USER_AGENT'];
			
			if ( $stmt = $mysqli->prepare("SELECT pass FROM users WHERE id = ? LIMIT 1") )
			{
				# Bind "$user_id" to parameter
				$stmt->bind_param('i', $user_id);
				
				# Execute prepared query
				$stmt->execute();
				
				$stmt->store_result();
				
				# If the user exists
				if ( $stmt->num_rows == 1 )
				{
					# Get varaibles from result
					$stmt->bind_result($password);
					
					$stmt->fetch();
					
					$is_logged_in = hash('sha512', $password.$user_browser);
					
					if ($is_logged_in == $login_string ) {
						
						# Logged In!!!
						return true;
						
					} // end if $is_logged_in...
					else
					{
						# Not logged in
						return false;
						
					} // end else
					
				} // end if $stmt->num...
				else
				{
					# Not logged in
					return false;
					
				} // end else
				
			} // end if $stmt = $mysqli...
			else
			{
				# Not logged in
				return false;
				
			} // end else
			
			
		} // end if isset $_SESSION...
		else
		{
			# Not logged in
			return false;
			
		} // end else
	
	} // end is_logged_in
 
} // end ClassName