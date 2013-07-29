<?php defined('INDEX') or die() and exit(); // Prevents direct script access
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

<body>

<div class="wrapper">
<?php $e = new Environment; $e->environment_notice(); unset( $e ); ?>

<a class="drop-nav-trigger" onClick="toggle_visibility('drop-nav')"></a>
<nav class="actionbar">
	<a class="show-for-small logo" href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a>
    <ul id="drop-nav" class="drop-nav">
        <li class="logo hide-for-small"><a href="<?php echo SITE_URL; ?>"><?php echo SITE_NAME; ?></a></li>
        <li><a href="<?php echo SITE_URL; ?>shop/coffee">Coffee</a></li>
        <li><a href="<?php echo SITE_URL; ?>shop/goodies">Goodies</a></li>
        <li><a href="<?php echo SITE_URL; ?>shop/sales">Sales</a></li>
        <li><a href="<?php echo SITE_URL; ?>wishlist">Wish List</a></li>
        <li><a href="<?php echo SITE_URL; ?>cart">Cart</a></li>
    </ul>
</nav><!-- end action-bar -->