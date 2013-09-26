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
 * System Functions
 */
 
// --------------------------------------------------------------------------------


/**
 * Load necessary shadow head content
 * @since 0.1.1 s9
 */
	function shdw_header()
	{ ?>
		<!-- Load Stylesheets -->
        <?php if( NUM_SYS_VER <= 200  ) : // Keep styles used in previous app versions ?>
        	<link rel="stylesheet" href="<?php echo BASE_STYLE_URL; ?>shdw-lt02.0.css" type="text/css" media="screen" />
        <?php endif; ?>
        <link rel="stylesheet" href="<?php echo BASE_STYLE_URL; ?>all.css" type="text/css" media="screen" />
        <style>
			@media print{
				.hide-for-print
				{
					display:none !important;
				}
				
				.show-for-print
				{
					display:block !important;
				}
				
				.print-page-break
				{
					 page-break-before: always !important;
				}
				
				/* 1. ROOT 					============================== */

				* { 
				background : transparent !important; 
				color : black !important; 
				box-shadow : none !important; 
				text-shadow : none !important; 
				filter : none !important; 
				-ms-filter : none !important;
				font-family:Arial, Helvetica, sans-serif !important; }
				
				.page { 
				margin : 0.5cm; }
				
				/* 2. TYPOGRAPHY 			============================== */
				
				h2, h3 { 
				orphans : 3; 
				widows : 3; 
				page-break-after : avoid; }
				
				p { 
				orphans : 3; 
				widows : 3; }
				
				pre, blockquote { 
				border : 1px solid @gray; 
				page-break-inside : avoid; }
				
				abbr[title]:after { 
				content: " (" attr(title) ")"; }
				
				/* 3. COLOUR 				============================== */
				
				a, a:visited { 
				text-decoration : underline;
				color: blue !important; }
				
				a[href]:after { 
				content : " (" attr(href) ")"; }
				
				a[href^="javascript:"]:after, 
				a[href^="#"]:after { 
				content : ""; }
				
				/* 4. TEXTURE 				============================== */
				
				img { 
				max-width : 100% !important;
				page-break-inside : avoid; }
				
				thead { 
				display : table-header-group; } 
				
				tr { 
				page-break-inside : avoid; }
				

			
			/* Don't display navigation elements */
			nav, aside{
				display: none;	
			}
			
			/* Get rid of unneeded margins and padding */
			body, article{
				width: 100%;
				margin: 0;
				padding: 0;	
			}
			
			/* Add 2cm margin */
			@page{
				margin: 2cm;	
			}
			
			/* Make sure heading don't start at bottom of page */
			h2, h3, .step{
				page-break-after: avoid;
			}
			
			/* Make sure images don't overflow page */
			img{
				max-width: 100%;	
			}
			
			/* Begin articles on a seperate new page */
			article, .reference, .diagrams, .resources {
			   page-break-before: always !important;
			}
			
			/* Prevent unordered lists and images from being split across multiple pages */
			ul, img {
			   page-break-inside: avoid;
			}
			
			/* Make links bold */
			article a {
			  
			  text-decoration: none;
		   }
			
			/* Expand external link urls */
		   article a[href^=http]:after {
			  content:" <" attr(href) "> ";
		   }
		   
		   /* Don't show anchor links around images */
		   article a[href^="#"]:after {
			   content: "";
			}
			
			
			/* APA Formating */
			.apa,.apa ul,.apa ol,.apa dl,.ref-apa,.ref-apa ul,.ref-apa ol,.ref-apa dl,.apa-ref,.apa-ref ul,.apa-ref ol,.apa-ref dl,.refapa,.refapa ul,.refapa ol,.refapa dl,.aparef,.aparef ul,.aparef ol,.aparef dl{padding-left:0;margin-left:0;}
			  .apa li,.ref-apa li,.refapa li,.apa-ref li,.aparef li{list-style-type:none;}
			  .apa p,.apa li,.apa dd,.ref-apa p,.ref-apa li,.ref-apa dd,.refapa p,.refapa li,.refapa dd,.apa-ref p,.apa-ref li,.apa-ref dd,.aparef p,.aparef li,.aparef dd{margin-left:2em;text-indent:-2em;margin-top:1em;margin-bottom:1em;}

			
		}
		</style>
        
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oxygen" type="text/css" media="screen" />
         <?php if( USE_GOOGLE_FONTS ) : ?>
            <!-- Load Google Fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?php echo GOOGLE_FONTS; ?>" type="text/css" media="screen" />
      	<?php endif; ?> 
        
         <?php // Load Scripts; ?>
		<script src="<?php echo SYS_JS_URL; ?>vendor/custom.modernizr.js"></script>
        
        
	<?php
		return true;
		
	} // end shdw_header


