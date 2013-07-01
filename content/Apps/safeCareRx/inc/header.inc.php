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

<div class="site-background"></div>

<div class="relative">
    <section class=" scrx">
    	<div class="relative h70">
        	<div class="left side w200">
            	<a href="<?php echo SITE_URL; ?>"><img class="pas w200" src="<?php echo APP_IMG_URL.'safecarerx-logo.png'; ?>" alt="Go Home" /></a>
            </div><!-- end left side w200 -->
            <div class="ls200">
            	<div class="ptm hide-for-small"><a href="<?php echo SITE_URL.'start'; ?>" class="primary button w200">Become a Provider</a></div>
            	<a href="#" class="right pas drop-nav-trigger" onclick="toggle_visibility('drop-nav')"><span class="menu">Menu</span><img src="<?php echo APP_IMG_URL.'iconmonstr-menu-icon.png'; ?>" alt="Menu" /></a>
            	
            </div><!-- end ls200 -->
        </div><!-- end -->
    	
        <ul id="drop-nav" class="drop-nav">
            <li><a href="<?php echo SITE_URL.'safecarerx-medicine'; ?>">Our Medicine</a></li>
            <li><a href="<?php echo SITE_URL.'products'; ?>">Products</a></li>
            <li><a href="<?php echo SITE_URL.'manuals'; ?>">Manuals</a></li>
            <li><a href="<?php echo SITE_URL.'other-services'; ?>">Other Services</a></li>
            <li><a href="<?php echo SITE_URL.'contact'; ?>">About</a></li>
            <li><a href="<?php echo SITE_URL.'contact'; ?>">Contact</a></li>
            <li class="has-button show-for-small"><a href="<?php echo SITE_URL.'start'; ?>" class="primary button mtm">Become a Provider</a></li>
        </ul>
    </section>
    <section>
    
	
