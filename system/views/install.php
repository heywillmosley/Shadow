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

<?php


echo $_SESSION['form-install-tagline']['output'];

$form = new Form( 'install' );
	$siteTitle = $form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'text', // REQUIRED
			'name'        => 'site-name', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Site Title',
			'label'       => FALSE,
			'caption'     => FALSE,
			'class'       => FALSE,
			'id'          => FALSE,
			'value'       => FALSE, // Default value
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => ''
	) ); // end $siteTitle = new Element
	
	$siteTagline = $form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'text', // REQUIRED
			'name'        => 'tagline', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Tagline',
			'caption'     => 'A couple of words to describe your site.',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => ''
	) ); // end $siteTagline = new Element
	
	$siteDesc = $form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'textarea', // REQUIRED
			'name'        => 'site-desc', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Site Description',
			'caption'     => 'A full description of your site. This will be displayed when users search for your site in search engines such as Google. Limited to a couple of sentences.',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => ''
	) ); // end $siteDesc = new Element
	
	$siteKeywords = $form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'textarea', // REQUIRED
			'name'        => 'keywords', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Keywords',
			'caption'     => 'These are the words or phrases users will use to find you on search engines such as Google. Provide at least 20 - 30 seperated by commas. E.g. the best flowers, tulips, plants.',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => ''
	) ); // end $siteDesc = new Element
	
	$userNextBtn = $form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'submit', // REQUIRED
			'name'        => 'user-next-btn', // REQUIRED a-z only, dashes, underscores, no spaces
			'value'       => 'Next',
			'class'       => 'btn-large btn-block',
	) ); // end $siteDesc = new Element





	
# Check for form submission
if( $siteTitle['valid'] && $siteTagline['valid'] )
	echo 'Rack city bitch, rack rack city bitch';
else echo 'Errrrrrrr';	
		
//$form->callElements();

?>

