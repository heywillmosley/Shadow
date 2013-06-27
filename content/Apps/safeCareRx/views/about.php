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
<div class="row">
	<div class="small-12 columns">
		<h1>The King Bio Mission</h1>
        <ul>
        	<li>To lead the way in professional cutting edge products and procedures</li>
            <li>To provide safe, more corrective and curative all natural medicines with no side effects and no negative drug interactions.</li>
            <li>To provide new diagnostic procedures to greater empower the physician to better resolve the chronic recurring and resistant problems plaquing our society.</li>
            <li>To offer more effective and affordable health care solutions.</li>
            <li>To empower the physician with the most effective educational tools to attain optimal health.</li>
            <li>To achieve your utmost respect in product quality and services.</li>
        </ul>
        <h1>Premise</h1>
        <p>That all people are designed to be healthy and are equipped to overcome disease. Our focus is to equip people with the tools to overcome disease.</p>
        <h1>Values</h1>
        <ul>
        	<li>To love and care for the sick and suffering.</li>
            <li>To continually seek and search for the most effective health care solutions.</li>
            <li>To serve with honesty, integrity and purity of intent.</li>
            <li>To care enough to make the sacrifices necessary to most positively impact our world.</li>
        </ul>
    </div><!-- end small-12 columns -->
</div><!-- end row -->


<?php 
# includes footer.php
app_footer();

