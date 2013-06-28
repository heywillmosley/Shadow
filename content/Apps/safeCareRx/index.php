<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../../../../system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * Home page template
 */
 
// --------------------------------------------------------------------------------

# includes header.php
app_header();  
?>

<section class="site-background" style="
	background: url(<?php echo APP_IMG_URL . 'stock-photo-21983736-homeopathist-and-her-patient.jpg'; ?>) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;"></section>
<div class="main-content">
    <div class="row">
    	<div class="small-6 columns">
        	<img class="right" src="<?php echo APP_IMG_URL.'RX-Attention-Learning-Ehancement.png'; ?>" />
        </div><!-- end small-6 columns -->
        <div class="small-6 columns">
            <div class="headline">Leader in Homeopathics</div>
            <ul class="side-nav main-nav">
        	<li><a href="<?php echo SITE_URL; ?>"><img class="pas w200" src="<?php echo APP_IMG_URL.'safecarerx-logo.png'; ?>" alt="Go Home" /></a></li>
            <li><a href="<?php echo SITE_URL.'homeopathy'; ?>">About Homeopathy</a></li>
            <li><a href="<?php echo SITE_URL.'safecarerx-medicine'; ?>">SafeCareRx + Medicine</a></li>
            <li><a href="<?php echo SITE_URL.'products'; ?>">Our Products</a></li>
            <li><a href="<?php echo SITE_URL.'products'; ?>">Clinical Studies</a></li>
            <li><a href="<?php echo SITE_URL.'manuals'; ?>">Manuals & Guides</a></li>
            <li><a href="<?php echo SITE_URL.'other-services'; ?>">Other Services</a></li>
            <li><a href="<?php echo SITE_URL.'contact'; ?>">Contact</a></li>
            <li><a href="<?php echo SITE_URL.'start'; ?>" class="primary button w200">Become a Provider</a></li>
        </ul>
        </div><!-- end small-12 columns -->
    </div><!-- end row -->
</div><!-- end main content 


<?php 
# includes footer.php
app_footer();

