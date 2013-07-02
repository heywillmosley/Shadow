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
 * @since          Version 1.1.5
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
	<?php environment_notice(); ?>
    <div data-alert class="alert-box alert">
  		This is a medical disclaimer
	</div>
    <div class="relative">
        <nav class="actionbar">
            <a href="#"><h1 class="left handwriting"><?php echo SITE_NAME; ?></h1></a>
            <dl class="sub-nav right pal">
              <dd><a href="#">About</a></dd>
              <dd><a href="#">Stories</a></dd>
              <dd><a href="#">Education</a></dd>
              <dd><a href="#">Events</a></dd>
              <dd><a href="#">Contact</a></dd>
            </dl>
        </nav>
   	</div><!-- end relative -->
    
    
    
    
	
