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
<?php $e = new Environment; $e->environment_notice(); unset( $e ); ?>

    <section>
        <h2><?php echo SITE_NAME; ?></h2>
        <p><?php echo TAGLINE; ?></p>
        ------------------------------------------------------------------------
   	</section>
    
	
