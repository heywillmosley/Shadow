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
    	<h1>Welcome</h1>
        <p>King Bio manufactures SafeCareRx Natural Medicines. King Bio was established in 1989 as a registered pharmaceutical manufacturing company with the Food and Drug Administration (FDA) and operates in strict accordance with all current Good Manufacturing Practices. Each 
SafeCareRx remedy is an FDA-listed homeopathic drug product with a National Drug Code number assigned to it. As a physician based company, King Bio blends its vast clinical experiences in natural health care with cutting edge pharmaceutical manufacturing skills to provide you with the best in natural health care.</p>
		<h2>For Professional Use Only</h2>
        <p>SafeCareRx offers a line of high potency professional products designed to equip the health care practitioner to discover and discern precise natural solutions for the common chronic, resistant, recurring and unresolved health conditions perplexing our society. With ongoing training to help keep the practitioner on pace with this fast growing science, SafeCareRX is leading the way for practitioners of all disciplines.</p>
        <h3>Start enhancing your health today by taking the SafeCareRx Mind & Body Personal Health Appraisal!</h3>
        <a href="#" class="button">Download Here</a>
        <h2>Why Use SafeCareRx?</h2>
        <h3>Patients</h3>
        <p>If you are a patient and would like to learn more about. how <?php echo SITE_NAME; ?> and your doctor can help you. <a href="#">Click here</a></p>
    </div><!-- end small-12 columns -->
</div><!-- end row -->


<?php 
# includes footer.php
app_footer();

