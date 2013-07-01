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
<section id="hero">
	<div class="bottles">
    	<img class="bottle1" src="<?php echo APP_IMG_URL.'RX-Attention-Learning-Ehancement.png'; ?>" />
        <img class="bottle2" src="<?php echo APP_IMG_URL.'RX-Fatigue Reliever.png'; ?>" />
        <img class="bottle3" src="<?php echo APP_IMG_URL.'RX-Anti-Aging-Wrinkles.png'; ?>" />
    </div><!-- end bottles -->
	<div class="content">
    	<div class="headline">Precise Homeopathic Medicine For Your Patients.</div>
        <p class="prs mbn">Discover how safe, cutting-edge medicines grow your practice. </p>
        <a href="#" class="large info button mtm">Our Medicine</a>
    </div><!-- end content -->
</section><!-- hero -->
<section id="medicine-bg">
	<img src="<?php echo APP_IMG_URL.'stock-photo-21983736-homeopathist-and-her-patient.jpg'; ?>" />
</section>
<div id="sideeffects">Medicine without side effects</div>
<section id="medicine">
	<h1>View all of our products</h1>
</section>


<?php 
# includes footer.php
app_footer();

