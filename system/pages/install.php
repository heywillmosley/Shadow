<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * @since          Version 1.1.5
 * -----------------------------------------------------------------
 *
 * Install
 */
 
// --------------------------------------------------------------------------------

# Check if form has been posted
if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
	
	# Clean Data
	_cleanData($_POST);
	
	# Begin Error array
	$errors = array();
	
	# --------------------------
	# Site Name Required
	# --------------------------
	
	# Check if site name is empty
	if ( !empty( $_POST['site_name'] ) ) 
	{
		# Set site name and sanitize
		$sn = $_POST[ 'site_name'];
		
	} else { $errors[] = 'Enter the name of your site.'; }
	
	# --------------------------
	# Tagline Required
	# --------------------------
	
	# Check if site name is empty
	if ( !empty( $_POST['tagline'] ) ) 
	{
		# Set site name and sanitize
		$tl = $_POST[ 'tagline'];
		
	} else { $errors[] = 'Enter your site\'s tagline.'; }
		
	# --------------------------
	# First Name Required
	# --------------------------
	
	# Check if first name is empty
	if ( !empty( $_POST['first_name'] ) ) 
	{
		# Check if first name is valid name
		if ( vName($_POST['first_name']) )
		{
			# Set first name
			$fn = $_POST[ 'first_name'];
			
		} else { $errors[] = 'Please enter a valid first name.'; }
		
	} else { $errors[] = 'Enter your first name.'; }
	
	# --------------------------
	# Last Name Required
	# --------------------------
	
	# Check if last name is empty
	if ( !empty( $_POST['last_name'] ) ) 
	{
		# Check if last name is valid name
		if ( vName($_POST['last_name']) )
		{
			# Set last name
			$ln = $_POST[ 'last_name'];
			
		} else { $errors[] = 'Please enter a valid last name.'; }
		
	} else { $errors[] = 'Enter your last name.'; }
	
	
	# --------------------------
	# Username Required
	# --------------------------
	
	# Check if username name is empty
	if ( !empty( $_POST['username'] ) ) 
	{
		# Check if username is valid name
		if ( vUsername($_POST['username']) )
		{
			# Set username
			$un = $_POST[ 'username'];
			
		} else { $errors[] = 'Please enter a valid username.'; }
		
	} else { $errors[] = 'Enter a username.'; }
	
	
	
	# -----------------
	# Email Required
	# -----------------
	
	# Email required
	if ( !empty($_POST['email'])) {
		
		# Validate email
		if ( vEmail($_POST['email']) ) {
			
			# Sanitize email and set variable
			$e = sEmail($_POST['email']);
			
		} else { $errors[] = "Please enter a valid email address."; }
		
	} else { $errors[] = "Please enter your email address."; }
	
	# -----------------
	# Password Required
	# -----------------
	
	# Check if pass1 is empty
	if ( !empty( $_POST['password1'] ) ) 
	{
		# Set email and sanitize
		$p1 = $_POST[ 'password1'];
			
	} else { $errors[] = 'Enter a password.'; };
	
	# Check if pass2 is empty
	if ( empty( $_POST['password2'] ) ) {
		$errors[] = 'Please reenter your password.';
		
	} // end if
	else {
		
		# Set email and sanitize
		$p2 = mysqli_real_escape_string( $dbc, $_POST[ 'password2'] );
		
	} // end else
	
	# Check if passwords are the same
	if ( !empty($p1) && !empty($p2) ) {
		
		if ( $p1 == $p2 ) {
			
			# Validate Password
			if ( vPassword($p1) )
			{
				# Set Password from POST variable
				$p = $p1;
				
				# Create a random salt
				$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true ) );
				
				# Create salted password ( Careful not to over season)
				$p = hash ('sha512', $p.$random_salt);
				
			} else { $errors[] = "Password must contain at least 8 characters, 1 uppercase, 1 lowercase and 1 number."; }
			
		} else { $errors[] = 'Your passwords aren\'t the same. Please try again.'; } // end else
		
	} // end if
	
	
	# Add values to database if no errors
	if ( empty( $errors ) ) {
		
		# Create Database
		$q = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		# Use Database
		$q = "USE `" . DB_NAME . "`";
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		# Drop users table if exists
		$q = "DROP TABLE IF EXISTS `users`";
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		# Create users table
		$q = "CREATE TABLE `".DB_NAME."`.`users` (
			`id`            BIGINT(20) NOT NULL AUTO_INCREMENT,
			`username`           VARCHAR(60) NOT NULL UNIQUE,
			`email`              VARCHAR(100) NOT NULL UNIQUE,
			`pass`               CHAR(128) NOT NULL,
			`salt`               CHAR(128) NOT NULL,
			`reg_date`           DATETIME,
			`first_name`         VARCHAR(20) NOT NULL,
			`last_name`          VARCHAR(40) NOT NULL,
			`middle_name`        VARCHAR(20) NULL,
			`name_title`         VARCHAR(20) NULL,
			`suffix`             VARCHAR(10) NULL,
			`maiden_name`        VARCHAR(40) NULL,
			`display_name`       VARCHAR(100),
			`user_status`        INT(11) DEFAULT 0,
			`dob`                DATE NULL,
			`sex`                VARCHAR(1) NULL,
			`personality_type`   VARCHAR(4) NULL,
			`picture`            VARCHAR(255) NOT NULL DEFAULT 'sw_includes/media/profile_holder.jpg',
			`active`             BOOLEAN NOT NULL DEFAULT 1,
			`online`             TINYINT(3) NOT NULL DEFAULT 1,
			PRIMARY KEY ( `id` )
			)ENGINE = innoDB;";
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		# Create table to store login attempts
		$q = "CREATE TABLE `".DB_NAME."`.`login_attempts` (
			`user_id` INT(11) NOT NULL,
			`time` VARCHAR(30) NOT NULL
			) ENGINE = innoDB;";
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		# Drop sw_options table if exists
		$q = "DROP TABLE IF EXISTS `sw_options`";
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		# Drop sw_options table if exists
		$q = "CREATE TABLE `".DB_NAME."`.`sw_options` (
			`option_id`           INT NOT NULL AUTO_INCREMENT,
			`siteurl`             VARCHAR(800) NOT NULL,
			`site_name`           VARCHAR(100) NOT NULL,
			`tagline`             MEDIUMTEXT NULL,
			`site_description`    MEDIUMTEXT NULL,
			`users_can_register`  TINYINT(1) DEFAULT 1,
			`admin_email`         VARCHAR(100) NOT NULL,
			`start_of_week`       TINYINT(1) NOT NULL DEFAULT 1,
			`default_category`    VARCHAR(100),
			`default_comment_status` TINYINT(1) DEFAULT 1,
			`posts_per_page`      INT(3) DEFAULT 10,
			`date_format`         VARCHAR(50) DEFAULT 'F j. Y',
			`time_format`         VARCHAR(50) DEFAULT 'g i a',
			`permalink_structure`  VARCHAR(100),
			PRIMARY KEY ( `option_id` ))";
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		
		$q = "INSERT INTO users
		     (first_name, last_name, username, email, pass, salt, reg_date)
			 VALUES ('$fn', '$ln', '$un', '$e', '$p', '$random_salt', NOW() )";
		 
		 $r = mysqli_query( $dbc, $q );
		 if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		 
		 $q = "INSERT INTO sw_options
		      ( site_name, tagline, siteurl )
			  VALUES ('$sn', '$tl', '" . dirname( __FILE__ ) . "' )";
			  
		$r = mysqli_query( $dbc, $q );
		if ( !$r ) { echo mysqli_error( $dbc ); exit; }
		
		# Load Index
		load();

	} // end if
	else {
		
		# Call error messages
		echo '
			<div class="alert panel">';
				foreach ( $errors as $msg ) {
					echo "- $msg<br/>";
				} // end foreach
			echo '</div>';
				mysqli_close( $dbc );
		
	} // end else
	
} // end if
?>
<div class="row">
    <h3>Let's get started. Please enter a bit of information about your site.</h3>
    <p> If you are unsure of these details, please contact your webmaster (or the person in charge of the "web stuff").</p>
