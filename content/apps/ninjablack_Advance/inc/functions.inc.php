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
 * This script sets application functions
 */
 
// --------------------------------------------------------------------------------

/**
 * Small Product Function
 *
 * This function streamlines form input and keeps from repeating code
 *
 * @package        Shadow   
 * @author         Super Amazing
 * @link
 * @since          Version 0.1.1 s5
 * @dependencies   
 * @param          string  the product name
 * @param          string  the category
 * @param          string  the image
 * @param          string  OPTIONAL the price
 * @param          string  OPTIONAL the link
 * @return         string
 */
 	function product( $name, $symptoms, $uses, $ingredients, $img, $price = '$19.99', $link = '#' )
	{
		?>
        
       <div class="product">
            <div class="row">
                <div class="small-5 columns">
                    <a href="<?php echo $link; ?>" target="_blank"><img class="img" src="<?php echo $img; ?>" alt="<?php echo $name; ?>" /></a>
                </div><!-- end small-4 columns -->
                <div class="small-7 columns">
                    <div class="content">
                        <div class="title">
                            <?php echo $name; ?>
                        </div><!-- end title -->
                        <div class="symptoms">
                            <div class="pbt fs13">Uses</div>
                            <ul class="side-nav pan man">
                            	<?php echo $symptoms; ?>
                           	</ul>
                        </div><!-- end symptoms -->
                        <div class="uses hide">
                            <div>Uses:</div>
                            <?php echo $uses; ?>
                        </div><!-- end uses -->
                        <div class="ingredients">
                            <div class="caption"><?php echo $ingredients; ?></div>
                        </div><!-- end ingredients -->
                        <a href="<?php echo $link; ?>" target="_blank" class="primary button mts">Buy Now</a>
                    </div><!-- end content -->
                </div><!-- end small-8 columns -->
            </div><!-- end row -->
        </div><!-- end product -->
        
        <?php
		return true;
		
	} // end function small_product( $name, $category, $img, $price )
	
	


	
	
# App Header @since 0.1.1 s5
function app_header ()
{
	global $dbc, $page, $page_title;
	
	include_once( APP_INCLUDE_URI.'header.inc.php');

	
} // end app_header

# App Footer @since 0.1.1 s5
function app_footer ()
{
	global $dbc, $page;
	
	include_once( APP_INCLUDE_URI.'footer.inc.php');
	
} // end app_header

# Validate Login Attempts @since 0.1.1 s5
function vLogin( $db, $useroremail = "", $pwd = "" )
{
	# Clean Data
	_cleanData($_POST);
	
	# Intiate Errors
	$errors = array();
	
	# -------------------------------------------
	# Email or Username Login Required
	# -------------------------------------------
	
	# Check if email or username is set
	if ( !empty($_POST['useroremail'])) {
		
		# Set useroremail
		$uoe = $_POST['useroremail'];
		
	} else { $errors[] = "Please enter your email address."; }
	
	# -------------------------------------------
	# Password Login Required
	# -------------------------------------------
	
	# Check if password is set
	if ( !empty($_POST['pass'])) {
		
		# Set password
		$p = $_POST['pass'];
		
	} else { $errors[] = "Please enter your password."; }
	
	
	# Insert statements to store an error message if email or password are not found in the database or return the associated user id, first name, and last name to the caller - if the login attempt succeeds
	
	# Check if email and password are in database
	if ( empty( $errors ) )
	{
		$q = "SELECT user_id, firstName, lastName
		FROM users
		WHERE email='$uoe'
		AND pass = SHA1('$p')";
		$stmt = mysqli_query( $db, $q);
		
		# Check if there is only one entry
		if ( mysqli_num_rows( $stmt ) == 1 )
		{
			$stmtow = mysqli_fetch_array ( $stmt , MYSQLI_ASSOC );
			
			return array( true, $stmtow );
			
		} 
		
		# Check if username and password are in the database
		else 
		{ 
			$q = "SELECT user_id, firstName, lastName
			FROM users
			WHERE username='$uoe'
			AND pass = SHA1('$p')";
			$stmt = mysqli_query( $db, $q);
			
			# Check if there is only one entry
			if ( mysqli_num_rows( $stmt ) == 1 )
			{
				$stmtow = mysqli_fetch_array ( $stmt , MYSQLI_ASSOC );
			
				return array( true, $stmtow );
				
			} else { $errors[] = "Password doesn't. Please try again or <a href='#'>Request a new one</a>."; }
		}
		
	} // end if
	
	return array( false, $errors );
	
} // end vLogin


/* Secure Session Start @since 0.1.1 s5
 *
 * This function makes your login script a whole lot more secure.
 * It stops hackers been able to access the session id cookie through
 * javascript (For example in an XSS attack).
 * Also by using the "session_regenerate_id()" function, which regenerates
 * the session id on every page reload, helping prevent session hijacking.
 * Note: If you are using https in your login application set the "$secure" 
 * variable to true.
 */
