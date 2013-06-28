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
		<h1>A Contemporary Approach</h1>
        <p>SafeCareRx formulas are uniquely created to meet the needs of today’s more complex and elusive healthcare problems. Due to the dramatic changes in disease patterns and our environment, the effective answers SafeCareRx formulas offer are in great demand to meet today’s health needs. These formulations are designed for the majority of health problems you see in contemporary practice.</p>
        <p>SafeCareRx M&B Remedies are designed to be an exceptional compliment to any other therapies, programs or medications. They are also designed to provide a higher percentage of results for the cure and corrections of perplexing physical, mental and emotional issues which sabotage our highest expressions of life. These formulas correct, restore, and enhance mental and emotional health on all levels, from brain biochemistry and neurotransmitter functioning to the deepest emotions, memories, and innate needs of our inner-self.</p>
        <h1>Contemporary Homeopathic Enhancement Systems & Solutions</h1>
        <p>C.H.E.S.S.™ is an uncomplicated, complete, turn-key procedural system that can be effectively implemented overnight for a broad-scoped, high-volume practice. This empowering program will provide you with everything you will need from products to procedures. The C.H.E.S.S.™ is about more effectively helping more people.</p>
        <h1>Downloadable Forms</h1>
        <a href="#" class="button">Personal Health Appraisal with Mind-Body PDF</a>
        <a href="#" class="button">Personal Health History PDF</a>
        <a href="#" class="button">Test Control Worksheet PDF</a>
        <a href="#" class="button">Inventory Control Form PDF</a>
    </div><!-- end small-12 columns -->
</div><!-- end row -->


<?php 
# includes footer.php
app_footer();

