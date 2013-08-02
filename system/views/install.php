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
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * Install
 */
 
// --------------------------------------------------------------------------------?>
<?php shdw_header(); ?>

<div class="row">
	<h1>Welcome to <?php echo FW_NAME; ?></h1>
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
        		<input class="small-6 columns" type="text" name="firstName" value="<?php if ( isset( $_POST['firstName'] ) ) echo $_POST['firstName']; ?>" placeholder="First Name" />
                <input class="small-6 columns" type="text" name="lastName" value="<?php if ( isset( $_POST['lastName'] ) ) echo $_POST['lastName']; ?>" placeholder="Last Name" />
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


<?php shdw_footer(); ?>