function sec_session_start()
{
	# Set a custom session name
	$session_name = 'sec_session_id';
	
	# Set to true if using https
	$secure = FALSE;
	
	# This stops javascript being able to access the session id
	$httponly = TRUE;
	
	# Forces sessions to only use cookies
	ini_set('session.use_only_cookies', 1);
	
	# Get current cookies params
	$cookieParams = session_get_cookie_params();
	
	session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
	
	# Sets the session name to one set above
	session_name($session_name);
	
	# Start the php session
	session_start();
	
	# Regenerated the session, delete the old one.
	session_regenerate_id(TRUE);
	
	#
	
} // end Secure Session Start


/* Login @since 0.1.1 s5
 *
 * This function will check the email and password against the
 * database, it will return true if there is a match.
 */
function login($email, $password, $db) 
{
   # Using prepared Statements means that SQL injection is not possible
   if ( $stmt = $db->prepare("SELECT id, username, pass, salt FROM users WHERE email = ? LIMIT 1") )
   {
	   # Bind "$email" to parameter.
	   $stmt->bind_param('s', $email);
	   
	   #Execute the prepared query
	   $stmt->execute();
	   
	   $stmt->store_result();
	   
	   # Get variables from result
	   $stmt->bind_result($user_id, $username, $db_password, $salt);
	   
	   $stmt->fetch();
	   
	   # Hash the password with the unique salt
	   $password = hash('sha512', $password.$salt);
	   
	   # if the user exists
	   if ( $stmt->num_rows == 1)
	   {
		   # Check if the account is locked from too many login attempts
		   if ( checkbrute($user_id, $db) == TRUE )
		   {
			   # Send an email to user saying their account is locked
			   
			   # Redirect to Locked page
			   load('locked');
			   exit;
			   
			   return false;
			   
		   } // end if checkbrute...
		   else
		   {
			   # Check if the password in the database matches the password the user submitted
			   if ( $db_password == $password )
			   {
				   	# Password is correct!
				   
				   	# Get the user-agent string of the user
				   	$user_browser = $_SERVER['HTTP_USER_AGENT'];
				   
				   	# XSS protection as we might print this value
				   	$user_id = preg_replace("/[^0-9]+/", "", $user_id);
					
					# Set Session User Id
					$_SESSION['user_id'] = $user_id;
				   
				   	# XSS protection as we might print this value
				   	$username = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $username);
					
				   	# Set Session username
				 	$_SESSION['username'] = $username;
					
					$_SESSION['login_string'] = hash('sha512', $password.$user_browser);
					
					# Login successful
					return true;
					
			   } // end if $db_password...
			   else
			   {
				   # Password is not correct
				   # We record this attempt in the database
				   $now = time();
				   $db->query("INSERT INTO login_attempts (user_id, time)
				                   VALUES ('$user_id', '$now')");
				   
			   } // end else
			   
		   } // end else
		   
	   } // end if r->num...
	   else
	   {
		   # No user exists
		   return false;
		   
	   } // end else
	   
   } // end if $stmt = $mys...
   
} // end Login


/* Brute Force @since 0.1.1 s5
 *
 * Brute force attacks are when a hacker will try 1000s
 * of different passwords on an account, either randomly 
 * generated passwords or from a dictionary. In our script 
 * if a user account has a failed login more than 5 times 
 * their account is locked.
 */
function checkbrute($user_id, $db)
{
	# Get timestamp of current time
	$now = time();
	
	# All login attempts are counted from the past 2 hours
	$valid_attempts = $now - (2 * 60 * 60);
	
	if ($stmt = $db->prepare("SELECT time FROM login_attempts WHERE user_id = ? AND time > '$valid_attempts'") )
	{
		$stmt->bind_param('i', $user_id);
		
		# Execute the prepared query
		$stmt->execute();
		
		$stmt->store_result();
		
		# If there has been more than 5 failed logins
		if ($stmt->num_rows > 5 )
		{
			return true;
			
		} // end if $r->num...
		
		# If there are less than 5 failed attempts, false
		else
		{
			return false;
			
		} // end else
		
	} // end if $r = $mys...
	
} // end checkbrute

# Check if all session varibles are set
function login_check( $db )
{
	# Check if required Session Varibles are set
	if (isset($_SESSION['user_id'], $_SESSION['username'], $_SESSION['login_string']) )
	{
		$user_id = $_SESSION['user_id'];
		$login_string = $_SESSION['login_string'];
		$username = $_SESSION['username'];
		
		# Get the user agent string of the user
		$user_browser = $_SERVER['HTTP_USER_AGENT'];
		
		
		if ($q = $db->prepare("SELECT pass FROM users WHERE id = ? LIMITE 1") )
		{
			
			# Bind "user_id" to parameter.
			$q->bind_param('i', $user_id);
			echo "hello there";
			
			# Execute the prepared query
			$q->execute();
			
			# Store Result
			$q->store_result();
			
			$true = "prepare good";
			return true;
			
		} else { $false = "prepare no good"; return $false; }
		
		$true = "Varibles good";
		return $true;
	} // end if isset($...	
	else
	{
		// Not logged in
		return false;
		
	} // else
	
} // end login_check
