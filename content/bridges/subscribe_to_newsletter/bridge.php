

<?php 
if( defined('SYS_VER' ) )
{
	if( !class_exists('Mailchimp') )
		require_once BRIDGE_URI.'subscribe_to_newsletter/mailchimp/bridge.php';
		
}
else
{
	echo '<link href="subscribe_to_newsletter/styles.css" rel="stylesheet" type="text/css">';
	include 'subscribe_to_newsletter/mailchimp/bridge.php';
	include 'subscribe_to_newsletter/class.Form.inc.php';
}

/* ############################# */
/* ##### SET FORM ELEMENTS ##### */

$form = new Form( 'new_mc_subscriber', 'mxw400 mCenter' );
$firstName = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'text', // REQUIRED
		'name'        => 'fname', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'First Name',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => 'Enter your first name.',
		'val_name'    => 'Please enter a valid name.'
) ); // end $siteTitle = new Element

$lastName = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'text', // REQUIRED
		'name'        => 'name', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Last Name',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => 'Enter your first name.',
		'val_name'    => 'Please enter a valid name.'
) ); // end $siteTitle = new Element

$email = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'email', // REQUIRED
		'name'        => 'email', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Email',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => 'Please enter email.',
		'val_email'   => 'Please enter a valid email.'
) ); // end $siteTitle = new Element

$subscribe = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'submit', // REQUIRED
		'name'        => 'submit', // REQUIRED a-z only, dashes, underscores, no spaces
		'class'       => 'btn-info',
		'value'       => 'Subscribe',
) ); // end $siteTitle = new Element
	

/* ##### SET FORM ELEMENTS ##### */
/* ############################# */

/* #################### */
/* ##### THE FORM ##### */	

$form->openForm();

if( !$form->isSubmitted() || !$firstName['v'] || !$lastName['v'] || !$email['v'] )
{ 
?>
	
		<h3 class="mbt" style="color: #77BC43;">Join the Healing Revolution<sup style="top:-5.5px">&trade;</sup>!</h3>
        <div class="row">
        	<div class="col-xs-3 pan">
            	<style>
					.newsletter-cover{
						-webkit-box-shadow:  0px 0px 1px 1px rgba(0, 0, 0, .2);
        				box-shadow:  0px 0px 1px 1px rgba(0, 0, 0, .2);
					}
				</style>
            	<?php if( defined('SYS_VER' ) ) : ?>
					<img class="mbs newsletter-cover" src="<?php echo BRIDGE_URL; ?>subscribe_to_newsletter/newsletter.jpg" alt="newsletter" />
               	<?php else : ?>
                	<img class="mbs newsletter-cover" src="subscribe_to_newsletter/newsletter.jpg" alt="newsletter" />
                <?php endif; ?>
            </div><!-- end col-4 -->
            <div class="col-xs-9 pls prn">
            	<p>Join our mailing list to receive future promotions and updates from King Bio.</p>
            </div><!-- end col-xs-8 -->
        </div><!-- end row -->
		<div class="caption">All fields are required.</div>
		<?= $firstName['e']; ?>
		<?= $lastName['e']; ?>
		<?= $email['e']; ?>
		<?= $subscribe['e']; ?>
	
	
	
<?php 
} // end error check

/* ##### THE FORM ##### */
/* #################### */

/* ##################################### */
/* ##### CONTINUE AFTER VALIDATION ##### */

else // run form
{ 
	# New Mailchimp settings
	$apikey = 'df655cc3ab3c189ff2a6965857adb32e-us7'; // Your Mailchimp API key
	$list_id = '7b83669d3b'; // # Your Mailchimp mailing list ID
	
	# Create new API object & Create new list object
	$api = new Mailchimp( $apikey );
	$mailchimp_lists = new Mailchimp_Lists( $api );
	
	
	# Email being subscribed
	$subscriber_email = array(
		"emails" => array(
			"email" => $email['output']
		)
	);
	
	# More options (such as name)
	$merge_vars = array(
		'FNAME' => $firstName['output'],
		'LNAME' => $lastName['output']
	);
	
	
	$member = $mailchimp_lists->memberInfo( $list_id, $subscriber_email );
	
	# Check if member exists in Mailchimp List
	if( $member['success_count'] )
	{
		echo '<div class="alert alert-info"><p><strong>Welcome back!</strong> You’re already registered as a member of The Healing Revolution.
			<div class="fs13 block mtt">Please encourage your family and friends to join the journey too.</div> </p></div>';
		
	} // end ( $member['success_count'] )
	
	# Member doesn't exist in database, add them
	else
	{
		# format for subscription list
		$subscriber_email = array(
			"email" => $email['output']
		);
		
		# SUBSCRIBE TO LIST
	if ( $mailchimp_lists->subscribe($list_id, $subscriber_email, $merge_vars) )
		echo '<div class="alert alert-success"><p>Thanks! You\'re one step away from becoming a subscriber. <strong>Check your email to finalize registration.</strong> Confirmation email will arrive shortly.</p></div>';
	else
		echo '<div class="alert alert-danger">An error occured. Please try again.</div>';
		
	} // end else
		

} // end else

$form->closeForm(); 

/* ##### CONTINUE AFTER VALIDATION ##### */
/* ##################################### */

?>