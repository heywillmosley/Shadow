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
            <a href="<?php echo SITE_URL; ?>" class="button">&larr; Back to SafeCareRx Home</a>
        </div><!-- end row -->
         <a href="<?php echo SITE_URL; ?>"><img class="pas w200" src="<?php echo APP_IMG_URL.'safecarerx-logo.png'; ?>" alt="Go Home" /></a>
   	</div><!-- end pas -->

    <div id="lecture-hero">
    	<img class="bg-image hide" src="<?php echo APP_IMG_URL.'iStock_doc+patient talking.jpg'; ?>" alt="Doctor with Patient" />
        <div class="row">
            <div class="small-12 columns">
                <div class="headline">Free Lecture & Dinner June 24th, 2013</div>
                <a href="#rsvp" class="large primary button mtl">RSVP Now</a>
                <div class="label pas mls fs16">Free Lecture & Dinner</div>
            </div><!-- end small-12 columns -->
        </div><!-- end row -->
  	</div><!-- end lecture header -->
    <div id="event">
    	<h1> This is content about the event</h1>
    </div><!-- end event -->
    <div id="doctor">
    	<h1> This is content about Dr. Ross</h1>
    </div><!-- end doctors -->
    <div id="rsvp">
    	<h1> RSVP Now</h1>
        <form class="custom" action="#" method="POST">
        	<div class="row">
            	<?php $f = new Form; $reg_errors = NULL; ?>
        		<input type="text" name="name" placeholder="Full Name" />
                <?php $f->create_form_input( 'full_name', 'text', $reg_errors ); ?>
         	</div><!-- end row -->
            <div class="row">
            	<input type="text" name="email" placeholder="Email" />
          	</div><!-- end row -->
            <div class="row">
            	<input type="text" name="phone" placeholder="Phone Number" />
          	</div><!-- end row -->
            <div class="row">
            	<textarea name="address" placeholder="Address"></textarea>
          	</div><!-- end row -->
            <div class="row">
       			<label for="checkbox1"><input type="checkbox" CHECKED><span class="pls checkbox">Receive future updates from King Bio.</span></label>
			</div>
            <input type="submit" class="large primary button pam rsvp" value="RSVP" />
        </form>
    </div><!-- end rsvp -->
    <div id="kingbio">
    <h1>Brought to you by King Bio Content</h1>
</div><!-- end doctors -->
</div><!-- end pas -->


