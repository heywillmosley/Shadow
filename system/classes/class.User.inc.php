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
class User
{
	protected $id = NULL;
	protected $role = NULL;
	protected $prefix = NULL;
	protected $firstName = NULL;
	protected $middleName = NULL;
	protected $maiden = NULL;
	protected $lastName = NULL;
	protected $suffix = NULL;
	protected $username = NULL;
	private $pass = NULL;
	private $securityQuestion1 = NULL;
	private $securityQuestion2 = NULL;
	private $securityQuestion3 = NULL;
	protected $dateRegistered = NULL;
	protected $lastLoginDate = NULL;
	protected $lastLoginIp = NULL;
	protected $dateModified = NULL;
	protected $releaseLevel = NULL;
	protected $dateExpires = NULL;
	protected $birthdate = NULL;
	protected $sex = NULL;
	protected $primaryEmail = NULL;
	protected $additionalEmails = NULL;
	protected $phone = NULL;
	protected $address = NULL;
	protected $profilePictureImg = NULL;
	protected $spreadImg = NULL;
	protected $profileUrl = NULL;
	

	
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
	 * This method gets the page Id:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getRole()
		{
			return $this->role;
			
		} // end method getRole()
		
		
	/**
	 * This method gets the prefix of user's name:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getPrefix()
		{
			return $this->prefix;
			
		} // end method getPrefix()
		
	
	/**
	 * This method gets the user's first name:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getFirstName()
		{
			return $this->firstName;
			
		} // end method getFirstName()
		
		
	/**
	 * This method gets the user's middle name:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getMiddleName()
		{
			return $this->middleName;
			
		} // end method getMiddleName()
		
	
	/**
	 * This method gets the user's maiden name:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getMaiden()
		{
			return $this->maiden;
			
		} // end method getMaiden()
		
		
	/**
	 * This method gets the user's last name:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getLastName()
		{
			return $this->lastName;
			
		} // end method getLastName()
		
		
	/**
	 * This method gets the suffix of the user's name:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getSuffix()
		{
			return $this->suffix;
			
		} // end method getSuffix()
		
		
	/**
	 * This method returns the user's full name:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getFullName()
		{
			return 
				# Check if user has a prefix and use it
				( $this->prefix != NULL ? $this->prefix.' ' : '' ).
				
				# First Name
				$this->firstName.' '.
				
				# Check if user has a middle name and use it
				( $this->middleName != NULL ? $this->middleName.' ' : '' ).
				
				# Last Name
				$this->lastName.
				
				# Check if user has a suffix and use it
				( $this->suffix != NULL ? ' '.$this->suffix : '' ).
				
				# Check if user has a suffix and use it
				( $this->maiden != NULL ? ' ('.$this->maiden.')' : '' );
			
		} // end method getFullName()
		
		
	/**
	 * This method returns the user's first and last name (including maiden):
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getFirstLastName()
		{
			return 
				
				# First Name
				$this->firstName.' '.
				
				# Last Name
				$this->lastName.
				
				# Check if user has a suffix and use it
				( $this->maiden != NULL ? ' ('.$this->maiden.')' : '' );
			
		} // end method getFullName()
		
		
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
	 * This method gets the user's password:
	 * @since 0.1.1 s9
	 * @return string
	 */
		private function getPassword()
		{
			return $this->pass;
			
		} // end method getPassword()
		
		
	/**
	 * This method gets the date the user registered:
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getDateRegistered()
		{
			return $this->dateRegistered;
			
		} // end method getDateRegistered()
		
		
	/**
	 * This method gets the last date the user logged in:
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getLastLoginDate()
		{
			return $this->lastLoginDate;
			
		} // end method getLastLoginDate()
		
		
	/**
	 * This method gets the user's last login ip
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getLastLoginIp()
		{
			return $this->lastLoginIp;
			
		} // end method getLastLoginIp()
		
		
	/**
	 * This method gets the last date modified
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getDateLastModified()
		{
			return $this->dateModified;
			
		} // end method getDateLastModified()
		
		
	/**
	 * This method gets the last date modified
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getDateLastModified()
		{
			return $this->dateModified;
			
		} // end method getDateLastModified()
		
		
	/**
	 * This method gets the user's release level
	 * - alpha
	 * - beta
	 * - standard
	 *
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getReleaseLevel()
		{
			return $this->releaseLevel;
			
		} // end method getReleaseLevel()	
		
		
	/**
	 * This method gets the date the user's login expires
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getDateUserExpires()
		{
			return $this->dateExpires;
			
		} // end method getDateUserExpires()
		
		
	/**
	 * This method gets the user's birthdate
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getBirthdate()
		{
			return $this->birthdate;
			
		} // end method getBirthdate()
			
		
	/**
	 * This method gets the user's sex
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getSex()
		{
			return $this->sex;
			
		} // end method getSex()
		
		
	/**
	 * This method gets the user's primary email they registered with
	 * or updated as their primary email
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getPrimaryEmail()
		{
			return $this->primaryEmail;
			
		} // end method getPrimaryEmail()	
		
		
		
	/**
	 * This method gets the user's email from additionalEmails 
	 * determined by the number given 
	 * @since 0.1.1 s9
	 * @param  int number
	 * @return string
	 */
		function getEmail( $number = 0 )
		{
			# Unserialized and decode email array from database
			$email = unserialize( urldecode( $this->additionalEmails ) );
			return $email[ $number ];
			
		} // end method getEmail()	
		
		
	/**
	 * This method gets the user's phone number from phone
	 * determined by the number given 
	 * @since 0.1.1 s9
	 * @param  int number
	 * @return string
	 */
		function getPhoneNumber( $number = 0 )
		{
			# Unserialized and decode email array from database
			$phone = unserialize( urldecode( $this->phone ) );
			return $phone[ $number ];
			
		} // end method getPhoneNumber()
		
		
	/**
	 * This method gets the user's address from address
	 * determined by the number given 
	 * @since 0.1.1 s9
	 * @param  int number
	 * @return string
	 */
		function getAddress( $number = 0 )
		{
			# Unserialized and decode email array from database
			$address = unserialize( urldecode( $this->address ) );
			return $address[ $number ];
			
		} // end method getAddress()
		
		
	/**
	 * This method gets the user's profile picture
	 * @since 0.1.1 s9
	 * @return url
	 */
		function getProfilePicture()
		{
			return APP_IMG_URL.$this->profilePictureImg;
			
		} // end method getProfilePicture()	
		
		
	/**
	 * This method gets the user's profile spread
	 * @since 0.1.1 s9
	 * @return url
	 */
		function getProfileSpread()
		{
			return APP_IMG_URL.$this->spreadImg;
			
		} // end method getProfileSpread()	
		
		
	/**
	 * This method gets the user's profile url
	 * @since 0.1.1 s9
	 * @return url
	 */
		function getProfileUrl()
		{
			return SITE_URL.'profile/'.$this->profileUrl;
			
		} // end method getProfileURL()	
		
		
	/**
	 * This method returns a Boolean if the user is an administrator:
	 * @since 0.1.1 s9
	 * @return Boolean
	 */
		function isAdmin()
		{
			return ( $this->role == 'admin' );
			
		} // end method isAdmin()
		
		
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
			
		} // end method canEditPage
		
		
	/**
	 * This method returns a Boolean indicating if the user is an 
	 * administrator or an author:
	 * @since 0.1.1 s9
	 * @return Boolean
	 */
		function canCreatePage()
		{
			return ( $this->isAdmin() || $this->role == 'author' );
			
		} // end method canCreatePage
	
	
	
	
	
	
	
	
	
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