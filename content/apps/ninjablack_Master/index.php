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
 * Home page template
 */
 
// --------------------------------------------------------------------------------

# includes header.php
app_header();  
?>
<div class="pas">
    <div class="row">
        <div class="small-12 large-8 columns">
        	<h1>Main Content</h1>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus non odio fermentum, volutpat augue et, faucibus eros. Maecenas iaculis suscipit massa, sed bibendum massa condimentum ac. Suspendisse vitae viverra felis, eget adipiscing nunc. Sed vestibulum, diam vel pharetr</p>
            <p>Mauris gravida risus dui, quis hendrerit enim rutrum non. Nam pretium auctor metus vel ullamcorper. Nam at felis mauris. Fusce fringilla enim malesuada lacinia rutrum. Etiam dictum quis nibh vitae ultrices. Integer vulputate urna sed diam auctor, vel blandit mauris scelerisque. Nam at ullamcorper mauris, nec pharetra quam. Mauris vitae elit ullamcorper, viverra augue id, tincidunt tellus.</p>
            <p>Vestibulum arcu leo, vestibulum non lectus eu, interdum pretium nisi. Nulla nec interdum nibh. Ut eu lacinia nisl, quis pharetra est. Curabitur enim justo, sagittis ac enim eget, semper gravida lectus. Vestibulum iaculis orci sapien, sed aliquam urna suscipit sed. Cras auctor pulvinar ullamcorper. Vivamus eget sodales mi. Cras sit amet fermentum tellus. Morbi nec vehicula augue, in auctor magna. Vivamus vel tortor nec ligula pulvinar tempor eget ut ipsum.</p>
    
            <p>Suspendisse sed mattis tellus. Aenean eu aliquam neque, vel condimentum nisl. Vestibulum egestas, lorem sit amet fringilla eleifend, lacus ligula porttitor tortor, et porttitor orci est tempor diam. Duis sem eros, lobortis at velit sed, interdum luctus velit. Praesent eleifend consectetur metus, eu blandit velit tempor ac. Suspendisse sit amet augue turpis. Nullam nec tristique libero, quis porttitor lacus. Maecenas porttitor libero mi, quis eleifend purus egestas ut.</p>
    
            <p>Vivamus fermentum magna eu pretium accumsan. Nunc urna neque, suscipit id erat et, suscipit posuere nisi. Nulla molestie mauris sem, nec varius urna facilisis sit amet. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque vehicula dignissim dui. Praesent varius ut lacus sed faucibus. Nulla et nunc vitae mauris bibendum facilisis vel a ante. Proin sit amet erat diam. Nunc commodo ipsum sapien, ac sollicitudin eros lacinia lacinia. Donec mi quam, aliquet nec justo at, ornare laoreet velit. Sed eu pellentesque odio. Fusce feugiat at risus ac dictum. Ut id augue quis odio lacinia commodo nec a lorem. Vivamus nisi augue, aliquet quis augue in, semper tincidunt mauris. Integer gravida auctor porta. In laoreet vulputate justo, et dignissim leo eleifend et.</p>
        </div><!-- end small-12 large-8 columns -->
        <div class="small-12 large-4 columns">
        	<div class="pls">
            	<?php loginForm(); ?>
                
                <?php
				
				$form = new Form( 'new_mc_subscriber' );
					$firstName = $form->addElement( array( 
							# ELEMENT ATTRIBUTES 
							'type'        => 'text', // REQUIRED
							'name'        => 'fname', // REQUIRED a-z only, dashes, underscores, no spaces
							'placeholder' => 'First Name',
							# VALIDATION  => Custom Error Message
							# RULE           Leave blank for default message
							'val_req'     => ERR_EMPTY_FIRST_NAME,
							'val_name'    => ERR_INVALID_FIRST_NAME
					) ); // end $siteTitle = new Element
					
					$lastName = $form->addElement( array( 
							# ELEMENT ATTRIBUTES 
							'type'        => 'text', // REQUIRED
							'name'        => 'name', // REQUIRED a-z only, dashes, underscores, no spaces
							'placeholder' => 'Last Name',
							# VALIDATION  => Custom Error Message
							# RULE           Leave blank for default message
							'val_req'     => ERR_EMPTY_LAST_NAME,
							'val_name'    => ERR_INVALID_LAST_NAME
					) ); // end $siteTitle = new Element
					
					$email = $form->addElement( array( 
							# ELEMENT ATTRIBUTES 
							'type'        => 'email', // REQUIRED
							'name'        => 'email', // REQUIRED a-z only, dashes, underscores, no spaces
							'placeholder' => 'Email',
							# VALIDATION  => Custom Error Message
							# RULE           Leave blank for default message
							'val_req'     => ERR_EMPTY_NEW_EMAIL,
							'val_email'   => ERR_INVALID_NEW_EMAIL
					) ); // end $siteTitle = new Element
					
					$subscribe = $form->addElement( array( 
							# ELEMENT ATTRIBUTES 
							'type'        => 'submit', // REQUIRED
							'name'        => 'submit', // REQUIRED a-z only, dashes, underscores, no spaces
							'class'       => 'btn-info',
							'value' => 'Subscribe',
					) ); // end $siteTitle = new Element
					
					
					# CHECK FOR ERRORS
					if( $_SERVER['REQUEST_METHOD'] == 'POST' && $firstName['valid'] && $lastName['valid'] && $email['valid'] )
					{
						
						# New Mailchimp settings
						$apikey = 'df655cc3ab3c189ff2a6965857adb32e-us7'; // Your Mailchimp API key
						$list_id = '482657ae49'; // # Your Mailchimp mailing list ID
						
						# Create new API object & Create new list object
						$api = new Mailchimp( $apikey );
						$mailchimp_lists = new Mailchimp_Lists( $api );
						
						# Email being subscribed
						$subscriber_email = array(
							"email" => $email['output'],
						);
						
						# More options (such as name)
						$merge_vars = array(
							'FNAME' => $firstName['output'],
							'LNAME' => $lastName['output']
						);
						
						
						# SUBSCRIBE TO LIST
						if ( $mailchimp_lists->subscribe($list_id, $subscriber_email, $merge_vars) )
							echo '<div class="alert alert-success"><p>Thanks! You\'re one step away from becoming a subscriber. <strong>Check your email to finalize registration.</strong> Confirmation email will arrive shortly.</p></div>';
						else
							echo '<div class="alert alert-danger">An error occured. Please try again.</div>';
						
					} // end error check
					
					else // run form
					{
						$form->openForm();
							?> 
                            	<h2 class="mbt">Become a part of The Healing Revolution<sup style="top:-5.5px">&trade;</sup>!</h2>
                            	<div class="media">
                                	<div class="pull-left">
                                    	<img class="pbs" src="<?php echo APP_IMG_URL; ?>steve-jobs-magazine-cover.jpg" alt="newsletter" />
                                    </div><!-- end pull-left -->
                                    <div class="media-body">
                                    	
                                        <p>Join our mailing list to receive future promotions and updates from (company name).</p>
                                    </div><!-- end media-body -->
                                </div><!-- end media -->
                                
                            
                            <?php
							echo $firstName['element'];
							echo $lastName['element'];
							echo $email['element'];
							echo $subscribe['element'];
						echo '</form>';
					}
				
				
				?>
          	</div><!-- end pls -->
        </div><!-- end small-12 large-4 columns -->
    </div><!-- end row -->
</div><!-- end pas -->

<?php 
# includes footer.php
app_footer();