<div class="mxw700 pam">
    <?php
    
    $install_website_errors = array();
    # Check for form submission
    if( $_SERVER['REQUEST_METHOD'] == 'POST' )
    {
        # New Website Title validation and santization
        if( !empty( $_POST['install_site_title'] ) )
        {
            $t = _cleanQuery( $_POST['install_site_title'] );
            
        } else $install_website_errors['install_site_title'] = 'Please enter your website\'s name.';
		
		# New Website Tagline validation and santization
        if( !empty( $_POST['install_tagline'] ) )
        {
            $tl = _cleanQuery( $_POST['install_tagline'] );
            
        } else $install_website_errors['install_tagline'] = 'Please enter a tagline for your website.';
		
		# New Website Summary validation and santization
        if( !empty( $_POST['install_summary'] ) )
        {
            $sum = _cleanQuery( $_POST['install_summary'] );
            
        } else $install_website_errors['install_summary'] = 'Please enter a full description for your website.';
		
		
		# New Website keywords validation and santization
        if( !empty( $_POST['install_keywords'] ) )
        {
            $k = _cleanQuery( $_POST['install_keywords'] );
            
        } else $install_website_errors['install_keywords'] = 'Please enter keywords or phrases for your website. Seperated by commas.';
    
        
        
        if ( empty( $install_website_errors ) ) 
        { // OK to proceed!
            
			# Check if First name is empty
			if( !empty( $_POST[FORM_FIRST_NAME] ) )
				
				# Vailidate & Sanitize First Name
				if( vName( $_POST[FORM_FIRST_NAME] ) )
					$fn = _cleanQuery( $_POST[FORM_FIRST_NAME] );
					
				else $install_user_errors[FORM_FIRST_NAME] = ERR_INVALID_FIRST_NAME;
				
			else $install_user_errors[FORM_FIRST_NAME] = ERR_EMPTY_FIRST_NAME;
			
			
			# Check if Last name is empty
			if( !empty( $_POST[FORM_LAST_NAME] ) )
				
				# Vailidate & Sanitize LAST Name
				if( vName( $_POST[FORM_LAST_NAME] ) )
					$ln = _cleanQuery( $_POST[FORM_LAST_NAME] );
					
				else $install_user_errors[FORM_LAST_NAME] = ERR_INVALID_LAST_NAME;
				
			else $install_user_errors[FORM_LAST_NAME] = ERR_EMPTY_LAST_NAME;
			
			
			# Check if username is empty
			if( !empty( $_POST[FORM_NEW_USERNAME] ) )
				
				# Vailidate & Sanitize LAST Name
				if( vUsername( $_POST[FORM_NEW_USERNAME] ) )
					$un = _cleanQuery( $_POST[FORM_NEW_USERNAME] );
					
				else $install_user_errors[FORM_NEW_USERNAME] = ERR_INVALID_NEW_USERNAME;
				
			else $install_user_errors[FORM_NEW_USERNAME] = ERR_EMPTY_NEW_USERNAME;
			
			
			# Check if username is empty
			if( !empty( $_POST[FORM_EMAIL] ) )
				
				# Vailidate & Sanitize LAST Name
				if( vEmail( $_POST[FORM_EMAIL] ) )
					$e = _cleanQuery( $_POST[FORM_EMAIL] );
					
				else $install_user_errors[FORM_EMAIL] = ERR_INVALID_NEW_EMAIL;
				
			else $install_user_errors[FORM_EMAIL] = ERR_EMPTY_NEW_EMAIL;
			
			
			# Check if username is empty
			if( !empty( $_POST[FORM_NEW_PASS] ) )
				
				# Vailidate & Sanitize LAST Name
				if( vPassword( $_POST[FORM_NEW_PASS] ) )
					$p1 = _cleanQuery( $_POST[FORM_NEW_PASS] );
					
				else $install_user_errors[FORM_NEW_PASS] = ERR_INVALID_PASS;
				
			else $install_user_errors[FORM_NEW_PASS] = ERR_EMPTY_NEW_PASS;
			
			
			# Check if username is empty
			if( !empty( $_POST[FORM_CONFIRM_NEW_PASS] ) )
				
				# Vailidate & Sanitize LAST Name
				if( vPassword( $_POST[FORM_CONFIRM_NEW_PASS] ) )
					$p2 = _cleanQuery( $_POST[FORM_CONFIRM_NEW_PASS] );
					
				else $install_user_errors[FORM_CONFIRM_NEW_PASS] = ERR_INVALID_PASS;
				
			else $install_user_errors[FORM_CONFIRM_NEW_PASS] = ERR_EMPTY_NEW_PASS;
			
			# Check if passwords are the same
			if( isset( $p1 ) && isset( $p2 ) )
				if( $p1 != $p2 ) $install_user_errors[FORM_CONFIRM_NEW_PASS] = ERR_MM_PASS;
				
			if ( empty( $install_user_errors ) ) 
			{
				# Check if production database name is empty
				if( !empty( $_POST['install_production_url'] ) )
					
					# Vailidate & Sanitize production database name
					if( vUrl( 'http://www.'.$_POST['install_production_url'] ) )
						$pro_url = _cleanQuery( $_POST['install_production_url'] );
						
					else $install_database_errors['install_production_url'] = ERR_INVALID_URL;
					
				else $install_database_errors['install_production_url'] = 'Please enter your production site url.';
				
				# Check if production database name is empty
				if( !empty( $_POST['install_production_db_name'] ) )
					
					# Vailidate & Sanitize production database name
					if( vdb_name( $_POST['install_production_db_name'] ) )
						$pro_dbn = _cleanQuery( $_POST['install_production_db_name'] );
						
					else $install_database_errors['install_production_db_name'] = ERR_INVALID_DB_NAME;
					
				else $install_database_errors['install_production_db_name'] = 'Please enter your production database name.';
				
				
				# Check if production database username is empty
				if( !empty( $_POST['install_production_db_user'] ) )
					
						$pro_dbun = _cleanQuery( $_POST['install_production_db_user'] );
						
				else $install_database_errors['install_production_db_user'] = 'Please enter your production database username.';
				
				
				# Check if production password is empty
				if( !empty( $_POST['install_production_db_pass'] ) )
					
						$pro_dbp = _cleanQuery( $_POST['install_production_db_pass'] );
						
				else $install_database_errors['install_production_db_pass'] = 'Please enter your production database password.';
				
				
				# Check if production host is empty
				if( !empty( $_POST['install_production_db_host'] ) )
					
						$pro_dbh = _cleanQuery( $_POST['install_production_db_host'] );
						
				else $install_database_errors['install_production_db_host'] = 'Please enter your production database host.';
				
				
				# Check if Development input has been entered
				if( !empty( $_POST['install_dev_db_name'] ) || !empty( $_POST['install_dev_db_user'] ) || !empty( $_POST['install_dev_db_pass'] ) || !empty( $_POST['install_dev_db_host'] ) )
				{
					# Check if development database name is empty
					if( !empty( $_POST['install_dev_db_name'] ) )
						
						# Vailidate & Sanitize development database name
						if( vdb_name( $_POST['install_dev_db_name'] ) )
							$dev_dbn = _cleanQuery( $_POST['install_dev_db_name'] );
							
						else $install_database_errors['install_dev_db_name'] = ERR_INVALID_DB_NAME;
						
					else $install_database_errors['install_dev_db_name'] = 'Please enter your development database name.';
				
					# Check if dev database username is empty
					if( !empty( $_POST['install_dev_db_user'] ) )
						
							$dev_dbun = _cleanQuery( $_POST['install_dev_db_user'] );
							
					else $install_database_errors['install_dev_db_user'] = 'Please enter your development database username.';
					
					
					# Check if dev password is empty
					if( !empty( $_POST['install_dev_db_pass'] ) )
						
							$dev_dbp = _cleanQuery( $_POST['install_dev_db_pass'] );
							
					else $install_database_errors['install_dev_db_pass'] = 'Please enter your development database password.';
					
					
					# Check if dev host is empty
					if( !empty( $_POST['install_dev_db_host'] ) )
						
							$dev_dbh = _cleanQuery( $_POST['install_dev_db_host'] );
							
					else $install_database_errors['install_dev_db_host'] = 'Please enter your development database host.';
					
				} // end if( !empty( $_POST['install_dev_db_name'] ) || !empty( $_POST['install_dev_db_user'] ) || !empty( $_POST['install_dev_db_pass'] ) || !empty( $_POST['install_dev_db_host'] ) )
				
				
				# Check if Stage input has been entered
				if( !empty( $_POST['install_stg_db_name'] ) || !empty( $_POST['install_stg_db_user'] ) || !empty( $_POST['install_stg_db_pass'] ) || !empty( $_POST['install_stg_db_host'] ) )
				{
					# Check if stage database name is empty
					if( !empty( $_POST['install_stg_db_name'] ) )
						
						# Vailidate & Sanitize stage database name
						if( vdb_name( $_POST['install_stg_db_name'] ) )
							$stg_dbn = _cleanQuery( $_POST['install_stg_db_name'] );
							
						else $install_database_errors['install_stg_db_name'] = ERR_INVALID_DB_NAME;
						
					else $install_database_errors['install_stg_db_name'] = 'Please enter your stage database name.';
				
					# Check if stg database username is empty
					if( !empty( $_POST['install_stg_db_user'] ) )
						
							$stg_dbun = _cleanQuery( $_POST['install_stg_db_user'] );
							
					else $install_database_errors['install_stg_db_user'] = 'Please enter your stage database username.';
					
					
					# Check if stg password is empty
					if( !empty( $_POST['install_stg_db_pass'] ) )
						
							$stg_dbp = _cleanQuery( $_POST['install_stg_db_pass'] );
							
					else $install_database_errors['install_stg_db_pass'] = 'Please enter your stage database password.';
					
					
					# Check if stg host is empty
					if( !empty( $_POST['install_stg_db_host'] ) )
						
							$stg_dbh = _cleanQuery( $_POST['install_stg_db_host'] );
							
					else $install_database_errors['install_stg_db_host'] = 'Please enter your stage database host.';
					
				} // end if( !empty( $_POST['install_stg_db_name'] ) || !empty( $_POST['install_stg_db_user'] ) || !empty( $_POST['install_stg_db_pass'] ) || !empty( $_POST['install_stg_db_host'] ) )
				
				
			} // end if ( empty( $install_user_errors ) ) 
 
        } // end if (empty($install_website_errors)) { // OK to proceed!
             
     } // end if( empty( $install_website_errors ) )
 
