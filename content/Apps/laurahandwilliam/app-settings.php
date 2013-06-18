<?php # Prevents direct script access
if(!defined('FRONT_URI')){require'../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * This script sets user application settings
 */
 
// --------------------------------------------------------------------------------

# Current App Version
define( 'APP_VER', '0.1' );

define( 'SITE_NAME' , 'Laurah & William');
	
define( 'TAGLINE' , 'Big Moments for us.');

# Use Google Fonts
define( 'USE_GOOGLE_FONTS', FALSE );

# Set Google Font Family
define( 'GOOGLE_FONTS', 'Roboto:400,100,400italic,900' );

# Google Analytics
define( 'GOOGLE_ANALYTICS', TRUE );