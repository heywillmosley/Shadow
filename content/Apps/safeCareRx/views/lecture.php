<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 
// --------------------------------------------------------------------------------?>

<body data-responsejs='{
    "create": [
    { "breakpoints": [0,301,320,600,480,768,992,1382], "mode": "src", "prefix": "src" }, 
    { "breakpoints": [0,301,320,600,480,768,992,1382], "mode": "markup", "prefix": "r" }
    ]}'>

<div class="wrapper">
<?php $e = new Environment; $e->environment_notice(); unset( $e ); ?>

<div class="site-background"></div>
<div id="lecture-page">    
	<div class="pas">
        <div class="row pvm">
            
        </div><!-- end row -->
        <div class="row">
        	<div class="small-2 columns">
            	<a href="<?php echo SITE_URL; ?>" class="button">&larr; Back to SafeCareRx Home</a>
            </div><!-- end small-6 columns -->
            <div class="small-10 columns">
            	<a href="<?php echo SITE_URL; ?>"><img class="pas w300" src="<?php echo APP_IMG_URL.'safecarerx-logo.png'; ?>" alt="Go Home" /></a>
            </div><!-- end small-6 columns -->
        </div><!-- end row -->
         
   	</div><!-- end pas -->

    <div id="lecture-hero">
    	<div class="headline">Free Lecture & Dinner</div>
    	<h1 class="txtC">"The Science and Best Practices for Tomorrow's Health Care...Today"</h1>
        <div data-alert class="alert-box txtC">
            <strong>Presented by Dr. Steven Ross, National Sales Manager, SafeCarRx</strong>
        </div>
        <div class="a"
    	<div class="row">
        	<div class="small-6 columns">
            	<div class="mxh400 ofh">
            		<img class="" src="<?php echo APP_IMG_URL.'iStock_doc+patient talking2.jpg'; ?>" alt="Doctor with Patient" />
              	</div>
                <div class="prs">
                	<a href="#rsvp" class="large primary button w100p mvs">RSVP Now</a>
              	</div><!-- end phs -->
            </div><!-- end small-6 columns -->
            <div class="small-6 columns">
            	<div class="event-time">
                    <h2>Wednesday, July 24th</h2>
                    <h1>6:00pm</h1>
                    <h3>Maggiano's<br/>
                        16405 N. Scottsdale Rd.<br/>
                        Scottsdale, AZ 85254-1578</h3>
              	</div>
                <ul class="side-nav">
                	<li><h2 class="man">Learn &darr;</h2></li>
                	<li>What the future of health care has to offer you. </li>
                    <li>How to apply integrative medicine in your practice.</li>
                    <li>How to improve your patient outcomes, and grow your practice.</li>
                </ul>
            </div><!-- end small-6 columns -->
        </div><!-- end row -->
        <div class="row">
            <div class="small-12 columns">
                
            </div><!-- end small-12 columns -->
        </div><!-- end row -->
  	</div><!-- end lecture header -->
    <div id="event">
    	<h1>The Event</h1>
    </div><!-- end event -->
    <div id="doctor">
    	<h1>Speakers</h1>
    </div><!-- end doctors -->
    
    <?php 
	# Validate Form
	
	# Set Errors array
	$errors = array(); 
	
	# Check for form submission
	if( $_SERVER['REQUEST_METHOD'] == 'POST' )
	{
		# Full name validation and santization
		if( !empty( $_POST[FORM_FULLNAME] ) )
		{
			if( vFullName( $_POST[FORM_FULLNAME] ) )
				
				$n = _cleanQuery( $_POST[FORM_FULLNAME] );
				
			else $errors[FORM_FULLNAME] = ERR_INVALID_FULLNAME;
			
		} else $errors[FORM_FULLNAME] = ERR_EMPTY_FULLNAME;
		
	# Email validation and santization
	if( !empty( $_POST[FORM_NEW_EMAIL] ) )
	{
		if( vEmail( $_POST[FORM_NEW_EMAIL] ) )
			
			$e = _cleanQuery( $_POST[FORM_NEW_EMAIL] );
			
		else $errors[FORM_NEW_EMAIL] = ERR_INVALID_NEW_EMAIL;
		
	} else $errors[FORM_NEW_EMAIL] = ERR_EMPTY_NEW_EMAIL;
	
	# Telephone validation and santization
	if( !empty( $_POST[FORM_NEW_PHONE] ) )
	{
		if( vUSPhone( $_POST[FORM_NEW_PHONE] ) )
			
			$p = _cleanQuery( $_POST[FORM_NEW_PHONE] );
			
		else $errors[FORM_NEW_PHONE] = ERR_INVALID_NEW_PHONE;
		
	} else $errors[FORM_NEW_PHONE] = ERR_EMPTY_NEW_PHONE;
	
	
	# Telephone validation and santization
	$a = _cleanQuery( $_POST[FORM_NEW_FULL_ADDRESS] );
	
	# Set opt-in results
	if(isset($_POST[FORM_OPT_IN]) && $_POST[FORM_OPT_IN] == 'on') 
		$o = 'Yes';
		
	else
		$o = "No";
		
	

		
		
	} // end if( $_SERVER['REQUEST_METHOD'] == 'POST' )

	
	?>
    <div id="rsvp">
    	<?php 
			if(  $_SERVER['REQUEST_METHOD'] == 'POST' && empty( $errors ) )
			{	
				# Send to Marie
				$to = $e;
				$subject = "Test mail";
				$from = 'procsr@safecarerx.com';
				
				$message = "<h1>This is the Customer header message</h1>";
				$message .= "<p>This is why you're receiving this message. Please add.</p>";
				$message .= "<p>Name: $n</p>";
				$message .= "<p>Email: $e</p>";
				$message .= "<p>Phone Number: $p</p>";
				$message .= "<p>Address: $a</p>";
				$message .= "<p>Opt-in to King Bio Newsletters & Updates: $o</p>";
				
				$headers = "From:" . $from;
				mail($to,$subject,$message,$headers);
				
				echo $message;
			
				
				# Send to Marie
				$b_to = "procsr@safecarerx.com, nicolewillis2@aol.com";
				$b_subject = "Test mail";
				$b_from = 'procsr@safecarerx.com';
				
				$b_message = "<h1>This is the header message</h1>";
				$b_message .= "<p>This is why you're receiving this message. Please add.</p>";
				$b_message .= "<p>Name: $n</p>";
				$b_message .= "<p>Email: $e</p>";
				$b_message .= "<p>Phone Number: $p</p>";
				$b_message .= "<p>Address: $a</p>";
				$b_message .= "<p>Opt-in to King Bio Newsletters & Updates: $o</p>";
				
				$headers = "From:" . $from;
				mail($b_to,$b_subject,$b_message,$headers);
				
				echo $b_message;
				
			?>
				<h1 class="txt_success">Great! You've successfully RSVPed.</h1>
                <p>We've sent you an email with the lecture details and confirmation of your attendance.</p>
				<?php $errors = NULL; ?>
				
			<?php } // end if( empty( $errors ) )
		?>
    	<?php if( $_SERVER['REQUEST_METHOD'] != 'POST' || !empty($errors) ) : ?>
            <h1> RSVP Now</h1>
            <form class="custom" action="#rsvp" method="POST">
                <div class="row">
                    <?php create_form_input( FORM_FULLNAME, 'text', $errors, 'Full Name & Title', 'mbt' ); ?>
                    <div class=" pbm"><span class="caption fs14"> &uarr; E.g. Dr. Tom Smith, M.D.</span></div>
                </div><!-- end row -->
                <div class="row">
                    <?php create_form_input( FORM_NEW_EMAIL, 'text', $errors, 'Email' ); ?>
                </div><!-- end row -->
                <div class="row">
                    <?php create_form_input( FORM_NEW_PHONE, 'text', $errors, 'Phone Number' ); ?>
                </div><!-- end row -->
                <div class="row">
                    <?php create_form_input( FORM_NEW_FULL_ADDRESS, 'textarea', $errors, 'Address' ); ?>
                </div><!-- end row -->
                <div class="row">
                    <?php create_form_input( FORM_OPT_IN, 'checkbox', $errors, 'Receive future updates from King Bio.', FALSE, FALSE, '$_POST', TRUE ); ?>
                </div><!-- end row -->
                <div class="row">
                    
                </div>
                <input name="<?php echo FORM_SUBMIT; ?>" type="submit" class="large primary button pam rsvp" value="RSVP" />
            </form>
      	<?php endif; ?>
    </div><!-- end rsvp -->
    <div id="kingbio">
    <h1>Brought to you by King Bio Content</h1>
</div><!-- end doctors -->
</div><!-- end pas -->


