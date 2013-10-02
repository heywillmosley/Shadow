<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * Pilot Footer
 */
 
// --------------------------------------------------------------------------------?>

<h2>Backup Your Site</h2>

<?php

$file = new File;

//$file->backup( ROOT_URI, ROOT_NAME, CORE_URI, TRUE, ROOT_NAME, FW_NAME );


/**
 * this method saves a compressed zip to a defined destination
 * @since 1.1.0
 * return boolean
 */


