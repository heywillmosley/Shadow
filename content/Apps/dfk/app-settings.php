<?php # Prevents direct script access
if(!defined('INDEX')){require'../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
define( 'APP_VER', '2.0.0' );

	
define( 'TAGLINE' , 'The life, the mission, of Dr. Frank King.');

# Use Google Fonts
define( 'USE_GOOGLE_FONTS', TRUE );

# Set Google Font Family
define( 'GOOGLE_FONTS', 'Euphoria+Script|Zeyada' );

# Google Analytics
define( 'GOOGLE_ANALYTICS', TRUE );