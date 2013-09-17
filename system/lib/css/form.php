<?php

/* ############################# */
/* ##### SET FORM ELEMENTS ##### */

$form = new Form( 'form-name-here' );
$firstName = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'text', // REQUIRED
		'name'        => 'fname', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'First Name',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => '',
		'val_name'    => ''
) ); // end $siteTitle = new Element

$lastName = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'text', // REQUIRED
		'name'        => 'name', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Last Name',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => '',
		'val_name'    => ''
) ); // end $siteTitle = new Element

$email = $form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'email', // REQUIRED
		'name'        => 'email', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Email',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => '',
		'val_email'   => ''
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
	
		<h2 class="mbt">Sign Up Now</h2>
		<div class="media">
			<div class="pull-left">
            	<?php if( defined('SYS_VER' ) ) : ?>
					<img class="pbs" src="<?php echo BRIDGE_URL; ?>subscribe_to_newsletter/newsletter.jpg" alt="newsletter" />
               	<?php else : ?>
                	<img class="pbs" src="subscribe_to_newsletter/newsletter.jpg" alt="newsletter" />
                <?php endif; ?>
			</div><!-- end pull-left -->
			<div class="media-body">
				
<<<<<<< HEAD
				<p>Join our mailing list to receive future promotions and updates from SafeCareRx.</p>
||||||| merged common ancestors
				<p>Join our mailing list to receive future promotions and updates from (company name).</p>
=======
				<p>Join our mailing list to receive future promotions and updates from King Bio.</p>
>>>>>>> 777982be184790010de41bc0476a7b534adee9bd
			</div><!-- end media-body -->
		</div><!-- end media -->
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
	# Success. Do stuff after validation...	

} // end else

$form->closeForm(); 

/* ##### CONTINUE AFTER VALIDATION ##### */
/* ##################################### */