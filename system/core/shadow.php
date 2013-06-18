<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Shadow Framework
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		Shadow
 * @author		Super Amazing
 * @copyright	Copyright (c) 2013, Super Amazing
 * @license		http://shadow.superamazing.com/user_guide/license.html
 * @link		http://shadow.superamazing.com
 * @since		Version 1.0
 * @filesource
 */

/**
 * Shadow Version
 *
 * @var string
 *
 */
	define('SW_VERSION', '1.1.5');
	
?>

<!-- Load Stylesheets -->
	<link rel="stylesheet" href="<?php echo BASEPATH; ?>css/all.css" type="text/css" media="screen" />
	
	<!-- Load Google Fonts -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Federo|Titillium+Web:300" type="text/css" media="screen" />
	
	<!-- Load Javascripts -->
	<script src="<?php echo BASEPATH; ?>js/vendor/jquery.js"></script>
	<script src="<?php echo BASEPATH; ?>js/vendor/custom.modernizr.js"></script>
	<script src="<?php echo BASEPATH; ?>js/vendor/response.js"></script>
	
	<div class="sw_wrapper pas">
		<header class="shadow-header">
			<div class="row">
				<div class="twelve columns">
					<h1>Shadow</h1>
				</div><!-- end twelve columns -->
			</div>
		</header><!-- end shadow-header -->

<?php
	
/*
 * ------------------------------------------------------
 *  Load the global functions
 * ------------------------------------------------------
 */
	require(BASEPATH.'core/common.php');

/*
 * ------------------------------------------------------
 *  Load the framework constants
 * ------------------------------------------------------
 */
	if (defined('ENVIRONMENT') AND file_exists(APPPATH.'config/'.ENVIRONMENT.'/constants.php'))
	{
		require(APPPATH.'config/'.ENVIRONMENT.'/constants.php');
	}
	else
	{
		require(APPPATH.'config/constants.php');
	}

