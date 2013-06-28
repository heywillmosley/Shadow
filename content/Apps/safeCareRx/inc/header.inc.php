<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * This is the main page
 * This page includes the configuration file,
 * the templates, and any content-specific modules.
 */
 
// --------------------------------------------------------------------------------?>

<body data-responsejs='{
    "create": [
    { "breakpoints": [0,301,320,600,480,768,992,1382], "mode": "src", "prefix": "src" }, 
    { "breakpoints": [0,301,320,600,480,768,992,1382], "mode": "markup", "prefix": "r" }
    ]}'>

<div class="wrapper">
<?php $e = new Environment; $e->environment_notice(); unset( $e ); ?>
<div data-alert class="alert-box">
	For Professional Practioner Use Only
</div><!-- end notice -->

<div class="relative">
    <section class=" scrx  phs">
        <ul class="side-nav main-nav hide">
        	<li><a href="<?php echo SITE_URL; ?>"><img class="pas w200" src="<?php echo APP_IMG_URL.'safecarerx-logo.png'; ?>" alt="Go Home" /></a></li>
            <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
            <li><a href="<?php echo SITE_URL.'homeopathy'; ?>">About Homeopathy</a></li>
            <li><a href="<?php echo SITE_URL.'safecarerx-medicine'; ?>">SafeCareRx + Medicine</a></li>
            <li><a href="<?php echo SITE_URL.'products'; ?>">Our Products</a></li>
            <li><a href="<?php echo SITE_URL.'products'; ?>">Clinical Studies</a></li>
            <li><a href="<?php echo SITE_URL.'manuals'; ?>">Manuals & Guides</a></li>
            <li><a href="<?php echo SITE_URL.'other-services'; ?>">Other Services</a></li>
            <li><a href="<?php echo SITE_URL.'contact'; ?>">Contact</a></li>
            <li><a href="<?php echo SITE_URL.'start'; ?>" class="primary button">Become a Provider</a></li>
        </ul>
        <div class="footer row">
	<div class="left">&copy; <?php auto_copyright(); echo ' ' . SITE_NAME; ?></div>
    <div class="right">
    	<a href="#" class="txt_wht">&uarr; Back to the Top</a>
    </div>
</div><!-- end footer -->
    </section>
    <section>
    
	