# Create an empty error array if it doesn't already exist:
if (!isset($install_website_errors)) $install_website_errors = array();
if (!isset($install_user_errors)) $install_user_errors = array();
if (!isset($install_database_errors)) $install_database_errors = array();
 ?>
        <form class="custom" action="#" method="POST">
        	<h1><?php get_page_title(); ?></h1>
            <p>Creating your new website only takes a few minutes. Get started below.</p>
            <div class="caption mbs">All fields are required.</div>
            <div class="shdw-install-form">
                <div class="section-container accordion" data-section="accordion">
                <section class="<?php if( $_SERVER['REQUEST_METHOD'] == 'GET' || !empty( $install_website_errors ) )echo 'active' ?>">
                    <p class="title" data-section-title><a href="#panel1">Website</a></p>
                    <div class="content" data-section-content>
                        <div class="row">
                            <?php create_form_input( 'install_site_title', 'text', $install_website_errors, 'Site Title' ); ?>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( 'install_tagline', 'text', $install_website_errors, 'Tagline', 'mbt' ); ?>
                            <div class="caption mbs">&uarr; A couple of words to describe your site.</div>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( 'install_summary', 'textarea', $install_website_errors, 'Site Description', 'mbt' ); ?>
                            <div class="caption mbs">&uarr; A full description of your site. This will be displayed when users search for your site in search engines such as Google. Limited to a couple of sentences.</div>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( 'install_keywords', 'textarea', $install_website_errors, 'Keywords', 'mbt' ); ?>
                            <div class="caption mbs">&uarr; These are the words or phrases users will use to find you on search engines such as Google. Provide at least 20 - 30 seperated by commas. E.g. the best flowers, tulips, plants.</div>
                        </div><!-- end row -->
                         <input name="<?php echo FORM_SUBMIT; ?>" type="submit" class="btn btn-default btn-large btn-block" value="Next" />
                    </div>
                </section>
                <section class="<?php if( empty( $install_website_errors ) && !empty( $install_user_errors ) )echo 'active' ?>">
                    <p class="title" data-section-title><a href="#panel2">User</a></p>
                    <div class="content" data-section-content>
                        <p>This is the master admin user that will manage the site.</p>
                          <div class="row">
                            <div class="small-12 large-6 columns prm">
                                <?php create_form_input( FORM_FIRST_NAME, 'text', $install_user_errors, 'First Name'); ?>
                            </div><!-- end small-12 large-6 columns -->
                            <div class="small-12 large-6 columns">
                                <?php create_form_input( FORM_LAST_NAME, 'text', $install_user_errors, 'Last Name'); ?>
                            </div><!-- end small-12 large-6 columns -->
                            
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( FORM_NEW_USERNAME, 'text', $install_user_errors, 'New Admin Username', 'mbt' ); ?>
                            <div class="caption  mbs">&uarr; Must be between 2 - 30 characters.</div>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( FORM_EMAIL, 'text', $install_user_errors, 'Admin Email', 'mbt' ); ?>
                            <div class="caption  mbs">&uarr; Define Admin Contact email for login &amp; error reporting.</div>
                        </div><!-- end row -->
                        <div class="row">
                            <div class="small-12 large-6 columns prm">
                                <?php create_form_input( FORM_NEW_PASS, 'password', $install_user_errors, 'New Password', 'mbt'); ?>
                                <div class="caption  mbs">&uarr; Must be between 8 - 20 characters, contain at least one number, and one uppercase letter.</div>
                            </div><!-- end small-12 large-6 columns -->
                            <div class="small-12 large-6 columns">
                                <?php create_form_input( FORM_CONFIRM_NEW_PASS, 'password', $install_user_errors, 'Confirm Password'); ?>
                            </div><!-- end small-12 large-6 columns -->
                        </div><!-- end row -->
                        <input name="<?php echo FORM_SUBMIT; ?>" type="submit" class="btn btn-default btn-large btn-block" value="Next" />
                    </div>
                </section>
                <section class="<?php if( empty( $install_user_errors ) )echo 'active' ?>">
                	<?php if( !isset( $t ) ) $t = 'Super Amazing';  if( !isset( $fn ) ) $fn = 'Jane'; if( !isset( $ln ) ) $ln = 'Doe';?>
                    <p class="title" data-section-title><a href="#panel3">Database &amp; Environment</a></p>
                    <div class="content" data-section-content>
                        <p class="mbt">Please setup the database(s) for <?php echo FW_NAME; ?> to connect to.
                        <span class="text-info mbt">If you're unsure of these details, please contact your <strong>webmaster</strong> or <strong>web developer</strong> managing your site.</span></p>
                        <div class="caption mbs">You can always change these database setting at <code><?php echo DB; ?></code> or where ever your <code>db.inc.php</code> file is located.</div>
                        <h3>Production Environment</h3>
                        <div class="row">
                        	<div class="text-danger fs11"><strong>Important!</strong></div>
                            <div class="row">
                            	<div class="small-4 large-3 columns">
                                	<span class="prefix">http://www.</span>
                                </div><!-- end small-3 columns -->
                                <div class="small-8 large-9 columns">
                                	<?php create_form_input( 'install_production_url', 'text', $install_database_errors, 'Site URL', 'mbt' ); ?>
                                </div><!-- end small-9 columns -->
                            </div><!-- end row -->	
                            <div class="caption  mbs">&uarr; Enter the url associated with your website. E.g. <code><?php echo strtolower( str_replace( ' ', '', $t ) ).'.com'; ?></code> or <code><?php echo 'beta.'.strtolower( str_replace( ' ', '', $fn. $ln ) ).'.com'; ?></code>.</div>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( 'install_production_db_name', 'text', $install_database_errors, 'Production Database Name', 'mbt' ); ?>
                            <div class="caption  mbs">&uarr; Most likely prefixed with username E.g. <code>username_database-name</code>.</div>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( 'install_production_db_user', 'text', $install_database_errors, 'Production Database Username' ); ?>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( 'install_production_db_pass', 'password', $install_database_errors, 'Production Database Password' ); ?>
                        </div><!-- end row -->
                        <div class="row">
                            <?php create_form_input( 'install_production_db_host', 'text', $install_database_errors, 'Production Database Host', 'mbt' ); ?>
                            <div class="caption  mbs">&uarr; Most likely <code>localhost</code>.</div>
                        </div><!-- end row -->
                        <a onclick="toggle_visibility('add-dev-env')" class="block mts">Add a development environment</a>
                        <div id="add-dev-env" style="display:<?php if( empty( $_POST['install_dev_db_name'] ) && empty( $_POST['install_dev_db_user'] ) && empty( $_POST['install_dev_db_pass'] ) && empty( $_POST['install_dev_db_host'] ) ) echo 'none'; ?>;">
                            <hr/>
                            <h3>Development Environment <span class="caption">Optional</span></h3>
                            <div class="row">
                        	<div class="text-danger fs11"><strong>Important!</strong></div>
                                <div class="row">
                                    <div class="small-4 large-3 columns">
                                        <span class="prefix">http://</span>
                                    </div><!-- end small-3 columns -->
                                    <div class="small-8 large-9 columns">
                                        
                                    </div><!-- end small-9 columns -->
                                </div><!-- end row -->	
                                <div class="caption  mbs">&uarr; Enter the url associated with your development environment. E.g. <code><?php echo 'localhost/'. strtolower( str_replace( ' ', '', $t ) ); ?></code> or <code><?php echo strtolower( str_replace( ' ', '', $fn. $ln ) ).'.dev'; ?></code>.</div>
                            </div><!-- end row -->
                            <div class="row">
                                <?php create_form_input( 'install_dev_db_name', 'text', $install_database_errors, 'Development Database Name', 'mbt' ); ?>
                                <div class="caption  mbs">&uarr; Most likely prefixed with username E.g. <code>username_database-name</code>.</div>
                            </div><!-- end row -->
                            <div class="row">
                                <?php create_form_input( 'install_dev_db_user', 'text', $install_database_errors, 'Development Database Username' ); ?>
                            </div><!-- end row -->
                            <div class="row">
                                <?php create_form_input( 'install_dev_db_pass', 'password', $install_database_errors, 'Development Database Password' ); ?>
                            </div><!-- end row -->
                            <div class="row">
                                <?php create_form_input( 'install_dev_db_host', 'text', $install_database_errors, 'Development Database Host', 'mbt' ); ?>
                                <div class="caption  mbs">&uarr; Most likely <code>localhost</code>.</div>
                            </div><!-- end row -->
                        </div><!-- end add-dev-env -->
                        <a onclick="toggle_visibility('add-stg-env')" class="block mts mbm">Add a stage/testing environment</a>
                        <div id="add-stg-env" style="display:<?php if( empty( $_POST['install_stg_db_name'] ) && empty( $_POST['install_stg_db_user'] ) && empty( $_POST['install_stg_db_pass'] ) && empty( $_POST['install_stg_db_host'] ) ) echo 'none'; ?>;">
                            <hr/>
                            <h3>Stage/Testing Environment <span class="caption">Optional</span></h3>
                            <div class="row">
                                <?php create_form_input( 'install_stg_db_name', 'text', $install_database_errors, 'Stage Database Name', 'mbt' ); ?>
                                <div class="caption  mbs">&uarr; Most likely prefixed with username E.g. <code>username_database-name</code>.</div>
                            </div><!-- end row -->
                            <div class="row">
                                <?php create_form_input( 'install_stg_db_user', 'text', $install_database_errors, 'Stage Database Username' ); ?>
                            </div><!-- end row -->
                            <div class="row">
                                <?php create_form_input( 'install_stg_db_pass', 'password', $install_database_errors, 'Stage Database Password' ); ?>
                            </div><!-- end row -->
                            <div class="row">
                                <?php create_form_input( 'install_stg_db_host', 'text', $install_database_errors, 'Stage Database Host', 'mbt' ); ?>
                                <div class="caption  mbs">&uarr; Most likely <code>localhost</code>.</div>
                            </div><!-- end row -->
                      	</div><!-- end add-stg-env -->
                      <input name="<?php echo FORM_SUBMIT; ?>" type="submit" class="btn btn-primary btn-large btn-block" value="Install" />
                    </div>
                </section>
           	</div>
        </form>
    </div><!-- end shdw-login-form -->
    
</div><!-- end mCenter mxw700 -->

<?php shdw_footer(); ?>