<?php
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
 * System Functions
 */
 
// --------------------------------------------------------------------------------

/**
 * General Settings
 */
	# Define Admin Contact email for error reporting
	define( 'ADMIN_NAME', 'William Mosley, III' );
	
	# Define Admin Contact email for error reporting
	define( 'ADMIN_EMAIL', 'will@livesuperamazing.com' );
	
	# Define mailing email
	define( 'MAIL_EMAIL', 'will@livesuperamazing.com' );
	
	/* Shadow Level location on server
	 * E.g.
	 * 0 = /shadow (root)
	 * 1 = /folder/shadow
	 * 2 = /folder/folder/shadow */
	define( 'SHADOW_URI_LEVEL', 0 );
	
	# Define current App
	define( 'CURRENT_APP', 'laurahandwilliam' );
	
	/* Define app type\
	 * Types:
	 * -Parent
	 * -Child */
	define( 'CURRENT_APP_TYPE', 'parent' );
	
	# Migration
	define( 'SHDW_MIGRATION', FALSE );


	
# Prevents direct script access
if(!defined('FRONT_URI')){require'system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}