</div><!-- end row -->
<form action="<?php echo ROOTURL; ?>index.php" method="POST" class="sw_install_form">
    <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Site Name</label>
        	<input class="small-12 large-6 columns" type="text" name="site_name" value="<?php if ( isset( $_POST['site_name'] ) ) echo $_POST['site_name']; ?>" placeholder="Awesome Co." />
        </div><!-- end small-12 large-6 -->
  	</div><!-- end row -->
    <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Your Tagline</label>
        <input class="small-12 columns" type="text" name="tagline" value="<?php if ( isset( $_POST['tagline'] ) ) echo $_POST['tagline']; ?>" placeholder="Everything you need to be awesome." />
        </div><!-- end small-12 large-6 -->
        <div class="small-12 large-6 columns">
        	<div class="caption">About your site in a few words</div>
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Full Name</label>
            <div class="row">
        		<input class="small-6 columns" type="text" name="first_name" value="<?php if ( isset( $_POST['first_name'] ) ) echo $_POST['first_name']; ?>" placeholder="First Name" />
                <input class="small-6 columns" type="text" name="last_name" value="<?php if ( isset( $_POST['last_name'] ) ) echo $_POST['last_name']; ?>" placeholder="Last Name" />
         	</div><!-- end row -->
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Username</label>
        <input class="small-12 columns" type="text" name="username" value="<?php if ( isset( $_POST['username'] ) ) echo $_POST['username']; ?>" placeholder="tsmith" />
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
     <div class="row">
    	<div class="small-12 large-6 columns">
        	<label>Admin Email</label>
        <input class="small-12 columns" type="text" name="email" value="<?php if ( isset( $_POST['email'] ) ) echo $_POST['email']; ?>" placeholder="tsmith@outlook.com" />
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row">
    	<div class="small-12 large-6 columns">
            <div class="row">
            	<div class="small-6 columns">
                	<label>Enter a password</label>
                	<input type="password" name="password1" />
                </div><!-- end small-6 columns -->
        		<div class="small-6 columns">
                	<label>Re-enter your password</label>
                	<input type="password" name="password2" />
                </div><!-- end small-6 columns -->
         	</div><!-- end row -->
        </div><!-- end small-12 large-6 -->
    </div><!-- end row -->
    <div class="row">
    	<div class="small-12 columns">
    		<input type="submit" value="Install" class="join button" />
      	</div><!-- end small-12 columns -->
   	</div><!-- end row -->
</form>