/**
 * Loads all necessary Javascript files before close body tag
 * @since 0.1.9
 */
	function shdw_footer()
	{ ?>
        <script src="<?php echo SYS_JS_URL; ?>vendor/jquery.min.js"></script>
        <?php if( NUM_SYS_VER < 200  ) : // Keep scripts used in previous app versions ?>
        	<script src="<?php echo SYS_JS_URL; ?>shdw-lt02.0.js"></script>
        <?php endif; ?>
        <script src="<?php echo SYS_JS_URL; ?>vendor/custom.bootstrap.min.js"></script>
		<script src="<?php echo SYS_JS_URL; ?>vendor/custom.foundation.min.js"></script>
		<script src="<?php echo SYS_JS_URL; ?>shadow.js"></script>
		<script>
			$(document).foundation('interchange', {
			  named_queries : {
				smaller : 'only screen and (min-width: 660px)'
			  }
			});
			
			$(document).foundation('interchange', {
			  named_queries : {
				xsmall : 'only screen and (min-width: 480px)'
			  }
			});
		</script>
        <!-- Smooth Div Scroll 1.3 minified-->
		<script src="<?php echo SYS_JS_URL; ?>vendor/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
	
	
		<!-- Plugin initialization -->
		<script type="text/javascript">
			// Initialize the plugin with no custom options
			$(document).ready(function () {
				// None of the options are set
				$("div#makeMeScrollable").smoothDivScroll({
					autoScrollingMode: ""
				});
			});
			
			$("#makeMeScrollable").SmoothDivScroll({
				touchScrolling: true
			});
		</script>
	
		<script>
          $(document).foundation();
        </script>
	<?php
		return true;
		
	} // end shdw_footer

	
/* Presentational level of Database Class
 *******************************************************/



# Delete First Character in String
function deleteFirstChar( $string )
{
	return substr( $string, 1 );

}


# Framework Head @since 0.1.1 s5
function sys_header() 
{
	?>
    <div class="sw_wrapper pas">
		<header class="shadow-header">
			<div class="row">
				<div class="twelve columns">
					<h1>Shadow</h1>
				</div><!-- end twelve columns -->
			</div>
		</header><!-- end shadow-header -->
    
    <?php return true;
}

# Framework Foot @since 0.1.1 s5
function sys_footer() 
{
	?>
    </div><!-- end sw_wrapper pas -->
    
    <?php return true;
}

/**
 * @depreciated 0.1.1 s7 No longer used by internal code and not recommended. Support till 6/19/2014
 * * Use Maintenance Class Maintenance->maintenance_mode() instead
 */
function maintenance_mode()
{
	if( MAINTENANCE == 1 ) : ?>
	
    	<div data-alert class="alert-box warning mbn" style="background-color: #d9edf7 !important; color: #3a87ad !important">
        	<?php echo MAINT_MSG; ?>
        </div><!-- end data-alert -->
		
	<?php endif;
	
	if( MAINTENANCE == 2 ) : ?>
	
    	<div data-alert class="alert-box warning mbn" style="background-color: #f2dede !important; color: #b94a48 !important">
        	<?php echo MAINT_ACTIVE_MSG; ?>
        </div><!-- end data-alert -->
		
	<?php endif;
	
	return true;
	
} // end maintenance_mode()


/**
 * This function displays a notice to let the developer know which version of Shadow they are on and what environment they're in
 * @since 0.1.5
 * @return string
 */
	function environment_notice()
	{
		global $DBH;
		# Set new Product object
		$u = new Environment( $DBH );
		return $u->environmentNotice();
	
	} // end function environment_notice()

# Keep Copyright up to date
function auto_copyright($year = 'auto'){
   if(intval($year) == 'auto'){ $year = date('Y'); }
   if(intval($year) == date('Y')){ echo intval($year); } 
   if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); }
   if(intval($year) > date('Y')){ echo date('Y'); }
}


# App Header @since 0.1.1 s5
function app_header()
{
	global $DBH, $page, $page_title;
	
	include_once( APP_INCLUDE_URI.'header.inc.php');

	
} // end app_header

# App Footer @since 0.1.1 s5
function app_footer()
{
	global $DBH, $page;
	
	include_once( APP_INCLUDE_URI.'footer.inc.php');
	
} // end app_header


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

